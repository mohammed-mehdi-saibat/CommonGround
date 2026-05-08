<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use App\Models\Payment;
use Illuminate\Http\Request;
use Stripe\Stripe;
use Stripe\Checkout\Session;
use Stripe\Webhook;
use Stripe\Exception\SignatureVerificationException;

class PaymentController extends Controller

{
    public function checkout(Booking $booking)
    {
        $this->authorize('view', $booking);

        abort_if($booking->status !== 'pending', 403);
        abort_if($booking->payment?->status === 'paid', 403);

        Stripe::setApiKey(config('services.stripe.secret'));

        $session = Session::create([
            'payment_method_types' => ['card'],
            'line_items' => [[
                'price_data' => [
                    'currency'     => 'usd',
                    'unit_amount'  => (int) round($booking->total_amount * 100),
                    'product_data' => [
                        'name' => 'Booking #' . $booking->reference_number,
                    ],
                ],
                'quantity' => 1,
            ]],
            'mode'        => 'payment',
            'success_url' => route('guest.bookings.payment.success', $booking),
            'cancel_url'  => route('guest.bookings.show', $booking),
            'metadata'    => ['booking_id' => $booking->id],
        ]);

        Payment::updateOrCreate(
            ['booking_id' => $booking->id],
            [
                'stripe_session_id' => $session->id,
                'status'            => 'pending',
                'amount'            => $booking->total_amount,
                'currency'          => 'usd',
            ]
        );

        return redirect($session->url);
    }

    public function success(Booking $booking)
    {
        $payment = $booking->payment;

        if ($payment && $payment->status !== 'paid') {
            Stripe::setApiKey(config('services.stripe.secret'));
            
            try {
                $session = Session::retrieve($payment->stripe_session_id);
                
                if ($session->payment_status === 'paid') {
                    $payment->update([
                        'status' => 'paid',
                        'stripe_payment_intent' => $session->payment_intent,
                    ]);

                    $booking->update(['status' => 'confirmed']);
                }
            } catch (\Exception $e) {
                // Silently fail and rely on webhook if retrieval fails
            }
        }

        return redirect()->route('guest.bookings.show', $booking)
            ->with('success', 'Payment successful! Your booking is confirmed.');
    }

    public function webhook(Request $request)
    {
        $payload = $request->getContent();
        $sigHeader = $request->header('Stripe-Signature');

        try {
            $event = Webhook::constructEvent(
                $payload,
                $sigHeader,
                config('services.stripe.webhook_secret')
            );
        } catch (SignatureVerificationException $e) {
            return response('Invalid signature', 400);
        }

        if ($event->type === 'checkout.session.completed') {
            $session = $event->data->object;

            $payment = Payment::where('stripe_session_id', $session->id)->first();

            if ($payment) {
                $payment->update([
                    'status'                => 'paid',
                    'stripe_payment_intent' => $session->payment_intent,
                ]);

                $payment->booking->update(['status' => 'confirmed']);
            }
        }

        return response('OK', 200);
    }
}

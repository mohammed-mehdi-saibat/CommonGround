<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Invoice #{{ $booking->reference_number }}</title>
    <style>
        body {
            font-family: 'Helvetica', sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 100%;
            margin: 0 auto;
        }
        .header {
            border-bottom: 2px solid #0ea5e9;
            padding-bottom: 20px;
            margin-bottom: 30px;
        }
        .header h1 {
            color: #0ea5e9;
            margin: 0;
            font-size: 28px;
        }
        .header-info {
            float: right;
            text-align: right;
        }
        .section-title {
            font-size: 18px;
            font-weight: bold;
            color: #334155;
            margin-bottom: 15px;
            border-left: 4px solid #0ea5e9;
            padding-left: 10px;
        }
        .info-grid {
            width: 100%;
            margin-bottom: 30px;
            background-color: #f0f9ff;
            padding: 15px;
            border-radius: 8px;
        }
        .info-grid td {
            padding: 5px;
        }
        .label {
            font-size: 12px;
            text-transform: uppercase;
            color: #0369a1;
            font-weight: bold;
        }
        .value {
            font-size: 16px;
            font-weight: bold;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 30px;
        }
        th {
            background-color: #f8fafc;
            text-align: left;
            padding: 12px;
            font-size: 12px;
            text-transform: uppercase;
            color: #64748b;
            border-bottom: 1px solid #e2e8f0;
        }
        td {
            padding: 12px;
            border-bottom: 1px solid #e2e8f0;
            font-size: 14px;
        }
        .text-right {
            text-align: right;
        }
        .total-section {
            text-align: right;
            margin-top: 20px;
        }
        .total-label {
            font-size: 14px;
            color: #64748b;
        }
        .total-amount {
            font-size: 24px;
            font-weight: bold;
            color: #10b981;
        }
        .footer {
            margin-top: 50px;
            text-align: center;
            font-size: 12px;
            color: #94a3b8;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <div class="header-info">
                <p><strong>Date:</strong> {{ $booking->booking_date ? $booking->booking_date->format('M d, Y') : now()->format('M d, Y') }}</p>
                <p><strong>Reference:</strong> {{ $booking->reference_number }}</p>
            </div>
            <h1>COMMONGROUND</h1>
            <p>Your Beachside Home</p>
        </div>

        <div class="section-title">Guest Information</div>
        <div class="info-grid">
            <table width="100%">
                <tr>
                    <td width="50%">
                        <span class="label">Guest Name</span><br>
                        <span class="value">{{ $booking->user->name }}</span>
                    </td>
                    <td width="50%">
                        <span class="label">Email Address</span><br>
                        <span class="value">{{ $booking->user->email }}</span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="section-title">Stay Itinerary</div>
        <div class="info-grid">
            <table width="100%">
                <tr>
                    <td width="50%">
                        <span class="label">Check-in</span><br>
                        <span class="value">{{ $booking->bookingItems->first()->check_in->format('M d, Y') }}</span>
                    </td>
                    <td width="50%">
                        <span class="label">Check-out</span><br>
                        <span class="value">{{ $booking->bookingItems->last()->check_out->format('M d, Y') }}</span>
                    </td>
                </tr>
            </table>
        </div>

        <div class="section-title">Accommodation Details</div>
        <table>
            <thead>
                <tr>
                    <th>Bed</th>
                    <th>Dorm / Category</th>
                    <th class="text-right">Price per Night</th>
                    <th class="text-right">Subtotal</th>
                </tr>
            </thead>
            <tbody>
                @foreach($booking->bookingItems as $item)
                    <tr>
                        <td>Bed #{{ $item->bed->bed_number }}</td>
                        <td>{{ $item->bed->dorm->name }} / {{ $item->bed->dorm->category->name }}</td>
                        <td class="text-right">${{ number_format($item->price_per_night, 2) }}</td>
                        <td class="text-right">${{ number_format($item->subtotal, 2) }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <div class="total-section">
            <span class="total-label">Total Paid Amount</span><br>
            <span class="total-amount">${{ number_format($booking->total_amount, 2) }}</span>
        </div>

        <div class="footer">
            <p>Thank you for booking with Commonground Hostel!</p>
            <p>123 Palm Tree Lane, Beachside | hello@commonground.com</p>
        </div>
    </div>
</body>
</html>
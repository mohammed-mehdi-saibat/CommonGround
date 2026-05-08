<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Booking Invoice') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm border-t-4 border-t-emerald-500">
                <div class="p-8 text-gray-900">
                    <div class="flex flex-col md:flex-row justify-between items-start mb-8 border-b border-gray-100 pb-6">
                        <div>
                            <h3 class="text-3xl font-bold text-sky-600">Invoice #{{ $booking->id ?? 'N/A' }}</h3>
                            <p class="text-gray-500 mt-1">Issued: {{ isset($booking->created_at) ? $booking->created_at->format('M d, Y') : 'N/A' }}</p>
                        </div>
                        <div class="mt-4 md:mt-0 flex flex-col items-end gap-3">
                            <x-badge class="bg-amber-100 text-amber-800 border border-amber-200 text-sm px-4 py-1">
                                {{ ucfirst($booking->status ?? 'Confirmed') }}
                            </x-badge>
                            <a href="{{ route('guest.bookings.download-invoice', $booking) }}" class="inline-flex items-center gap-2 bg-sky-500 hover:bg-sky-600 text-white px-4 py-2 rounded-md transition-colors text-sm font-bold shadow-sm">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16v1a2 2 0 002 2h12a2 2 0 002-2v-1m-4-4l-4 4m0 0l-4-4m4 4V4"></path></svg>
                                Download PDF
                            </a>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="font-semibold text-xl text-gray-700 mb-4 border-l-4 border-sky-500 pl-3">Stay Itinerary</h4>
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6 bg-sky-50 p-4 rounded-md border border-sky-100">
                            <div>
                                <span class="block text-sm text-sky-700 font-medium uppercase">Check-in Date</span>
                                <span class="block text-lg font-semibold text-gray-900 mt-1">
                                    {{ $booking->bookingItems->first()->check_in->format('M d, Y') ?? 'N/A' }}
                                </span>
                            </div>
                            <div>
                                <span class="block text-sm text-sky-700 font-medium uppercase">Check-out Date</span>
                                <span class="block text-lg font-semibold text-gray-900 mt-1">
                                    {{ $booking->bookingItems->last()->check_out->format('M d, Y') ?? 'N/A' }}
                                </span>
                            </div>
                        </div>
                    </div>

                    <div class="mb-8">
                        <h4 class="font-semibold text-xl text-gray-700 mb-4 border-l-4 border-amber-500 pl-3">Accommodation Details</h4>
                        <div class="bg-white rounded-md border border-gray-200 overflow-hidden">
                            <table class="min-w-full divide-y divide-gray-200">
                                <thead class="bg-gray-50">
                                    <tr>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bed</th>
                                        <th scope="col" class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dorm</th>
                                        <th scope="col" class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Price/Night</th>
                                    </tr>
                                </thead>
                                <tbody class="bg-white divide-y divide-gray-200">
                                    @if(isset($booking->bookingItems) && count($booking->bookingItems) > 0)
                                        @foreach($booking->bookingItems as $item)
                                            <tr>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm font-medium text-gray-900">Bed #{{ $item->bed->bed_number ?? 'N/A' }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ $item->bed->dorm->name ?? 'N/A' }}</td>
                                                <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 text-right">${{ number_format($item->price_per_night ?? 0, 2) }}</td>
                                            </tr>
                                        @endforeach
                                    @else
                                        <tr>
                                            <td colspan="3" class="px-6 py-4 text-center text-gray-500">Bed details are currently unavailable.</td>
                                        </tr>
                                    @endif
                                </tbody>
                            </table>
                        </div>
                    </div>
                    
                    <div class="mt-8 pt-6 border-t border-gray-200 flex flex-col items-end">
                        <div class="text-gray-500 mb-1">Total Amount</div>
                        <div class="text-3xl font-bold text-emerald-600">
                            ${{ number_format($booking->total_amount ?? 0, 2) }}
                        </div>
                        <p class="text-xs text-gray-400 mt-2">Thank you for choosing Summer Hostel!</p>
                    </div>
                </div>
            </x-card>
            <div class="mt-4 text-center">
                <a href="{{ route('guest.bookings.index') ?? '#' }}" class="text-sky-600 hover:text-sky-800 font-medium hover:underline">&larr; Back to My Bookings</a>
            </div>
        </div>
    </div>
</x-app-layout>
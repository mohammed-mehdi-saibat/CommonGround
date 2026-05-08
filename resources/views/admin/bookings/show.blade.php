<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.bookings.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Booking Details #') }}{{ $booking->id }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6 mb-6">
                <div class="flex justify-between items-start">
                    <div>
                        <h3 class="text-2xl font-bold text-sky-800 mb-2">Booking Info</h3>
                        <p class="text-gray-700"><strong>Guest:</strong> {{ $booking->guest->user->name ?? 'N/A' }}</p>
                        <p class="text-gray-700"><strong>Check-in:</strong> {{ $booking->check_in_date }}</p>
                        <p class="text-gray-700"><strong>Check-out:</strong> {{ $booking->check_out_date }}</p>
                        <p class="text-gray-700"><strong>Total Price:</strong> ${{ number_format($booking->total_price, 2) }}</p>
                    </div>
                    <div>
                        <x-badge class="text-lg px-3 py-1 {{ $booking->status == 'confirmed' ? 'bg-emerald-100 text-emerald-800' : ($booking->status == 'pending' ? 'bg-amber-100 text-amber-800' : 'bg-gray-100 text-gray-800') }}">
                            {{ ucfirst($booking->status) }}
                        </x-badge>
                    </div>
                </div>
            </x-card>

            <h3 class="text-xl font-bold text-sky-800 mb-4 mt-8">Reserved Beds</h3>
            <x-card class="p-6">
                <table class="min-w-full divide-y divide-gray-200">
                    <thead>
                        <tr>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Bed</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Dorm</th>
                            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Price/Night</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-gray-200">
                        @foreach ($booking->bookingItems ?? [] as $item)
                            <tr>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->bed->bed_number ?? 'N/A' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">{{ $item->bed->dorm->name ?? 'N/A' }}</td>
                                <td class="px-6 py-4 whitespace-nowrap">${{ number_format($item->price, 2) }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </x-card>
        </div>
    </div>
</x-app-layout>
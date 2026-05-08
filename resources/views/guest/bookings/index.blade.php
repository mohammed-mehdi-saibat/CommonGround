<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('My Bookings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="mb-6 flex justify-end">
                <a href="{{ route('guest.bookings.create') ?? '#' }}">
                    <x-button class="bg-amber-500 hover:bg-amber-600 focus:bg-amber-600 active:bg-amber-700">
                        + {{ __('New Booking') }}
                    </x-button>
                </a>
            </div>
            
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    @if(isset($bookings) && $bookings->count() > 0)
                        <div class="space-y-4">
                            @foreach($bookings as $booking)
                                <x-card class="rounded-md border border-gray-100 flex flex-col sm:flex-row justify-between items-center p-4">
                                    <div class="mb-4 sm:mb-0">
                                        <div class="font-bold text-lg text-sky-700">Booking #{{ $booking->id }}</div>
                                        <div class="text-gray-600 text-sm mt-1">
                                            <span class="font-medium text-gray-800">Check-in:</span> {{ $booking->start_date }} 
                                            | 
                                            <span class="font-medium text-gray-800">Check-out:</span> {{ $booking->end_date }}
                                        </div>
                                    </div>
                                    <div class="flex items-center space-x-4">
                                        <x-badge class="bg-emerald-100 text-emerald-800 border border-emerald-200">
                                            {{ ucfirst($booking->status ?? 'confirmed') }}
                                        </x-badge>
                                        <a href="{{ route('guest.bookings.show', $booking) ?? '#' }}" class="text-sky-500 hover:text-sky-700 font-semibold hover:underline">
                                            View Details
                                        </a>
                                    </div>
                                </x-card>
                            @endforeach
                        </div>
                    @else
                        <div class="text-center py-8">
                            <p class="text-gray-500 text-lg mb-4">You have no upcoming or past bookings yet.</p>
                            <a href="{{ route('guest.bookings.create') ?? '#' }}">
                                <x-button class="bg-sky-500 hover:bg-sky-600">Explore Beds</x-button>
                            </a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
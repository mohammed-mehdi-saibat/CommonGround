<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between w-full">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.guests.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Guest Details') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6 mb-6">
                <h3 class="text-2xl font-bold text-sky-800 mb-2">{{ $guest->user->name ?? $guest->name }}</h3>
                <p class="text-gray-700">Email: {{ $guest->user->email ?? $guest->email }}</p>
                <p class="text-gray-700">Phone: {{ $guest->phone_number ?? 'N/A' }}</p>
                <p class="text-gray-700">Nationality: {{ $guest->nationality ?? 'N/A' }}</p>
            </x-card>

            <h3 class="text-xl font-bold text-sky-800 mb-4 mt-8">Booking History</h3>
            <x-card class="p-6">
                <ul class="divide-y divide-gray-200">
                    @forelse($guest->bookings ?? [] as $booking)
                        <li class="py-4 flex justify-between">
                            <div>
                                <span class="font-semibold text-gray-800">Booking #{{ $booking->id }}</span> - 
                                <span class="text-gray-500">{{ $booking->check_in_date }} to {{ $booking->check_out_date }}</span>
                            </div>
                            <div>
                                <a href="{{ route('admin.bookings.show', $booking) }}" class="text-sky-600 hover:text-sky-900">View Booking</a>
                            </div>
                        </li>
                    @empty
                        <li class="py-4 text-gray-500">No bookings found for this guest.</li>
                    @endforelse
                </ul>
            </x-card>
        </div>
    </div>
</x-app-layout>
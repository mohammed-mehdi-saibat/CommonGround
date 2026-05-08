<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.beds.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Bed Details') }}</span>
            </h2>
            <a href="{{ route('admin.beds.edit', $bed) }}">
                <x-button class="bg-amber-500 hover:bg-amber-600 text-white shadow-sm">Edit Bed</x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6">
                <div class="flex items-center justify-between">
                    <h3 class="text-2xl font-bold text-sky-800">Bed {{ $bed->bed_number }}</h3>
                    <x-badge class="{{ $bed->is_functional ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                        {{ $bed->is_functional ? 'Functional' : 'Maintenance' }}
                    </x-badge>
                </div>
                <p class="text-gray-700 mt-4">Dorm: <span class="font-semibold">{{ $bed->dorm->name ?? 'N/A' }}</span></p>
                <p class="text-gray-700">Category: <span class="font-semibold">{{ $bed->dorm->category->name ?? 'N/A' }}</span></p>
                
                <!-- Could list current/future bookings for this bed here -->
            </x-card>
        </div>
    </div>
</x-app-layout>
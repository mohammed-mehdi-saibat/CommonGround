<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.dorms.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Dorm Details') }}</span>
            </h2>
            <a href="{{ route('admin.dorms.edit', $dorm) }}">
                <x-button class="bg-amber-500 hover:bg-amber-600 text-white shadow-sm">Edit Dorm</x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6">
                <h3 class="text-2xl font-bold text-sky-800 mb-2">{{ $dorm->name }}</h3>
                <p class="text-gray-700 mb-4">Category: <span class="font-semibold">{{ $dorm->category->name ?? 'N/A' }}</span></p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Beds in this Dorm</h4>
                <div class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-6 gap-4">
                    @forelse($dorm->beds ?? [] as $bed)
                        <div class="p-4 border rounded-lg text-center {{ $bed->is_functional ? 'bg-emerald-50 border-emerald-200' : 'bg-red-50 border-red-200' }}">
                            <div class="text-lg font-bold text-gray-700">{{ $bed->bed_number }}</div>
                            <x-badge class="{{ $bed->is_functional ? 'bg-emerald-100 text-emerald-800' : 'bg-red-100 text-red-800' }}">
                                {{ $bed->is_functional ? 'Functional' : 'Maintenance' }}
                            </x-badge>
                        </div>
                    @empty
                        <div class="col-span-full text-gray-500">No beds currently in this dorm.</div>
                    @endforelse
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
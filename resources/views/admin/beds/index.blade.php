<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-slate-800 leading-tight">
            {{ __('Beds') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="mb-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 italic">Bed Inventory</h2>
                    <p class="text-slate-500 font-medium mt-1">Monitor individual bed status and functional maintenance.</p>
                </div>
                <a href="{{ route('admin.beds.create') }}">
                    <x-button variant="primary" class="!px-8 !py-4 shadow-lg shadow-sky-500/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Add New Bed
                    </x-button>
                </a>
            </div>

            <!-- Beds List -->
            <x-card class="!p-0 border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Bed</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Location</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Notes</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Condition</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($beds ?? [] as $bed)
                                <tr class="hover:bg-sky-50/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-sky-100 text-sky-600 rounded-xl flex items-center justify-center font-black text-xl">
                                                {{ $bed->bed_number }}
                                            </div>
                                            <div>
                                                <div class="font-black text-slate-800 uppercase tracking-tighter">Bed #{{ $bed->bed_number }}</div>
                                                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">ID: #{{ str_pad($bed->id, 4, '0', STR_PAD_LEFT) }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-sky-700 font-black text-lg">{{ $bed->dorm->name ?? 'N/A' }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">{{ $bed->dorm->category->name ?? 'N/A' }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-slate-600 font-medium max-w-[200px] truncate italic">
                                            {{ $bed->notes ?: 'No specific notes' }}
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        @if($bed->is_functional)
                                            <x-badge class="bg-emerald-100 text-emerald-600 border border-emerald-200">Functional</x-badge>
                                        @else
                                            <x-badge class="bg-amber-100 text-amber-600 border border-amber-200">Maintenance</x-badge>
                                        @endif
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('admin.beds.show', $bed) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-sky-500 hover:border-sky-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            </a>
                                            <a href="{{ route('admin.beds.edit', $bed) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-amber-500 hover:border-amber-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-slate-800 leading-tight">
            {{ __('Dorm Categories') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="mb-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 italic">Dorm Categories</h2>
                    <p class="text-slate-500 font-medium mt-1">Configure room types, pricing, and specific amenities.</p>
                </div>
                <a href="{{ route('admin.categories.create') }}">
                    <x-button variant="primary" class="!px-8 !py-4 shadow-lg shadow-sky-500/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"></path></svg>
                        Add New Category
                    </x-button>
                </a>
            </div>

            <!-- Categories List -->
            <x-card class="!p-0 border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Category Name</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Base Pricing</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Gender Type</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Amenities</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($categories ?? [] as $category)
                                <tr class="hover:bg-sky-50/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="font-black text-slate-800 text-lg">{{ $category->name }}</div>
                                        <div class="text-xs font-medium text-slate-400 max-w-[250px] truncate mt-0.5">{{ $category->description }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-emerald-600 font-black text-lg">{{ number_format($category->base_price, 2) }} <span class="text-xs text-slate-400 uppercase">{{ $category->currency }}</span></div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Per Night</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black bg-slate-100 text-slate-600 uppercase tracking-tighter">
                                            {{ ucfirst(str_replace('_', ' ', $category->gender_type)) }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="flex flex-wrap gap-1.5">
                                            @if($category->is_ensuite) 
                                                <span class="px-2 py-0.5 bg-sky-50 text-sky-600 text-[10px] font-black uppercase rounded-md border border-sky-100">Ensuite</span> 
                                            @endif
                                            @if($category->has_ac) 
                                                <span class="px-2 py-0.5 bg-sky-50 text-sky-600 text-[10px] font-black uppercase rounded-md border border-sky-100">A/C</span> 
                                            @endif
                                            @if($category->has_lockers) 
                                                <span class="px-2 py-0.5 bg-sky-50 text-sky-600 text-[10px] font-black uppercase rounded-md border border-sky-100">Lockers</span> 
                                            @endif
                                        </div>
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('admin.categories.show', $category) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-sky-500 hover:border-sky-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            </a>
                                            <a href="{{ route('admin.categories.edit', $category) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-amber-500 hover:border-amber-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2-2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
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
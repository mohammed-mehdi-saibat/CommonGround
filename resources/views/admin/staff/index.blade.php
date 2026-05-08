<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Staff Members') }}
        </h2>
    </x-slot>

    <div class="py-12 px-4 sm:px-6 lg:px-8">
        <div class="max-w-7xl mx-auto">
            <!-- Page Header -->
            <div class="mb-10 flex flex-col md:flex-row md:items-center md:justify-between gap-6">
                <div>
                    <h2 class="text-3xl font-black text-slate-800 italic">Staff Roster</h2>
                    <p class="text-slate-500 font-medium mt-1">Manage your team members and their system access.</p>
                </div>
                <a href="{{ route('admin.staff.create') }}">
                    <x-button variant="primary" class="!px-8 !py-4 shadow-lg shadow-sky-500/20">
                        <svg class="w-5 h-5 mr-2" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18 9v3m0 0v3m0-3h3m-3 0h-3m-2-5a4 4 0 11-8 0 4 4 0 018 0zM3 20a6 6 0 0112 0v1H3v-1z"></path></svg>
                        Add Team Member
                    </x-button>
                </a>
            </div>

            <!-- Staff List -->
            <x-card class="!p-0 border border-slate-100 shadow-sm overflow-hidden">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse">
                        <thead>
                            <tr class="bg-slate-50/50 border-b border-slate-100">
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Member</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Contact</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Position</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em]">Status</th>
                                <th class="px-8 py-5 text-xs font-black text-slate-400 uppercase tracking-[0.2em] text-right">Actions</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-50">
                            @foreach ($staff ?? [] as $member)
                                <tr class="hover:bg-sky-50/30 transition-colors group">
                                    <td class="px-8 py-6">
                                        <div class="flex items-center gap-4">
                                            <div class="w-12 h-12 bg-amber-100 text-amber-600 rounded-2xl flex items-center justify-center font-black text-xl">
                                                {{ substr($member->user->name ?? $member->name, 0, 1) }}
                                            </div>
                                            <div>
                                                <div class="font-black text-slate-800 text-lg">{{ $member->user->name ?? $member->name }}</div>
                                                <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">Joined: {{ $member->created_at->format('M Y') }}</div>
                                            </div>
                                        </div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <div class="text-slate-600 font-bold">{{ $member->user->email ?? $member->email }}</div>
                                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest mt-0.5">{{ $member->phone_number ?? 'No phone' }}</div>
                                    </td>
                                    <td class="px-8 py-6">
                                        <span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-black bg-amber-100 text-amber-700 uppercase tracking-tighter">
                                            {{ ucfirst($member->position) }}
                                        </span>
                                    </td>
                                    <td class="px-8 py-6">
                                        @if($member->user && $member->user->is_banned)
                                            <x-badge class="bg-red-100 text-red-600 border border-red-200">Suspended</x-badge>
                                        @else
                                            <x-badge class="bg-emerald-100 text-emerald-600 border border-emerald-200">Active</x-badge>
                                        @endif
                                    </td>
                                    <td class="px-8 py-6 text-right">
                                        <div class="flex items-center justify-end gap-3 opacity-0 group-hover:opacity-100 transition-opacity">
                                            <a href="{{ route('admin.staff.show', $member) }}" class="p-2 bg-white border border-slate-200 text-slate-400 hover:text-sky-500 hover:border-sky-500 rounded-xl transition-all shadow-sm">
                                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M2.458 12C3.732 7.943 7.523 5 12 5c4.478 0 8.268 2.943 9.542 7-1.274 4.057-5.064 7-9.542 7-4.477 0-8.268-2.943-9.542-7z"></path></svg>
                                            </a>
                                            @if($member->user)
                                                @if($member->user->is_banned)
                                                    <form method="POST" action="{{ route('admin.users.unban', $member->user) }}" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="p-2 bg-white border border-slate-200 text-emerald-400 hover:text-emerald-600 hover:border-emerald-600 rounded-xl transition-all shadow-sm" title="Unban">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                                                        </button>
                                                    </form>
                                                @else
                                                    <form method="POST" action="{{ route('admin.users.ban', $member->user) }}" class="inline">
                                                        @csrf
                                                        @method('PATCH')
                                                        <button type="submit" class="p-2 bg-white border border-slate-200 text-red-400 hover:text-red-600 hover:border-red-600 rounded-xl transition-all shadow-sm" title="Ban">
                                                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 18.364A9 9 0 005.636 5.636m12.728 12.728A9 9 0 015.636 5.636m12.728 12.728L5.636 5.636"></path></svg>
                                                        </button>
                                                    </form>
                                                @endif
                                            @endif
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
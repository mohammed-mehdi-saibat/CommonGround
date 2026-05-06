<x-admin-layout>
    <div class="mb-8">
        <div class="flex items-center justify-between">
            <div>
                <h2 class="font-headline-xl text-primary mb-2">Staff Directory</h2>
                <p class="font-body-md text-on-surface-variant">Manage your hostel team, roles, and access levels from a central dashboard.</p>
            </div>
            <a href="{{ route('admin.staff.create') }}" class="flex items-center gap-2 px-4 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold hover:opacity-90 transition-all">
                <span class="material-symbols-outlined">person_add</span>
                Add Staff
            </a>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-primary">
            <p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Total Team</p>
            <p class="text-headline-md font-headline-md text-primary">{{ $staff->total() ?? '24' }}</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-secondary">
            <p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">On Duty</p>
            <p class="text-headline-md font-headline-md text-secondary">{{ $onDutyCount ?? '8' }}</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-gray-400">
            <p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Departments</p>
            <p class="text-headline-md font-headline-md text-on-surface">5 Groups</p>
        </div>
        <div class="bg-white rounded-2xl p-6 shadow-sm border-t-2 border-primary-container">
            <p class="text-label-sm font-label-sm text-gray-500 uppercase mb-1">Growth</p>
            <p class="text-headline-md font-headline-md text-primary-container">+12% MoM</p>
        </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">
        <div class="overflow-x-auto">
            <table class="w-full border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Staff Member</th>
                        <th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Role</th>
                        <th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Email</th>
                        <th class="px-6 py-4 text-left text-label-caps font-label-caps text-gray-500">Status</th>
                        <th class="px-6 py-4 text-right text-label-caps font-label-caps text-gray-500">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-100">
                    @forelse($staff as $member)
                        <tr class="hover:bg-gray-50/50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary">
                                        {{ substr($member->user->name, 0, 2) }}
                                    </div>
                                    <div>
                                        <p class="font-body-md text-body-md font-semibold text-on-surface">{{ $member->user->name }}</p>
                                        <p class="text-label-sm text-gray-500">ID: #CG{{ str_pad($member->id, 3, '0', STR_PAD_LEFT) }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4">
                                <span class="px-3 py-1 text-[11px] font-bold uppercase tracking-wider bg-blue-100 text-blue-800 rounded-full">
                                    {{ $member->position ?? 'Staff' }}
                                </span>
                            </td>
                            <td class="px-6 py-4 font-body-sm text-body-sm text-on-surface-variant">{{ $member->user->email }}</td>
                            <td class="px-6 py-4">
                                <x-status-badge :status="$member->user->is_banned ? 'Banned' : 'Active'" />
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('admin.staff.edit', $member->id) }}" class="p-2 text-gray-400 hover:text-blue-600 hover:bg-blue-50 rounded-lg transition-all">
                                        <span class="material-symbols-outlined text-lg">edit</span>
                                    </a>

                                    @can('delete', $member)
                                        <form method="POST" action="{{ route('admin.staff.destroy', $member->id) }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" onclick="return confirm('Are you sure?')">
                                                <span class="material-symbols-outlined text-lg">delete</span>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="px-6 py-4 text-center text-on-surface-variant">No staff members found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($staff->hasPages())
            <div class="px-6 py-4 bg-gray-50/50 border-t border-gray-100 flex items-center justify-between">
                <p class="text-sm text-gray-500">Showing {{ $staff->firstItem() }}-{{ $staff->lastItem() }} of {{ $staff->total() }} staff members</p>
                <div class="flex gap-2">
                    {{ $staff->links() }}
                </div>
            </div>
        @endif
    </div>
</x-admin-layout>

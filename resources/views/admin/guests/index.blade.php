<x-admin-layout>
    <!-- Header Section -->
    <div class="flex flex-col md:flex-row md:items-end justify-between gap-4 mb-8">
        <div>
            <h2 class="font-headline-xl text-primary mb-1">Guest Master List</h2>
            <p class="font-body-md text-gray-500">Comprehensive overview of all current and past residents.</p>
        </div>
        <div class="flex items-center gap-3">
            <button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl hover:bg-gray-50 transition-all shadow-sm text-sm font-medium">
                <span class="material-symbols-outlined text-sm">filter_list</span>
                Filter
            </button>
            <button class="flex items-center gap-2 px-4 py-2 bg-white border border-gray-200 text-gray-600 rounded-xl hover:bg-gray-50 transition-all shadow-sm text-sm font-medium">
                <span class="material-symbols-outlined text-sm">download</span>
                Export CSV
            </button>
        </div>
    </div>

    <!-- Stats Grid -->
    <div class="grid grid-cols-1 md:grid-cols-4 gap-6 mb-8">
        <div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-primary">
            <p class="text-label-caps text-gray-400 mb-2">Total Guests</p>
            <div class="flex items-center justify-between">
                <h3 class="text-headline-md text-primary">{{ $totalGuests ?? '1,284' }}</h3>
                <span class="text-xs font-bold text-green-600 bg-green-50 px-2 py-1 rounded-full">+12%</span>
            </div>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-primary-container">
            <p class="text-label-caps text-gray-400 mb-2">Active Stays</p>
            <h3 class="text-headline-md text-primary-container">{{ $activeStays ?? '42' }}</h3>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-secondary">
            <p class="text-label-caps text-gray-400 mb-2">Check-ins Today</p>
            <h3 class="text-headline-md text-secondary">{{ $checkInsToday ?? '8' }}</h3>
        </div>
        <div class="bg-white p-6 rounded-2xl shadow-sm border-t-2 border-outline">
            <p class="text-label-caps text-gray-400 mb-2">Check-outs Today</p>
            <h3 class="text-headline-md text-on-surface-variant">{{ $checkOutsToday ?? '5' }}</h3>
        </div>
    </div>

    <!-- Data Table -->
    <div class="bg-white rounded-2xl shadow-sm overflow-hidden border border-gray-100">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse">
                <thead>
                    <tr class="bg-gray-50/50 border-b border-gray-100">
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Guest Name</th>
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Check-in Date</th>
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Check-out Date</th>
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Status</th>
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold">Room Assignment</th>
                        <th class="px-6 py-4 text-label-caps text-gray-500 font-bold text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-50">
                    @forelse($guests as $guest)
                        <tr class="hover:bg-gray-50 transition-colors group">
                            <td class="px-6 py-4">
                                <div class="flex items-center gap-3">
                                    <div class="w-10 h-10 rounded-full bg-primary/10 flex items-center justify-center font-bold text-primary">
                                        {{ substr($guest->user->name, 0, 2) }}
                                    </div>
                                    <div>
                                        <p class="font-semibold text-primary">{{ $guest->user->name }}</p>
                                        <p class="text-xs text-gray-400">{{ $guest->user->email }}</p>
                                    </div>
                                </div>
                            </td>
                            <td class="px-6 py-4 text-body-sm text-gray-600 font-medium">N/A</td>
                            <td class="px-6 py-4 text-body-sm text-gray-600 font-medium">N/A</td>
                            <td class="px-6 py-4">
                                <x-status-badge :status="$guest->user->is_banned ? 'Banned' : 'Active'" />
                            </td>
                            <td class="px-6 py-4">
                                <span class="text-body-sm text-gray-600">N/A</span>
                            </td>
                            <td class="px-6 py-4 text-right">
                                <div class="flex items-center justify-end gap-2 opacity-0 group-hover:opacity-100 transition-opacity">
                                    <a href="{{ route('admin.guests.show', $guest->id) }}" class="p-2 text-gray-400 hover:text-primary hover:bg-primary/10 rounded-lg transition-all" title="View">
                                        <span class="material-symbols-outlined">visibility</span>
                                    </a>

                                    @can('delete', $guest)
                                        <form method="POST" action="{{ route('admin.guests.destroy', $guest->id) }}" class="inline">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="p-2 text-gray-400 hover:text-red-600 hover:bg-red-50 rounded-lg transition-all" title="Delete" onclick="return confirm('Are you sure?')">
                                                <span class="material-symbols-outlined">delete</span>
                                            </button>
                                        </form>
                                    @endcan
                                </div>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="px-6 py-4 text-center text-on-surface-variant">No guests found.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        <!-- Pagination -->
        @if($guests->hasPages())
            <div class="px-6 py-4 flex items-center justify-between bg-gray-50/30 border-t border-gray-100">
                <p class="text-sm text-gray-500">Showing {{ $guests->firstItem() }} to {{ $guests->lastItem() }} of {{ $guests->total() }} guests</p>
                <div class="flex items-center gap-2">
                    {{ $guests->links() }}
                </div>
            </div>
        @endif
    </div>
</x-admin-layout>

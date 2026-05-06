<x-admin-layout>
    <!-- Welcome Header -->
    <header class="mb-10">
        <h2 class="font-headline-xl text-primary mb-2">Operations Overview</h2>
        <p class="font-body-md text-on-surface-variant opacity-80">Welcome back, {{ auth()->user()->name }}. Here is what's happening at CommonGround today.</p>
    </header>

    <!-- Stats Bento Grid -->
    <div class="grid grid-cols-12 gap-6 mb-8">
        <!-- Beds Occupied -->
        <div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-primary">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-primary/10 rounded-xl">
                    <span class="material-symbols-outlined text-primary">bed</span>
                </div>
                <span class="text-label-caps text-primary bg-primary-fixed/30 px-2 py-1 rounded-full">Live Data</span>
            </div>
            <h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Beds Occupied</h3>
            <div class="flex items-baseline space-x-2">
                <span class="text-headline-lg font-bold">{{ $occupiedBeds ?? '88' }}%</span>
                <span class="text-body-sm text-on-surface-variant">{{ $bedsOccupiedCount ?? '176' }}/{{ $totalBeds ?? '200' }}</span>
            </div>
            <div class="w-full bg-gray-100 h-2 rounded-full mt-4">
                <div class="bg-primary h-2 rounded-full" style="width: {{ $occupiedBeds ?? '88' }}%"></div>
            </div>
        </div>

        <!-- Upcoming Check-ins -->
        <div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-secondary">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-secondary/10 rounded-xl">
                    <span class="material-symbols-outlined text-secondary">login</span>
                </div>
                <span class="text-label-caps text-secondary bg-secondary-container/30 px-2 py-1 rounded-full">Next 24h</span>
            </div>
            <h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Upcoming Check-ins</h3>
            <div class="flex items-baseline space-x-2">
                <span class="text-headline-lg font-bold">{{ $checkInsToday ?? '12' }}</span>
                <span class="text-body-sm text-on-surface-variant">{{ $checkInsSoon ?? '4' }} arriving soon</span>
            </div>
        </div>

        <!-- Total Staff -->
        <div class="col-span-12 md:col-span-4 bg-white rounded-2xl shadow-sm p-6 border-t-2 border-primary">
            <div class="flex items-center justify-between mb-4">
                <div class="p-3 bg-primary/10 rounded-xl">
                    <span class="material-symbols-outlined text-primary">badge</span>
                </div>
                <span class="text-label-caps text-primary bg-primary-fixed/30 px-2 py-1 rounded-full">{{ $staffOnDuty ?? '6' }} on duty</span>
            </div>
            <h3 class="text-label-sm text-on-surface-variant font-medium mb-1">Total Staff</h3>
            <div class="flex items-baseline space-x-2">
                <span class="text-headline-lg font-bold">{{ $totalStaff ?? '14' }}</span>
                <span class="text-body-sm text-on-surface-variant">Active roster</span>
            </div>
            <p class="text-label-sm text-on-surface-variant mt-4">Next shift starts in 45 mins (Reception)</p>
        </div>
    </div>

    <!-- Quick Actions -->
    <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mb-8">
        <a href="{{ route('admin.bookings.index') }}" class="bg-primary text-on-primary rounded-2xl p-6 shadow-sm hover:shadow-md transition-all">
            <span class="material-symbols-outlined text-4xl mb-3 block">event</span>
            <h3 class="font-headline-md mb-1">Create Booking</h3>
            <p class="text-sm opacity-90">Add new guest reservation</p>
        </a>

        <a href="{{ route('admin.staff.create') }}" class="bg-secondary text-on-primary rounded-2xl p-6 shadow-sm hover:shadow-md transition-all">
            <span class="material-symbols-outlined text-4xl mb-3 block">person_add</span>
            <h3 class="font-headline-md mb-1">Add Staff</h3>
            <p class="text-sm opacity-90">Hire new team member</p>
        </a>

        <a href="{{ route('admin.dorms.create') }}" class="bg-tertiary text-on-primary rounded-2xl p-6 shadow-sm hover:shadow-md transition-all">
            <span class="material-symbols-outlined text-4xl mb-3 block">add_home</span>
            <h3 class="font-headline-md mb-1">Add Room</h3>
            <p class="text-sm opacity-90">Create new room inventory</p>
        </a>
    </div>

    @stack('dashboard-content')
</x-admin-layout>

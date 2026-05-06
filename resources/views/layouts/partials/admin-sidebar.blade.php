<!-- Admin Sidebar -->
<aside class="fixed left-0 top-0 h-full w-64 border-r border-gray-200 dark:border-gray-800 bg-white dark:bg-gray-900 shadow-sm flex flex-col py-6 z-50">
    <div class="px-6 mb-10">
        <h1 class="text-xl font-bold text-primary dark:text-green-400 tracking-tight">CommonGround</h1>
        <p class="text-label-sm text-on-surface-variant opacity-70">Hostel Management</p>
    </div>

    <nav class="flex-1 space-y-1 px-3">
        <a href="{{ route('dashboard') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('dashboard') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">dashboard</span>
            Dashboard
        </a>

        <a href="{{ route('admin.bookings.index') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('admin.bookings.*') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">calendar_month</span>
            Bookings
        </a>

        <a href="{{ route('admin.dorms.index') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('admin.dorms.*') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">bed</span>
            Rooms
        </a>

        <a href="{{ route('admin.guests.index') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('admin.guests.*') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">group</span>
            Guests
        </a>

        <a href="{{ route('admin.staff.index') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('admin.staff.*') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">badge</span>
            Staff
        </a>

        <a href="{{ route('admin.categories.index') }}" class="flex items-center px-6 py-3 text-gray-500 dark:text-gray-400 hover:bg-gray-50 dark:hover:bg-gray-800 font-medium transition-all duration-200 rounded-lg {{ request()->routeIs('admin.categories.*') ? 'text-primary dark:text-green-400 bg-gray-50 dark:bg-gray-800/50 border-r-4 border-primary' : '' }}">
            <span class="material-symbols-outlined mr-3">settings</span>
            Settings
        </a>
    </nav>

    <div class="px-6 mt-auto">
        <button class="w-full py-2.5 bg-primary text-on-primary rounded-lg font-medium text-sm hover:opacity-90 transition-all active:scale-[0.98]">
            Support Center
        </button>
    </div>
</aside>

<!-- Admin Top Navigation -->
<header class="fixed top-0 right-0 w-[calc(100%-16rem)] border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-sm z-40">
    <div class="flex items-center justify-between px-8 h-16">
        <div class="flex items-center flex-1 max-w-md">
            <div class="relative w-full">
                <span class="material-symbols-outlined absolute left-3 top-1/2 -translate-y-1/2 text-on-surface-variant opacity-60">search</span>
                <input class="w-full bg-surface-container-low border-none rounded-lg pl-10 pr-4 py-2 text-sm focus:ring-2 focus:ring-primary/20 transition-all" placeholder="Search operations..." type="text"/>
            </div>
        </div>

        <div class="flex items-center space-x-6">
            <div class="flex items-center space-x-3">
                <button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
                    <span class="material-symbols-outlined text-gray-600">notifications</span>
                </button>
                <button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
                    <span class="material-symbols-outlined text-gray-600">help</span>
                </button>
                <button class="p-2 hover:bg-gray-50 dark:hover:bg-gray-800 rounded-lg transition-all">
                    <span class="material-symbols-outlined text-gray-600">account_circle</span>
                </button>
            </div>

            <form method="POST" action="{{ route('logout') }}" class="inline">
                @csrf
                <button type="submit" class="px-5 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold active:scale-[0.98] transition-all">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

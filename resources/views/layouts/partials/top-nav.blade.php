<!-- Portal Top Navigation -->
<header class="border-b border-gray-200 dark:border-gray-800 bg-white/80 dark:bg-gray-900/80 backdrop-blur-md shadow-sm sticky top-0 z-40">
    <div class="max-w-7xl mx-auto flex items-center justify-between px-8 h-16">
        <div>
            <h1 class="text-xl font-bold text-primary dark:text-green-400">CommonGround</h1>
        </div>

        <nav class="flex items-center space-x-8">
            <a href="{{ route('dashboard') }}" class="text-gray-600 hover:text-primary transition-colors">Home</a>
            <a href="{{ route('guest.bookings.index') }}" class="text-gray-600 hover:text-primary transition-colors">My Bookings</a>
            <a href="{{ route('profile.edit') }}" class="text-gray-600 hover:text-primary transition-colors">Profile</a>
        </nav>

        <div class="flex items-center space-x-4">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit" class="px-4 py-2 bg-primary text-on-primary rounded-lg text-sm font-bold hover:opacity-90 transition-all">
                    Logout
                </button>
            </form>
        </div>
    </div>
</header>

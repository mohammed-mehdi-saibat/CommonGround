<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Commonground') }} | Authentic Moroccan Riad</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700,800&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased text-slate-900 bg-[#fdf8f1] flex flex-col min-h-screen selection:bg-blue-600/10 selection:text-blue-600">
    
    <!-- Public Navbar -->
    <nav class="bg-white/95 backdrop-blur-xl border-b border-amber-100/50 sticky top-0 z-50 shadow-sm transition-all duration-300">
        <!-- Subtle Zellige Top Border -->
        <div class="h-1.5 w-full bg-blue-600 opacity-90 relative overflow-hidden">
            <div class="absolute inset-0 opacity-[0.2]" style="background-image: url('data:image/svg+xml,%3Csvg width=\"20\" height=\"20\" viewBox=\"0 0 20 20\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M10 0l10 10-10 10L0 10z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
        </div>

        <div class="w-full px-4 sm:px-10 lg:px-16">
            <div class="flex justify-between h-20 sm:h-28">
                <div class="flex items-center">
                    <a href="/" class="flex items-center gap-3 group">
                        <div class="w-10 h-10 bg-blue-600 rounded-t-full flex items-center justify-center shadow-lg shadow-blue-600/20 group-hover:rotate-12 transition-transform duration-500">
                            <svg class="w-6 h-6 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l3.09 8.26h8.91l-7.21 5.24 2.76 8.5-7.55-5.48-7.55 5.48 2.76-8.5-7.21-5.24h8.91z"/>
                            </svg>
                        </div>
                        <span class="text-2xl font-black text-slate-900 tracking-tighter uppercase italic">Common<span class="text-blue-600">ground</span></span>
                    </a>
                </div>
                <div class="hidden md:flex md:items-center md:space-x-12">
                    <a href="/" class="{{ request()->is('/') ? 'text-blue-600' : 'text-slate-500 hover:text-blue-600' }} text-[10px] font-black uppercase tracking-[0.3em] transition-colors relative group">
                        Home
                        <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full {{ request()->is('/') ? 'w-full' : '' }}"></span>
                    </a>
                    <a href="{{ route('faq') }}" class="{{ request()->routeIs('faq') ? 'text-blue-600' : 'text-slate-500 hover:text-blue-600' }} text-[10px] font-black uppercase tracking-[0.3em] transition-colors relative group">
                        Travel FAQ
                        <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full {{ request()->routeIs('faq') ? 'w-full' : '' }}"></span>
                    </a>
                    <a href="{{ route('contact') }}" class="{{ request()->routeIs('contact') ? 'text-blue-600' : 'text-slate-500 hover:text-blue-600' }} text-[10px] font-black uppercase tracking-[0.3em] transition-colors relative group">
                        Contact
                        <span class="absolute -bottom-2 left-0 w-0 h-0.5 bg-blue-600 transition-all duration-300 group-hover:w-full {{ request()->routeIs('contact') ? 'w-full' : '' }}"></span>
                    </a>
                </div>
                <div class="flex items-center space-x-4 sm:space-x-8">
                    @auth
                        <a href="{{ route('dashboard') }}">
                            <x-button variant="outline" class="!px-6 !rounded-2xl !border-blue-600 !text-blue-600 hover:!bg-blue-50">Dashboard</x-button>
                        </a>
                    @else
                        <a href="{{ route('login') }}" class="text-[10px] font-black uppercase tracking-[0.3em] text-slate-500 hover:text-blue-600 hidden sm:block transition-colors">Log in</a>
                        <a href="{{ route('register') }}">
                            <x-button variant="primary" class="!px-8 !py-4 !rounded-2xl shadow-xl shadow-blue-600/20 transform hover:scale-105 transition-all">Book Now</x-button>
                        </a>
                    @endauth
                </div>
            </div>
        </div>
    </nav>

    <!-- Main Content -->
    <main class="flex-grow">
        {{ $slot }}
    </main>

    <!-- Public Footer -->
    <footer class="bg-[#2b2118] text-amber-50/70 py-24 sm:py-32 mt-auto relative overflow-hidden">
        <!-- Zellige Pattern Overlay for Footer -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

        <div class="w-full px-4 sm:px-10 lg:px-16 relative z-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-16 md:gap-32">
                <div class="md:col-span-2">
                    <a href="/" class="flex items-center gap-3 mb-10 group">
                        <div class="w-12 h-12 bg-blue-500 rounded-t-full flex items-center justify-center shadow-lg shadow-blue-500/20">
                            <svg class="w-7 h-7 text-white" fill="currentColor" viewBox="0 0 24 24">
                                <path d="M12 0l3.09 8.26h8.91l-7.21 5.24 2.76 8.5-7.55-5.48-7.55 5.48 2.76-8.5-7.21-5.24h8.91z"/>
                            </svg>
                        </div>
                        <span class="text-3xl font-black text-white tracking-tighter uppercase italic">Common<span class="text-blue-400">ground</span></span>
                    </a>
                    <p class="text-lg leading-relaxed max-w-md font-medium text-amber-50/50 italic mb-10">"Step into a world where hospitality is an art, and every corner tells a story of artisan craft and Moroccan soul."</p>
                    <div class="flex items-center gap-6">
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-orange-600 transition-all group">
                            <span class="sr-only">Instagram</span>
                            <svg class="w-5 h-5 text-amber-50/70 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zm0-2.163c-3.259 0-3.667.014-4.947.072-4.358.2-6.78 2.618-6.98 6.78-.059 1.281-.073 1.689-.073 4.948 0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98 1.281.058 1.689.072 4.948.072 3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.78.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98-1.281-.059-1.69-.073-4.949-.073zm0 5.838c-3.403 0-6.162 2.759-6.162 6.162s2.759 6.163 6.162 6.163 6.162-2.759 6.162-6.163-2.759-6.162-6.162-6.162zm0 10.162c-2.209 0-4-1.79-4-4 0-2.209 1.791-4 4-4s4 1.791 4 4c0 2.21-1.791 4-4 4zm6.406-11.845c-.796 0-1.441.645-1.441 1.44s.645 1.44 1.441 1.44c.795 0 1.439-.645 1.439-1.44s-.644-1.44-1.439-1.44z"/></svg>
                        </a>
                        <a href="#" class="w-10 h-10 rounded-xl bg-white/5 flex items-center justify-center hover:bg-orange-600 transition-all group">
                            <span class="sr-only">Facebook</span>
                            <svg class="w-5 h-5 text-amber-50/70 group-hover:text-white" fill="currentColor" viewBox="0 0 24 24"><path d="M22.675 0h-21.35c-.732 0-1.325.593-1.325 1.325v21.351c0 .731.593 1.324 1.325 1.324h11.495v-9.294h-3.128v-3.622h3.128v-2.671c0-3.1 1.893-4.788 4.659-4.788 1.325 0 2.463.099 2.795.143v3.24l-1.918.001c-1.504 0-1.795.715-1.795 1.763v2.313h3.587l-.467 3.622h-3.12v9.293h6.116c.73 0 1.323-.593 1.323-1.324v-21.35c0-.732-.593-1.325-1.325-1.325z"/></svg>
                        </a>
                    </div>
                </div>
                <div class="grid grid-cols-2 gap-12 sm:gap-24 md:col-span-2">
                    <div>
                        <h4 class="text-[10px] font-black text-amber-400 uppercase tracking-[0.4em] mb-10">Navigation</h4>
                        <ul class="space-y-6">
                            <li><a href="/" class="text-sm font-bold hover:text-blue-400 transition-colors uppercase tracking-widest block">The Experience</a></li>
                            <li><a href="{{ route('faq') }}" class="text-sm font-bold hover:text-blue-400 transition-colors uppercase tracking-widest block">Guest Guide</a></li>
                            <li><a href="{{ route('contact') }}" class="text-sm font-bold hover:text-blue-400 transition-colors uppercase tracking-widest block">Reach Out</a></li>
                            <li><a href="{{ route('login') }}" class="text-sm font-bold hover:text-blue-400 transition-colors uppercase tracking-widest block">Login</a></li>
                        </ul>
                    </div>
                    <div>
                        <h4 class="text-[10px] font-black text-amber-400 uppercase tracking-[0.4em] mb-10">Sanctuary</h4>
                        <ul class="space-y-8">
                            <li class="flex items-start gap-4">
                                <span class="text-orange-500 text-xl leading-none">📍</span>
                                <span class="text-sm font-bold leading-loose">Derb El Qadi, Kasbah,<br>Marrakesh 40000, Morocco</span>
                            </li>
                            <li class="flex items-center gap-4">
                                <span class="text-orange-500 text-xl leading-none">✉️</span>
                                <span class="text-sm font-bold">salam@commonground.ma</span>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 mt-32 pt-12 border-t border-white/5 flex flex-col sm:flex-row justify-between items-center gap-8">
                <p class="text-[9px] font-black uppercase tracking-[0.5em] opacity-30 text-center sm:text-left">
                    &copy; {{ date('Y') }} CommonGround Riad. Handcrafted in the Red City.
                </p>
                <div class="flex gap-12">
                    <a href="#" class="text-[9px] font-black uppercase tracking-[0.3em] opacity-30 hover:opacity-100 transition-opacity">Privacy Policy</a>
                    <a href="#" class="text-[9px] font-black uppercase tracking-[0.3em] opacity-30 hover:opacity-100 transition-opacity">Terms of Service</a>
                </div>
            </div>
        </div>
    </footer>

</body>
</html>

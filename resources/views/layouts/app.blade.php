<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Commonground') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600,700&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased text-slate-900 bg-[#fdf8f1] overflow-hidden">

        
        <div class="flex h-screen w-full bg-[#fdf8f1] relative overflow-hidden">
            
            <!-- FIXED SIDEBAR -->
            <aside class="fixed inset-y-0 left-0 w-64 bg-[#2b2118] text-amber-50/70 z-50 shadow-2xl flex flex-col h-full border-r border-white/5">
                
                <!-- Zellige Pattern Overlay for Sidebar -->
                <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M20 0l20 20-20 20L0 20z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

                <!-- Sidebar Header -->
                <div class="flex items-center justify-center h-24 border-b border-white/5 shrink-0 relative z-10">
                    <a href="{{ url('/') }}" class="flex items-center gap-2 group">
                        <svg class="w-10 h-10 text-blue-500 group-hover:scale-110 transition-transform" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0l3.09 8.26h8.91l-7.21 5.24 2.76 8.5-7.55-5.48-7.55 5.48 2.76-8.5-7.21-5.24h8.91z"/></svg>
                        <span class="text-xl font-black text-white tracking-tighter uppercase italic">Commonground</span>
                    </a>
                </div>

                <!-- Sidebar Links -->
                <nav class="flex-1 px-4 py-8 space-y-3 overflow-y-auto relative z-10">
                    <a href="{{ route('dashboard') }}" class="{{ request()->routeIs('dashboard') || request()->routeIs('admin.dashboard') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                        <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100 transition-opacity" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
                        Dashboard
                    </a>

                    @if(Auth::user()->role === 'admin')
                        <div class="pt-6 pb-2">
                            <p class="px-4 text-[10px] font-black text-amber-400/50 uppercase tracking-[0.3em]">Management</p>
                        </div>
                        <a href="{{ route('admin.categories.index') }}" class="{{ request()->routeIs('admin.categories.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z"></path></svg>
                            Categories
                        </a>
                        <a href="{{ route('admin.dorms.index') }}" class="{{ request()->routeIs('admin.dorms.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            Dorms
                        </a>
                        <a href="{{ route('admin.beds.index') }}" class="{{ request()->routeIs('admin.beds.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                            Beds
                        </a>
                        
                        <div class="pt-6 pb-2">
                            <p class="px-4 text-[10px] font-black text-amber-400/50 uppercase tracking-[0.3em]">People</p>
                        </div>
                        <a href="{{ route('admin.staff.index') }}" class="{{ request()->routeIs('admin.staff.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M21 13.255A23.931 23.931 0 0112 15c-3.183 0-6.22-.62-9-1.745M16 6V4a2 2 0 00-2-2h-4a2 2 0 00-2 2v2m4 6h.01M5 20h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            Staff
                        </a>
                        <a href="{{ route('admin.guests.index') }}" class="{{ request()->routeIs('admin.guests.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 4.354a4 4 0 110 5.292M15 21H3v-1a6 6 0 0112 0v1zm0 0h6v-1a6 6 0 00-9-5.197M13 7a4 4 0 11-8 0 4 4 0 018 0z"></path></svg>
                            Guests
                        </a>
                        
                        <div class="pt-6 pb-2">
                            <p class="px-4 text-[10px] font-black text-amber-400/50 uppercase tracking-[0.3em]">Operations</p>
                        </div>
                        <a href="{{ route('admin.bookings.index') }}" class="{{ request()->routeIs('admin.bookings.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            Bookings
                        </a>
                    @endif
                    @if(Auth::user()->role === 'guest')
                        <a href="{{ route('guest.bookings.index') }}" class="{{ request()->routeIs('guest.bookings.*') ? 'bg-blue-600 text-white shadow-lg shadow-blue-600/20' : 'hover:bg-white/5 hover:text-white' }} flex items-center px-4 py-3.5 rounded-xl transition-all font-bold text-sm tracking-wide whitespace-nowrap group">
                            <svg class="w-5 h-5 mr-3 shrink-0 opacity-70 group-hover:opacity-100" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                            My Bookings
                        </a>
                    @endif
                </nav>

                <!-- Sidebar Footer -->
                <div class="p-6 border-t border-white/5 shrink-0 relative z-10">
                    <a href="{{ url('/') }}" class="flex items-center justify-center gap-2 px-4 py-4 bg-white/5 hover:bg-orange-600 text-white rounded-2xl transition-all font-black text-xs uppercase tracking-widest shadow-inner">
                        <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M10 6H6a2 2 0 00-2 2v10a2 2 0 002 2h10a2 2 0 002-2v-4M14 4h6m0 0v6m0-6L10 14"></path></svg>
                        Visit Website
                    </a>
                </div>
            </aside>

            <!-- MAIN WORKSPACE -->
            <div class="flex-1 flex flex-col min-w-0 pl-64">
                
                <!-- TOPBAR -->
                <header class="bg-white/80 backdrop-blur-md shadow-sm h-24 border-b border-orange-100 flex items-center justify-between px-8 sm:px-12 shrink-0 sticky top-0 z-30">
                    <div class="flex items-center">
                        <!-- Page Title with Vertical Centering -->
                        @isset($header)
                            <div class="flex items-center h-full text-2xl font-black text-slate-900 italic tracking-tight">
                                {{ $header }}
                            </div>
                        @endisset
                    </div>

                    <!-- User Menu -->
                    <div class="flex items-center relative" x-data="{ userMenuOpen: false }" @click.outside="userMenuOpen = false">
                        <button @click="userMenuOpen = !userMenuOpen" class="flex items-center gap-3 px-4 py-2 bg-orange-50 border border-orange-100 rounded-2xl text-sm font-bold text-slate-900 hover:bg-orange-100 transition-colors focus:outline-none shadow-sm">
                            <div class="w-10 h-10 rounded-xl bg-orange-600 text-white flex items-center justify-center font-black shadow-lg shadow-orange-600/20">
                                {{ substr(Auth::user()->name, 0, 1) }}
                            </div>
                            <div class="hidden sm:block font-black uppercase tracking-widest text-xs">{{ Auth::user()->name }}</div>
                            <svg class="h-4 w-4 text-orange-600" fill="currentColor" viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd" />
                            </svg>
                        </button>

                        <div x-show="userMenuOpen" x-transition class="absolute right-0 top-full mt-3 w-56 rounded-[2rem] shadow-2xl origin-top-right z-50 bg-white border border-orange-50 py-3 overflow-hidden" style="display: none;">
                            <a href="{{ route('profile.edit') }}" class="flex items-center gap-3 px-6 py-3 text-sm font-bold text-slate-700 hover:bg-orange-50 transition-colors">
                                <svg class="w-4 h-4 text-orange-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                                Profile Settings
                            </a>
                            <div class="h-px bg-orange-50 my-2"></div>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="w-full flex items-center gap-3 px-6 py-3 text-sm font-bold text-red-600 hover:bg-red-50 transition-colors">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                </header>

                <!-- SCROLLABLE CONTENT AREA -->
                <main class="flex-1 overflow-y-auto w-full p-8 sm:p-12 lg:p-16 bg-[#fdf8f1]">
                    {{ $slot }}
                </main>
            </div>
        </div>

        @if(session('success'))
            <div x-data="{ show: true }" x-show="show" x-init="setTimeout(() => show = false, 3000)" class="fixed bottom-8 right-8 bg-emerald-700 text-white px-8 py-4 rounded-2xl shadow-2xl flex items-center gap-4 z-[100] transition-all transform animate-bounce-short">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"></path></svg>
                <span class="font-black uppercase tracking-widest text-xs">{{ session('success') }}</span>
            </div>
        @endif
    </body>
</html>
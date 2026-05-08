<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <div class="w-12 h-12 bg-blue-600 rounded-t-full flex items-center justify-center shadow-lg shadow-blue-600/20">
                <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"></path></svg>
            </div>
            <h2 class="font-black text-3xl text-slate-900 italic tracking-tight">
                {{ __('Admin Dashboard') }}
            </h2>
        </div>
    </x-slot>

    <div class="space-y-12">
        <!-- Stats Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
            <x-card class="!p-6 border-none shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-blue-50 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:scale-110"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Total Bookings</p>
                        <h3 class="text-4xl font-black text-slate-900 tracking-tighter">{{ $totalBookings ?? 0 }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-blue-600 text-white rounded-2xl flex items-center justify-center shadow-lg shadow-blue-600/30 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                    </div>
                </div>
            </x-card>

            <x-card class="!p-6 border-none shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-orange-50 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:scale-110"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Active Guests</p>
                        <h3 class="text-4xl font-black text-slate-900 tracking-tighter">{{ $activeGuests ?? 0 }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-orange-600 text-white rounded-2xl flex items-center justify-center shadow-lg shadow-orange-600/30 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"></path></svg>
                    </div>
                </div>
            </x-card>

            <x-card class="!p-6 border-none shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-emerald-50 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:scale-110"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Available Beds</p>
                        <h3 class="text-4xl font-black text-slate-900 tracking-tighter">{{ $availableBeds ?? 0 }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-emerald-700 text-white rounded-2xl flex items-center justify-center shadow-lg shadow-emerald-700/30 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 3v4M3 5h4M6 17v4m-2-2h4m5-16l2.286 6.857L21 12l-5.714 2.143L13 21l-2.286-6.857L5 12l5.714-2.143L13 3z"></path></svg>
                    </div>
                </div>
            </x-card>

            <x-card class="!p-6 border-none shadow-xl shadow-slate-200/50 hover:shadow-2xl transition-all duration-500 group relative overflow-hidden">
                <div class="absolute top-0 right-0 w-24 h-24 bg-amber-50 rounded-bl-[4rem] -mr-8 -mt-8 transition-all group-hover:scale-110"></div>
                <div class="relative z-10 flex items-center justify-between">
                    <div>
                        <p class="text-xs font-black text-slate-400 uppercase tracking-[0.2em] mb-2">Total Revenue</p>
                        <h3 class="text-4xl font-black text-slate-900 tracking-tighter">${{ number_format($revenue ?? 0, 2) }}</h3>
                    </div>
                    <div class="w-14 h-14 bg-amber-400 text-amber-900 rounded-2xl flex items-center justify-center shadow-lg shadow-amber-400/30 transform group-hover:rotate-12 transition-transform">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                    </div>
                </div>
            </x-card>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-3 gap-12">
            <!-- Dashboard Hero & Quick Actions -->
            <div class="lg:col-span-2 space-y-12">
                <div class="relative bg-slate-900 rounded-[3rem] overflow-hidden h-96 flex items-center shadow-2xl group">
                    <div class="absolute inset-0">
                        <img src="https://images.unsplash.com/photo-1548013146-72479768bbaa?auto=format&fit=crop&w=1600&q=80" alt="Moroccan Riad" class="w-full h-full object-cover opacity-60 transition-transform duration-1000 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/40 to-transparent"></div>
                    </div>
                    <div class="relative z-10 px-12">
                        <span class="inline-block px-4 py-1.5 bg-blue-600 text-white text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-6 shadow-xl shadow-blue-600/30">Admin Command Center</span>
                        <h2 class="text-5xl font-black text-white mb-6 leading-[1.1] italic">Welcome to <span class="text-blue-400">Commonground</span></h2>
                        <p class="text-slate-200 max-w-lg mb-10 text-lg font-medium leading-relaxed drop-shadow-md">Orchestrate the rhythm of your riad. Manage guests, bookings, and your dedicated staff from one elegant oasis.</p>
                        <div class="flex flex-wrap gap-6">
                            <a href="{{ route('admin.bookings.index') }}">
                                <x-button variant="primary" class="!px-10 !py-5 !rounded-2xl shadow-2xl shadow-blue-600/30 transform hover:scale-105">Manage Bookings</x-button>
                            </a>
                            <a href="{{ route('admin.guests.index') }}">
                                <x-button variant="outline" class="!px-10 !py-5 !rounded-2xl !text-white !border-white/30 hover:!bg-white/10 transform hover:scale-105 transition-all">View Guests</x-button>
                            </a>
                        </div>
                    </div>
                </div>

                <!-- Recent Activity/Stats Placeholder -->
                <x-card class="!p-0 border-none shadow-xl shadow-slate-200/50 overflow-hidden">
                    <div class="px-10 py-8 border-b border-orange-50 flex justify-between items-center bg-white">
                        <h3 class="font-black text-slate-900 uppercase tracking-[0.2em] text-xs">Riad Overview</h3>
                        <span class="flex items-center gap-2 text-[10px] font-black text-emerald-700 uppercase tracking-widest bg-emerald-50 px-4 py-2 rounded-full">
                            <span class="w-2 h-2 bg-emerald-500 rounded-full animate-pulse"></span>
                            Live Monitoring
                        </span>
                    </div>
                    <div class="p-10 grid grid-cols-1 md:grid-cols-3 gap-10">
                        <div class="space-y-3">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Active Shifts</p>
                            <div class="flex items-baseline gap-2">
                                <p class="text-3xl font-black text-slate-900">4</p>
                                <p class="text-sm font-bold text-slate-500 italic">Staff members</p>
                            </div>
                        </div>
                        <div class="space-y-3 md:border-l border-orange-50 md:pl-10">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Occupancy Rate</p>
                            <div class="flex items-baseline gap-2">
                                <p class="text-3xl font-black text-slate-900">82%</p>
                                <div class="w-24 h-2 bg-slate-100 rounded-full overflow-hidden">
                                    <div class="bg-blue-600 h-full w-[82%]"></div>
                                </div>
                            </div>
                        </div>
                        <div class="space-y-3 md:border-l border-orange-50 md:pl-10">
                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em]">Daily Goal</p>
                            <div class="flex items-baseline gap-2">
                                <p class="text-3xl font-black text-blue-600">$1,200</p>
                                <p class="text-[10px] font-black text-emerald-600 bg-emerald-50 px-2 py-0.5 rounded uppercase">+12%</p>
                            </div>
                        </div>
                    </div>
                </x-card>
            </div>

            <!-- Side Panel: Quick Shortcuts -->
            <div class="space-y-10">
                <x-card class="bg-amber-50 border border-amber-100 !p-10 shadow-xl shadow-slate-200/50 relative overflow-hidden">
                    <div class="absolute -right-4 -top-4 w-24 h-24 bg-amber-100/50 rounded-full blur-2xl"></div>
                    <h4 class="text-xl font-black text-amber-900 mb-8 flex items-center gap-4 italic relative z-10">
                        <div class="w-10 h-10 bg-amber-400 rounded-t-full flex items-center justify-center shadow-lg shadow-amber-400/20">
                            <svg class="w-5 h-5 text-amber-900" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                        </div>
                        Quick Shortcuts
                    </h4>
                    <div class="space-y-4 relative z-10">
                        <a href="{{ route('admin.beds.index') }}" class="group flex items-center justify-between p-5 bg-white rounded-2xl border border-amber-100 hover:border-blue-600 hover:shadow-xl transition-all duration-500">
                            <span class="font-black text-slate-700 uppercase tracking-widest text-[10px] group-hover:text-blue-600 transition-colors">Bed Management</span>
                            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                <svg class="w-4 h-4 text-amber-400 group-hover:text-white transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>
                        <a href="{{ route('admin.staff.index') }}" class="group flex items-center justify-between p-5 bg-white rounded-2xl border border-amber-100 hover:border-blue-600 hover:shadow-xl transition-all duration-500">
                            <span class="font-black text-slate-700 uppercase tracking-widest text-[10px] group-hover:text-blue-600 transition-colors">Staff Roster</span>
                            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                <svg class="w-4 h-4 text-amber-400 group-hover:text-white transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>
                        <a href="{{ route('admin.categories.index') }}" class="group flex items-center justify-between p-5 bg-white rounded-2xl border border-amber-100 hover:border-blue-600 hover:shadow-xl transition-all duration-500">
                            <span class="font-black text-slate-700 uppercase tracking-widest text-[10px] group-hover:text-blue-600 transition-colors">Dorm Categories</span>
                            <div class="w-8 h-8 rounded-lg bg-amber-50 flex items-center justify-center group-hover:bg-blue-600 transition-colors">
                                <svg class="w-4 h-4 text-amber-400 group-hover:text-white transform group-hover:translate-x-1 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M9 5l7 7-7 7"></path></svg>
                            </div>
                        </a>
                    </div>
                </x-card>

                <x-card class="bg-blue-600 !p-10 shadow-2xl shadow-blue-600/30 relative overflow-hidden group">
                    <div class="absolute inset-0 opacity-10 pointer-events-none group-hover:scale-110 transition-transform duration-700" style="background-image: url('data:image/svg+xml,%3Csvg width=\"40\" height=\"40\" viewBox=\"0 0 40 40\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M20 0l20 20-20 20L0 20z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
                    <div class="relative z-10">
                        <h4 class="text-xl font-black text-white mb-4 italic">Hostel Pro Tip</h4>
                        <p class="text-blue-100 text-sm font-medium leading-relaxed mb-6">Regularly update bed statuses to ensure maximum occupancy. Happy guests mean happy palm trees! 🌴</p>
                        <div class="w-12 h-1 bg-amber-400 rounded-full"></div>
                    </div>
                </x-card>
            </div>
        </div>
    </div>
</x-app-layout>
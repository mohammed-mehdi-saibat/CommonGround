<x-app-layout>
    <!-- Premium Background Effects -->
    <div class="fixed inset-0 -z-10 bg-[#fdf8f1] overflow-hidden pointer-events-none">
        <div class="absolute -top-[10%] -left-[10%] w-[50%] h-[50%] rounded-full bg-blue-600/5 blur-[120px] animate-pulse"></div>
        <div class="absolute top-[20%] -right-[10%] w-[45%] h-[45%] rounded-full bg-orange-500/5 blur-[100px] animate-pulse" style="animation-delay: 2s;"></div>
        <div class="absolute -bottom-[10%] left-[20%] w-[40%] h-[40%] rounded-full bg-emerald-500/5 blur-[120px] animate-pulse" style="animation-delay: 4s;"></div>
        <div class="absolute inset-0 opacity-[0.015] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%232b5797\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
    </div>

    <div class="w-full mx-auto p-1">
        <!-- Interactive Calendar Container -->
        <div class="relative group">
            <!-- Decorative Glow -->
            <div class="absolute -inset-1 bg-gradient-to-r from-blue-600/10 via-orange-500/10 to-emerald-500/10 rounded-[3rem] blur-2xl opacity-50 group-hover:opacity-100 transition-opacity duration-1000"></div>
            
            <div class="relative bg-white/70 backdrop-blur-3xl rounded-[3rem] border border-white/80 shadow-[0_40px_80px_-15px_rgba(0,0,0,0.08)] overflow-hidden">
                
                <!-- Calendar Header: Teleported Title and Navigation -->
                <div class="flex items-center justify-between px-10 py-8 bg-slate-900">
                    <div class="flex items-center gap-6">
                        <h1 class="text-4xl font-black text-white tracking-tighter italic leading-none">
                            {{ \Carbon\Carbon::createFromDate($currentYear, $currentMonth, 1)->format('F') }}
                            <span class="text-white/40 not-italic ml-2">{{ $currentYear }}</span>
                        </h1>
                    </div>

                    <div class="flex items-center bg-white/10 backdrop-blur-xl rounded-2xl p-1 border border-white/20">
                        <a href="{{ route('guest.dashboard', ['month' => $prevMonth->month, 'year' => $prevMonth->year]) }}" 
                           class="w-10 h-10 flex items-center justify-center text-white hover:bg-white/20 rounded-xl transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"></path></svg>
                        </a>
                        <div class="w-px h-6 bg-white/10 mx-1"></div>
                        <a href="{{ route('guest.dashboard', ['month' => $nextMonth->month, 'year' => $nextMonth->year]) }}" 
                           class="w-10 h-10 flex items-center justify-center text-white hover:bg-white/20 rounded-xl transition-all duration-300">
                            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"></path></svg>
                        </a>
                    </div>
                </div>

                <!-- Weekday Headers -->
                <div class="grid grid-cols-7 border-b border-slate-100 bg-slate-800">
                    @foreach(['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'] as $index => $day)
                        <div class="py-4 text-center">
                            <span class="text-[10px] font-black uppercase tracking-[0.4em] {{ in_array($index, [0, 6]) ? 'text-orange-400' : 'text-slate-400' }}">
                                {{ $day }}
                            </span>
                        </div>
                    @endforeach
                </div>

                <!-- Calendar Grid -->
                <div class="grid grid-cols-7 gap-px bg-slate-100/50">
                    <!-- Offsets -->
                    @for($i = 0; $i < $firstDayOffset; $i++)
                        <div class="bg-slate-50/30 h-24 md:h-28 relative"></div>
                    @endfor

                    <!-- Day Cells -->
                    @foreach($availability as $date => $data)
                        @php
                            $isToday = $date === now()->toDateString();
                            $carbonDate = \Carbon\Carbon::parse($date);
                            $isWeekend = in_array($carbonDate->dayOfWeek, [0, 6]);
                        @endphp
                        <div @if($data['available']) onclick="window.location.href='{{ route('guest.bookings.create', ['date' => $date]) }}'" @endif
                             class="group relative h-24 md:h-28 transition-all duration-500 overflow-hidden
                                    {{ $data['available'] ? 'bg-white cursor-pointer hover:bg-slate-50' : 'bg-slate-200/50 cursor-not-allowed grayscale-[0.5]' }}
                                    {{ $isWeekend && $data['available'] ? 'bg-slate-50/40' : '' }}">
                            
                            <!-- Day Number: Normal Display -->
                            <div class="absolute top-4 left-6">
                                <span class="text-3xl font-black transition-all duration-500 tracking-tighter
                                            {{ $data['is_reserved'] ? 'text-orange-600' : ($isToday ? 'text-blue-600' : ($data['available'] ? 'text-slate-900' : 'text-slate-400')) }}">
                                    {{ $data['day'] }}
                                </span>
                            </div>

                            @if($data['is_reserved'])
                                <!-- Subtle "Your Oasis" indicator -->
                                <div class="absolute bottom-4 left-6">
                                    <div class="flex items-center gap-2">
                                        <div class="w-1.5 h-1.5 rounded-full bg-orange-500"></div>
                                        <span class="text-[8px] font-black text-orange-600 uppercase tracking-widest">Reserved</span>
                                    </div>
                                </div>
                            @endif

                            @if($isToday)
                                <div class="absolute top-4 right-4 w-2 h-2 bg-blue-600 rounded-full"></div>
                            @endif
                        </div>
                    @endforeach
                </div>
            </div>
        </div>

        <!-- Footer Legend -->
        <div class="mt-12 flex justify-center items-center gap-12">
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-emerald-500 shadow-lg shadow-emerald-500/20"></div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Sanctuary Available</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-gradient-to-r from-orange-500 to-rose-500 shadow-lg shadow-orange-500/20"></div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Your Reservation</span>
            </div>
            <div class="flex items-center gap-3">
                <div class="w-3 h-3 rounded-full bg-slate-200"></div>
                <span class="text-[10px] font-black text-slate-500 uppercase tracking-[0.2em]">Fully Booked</span>
            </div>
        </div>
    </div>
</x-app-layout>

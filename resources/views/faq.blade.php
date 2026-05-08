<x-public-layout>
    <!-- Page Header -->
    <div class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1540541338287-41700207def5?auto=format&fit=crop&w=2000&q=90" 
                 alt="FAQ Header" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/60 to-transparent"></div>
        </div>
        
        <div class="absolute inset-0 z-10 opacity-[0.05] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

        <div class="relative z-20 text-center px-8 max-w-5xl">
            <span class="inline-flex items-center gap-3 px-6 py-2 bg-blue-600/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8 shadow-2xl shadow-blue-600/30 italic">
                <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse shadow-[0_0_10px_white]"></span>
                Good to Know
            </span>
            <h1 class="text-6xl md:text-8xl font-black text-white italic tracking-tighter leading-[0.9] mb-8 drop-shadow-2xl">Travel <span class="text-amber-400">FAQ</span></h1>
            <p class="text-xl sm:text-2xl text-amber-50/80 font-medium max-w-2xl mx-auto leading-relaxed italic">Everything you need to know for a seamless journey into the soul of Morocco.</p>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-30">
            <svg class="relative block w-[calc(100%+1.3px)] h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="#fdf8f1"></path>
            </svg>
        </div>
    </div>

    <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 py-24 sm:py-32">
        <div class="space-y-12 max-w-5xl mx-auto">
            <!-- FAQ Item 1 -->
            <div class="group">
                <x-card class="!p-0 border-none relative overflow-hidden group-hover:shadow-4xl transition-all duration-700 bg-white !rounded-[2rem]">
                    <div class="flex items-start gap-6 p-10 relative z-10 w-full">
                        <div class="flex-shrink-0 w-12 h-12 rounded-[1rem] bg-orange-50 text-orange-600 flex items-center justify-center font-black text-xl italic transition-all duration-500 group-hover:bg-orange-600 group-hover:text-white">Q</div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-black text-slate-900 mb-4 italic tracking-tight">What time is check-in and check-out?</h3>
                            <p class="text-slate-500 font-medium leading-relaxed text-lg">
                                Check-in begins at <strong class="text-orange-600 font-black">2:00 PM</strong>, and check-out is by <strong class="text-orange-600 font-black">11:00 AM</strong>.
                            </p>
                        </div>
                    </div>
                </x-card>
            </div>

            <!-- FAQ Item 2 -->
            <div class="group">
                <x-card class="!p-0 border-none relative overflow-hidden group-hover:shadow-4xl transition-all duration-700 bg-white !rounded-[2rem]">
                    <div class="flex items-start gap-6 p-10 relative z-10 w-full">
                        <div class="flex-shrink-0 w-12 h-12 rounded-[1rem] bg-blue-50 text-blue-600 flex items-center justify-center font-black text-xl italic transition-all duration-500 group-hover:bg-blue-600 group-hover:text-white">Q</div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-black text-slate-900 mb-4 italic tracking-tight">Do I need to bring my own linens?</h3>
                            <p class="text-slate-500 font-medium leading-relaxed text-lg">
                                No need! We provide fresh, high-quality linens and a clean towel for every guest.
                            </p>
                        </div>
                    </div>
                </x-card>
            </div>

            <!-- FAQ Item 3 -->
            <div class="group">
                <x-card class="!p-0 border-none relative overflow-hidden group-hover:shadow-4xl transition-all duration-700 bg-white !rounded-[2rem]">
                    <div class="flex items-start gap-6 p-10 relative z-10 w-full">
                        <div class="flex-shrink-0 w-12 h-12 rounded-[1rem] bg-emerald-50 text-emerald-700 flex items-center justify-center font-black text-xl italic transition-all duration-500 group-hover:bg-emerald-700 group-hover:text-white">Q</div>
                        <div class="flex-grow">
                            <h3 class="text-2xl font-black text-slate-900 mb-4 italic tracking-tight">Is Moroccan breakfast included?</h3>
                            <p class="text-slate-500 font-medium leading-relaxed text-lg">
                                Absolutely! A traditional Moroccan feast is served every morning on the rooftop.
                            </p>
                        </div>
                    </div>
                </x-card>
            </div>
        </div>

        <!-- Still have questions? -->
        <div class="mt-24 relative group max-w-5xl mx-auto w-full">
            <div class="absolute -inset-4 bg-blue-600 rounded-[3rem] rotate-1 opacity-5 group-hover:rotate-0 group-hover:opacity-10 transition-all duration-1000"></div>
            <div class="relative bg-blue-600 p-16 sm:p-20 rounded-[3rem] text-center overflow-hidden shadow-4xl shadow-blue-600/30">
                <div class="relative z-10 w-full mx-auto">
                    <h3 class="text-4xl sm:text-5xl font-black text-white mb-6 italic tracking-tighter leading-none">Still have <span class="text-orange-400">questions?</span></h3>
                    <p class="text-blue-100 mb-10 text-xl font-medium leading-relaxed italic">We're here to help. Reach out and let's talk.</p>
                    <a href="{{ route('contact') }}">
                        <x-button variant="primary" class="!bg-white !text-blue-600 !px-12 !py-6 !text-xl !rounded-2xl shadow-2xl transform hover:scale-110 active:scale-95 transition-all duration-500 font-black italic tracking-tighter">
                            Contact Us Now
                        </x-button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>

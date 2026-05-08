<x-public-layout>
    <!-- Hero Section -->
    <div class="relative min-h-[80vh] flex items-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1539020140153-e479b7c2b3dc?auto=format&fit=crop&w=1920&q=80" 
                 alt="Moroccan Riad Courtyard" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom" />
            <div class="absolute inset-0 bg-gradient-to-r from-slate-900 via-slate-900/40 to-transparent"></div>
        </div>
        
        <div class="absolute inset-0 z-10 opacity-[0.05] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

        <div class="relative z-20 max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 py-24 sm:py-32">
            <div class="max-w-5xl">
                <div class="inline-flex items-center gap-4 px-6 py-2 bg-blue-600/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8 shadow-2xl shadow-blue-600/30 italic">
                    <span class="w-2 h-2 bg-white rounded-full animate-pulse"></span>
                    Authentic Moroccan Sanctuary
                </div>
                <h1 class="text-5xl sm:text-7xl md:text-8xl font-black text-white mb-8 leading-[0.9] italic tracking-tighter">
                    Your <span class="text-blue-400">Oasis</span> in the heart of <span class="relative inline-block text-orange-500">Marrakesh<svg class="absolute -bottom-4 left-0 w-full h-4 text-blue-500/30" viewBox="0 0 100 20" preserveAspectRatio="none"><path d="M0 10 Q 25 20 50 10 T 100 10" fill="none" stroke="currentColor" stroke-width="4"/></svg></span>
                </h1>
                <p class="text-xl sm:text-2xl text-amber-50/80 mb-12 max-w-3xl font-medium leading-relaxed drop-shadow-lg">
                    Experience the rhythm of the Medina from our handcrafted riad. Where artisan tradition meets modern nomadic comfort.
                </p>
                <div class="flex flex-col sm:flex-row items-center gap-8">
                    <a href="{{ route('register') }}">
                        <x-button variant="primary" class="!bg-blue-600 !px-12 !py-6 !text-lg !rounded-2xl shadow-3xl shadow-blue-600/40 transform hover:scale-110 active:scale-95 transition-all duration-500 group font-black italic tracking-tighter">
                            Book Your Sanctuary
                            <svg class="w-6 h-6 ml-3 group-hover:translate-x-2 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg>
                        </x-button>
                    </a>
                    <a href="#experience" class="inline-flex items-center gap-4 text-white font-black uppercase tracking-[0.3em] text-xs hover:text-blue-400 transition-colors group">
                        Discover the Spirit
                        <div class="w-12 h-12 rounded-full border-2 border-white/20 flex items-center justify-center group-hover:border-blue-500 group-hover:bg-blue-500 transition-all duration-500">
                            <svg class="w-5 h-5 group-hover:translate-y-1 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-30">
            <svg class="relative block w-[calc(100%+1.3px)] h-[100px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="#fdf8f1"></path>
            </svg>
        </div>
    </div>

    <!-- Section 1: The Artisan Soul -->
    <section id="experience" class="py-24 sm:py-32 bg-[#fdf8f1] relative">
        <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20">
            <div class="flex flex-col md:flex-row items-end justify-between mb-20 gap-12">
                <div class="max-w-2xl">
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.5em] block mb-6 italic">The Commonground Essence</span>
                    <h2 class="text-4xl sm:text-6xl font-black text-slate-900 leading-[1] italic tracking-tighter">Handcrafted <span class="text-orange-600">Hospitality</span></h2>
                </div>
                <p class="text-slate-500 text-lg font-medium max-w-md leading-relaxed border-l-4 border-blue-600 pl-8">
                    Every tile, every scent, every moment is an invitation into the deep soul of Moroccan craftsmanship.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 sm:gap-16">
                <!-- Card 1 -->
                <div class="group relative pt-12">
                    <div class="absolute top-0 right-0 text-[10rem] font-black text-blue-600/5 leading-none select-none italic">01</div>
                    <div class="relative overflow-hidden rounded-[3rem] aspect-[4/5] mb-8 shadow-3xl shadow-slate-200/50 group-hover:shadow-blue-600/20 transition-all duration-700">
                        <img src="{{ Vite::asset('resources/images/atay.jpeg') }}" 
                             alt="Traditional Moroccan Tea" 
                             class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-1000" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="absolute bottom-10 left-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                            <h4 class="text-3xl font-black text-white italic">Mint Tea tradition</h4>
                        </div>
                    </div>
                    <p class="text-slate-600 font-bold px-8 text-center leading-relaxed">Sensory Awakening</p>
                </div>

                <!-- Card 2 -->
                <div class="group relative md:mt-16 pt-12">
                    <div class="absolute top-0 right-0 text-[10rem] font-black text-orange-600/5 leading-none select-none italic">02</div>
                    <div class="relative overflow-hidden rounded-[3rem] aspect-[4/5] mb-8 shadow-3xl shadow-slate-200/50 group-hover:shadow-orange-600/20 transition-all duration-700">
                        <img src="{{ Vite::asset('resources/images/zellige.jpg') }}" 
                             alt="Moroccan Artisan Craft" 
                             class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-1000" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="absolute bottom-10 left-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                            <h4 class="text-3xl font-black text-white italic">Zellige Mastery</h4>
                        </div>
                    </div>
                    <p class="text-slate-600 font-bold px-8 text-center leading-relaxed">Geometric Soul</p>
                </div>

                <!-- Card 3 -->
                <div class="group relative pt-12">
                    <div class="absolute top-0 right-0 text-[10rem] font-black text-emerald-600/5 leading-none select-none italic">03</div>
                    <div class="relative overflow-hidden rounded-[3rem] aspect-[4/5] mb-8 shadow-3xl shadow-slate-200/50 group-hover:shadow-emerald-600/20 transition-all duration-700">
                        <img src="{{ Vite::asset('resources/images/sunset.jpg') }}" 
                             alt="Rooftop Sunset View" 
                             class="w-full h-full object-cover scale-110 group-hover:scale-100 transition-all duration-1000" />
                        <div class="absolute inset-0 bg-gradient-to-t from-slate-900/60 via-transparent to-transparent opacity-80 group-hover:opacity-100 transition-opacity duration-700"></div>
                        <div class="absolute bottom-10 left-10 transform translate-y-4 group-hover:translate-y-0 transition-transform duration-700">
                            <h4 class="text-3xl font-black text-white italic">Atlas Sunsets</h4>
                        </div>
                    </div>
                    <p class="text-slate-600 font-bold px-8 text-center leading-relaxed">Nomadic Horizon</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Section 2: The Sanctuary -->
    <section class="py-24 sm:py-32 bg-white relative overflow-hidden">
        <div class="absolute top-0 left-0 w-64 h-64 bg-blue-600/5 rounded-full blur-[120px]"></div>
        <div class="absolute bottom-0 right-0 w-96 h-96 bg-orange-600/5 rounded-full blur-[150px]"></div>
        
        <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-2 gap-24 items-center">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-blue-600 rounded-[4rem] rotate-2 opacity-5 group-hover:rotate-1 group-hover:opacity-10 transition-all duration-700"></div>
                    <div class="relative overflow-hidden rounded-[3rem] aspect-square shadow-3xl shadow-slate-200/50">
                        <img src="https://images.unsplash.com/photo-1560185127-6ed189bf02f4?auto=format&fit=crop&w=1200&q=80" 
                             alt="Cozy Dorm Sanctuary" 
                             class="w-full h-full object-cover transition-transform duration-1000 group-hover:scale-110" />
                        <div class="absolute inset-0 bg-blue-900/20 group-hover:bg-transparent transition-colors duration-700"></div>
                    </div>
                </div>
                <div class="space-y-10">
                    <span class="text-[10px] font-black text-orange-600 uppercase tracking-[0.5em] block italic">Your Private Retreat</span>
                    <h2 class="text-4xl sm:text-6xl font-black text-slate-900 leading-[1] italic tracking-tighter">A Sanctuary for <span class="text-blue-600 font-black">Modern Nomads</span></h2>
                    <p class="text-slate-600 text-lg font-medium leading-relaxed">
                        Our dorms are designed as personal sanctuaries. Custom-built beds with privacy curtains, integrated charging points, and individual lockable storage ensure your comfort in the heart of the Medina.
                    </p>
                    <ul class="grid grid-cols-2 gap-8">
                        <li class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-2xl bg-blue-50 text-blue-600 flex items-center justify-center group-hover:bg-blue-600 group-hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                            </div>
                            <span class="text-sm font-black text-slate-700 uppercase tracking-widest">Privacy Curtains</span>
                        </li>
                        <li class="flex items-center gap-4 group">
                            <div class="w-10 h-10 rounded-2xl bg-orange-50 text-orange-600 flex items-center justify-center group-hover:bg-orange-600 group-hover:text-white transition-all">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M13 10V3L4 14h7v7l9-11h-7z"></path></svg>
                            </div>
                            <span class="text-sm font-black text-slate-700 uppercase tracking-widest">Fast Fiber WiFi</span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimonial -->
    <section class="py-24 sm:py-32 bg-blue-600 relative overflow-hidden group">
        <div class="absolute inset-0 opacity-[0.1] pointer-events-none group-hover:rotate-6 transition-transform duration-1000" style="background-image: url('data:image/svg+xml,%3Csvg width=\"80\" height=\"80\" viewBox=\"0 0 80 80\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M40 0l40 40-40 40L0 40z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>
        
        <div class="max-w-5xl mx-auto px-8 text-center relative z-10">
            <span class="inline-block mb-10">
                <svg class="w-16 h-16 text-orange-500 mx-auto drop-shadow-3xl" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.899 14.899 16 16 16L19 16L19 13L15 13C13.899 13 13 12.101 13 11L13 7C13 5.899 13.899 5 15 5L19 5C20.101 5 21 5.899 21 7L21 12C21 15.732 18.232 19 15 19L14.017 21ZM5.017 21L5.017 18C5.017 16.899 5.899 16 7 16L10 16L10 13L6 13C4.899 13 4 12.101 4 11L4 7C4 5.899 4.899 5 6 5L10 5C11.101 5 12 5.899 12 7L12 12C12 15.732 9.232 19 6 19L5.017 21Z"></path></svg>
            </span>
            <p class="text-3xl sm:text-5xl font-black text-white italic mb-12 leading-[1.1] tracking-tighter text-balance">
                "CommonGround isn't just a place to sleep; it's a doorway into the Moroccan soul."
            </p>
            <div class="flex items-center justify-center gap-6">
                <div class="w-16 h-16 rounded-t-full border-4 border-orange-500 p-1 bg-white/10 overflow-hidden shadow-2xl">
                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=200&h=200&q=80" alt="Happy Traveler" class="w-full h-full object-cover rounded-t-full" />
                </div>
                <div class="text-left">
                    <p class="text-white font-black uppercase tracking-[0.3em] text-xs">Elena Rodriguez</p>
                    <p class="text-orange-300 text-[10px] font-bold uppercase tracking-[0.4em]">Digital Nomad</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Final CTA -->
    <section class="py-24 sm:py-32 bg-[#fdf8f1] relative overflow-hidden">
        <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 relative z-10 text-center">
            <h2 class="text-6xl sm:text-8xl md:text-9xl font-black text-slate-900 mb-10 italic tracking-tighter leading-none">
                Ready to <span class="text-blue-600">Begin?</span>
            </h2>
            <p class="text-slate-500 text-xl sm:text-2xl mb-16 max-w-2xl mx-auto font-medium leading-relaxed italic">
                Reserve your sanctuary today and step into the Red City with us.
            </p>
            <a href="{{ route('register') }}">
                <x-button variant="primary" class="!bg-orange-600 !px-16 !py-8 !text-2xl !rounded-[3rem] shadow-4xl shadow-orange-600/40 transform hover:scale-110 active:scale-95 transition-all duration-700 font-black italic tracking-tighter">
                    Book Your Stay Now
                </x-button>
            </a>
        </div>
    </section>

    <style>
        @keyframes slow-zoom { 0% { transform: scale(1.05); } 100% { transform: scale(1.15); } }
        .animate-slow-zoom { animation: slow-zoom 30s infinite alternate ease-in-out; }
        .shadow-3xl { box-shadow: 0 35px 60px -15px rgba(0, 0, 0, 0.1); }
        .shadow-4xl { box-shadow: 0 50px 100px -20px rgba(234, 88, 12, 0.3); }
        .shadow-5xl { box-shadow: 0 70px 150px -30px rgba(234, 88, 12, 0.5); }
    </style>
</x-public-layout>

<x-public-layout>
    <!-- Page Header -->
    <div class="relative min-h-[50vh] flex items-center justify-center overflow-hidden bg-slate-900">
        <div class="absolute inset-0 z-0">
            <img src="https://images.unsplash.com/photo-1548013146-72479768bbaa?auto=format&fit=crop&w=2000&q=90" 
                 alt="Contact Us" 
                 class="w-full h-full object-cover scale-105 animate-slow-zoom" />
            <div class="absolute inset-0 bg-gradient-to-t from-slate-900 via-slate-900/40 to-transparent"></div>
        </div>
        
        <div class="absolute inset-0 z-10 opacity-[0.05] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%23ffffff\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

        <div class="relative z-20 text-center px-8 max-w-5xl">
            <span class="inline-flex items-center gap-3 px-6 py-2 bg-blue-600/90 backdrop-blur-md text-white text-[10px] font-black uppercase tracking-[0.4em] rounded-full mb-8 shadow-2xl shadow-blue-600/30 italic">
                <span class="w-1.5 h-1.5 bg-white rounded-full animate-pulse"></span>
                Salam Alaykum
            </span>
            <h1 class="text-6xl md:text-8xl font-black text-white italic tracking-tighter leading-[0.9] mb-8 drop-shadow-2xl">Reach <span class="text-orange-500">Out</span></h1>
            <p class="text-xl sm:text-2xl text-amber-50/80 font-medium max-w-2xl mx-auto leading-relaxed italic">Your journey to the Red City begins with a conversation. We are your guides.</p>
        </div>

        <div class="absolute bottom-0 left-0 w-full overflow-hidden leading-[0] z-30">
            <svg class="relative block w-[calc(100%+1.3px)] h-[80px]" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
                <path d="M600,112.77C268.63,112.77,0,65.52,0,7.23V120H1200V7.23C1200,65.52,931.37,112.77,600,112.77Z" fill="#fdf8f1"></path>
            </svg>
        </div>
    </div>

    <div class="max-w-[1750px] mx-auto px-8 sm:px-16 lg:px-20 py-24 sm:py-32">
        <div class="grid grid-cols-1 lg:grid-cols-5 gap-20 items-start">
            <!-- Contact Info -->
            <div class="lg:col-span-2 space-y-16">
                <div class="space-y-8">
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.5em] block italic">Find Your Sanctuary</span>
                    <h2 class="text-4xl sm:text-5xl font-black text-slate-900 leading-[1] italic tracking-tighter">Your Way to the <span class="text-orange-600 font-black">Oasis</span></h2>
                    <p class="text-slate-500 text-xl font-medium leading-relaxed">
                        Navigating the heart of Marrakesh is an art. We ensure your arrival is as smooth as silk.
                    </p>
                </div>
                
                <div class="space-y-10">
                    <div class="group flex items-start gap-6">
                        <div class="w-14 h-14 shrink-0 bg-white rounded-[1.5rem] flex items-center justify-center shadow-xl shadow-slate-200/50 border border-orange-50 group-hover:bg-orange-600 group-hover:scale-110 transition-all duration-500">
                            <svg class="w-6 h-6 text-orange-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-2">Our Location</h3>
                            <p class="text-slate-900 font-black text-lg italic leading-relaxed">Derb El Qadi, Kasbah,<br>Marrakesh 40000, Morocco</p>
                        </div>
                    </div>

                    <div class="group flex items-start gap-6">
                        <div class="w-14 h-14 shrink-0 bg-white rounded-[1.5rem] flex items-center justify-center shadow-xl shadow-slate-200/50 border border-blue-50 group-hover:bg-blue-600 group-hover:scale-110 transition-all duration-500">
                            <svg class="w-6 h-6 text-blue-600 group-hover:text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                        </div>
                        <div>
                            <h3 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-2">Electronic Mail</h3>
                            <p class="text-slate-900 font-black text-lg italic leading-relaxed">salam@commonground.ma</p>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="lg:col-span-3">
                <div class="relative group">
                    <div class="absolute -inset-4 bg-orange-600 rounded-[3rem] rotate-2 opacity-5 group-hover:rotate-1 group-hover:opacity-10 transition-all duration-1000"></div>
                    <x-card class="!p-0 overflow-hidden relative border-none shadow-4xl bg-white !rounded-[2.5rem]">
                        <div class="p-10 sm:p-16 relative z-10">
                            <h2 class="text-3xl font-black text-slate-900 mb-8 italic tracking-tighter">Send a <span class="text-orange-600">Message</span></h2>
                            <form class="space-y-8">
                                <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
                                    <div class="space-y-3">
                                        <x-label for="name" value="Your Name" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
                                        <x-input id="name" class="block w-full !bg-[#fdf8f1] !border-none !rounded-xl !py-4 !px-6 !font-black !text-slate-700" type="text" required placeholder="Habibi" />
                                    </div>
                                    <div class="space-y-3">
                                        <x-label for="email" value="Your Email" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
                                        <x-input id="email" class="block w-full !bg-[#fdf8f1] !border-none !rounded-xl !py-4 !px-6 !font-black !text-slate-700" type="email" required placeholder="salam@example.com" />
                                    </div>
                                </div>
                                <div class="space-y-3">
                                    <x-label for="message" value="Message" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
                                    <textarea id="message" class="block w-full bg-[#fdf8f1] border-none rounded-xl py-4 px-6 font-medium text-slate-700 focus:ring-2 focus:ring-orange-600 transition-all placeholder:text-slate-300" rows="5" required placeholder="How can we help?"></textarea>
                                </div>
                                <x-button variant="secondary" class="w-full justify-center !py-6 !text-lg !rounded-2xl shadow-4xl shadow-orange-600/40 transform hover:scale-105 active:scale-95 transition-all duration-500 font-black italic tracking-tighter" type="button" onclick="alert('Shukran! Your message has been sent.')">
                                    Send Message
                                </x-button>
                            </form>
                        </div>
                    </x-card>
                </div>
            </div>
        </div>
    </div>
</x-public-layout>

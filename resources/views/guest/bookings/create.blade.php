<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center gap-4">
            <a href="{{ route('guest.dashboard') }}" class="w-10 h-10 bg-orange-50 text-orange-600 rounded-xl flex items-center justify-center hover:bg-orange-600 hover:text-white transition-all">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M15 19l-7-7 7-7"></path></svg>
            </a>
            <h2 class="font-black text-3xl text-slate-900 italic tracking-tight">
                Find Your <span class="text-blue-600">Sanctuary</span>
            </h2>
        </div>
    </x-slot>

    <div class="max-w-5xl mx-auto space-y-8 pb-20" x-data="{ expandedDorm: null }">
        
        <!-- Flash Messages -->
        @if(session('success'))
            <div class="bg-emerald-50 border border-emerald-200 text-emerald-800 px-6 py-4 rounded-2xl font-bold flex items-center gap-3 shadow-lg shadow-emerald-500/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 13l4 4L19 7"></path></svg>
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-red-50 border border-red-200 text-red-800 px-6 py-4 rounded-2xl font-bold flex items-center gap-3 shadow-lg shadow-red-500/10">
                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
                {{ session('error') }}
            </div>
        @endif

        <!-- Main Booking Form Definition (Hidden) -->
        <form id="booking-form" method="POST" action="{{ route('guest.bookings.store') }}">
            @csrf
            <input type="hidden" name="beds[0][check_in]" value="{{ $date }}">
        </form>
        
        <div class="bg-white rounded-[3rem] p-10 shadow-2xl shadow-slate-200/50 border border-orange-50">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-10">
                <!-- Selected Date Display -->
                <div class="flex flex-col justify-center">
                    <span class="text-[10px] font-black text-blue-600 uppercase tracking-[0.2em] mb-2">Check-in Date:</span>
                    <div class="flex items-center gap-3">
                        <div class="w-10 h-10 bg-blue-50 rounded-xl flex items-center justify-center text-blue-600">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z"></path></svg>
                        </div>
                        <span class="font-black text-xl text-slate-900 italic">{{ \Carbon\Carbon::parse($date)->format('M j, Y') }}</span>
                    </div>
                </div>

                <div>
                    <x-label for="check_out" class="mb-3">When will you depart?</x-label>
                    <x-input type="date" name="beds[0][check_out]" id="check_out" form="booking-form" required
                             class="w-full !py-3"
                             min="{{ \Carbon\Carbon::parse($date)->addDay()->toDateString() }}"
                             value="{{ \Carbon\Carbon::parse($date)->addDay()->toDateString() }}" />
                </div>
                <div>
                    <x-label for="notes" class="mb-3">Special Requests?</x-label>
                    <x-input type="text" name="notes" id="notes" form="booking-form" placeholder="e.g. Near window..." class="w-full !py-3" />
                </div>
            </div>
        </div>

        <div class="space-y-6">
            <h3 class="text-2xl font-black text-slate-900 italic px-4">Available Dormitories</h3>
            
            @foreach($dorms as $dorm)
                <div class="bg-white rounded-[2.5rem] overflow-hidden border border-orange-50 shadow-lg transition-all duration-500 hover:shadow-2xl"
                     :class="expandedDorm === {{ $dorm->id }} ? 'ring-4 ring-blue-600/10' : ''">
                    
                    <div class="p-8 flex flex-col md:flex-row justify-between items-center gap-8">
                        <div class="flex items-center gap-6">
                            <div class="w-16 h-16 bg-blue-50 rounded-t-full flex items-center justify-center shadow-inner">
                                <svg class="w-8 h-8 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"></path></svg>
                            </div>
                            <div>
                                <h4 class="text-2xl font-black text-slate-900 italic leading-none mb-2">{{ $dorm->name }}</h4>
                                <div class="flex items-center gap-3">
                                    <span class="text-[9px] font-black bg-orange-600 text-white px-3 py-1 rounded-full uppercase tracking-widest">{{ $dorm->category->name }}</span>
                                    <div class="flex items-center gap-1">
                                        @for($i = 1; $i <= 5; $i++)
                                            <svg class="w-3.5 h-3.5 {{ $i <= $dorm->average_rating ? 'text-amber-400' : 'text-slate-200' }}" fill="currentColor" viewBox="0 0 20 20">
                                                <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                            </svg>
                                        @endfor
                                        <span class="text-[10px] font-bold text-slate-400 ml-1">({{ $dorm->review_count }} reviews)</span>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="flex items-center gap-8">
                            <div class="text-right">
                                <div class="text-[10px] font-black text-slate-400 uppercase tracking-widest mb-1">Price per night</div>
                                <div class="text-2xl font-black text-emerald-700 italic">${{ number_format($dorm->category->base_price, 2) }}</div>
                            </div>
                            <button type="button" 
                                    @click="expandedDorm = (expandedDorm === {{ $dorm->id }} ? null : {{ $dorm->id }})"
                                    class="px-8 py-4 bg-slate-900 text-white rounded-2xl font-black text-xs uppercase tracking-widest hover:bg-blue-600 transition-all shadow-xl shadow-slate-900/20 flex items-center gap-3">
                                <span x-text="expandedDorm === {{ $dorm->id }} ? 'Collapse' : 'Expand Sanctuary'"></span>
                                <svg class="w-4 h-4 transition-transform duration-500" :class="expandedDorm === {{ $dorm->id }} ? 'rotate-180' : ''" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M19 9l-7 7-7-7"></path></svg>
                            </button>
                        </div>
                    </div>

                    <!-- Expansion Area -->
                    <div x-show="expandedDorm === {{ $dorm->id }}" 
                         x-collapse
                         class="bg-[#fdf8f1] border-t border-orange-50"
                         style="display: none;">
                        
                        <div class="p-10 grid grid-cols-1 lg:grid-cols-2 gap-12">
                            <!-- Beds Selection -->
                            <div>
                                <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                    Available Beds
                                    <div class="h-px flex-1 bg-orange-100"></div>
                                </h5>
                                <div class="grid grid-cols-3 sm:grid-cols-4 gap-4">
                                    @foreach($dorm->beds as $bed)
                                        <label class="cursor-pointer group relative">
                                            <input type="radio" name="beds[0][bed_id]" value="{{ $bed->id }}" 
                                                   form="booking-form" required
                                                   class="absolute opacity-0 w-0 h-0 peer">
                                            <div class="py-4 text-center rounded-2xl border-2 border-white bg-white peer-checked:border-blue-600 peer-checked:bg-blue-50 font-black text-slate-400 peer-checked:text-blue-600 transition-all duration-300 group-hover:border-orange-200 shadow-sm peer-checked:shadow-lg">
                                                #{{ $bed->bed_number }}
                                            </div>
                                        </label>
                                    @endforeach
                                </div>

                                <div class="mt-12">
                                    <x-button variant="primary" type="submit" form="booking-form" class="w-full !py-6 !text-lg !rounded-3xl shadow-2xl shadow-blue-600/30">
                                        Confirm This Sanctuary
                                    </x-button>
                                </div>
                            </div>

                            <!-- Reviews & Rating -->
                            <div class="space-y-8">
                                <h5 class="text-[10px] font-black text-slate-400 uppercase tracking-[0.3em] mb-6 flex items-center gap-3">
                                    Guest Reviews
                                    <div class="h-px flex-1 bg-orange-100"></div>
                                </h5>

                                <div class="max-h-[30rem] overflow-y-auto pr-4 space-y-6 custom-scrollbar">
                                    @forelse($dorm->reviews as $review)
                                        <div class="bg-white rounded-3xl p-6 border border-orange-50 shadow-sm">
                                            <div class="flex justify-between items-start mb-4">
                                                <div class="flex items-center gap-3">
                                                    <div class="w-10 h-10 bg-blue-100 rounded-full flex items-center justify-center text-blue-600 font-black italic">
                                                        {{ substr($review->user->name, 0, 1) }}
                                                    </div>
                                                    <div>
                                                        <div class="font-black text-slate-900 italic leading-none">{{ $review->user->name }}</div>
                                                        <div class="text-[8px] font-black text-slate-400 uppercase tracking-widest mt-1">{{ $review->created_at->diffForHumans() }}</div>
                                                    </div>
                                                </div>
                                                <div class="flex">
                                                    @for($i = 1; $i <= 5; $i++)
                                                        <svg class="w-3 h-3 {{ $i <= $review->rating ? 'text-amber-400' : 'text-slate-100' }}" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                        </svg>
                                                    @endfor
                                                </div>
                                            </div>
                                            <p class="text-slate-600 text-sm italic leading-relaxed">"{{ $review->comment }}"</p>
                                        </div>
                                    @empty
                                        <div class="text-center py-12">
                                            <div class="text-slate-300 mb-4">
                                                <svg class="w-12 h-12 mx-auto" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"></path></svg>
                                            </div>
                                            <p class="text-[10px] font-black text-slate-400 uppercase tracking-widest">No reviews yet. Be the first to share your experience!</p>
                                        </div>
                                    @endforelse
                                </div>

                                @if(in_array($dorm->id, $eligibleDormIds))
                                    <div class="pt-8 border-t border-orange-100">
                                        <h6 class="text-[10px] font-black text-slate-900 uppercase tracking-widest mb-6 italic">Leave a Review</h6>
                                        <form action="{{ route('guest.reviews.store', $dorm) }}" method="POST" class="space-y-6">
                                            @csrf
                                            <div class="flex gap-2" x-data="{ rating: 5 }">
                                                <template x-for="i in 5">
                                                    <button type="button" @click="rating = i" class="focus:outline-none">
                                                        <svg class="w-6 h-6 transition-colors" :class="i <= rating ? 'text-amber-400' : 'text-slate-200'" fill="currentColor" viewBox="0 0 20 20">
                                                            <path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"></path>
                                                        </svg>
                                                    </button>
                                                </template>
                                                <input type="hidden" name="rating" :value="rating">
                                            </div>
                                            <textarea name="comment" rows="3" placeholder="How was your stay?" required
                                                      class="w-full rounded-2xl border-orange-100 bg-white focus:border-blue-600 focus:ring-blue-600 font-medium text-slate-700 placeholder:text-slate-300 py-4 px-6"></textarea>
                                            <x-button variant="secondary" type="submit" class="w-full !rounded-2xl shadow-xl shadow-orange-600/20">
                                                Share My Journey
                                            </x-button>
                                        </form>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <style>
        .custom-scrollbar::-webkit-scrollbar { width: 4px; }
        .custom-scrollbar::-webkit-scrollbar-track { background: transparent; }
        .custom-scrollbar::-webkit-scrollbar-thumb { background: #fee2e2; border-radius: 10px; }
        .custom-scrollbar::-webkit-scrollbar-thumb:hover { background: #fdba74; }
    </style>
</x-app-layout>

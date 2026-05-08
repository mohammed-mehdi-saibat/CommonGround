<x-guest-layout>

    <div class="mb-10 text-center">
        <span class="inline-block px-4 py-1 bg-orange-50 text-orange-600 text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-4">Start Your Journey</span>
        <h2 class="text-4xl font-black text-slate-900 italic tracking-tighter">Join the <span class="text-orange-600">Riad</span></h2>
    </div>

    <form method="POST" action="{{ route('register') }}" class="space-y-6">
        @csrf

        <!-- Name -->
        <div class="space-y-2">
            <x-label for="name" value="Your Name" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="name" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-orange-600 transition-all" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" placeholder="Habibi" />
            <x-input-error :messages="$errors->get('name')" class="mt-2" />
        </div>

        <!-- Email Address -->
        <div class="space-y-2">
            <x-label for="email" value="Email Address" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="email" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-orange-600 transition-all" type="email" name="email" :value="old('email')" required autocomplete="username" placeholder="salam@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="space-y-2">
            <x-label for="password" value="Password" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="password" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-orange-600 transition-all" type="password" name="password" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="space-y-2">
            <x-label for="password_confirmation" value="Confirm Your Password" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="password_confirmation" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-orange-600 transition-all" type="password" name="password_confirmation" required autocomplete="new-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
        </div>

        <div class="pt-6">
            <x-button variant="secondary" class="w-full justify-center !py-6 !text-lg !rounded-2xl shadow-2xl shadow-orange-600/30 transform hover:scale-105 active:scale-95 transition-all duration-500 font-black italic tracking-tighter">
                Create My Sanctuary
            </x-button>
        </div>

        <div class="text-center pt-6 border-t border-orange-50">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">
                Already part of the family? 
                <a href="{{ route('login') }}" class="text-orange-600 hover:text-orange-700 ml-2 transition-colors">Log in here</a>
            </p>
        </div>
    </form>
</x-guest-layout>
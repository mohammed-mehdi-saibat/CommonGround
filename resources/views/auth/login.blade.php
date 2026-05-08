<x-guest-layout>

    <div class="mb-10 text-center">
        <span class="inline-block px-4 py-1 bg-blue-50 text-blue-600 text-[10px] font-black uppercase tracking-[0.3em] rounded-full mb-4">Welcome Back</span>
        <h2 class="text-4xl font-black text-slate-900 italic tracking-tighter">Enter the <span class="text-blue-600">Oasis</span></h2>
    </div>

    <!-- Session Status -->
    <x-auth-session-status class="mb-6" :status="session('status')" />

    <form method="POST" action="{{ route('login') }}" class="space-y-8">
        @csrf

        <!-- Email Address -->
        <div class="space-y-3">
            <x-label for="email" value="Your Email" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="email" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-blue-600 transition-all" type="email" name="email" :value="old('email')" required autofocus autocomplete="username" placeholder="habibi@example.com" />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="space-y-3">
            <x-label for="password" value="Password" class="!text-[10px] !text-slate-400 !font-black !uppercase !tracking-[0.3em]" />
            <x-input id="password" class="block w-full !bg-[#fdf8f1] !border-none !rounded-2xl !py-4 !px-6 !font-black !text-slate-700 focus:!ring-2 focus:!ring-blue-600 transition-all" type="password" name="password" required autocomplete="current-password" placeholder="••••••••" />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Remember Me & Forgot Password -->
        <div class="flex items-center justify-between">
            <label for="remember_me" class="inline-flex items-center group cursor-pointer">
                <input id="remember_me" type="checkbox" class="rounded-lg border-amber-200 text-blue-600 shadow-sm focus:ring-blue-600 bg-[#fdf8f1]" name="remember">
                <span class="ml-3 text-xs font-bold text-slate-500 group-hover:text-blue-600 transition-colors uppercase tracking-widest">Remember me</span>
            </label>

            @if (Route::has('password.request'))
                <a class="text-xs font-bold text-orange-600 hover:text-orange-700 transition-colors uppercase tracking-widest" href="{{ route('password.request') }}">
                    Lost Access?
                </a>
            @endif
        </div>

        <div class="pt-4">
            <x-button variant="primary" class="w-full justify-center !py-6 !text-lg !rounded-2xl shadow-2xl shadow-blue-600/30 transform hover:scale-105 active:scale-95 transition-all duration-500 font-black italic tracking-tighter">
                Log In
            </x-button>
        </div>

        <div class="text-center pt-6 border-t border-orange-50">
            <p class="text-xs font-bold text-slate-400 uppercase tracking-widest">
                New to the Riad? 
                <a href="{{ route('register') }}" class="text-blue-600 hover:text-blue-700 ml-2">Join us now</a>
            </p>
        </div>
    </form>
</x-guest-layout>
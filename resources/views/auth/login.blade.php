<x-portal-layout>
    <div class="max-w-md mx-auto p-6">
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden border border-outline-variant/30 transition-all duration-300 p-8">
            <!-- Card Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container shadow-sm">
                        <span class="material-symbols-outlined text-3xl">domain</span>
                    </div>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">CommonGround</h1>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Manage your community with ease</p>
            </div>

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}" class="space-y-6">
                @csrf

                <!-- Email Field -->
                <x-form-input
                    label="Email Address"
                    name="email"
                    type="email"
                    placeholder="name@example.com"
                    required
                />

                <!-- Password Field -->
                <x-form-input
                    label="Password"
                    name="password"
                    type="password"
                    placeholder="••••••••"
                    required
                />

                <!-- Remember and Forgot Password -->
                <div class="flex items-center justify-between">
                    <div class="flex items-center">
                        <input
                            type="checkbox"
                            id="remember"
                            name="remember"
                            class="h-4 w-4 rounded border-outline-variant text-primary focus:ring-primary-container transition-all"
                        />
                        <label class="ml-2 block font-label-sm text-label-sm text-on-surface-variant cursor-pointer" for="remember">
                            Remember Me
                        </label>
                    </div>
                    @if (Route::has('password.request'))
                        <a href="{{ route('password.request') }}" class="font-medium text-secondary hover:text-on-secondary-container transition-colors text-sm">
                            Forgot Password?
                        </a>
                    @endif
                </div>

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3.5 px-4 bg-primary-container text-on-primary-fixed font-headline-md text-body-md rounded-xl shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-150 flex items-center justify-center gap-2">
                    <span>Sign In to CommonGround</span>
                    <span class="material-symbols-outlined text-lg">login</span>
                </button>
            </form>

            <!-- Divider -->
            <div class="relative my-8">
                <div class="absolute inset-0 flex items-center">
                    <span class="w-full border-t border-outline-variant/30"></span>
                </div>
                <div class="relative flex justify-center text-xs">
                    <span class="bg-surface-container-lowest px-4 text-outline font-label-caps">OR</span>
                </div>
            </div>

            <!-- Registration Link -->
            <p class="text-center text-sm text-on-surface-variant">
                Don't have an account?
                <a href="{{ route('register') }}" class="font-semibold text-primary hover:underline">Sign up here</a>
            </p>
        </div>
    </div>
</x-portal-layout>

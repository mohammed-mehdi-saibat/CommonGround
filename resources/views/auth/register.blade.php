<x-portal-layout>
    <div class="max-w-md mx-auto p-6">
        <div class="bg-surface-container-lowest rounded-2xl shadow-sm overflow-hidden border border-outline-variant/30 transition-all duration-300 p-8">
            <!-- Card Header -->
            <div class="text-center mb-8">
                <div class="flex justify-center mb-4">
                    <div class="w-12 h-12 rounded-xl bg-primary-container flex items-center justify-center text-on-primary-container shadow-sm">
                        <span class="material-symbols-outlined text-3xl">person_add</span>
                    </div>
                </div>
                <h1 class="font-headline-lg text-headline-lg text-on-surface tracking-tight">Join CommonGround</h1>
                <p class="font-body-sm text-body-sm text-on-surface-variant mt-2">Create your account to get started</p>
            </div>

            <!-- Registration Form -->
            <form method="POST" action="{{ route('register') }}" class="space-y-6">
                @csrf

                <!-- Name Field -->
                <x-form-input
                    label="Full Name"
                    name="name"
                    type="text"
                    placeholder="John Doe"
                    required
                />

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

                <!-- Confirm Password Field -->
                <x-form-input
                    label="Confirm Password"
                    name="password_confirmation"
                    type="password"
                    placeholder="••••••••"
                    required
                />

                <!-- Submit Button -->
                <button type="submit" class="w-full py-3.5 px-4 bg-primary-container text-on-primary-fixed font-headline-md text-body-md rounded-xl shadow-sm hover:shadow-md active:scale-[0.98] transition-all duration-150 flex items-center justify-center gap-2">
                    <span>Create Account</span>
                    <span class="material-symbols-outlined text-lg">person_add</span>
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

            <!-- Login Link -->
            <p class="text-center text-sm text-on-surface-variant">
                Already have an account?
                <a href="{{ route('login') }}" class="font-semibold text-primary hover:underline">Sign in here</a>
            </p>
        </div>
    </div>
</x-portal-layout>

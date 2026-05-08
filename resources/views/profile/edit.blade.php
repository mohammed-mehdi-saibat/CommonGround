<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Account Settings') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-8">
            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <header class="mb-6 border-b border-gray-100 pb-4">
                        <h3 class="text-xl font-bold text-sky-600">Profile Information</h3>
                        <p class="text-sm text-gray-600 mt-1">Update your account's profile information and primary email address.</p>
                    </header>
                    
                    <form method="POST" action="{{ route('profile.update') ?? '#' }}">
                        @csrf
                        @method('patch')

                        <div class="mb-6 max-w-xl">
                            <x-label for="name" value="{{ __('Full Name') }}" />
                            <x-input id="name" name="name" type="text" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" :value="old('name', $user->name ?? '')" required autofocus autocomplete="name" />
                            <x-input-error class="mt-2 text-amber-500" :messages="$errors->get('name')" />
                        </div>

                        <div class="mb-6 max-w-xl">
                            <x-label for="email" value="{{ __('Email Address') }}" />
                            <x-input id="email" name="email" type="email" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" :value="old('email', $user->email ?? '')" required autocomplete="username" />
                            <x-input-error class="mt-2 text-amber-500" :messages="$errors->get('email')" />
                        </div>

                        <div class="flex items-center gap-4 pt-4">
                            <x-button class="bg-sky-500 hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-700">
                                {{ __('Save Profile') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </x-card>

            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <header class="mb-6 border-b border-gray-100 pb-4">
                        <h3 class="text-xl font-bold text-emerald-600">Update Password</h3>
                        <p class="text-sm text-gray-600 mt-1">Ensure your account is using a long, random password to stay secure.</p>
                    </header>
                    
                    <form method="POST" action="{{ route('password.update') ?? '#' }}">
                        @csrf
                        @method('put')

                        <div class="mb-6 max-w-xl">
                            <x-label for="current_password" value="{{ __('Current Password') }}" />
                            <x-input id="current_password" name="current_password" type="password" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" autocomplete="current-password" />
                            <x-input-error class="mt-2 text-amber-500" :messages="isset($errors) && $errors->hasBag('updatePassword') ? $errors->updatePassword->get('current_password') : []" />
                        </div>

                        <div class="mb-6 max-w-xl">
                            <x-label for="password" value="{{ __('New Password') }}" />
                            <x-input id="password" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" autocomplete="new-password" />
                            <x-input-error class="mt-2 text-amber-500" :messages="isset($errors) && $errors->hasBag('updatePassword') ? $errors->updatePassword->get('password') : []" />
                        </div>

                        <div class="mb-6 max-w-xl">
                            <x-label for="password_confirmation" value="{{ __('Confirm New Password') }}" />
                            <x-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" autocomplete="new-password" />
                            <x-input-error class="mt-2 text-amber-500" :messages="isset($errors) && $errors->hasBag('updatePassword') ? $errors->updatePassword->get('password_confirmation') : []" />
                        </div>

                        <div class="flex items-center gap-4 pt-4">
                            <x-button class="bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-600 active:bg-emerald-700">
                                {{ __('Change Password') }}
                            </x-button>
                        </div>
                    </form>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.staff.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Hire Staff Member') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-card class="shadow-md">
                <form method="POST" action="{{ route('admin.staff.store') }}" class="p-6">
                    @csrf
                    
                    <h3 class="text-lg font-bold text-slate-800 mb-4 border-b border-slate-100 pb-2">User Account Details</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <x-label for="name" :value="__('Full Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="email" :value="__('Email Address')" />
                            <x-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')" required />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="password" :value="__('Password')" />
                            <x-input id="password" class="block mt-1 w-full" type="password" name="password" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="password_confirmation" :value="__('Confirm Password')" />
                            <x-input id="password_confirmation" class="block mt-1 w-full" type="password" name="password_confirmation" required autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                    </div>

                    <h3 class="text-lg font-bold text-slate-800 mb-4 border-b border-slate-100 pb-2">Employment Details</h3>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-8">
                        <div>
                            <x-label for="position" :value="__('Position')" />
                            <select id="position" name="position" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                                <option value="">Select Role</option>
                                <option value="receptionist" @selected(old('position') == 'receptionist')>Receptionist</option>
                                <option value="housekeeping" @selected(old('position') == 'housekeeping')>Housekeeping</option>
                                <option value="manager" @selected(old('position') == 'manager')>Manager</option>
                                <option value="maintenance" @selected(old('position') == 'maintenance')>Maintenance</option>
                            </select>
                            <x-input-error :messages="$errors->get('position')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="phone_number" :value="__('Phone Number')" />
                            <x-input id="phone_number" class="block mt-1 w-full" type="text" name="phone_number" :value="old('phone_number')" />
                            <x-input-error :messages="$errors->get('phone_number')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="hired_at" :value="__('Hire Date')" />
                            <x-input id="hired_at" class="block mt-1 w-full" type="date" name="hired_at" :value="old('hired_at', date('Y-m-d'))" />
                            <x-input-error :messages="$errors->get('hired_at')" class="mt-2" />
                        </div>
                    </div>

                    <div class="flex items-center justify-end mt-4 pt-4 border-t border-slate-100">
                        <x-button variant="primary" class="px-8 py-3">
                            {{ __('Hire Staff') }}
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
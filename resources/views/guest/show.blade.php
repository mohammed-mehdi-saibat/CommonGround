<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('My Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 flex justify-between items-center pb-4 border-b border-sky-100">
                        <h3 class="text-xl font-bold text-sky-500">Profile Details</h3>
                        <a href="{{ route('guest.edit', $guest) }}">
                            <x-button class="bg-amber-500 hover:bg-amber-600 focus:bg-amber-600 active:bg-amber-700">
                                {{ __('Edit Profile') }}
                            </x-button>
                        </a>
                    </div>
                    
                    <div class="space-y-4">
                        <div class="flex items-center">
                            <span class="w-1/4 font-semibold text-gray-700">Name:</span>
                            <span class="text-gray-900">{{ auth()->user()->name ?? 'Guest User' }}</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-1/4 font-semibold text-gray-700">Email:</span>
                            <span class="text-gray-900">{{ auth()->user()->email ?? 'email@example.com' }}</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-1/4 font-semibold text-gray-700">Phone:</span>
                            <span class="text-gray-900">{{ $guest->phone ?? 'Not provided' }}</span>
                        </div>
                        <div class="flex items-center">
                            <span class="w-1/4 font-semibold text-gray-700">Preferences:</span>
                            <span class="text-gray-900">{{ $guest->preferences ?? 'None' }}</span>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
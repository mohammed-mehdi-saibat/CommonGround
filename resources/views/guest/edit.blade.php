<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Edit Guest Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <form method="POST" action="{{ route('guest.update', $guest) }}">
                        @csrf
                        @method('patch')

                        <div class="mb-6">
                            <x-label for="phone" value="{{ __('Phone Number') }}" />
                            <x-input id="phone" name="phone" type="text" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" :value="old('phone', $guest->phone ?? '')" />
                            <x-input-error class="mt-2 text-amber-500" :messages="$errors->get('phone')" />
                        </div>

                        <div class="mb-6">
                            <x-label for="preferences" value="{{ __('Stay Preferences (e.g., lower bunk, quiet room)') }}" />
                            <textarea id="preferences" name="preferences" class="border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm mt-1 block w-full" rows="4">{{ old('preferences', $guest->preferences ?? '') }}</textarea>
                            <x-input-error class="mt-2 text-amber-500" :messages="$errors->get('preferences')" />
                        </div>

                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <x-button class="bg-sky-500 hover:bg-sky-600 focus:bg-sky-600 active:bg-sky-700">
                                {{ __('Save Changes') }}
                            </x-button>
                            <a href="{{ route('guest.show', $guest) }}" class="text-gray-500 hover:text-gray-700 underline">Cancel</a>
                        </div>
                    </form>                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.beds.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Edit Bed') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6 max-w-2xl mx-auto">
                <form method="POST" action="{{ route('admin.beds.update', $bed) }}">
                    @csrf
                    @method('PUT')
                    <div class="mb-4">
                        <x-label for="bed_number" :value="__('Bed Number/Identifier')" />
                        <x-input id="bed_number" class="block mt-1 w-full" type="text" name="bed_number" :value="old('bed_number', $bed->bed_number)" required autofocus />
                        <x-input-error :messages="$errors->get('bed_number')" class="mt-2" />
                    </div>
                    <div class="mb-4">
                        <x-label for="dorm_id" :value="__('Dorm')" />
                        <select id="dorm_id" name="dorm_id" class="border-gray-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                            @foreach($dorms ?? [] as $dorm)
                                <option value="{{ $dorm->id }}" @selected(old('dorm_id', $bed->dorm_id) == $dorm->id)>{{ $dorm->name }}</option>
                            @endforeach
                        </select>
                        <x-input-error :messages="$errors->get('dorm_id')" class="mt-2" />
                    </div>
                    <div class="mb-4 block">
                        <label for="is_functional" class="inline-flex items-center">
                            <input id="is_functional" type="checkbox" class="rounded border-gray-300 text-sky-600 shadow-sm focus:ring-sky-500" name="is_functional" value="1" {{ old('is_functional', $bed->is_functional) ? 'checked' : '' }}>
                            <span class="ml-2 text-sm text-gray-600">{{ __('Is Functional?') }}</span>
                        </label>
                    </div>
                    <div class="flex items-center justify-end mt-4">
                        <x-button class="bg-sky-500 hover:bg-sky-600 text-white">
                            {{ __('Update') }}
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
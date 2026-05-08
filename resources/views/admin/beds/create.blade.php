<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.beds.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Create Bed') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-card class="shadow-md">
                <form method="POST" action="{{ route('admin.beds.store') }}" class="p-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <x-label for="bed_number" :value="__('Bed Number/Identifier')" />
                            <x-input id="bed_number" class="block mt-1 w-full" type="text" name="bed_number" :value="old('bed_number')" required autofocus placeholder="e.g. B-01" />
                            <x-input-error :messages="$errors->get('bed_number')" class="mt-2" />
                        </div>
                        
                        <div>
                            <x-label for="dorm_id" :value="__('Dorm')" />
                            <select id="dorm_id" name="dorm_id" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                                <option value="">Select Dorm</option>
                                @foreach($dorms ?? \App\Models\Dorm::all() as $dorm)
                                    <option value="{{ $dorm->id }}" @selected(old('dorm_id') == $dorm->id)>{{ $dorm->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('dorm_id')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-6">
                        <x-label for="notes" :value="__('Notes (Optional)')" />
                        <textarea id="notes" name="notes" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" rows="3" placeholder="e.g. Upper bunk, near window">{{ old('notes') }}</textarea>
                        <x-input-error :messages="$errors->get('notes')" class="mt-2" />
                    </div>

                    <div class="mb-8">
                        <label class="inline-flex items-center">
                            <input type="hidden" name="is_functional" value="0">
                            <input type="checkbox" name="is_functional" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('is_functional', true))>
                            <span class="ml-2 text-sm text-slate-600">Bed is Functional (Not broken/under maintenance)</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 pt-4 border-t border-slate-100">
                        <x-button variant="primary" class="px-8 py-3">
                            {{ __('Save Bed') }}
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
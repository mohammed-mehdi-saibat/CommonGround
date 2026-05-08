<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.dorms.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Create Dorm') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-card class="shadow-md">
                <form method="POST" action="{{ route('admin.dorms.store') }}" class="p-6">
                    @csrf
                    
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <x-label for="name" :value="__('Dorm Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="e.g. Ocean View Dorm" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        
                        <div>
                            <x-label for="category_id" :value="__('Category')" />
                            <select id="category_id" name="category_id" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                                <option value="">Select Category</option>
                                @foreach($categories ?? \App\Models\Category::all() as $category)
                                    <option value="{{ $category->id }}" @selected(old('category_id') == $category->id)>{{ $category->name }}</option>
                                @endforeach
                            </select>
                            <x-input-error :messages="$errors->get('category_id')" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="total_beds" :value="__('Total Beds')" />
                            <x-input id="total_beds" class="block mt-1 w-full" type="number" min="1" name="total_beds" :value="old('total_beds')" required />
                            <x-input-error :messages="$errors->get('total_beds')" class="mt-2" />
                        </div>

                        <div>
                            <x-label for="floor_number" :value="__('Floor Number')" />
                            <x-input id="floor_number" class="block mt-1 w-full" type="number" name="floor_number" :value="old('floor_number', 1)" required />
                            <x-input-error :messages="$errors->get('floor_number')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-6">
                        <x-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" rows="3">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <div class="mb-8">
                        <label class="inline-flex items-center">
                            <input type="hidden" name="is_active" value="0">
                            <input type="checkbox" name="is_active" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('is_active', true))>
                            <span class="ml-2 text-sm text-slate-600">Dorm is Active (Available for booking)</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 pt-4 border-t border-slate-100">
                        <x-button variant="primary" class="px-8 py-3">
                            {{ __('Save Dorm') }}
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
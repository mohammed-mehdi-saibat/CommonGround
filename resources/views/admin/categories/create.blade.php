<x-app-layout>
    <x-slot name="header">
        <div class="flex items-center justify-between">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.categories.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Create Category') }}</span>
            </h2>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-4xl mx-auto sm:px-6 lg:px-8">
            <x-card class="shadow-md">
                <form method="POST" action="{{ route('admin.categories.store') }}" class="p-6">
                    @csrf
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <x-label for="name" :value="__('Name')" />
                            <x-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autofocus placeholder="e.g. 4-Bed Mixed Dorm" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="base_price" :value="__('Base Price')" />
                            <x-input id="base_price" class="block mt-1 w-full" type="number" step="0.01" min="0" name="base_price" :value="old('base_price')" required />
                            <x-input-error :messages="$errors->get('base_price')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="currency" :value="__('Currency')" />
                            <select id="currency" name="currency" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                                <option value="USD" @selected(old('currency') == 'USD')>USD ($)</option>
                                <option value="EUR" @selected(old('currency') == 'EUR')>EUR (€)</option>
                            </select>
                            <x-input-error :messages="$errors->get('currency')" class="mt-2" />
                        </div>
                        <div>
                            <x-label for="gender_type" :value="__('Gender Type')" />
                            <select id="gender_type" name="gender_type" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" required>
                                <option value="mixed" @selected(old('gender_type') == 'mixed')>Mixed</option>
                                <option value="female_only" @selected(old('gender_type') == 'female_only')>Female Only</option>
                                <option value="male_only" @selected(old('gender_type') == 'male_only')>Male Only</option>
                            </select>
                            <x-input-error :messages="$errors->get('gender_type')" class="mt-2" />
                        </div>
                    </div>

                    <div class="mb-6">
                        <x-label for="description" :value="__('Description')" />
                        <textarea id="description" name="description" class="border-slate-300 focus:border-sky-500 focus:ring-sky-500 rounded-md shadow-sm block mt-1 w-full" rows="3">{{ old('description') }}</textarea>
                        <x-input-error :messages="$errors->get('description')" class="mt-2" />
                    </div>

                    <h3 class="text-lg font-bold text-slate-800 mb-4 border-b border-slate-100 pb-2">Amenities</h3>
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-4 mb-8">
                        <label class="inline-flex items-center">
                            <input type="hidden" name="is_ensuite" value="0">
                            <input type="checkbox" name="is_ensuite" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('is_ensuite'))>
                            <span class="ml-2 text-sm text-slate-600">Ensuite Bathroom</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="has_ac" value="0">
                            <input type="checkbox" name="has_ac" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('has_ac'))>
                            <span class="ml-2 text-sm text-slate-600">Air Conditioning</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="has_lockers" value="0">
                            <input type="checkbox" name="has_lockers" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('has_lockers'))>
                            <span class="ml-2 text-sm text-slate-600">Lockers</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="has_individual_plugs" value="0">
                            <input type="checkbox" name="has_individual_plugs" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('has_individual_plugs'))>
                            <span class="ml-2 text-sm text-slate-600">Individual Plugs</span>
                        </label>
                        <label class="inline-flex items-center">
                            <input type="hidden" name="has_curtains" value="0">
                            <input type="checkbox" name="has_curtains" value="1" class="rounded border-slate-300 text-sky-500 shadow-sm focus:ring-sky-500" @checked(old('has_curtains'))>
                            <span class="ml-2 text-sm text-slate-600">Privacy Curtains</span>
                        </label>
                    </div>

                    <div class="flex items-center justify-end mt-4 pt-4 border-t border-slate-100">
                        <x-button variant="primary" class="px-8 py-3">
                            {{ __('Save Category') }}
                        </x-button>
                    </div>
                </form>
            </x-card>
        </div>
    </div>
</x-app-layout>
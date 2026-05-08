<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Edit Staff Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <h3 class="text-lg font-bold text-sky-600 mb-6 border-b border-gray-100 pb-2">Update Information</h3>
                    
                    <form method="POST" action="{{ route('staff.update') ?? '#' }}">
                        @csrf
                        @method('patch')
                        
                        <div class="mb-6 bg-gray-50 p-4 rounded-md border border-gray-200">
                            <x-label for="position" value="{{ __('Job Position') }}" class="text-gray-700" />
                            <x-input id="position" name="position" type="text" class="mt-1 block w-full bg-gray-100 text-gray-500 cursor-not-allowed" :value="old('position', $staff->position ?? '')" disabled />
                            <p class="text-xs text-amber-600 mt-2 font-medium flex items-center">
                                <svg class="w-4 h-4 mr-1" fill="currentColor" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
                                Position and hire date can only be changed by an administrator.
                            </p>
                        </div>
                        
                        <div class="mb-8">
                            <x-label for="phone" value="{{ __('Emergency Contact Number') }}" />
                            <x-input id="phone" name="phone" type="text" class="mt-1 block w-full rounded-md border-gray-300 focus:border-sky-500 focus:ring-sky-500" :value="old('phone', $staff->phone ?? '')" placeholder="+1 234 567 890" />
                            <x-input-error class="mt-2 text-amber-500" :messages="$errors->get('phone')" />
                        </div>

                        <div class="flex items-center gap-4 pt-4 border-t border-gray-100">
                            <x-button class="bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-600 active:bg-emerald-700">
                                {{ __('Save Changes') }}
                            </x-button>
                            <a href="{{ route('staff.show', $staff) }}" class="text-gray-500 hover:text-gray-700 underline">Cancel</a>
                        </div>
                    </form>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
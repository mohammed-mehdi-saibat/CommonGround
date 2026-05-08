<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Staff Profile') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm">
                <div class="p-6 text-gray-900">
                    <div class="mb-6 flex justify-between items-center border-b border-sky-100 pb-4">
                        <h3 class="text-xl font-bold text-sky-500">Employment Details</h3>
                        <a href="{{ route('staff.edit', $staff) }}">
                            <x-button class="bg-emerald-500 hover:bg-emerald-600 focus:bg-emerald-600 active:bg-emerald-700">
                                {{ __('Update Contact Info') }}
                            </x-button>
                        </a>
                    </div>
                    
                    <div class="space-y-6">
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-gray-50 p-4 rounded-md">
                                <span class="block text-sm text-gray-500 font-medium mb-1">Full Name</span>
                                <span class="block text-lg text-gray-900 font-semibold">{{ auth()->user()->name ?? 'Staff User' }}</span>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-md">
                                <span class="block text-sm text-gray-500 font-medium mb-1">Email Address</span>
                                <span class="block text-lg text-gray-900 font-semibold">{{ auth()->user()->email ?? 'staff@example.com' }}</span>
                            </div>
                        </div>
                        
                        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
                            <div class="bg-sky-50 p-4 rounded-md border border-sky-100">
                                <span class="block text-sm text-sky-700 font-medium mb-1">Assigned Position</span>
                                <div class="mt-1">
                                    <x-badge class="bg-sky-200 text-sky-900 px-3 py-1 font-bold">
                                        {{ $staff->position ?? 'Hostel Staff' }}
                                    </x-badge>
                                </div>
                            </div>
                            <div class="bg-gray-50 p-4 rounded-md">
                                <span class="block text-sm text-gray-500 font-medium mb-1">Hired Date</span>
                                <span class="block text-lg text-gray-900 font-semibold">
                                    {{ isset($staff->hired_at) ? \Carbon\Carbon::parse($staff->hired_at)->format('F d, Y') : 'N/A' }}
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
            </x-card>
        </div>
    </div>
</x-app-layout>
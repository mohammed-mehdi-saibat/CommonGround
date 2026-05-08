<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-sky-800 leading-tight">
            {{ __('Staff Operations Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="rounded-lg shadow-sm mb-6 border-l-4 border-l-sky-500">
                <div class="p-6 text-gray-900">
                    <h3 class="text-2xl font-bold text-sky-600 mb-2">Welcome to the Staff Portal</h3>
                    <p class="text-gray-600">Manage daily hostel operations, assist guests, and coordinate bookings efficiently using the navigation links above.</p>
                </div>
            </x-card>
            
            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 mt-6">
                <x-card class="bg-sky-50 border border-sky-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h4 class="font-bold text-sky-800 uppercase tracking-wide text-sm mb-1">Today's Check-ins</h4>
                        <p class="text-4xl font-extrabold text-sky-600 mt-2">14</p>
                        <p class="text-sm text-sky-700 mt-2">Pending arrivals for today</p>
                    </div>
                </x-card>
                
                <x-card class="bg-emerald-50 border border-emerald-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h4 class="font-bold text-emerald-800 uppercase tracking-wide text-sm mb-1">Available Beds</h4>
                        <p class="text-4xl font-extrabold text-emerald-600 mt-2">26</p>
                        <p class="text-sm text-emerald-700 mt-2">Ready for walk-in guests</p>
                    </div>
                </x-card>
                
                <x-card class="bg-amber-50 border border-amber-200 rounded-lg shadow-sm">
                    <div class="p-6">
                        <h4 class="font-bold text-amber-800 uppercase tracking-wide text-sm mb-1">Action Required</h4>
                        <p class="text-4xl font-extrabold text-amber-600 mt-2">5</p>
                        <p class="text-sm text-amber-700 mt-2">Pending bookings to review</p>
                    </div>
                </x-card>
            </div>
            
            <div class="mt-8 text-center text-sm text-gray-500">
                Summer Hostel Management System &copy; {{ date('Y') }}
            </div>
        </div>
    </div>
</x-app-layout>
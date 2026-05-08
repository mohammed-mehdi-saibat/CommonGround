<x-app-layout>
    <x-slot name="header">
        <div class="flex justify-between items-center w-full">
            <h2 class="font-bold text-2xl text-slate-800 flex items-center gap-4">
                <a href="{{ route('admin.categories.index') }}" class="p-2 -ml-2 rounded-full hover:bg-slate-100 text-slate-400 hover:text-sky-500 transition-all">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 19l-7-7m0 0l7-7m-7 7h18"></path></svg>
                </a>
                <span>{{ __('Category Details') }}</span>
            </h2>
            <a href="{{ route('admin.categories.edit', $category) }}">
                <x-button class="bg-amber-500 hover:bg-amber-600 text-white shadow-sm">Edit Category</x-button>
            </a>
        </div>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <x-card class="p-6">
                <h3 class="text-2xl font-bold text-sky-800 mb-2">{{ $category->name }}</h3>
                <p class="text-gray-700">{{ $category->description }}</p>
                
                <h4 class="text-xl font-semibold text-gray-800 mt-6 mb-4">Dorms in this Category</h4>
                <ul class="list-disc pl-5">
                    @forelse($category->dorms ?? [] as $dorm)
                        <li><a href="{{ route('admin.dorms.show', $dorm) }}" class="text-sky-600 hover:underline">{{ $dorm->name }}</a></li>
                    @empty
                        <li class="text-gray-500">No dorms currently assigned to this category.</li>
                    @endforelse
                </ul>
            </x-card>
        </div>
    </div>
</x-app-layout>
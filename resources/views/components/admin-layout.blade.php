@props(['header' => null])

<div class="min-h-screen flex">
    @include('layouts.partials.admin-sidebar')

    <div class="flex-1 flex flex-col">
        @include('layouts.partials.admin-topnav')

        <main class="flex-1 overflow-auto pt-24">
            <div class="max-w-7xl mx-auto px-8 pb-12">
                {{ $slot }}
            </div>
        </main>
    </div>
</div>

@stack('scripts')

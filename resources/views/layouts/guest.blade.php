<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Commonground') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-slate-900 antialiased bg-[#fdf8f1] relative overflow-hidden">
        <!-- Zellige Pattern Overlay -->
        <div class="absolute inset-0 opacity-[0.03] pointer-events-none" style="background-image: url('data:image/svg+xml,%3Csvg width=\"60\" height=\"60\" viewBox=\"0 0 60 60\" xmlns=\"http://www.w3.org/2000/svg\"%3E%3Cpath d=\"M30 0l30 30-30 30L0 30z\" fill=\"%232b5797\" fill-rule=\"evenodd\"/%3E%3C/svg%3E');"></div>

        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 relative z-10">
            <div class="mb-8 transform hover:scale-105 transition-transform duration-500">
                <a href="/" class="flex flex-col items-center gap-4">
                    <svg class="w-16 h-16 text-blue-600 drop-shadow-xl" fill="currentColor" viewBox="0 0 24 24"><path d="M12 0l3.09 8.26h8.91l-7.21 5.24 2.76 8.5-7.55-5.48-7.55 5.48 2.76-8.5-7.21-5.24h8.91z"/></svg>
                    <h1 class="text-4xl font-black text-blue-600 tracking-tighter uppercase italic">Commonground</h1>
                </a>
            </div>

            <div class="w-full sm:max-w-xl mt-6 px-10 py-12 bg-white shadow-3xl shadow-slate-200/50 overflow-hidden rounded-[3rem] border border-orange-50 relative">
                <!-- Inner Arch Decor -->
                <div class="absolute top-0 left-0 w-full h-2 bg-gradient-to-r from-blue-600 via-orange-600 to-amber-400"></div>
                {{ $slot }}
            </div>
            
            <div class="mt-12 text-center">
                <a href="/" class="text-slate-400 hover:text-blue-600 font-bold text-xs uppercase tracking-[0.3em] transition-colors">
                    ← Back to the Riad
                </a>
            </div>
        </div>
    </body>
</html>
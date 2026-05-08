@props(['variant' => 'primary'])

@php
$baseClasses = 'inline-flex items-center px-6 py-2.5 rounded-xl font-bold text-xs tracking-[0.1em] uppercase transition ease-in-out duration-150 shadow-md focus:outline-none focus:ring-2 focus:ring-offset-2 disabled:opacity-25';

$variantClasses = match ($variant) {
    'primary' => 'bg-blue-600 border border-transparent text-white hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800 focus:ring-blue-600',
    'secondary' => 'bg-orange-600 border border-transparent text-white hover:bg-orange-700 focus:bg-orange-700 active:bg-orange-800 focus:ring-orange-600',
    'accent' => 'bg-amber-400 border border-transparent text-amber-900 hover:bg-amber-500 focus:bg-amber-500 active:bg-amber-600 focus:ring-amber-400',
    'support' => 'bg-emerald-700 border border-transparent text-white hover:bg-emerald-800 focus:bg-emerald-800 active:bg-emerald-900 focus:ring-emerald-700',
    'outline' => 'bg-transparent border-2 border-blue-600 text-blue-600 hover:bg-blue-50 focus:bg-blue-50 active:bg-blue-100 focus:ring-blue-600',
    default => 'bg-blue-600 border border-transparent text-white hover:bg-blue-700 focus:bg-blue-700 active:bg-blue-800 focus:ring-blue-600',
};
@endphp

<button {{ $attributes->merge(['type' => 'submit', 'class' => "$baseClasses $variantClasses"]) }}>
    {{ $slot }}
</button>

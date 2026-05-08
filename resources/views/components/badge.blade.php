@props(['variant' => 'default'])

@php
$baseClasses = 'inline-flex items-center px-2.5 py-0.5 rounded-full text-xs font-medium';

$variantClasses = match ($variant) {
    'success' => 'bg-emerald-100 text-emerald-800',
    'warning' => 'bg-amber-100 text-amber-800',
    'danger' => 'bg-red-100 text-red-800',
    'info' => 'bg-sky-100 text-sky-800',
    default => 'bg-slate-100 text-slate-800',
};
@endphp

<span {{ $attributes->merge(['class' => "$baseClasses $variantClasses"]) }}>
    {{ $slot }}
</span>

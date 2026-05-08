@props(['status'])

@if ($status)
    <div {{ $attributes->merge(['class' => 'font-medium text-sm text-emerald-600 bg-emerald-50 p-2 rounded-md']) }}>
        {{ $status }}
    </div>
@endif

@props(['value'])

<label {{ $attributes->merge(['class' => 'block font-bold text-sm text-slate-900 uppercase tracking-widest mb-2']) }}>
    {{ $value ?? $slot }}
</label>

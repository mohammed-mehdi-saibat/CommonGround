@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'border-amber-200 focus:border-blue-600 focus:ring-blue-600 rounded-xl shadow-sm text-slate-900 bg-[#fffcf8] py-3']) !!}>

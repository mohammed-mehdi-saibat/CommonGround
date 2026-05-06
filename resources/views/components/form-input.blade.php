@props(['label' => '', 'name' => '', 'id' => '', 'type' => 'text', 'value' => '', 'placeholder' => '', 'required' => false])

@php
    $id = $id ?: $name;
@endphp

<div class="space-y-2 group">
    @if($label)
        <label class="block font-label-sm text-label-sm text-on-surface-variant" for="{{ $id }}">
            {{ $label }}
            @if($required)
                <span class="text-error">*</span>
            @endif
        </label>
    @endif

    <div class="relative">
        <input
            type="{{ $type }}"
            id="{{ $id }}"
            name="{{ $name }}"
            value="{{ old($name, $value) }}"
            placeholder="{{ $placeholder }}"
            {{ $required ? 'required' : '' }}
            class="w-full px-4 py-3 bg-surface-container-low border border-outline-variant rounded-lg font-body-md text-body-md text-on-surface focus:outline-none focus:ring-2 focus:ring-primary-container/20 focus:border-primary transition-all duration-200 @error($name) border-error ring-error/20 @enderror"
        />
    </div>

    @error($name)
        <p class="text-error text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

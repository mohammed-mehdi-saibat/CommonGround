@props(['status'])

@php
    $statusClasses = [
        'active' => 'bg-green-50 text-green-700 border-green-200',
        'inactive' => 'bg-gray-50 text-gray-700 border-gray-200',
        'pending' => 'bg-yellow-50 text-yellow-700 border-yellow-200',
        'occupied' => 'bg-blue-50 text-blue-700 border-blue-200',
        'available' => 'bg-green-50 text-green-700 border-green-200',
        'cleaning' => 'bg-orange-50 text-orange-700 border-orange-200',
        'off-duty' => 'bg-gray-50 text-gray-700 border-gray-200',
    ];

    $classes = $statusClasses[strtolower($status)] ?? $statusClasses['inactive'];
@endphp

<span class="inline-flex items-center px-3 py-1 rounded-full text-xs font-semibold border {{ $classes }}">
    {{ ucfirst($status) }}
</span>

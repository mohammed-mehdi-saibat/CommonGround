<div {{ $attributes->merge(['class' => 'bg-white overflow-hidden shadow-xl shadow-slate-200/50 rounded-[2rem] border border-amber-50']) }}>
    <div class="p-8 text-slate-900">
        {{ $slot }}
    </div>
</div>

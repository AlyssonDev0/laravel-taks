@props(['status'])

@if ($status)

<div {{ $attributes->merge(['class' => 'flex items-center font-medium text-sm bg-green-100 border border-green-400 rounded text-green-700 mb-3 px-4 py-3 alirounded relative', 'role' => 'alert' ])}}>
    <span class="material-symbols-outlined">
        check_circle
    </span>
    <div class="pl-8" style="padding-left: 10px;">
        {{ $status }} 
    </div>
</div>
@endif
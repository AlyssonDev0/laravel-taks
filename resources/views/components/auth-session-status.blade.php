@props(['status'])

@if ($status)

    <div {{ $attributes->merge(['class' => 'font-medium text-sm bg-green-100 border border-green-400 text-green-700 mb-3 px-4 py-3 rounded relative', 'role' => 'alert' ])}}>
        {{ $status }}
    </div>
@endif

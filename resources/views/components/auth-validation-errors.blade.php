@props(['errors'])

@if ($errors->any())

<div class="bg-red-100 border border-red-400 text-red-700 mb-3 px-4 py-3 rounded relative" role="alert" {{ $attributes }}>
    <div class="flex gap-2">
        <span class="material-symbols-outlined">
            error
        </span>
        <div class="font-medium text-red-800 ml-1">
            {{ __('Ops! Algo deu errado.') }}
        </div>
    </div>


    <ul class="mt-3 list-none list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>
@endif
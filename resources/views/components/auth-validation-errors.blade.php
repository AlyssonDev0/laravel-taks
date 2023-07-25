@props(['errors'])

@if ($errors->any())

<div class="bg-red-100 border border-red-400 text-red-700 mb-3 px-4 py-3 rounded relative" id="alert" role="alert" {{ $attributes }}>
    <div class="flex justify-between align-center">

        <div class="flex gap-1 align-center">
            <span class="material-symbols-outlined">
                error
            </span>
            <div class="font-medium ml-1">
                {{ __('Ops! Algo deu errado.') }}
            </div>
        </div>

        <button type="button" class="text-red-700 hover:text-red-500 active:text-red-900" onclick="closeAlert(this)">
            <span class="material-symbols-outlined">
                close
            </span>
        </button>
    </div>




    <ul class="mt-3 list-none list-inside text-sm text-red-600">
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>

</div>
<script>
    function closeAlert(button) {
        const alert = button.closest('#alert');
        alert.style.display = 'none';
    }
</script>
@endif
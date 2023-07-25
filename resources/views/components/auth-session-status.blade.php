@props(['status'])

@if ($status)

<div {{ $attributes->merge(['class' => 'flex items-center justify-between font-medium text-sm bg-green-100 border border-green-400 rounded text-green-700 mb-3 px-4 py-3 alirounded relative', 'role' => 'alert' ])}}>

    <div class="flex gap-2 align-center">
        <div class="material-symbols-outlined">
            check_circle
        </div>
        <div class="ml-3      mt-1">
            {{ $status }}
        </div>
    </div>

    <button type="button" class="flex align-center text-green-700 hover:text-green-500 active:text-green-900" onclick="closeAlert(this)">
        <span class="material-symbols-outlined">
            close
        </span>
    </button>
</div>
<script>
    function closeAlert(button) {
        const alert = button.closest('.relative');
        alert.style.display = 'none';
    }
</script>
@endif
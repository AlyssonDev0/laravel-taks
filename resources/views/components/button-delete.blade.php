<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-2 py-1 bg-red-400 border border-transparent rounded-md font-semibold text-xs text-red-950 uppercase tracking-widest hover:bg-red-500 active:bg-red-600 focus:outline-none focus:border-red-600 focus:ring ring-red-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

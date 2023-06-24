<button {{ $attributes->merge(['type' => 'button', 'class' => 'inline-flex items-center px-2 py-1 bg-sky-300 border border-transparent rounded-md font-semibold text-xs text-sky-900 uppercase tracking-widest hover:bg-sky-400 active:bg-sky-500 focus:outline-none focus:border-sky-600 focus:ring ring-sky-300 disabled:opacity-25 transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

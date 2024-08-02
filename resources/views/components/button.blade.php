<button
    {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 ']) }}>
    {{ $slot }}
</button>
{{-- $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-gray-500 dark:bg-gray-100 border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-500 uppercase tracking-widest hover:bg-gray-900 dark:hover:bg-white focus:bg-gray-900 dark:focus:bg-white active:bg-gray-900 dark:active:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-500 disabled:opacity-50 transition ease-in-out duration-150']) }}>
    --}}

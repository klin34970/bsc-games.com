<button {{ $attributes->merge(['type' => 'submit', 'class' => 'bg-tree-600 p-2 rounded border-b-8 border-tree-900 text-white hover:bg-tree-900']) }}>
    {{ $slot }}
</button>
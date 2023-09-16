@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'px-3 py-3 placeholder-tree-300 text-tree-900 bg-white rounded text-sm shadow focus:ring-2 focus:border-transparent focus:outline-none w-full ease-linear transition-all duration-150']) !!}>
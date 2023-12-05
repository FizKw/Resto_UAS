@props(['disabled' => false])

<input {{ $disabled ? 'disabled' : '' }} {!! $attributes->merge(['class' => 'w-full text-lg border border-black bg-kuning-500 ring-merah-500 focus:border-merah-500 focus:ring-merah-500 rounded-lg placeholder:italic placeholder:text-orange-800 placeholder:opacity-60 px-3 py-3.5']) !!}>


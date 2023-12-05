<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-xl font-bold flex-none md:px-8 px-5 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 mr-3 md:mr-6 py-2 h-10   text-biru-500 hover:border-black  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

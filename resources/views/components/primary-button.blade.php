<button {{ $attributes->merge(['type' => 'submit', 'class' => 'rounded-none font-bold  flex-none md:px-12 px-8 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 mr-6 py-2 h-10 w-22  text-blackhover:border-none  transition ease-in-out duration-150']) }}>
    {{ $slot }}
</button>

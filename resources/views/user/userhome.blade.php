<x-app-layout>
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2">
    <div class="container lg:grid lg:grid-cols-2 lg:mx-auto mx-6 mt-28 lg:justify-center mb-4">
        <p class="text-6xl md:text-7xl font-bold mx-6 text-white">Discover<br> Our Menu</p>
        <p class="md:mx-8 mx-6 mt-4 md:mt-14 text-md text-white font-light">Rasakan kenikmatan dari mie ayam dengan resep rahasia racikan keluarga.</p>
    </div>
    <livewire:foodlist.food-list />
    
</x-app-layout>

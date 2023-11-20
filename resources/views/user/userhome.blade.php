<x-app-layout>
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2">
  <div class="container lg:grid lg:grid-cols-2 lg:mx-auto mx-6 mt-28 lg:justify-center mb-4">
        <div class=" md:mx-16 mx-4 mt-9 col">
            <p class="text-7xl font-bold text-white">Discover<br> Our Menu</p>
        </div>
        <div class="md:mx-8 mx-4  mt-14 col">
            <p class="text-md text-white font-light ">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Perferendis ratione reprehenderit provident atque. Iste ad repellat nesciunt hic quod! Modi quos unde corporis inventore nam cupiditate doloremque, mollitia earum quod.</p>
        </div>
  </div>
        <livewire:foodlist.food-list />
    
        
</x-app-layout>
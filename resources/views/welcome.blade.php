<x-app-layout>
    <div class="hero min-h-screen relative" style="background-image: url(https://daisyui.com/images/stock/photo-1507358522600-9f71e620c44e.jpg);">
        <div class="hero-overlay bg-opacity-60"></div>
        <div class="hero-content text-center text-neutral-content">
          <div class="max-w-md">
            <h1 class="mb-5 text-5xl font-bold">Best food to fulfill your belly.</h1>
            @auth
            <a href="{{ route('home') }}"  class=" btn rounded-full bg-color1 hover:bg-red-400 text-white" wire:navigate>
            @else
            <a href="{{ route('menu') }}"  class=" btn rounded-full bg-color1 hover:bg-red-400 text-white" wire:navigate>
            @endauth
            Our Menu
            </a>
            <a href="#foodcart" class=" btn rounded-full bg-color1 hover:bg-red-400 text-white"> Get Started</a>
            <p id="foodcart" class="opacity-0 text-3xl absolute bottom-7">asdas</p>
          </div>
        </div>
    </div>  
    
        <livewire:carousel.carousel />
</x-app-layout>
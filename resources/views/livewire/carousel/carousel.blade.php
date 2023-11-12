<div>
  @if (isset($item1) && isset($item2))
  <div class="carousel w-full ">
    <div id="slide1" class="relative w-full carousel-item grid grid-rows-1 grid-flow-col pt-10 ">
      <div class="mt-18 max-w-md ml-24">
        <h1 class="text-7xl text-white font-semibold leading-none">Mie Ayam<br>Unggulan</h1>
        <p class="text-white mt-6 mb-2">Mie ayam ini dibuat dengan sebuah rasa cinta dengan perpaduan ayam yang sudah di beri bumbu khas inni product</p>
        <div  class="relative mt-3 mx-10">
            <button class="w-32 h-9 left-0 top-2 absolute border-2 border-yellow-600">
              @auth
              <a href="{{ route('home') }}" class="left-3 top-1 absolute text-center text-yellow-600 text-xl font-bold" wire:navigate>Our Menu</a>
              @else
              <a href="{{ route('menu') }}" class="left-3 top-1 absolute text-center text-yellow-600 text-xl font-bold" wire:navigate>Our Menu</a>
              @endauth
            </button>
        </div>
      </div>
      <div class="">
          <img class="w-[712px] h-[570px] mx-10 object-center object-cover" src="{{ asset('storage/' . $item1->food_image) }}" />
      </div>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
          </svg>
        </a>
        <a href="#slide2">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
          </svg>
        </a>
      </div>
    </div>
    
    <div id="slide2" class="relative w-full carousel-item grid grid-rows-1 grid-flow-col pt-10">
      <div class="mt-18 max-w-md ml-24">
        <h1 class="text-7xl text-white font-semibold leading-none">Mozarella<br>Choco</h1>
        <p class="text-white mt-6 mb-2">Stik mozzarella adalah potongan-potongan mozzarella yang dilapisi adonan encer atau tepung roti. Stik mozzarella disajikan dengan saus coklat cruchy</p>
        <div  class="relative mt-3 mx-10">
            <button class="w-32 h-9 left-0 top-2 absolute border-2 border-yellow-600">
              @auth
              <a href="{{ route('home') }}" class="left-3 top-1 absolute text-center text-yellow-600 text-xl font-bold" wire:navigate>Our Menu</a>
              @else
              <a href="{{ route('menu') }}" class="left-3 top-1 absolute text-center text-yellow-600 text-xl font-bold" wire:navigate>Our Menu</a>
              @endauth
            </button>
        </div>
      </div>
      <div>
          <img class="w-[712px] h-[570px] mx-10 object-center object-cover" src="{{ asset('storage/' . $item2->food_image) }}" />
      </div>
      <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
        <a href="#slide1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
          </svg>
        </a>
        <a href="#slide1">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
            <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
          </svg>
        </a>
      </div>
    </div>
    @else
    <h1>NO Item Found</h1>
    @endif



  </div>



    {{-- @if (isset($item1) && isset($item2))
    <div class="carousel w-full">
        <div id="slide1" class="carousel-item relative w-full">
          
          <img src="{{ asset('storage/' . $item1->food_image) }}" class="w-40" />

          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2" class="btn btn-circle">❮</a> 
            <a href="#slide2" class="btn btn-circle">❯</a>
          </div>
        </div> 
        <div id="slide2" class="carousel-item relative w-full">
          <img src="{{ asset('storage/' . $item2->food_image) }}" class="w-40" />
          <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1" class="btn btn-circle">❮</a> 
            <a href="#slide1" class="btn btn-circle">❯</a>
          </div>
        </div> 
    </div>
    @else
    <h1>NO Item Found</h1>
    @endif --}}
</div>

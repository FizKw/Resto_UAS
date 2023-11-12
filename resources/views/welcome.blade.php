<x-app-layout>    
  <livewire:carousel.carousel />

  <div class="grid grid-rows-1 grid-flow-col gap-2 mt-20">
    <div class="ml-24 mt-20">
        <img class="w-[404px] h-[621px] object-cover object-center" src="https://via.placeholder.com/405x621" />
    </div>
    <div class="mr-36 mt-20">
        <h1 class="text-5xl text-white font-semibold leading-normal mt-4">A distinctive dining <br>destination inspired by <br> the culture.</h1>
      <div class="flex justify-start gap-3 mt-44 border-b-4 border-kuning-500 pb-12">
        <div>
            <img class="w-30 h-35 object-cover object-center" src="https://via.placeholder.com/151x156" />
        </div>
        <div>
            <img class="w-30 h-35 px-12 object-cover object-center" src="https://via.placeholder.com/151x156" />
        </div>
        <div>
            <img class="w-30 h-35 object-cover object-center" src="https://via.placeholder.com/151x156" />
        </div>
      </div>
    </div>
</div>
<div class="mt-20 h-96 bg-gradient-to-r bg-rose-950 bg-opacity-70">
  <div class="mt-60 mx-auto h-44 text-center text-white text-3xl font-black font-['Poppins']">
     <br><br><br> A unique menu that <br> reflects the true essence <br> of the Indonesian cuisine <br>
      <button class="my-auto mx-auto text-center text-yellow-600 mt-8">
        @auth
        <a href="{{ route('home') }}" class="" wire:navigate>Our Menu</a>
        @else
        <a href="{{ route('menu') }}" class="" wire:navigate>Our Menu</a>
        @endauth
      </button>
  </div>
</div>
</x-app-layout>
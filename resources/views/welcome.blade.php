<x-app-layout>    
  <livewire:carousel.carousel />

  <div class="relative h-full">
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute right-16 top-0 w-[40%] h-full">

    {{-- Media Query dekstop --}}
    <div class="hidden xl:grid grid-cols-5 relative">
      <img src="{{ asset('asset/vector/kotak2.png') }}" class="absolute right-[4.2rem] -bottom-6 ">
      <div class="ml-32 pt-2 col-span-2 col-start-1">
          <img class="w-[75%] h-[40rem] object-cover object-center " src="{{ asset('asset/mie-ayam/tempat.png') }}" />
      </div>
      <div class="mr-36 mt-20 col-span-3 col-start-3">
        <h1 class="xl:text-5xl md:text-3xl text-xl text-white font-semibold leading-normal mt-4">A distinctive dining <br>destination inspired by <br> the culture.</h1>
        <div class="flex justify-start gap-3 mt-20 md:mt-32 lg:mt-40 xl:mt-44 relative pb-12">
          <img src="{{ asset('asset/vector/garis.png') }}" class="absolute w-[75%] right-3/5 bottom-3 ">
          <div>
              <img class="w-[200px] h-[180px] object-cover object-center" src="{{ asset('asset/mie-ayam/mie-1.png') }}" />
          </div>
          <div>
              <img class="w-[200px] h-[180px] mx-12 object-cover object-center" src="{{ asset('asset/mie-ayam/mie-2.png') }}" />
          </div>
          <div>
              <img class="w-[200px] h-[180px] object-cover object-center" src="{{ asset('asset/mie-ayam/mie-3.png') }}" />
          </div>
        </div>
      </div>
    </div>

    <div class="xl:hidden block mt-18">
      <h1 class=" mx-12 text-center text-3xl md:text-4xl text-white font-semibold mb-6">A distinctive dining destination inspired by the culture.</h1>
      <div class="grid md:grid-cols-4 grid-cols-2 gap-8 ">
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] md:mx-auto md:hidden ml-auto object-cover object-center" src="{{ asset('asset/mie-ayam/mie-1.png') }}" />
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] md:mx-auto md:hidden object-cover object-center" src="{{ asset('asset/mie-ayam/mie-3.png') }}" />
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] hidden md:block md:mx-auto object-cover object-center" src="{{ asset('asset/mie-ayam/tempat.png') }}" />
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] hidden md:block md:mx-auto object-cover object-center" src="{{ asset('asset/mie-ayam/mie-1.png') }}" />
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] hidden md:block md:mx-auto object-cover object-center" src="{{ asset('asset/mie-ayam/mie-2.png') }}" />
        <img class="w-[200px] h-[180px] sm:w-[250px] sm:h-[200px] md:w-[200px] md:h-[180px] hidden md:block md:mx-auto object-cover object-center" src="{{ asset('asset/mie-ayam/mie-3.png') }}" />

      </div>
    </div>
  </div>

<div class="grid lg:grid-cols-2 mt-32 ml-72 mx-96">
          <div class="max-w-lg max-h-96 bg-yellow-600 ml-16">
            <div class="w-7 h-7 text-blue-950 text-6xl font-black font-['Poppins'] leading-10 mt-5 ml-5">“</div>
            <div class="w-96 opacity-90 text-blue-950 text-xl font-normal font-['Inter'] leading-10 ml-9">You can't go wrong with Chicken Mandi, I had it twice. The chicken was cooked perfectly, juicy & soft (usually mandi chicken is a bit dry). I would defiantly recommend it.</div>
            <div class="opacity-90 text-blue-950 text-sm font-medium font-['Poppins'] leading-tight mt-10 ml-9">Khalid Al Dawsry</div>
            <div class="opacity-60 text-blue-950 text-xs font-medium font-['Poppins'] leading-3 mt-1 ml-9">Jeddah, Saudi</div> 
          </div>
          <div class="max-w-fit max-h-fit ml-0">
            <video controls>
              <source src="asset/2023-10-18 00-32-39.mkv" />
            </video>
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
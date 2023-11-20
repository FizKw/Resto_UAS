<x-app-layout>    
  <livewire:carousel.carousel />


    {{-- Media Query dekstop --}}
    <div class="hidden xl:grid grid-cols-5 relative">
      <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute right-16 top-0 w-[40%] h-full">
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

    {{-- Media query Tablet & HP --}}
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

    <div class="lg:flex justify-center mt-40 mx-auto">
      <div class=" mx-auto lg:mx-0 w-[68%] lg:w-[30%] bg-kuning-500 relative">
        <div class="w-7 h-7 text-blue-950 text-6xl  leading-10 mt-5 ml-5">“</div>
        <p class="mx-9 opacity-90 text-blue-950 xl:text-2xl lg:text-xl text-lg  font-['Inter']">You can't go wrong with Chicken Mandi, I had it twice. The chicken was cooked perfectly, juicy & soft (usually mandi chicken is a bit dry). I would defiantly recommend it.</p>
        <p class=" text-blue-950 text-lg leading-tight mt-6 bottom-0 pb-3 ml-9">-Nggih al nggih</p>
      </div>
      <div class="w-[68%] lg:w-[50%] mx-auto lg:mx-0">
        <video controls>
          <source src="{{ asset('asset/BANGLORBANG.mp4') }}" />
        </video>
      </div>
    </div>

    <div class="md:flex justify-center mx-auto my-40">
      <div class="bg-blue-950 mx-auto md:mx-0 w-[68%] md:w-[30%] px-4 py-4">
        <h1 class="sm:text-xl font-bold text-yellow-600 ">Jam buka</h1>
        <p class=" text-sm sm:text-base text-white ">Setiap hari<br>09.00 AM to 11.00 PM<br>
        <h1 class="sm:text-xl font-bold text-yellow-600 mt-3 ">Lokasi</h1>
        <p class="text-sm sm:text-base text-white  ">Jl. Kelapa Gading Barat AG15 no.10 Kelurahan Kelapa Dua Kecamatan Panongan barat Kabupaten Tangeran</p>
        <h1 class="sm:text-xl font-bold text-yellow-600 mt-3">Contact Us</h1>
        <a href="https://www.instagram.com/mieayamalya/" target="_blank" rel="noopener noreferrer" class="flex">
          <img src="{{ asset('asset/instagram.png') }}" class="w-6 h-6 mt-2 mr-2" alt="">
          <p class=" text-sm sm:text-base text-white mt-2 hover:underline">@mieayamalya</p>
        </a>
      </div>
      <div class="w-[68%] md:w-[50%] mx-auto md:mx-0">
        <a href="https://maps.app.goo.gl/DN8h3Tknn3RkUGjL8" target="_blank" rel="noopener noreferrer">
          <img class="object-cover h-full" src="{{ asset('asset/placeholder.jpg') }}" alt="">
        </a>
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
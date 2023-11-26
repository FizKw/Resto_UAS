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

    <div class="md:flex justify-center mt-40 mx-auto">
      <div class=" mx-auto md:mx-0 w-[68%] md:w-[30%] bg-kuning-500 relative">
        <div class="w-7 h-7 text-blue-950 text-6xl  leading-10 mt-5 ml-5">“</div>
        <p class="mx-9 opacity-90 text-blue-950 xl:text-2xl lg:text-xl text-lg  font-['Inter']">You can't go wrong with Chicken Mandi, I had it twice. The chicken was cooked perfectly, juicy & soft (usually mandi chicken is a bit dry). I would defiantly recommend it.</p>
        <p class=" text-blue-950 text-lg leading-tight mt-6 bottom-0 pb-3 ml-9">-Nggih al nggih</p>
      </div>
      <div class="w-[68%] md:w-[50%] mx-auto md:mx-0">
        <iframe class="min-h-[370px] w-full" src="https://www.youtube.com/embed/Z4nFlOGZEJI?si=P_tFXuXvYCNZHjI2&amp;controls=0    " title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
      </div>
    </div>

    <div class="md:flex justify-center mx-auto my-40">
      <div class="bg-blue-950 mx-auto md:mx-0 w-[68%] md:w-[30%] px-4 py-4">
        <h1 class="sm:text-2xl font-bold text-yellow-600 ">Jam buka</h1>
        <p class=" text-sm sm:text-base text-white ">Setiap hari<br>09.00 AM to 11.00 PM<br>
        <h1 class="sm:text-2xl font-bold text-yellow-600 mt-4 ">Lokasi</h1>
        <p class="text-sm sm:text-base text-white  ">Jl. Kelapa Gading Barat AG15 no.10 Kelurahan Kelapa Dua Kecamatan Panongan barat Kabupaten Tangerang</p>
        <h1 class="sm:text-2xl font-bold text-yellow-600 mt-4 ">Maps</h1>
        <a href="https://maps.app.goo.gl/DN8h3Tknn3RkUGjL8" target="_blank" rel="noopener noreferrer" class="text-sm sm:text-base text-white underline hover:text-gray-200 ">Klik disini</a>
        <h1 class="sm:text-2xl font-bold text-yellow-600 mt-4">Contact Us</h1>
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
<footer>
        <div class="p-10 bg-yellow-600 text-red-900">
            <div class="w-40 ml-5">
            {{-- ga ada gambar --}}
                <img src="" alt="">
            </div>
            <div class="max-w-7xl mx-auto">
                <div class="grid grid-cols-2">
                    <div class="grid grid-cols-4 px-5">
                        <a class="ml-10 mt-10 text-sm font-bold" href="">Home</a>
                        <a class="ml-10 mt-10 text-sm font-bold" href="">About</a>
                        <a class="ml-10 mt-10 text-sm font-bold" href="">Menu</a>
                        <a class="ml-10 mt-10 text-sm font-bold" href="">Contact Us</a>
                        <div class="grid grid-cols-2 items-center gap-64 pl-20 py-5">
                            <div class="w-max">
                                <h1 class="text-xl font-bold">Contact Us</h1>
                                <p class="py-2 font-semibold">Most calendars are design<br>for teams. Slate is designed<br>for freelancers</p>
                            </div>
                            <div class="w-max py-5">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                                </svg>
                                <p class="font-semibold py-2">Jalan Perkasa sejahtera<br>no 123, Serpong<br>Kab.Tangerang</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                                </svg>
                                <p class="font-semibold py-2">BBCTour@gmail.com</p>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                                </svg>
                                <p class="font-semibold py-2">(021) 441-571</p>
                            </div>
                            
                        </div>
                        {{-- ga ada gambar --}}
                    </div> 
                    <a href="#" class="max-w-md mx-auto my-auto"><img src="" alt=""></a>
                </div>
                
                <div class="h-px max-h-full opacity-50 border border-black">
                    <div class="flex justify-left items-center gap-5">
                        <p class="text-blue-950 mt-1.5 font-sans font-bold">© 2021 | All Rights Reserved.</p>                               
                    </div>
                </div>
            </div>
            
        </div>
    </footer>
</x-app-layout>
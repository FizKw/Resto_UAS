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
        <div class="py-10 bg-yellow-600 text-red-900">
            <div class="max-w-7xl mx-auto">
                <div class="flex justify-center gap-5">
                    <a class="ml-10 mt-10 text-lg" href="">Home</a>
                    <a class="ml-10 mt-10 text-lg" href="">About</a>
                    <a class="ml-10 mt-10 text-lg" href="">Menu</a>
                    <a class="ml-10 mt-10 text-lg" href="">Contact Us</a>
                </div>
                <div class="mt-16 h-px max-h-full opacity-50 border border-black">
                    <div class="flex justify-left items-center gap-5">
                        <p class="text-blue-950 mt-1.5 font-sans font-bold">© 2021 | All Rights Reserved.</p>
                        <div class="flex justify-center items-center gap-5 mt-2 mx-80">
                            
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg></a>
                            
                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg></a>

                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg></a>

                            <a href=""><svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 18.75a60.07 60.07 0 0115.797 2.101c.727.198 1.453-.342 1.453-1.096V18.75M3.75 4.5v.75A.75.75 0 013 6h-.75m0 0v-.375c0-.621.504-1.125 1.125-1.125H20.25M2.25 6v9m18-10.5v.75c0 .414.336.75.75.75h.75m-1.5-1.5h.375c.621 0 1.125.504 1.125 1.125v9.75c0 .621-.504 1.125-1.125 1.125h-.375m1.5-1.5H21a.75.75 0 00-.75.75v.75m0 0H3.75m0 0h-.375a1.125 1.125 0 01-1.125-1.125V15m1.5 1.5v-.75A.75.75 0 003 15h-.75M15 10.5a3 3 0 11-6 0 3 3 0 016 0zm3 0h.008v.008H18V10.5zm-12 0h.008v.008H6V10.5z" />
                            </svg></a>

                        </div>                                  
                    </div>
                </div>
            </div>  
        </div>
    </footer>
</x-app-layout>
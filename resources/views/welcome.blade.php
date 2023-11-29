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

    <div class="md:flex justify-center mt-32 mx-auto">

      <div class="w-[68%] md:w-[50%] mx-auto md:mx-0">
        <blockquote class="tiktok-embed" cite="https://www.tiktok.com/@inizollael/video/7304470547319049477" data-video-id="7304470547319049477" style="max-width: 605px;min-width: 325px;" > <section> <a target="_blank" title="@inizollael" href="https://www.tiktok.com/@inizollael?refer=embed">@inizollael</a> Saking enaknya, mau nambah lagi! endul bgt! <a title="mieayam" target="_blank" href="https://www.tiktok.com/tag/mieayam?refer=embed">#mieayam</a> <a title="bakmiehalal" target="_blank" href="https://www.tiktok.com/tag/bakmiehalal?refer=embed">#bakmiehalal</a> <a title="mieayambakso" target="_blank" href="https://www.tiktok.com/tag/mieayambakso?refer=embed">#mieayambakso</a> <a title="kulinertangerang" target="_blank" href="https://www.tiktok.com/tag/kulinertangerang?refer=embed">#kulinertangerang</a> <a title="kulinergadingserpong" target="_blank" href="https://www.tiktok.com/tag/kulinergadingserpong?refer=embed">#kulinergadingserpong</a> <a title="mieayamalya" target="_blank" href="https://www.tiktok.com/tag/mieayamalya?refer=embed">#mieayamalya</a>  </section> </blockquote> <script async src="https://www.tiktok.com/embed.js"></script>
      </div>
    </div>
        
  <div class="mt-20 h-96 bg-gradient-to-r bg-rose-950 bg-opacity-70">
    <div class="mx-auto h-44 text-center text-white text-3xl font-black font-['Poppins']">
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
  <footer class=" flex justify-around bg-biru-500">
    <div>
      <header class="sm:text-2xl font-bold text-kuning-500 px-2 py-4">Hubungi kami</header> 
      <div class="flex justify-evenly">
        <a href="https://www.instagram.com/mieayamalya/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/instagram.png') }}" class="w-6 h-6" alt="" ></a>
        <a href="https://api.whatsapp.com/send/?phone=6285888320662&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/whatsapp.png') }}" class="w-6 h-6" alt="" ></a>
        <a href="https://www.google.com/maps/place/Mie+ayam+alya/@-6.232512,106.627645,19z/data=!3m1!4b1!4m6!3m5!1s0x2e69fd809a7b35e1:0x2dfb1410455b1d01!8m2!3d-6.232512!4d106.6282887!16s%2Fg%2F11vlkjh76b?hl=id&entry=ttu" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/map.png') }}" class="w-6 h-6" alt="" ></a>
      </div>
    </div>
    <div class="mx-auto md:mx-0 w-[68%] md:w-[30%] px-2 py-4">
      <h1 class="sm:text-2xl font-bold text-kuning-500 ">Jam buka</h1>
      <p class=" text-sm sm:text-base text-white ">Setiap hari<br>09.00 AM to 11.00 PM<br>
      <h1 class="sm:text-2xl font-bold text-kuning-500 mt-4 ">Lokasi</h1>
      <p class="text-sm sm:text-base text-white  ">Jl. Kelapa Gading Barat AG15 no.10 Kelurahan Kelapa Dua Kecamatan Panongan barat Kabupaten Tangerang</p>
    </div>
    <div class="w-[68%] md:w-[30%] mx-auto md:mx-0">
      <a href="https://www.google.com/maps/place/Mie+ayam+alya/@-6.232512,106.627645,19z/data=!3m1!4b1!4m6!3m5!1s0x2e69fd809a7b35e1:0x2dfb1410455b1d01!8m2!3d-6.232512!4d106.6282887!16s%2Fg%2F11vlkjh76b?hl=id&entry=ttu" target="_blank" rel="noopener noreferrer">
        <img class="object-cover h-full" src="{{ asset('asset/maps.png') }}" alt="">
      </a>
    </div>
  </footer>
</x-app-layout>
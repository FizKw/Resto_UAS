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
    <footer class=" flex justify-around bg-kuning-500">
        <div>
          <header class="sm:text-2xl font-bold text-merah-500 px-2 pt-20">Hubungi kami</header> 
          <div class="flex justify-evenly mt-2">
            <a href="https://www.instagram.com/mieayamalya/" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/instagram.png') }}" class="w-6 h-6" alt="" ></a>
            <a href="https://api.whatsapp.com/send/?phone=6285888320662&text&type=phone_number&app_absent=0" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/whatsapp.png') }}" class="w-6 h-6" alt="" ></a>
            <a href="https://www.google.com/maps/place/Mie+ayam+alya/@-6.232512,106.627645,19z/data=!3m1!4b1!4m6!3m5!1s0x2e69fd809a7b35e1:0x2dfb1410455b1d01!8m2!3d-6.232512!4d106.6282887!16s%2Fg%2F11vlkjh76b?hl=id&entry=ttu" target="_blank" rel="noopener noreferrer"><img src="{{ asset('asset/map.png') }}" class="w-6 h-6" alt="" ></a>
          </div>
        </div>
        <div class="mx-auto md:mx-0 w-[68%] md:w-[30%] px-2 py-4 text-merah-500">
          <h1 class="sm:text-2xl font-bold ">Jam buka</h1>
          <p class=" text-sm sm:text-base ">Setiap hari<br>09.00 AM to 11.00 PM<br>
          <h1 class="sm:text-2xl font-bold  mt-4 ">Lokasi</h1>
          <p class="text-sm sm:text-base ">Jl. Kelapa Gading Barat AG15 no.10 Kelurahan Kelapa Dua Kecamatan Panongan barat Kabupaten Tangerang</p>
        </div>
        <div class="w-[68%] md:w-[30%] md:mx-0">
          <a href="https://www.google.com/maps/place/Mie+ayam+alya/@-6.232512,106.627645,19z/data=!3m1!4b1!4m6!3m5!1s0x2e69fd809a7b35e1:0x2dfb1410455b1d01!8m2!3d-6.232512!4d106.6282887!16s%2Fg%2F11vlkjh76b?hl=id&entry=ttu" target="_blank" rel="noopener noreferrer">
            <img class="object-cover h-full" src="{{ asset('asset/maps.png') }}" alt="">
          </a>
        </div>
      </footer>
</x-app-layout>

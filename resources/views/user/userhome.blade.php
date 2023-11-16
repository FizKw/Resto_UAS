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
    
        <div class="grid lg:grid-cols-2">
          <div class="bg-blue-950 max-w-lg max-h-96 ml-96 my-40 px-4 py-4">
            <h1 class="text-2xl font-bold text-yellow-600">Q</h1>
            <p class="font-semibold text-white my-2">Sunday to Sunday<br>09.00 AM to 11.00 PM<br>Friday<br>02:00 PM to 1:00 AM</p>
            <h1 class="text-2xl font-bold text-yellow-600">Location</h1>
            <p class="text-white font-semibold my-2">Jl.cemara raya no 18 RT.001 RW.021 Kelurahan: cibodassari, RT.004/RW.021, Kecamatan:, Kec. Cibodas, Kota Tangerang, Banten 15138</p>
            <h1 class="text-2xl font-bold text-yellow-600">Contact Us</h1>
            <p class="font-semibold text-white my-2">+123456789<br>service@maizresturant.com</p>
          </div>
          <div>
            <a href="https://maps.app.goo.gl/DN8h3Tknn3RkUGjL8">
              <img class="my-40 max-w-xl h-96" src="asset/RobloxScreenShot20231102_232009421.png" alt="">
            </a>
          </div>
        </div>
</x-app-layout>
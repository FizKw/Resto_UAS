<x-app-layout>
    <section class="py-12 px-4 lg:px-0 container mx-auto">
        <div class="grid grid-rows-1 grid-flow-col gap-2 mt-10">
            <div>
                <h2 class="text-center font-semibold text-2xl text-kuning-500 p-6 ml-96">Pemasukan</h2>
            </div>

            <div>
                <h5 class="font-semibold text-1xl text-kuning-500 p-6 ml-96">Periode 12/10/2023</h5>
                <div class="w-[344px] h-[180px] bg-blue-950 rounded-[29px] border-2 border-yellow-600 ml-96">
                    <h2 class="font-semibold text-1xl text-kuning-500 p-6">Periode transaksi</h2>
                    <div class="w-[279px] h-[50px] bg-yellow-600 rounded-xl ml-10">
                        <div class="w-[285px] h-[25px] text-center text-rose-950 text-lg font-black font-['Poppins'] p-3">12/10/2023</div>
                    </div>
                    <button class="w-[71px] h-[30px] bg-yellow-600 rounded-[5px] ml-60 mt-5">
                        <div class="text-center text-rose-950 text-sm font-black font-['Poppins']">lanjut</div>
                    </button>
                    
                </div>
            </div>
        </div>

        <div class="h-64 grid grid-rows-1 grid-flow-col gap-2">
            <div class="w-[783px] h-[286px] bg-blue-950 rounded-[56px] border-4 border-yellow-600 ml-12">
                <h2 class="text-center font-semibold text-4xl text-kuning-500 p-6">Pemasukan</h2>
                <h3 class="font-semibold text-3xl text-kuning-500 p-6">Rp. 0</h3>
            </div>
        </div>

        <div class="h-64 grid grid-rows-2 grid-flow-col gap-2 mt-32">
            <div class="w-[783px] h-[286px] bg-blue-950 rounded-[56px] border-4 border-yellow-600 ml-12">
            <div class="w-[49px] h-[49px] relative"></div>
            <h3 class="font-semibold text-3xl text-kuning-500 ml-5">#94</h3>
                <div class="w-[511px] h-[67px] text-yellow-600 text-[32px] font-black font-['Poppins'] ml-7 mt-4">1x mie ayam biasa</div>
                <div class="w-[511px] h-[67px] text-yellow-600 text-[32px] font-black font-['Poppins'] ml-7 ">1x mie ayam jamur</div>
                <h3 class="font-semibold text-3xl text-center text-white text-white-500 ml-96 pl-14">+Rp. 30.000</h3>
            </div>

            <div class="w-[783px] h-[286px] bg-blue-950 rounded-[56px] border-4 border-yellow-600 ml-12 mt-48">
                <h3 class="font-semibold text-3xl text-kuning-500 ml-5 pt-11">#93</h3>
                <div class="w-[511px] h-[67px] text-yellow-600 text-[32px] font-black font-['Poppins'] ml-7 mt-4">1x Mozarella coklat</div>
                <div class="w-[511px] h-[67px] text-yellow-600 text-[32px] font-black font-['Poppins'] ml-7 ">1x Mozarella tiramisu</div>
                <h3 class="font-semibold text-3xl text-center text-white text-white-500 ml-96 pl-14">+Rp. 45.000</h3>
            </div>

            <div class="w-[504px] h-[653px] bg-blue-950 rounded-[56px] border-4 border-yellow-600 ml-12 ">
                <h2 class="text-center font-semibold text-4xl text-kuning-500 p-6">Total Pemasukan</h2>
                <h3 class="font-semibold text-3xl text-kuning-500 p-3">Order id #93</h3>
                <h3 class="font-semibold text-3xl text-white text-white-500 p-3">+Rp. 45.000</h3>
                <h3 class="font-semibold text-3xl text-kuning-500 p-3">Order id #94</h3>
                <h3 class="font-semibold text-3xl text-white text-white-500 p-3">+Rp. 30.000</h3>
                <div class="w-[463px] h-[0px] border-2 border-yellow-600 ml-3 mt-7"></div>
                <h3 class="font-semibold text-3xl text-center text-white text-white-500 p-3 mt-5">+Rp. 75.000</h3>
            </div>
        </div>

        <div class="grid grid-rows-1 grid-flow-col gap-2 mt-48">
            <div>
                <h2 class="text-center font-semibold text-2xl text-kuning-500 p-6 ml-96"></h2>
            </div>

            <div class="text-center w-[279px] h-[60px] bg-yellow-600 rounded-xl mx-96 mt-96 ml-96">
                <a href="{{ route('home') }}" class="w-[344px] h-[69px] text-center place-content-end text-black text-[40px] font-black font-['Poppins'] pr-14 pb-12">Home</a>
            </div>
        </div>


        
    </section>
</x-app-layout>


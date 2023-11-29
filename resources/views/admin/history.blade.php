<x-app-layout>
<div class="relative">
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-full">
    <img src="{{ asset('asset/vector/bintang.png') }}" class="absolute right-2 -top-[1%]">
    <div class="mt-20 text-2xl">
        {{-- Form Buat Pengisian Tanggal --}}
        <form method="POST" action="{{ route('products.history') }}" class="mb-36">
            @csrf
            

            <div class="grid grid-cols-3 gap-4">
                <h1 class="text-center font-semibold text-4xl text-yellow-500 md:mt-14 ml-72">Pemasukan</h1>
                <div class="ml-96 flex">
                    <div class="font-semibold mt-8 flex">
                        <label class="text-yellow-500 text-center text-base mt-4 md:ml-12">Start Date</label>
                        <input type="date" name="start_date" class="form-control md:w-6/12 rounded-[10px] bg-blue-950 text-yellow-500 md:pl-8 md:pr-8 ml-4" required>
                    </div>
                    <div class="font-semibold mt-8 flex">
                        <label class="text-yellow-500 text-center text-base mt-4 md:ml-12">End Date</label>
                        <input type="date" name="end_date" class="form-control md:w-6/12 rounded-[10px] bg-blue-950 text-yellow-500 md:pl-8 md:pr-6 ml-4" required>
                    </div>
                </div>
            </div>

            <div class="float-right">
                <button type="submit" class="btn md:w-10/12 md:h-11/12 text-center text-[40px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] md:mt-12 mr-10">Filter</button>
            </div>

    </form>
        {{-- List History Dari sini --}}
    @if (isset($history))
        @if (count($history) == 0)
            <div>
                <h1 class="text-center text-yellow-600 md:text-4xl font-['Poppins'] md:mt-10">Total Penjualan</h1>
            </div>
        @else
            {{-- Yang dibungkus php biarin aja jangan diapa apain
                Posisinya juga jangan berubah --}}
            <?php  $totalPrice = 0 ?>
                
            @foreach ($history as $list)
                {{-- div setiap order --}}
            <div class="grid grid-cols-2">
                <div class="w-8/12 h-7/12 col-span-1 bg-blue-950 rounded-[36px] border-4 border-yellow-600 card card-compact relative ml-5">
                    <div class="card-body text-start ml-5 mt-2 pb-6 overflow-auto">
                        <div class="card-title text-center text-yellow-600 text-2xl font-['Poppins']"># {{ $list->id }}</div>
                        <div class="card-title border-2 border-yellow-600"></div>
                        <div class="card-title text-center text-yellow-600 text-1xl font-['Poppins']">Name : {{ $list->user->f_name }} {{ $list->user->l_name }}</div>
                        {{-- List Dari Orderan --}}
                        <?php $price = 0 ?>
                        @foreach ($list->foods as $food)
                                <div class="card-title text-center text-yellow-600 text-1xl font-['Poppins']">{{ $food->pivot->count }}X {{ $food->food }}</div>

                                <?php $price += ($food->price * $food->pivot->count) ?>
                        @endforeach
                        {{-- Harga Masing Masing Order --}}
                        <div class="card-title text-white text-2xl font-['Poppins'] ml-72">+ {{ $price }}</div>
                        <?php $totalPrice += $price ?>
                    </div>
                </div>

                @endforeach

                {{-- Harga Total Di jangka waktu --}}
                    <div class="w-[100%] h-[100%] bg-blue-950 rounded-[46px] border-4 border-yellow-600 card card-compact relative">
                        <div class="card-body">
                            <div class="card-title text-center text-yellow-600 text-[22px] font-['Poppins'] ml-8">Total Pemasukan</div>
                            <div class="card-title text-center text-yellow-600 text-[22px] font-['Poppins'] ml-8">Order id :{{ $list->id }}</div>
                            <div class="card-title text-center text-white text-[22px] font-['Poppins'] ml-8">Price : {{ $price }}</div>
                            <div class="card-title text-yellow-600 text-2xl font-['Poppins'] ml-56">+</div>
                            <div class="card-title w-[80%] h-[0px] border-2 border-yellow-600 ml-4"></div>
                            <div class="card-title text-center text-white text-[32px] font-['Poppins'] ml-20"> {{ $totalPrice }}</div>
                        </div>
                    </div>
            </div>
        @endif
            
    @else
            <div class="w-[27%] h-[150px] bg-blue-950 rounded-[26px] border-4 border-yellow-600 ml-12 mt-24">
                <div class="card-title text-center text-yellow-600 text-[22px] font-['Poppins'] ml-24 mt-2">Total Pemasukan</div>
                <div class="card-title text-center text-yellow-600 text-[22px] font-['Poppins'] ml-12 mt-7">Rp. 0</div>
            </div>
    @endif
    </div>
    <div class="float-right">
        <a href="/home/history" class="btn md:w-10/12 md:h-11/12 text-center text-[40px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] md:mt-28 mr-10">Home</a>
    </div>
</div>

</x-app-layout>


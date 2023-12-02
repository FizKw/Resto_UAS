<x-app-layout>
<div class="relative mx-6  max-h-screen">
    <div class="mt-24 ">
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-[80vh]">

        {{-- Form Buat Pengisian Tanggal --}}
        <form method="POST" action="{{ route('products.history') }}">
            @csrf
            <h1 class="text-center font-bold text-3xl text-kuning-500 pt-3">Pemasukan</h1>
            <h1 class="mx-16 pt-3 text-center lg:text-end text-xl text-kuning-500 font-semibold">Periode transaksi</h1>           
            <div class="hidden lg:grid grid-cols-3 mb-4 text-center lg:float-right">
                <div class="font-semibold mt-2 mx-auto">
                    <label class="text-yellow-500 text-sm"></label>
                    <input type="date" name="start_date" class=" h-10 rounded-lg bg-kuning-500 text-sm" required>
                    <span class="text-kuning-500 my-auto ml-2 mr-1/2">-</span>
                </div>
                <div class="font-semibold mt-2 mx-auto">
                    <label class="text-yellow-500 text-center "></label>
                    <input type="date" name="end_date" class=" h-10 rounded-lg bg-kuning-500 text-sm" required>
                </div>
                <button type="submit" class="h-10 w-24 text-xl font-black bg-kuning-500 hover:bg-kuning-400 focus:bg-kuning-300 rounded-lg ml-2 mt-2">Filter</button>
            </div>
        </form>

        <form method="POST" action="{{ route('products.history') }}">
            <div class="lg:hidden flex justify-center mb-4">
                <div class="font-semibold mt-2">
                    <label class="text-yellow-500 text-sm"></label>
                    <input type="date" name="start_date" class=" w-32 h-10 rounded-lg bg-kuning-500 text-xs" required>
                </div>
                <h1 class="text-kuning-500 my-4 mx-3">-</h1>
                <div class="font-semibold mt-2">
                    <label class="text-yellow-500 text-center "></label>
                    <input type="date" name="end_date" class=" w-32 h-10 rounded-lg bg-kuning-500 text-xs" required>
                </div>
                <button type="submit" class="h-10 w-20 text-xl font-black bg-kuning-500 hover:bg-kuning-400 focus:bg-kuning-300 rounded-lg ml-3 mt-2">Filter</button>
            </div>
        </form>
        
    </div>

        {{-- List History Dari sini --}}
    @if (isset($history))
        @if (count($history) == 0)
            <div>
                <h1 class="text-center text-yellow-600 text-2xl md:text-4xl font-['Poppins'] md:mt-10">Tidak ada transaksi</h1>
            </div>
        @else

            <div class="grid grid-cols-2 grid-flow-dense">
            {{-- Yang dibungkus php biarin aja jangan diapa apain
                Posisinya juga jangan berubah --}}
            <?php  $totalPrice = 0 ?>
                
            @foreach ($history as $list)
                {{-- div setiap order --}}
                <div class=" col-start-1 mb-3  w-[80%] bg-blue-950 rounded-[16px] border-4 border-yellow-600 card card-compact relative mt-4 mx-auto">
                    <div class="card-body text-start">
                        <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']"># {{ $list->id }}</div>
                        <div class="card-title border-2 border-yellow-600"></div>
                        <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']">Pembeli : {{ $list->user->f_name }} {{ $list->user->l_name }}</div>
                        {{-- List Dari Orderan --}}
                        <?php $price = 0 ?>
                        @foreach ($list->foods as $food)
                                <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']">{{ $food->pivot->count }}X {{ $food->food }}</div>

                                <?php $price += ($food->price * $food->pivot->count) ?>
                        @endforeach
                        {{-- Harga Masing Masing Order --}}
                        <div class="card-title text-white text-sm font-['Poppins']">Rp.{{number_format($price,0,".",".")  }}</div>
                        <?php $totalPrice += $price ?>
                    </div>
                </div>
           
            @endforeach
                {{-- Harga Total Di jangka waktu --}}
                    <div class="cols-start-2 rows-start-1 w-[80%] max-h-fit bg-blue-950 rounded-[16px] border-4 border-yellow-600 card card-compact relative mt-4 mx-auto">
                        <div class="card-body">
                            <div class="card-title text-center text-yellow-600 text-sm lg:text-xl font-['Poppins']">Total Pemasukan</div>

                            <div class="card-title w-[95%] h-[0px] border-2 border-yellow-600"></div>
                            <div class="card-title text-center text-white text-sm lg:text-xl font-['Poppins']">Rp.{{number_format($totalPrice,0,".",".")  }}</div>
                        </div>
                    </div>
            </div>
        @endif
            
    @else
            <div class="card w-[80%] h-[150px] md:w-[50%] lg:w-[35%] xl:w-[30%] bg-blue-950 rounded-[16px] border-4 border-yellow-600 text-center ml-[10%]">
                <div class="card-title text-yellow-600 text-l font-['Poppins'] content-center text-center mx-auto mt-2">Total Pemasukan</div>
                <div class="card-title text-yellow-600 text-l font-['Poppins'] ml-4 my-auto">Rp. 0</div>
            </div>
    @endif
</div>

</x-app-layout>


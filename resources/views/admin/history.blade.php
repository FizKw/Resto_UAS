<x-app-layout>
<div class="relative">
    <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-full">
    <div class="mt-20 text-2xl">
        {{-- Form Buat Pengisian Tanggal --}}
        <form method="POST" action="{{ route('products.history') }}" class="mb-24 lg:mb-32">
            @csrf
            <h1 class="text-center font-semibold lg:text-1xl text-yellow-500 mt-4 lg:mt-8 xl:mt-12 ">Pemasukan</h1>
            <div class="grid grid-cols-2 text-center lg:float-right">
                <div class="font-semibold mt-2 mx-auto">
                    <label class="text-yellow-500 text-sm">Start Date</label>
                    <input type="date" name="start_date" class="form-control rounded-[10px] bg-blue-950 text-yellow-500 text-sm ml-3" required>
                </div>
                <div class="font-semibold mt-2 mx-auto">
                    <label class="text-yellow-500 text-center text-sm text-base">End Date</label>
                    <input type="date" name="end_date" class="form-control rounded-[10px] bg-blue-950 text-yellow-500 text-sm ml-2" required>
                </div>
            </div>
        <div class="float-right text-center md:mr-8 ">
            <button type="submit" class="btn w-11/12 h-2/12 text-xl font-black font-['Poppins'] bg-yellow-600 rounded-[12px] justify-end mt-5 lg:mt-11 lg:ml-12 lg:pr-12">Filter</button>
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
            <div class="container">
                <div class="w-[80%] h-[30%] bg-blue-950 rounded-[16px] border-4 border-yellow-600 card card-compact relative mt-4 mx-auto">
                    <div class="card-body text-start">
                        <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']"># {{ $list->id }}</div>
                        <div class="card-title border-2 border-yellow-600"></div>
                        <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']">Name : {{ $list->user->f_name }} {{ $list->user->l_name }}</div>
                        {{-- List Dari Orderan --}}
                        <?php $price = 0 ?>
                        @foreach ($list->foods as $food)
                                <div class="card-title text-center text-yellow-600 text-sm font-['Poppins']">{{ $food->pivot->count }}X {{ $food->food }}</div>

                                <?php $price += ($food->price * $food->pivot->count) ?>
                        @endforeach
                        {{-- Harga Masing Masing Order --}}
                        <div class="card-title text-white text-sm font-['Poppins']">+ {{ $price }}</div>
                        <?php $totalPrice += $price ?>
                    </div>
                </div>
                @endforeach
                </div> 
                {{-- Harga Total Di jangka waktu --}}
                    <div class="w-[80%] h-[40%] bg-blue-950 rounded-[16px] border-4 border-yellow-600 card card-compact relative mt-8 mx-auto">
                        <div class="card-body">
                            <div class="card-title text-center text-yellow-600 text-sm lg:text-xl font-['Poppins']">Total Pemasukan</div>
                            <div class="card-title text-center text-yellow-600 text-sm lg:text-xl font-['Poppins']">Order id :{{ $list->id }}</div>
                            <div class="card-title text-center text-white text-xl font-['Poppins']">Price : {{ $price }}</div>
                            <div class="card-title text-yellow-600 text-2xl font-['Poppins'] ml-[90%]">+</div>
                            <div class="card-title w-[95%] h-[0px] border-2 border-yellow-600"></div>
                            <div class="card-title text-center text-white text-2xl font-['Poppins']"> {{ $totalPrice }}</div>
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
    <div class="float-right md:mr-8">
        <a href="/home/history" class="btn w-11/12 h-2/12 text-xl font-black font-['Poppins'] bg-yellow-600 rounded-[12px] justify-end mt-5">Home</a>
    </div>
</div>

</x-app-layout>


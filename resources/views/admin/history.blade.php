

<x-app-layout>
    <div class="mt-20 text-2xl">
        {{-- Form Buat Pengisian Tanggal --}}
        <form method="POST" action="{{ route('products.history') }}">
            @csrf
            <h1 class="text-center font-semibold text-4xl text-yellow-500 md:mt-24">Pemasukan</h1>

            <div class="grid grid-cols-3 gap-4">
                <h1 class="text-center font-semibold text-2xl text-yellow-500 md:mt-14">Filter Order History : </h1>
                <div class="font-semibold text-2xl mt-8">
                    <label class="text-yellow-500 text-center md:ml-16">Start Date</label>
                    <input type="date" name="start_date" class="form-control md:w-6/12 rounded-[16px] bg-blue-950 text-yellow-500 md:pl-5" required>
                </div>
                <div class="font-semibold text-2xl mt-8">
                    <label class="text-kuning-500 text-center md:ml-18">End Date</label>
                    <input type="date" name="end_date" class="form-control md:w-6/12 rounded-[16px] bg-blue-950 text-yellow-500 md:pl-8" required>
                </div>
                <div class="">
                    <button type="submit" class="btn md:w-5/12 md:h-5/12 text-center text-[40px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] md:ml-28 md:mt-12">Filter</button>
                </div>
            </div>

        </form8
        {{-- List History Darisini --}}
    @if (isset($history))
        @if (count($history) == 0)
            <div>
                <h1 class="text-center text-yellow-600 md:text-4xl font-['Poppins'] md:mt-10">Tidak Ada Pemasukan di hari itu :(</h1>
            </div>
        @else
            {{-- Yang dibungkus php biarin aja jangan diapa apain
                Posisinya juga jangan berubah --}}
            <?php  $totalPrice = 0 ?>
            <div class="text-white">
                @foreach ($history as $list)
                {{-- div setiap order --}}
                    <div class="mb-5">
                        <div># {{ $list->id }}</div>
                        <div>Name : {{ $list->user->f_name }} {{ $list->user->l_name }}</div>
                        {{-- List Dari Orderan --}}
                        <?php $price = 0 ?>
                        @foreach ($list->foods as $food)
                                <div>{{ $food->pivot->count }}X {{ $food->food }}</div>

                                <?php $price += ($food->price * $food->pivot->count) ?>
                        @endforeach
                        {{-- Harga Masing Masing Order --}}
                        <div>Price : {{ $price }}</div>
                        <?php $totalPrice += $price ?>
                    </div>
                @endforeach
                {{-- Harga Total Di jangka waktu --}}
                <div>Total Price : {{ $totalPrice }}</div>
            </div>
        @endif
    @else
        <div>Silakan masukkan Tanggal Filter</div>
    @endif
    </div>
</x-app-layout>


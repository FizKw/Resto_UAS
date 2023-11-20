

<x-app-layout>
    <div class="mt-20 text-2xl">
        {{-- Form Buat Pengisian Tanggal --}}
        <form method="POST" action="{{ route('products.history') }}">
            @csrf

            <div class="grid grid-cols-3 gap-4">
                <h1 class="">Filter Order History : </h1>
                <div class="">
                    <label>Start Date</label>
                    <input type="date" name="start_date" class="form-control" required>
                </div>
                <div class="">
                    <label>End Date</label>
                    <input type="date" name="end_date" class="form-control" required>
                </div>
                <div class="">
                    <button type="submit" class="btn btn-primary">Filter</button>
                </div>
            </div>

        </form>
        {{-- List History Darisini --}}
    @if (isset($history))
        @if (count($history) == 0)
            <div>Tidak Ada Pemasukan di hari itu</div>
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


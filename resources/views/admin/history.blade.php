

<x-app-layout>
    <div class="mt-20 text-2xl">

        <form method="GET" action="{{ route('filterHistory') }}">
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
    @if (isset($history))
        <?php  $totalPrice = 0 ?>
        <div class="text-white">
        @foreach ($history as $list)
            <div class="mb-5">
                <div># {{ $list->id }}</div>
                <div>Name : {{ $list->user->f_name }} {{ $list->user->l_name }}</div>

                <?php $price = 0 ?>
                @foreach ($list->user->foodOrder as $food)
                    @if ($food->pivot->order_id == $list->id)
                        <div>{{ $food->pivot->count }}X {{ $food->food }}</div>
                        <?php $price += ($food->price * $food->pivot->count) ?>
                        <?php $totalPrice += $price ?>
                    @endif

                @endforeach
                <div>Price : {{ $price }}</div>
            </div>
        @endforeach
        <div>Total Price : {{ $totalPrice }}</div>


        </div>
    @else
        <div>Silakan masukkan Tanggal Filter</div>
    @endif
    </div>
</x-app-layout>


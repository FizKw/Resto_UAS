<div class="container grid grid-cols-2 justify mt-14 justify-center mb-4">
    {{-- Kalau misalkan orderannya di cancel bakal muncul ini --}}
    @if ($orderNumber->status == "Cancel")
        <div class="ml-24 mt-9 col">
            <p class="text-7xl font-bold text-white">
                Sorry Your Order is Cancelled Because : <br>
                {{ $orderNumber->cashier_note }}
            </p>
        </div>

    {{-- status orderan saat ini --}}
    @else
    <div class="ml-24 mt-9 col">
        <p class="text-7xl font-bold text-white">Your Order Id Is :<br> {{ $orderNumber->id }}
        <br>
        Status : {{ $orderNumber->status }}
        </p>
        {{-- status orderan dalam process --}}
        @if ( $orderNumber->status == "Process")
            {{-- kalau belum upload image buat bayar muncul button  --}}
            @if ($orderNumber->payment_image == null  )
                <button x-data x-on:click="$dispatch('open-detail')" class="btn">Pay Now</button>
            @endif
            {{-- Kalau sudah upload image buat bayar tapi masih nunggu verivikasi dari kasir --}}
            @if ($orderNumber->is_paid == false)
                <h1 class="text-7xl font-bold text-white">Menunggu Verivikasi Pembayaran</h1>
            @endif
        @endif
        {{-- Kalau pembayaran sudah diverivikasi --}}
        @if( $orderNumber->is_paid == true)
            <h1 class="text-7xl font-bold text-white">Pembayaranmu Sudah Terverivikasi</h1>
        @endif

        {{-- Nampilin notes dari kasir kalau ada --}}
        @if (isset($orderNumber->cashier_note))
            <h1 class="text-7xl font-bold text-white">Notes : {{ $orderNumber->cashier_note }}</h1>
        @endif
    </div>
    @endif

    {{-- Modal box buat upload foto bukti pembayaran --}}
    <x-detail-modal>
        @slot('body')
            {{-- Backgorund modal box --}}
            <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
            {{-- Konten Modal Box --}}
            <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" >
                <h1>Upload Payment</h1>
                {{-- Ini form buat upload foto pembayaran --}}
                <form action="{{ route('paynow') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <x-text-input id="payment_image" name="payment_image" type="file" class="mt-1 block w-full" required autofocus autocomplete="payment_image" />
                    <x-input-error class="mt-2" :messages="$errors->get('payment_image')" />
                    <button class="btn capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Pay</button>
                </form>
            </div>
            @endslot
    </x-detail-modal>

</div>

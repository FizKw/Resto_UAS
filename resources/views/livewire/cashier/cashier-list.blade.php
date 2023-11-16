<div>
    {{-- Button untuk filter process --}}
    <div class="flex justify-start space-x-3 ml-20 mt-6 mb-3 ">
        <button wire:click="filterStatus('Waiting')" class="btn {{ ($status == 'Waiting') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Dalam Proses</button>
        <button wire:click="filterStatus('Process')" class="btn {{ ($status == 'Process') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Selesai</button>
        <button wire:click="filterStatus('Ready')" class="btn {{ ($status == 'Ready') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Batal</button>
    </div>
    {{-- Wire Key Dimasukin Ke div pembungkus list --}}
    @if($orders->count() > 0)
        @foreach($orders as $order)
        <div wire:key="{{ $order->id }}" class="card card-compact mx-auto w-[24rem] xl:w-[24rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
            <div class="card-body text-start ml-5 mt-2">
                {{-- Order ID --}}
                <h2 class="card-title text-white text-lg font-semibold capitalize">#{{ $order->id }}</h2>
                {{-- Order Status --}}
                <h2 class="card-title text-white text-lg font-semibold capitalize">Status : {{ $order->status }}</h2>

                <h2 class="card-title text-white text-lg font-semibold capitalize">
                    {{-- Kalau user udah upload Foto pembayaran tulisan yang ngasih tau
                         pembayaran udh diverivikasi atau belum sama kasir --}}
                    @if ($order->status != "Waiting" && isset($order->payment_image))
                        Payment {{  ($order->is_paid == 1) ? 'Sudah diverivikasi' : 'Belum Diverivikasi' }}
                    @endif
                </h2>
                {{-- Button buat nampilin modal box detail --}}
                <button wire:click="orderdetail({{ $order }})" class="btn">Details</button>
            </div>
        </div>
        @endforeach
    @else
        {{-- Ini kalau list orderan kosong. $status itu list status yang ditampilin saat ini  --}}
        <h1>There Is no order on {{ $status }}</h1>
    @endif

    {{-- Modal box detail --}}
    <x-detail-modal>
        @slot('body')
            @if (isset($selectedOrder))
                {{-- Background Modal --}}
                <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                {{-- Konten Modal box --}}
                <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl">
                    {{ $selectedOrder->id }}
                    {{-- Ini kalau si user udah upload foto bukti pembayaran --}}
                    <div>
                        @if(isset($selectedOrder->payment_image))
                        <div class="w-14 h-14">
                            <img src="{{ asset('storage/' . $selectedOrder->payment_image) }}" alt="">
                        </div>
                        @endif
                    </div>
                    {{-- isi pesanan dari dari order yang di select detailnya --}}
                    @if (isset($carts))
                        <div>User : {{ $user->f_name }} {{ $user->l_name }}</div>
                        @foreach($carts as $cart)
                            {{-- pivot->count itu jumlah makanan yang dipesan --}}
                            <div>Foods : {{ $cart->pivot->count }} {{ $cart->food }}</div>
                            <div>Price : {{ $cart->price }}</div>
                        @endforeach
                    @endif
                    {{-- Ini notes dari pembeli ke kasir --}}
                    <h1>Notes : {{ $selectedOrder->order_note }}</h1>

                    {{-- Ini kalau processnya baru masuk dan masih waiting --}}
                    @if ($selectedOrder->status === 'Waiting')
                    {{-- Dropdown buat Cancel yang isinya alasan kenapa kasir cancel --}}
                    <div class="dropdown">
                        <label tabindex="0" class="btn">Cancel?</label>
                        <form wire:submit="orderCancel()" class="dropdown-content">
                            {{-- div baris ini itu pilihan kenapa cancel nya --}}
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    {{-- label buat yang ditampilin di layar
                                        kalo mau ganti alasannya value="" nya juga diganti --}}
                                  <span class="label-text">Test 1</span>
                                  <input wire:model="cancelOption" value="Test 1" type="radio" name="radio-10" class="radio checked:bg-red-500" checked required/>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text">Test 2</span>
                                  <input wire:model="cancelOption" value="Test 2" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                </label>
                            </div>
                                {{-- button konfirmasi setelah pilih alasan --}}
                                <button class="btn">Cancel Order</button>
                        </form>
                    </div>

                    {{-- Button buat accept order --}}
                    <button class="btn" wire:click="orderAccept()">Accept Order</button>

                    {{-- Ini pas statusnya udah di accept sama kasir terus lanjut ke status On Process --}}
                    @elseif ($selectedOrder->status === 'Process')
                        {{-- Ini button verivikasi ketika payment dari user udh di upload --}}
                        @if ($selectedOrder->is_paid == 0 && isset($selectedOrder->payment_image))
                        <button class="btn" wire:click="verivication()">Verivikasi Payment</button>
                        @else
                        {{-- ini button buat ganti statusnya dari yang on progress ke ready,
                            dalem form karena kasir bisa kasih notes untuk pembeli ketika pickup --}}
                        <form wire:submit="orderReady()">
                            <label for="note">Notes untuk pembeli</label>
                            <textarea name="note" wire:model="cashierNote">Note Untuk Pembeli</textarea>
                            <button class="btn" >Order Ready for pickup?</button>
                        </form>

                        @endif
                    {{-- Button buat menyelesaikan order ketika sudah di pickup --}}
                    @else
                        <button class="btn" wire:click="orderDone()">Order Done</button>
                    @endif
                </div>
            @endif
        @endslot
    </x-detail-modal>
</div>

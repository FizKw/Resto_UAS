<div>
    {{-- Button untuk filter process --}}
    <div class="flex justify-start space-x-3 ml-20 mt-6 mb-3">
        <button wire:click="filterStatus('Waiting')" class="btn {{ ($status == 'Waiting') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Waiting</button>
        <button wire:click="filterStatus('Process')" class="btn {{ ($status == 'Process') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Dalam Proses</button>
        <button wire:click="filterStatus('Ready')" class="btn {{ ($status == 'Ready') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Ready</button>
    </div>
    {{-- Wire Key Dimasukin Ke div pembungkus list --}}
    @if($orders->count() > 0)
        @foreach($orders as $order)
        <div wire:key="{{ $order->id }}" class="sm:w-10/12 md:w-6/12 h-56 bg-blue-950 rounded-[56px] border-4 border-yellow-600 card card-compact mb-6  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 relative md:mx-80 mt-10">
            <div class="card-body text-start ml-5 mt-2">
                {{-- Order ID --}}
                <h2 class="card-title text-lg font-semibold capitalize w-[297px] h-[32px] text-center text-yellow-600 text-[32px] font-['Poppins']">{{ $order->user->f_name }} #{{ $order->id }}</h2>
                {{-- Order Status --}}

                @foreach ($order->foods as $foods)
                <h2 class="card-title text-white text-lg capitalize w-[297px] h-[32px] text-center text-yellow-600 text-[32px] font-['Poppins']">{{ $foods->pivot->count }} x {{ $foods->food }}</h2>
                @endforeach
                <h2 class="card-title text-white text-lg font-semibold capitalize">
                    {{-- Kalau user udah upload Foto pembayaran tulisan yang ngasih tau
                         pembayaran udh diverivikasi atau belum sama kasir --}}
                    @if ($order->status != "Waiting" && isset($order->payment_image))
                        Payment {{  ($order->is_paid == 1) ? 'Sudah diverivikasi' : 'Belum Diverivikasi' }}
                    @endif
                </h2>
                {{-- Button buat nampilin modal box detail --}}
                <button wire:click="orderdetail({{ $order }})" class="btn w-11/12 h-12 text-center text-black text-[40px] font-['Poppins'] bg-yellow-600 rounded-[56px]">Details</button>
            </div>
        </div>
        @endforeach
    @else
        {{-- Ini kalau list orderan kosong. $status itu list status yang ditampilin saat ini  --}}
        <div class="text-center text-yellow-600 md:text-6xl sm:text-6xl font-['Poppins'] md:mx-48 sm:mr-42 md:mt-12 md:mx-48 sm:mt-12">Yah :(  belum ada<br/>yang di {{ $status }} nih</div>
    @endif

    {{-- Modal box detail --}}
    <x-detail-modal>
        @slot('body')
            @if (isset($selectedOrder))
                {{-- Background Modal --}}
                <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                {{-- Konten Modal box --}}
                <div class="md:w-[1012px] md:h-[663px] sm:w-10/12 sm:h-[663px] bg-blue-950 rounded-[56px] border-4 border-yellow-600 card card-compact mx-auto mb-6 transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 relative mt-5 px-8">
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
                        <?php $totalPrice = 0 ?>

                        <div class="text-yellow-600 text-2xl font-['Poppins'] ml-10">User : {{ $carts->user->f_name }} {{ $carts->user->l_name }}</div>
                        <div class="text-yellow-600 text-3xl font-['Poppins'] ml-10 mt-5">Foods :</div>
                        @foreach($carts->foods as $cart)
                            {{-- pivot->count itu jumlah makanan yang dipesan --}}
                            <div class="text-yellow-600 text-3xl font-['Poppins'] ml-10 mt-2">{{ $cart->pivot->count }} x {{ $cart->food }} = {{ $cart->price * $cart->pivot->count }}</div>

                            <?php $totalPrice += ($cart->price * $cart->pivot->count) ?>

                        @endforeach
                        {{-- Harga Total --}}
                        <div class="text-yellow-600 text-3xl font-['Poppins'] ml-10 mt-5">Total : {{ $totalPrice }}</div>
                    @endif
                    {{-- Ini notes dari pembeli ke kasir --}}
                    <h1 class="text-yellow-600 text-2xl font-['Poppins'] ml-10 mt-2 mb-5">Notes : {{ $selectedOrder->order_note }}</h1>

                    {{-- Ini kalau processnya baru masuk dan masih waiting --}}
                    @if ($selectedOrder->status === 'Waiting')
                    {{-- Dropdown buat Cancel yang isinya alasan kenapa kasir cancel --}}
                    <div class="grid grid-cols-2 gap-4 mt-8 ml-10">
                    <div class="dropdown">
                        <div>
                            <label tabindex="0" class="btn md:w-5/12 md:h-6/12 sm:w-8/12 sm:h-4/12 text-center text-yellow-600 sm:text-[30px] md:text-[40px] font-['Poppins'] bg-zinc-300 rounded-[56px] sm:12 md:ml-48">TOLAK</label>
                        </div>
                        <form wire:submit="orderCancel()" class="dropdown-content mt-5">
                            {{-- div baris ini itu pilihan kenapa cancel nya --}}
                            <h1 class="text-yellow-600 text-2xl  font-['Poppins']">Alasan membatalkan pesanan??</h1>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                    {{-- label buat yang ditampilin di layar
                                        kalo mau ganti alasannya value="" nya juga diganti --}}
                                  <span class="label-text text-yellow-600 text-5 font-['Poppins']">Bahan Baku Habis</span>
                                  <input wire:model="cancelOption" value="Reason1" type="radio" name="radio-10" class="radio checked:bg-red-500" checked required/>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Persiapan Penutupan Toko</span>
                                  <input wire:model="cancelOption" value="Reason2" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Menu yang di pesan tidak valid</span>
                                  <input wire:model="cancelOption" value="Reason3" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Terlalu banyak orderan bahan baku tidak cukup</span>
                                  <input wire:model="cancelOption" value="Reason4" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                </label>
                            </div>
                                {{-- button konfirmasi setelah pilih alasan --}}

                                <button class="btn md:w-[334px] md:h-[36px] sm:w-11/12 sm:h-4/12 text-center text-white-600 sm:text-[20px] md:text-[30px] font-['Poppins'] bg-yellow-600 rounded-[56px]">Cancel Order</button>
                            
                        </form>
                    </div>
                    

                    {{-- Button buat accept order --}}
                        <div>
                            <button class="btn md:w-5/12 md:h-6/12 sm:w-8/12 sm:h-7/12 text-center text-black-600 md:text-[40px] sm:text-[30px] font-['Poppins'] bg-yellow-600 rounded-[56px] md:ml-24" wire:click="orderAccept()">TERIMA</button>
                        </div>
                    </div>
                    {{-- Ini pas statusnya udah di accept sama kasir terus lanjut ke status On Process --}}
                    @elseif ($selectedOrder->status === 'Process')
                        {{-- Ini button verivikasi ketika payment dari user udh di upload --}}
                        @if ($selectedOrder->is_paid == 0 && isset($selectedOrder->payment_image))
                        <button class="btn md:w-8/12 md:h-[36px] sm:w-11/12 sm:h-4/12 text-center text-white-600 sm:text-[20px] md:text-[30px] font-['Poppins'] bg-yellow-600 rounded-[56px] md:ml-44 md:mt-10" wire:click="verivication()">Verifikasi Payment</button>
                        @else
                        {{-- ini button buat ganti statusnya dari yang on progress ke ready,
                            dalem form karena kasir bisa kasih notes untuk pembeli ketika pickup --}}
                        <form wire:submit="orderReady()">
                            <label for="note" class="text-yellow-600 text-2xl font-black font-['Poppins'] ml-10">Notes untuk pembeli : </br></label>
                            <textarea class="w-[864px] h-[86px] rounded-[16px] ml-10" name="note mt-5" wire:model="cashierNote">Note Untuk Pembeli</textarea>
                            <button class="btn w-[324px] h-[46px] text-center text-white-600 text-[20px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] ml-10 mt-8" >Order Ready to pickup?</button>
                        </form>

                        @endif
                    {{-- Button buat menyelesaikan order ketika sudah di pickup --}}
                    @else
                        <button class="btn w-[384px] h-[56px] text-center text-white-600 text-[40px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] ml-10 mt-10" wire:click="orderDone()">Order Done</button>
                    @endif
                </div>
            @endif
        @endslot
    </x-detail-modal>
</div>

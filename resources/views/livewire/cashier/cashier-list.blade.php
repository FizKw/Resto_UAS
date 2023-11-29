<div class="relative">
    <img src="{{ asset('asset/vector/bintang.png') }}" class="absolute right-2 -top-[1%]">
    {{-- Button untuk filter process --}}
    <div class="flex justify-start space-x-1 md:space-x-3 pl-6 md:pl-10 pb-2 mb-3 border-b border-kuning-500">
        <button wire:click="filterStatus('Waiting')" class="btn {{ ($status == 'Waiting') ? '  focus:opacity-100 font-medium' : '' }} capitalize md:text-lg font-normal border-none text-kuning-500 opacity-80 hover:opacity-100">Menunggu konfirmasi</button>
        <button wire:click="filterStatus('Process')" class="btn {{ ($status == 'Process') ? '  focus:opacity-100 font-medium' : '' }} capitalize md:text-lg font-normal border-none text-kuning-500 opacity-80 hover:opacity-100">Dalam Proses</button>
        <button wire:click="filterStatus('Ready')" class="btn {{ ($status == 'Ready') ? '  focus:opacity-100 font-medium' : '' }} capitalize md:text-lg font-normal border-none text-kuning-500 opacity-80 hover:opacity-100">Siap diambil</button>
    </div>
    {{-- Wire Key Dimasukin Ke div pembungkus list --}}
    @if($orders->count() > 0)
        <div class="w-full mx-auto grid grid-cols-1 md:grid-cols-2">
            @foreach($orders as $order)
            <div wire:key="{{ $order->id }}" class=" mb-8 md:w-[80%] h-[80%] bg-biru-500 mx-auto overflow-hidden rounded-[56px] border-4 border-yellow-600 card card-compact shadow-md relative ">
                <div class="card-body text-start ml-5 mt-2 pb-6 overflow-auto">
                    <div class="relative h-[80%] pb-24">
                        {{-- Order ID --}}
                        <h2 class="card-title text-xl font-semibold capitalize w-[297px] h-[32px] text-center text-yellow-600  sticky top-0">{{ $order->user->f_name }} #{{ $order->id }}</h2>
                        {{-- Order Status --}}
                        @foreach ($order->foods as $foods)
                        <h2 class="card-title  text-lg font-normal capitalize w-[297px] h-[32px] text-center text-yellow-600">{{ $foods->pivot->count }} x {{ $foods->food }}</h2>
                        @endforeach
                        <h2 class="card-title text-white text-lg font-semibold capitalize">
                            {{-- Kalau user udah upload Foto pembayaran tulisan yang ngasih tau
                                 pembayaran udh diverivikasi atau belum sama kasir --}}
                            @if ($order->status != "Waiting" && isset($order->payment_image))
                               <p> Payment {{  ($order->is_paid == 1) ? 'Sudah diverifikasi' : 'Belum Diverifikasi' }}</p>
                            @endif
                        </h2>
                    </div>
                    {{-- Button buat nampilin modal box detail --}}
                    <button wire:click="orderdetail({{ $order }})" class="btn  absolute bottom-[2%] inset-x-[23%] text-center text-merah-500 border border-black text-2xl md:text-xl lg:text-3xl capitalize bg-kuning-500 hover:bg-kuning-400 rounded-lg">Konfirmasi</button>
                </div>
            </div>
            @endforeach
        </div>
    @else
        {{-- Ini kalau list orderan kosong. $status itu list status yang ditampilin saat ini  --}}
        <p class="text-center text-yellow-600 md:text-6xl font-semibold sm:text-6xl mx-auto mt-20">Yah :(  belum ada<br/>yang  {{ $status }} nih</p>
    @endif

    {{-- Modal box detail --}}
    <x-detail-modal>
        @slot('body')
            @if (isset($selectedOrder))
                {{-- Background Modal --}}
                <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                {{-- Konten Modal box --}}
                <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-auto fixed inset-x-[10%] inset-y-[14%]">
                    <div class="relative">    
                        
                        {{-- isi pesanan dari dari order yang di select detailnya --}}
                        @if (isset($carts))
                            <?php $totalPrice = 0 ?>
                            <div class="">
                                <div class="">
                                    <p class="text-kuning-500 text-2xl font-semibold capitalize mt-6 mb-3 mx-10">{{ $carts->user->f_name }} {{ $carts->user->l_name }} #{{ $selectedOrder->id }}</p>
                                         @foreach($carts->foods as $cart)
                                             {{-- pivot->count itu jumlah makanan yang dipesan --}}
                                             <h1 class="text-kuning-500 text-xl font-['Poppins'] ml-10 mt-1">{{ $cart->pivot->count }} x {{ $cart->food }} = Rp {{number_format($cart->price * $cart->pivot->count,0,".",".")  }}</h1>

                                             <?php $totalPrice += ($cart->price * $cart->pivot->count) ?>

                                         @endforeach
                                         {{-- Harga Total --}}
                                        <h1 class="text-kuning-500 text-xl ml-10 mt-5">Total : Rp {{number_format($totalPrice,0,".",".")  }}</h1>
                                         
                                        {{-- Ini notes dari pembeli ke kasir --}}
                                        <h1 class="text-kuning-500 text-xl  ml-10 mt-2 mb-5">Notes : {{ $selectedOrder->order_note }}</h1>
                                </div>
                        
                                {{-- Ini kalau si user udah upload foto bukti pembayaran --}}
                                @if(isset($selectedOrder->payment_image))
                                <x-primary-button class="mx-6" onclick="pembayaran.showModal()">Lihat bukti pembayaran</x-primary-button>
                                <dialog id="pembayaran" class="modal">
                                    <div class="modal-box">
                                        <img class="object-fit" src="{{ asset('storage/' . $selectedOrder->payment_image) }}" alt="">
                                    </div>
                                    <form method="dialog" class="modal-backdrop">
                                    <button>close</button>
                                    </form>
                                </dialog>
                                @endif  

                                   
                                
                            </div>
                        @endif


                        {{-- Ini kalau processnya baru masuk dan masih waiting --}}
                        @if ($selectedOrder->status === 'Waiting')
                        {{-- Dropdown buat Cancel yang isinya alasan kenapa kasir cancel --}}
                        <div class="flex justify-around">
                            <div class="dropdown dropdown-top">
                                <div>
                                    <label tabindex="0" class="btn font-semibold text-center text-yellow-600 text-3xl bg-merah-500 hover:bg-merah-400 ">Tolak</label>
                                </div>
                                <form wire:submit="orderCancel()" class="dropdown-content  bg-merah-500 border-2 border-kuning-500 rounded-lg p-4 mt-5 mb-3">
                                    {{-- div baris ini itu pilihan kenapa cancel nya --}}
                                    <h1 class="text-yellow-600 text-2xl  font-['Poppins']">Alasan membatalkan pesanan??</h1>
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                            {{-- label buat yang ditampilin di layar
                                                kalo mau ganti alasannya value="" nya juga diganti --}}
                                          <span class="label-text text-yellow-600 text-5 font-['Poppins']">Bahan Baku Habis</span>
                                          <input wire:model="cancelOption" value="Bahan Baku Habis" type="radio" name="radio-10" class="radio checked:bg-red-500" checked required/>
                                        </label>
                                    </div>
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                          <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Persiapan Penutupan Toko</span>
                                          <input wire:model="cancelOption" value="Toko sedang bersiap untuk tutup" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                        </label>
                                    </div>
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                          <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Menu yang di pesan tidak valid</span>
                                          <input wire:model="cancelOption" value="Menu yang kamu pesan gak valid nih, coba pesan ulang ya" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                        </label>
                                    </div>
                                    <div class="form-control">
                                        <label class="label cursor-pointer">
                                          <span class="label-text text-yellow-600 text-1xl font-['Poppins']">Terlalu banyak orderan bahan baku tidak cukup</span>
                                          <input wire:model="cancelOption" value="Orderan kamu banyak bangett, jadi bahan bakunya gak cukup nihh" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                        </label>
                                    </div>
                                        {{-- button konfirmasi setelah pilih alasan --}}

                                        <button class="btn md:w-[334px] md:h-[36px] sm:w-11/12 text-center text-black text-xl md:text-2xl lg:text-3xl bg-kuning-500 hover:bg-kuning-400 rounded-lg">Cancel Order</button>

                                </form>
                            </div>


                            {{-- Button buat accept order --}}
                            <div>
                                <button class="btn inset-x-[23%] text-center text-black text-xl md:text-2xl lg:text-3xl bg-kuning-500 hover:bg-kuning-400 rounded-lg " wire:click="orderAccept()">TERIMA</button>
                            </div>
                        </div>
                        {{-- Ini pas statusnya udah di accept sama kasir terus lanjut ke status On Process --}}
                        @elseif ($selectedOrder->status === 'Process')
                            {{-- Ini button verivikasi ketika payment dari user udh di upload --}}
                            @if ($selectedOrder->is_paid == 0 && isset($selectedOrder->payment_image))
                            <div class="flex justify-center">
                                <button class="btn md:w-8/12 md:h-[36px] sm:w-11/12 sm:h-4/12 text-center text-white-600 sm:text-[20px] md:text-[30px] font-['Poppins'] bg-yellow-600 rounded-[56px]  md:mt-10" wire:click="verivication()">Verifikasi Payment</button>
                            </div>
                            @else
                            {{-- ini button buat ganti statusnya dari yang on progress ke ready,
                                dalem form karena kasir bisa kasih notes untuk pembeli ketika pickup --}}
                            <form wire:submit="orderReady()">
                                @csrf
                                <label for="note" class="text-kuning-500 text-xl  mx-10">Notes untuk pembeli : </br></label>
                                <textarea class="w-[85%] h-[86px] rounded-[16px] mx-8" name="cashierNote" value="" wire:model="cashierNote"></textarea>
                                <button class="btn w-[324px] h-[46px] text-center text-white-600 text-[20px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] ml-10 mt-8" >Pesanan siap di pickup</button>
                            </form>

                            @endif
                        {{-- Button buat menyelesaikan order ketika sudah di pickup --}}
                        @else
                            <button class="btn w-[384px] h-[56px] text-center text-white-600 text-[40px] font-black font-['Poppins'] bg-yellow-600 rounded-[56px] ml-10 mt-10" wire:click="orderDone()">Order Done</button>
                        @endif
                    </div>
                </div>
            @endif
        @endslot
    </x-detail-modal>
</div>

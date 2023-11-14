<div>

    <div class="flex justify-start space-x-3 ml-20 mt-6 mb-3 ">
        <button wire:click="filterStatus('Waiting')" class="btn {{ ($status == 'Waiting') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Waiting</button>
        <button wire:click="filterStatus('Process')" class="btn {{ ($status == 'Process') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Process</button>
        <button wire:click="filterStatus('Ready')" class="btn {{ ($status == 'Ready') ? ' focus:text-white focus:opacity-100 font-medium' : '' }} capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white">Ready</button>


    </div>
    {{-- Wire Key Dimasukin Ke div pembungkus list --}}
    @if($orders->count() > 0)
        @foreach($orders as $order)
        <div wire:key="{{ $order->id }}" class="card card-compact mx-auto w-[24rem] xl:w-[24rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
            <div class="card-body text-start ml-5 mt-2">
                <h2 class="card-title text-white text-lg font-semibold capitalize">#{{ $order->id }}</h2>
                <h2 class="card-title text-white text-lg font-semibold capitalize">Status : {{ $order->status }}</h2>
                <h2 class="card-title text-white text-lg font-semibold capitalize">
                    @if ($order->status != "Waiting" && isset($order->payment_image))
                        Payment {{  ($order->is_paid == 1) ? 'Sudah diverivikasi' : 'Belum Diverivikasi' }}
                    @endif
                </h2>
                <button wire:click="orderdetail({{ $order }})" class="btn">Details</button>
            </div>
        </div>
        @endforeach
        @else
            <h1>There Is no order on {{ $status }}</h1>
        @endif

    <x-detail-modal>
        @slot('body')
            @if (isset($selectedOrder))
                <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl">
                    {{ $selectedOrder->id }}
                    <div>
                        @if(isset($selectedOrder->payment_image))
                        <div class="w-14 h-14">
                            <img src="{{ asset('storage/' . $selectedOrder->payment_image) }}" alt="">
                        </div>
                        @endif
                    </div>

                    @if (isset($carts))
                        <div>User : {{ $user->f_name }} {{ $user->l_name }}</div>
                        @foreach($carts as $cart)
                            <div>Foods : {{ $cart->pivot->count }} {{ $cart->food }}</div>
                            <div>Price : {{ $cart->price }}</div>
                        @endforeach
                    @endif

                    <h1>Notes : {{ $selectedOrder->order_note }}</h1>

                    @if ($selectedOrder->status === 'Waiting')
                    <div class="dropdown">
                        <label tabindex="0" class="btn">Cancel?</label>
                        <form wire:submit="orderCancel()" class="dropdown-content">
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text">Test 2</span>
                                  <input wire:model="cancelOption" value="Test 1" type="radio" name="radio-10" class="radio checked:bg-red-500" checked required/>
                                </label>
                            </div>
                            <div class="form-control">
                                <label class="label cursor-pointer">
                                  <span class="label-text">Test 1</span>
                                  <input wire:model="cancelOption" value="Test 2" type="radio" name="radio-10" class="radio checked:bg-blue-500" checked required/>
                                </label>
                            </div>

                                <button class="btn">Cancel Order</button>
                        </form>
                    </div>


                        {{--  --}}

                        <button class="btn" wire:click="orderAccept()">Accept Order</button>

                    @elseif ($selectedOrder->status === 'Process')
                        @if ($selectedOrder->is_paid == 0 && isset($selectedOrder->payment_image))
                        <button class="btn" wire:click="verivication()">Verivikasi Payment</button>
                        @else
                        <form wire:submit="orderReady()">
                            <label for="note">Notes untuk pembeli</label>
                            <textarea name="note" wire:model="cashierNote">Note Untuk Pembeli</textarea>
                            <button class="btn" >Order Ready for pickup?</button>
                        </form>

                        @endif
                    @else
                        <button class="btn" wire:click="orderDone()">Order Done</button>
                    @endif
                </div>

            @endif


        @endslot
    </x-detail-modal>
</div>

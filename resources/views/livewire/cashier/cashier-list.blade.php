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
                    <h2 class="card-title text-white text-lg font-semibold capitalize">Payment {{  ($order->is_paid == 1) ? 'Sudah Terbayar' : 'Belum Dibayar' }}</h2>
                    <button wire:click="orderdetail({{ $order }})" class="btn">Details</button>
                </div>
        </div>
        @endforeach
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
                    <button class="btn" wire:click="nextProcess()">Next Process</button>
                </div>
                
            @endif
            
            
        @endslot
    </x-detail-modal>
</div>

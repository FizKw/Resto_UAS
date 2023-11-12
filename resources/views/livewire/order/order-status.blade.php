<div class="container grid grid-cols-2 justify mt-14 justify-center mb-4">
    <div class=" ml-24 mt-9 col">
        <p class="text-7xl font-bold text-white">Your Order Id Is :<br> {{ $orderNumber->id }}
        <br>
        Status : {{ $orderNumber->status }}
        </p>
        @if ( ($orderNumber->status == 'Process' || $orderNumber->status == 'Ready')&& $orderNumber->is_paid == false )
            <button x-data x-on:click="$dispatch('open-detail')" class="btn">Pay Now</button>
        @endif
    </div>

    <x-detail-modal>
        @slot('body')
            <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
            
            <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" >
                <h1>Upload Payment</h1>
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

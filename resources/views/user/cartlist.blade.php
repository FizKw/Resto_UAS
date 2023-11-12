<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Auth()->user()->order_id === null)
            <livewire:foodlist.cart-table />
            @else
            <livewire:order.order-status />
            @endif
            

            <div class="modal" id="modal_box">
                <div class="modal-box">
                    <h3 class="font-bold text-lg">Terima kasih</h3>
                    <p class="py-4">Pesananmu segera di proses</p>
                    <div class="modal-action">
                       <x-primary-button><a href="{{ route('checkout') }}">Close</a></x-primary-button>
                    </div>
                </div>
            </div>
        </div>
    </div>

</x-app-layout>
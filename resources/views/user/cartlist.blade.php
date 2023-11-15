<x-app-layout>
    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            @if(Auth()->user()->order_id === null)
            {{-- Kalau blm order nampilin ini --}}
            <livewire:foodlist.cart-table />
            @else
            {{-- Kalo ada orderan ato ga orderan statusnya di cancel nampilin ini --}}
            <livewire:order.order-status />
            @endif
        </div>
    </div>
</x-app-layout>

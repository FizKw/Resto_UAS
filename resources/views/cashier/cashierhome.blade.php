<x-app-layout>
    <div class="relative">
        <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-full">
        
        <div class="overflow-auto h-[80vh] mt-16">
            <div class=" mx-auto mt-9">
                <livewire:cashier.cashier-list />
            </div>
        </div>

    </div>
    
</x-app-layout>
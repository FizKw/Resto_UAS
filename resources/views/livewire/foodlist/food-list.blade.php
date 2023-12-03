<div class="px-5">
    @if($products->count() > 0)
        <div class="py-8 container w-full justify-center place-items-center mx-auto grid grid-cols-2 md:grid-cols-2 lg:grid-cols-3">
            @foreach($products as $product)
            <div>
                <div class="card card-compact mx-auto w-[10rem] sm:w-[18rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
                    <button wire:key="{{ $product->id }}" wire:click="viewDetail({{ $product->id }})">
                        <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class=" w-[10rem] sm:w-[18rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] h-[8rem] md:h-[18rem] object-cover object-center" /></figure>
                        <div></div>
                        <div class="card-body text-start mx-4 mt-2">
                            <h2 class="card-title text-white text-lg font-semibold capitalize">{{ $product->food }}</h2>
                        </div>
                    </button>
                </div>
            </div>
            @endforeach
        </div>
        @else
                <td class="text-center" colspan="5">Produk belum ditambahkan</td>
        @endif

        {{-- Di bagian bawah ada tulisan buat peringatan kalau
            ada order lagi berjalan gaakan bisa pesen --}}
        @if($selectedFood)
            <x-detail-modal name="food-detail">
                @slot('body')
                    {{-- Modal Here --}}
                    <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-auto fixed inset-x-[20%] inset-y-[13%] max-w-2xl text-white">
                        <div class="mx-4 mt-6 flex justify-between">
                            <div class="opacity-0">a</div>
                            <h1 class="text-center font-semibold mx-auto text-xl md:text-3xl capitalize">{{ $selectedFood->food }}</h1>
                            <button x-on:click="show = false" class="md:text-xl bg-kuning-500 w-7 md:w-10 h-7 md:h-10 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">X</button>
                        </div>
                        <div class="md:grid md:grid-cols-2  mt-6 hidden h-[58%] overflow-hidden">
                            <p class="mx-8 overflow-auto">{{ $selectedFood->description }}</p>
                            <figure class="mx-6"><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-full h-[80%] object-cover object-center rounded-lg " /></figure>
                        </div>
                        <div class="grid md:hidden h-[66%]">
                            <figure class="p-6 mx-auto "><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-full object-cover rounded-lg " /></figure>
                            <p class="mx-8 text-center overflow-hidden overflow-y-auto">{{ $selectedFood->description }}</p>
                        </div>

                        <div class="mb-0">
                            <h1 class="font-semibold md:mx-24 mb-1 mt-1 text-center md:text-end text-2xl">Rp {{number_format($selectedFood->price,0,".",".")  }}</h1>
                            @if($foodCount > 0)
                                <div wire:key="{{ $selectedFood->id }}" class="flex  md:justify-end justify-center md:mx-24 py-1 mb-2 ">
                                    <button  wire:click="decrease({{ $selectedFood->id }})" class="md:text-xl bg-kuning-500 w-6 h-6 md:w-8 md:h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer md:p-0.5">-</button>
                                    <p class="mx-4 font-bold md:text-2xl ">{{ $foodCount }}</p>
                                    <button wire:click="increase({{ $selectedFood->id }})" class="md:text-xl bg-kuning-500 w-6 h-6 md:w-8 md:h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer md:p-0.5">+</button>
                                </div>
                            @else

                            <div class="flex ml-4 md:ml-0 justify-center md:justify-end">
                                @if (session('orderStatus'))
                                    <h1 class="text-center  mx-auto text-xl capitalize">Tunggu pesanan kamu selesai dulu yaa!!</h1>
                                @endif
                                <x-primary-button wire:key="{{ $selectedFood->id }}" wire:click="addToCart({{ $selectedFood->id }})" class="mt-1 mb-2 {{ session('orderStatus') ? 'hidden' : '' }}">Tambah ke keranjang</x-primary-button>

                            </div>
                            @endif
                        </div>

                    </div>
                @endslot
            </x-detail-modal>
        @endif
</div>

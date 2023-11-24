<div>
    @if($products->count() > 0)
        <div class="py-8 container w-full justify-center place-items-center mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3">
            @foreach($products as $product)
            <div>
                <div class="card card-compact mx-auto w-[20rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
                    <button wire:key="{{ $product->id }}" wire:click="viewDetail({{ $product->id }})">
                        <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] h-[18rem] object-cover object-center" /></figure>
                        <div></div>
                        <div class="card-body text-start ml-5 mt-2">
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
                    <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-auto fixed inset-x-[20%] inset-y-[17%] max-w-2xl text-white">
                        <div class="mx-4 mt-4 flex justify-between">
                            <div class="pr-10"></div>
                            <h1 class="text-center font-semibold mx-auto text-3xl capitalize">{{ $selectedFood->food }}</h1>
                            <button x-on:click="show = false" class="text-xl bg-kuning-500 w-10 h-10 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">X</button>
                        </div>
                        <div class="md:grid md:grid-cols-2 mb-5 hidden h-[62%] overflow-hidden">
                            <p class="mx-8 mt-6  overflow-auto">{{ $selectedFood->description }}</p>
                            <figure class="mx-6 mt-6"><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-full h-[90%] object-cover object-center rounded-lg " /></figure>
                        </div>
                        <div class="grid md:hidden h-[69%]">
                            <figure class="p-6 mx-auto "><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-[100%] object-cover rounded-lg " /></figure>
                            <p class="mx-8 text-center overflow-hidden overflow-y-auto">{{ $selectedFood->description }}</p>
                        </div>



                        <div class="mb-0">
                            <h1 class="font-semibold md:mx-12 mb-2 text-center md:text-end text-2xl">Rp.{{number_format($selectedFood->price,0,".",".")  }}</h1>
                            @if($foodCount > 0)
                                <div wire:key="{{ $selectedFood->id }}" class="flex items-center md:justify-end justify-center mx-12 py-1 ">
                                    <button  wire:click="decrease({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-8 h-8 mr-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">-</button>
                                    <span class="font-bold text-xl select-none">{{ $foodCount }}</span>
                                    <button wire:click="increase({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-8 h-8 ml-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">+</button>
                                </div>
                            @else

                            <div class="flex ml-6 md:ml-0 justify-center md:justify-end">
                                @if (session('orderStatus'))
                                    <h1 class="text-center  mx-auto text-xl capitalize">Tunggu pesanan kamu selesai dulu yaa!!</h1>
                                @endif
                                <x-primary-button wire:key="{{ $selectedFood->id }}" wire:click="addToCart({{ $selectedFood->id }})" class="mt-1 px-12 {{ session('orderStatus') ? 'hidden' : '' }}">Tambah ke keranjang</x-primary-button>

                            </div>
                            @endif
                        </div>

                    </div>
                @endslot
            </x-detail-modal>
        @endif
</div>

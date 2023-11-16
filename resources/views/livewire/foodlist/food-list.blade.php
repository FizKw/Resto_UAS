<div class="">
    @if($products->count() > 0)
    <div class="flex justify-start space-x-3 ml-20 mt-6 mb-3 ">
        {{-- <button wire:click="filterCategory()" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ is_null($category) ? ' focus:text-white focus:opacity-100 font-medium' : '' }}">Inni Mozarella</button>
        <button wire:click="filterCategory('Makanan')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Makanan') ? ' focus:text-white focus:opacity-100 font-medium' : '' }}">Inni Mie Ayam</button>
        <button wire:click="filterCategory('Minuman')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Minuman') ?   'focus:text-white focus:opacity-100 font-medium' : '' }}">Minuman</button>
        <button wire:click="filterCategory('Snack')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Snack') ?  'focus:text-white focus:opacity-100 font-medium' : '' }}">Snack</button> --}}
    </div>


        <x-foodlist>
            @foreach($products as $product)
            <div wire:key="{{ $product->id }}" class="card card-compact mx-auto w-[20rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
                <button wire:click="viewDetail({{ $product }})">
                    <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] xl:w-[24rem] 2xl:w-[31rem] lg:w-[20rem] md:w-[22rem] h-[18rem] object-cover object-center" /></figure>
                    <div class="card-body text-start ml-5 mt-2">
                        <h2 class="card-title text-white text-lg font-semibold capitalize">{{ $product->food }}                        </h2>

                    </div>
                </button>
            </div>
            @endforeach
        </x-foodlist>
        @else
                <td class="text-center" colspan="5">Product not found</td>
        @endif

        {{-- Di bagian bawah ada tulisan buat peringatan kalau
            ada order lagi berjalan gaakan bisa pesen --}}
        @if($selectedFood)
            <x-detail-modal name="food-detail">
                @slot('body')
                    {{-- Background Blur Here transition masuk keluar buka component tapi disini juga bisa--}}
                    <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                    {{-- Modal Here --}}
                    <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto fixed inset-x-[20%] inset-y-[10%] max-w-2xl text-white">
                        <div class="mx-4 mt-4 flex justify-between">
                            <div class="pr-10"></div>
                            <h1 class="text-center font-semibold mx-auto text-3xl capitalize">{{ $selectedFood->food }}</h1>
                            <button x-on:click="show = false" class="text-xl bg-kuning-500 w-10 h-10 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">X</button>
                        </div>
                        <div class="md:grid md:grid-cols-2  hidden h-64 mb-6 overflow-hidden">
                            <p class="mx-8 mt-6 text-justify overflow-auto">{{ $selectedFood->description }}</p>
                            <figure class="p-6 "><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-[14.3rem] object-cover object-center rounded-lg " /></figure>
                        </div>
                        <div class="grid md:hidden">
                            <figure class="p-6 mx-auto "><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-[10rem] object-cover rounded-lg " /></figure>
                            <p class="mx-8 text-center h-20 overflow-hidden overflow-y-auto">{{ $selectedFood->description }}</p>
                        </div>
                        <h1 class="font-semibold md:mx-8 text-center md:text-end text-2xl mt-3">Rp.{{number_format($selectedFood->price,0,".",".")  }}</h1>
                        @if($foodCount > 0)
                            <div class="flex items-center md:justify-end justify-center mx-8 py-1 ">
                                <button wire:click="decrease({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-8 h-8 mr-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">-</button>
                                <span class="font-bold text-xl select-none">{{ $foodCount }}</span>
                                <button wire:click="increase({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-8 h-8 ml-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">+</button>
                            </div>
                        @else
                            {{-- warningnya disini --}}
                            @if (session('orderStatus'))
                                <h1 class="text-center font-semibold mx-auto text-3xl capitalize">Order Status Not Done</h1>
                            @endif
                            <div class="flex">
                            <x-primary-button wire:click="addToCart({{ $selectedFood->id }})" class="justify-center mx-auto mt-2 ">Add To Cart</x-primary-button>
                            </div>        
                        @endif

                    </div>
                @endslot
            </x-detail-modal>
        @endif
</div>

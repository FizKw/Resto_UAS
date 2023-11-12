<div>
    @if($products->count() > 0)
    <div class="flex justify-start space-x-3 ml-20 mt-6 mb-3 ">
        {{-- <button wire:click="filterCategory()" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ is_null($category) ? ' focus:text-white focus:opacity-100 font-medium' : '' }}">Inni Mozarella</button>
        <button wire:click="filterCategory('Makanan')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Makanan') ? ' focus:text-white focus:opacity-100 font-medium' : '' }}">Inni Mie Ayam</button>
        <button wire:click="filterCategory('Minuman')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Minuman') ?   'focus:text-white focus:opacity-100 font-medium' : '' }}">Minuman</button>
        <button wire:click="filterCategory('Snack')" class=" capitalize text-md mr-2 text-rose-100 opacity-50 hover:opacity-100 hover:text-white{{ ($category == 'Snack') ?  'focus:text-white focus:opacity-100 font-medium' : '' }}">Snack</button> --}}
    </div>
        

        <x-foodlist>
            @foreach($products as $product)
            <div wire:key="{{ $product->id }}" class="card card-compact mx-auto w-[24rem] xl:w-[24rem] lg:w-[20rem] md:w-[22rem] mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
                <button wire:click="viewDetail({{ $product }})">
                    <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class="w-[24rem] h-52 object-cover object-center" /></figure>
                    <div class="card-body text-start ml-5 mt-2">
                        <h2 class="card-title text-white text-lg font-semibold capitalize">{{ $product->food }}                        </h2>
                        {{-- <p class="text-white items-center text-xl font-bold">Rp.{{number_format($product->price,0,".",".")  }}</p>
                        <div class="card-actions">
                            <button class="justify-end flex-end"><a wire:click="addToCart({{ $product->id }})" type="button" class="btn rounded-full capitalize text-lg bg-merah-500 hover:bg-merah-400 text-white">Add</a></button>
                        </div> --}}
                    </div>
                </button>
            </div>
            @endforeach
        </x-foodlist>
        @else 
                <td class="text-center" colspan="5">Product not found</td>
        @endif

        {{-- Modal Box Asu --}}
        @if($selectedFood)
            <x-detail-modal name="food-detail">
                @slot('body')
                    {{-- Background Blur Here transition masuk keluar buka component tapi disini juga bisa--}}
                    <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
                    {{-- Modal Here --}}
                    <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto fixed inset-24 max-w-2xl text-white">
                        <div class="m-4 py-4 flex justify-between">
                            <div class="pr-12"></div>
                            <h1 class="text-center font-semibold mx-auto text-3xl capitalize">{{ $selectedFood->food }}</h1>
                            <button x-on:click="show = false" class="text-xl bg-kuning-500 w-10 h-10 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">X</button>
                        </div>
                        <div class="md:flex md:justify-between hidden inset-x-4">
                            <p class="mx-8 mt-12">{{ $selectedFood->description }}</p>
                            <figure class="p-6"><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-52 object-cover object-center rounded-lg " /></figure>
                        </div>
                        <div class="grid md:hidden">
                            <figure class="p-6 mx-auto"><img src="{{ asset('storage/' . $selectedFood->food_image) }}" alt="{{ $product->food }}" class="w-[21rem] h-52 object-cover object-center rounded-lg " /></figure>
                            <p class="mx-auto">{{ $selectedFood->description }}</p>
                        </div>
                        <h1 class="font-semibold md:pl-6 text-center md:text-start text-3xl ">Rp.{{number_format($selectedFood->price,0,".",".")  }}</h1>
                        @if($foodCount > 0)
                            <div class="flex items-center md:justify-start justify-center mt-2 p-6 py-2 ">
                                <button wire:click="decrease({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-10 h-10 mr-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">-</button>
                                <span class="font-bold text-2xl select-none">{{ $foodCount }}</span>
                                <button wire:click="increase({{ $selectedFood->id }})" class="text-xl bg-kuning-500 w-10 h-10 ml-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">+</button>
                            </div>
                            @else
                                <button wire:click="addToCart({{ $selectedFood->id }})" class="text-2xl bg-color1 w-10 h-10 rounded-full hover:scale-105 transform transition duration-500 cursor-pointer p-2">Add To Cart</button>
                            @endif
                        
                    </div>
                @endslot
            </x-detail-modal>
        @endif
</div>
{{-- href="{{ route('products.show', $product->id) }}" --}}

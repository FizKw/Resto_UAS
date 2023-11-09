<div>
    @if($products->count() > 0)
        <div class="mb-6"></div>
        <div class="flex justify-start space-x-3 ml-20 ">
            <button wire:click="filterCategory()" class="btn rounded-full capitalize text-lg {{ is_null($category) ? 'bg-color1  text-white' : '' }}">Inni Mozarella</button>
            <button wire:click="filterCategory('Makanan')" class="btn rounded-full capitalize text-lg {{ ($category == 'Makanan') ? 'bg-color1  text-white' : '' }}">Inni Mie Ayam</button>
            {{-- <button wire:click="filterCategory('Minuman')" class="btn rounded-full capitalize text-lg {{ ($category == 'Minuman') ?   text-white' : '' }}">Minuman</button>
            <button wire:click="filterCategory('Snack')" class="btn rounded-full capitalize text-lg {{ ($category == 'Snack') ?  text-white' : '' }}">Snack</button> --}}
        </div>
        

        <x-foodlist>
            @foreach($products as $product)
            <div  class="card card-compact mx-auto w-96 lg:w-80 xl:w-96 mb-6 bg-biru-500 border border-color2 transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-lg relative">
                <a href="{{ route('products.show', $product->id) }}">
                    <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class="w-96 h-56 rounded-xl object-cover object-center" /></figure>
                    <div class="card-body text-center items-center">
                        <h2 class="card-title text-white text-2xl capitalize">{{ $product->food }}
                            <span class="badge badge-sm text-white">{{ $product->category }}</span>
                        </h2>
                        <p class="text-white items-center text-xl font-bold">Rp.{{number_format($product->price,0,".",".")  }}</p>
                        <div class="card-actions">
                            <button class="justify-end flex-end"><a wire:click="addToCart({{ $product->id }})" type="button" class="btn rounded-full capitalize text-lg bg-merah-500 hover:bg-merah-400 text-white">Add</a></button>
                        </div>
                    </div>
                </a>
            </div>
            @endforeach
        </x-foodlist>
        @else 
                <td class="text-center" colspan="5">Product not found</td>
        @endif
</div>

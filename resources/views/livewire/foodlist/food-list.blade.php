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
            <div  class="card card-compact mx-auto w-[22.5rem] xl:w-[22.5rem] lg:w-[21rem]  mb-6 bg-biru-500  transition transform duration-700 shadow-md hover:shadow-xl hover:scale-105 rounded-none relative">
                <a href="{{ route('products.show', $product->id) }}">
                    <figure class="mx-auto"><img src="{{ asset('storage/' . $product->food_image) }}" alt="{{ $product->food }}" class="w-[22.5rem] h-52 object-cover object-center" /></figure>
                    <div class="card-body text-start ml-5 mt-2">
                        <h2 class="card-title text-white text-lg font-semibold capitalize">{{ $product->food }}
                            {{-- <span class="badge badge-sm text-white">{{ $product->category }}</span> --}}
                        </h2>
                        {{-- <p class="text-white items-center text-xl font-bold">Rp.{{number_format($product->price,0,".",".")  }}</p>
                        <div class="card-actions">
                            <button class="justify-end flex-end"><a wire:click="addToCart({{ $product->id }})" type="button" class="btn rounded-full capitalize text-lg bg-merah-500 hover:bg-merah-400 text-white">Add</a></button>
                        </div> --}}
                    </div>
                </a>
            </div>
            @endforeach
        </x-foodlist>
        @else 
                <td class="text-center" colspan="5">Product not found</td>
        @endif
</div>

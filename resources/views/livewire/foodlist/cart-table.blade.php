<div>
    <div class="bg-white overflow-auto shadow-sm sm:rounded-lg">
        <div class="p-6 text-gray-900 ">
            <table class="table-fixed w-full h-full mx-auto table-hover relative border">
                <thead class="table-primary text-center sticky top-0 font-bold  text-lg text-black border-y">
                     <tr class="text-center text-lg">
                        <th class=" w-48"></th>
                        <th class=" w-48">Food</th>
                        <th class=" w-48">Price</th>
                        <th class=" w-48">Category</th>
                        <th class=" w-48">Description</th>
                        <th class=" w-48">Count</th>
                    {{-- <th>Total</th> --}}
                    </tr>
                </thead>
                <tbody class="text-center text-lg">
                    @if($listFood->count() > 0)
                        @foreach($listFood as $food)
                            <tr>
                                <td><img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class=" object-center object-cover mx-auto h-20  w-28 rounded"> </td>
                                <td class="align-middle text-center">{{ $food->food }}</td>
                                <td class="align-middle text-center">{{ $food->price }}</td>
                                <td class="align-middle text-center">{{ $food->category }}</td>
                                <td class="align-middle text-center overflow-hidden truncate">{{ $food->description }}</td>  
                                <td class="justify-center place-items-center py-12 flex ">
                                    <a wire:click="decrease({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">-</a>
                                    <p class="mx-4 ">{{ $food->pivot->count }}</p>
                                    <a wire:click="increase({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">+</a>
                                </td>
                                <td class="align-middle">
                            </tr>
                        @endforeach
                    <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    @else
                    <tr>
                        <td class="text-center" colspan="5">Cart Is Empty</td>
                    </tr>
                     @endif
                </tbody>
            </table>
        </div>
    </div>
    @if(DB::table('user_foods')->where('user_id', Auth()->user()->id)->get()->count() > 0)
    <div class="flex justify-between">
        <div class=""></div>
        <div class="mt-4 p-3 rounded-lg bg-orange-200">
            <h1 class="mx-3 font-semibold mb-2">Harga total : Rp{{ $totalPrice }}</h1>
            <button><a href="#modal_box" class="btn rounded-full capitalize text-lg bg-color1 hover:bg-red-400 text-white">Checkout pesanan</a></button>
        </div>
    </div>
    @endif
</div>

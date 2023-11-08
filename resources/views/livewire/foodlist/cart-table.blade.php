<div>
    <div class="bg-biru-500 overflow-auto h-[80vh] shadow-sm rounded-3xl border-4 border-yellow-600 relative">
        <div class=" text-white">
            {{-- <table class="table w-full h-full mx-auto table-hover relative ">
                <thead class=" sticky top-0">
                     <tr class="text-center text-lg">
                        <th class="text-white text-3xl font-bold">Pesanan</th>
                        <th class=></th>
                        <th class=></th>
                        <th class=></th>
                    </tr>
                </thead>
                <tbody class="text-center align text-lg"> --}}
                    @if($listFood->count() > 0)
                        <h1 class="font-bold text-3xl pl-14 pt-6">Pesanan</h1>
                        @foreach($listFood as $food)
                        <section class="justify-start grid grid-rows-2 grid-flow-col items-center p-6 pl-14 ">
                            <img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class="items-center row-span-2 object-center object-cover mx-auto h-32 w-40 rounded">
                            <h1 class="self-end px-4">{{ $food->food }}</h1>
                            <div class="self-start  ">
                                <div class="flex grid-cols-2 px-4">
                                    <h1 class="align-middle text-center pr-4 ">Rp.{{number_format($food->price,0,".",".")  }}</h1>
                                    <div class="flex">
                                        <a wire:click="decrease({{ $food->id }})" type="button" class="text-white hover:text-color2 cursor-pointer">-</a>
                                        <p class="mx-4 ">{{ $food->pivot->count }}</p>
                                        <a wire:click="increase({{ $food->id }})" type="button" class="text-white hover:text-color2 cursor-pointer">+</a>
                                    </div>
                                </div>
                            </div>
                        </section>
                        @endforeach
                        @if(DB::table('user_foods')->where('user_id', Auth()->user()->id)->get()->count() > 0)
                        <div class="flex justify-between">
                            <div class=""></div>
                            <div class="mt-4 p-3 mr-5 items-center ">
                                <h1 class=" text-center font-semibold text-xl ">Total     </h1>
                                <h2 class="text-center mb-2 font-semibold text-xl">Rp.{{number_format($totalPrice,0,".",".")  }}</h2>
                                <button class=" justify-center"><a href="#modal_box" class="btn rounded-lg text-center capitalize text-xl border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Pesan</a></button>
                            </div>
                        </div>
                        @endif
                        {{-- <section class="grid ">
                            <img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class=" object-center object-cover mx-auto h-20 w-28 rounded"/>
                            <tr>

                                <td class="align-middle text-center">{{ $food->food }}</td>
                                <td class="justify-center place-items-center py-12 flex ">
                                    <h1 class="align-middle text-center">{{ $food->price }}</h1>
                                    <a wire:click="decrease({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">-</a>
                                    <p class="mx-4 ">{{ $food->pivot->count }}</p>
                                    <a wire:click="increase({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">+</a>
                                </td>
                                <td class="align-middle">
                            </tr>
                            <tr>
                                <td class="justify-center place-items-center py-12 flex ">
                                    <h1 class="align-middle text-center">{{ $food->price }}</h1>
                                    <a wire:click="decrease({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">-</a>
                                    <p class="mx-4 ">{{ $food->pivot->count }}</p>
                                    <a wire:click="increase({{ $food->id }})" type="button" class="text-black hover:text-color2 cursor-pointer">+</a>
                                </td>
                                <td class="align-middle">
                            </tr> --}}
                        {{-- </section> --}}
                        
                    {{-- <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    {{-- </tr> --}}
                    @else
                    <tr>
                        <td class="text-center" colspan="5">Cart Is Empty</td>
                    </tr>
                     @endif
                {{-- </tbody>
            </table> --}}
        </div>
    </div>

</div>

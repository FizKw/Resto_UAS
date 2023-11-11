<div>
    <div class="bg-biru-500 overflow-auto h-[80vh] shadow-sm rounded-3xl border-4 border-yellow-600">
        <div class=" text-white">
                    @if($listFood->count() > 0)
                        <div class="relative">
                            <h1 class="font-bold text-3xl pl-14 pt-6">Pesanan</h1>
                            @foreach($listFood as $food)
                            <section class="justify-start grid grid-rows-2 grid-flow-col items-center p-6 pl-14 ">
                                <img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class="items-center row-span-2 object-center object-cover mx-auto h-32 w-40 rounded">
                                <h1 class=" font-bold text-2xl capitalize px-4">{{ $food->food }}</h1>
                                <div class="self-start  ">
                                    <div class="flex px-4">
                                        <div class="flex">
                                            <button><a wire:click="decrease({{ $food->id }})" type="button" class="text-2xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-1"><i data-feather="minus"></i> </a></button>
                                            <p class="mx-4 font-bold text-2xl ">{{ $food->pivot->count }}</p>
                                            <button><a wire:click="increase({{ $food->id }})" type="button" class="text-2xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-1"><i data-feather="plus"></i> </a></button>
                                        </div>
                                        <h1 class="align-middle font-bold text-2xl text-center ml-6 ">Rp.{{number_format($food->price,0,".",".")  }}</h1>
                                    </div>
                                </div>
                            </section>
                            @endforeach

                            @if(DB::table('user_foods')->where('user_id', Auth()->user()->id)->get()->count() > 0)
                            <div class="flex justify-center lg:fixed z-50 lg:right-14 xl:right-44 bottom-16 bg-biru-500 ">
                                <div class=""></div>
                                <div class="mt-4 p-3 mr-5 items-center ">
                                    <h1 class=" text-center font-bold text-2xl ">Total     </h1>
                                    <h2 class="text-center mb-2 font-bold text-2xl">Rp.{{number_format($totalPrice,0,".",".")  }}</h2>
                                    <div class="flex justify-center">
                                        <button class=" justify-center"><a href="#modal_box" class="btn rounded-lg text-center capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Pesan</a></button>
                                    </div>
                                </div>
                            </div>
                            @endif
                    </div>
                    @else
                    <tr>
                        <td class="text-center" colspan="5">Cart Is Empty</td>
                    </tr>
                     @endif
            
        </div>
    </div>

</div>

<div>
    <div class="bg-biru-500 overflow-auto h-[80vh] shadow-sm rounded-3xl border-4 border-yellow-600">
        <div class=" text-white">
                    @if($listFood->count() > 0)
                        <div class="relative">
                            <h1 class="font-bold text-3xl pl-14 pt-6 pb-2 sticky top-0 z-50 bg-biru-500">Pesanan</h1>
                            @foreach($listFood as $food)
                            <section class="justify-start grid grid-rows-2 grid-flow-col items-center p-3 pl-14 ">
                                <img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class="items-center row-span-2 object-center object-cover mx-auto h-32 w-40 rounded">
                                <h1 class=" font-bold text-2xl capitalize px-4">{{ $food->food }}</h1>
                                <div class="self-start  ">
                                    <div class="flex px-4">
                                        <div class="flex">
                                            <button><a wire:click="decrease({{ $food->id }})" type="button" class="text-2xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minus"><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></button>
                                            <p class="mx-4 font-bold text-2xl ">{{ $food->pivot->count }}</p>
                                            <button><a wire:click="increase({{ $food->id }})" type="button" class="text-2xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-1"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-plus"><line x1="12" y1="5" x2="12" y2="19"></line><line x1="5" y1="12" x2="19" y2="12"></line></svg></a></button>
                                        </div>
                                        <h1 class="align-middle font-bold text-2xl text-center ml-6 ">Rp.{{number_format($food->price,0,".",".")  }}</h1>
                                    </div>
                                </div>
                            </section>
                            @endforeach

                            @if(DB::table('user_foods')->where('user_id', Auth()->user()->id)->get()->count() > 0)
                            <div class="flex sticky z-50  justify-center md:justify-end md:mr-4 bottom-0 py-3 bg-biru-500 ">
                                <div class=" mr-5 items-center ">
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

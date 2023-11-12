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
                                <button><a wire:click="decrease({{ $food->id }})" type="button" class="text-xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">-</a></button>
                                <p class="mx-4 font-bold text-2xl ">{{ $food->pivot->count }}</p>
                                <button><a wire:click="increase({{ $food->id }})" type="button" class="text-xl bg-kuning-500 w-8 h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer p-0.5">+</a></button>
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
                            <button x-data x-on:click="$dispatch('open-detail')" class="justify-center btn rounded-lg text-center capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Pesan</button>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            @else
            <h1 class="container text-center px-5 py-40 font-semibold text-3xl leading-normal">Kamu masih belum pesan apa apa nih :) <br> Silahkan pesan menu yang kamu mau</h1>
            @endif
            
        </div>
    </div>

    <x-detail-modal>
        @slot('body')
            <div x-on:click="show = false" class="fixed inset-0 bg-gray-800 opacity-50"></div>
            <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl">
            <h1>Upload Payment Image Or Pay Later</h1>

            <form method="POST" action="{{ route('checkout') }}" enctype="multipart/form-data" >
                @csrf
                <div>
                    <x-input-label for="payment_image" value="payment_image" />
                    <x-text-input id="payment_image" name="payment_image" type="file" class="mt-1 block w-full" required autofocus autocomplete="payment_image" />
                    <x-input-error class="mt-2" :messages="$errors->get('payment_image')" />
                </div>

                <button class="btn capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">NOW</button>
            </form>
            <a href="{{ route('order') }}" class="btn capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">LATER</a>
        </div>

        @endslot

    </x-detail-modal>

</div>

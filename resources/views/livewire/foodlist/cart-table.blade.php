<div>
    <div class="max-h-screen">
        <div class="bg-biru-500 overflow-auto max-h-[74vh] mt-10 shadow-sm rounded-3xl border-4 border-yellow-600">
            <div class=" text-white">
                @if($listFood->count() > 0)
                <div class="relative">
                    <h1 class="font-bold text-2xl md:text-3xl px-7 md:px-14 pt-6 pb-2 sticky top-0 z-30 bg-biru-500">Pesanan</h1>
                    @foreach($listFood as $food)
                    <div>
                        <section class="justify-start grid grid-rows-2 grid-flow-col items-center p-3 px-7 md:pl-14 ">
                            <img src="{{ asset('storage/' . $food->food_image) }}" alt="{{ $food->food_image }}" class="items-center row-span-2 object-center object-cover mx-auto h-24 md:h-32 w-32 md:w-40 rounded">
                            <h1 class=" font-bold text-lg md:text-2xl capitalize px-4">{{ $food->food }}</h1>
                            <div class="self-start  ">
                                <div class="flex px-4">
                                    <div class="flex">
                                        <button><a wire:key="{{ $food->id }}" wire:click.prevent="decrease({{ $food->id }})" type="button" class="md:text-xl bg-kuning-500 w-6 h-6 md:w-8 md:h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer md:p-0.5">-</a></button>
                                        <p class="mx-4 font-bold md:text-2xl ">{{ $food->pivot->count }}</p>
                                        <button><a wire:key="{{ $food->id }}" wire:click.prevent="increase({{ $food->id }})" type="button" class="md:text-xl bg-kuning-500 w-6 h-6 md:w-8 md:h-8 rounded-full text-biru-500 font-bold hover:scale-105 transform transition duration-500 cursor-pointer md:p-0.5">+</a></button>
                                    </div>
                                    <h1 class="align-middle font-bold text-lg md:text-2xl text-center ml-6 ">Rp {{number_format($food->price,0,".",".")  }}</h1>
                                </div>
                            </div>
                        </section>
                    </div>
                    @endforeach

                    @if(DB::table('user_foods')->where('user_id', Auth()->user()->id)->get()->count() > 0)
                    <div class="flex sticky z-30  justify-around md:mr-4 bottom-0 pt-3 pb-4 bg-biru-500 ">
                        <button class=" btn mt-16 rounded-lg text-center capitalize text-lg md:text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black"> <a href="{{ route('home') }}">kembali</a></button>
                        <div class="  ">
                            <h1 class=" text-center font-bold text-xl md:text-2xl ">Total     </h1>
                            <h2 class="text-center mb-2 font-bold text-xl md:text-2xl">Rp {{number_format($totalPrice,0,".",".")  }}</h2>
                            <div class="flex justify-center">
                                <button x-data x-on:click="$dispatch('open-detail')" class="justify-center btn rounded-lg text-center capitalize text-xl md:text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black">Pesan</button>
                            </div>
                        </div>
                    </div>
                    @endif
                </div>
                @else
                <h1 class="container text-center px-5 py-40 font-semibold text-xl md:text-3xl leading-normal">Kamu masih belum pesan apa apa nih :) <br> Silahkan pesan menu yang kamu mau</h1>
                @endif

            </div>
        </div>

        {{-- Modal buat checkout --}}
        <x-detail-modal>
            @slot('body')
                {{-- Konten Modal --}}
                <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-hidden fixed inset-x-[20%] inset-y-[28%] max-w-2xl text-white">
                    <h1 class="text-center font-semibold text-xl md:text-2xl text-white p-6">Checkout Pesanan</h1>
                    {{-- Ini form buat checkout --}}
                    <form action="{{ route('order') }}" method="POST">
                        @csrf
                        @method('PATCH')
                        {{-- Notes dari user ke kasir kalau perlu --}}
                        <div class="mx-auto relative w-full">
                            <textarea class="px-2 py-2.5 mt-6 mx-auto mb-3 block resize-none peer min-h-[100px] w-[90%] h-full text-lg border border-black bg-white text-black ring-merah-500 focus:border-merah-500 focus:ring-merah-500 rounded-lg" name="order_note" placeholder="Catatan untuk restoran"></textarea>
                        </div>
                        {{-- button buat checkout --}}
                        <div class="flex justify-end">
                            <button class="btn capitalize text-2xl mx-auto font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white ">Pesan</button>
                        </div>
                    </form>
                </div>
            @endslot
        </x-detail-modal>
    </div>
</div>

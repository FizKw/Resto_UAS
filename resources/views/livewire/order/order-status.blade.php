<div class="max-h-screen">
    <div class="bg-biru-500 overflow-auto h-[80vh] mx-10 mt-12 shadow-sm rounded-3xl border-4 text-white border-yellow-600 relative">
        {{-- Kalau misalkan orderannya di cancel bakal muncul ini --}}
        @if ($orderNumber->status == "Cancel")
            <div class="mt-9">
                <h1 class="font-bold pt-7 text-6xl md:text-8xl text-center">Yahh pesanan ditolak :(</h1>
                <p class="text-lg md:text-xl text-center text-white mb-6">Pesananmu ditolak restoran</p>
                <p class="text-lg md:text-xl text-center text-white mb-6">Karena {{ $orderNumber->cashier_note }}</p>

            </div>
            <div class="mx-16">
                <div class="ml-[4%] mr-[5%] overflow-hidden rounded-full bg-gray-200">
                    <div class="h-2 w-[0.5%] rounded-full bg-merah-100"></div>
                </div>
                    <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
                        <li class="flex justify-center gap-2 bg-biru-500 p-2">
                            <svg class="h-5 w-5 absolute -top-[0.8rem] left-[3%] text-red-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="hidden sm:block justify text-red-500 mt-2"> Ditolak </span>
                        </li>
                        <li class="flex items-end gap-2 bg-biru-500 p-2">
                            <svg class="h-5 w-5 absolute -top-[0.8rem] left-[49%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="hidden sm:block text-white ml-20 md:ml-24 mt-2">Diproses </span>
                        </li>
                        <li class="flex items-center gap-2 bg-biru-500 p-2">
                            <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                            </svg>
                            <span class="hidden sm:block text-white pl-12 md:ml-5 mt-2"> Siap Diambil </span>
                        </li>
                    </ol>
                </div>
            </div>
            <div class="ml-24 mt-9 col">
                <p class="text-7xl font-bold text-white">
                    Sorry Your Order is Cancelled Because : <br>
                    {{ $orderNumber->cashier_note }}
                </p>
            </div>

        {{-- status orderan saat ini --}}
        @else
        <div class="mt-9">
            <h1 class="font-bold pt-7 text-6xl md:text-8xl text-center">Selamat !</h1>
            @switch($orderNumber->status)
                @case($orderNumber->status == "Waiting")
                    <p class="text-lg md:text-xl text-center text-white mb-6">Pesananmu akan segera di proses</p>
                    @break
                @case($orderNumber->status == "Process")
                    <p class="text-lg md:text-xl text-center text-white mb-6">Pesananmu sedang di proses restoran</p>
                    @break
                @case($orderNumber->status == "Ready")
                    <p class="text-lg md:text-xl text-center text-white mb-6">Pesananmu siap diambil</p>
                    @break
                @default
            @endswitch
            <h1 class="text-9xl md:text-[12rem] text-center mb-12 font-bold">#{{ $orderNumber->id }}</></h1>
            <div class="grid place-items-center">
        </div>
        
        @switch($orderNumber->status)
                @case($orderNumber->status == "Waiting")
                    <div class="mx-16">
                        <div class="ml-[4%] mr-[5%] overflow-hidden rounded-full bg-gray-200">
                            <div class="h-2 w-[0.5%] rounded-full bg-kuning-500"></div>
                        </div>
                            <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
                                <li class="flex justify-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[3%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block justify text-kuning-500 mt-2"> Diterima </span>
                                </li>
                                <li class="flex items-end gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[49%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white ml-20 md:ml-24 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white pl-12 md:ml-5 mt-2"> Siap Diambil </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                    @break
                @case($orderNumber->status == "Process")
                    <div class="mx-16">
                        <div class="ml-[4%] mr-[5%] overflow-hidden rounded-full bg-gray-200">
                            <div class="h-2 w-1/2 rounded-full bg-kuning-500"></div>
                        </div>
                            <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
                                <li class="flex justify-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[3%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block justify text-kuning-500 mt-2"> Diterima </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[49%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-kuning-500 ml-20 md:ml-24 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white pl-12 md:ml-5 mt-2"> Siap Diambil </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                    @break
                @case($orderNumber->status == "Ready")
                    <div class="mx-16">
                        <div class="ml-[4%] mr-[5%] overflow-hidden rounded-full bg-gray-200">
                            <div class="h-2 w-full rounded-full bg-kuning-500"></div>
                        </div>
                            <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
                                <li class="flex justify-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[3%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block justify text-kuning-500 mt-2"> Diterima </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[49%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-kuning-500 ml-20 md:ml-24 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-kuning-500 pl-12 md:ml-5 mt-2"> Siap Diambil </span>
                                </li>
                            </ol>
                        </div>
                    </div>
                    @break
            @endswitch


            {{-- status orderan dalam process --}}
            @if ( $orderNumber->status == "Process")
                {{-- kalau belum upload image buat bayar muncul button  --}}
                @if ($orderNumber->payment_image == null  )
                    <div class="flex justify-center items-center mt-8">
                        <button x-data x-on:click="$dispatch('open-detail')" class="border-2 border-black rounded-xl font-bold flex-none md:px-12 px-8 pt-4 pb-10  w-22 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300   text-biru-500 hover:border-black  transition ease-in-out duration-150">Bayar lewat QRIS yuk!!</button>
                    </div>
                    {{-- Kalau sudah upload image buat bayar tapi masih nunggu verivikasi dari kasir --}}
                @elseif ($orderNumber->is_paid == false )
                <p class="text-lg md:text-xl text-center text-white mt-6 mb-6">Sabar ya, restoran lagi verifikasi pembayaran kamu nihh!!
                </p>
                @endif
            @endif
            {{-- Kalau pembayaran sudah diverivikasi --}}
            @if( $orderNumber->is_paid == true)
                <h1 class="text-lg md:text-xl text-center text-white mt-6 mb-6">Asikk, Pembayaran kamu sudah terverikasi</h1>
            @endif

            {{-- Nampilin notes dari kasir kalau ada --}}
            @if (isset($orderNumber->cashier_note))
                <h1 class="text-lg md:text-xl text-center text-white mt-6 mb-6">Notes : {{ $orderNumber->cashier_note }}</h1>
            @endif
        </div>
        @endif

        {{-- Modal box buat upload foto bukti pembayaran --}}
        <x-detail-modal>
            @slot('body')
                {{-- Konten Modal Box --}}
                <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-auto fixed inset-x-[20%] inset-y-[17%] max-w-2xl text-white" >
                    <h1 class="text-center font-semibold text-xl md:text-2xl text-white p-6">Upload Pembayaran</h1>
                    <img class="mx-auto w-[50%] h-[50%] mb-4 object-scale-down" src="{{ asset('asset/barcodePlaceholder.png') }}" alt="">
                    {{-- Ini form buat upload foto pembayaran --}}
                    <form action="{{ route('paynow') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid place-items-center">
                        <x-text-input id="payment_image" name="payment_image" type="file" class="mt-1  w-[70%] " required autofocus autocomplete="payment_image" />
                        <x-input-error class="mt-2" :messages="$errors->get('payment_image')" />
                        </div>
                        <div class="flex justify-center mt-6">
                            <button class="btn capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Bayar</button>
                        </div>
                    </form>
                </div>
                @endslot
        </x-detail-modal>

    </div>
</div>

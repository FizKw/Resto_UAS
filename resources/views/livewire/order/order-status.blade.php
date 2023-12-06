<div class="max-h-screen">
    <div class="bg-biru-500 overflow-auto h-full pb-10 mx-10 mt-12 shadow-sm rounded-3xl border-4 text-white border-yellow-600 relative">
        {{-- Kalau misalkan orderannya di cancel bakal muncul ini --}}
        @if ($orderNumber->status == "Cancel")
            <div class="mt-20">
                <h1 class="font-bold pt-3 text-6xl md:text-6xl text-center mb-4">Yahh pesanan ditolak :(</h1>
                <p class="text-lg md:text-xl text-center text-white mb-6">Kata restorannya {{ $orderNumber->cashier_note }}</p>
                <p class="text-lg md:text-xl text-center text-white">Pesen lagi yuk!!</p>
            </div>
            <div class="fixed bottom-[20%] inset-x-[18%]">
                <div class=" ml-[4%] mr-[5%] overflow-hidden rounded-full bg-gray-200">
                    <div class="h-2 w-[0.5%] rounded-full bg-merah-100"></div>
                </div>
                    <ol class="relative z-10 flex justify-between text-sm font-medium text-gray-500">
                        <li class="flex justify-center gap-2 bg-biru-500 p-2">
                            <svg class="h-5 w-5 absolute -top-[0.8rem] left-[3%] text-white bg-red-500 rounded-full " xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-x-circle"><circle cx="12" cy="12" r="10"></circle><line x1="15" y1="9" x2="9" y2="15"></line><line x1="9" y1="9" x2="15" y2="15"></line></svg>

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

        {{-- status orderan saat ini --}}
        @else
        <div class="mt-9">
            <h1 class="font-bold pt-3 pb-2 text-5xl md:text-7xl text-center">Selamat!</h1>
            @switch($orderNumber->status)
                @case($orderNumber->status == "Waiting")
                    <p class="text-base md:text-xl text-center text-white pb-6">Pesananmu akan segera di proses</p>
                    @break
                @case($orderNumber->status == "Process")
                    <p class="text-base md:text-xl text-center text-white pb-6">Pesananmu sedang di proses restoran</p>
                    @break
                @case($orderNumber->status == "Ready")
                    <p class="text-base md:text-xl text-center text-white pb-6">Pesananmu siap diambil</p>
                    @break
                @default
            @endswitch
            <h1 class="text-8xl md:text-[12rem] text-center mb-12 font-bold">#{{ $orderNumber->id }}</></h1>
            <div class="grid place-items-center">
        </div>
        
        @switch($orderNumber->status)
                @case($orderNumber->status == "Waiting")
                    <div class="mx-6">
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
                    <div class="mx-6">
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
                    <div class="mx-6">
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
                    <div class="flex justify-center items-center mt-4 mb-4">
                        <button x-data x-on:click="$dispatch('open-detail')" class="border-2 border-black rounded-xl font-bold flex-none md:px-12 px-8 py-2  w-22 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300   text-biru-500 hover:border-black  transition ease-in-out duration-150">Bayar lewat QRIS yuk!!</button>
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
                <div class="bg-biru-500 rounded-xl border-4 border-kuning-500 m-auto overflow-auto fixed inset-x-[10%] inset-y-[14%] max-w-2xl text-white" >
                    <h1 class="text-center font-semibold text-xl md:text-2xl text-white p-6">Upload Pembayaran</h1>
                    <img class="mx-auto w-[50%] h-[50%] mb-4 object-scale-down" src="{{ asset('asset/qris.jpg') }}" alt="">
                    {{-- Ini form buat upload foto pembayaran --}}
                    <form action="{{ route('paynow') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="grid place-items-center">
                        <x-text-input id="payment_image" name="payment_image" type="file" class="mt-1  w-[60%] " required autofocus autocomplete="payment_image" />
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

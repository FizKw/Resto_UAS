<div class="max-h-screen">
    <div class="bg-biru-500 overflow-auto h-[80vh] mt-12 shadow-sm rounded-3xl border-4 text-white border-yellow-600">
        {{-- Kalau misalkan orderannya di cancel bakal muncul ini --}}
        @if ($orderNumber->status == "Cancel")
            <div class="ml-24 mt-9 col">
                <p class="text-7xl font-bold text-white">
                    Sorry Your Order is Cancelled Because : <br>
                    {{ $orderNumber->cashier_note }}
                </p>
            </div>

        {{-- status orderan saat ini --}}
        @else
        <div class="mt-9">
            <h1 class="font-bold pt-7 text-8xl text-center">Selamat !</h1>
            <p class="text-xl text-center text-white mb-6">Pesananmu akan segera di proses</p>
            <h1 class="text-[12rem] text-center font-bold">#{{ $orderNumber->id }}</></h1>
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
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[49%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white ml-8 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white mt-2"> Siap Diambil </span>
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
                                    <span class="hidden sm:block text-kuning-500 ml-8 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-white mt-2"> Siap Diambil </span>
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
                                    <span class="hidden sm:block text-kuning-500 ml-8 mt-2">Diproses </span>
                                </li>
                                <li class="flex items-center gap-2 bg-biru-500 p-2">
                                    <svg class="h-5 w-5 absolute -top-[0.8rem] left-[94%] text-kuning-500 bg-white rounded-full " xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="hidden sm:block text-kuning-500 mt-2"> Siap Diambil </span>
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
                    <button x-data x-on:click="$dispatch('open-detail')" class="btn">Pay Now</button>
                {{-- Kalau sudah upload image buat bayar tapi masih nunggu verivikasi dari kasir --}}
                @elseif ($orderNumber->is_paid == false )
                    <h1 class="text-7xl font-bold text-white">Menunggu Verivikasi Pembayaran</h1>
                @endif
            @endif
            {{-- Kalau pembayaran sudah diverivikasi --}}
            @if( $orderNumber->is_paid == true)
                <h1 class="text-7xl font-bold text-white">Pembayaranmu Sudah Terverivikasi</h1>
            @endif

            {{-- Nampilin notes dari kasir kalau ada --}}
            @if (isset($orderNumber->cashier_note))
                <h1 class="text-7xl font-bold text-white">Notes : {{ $orderNumber->cashier_note }}</h1>
            @endif
        </div>
        @endif

        {{-- Modal box buat upload foto bukti pembayaran --}}
        <x-detail-modal>
            @slot('body')
                {{-- Konten Modal Box --}}
                <div class="bg-white rounded m-auto fixed inset-0 max-w-2xl" >
                    <h1>Upload Payment</h1>
                    {{-- Ini form buat upload foto pembayaran --}}
                    <form action="{{ route('paynow') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <x-text-input id="payment_image" name="payment_image" type="file" class="mt-1 block w-full" required autofocus autocomplete="payment_image" />
                        <x-input-error class="mt-2" :messages="$errors->get('payment_image')" />
                        <button class="btn capitalize text-2xl font-bold border hover:border-black bg-kuning-500 hover:bg-kuning-400 text-black hover:text-white">Pay</button>
                    </form>
                </div>
                @endslot
        </x-detail-modal>

    </div>
</div>

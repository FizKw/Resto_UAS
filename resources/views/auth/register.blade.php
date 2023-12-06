<x-guest-layout>
    @section('title','Register')
    <div class=" mx-auto lg:grid lg:grid-cols-2 gap-8">
        <div class="text-white col-span-1">
            <h1 class="text-center text-white text-6xl sm:text-7xl font-sans font-bold">Selamat datang</h1>
            <h2 class="text-center text-white text-xl  font-light mt-2 mb-1">Silahkan daftar disini</h2>

            <form class="max-w-md mx-auto pt-6" method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </i>
                    </div>
                    <input type="text" id="f_name" name="f_name" value="{{ old('f_name') }}" required autofocus autocomplete="f_name" placeholder="Nama Depan" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">

                    {{-- <x-input-error :messages="$errors->get('f_name')" class="mt-2" /> --}}
                </div>
                    @if ($errors->has('f_name'))
                        <p class="mt-2 mx-2 text-sm text-red-600 space-y-1">Email atau password yang anda masukan salah</p>
                    @endif
                <div class="mt-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </i>
                    </div>
                    <input type="text" id="l_name" name="l_name" value="{{ old('l_name') }}" required autofocus autocomplete="l_name" placeholder="Nama Belakang" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('l_name')" class="mt-2" />
                </div>


                {{-- No Telepon --}}
                <div class="mt-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                            </svg>
                        </i>
                    </div>
                    <input type="text" id="phone" name="phone" value="{{ old('phone') }}" required autofocus autocomplete="phone" placeholder="No. Telepon" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    {{-- <x-input-error :messages="$errors->get('phone')" class="mt-2" /> --}}

                </div>
                @if ($errors->has('phone'))
                    <p class="mx-2 text-sm text-red-600 space-y-1">Nomer Telepon Tidak Sesuai</p>
                @endif


                {{-- Email --}}
                <div class="mt-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </i>
                    </div>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="Email" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                </div>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
                @if ($errors->has('email'))
                    <p class="mt-2 mx-2 text-sm text-red-600 space-y-1">Email telah digunakan</p>
                @endif

                {{-- Password --}}
                <div class="mt-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </i>
                    </div>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Password" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                </div>
                    @if ($errors->has('password'))
                        <p class="mt-2 mx-2 text-sm text-red-600 space-y-1">Password paling sedikit menggunakan 8 karakter</p>
                    @endif
                <div class="mt-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </i>
                    </div>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password" placeholder="Konfirmasi Password" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    {{-- <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" /> --}}
                </div>
                    @if ($errors->has('password_confirmation'))
                        <p class="mt-2 mx-2 text-sm text-red-600 space-y-1">Password tidak sesuai</p>
                    @endif

                <div class="mt-4">
                    {!! captcha_img() !!}
                    <input id="captcha" class="w-full px-2 py-2 mt-4 border rounded-md focus:outline-none focus:border-merah-500 focus:ring-merah-500 bg-white text-black placeholder:opacity-60" type="text" name="captcha" placeholder="Masukan Captcha" :value="old('captcha')" required autocomplete="captcha" />
                    @if($errors->has('captcha'))
                        <span class="mt-2 mx-2 text-sm text-red-600 space-y-1">
                            Captcha Salah
                        </span>
                    @endif
                </div>

                <button type="submit" class="mt-4 w-full bg-kuning-500 text-black border border-black py-2 px-4 rounded-md  hover:bg-kuning-400 focus:outline-none focus:border-kuning-400 focus:bg-kuning-400">Submit</button>

                <h2 class="text-sm font-normal mt-6  p-2">Sudah punya akun? <a href="{{ route('login') }}" class="button text-kuning-500 hover:text-kuning-400 focus:text-kuning-400">Login disini</a></h2>

            </form>
        </div>


        <div class="col-span-1 hidden lg:flex items-center justify-center mr-6">
            <a href="{{ route('index') }}" class=" " wire:navigate>
                <img class=" rounded-3xl" src="{{ asset('asset/logo.png') }}" alt="Placeholder Image">
            </a>
        </div>
    </div>
</x-guest-layout>

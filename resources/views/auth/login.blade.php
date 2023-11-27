<x-guest-layout>
    <!-- Session Status bisa diilangin -->
    <x-auth-session-status class="mb-4" :status="session('status')" />
    <div class="mx-auto lg:grid lg:grid-cols-2 gap-8">
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <section class="text-white col-span-1">
                <h1 class="text-center text-white text-6xl sm:text-7xl font-sans font-bold">Selamat datang</h1>
                <h2 class="text-center text-white text-xl font-light mt-0">Senang melihat anda datang kembali</h2>
                <div class="max-w-md mx-auto pt-6">

                    <!-- Email Address -->
                    <div class=" relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                                  </svg>

                            </i>
                        </div>
                        <input id="email" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:border-merah-500 focus:ring-merah-500 bg-white text-black placeholder:opacity-60" type="email" name="email" placeholder="Email" value="{{ old('email') }}" required autofocus autocomplete="email" />
                    </div>

                    {{-- <x-input-error :messages="$errors->get('email')" class="mt-2 " /> --}}

                    <!-- Password -->
                    <div class="my-4 relative">
                        <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                            <i class="text-black">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                                </svg>
                            </i>
                        </div>
                        <input id="password" class="w-full px-10 py-2 border rounded-md focus:outline-none focus:border-merah-500 focus:ring-merah-500 bg-white text-black placeholder:opacity-60"
                                        type="password"
                                        name="password"
                                        placeholder="Password"
                                        required autocomplete="current-password" />


                        {{-- <x-input-error :messages="$errors->get('password')" class="mt-2" /> --}}
                    </div>
                    @if ($errors->has('email'))
                    <p class="mx-2 text-sm text-red-600 space-y-1">Email atau password yang anda masukan salah</p>
                    @elseif (($errors->has('password')))
                    <p class="mx-2 text-sm text-red-600 space-y-1">Email atau password yang anda masukan salah</p>
                    @endif

                    {{-- Button --}}
                    <button type="submit" class="w-full bg-kuning-500 text-black border border-black py-2 px-4 mt-4 rounded-md hover:bg-kuning-400 focus:outline-none focus:border-kuning-400 focus:bg-kuning-400">Submit</button>


                    {{-- Button Remember me --}}
                    <div class="block mt-4">
                        <label for="remember_me" class="inline-flex items-center">
                            <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                            <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                        </label>
                    </div>

                    {{-- Register --}}
                    <div class="text-md mt-4 p-2">Lupa Password? <a href="{{ route('password.request') }}" class="button hover:text-kuning-400 text-kuning-500 text-md ">klik disini</a></div>
                    <div class="text-md mt-4 p-2">Belum punya akun? <a href="{{ route('register') }}" class="button hover:text-kuning-400 text-kuning-500 text-md ">Daftar disini</a></div>

                </div>
            </section>
        </form>
        <div class="col-span-1 p-8  hidden lg:flex items-center justify-center">
            <a href="{{ route('index') }}" class="" wire:navigate>
                <img class=" w-full h-full rounded-3xl" src="{{ asset('asset/logo.png') }}" alt="Placeholder Image">
            </a>
        </div>

    </div>
</x-guest-layout>

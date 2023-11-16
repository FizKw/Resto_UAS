<x-guest-layout>
    <div class=" mx-auto lg:grid lg:grid-cols-2 gap-8">
        <div class="text-white col-span-1">
            <h1 class="text-center text-white text-7xl sm:text-8xl font-sans font-bold">Welcome</h1>
            <h2 class="text-center text-white text-xl  font-light mt-0">Please Register Here</h2>

            <form class="max-w-md mx-auto pt-6" method="POST" action="{{ route('register') }}">
                @csrf

                {{-- Name --}}
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </i>
                    </div>
                    <input type="text" id="f_name" name="f_name" value="{{ old('f_name') }}" required autofocus autocomplete="f_name" placeholder="First Name" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('f_name')" class="mt-2" />
                </div>
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </i>
                    </div>
                    <input type="text" id="l_name" name="l_name" value="{{ old('l_name') }}" required autofocus autocomplete="l_name" placeholder="Last Name" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('l_name')" class="mt-2" />
                </div>


                {{-- Tanggal Lahir --}}
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 6a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0zM4.501 20.118a7.5 7.5 0 0114.998 0A17.933 17.933 0 0112 21.75c-2.676 0-5.216-.584-7.499-1.632z" />
                            </svg>
                        </i>
                    </div>
                    <input type="date" id="date_of_birth" name="date_of_birth" value="{{ old('date_of_birth') }}" required autofocus autocomplete="date_of_birth" placeholder="Tanggal Lahir" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('date_of_birth')" class="mt-2" />
                </div>


                {{-- Email --}}
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </i>
                    </div>
                    <input type="email" id="email" name="email" value="{{ old('email') }}" required autofocus autocomplete="email" placeholder="Email" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>


                {{-- Password --}}
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </i>
                    </div>
                    <input type="password" id="password" name="password" value="{{ old('password') }}" required autocomplete="password" placeholder="Password" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>
                <div class="mb-4 relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3">
                        <i class="text-black">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.5 10.5V6.75a4.5 4.5 0 10-9 0v3.75m-.75 11.25h10.5a2.25 2.25 0 002.25-2.25v-6.75a2.25 2.25 0 00-2.25-2.25H6.75a2.25 2.25 0 00-2.25 2.25v6.75a2.25 2.25 0 002.25 2.25z" />
                            </svg>
                        </i>
                    </div>
                    <input type="password" id="password_confirmation" name="password_confirmation" value="{{ old('password_confirmation') }}" required autocomplete="password" placeholder="Confirm Password" class="w-full px-10 py-2 border rounded-md focus:outline-none bg-white text-black">
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <button type="submit" class="w-full bg-kuning-500 text-black border border-black py-2 px-4 rounded-md  hover:bg-kuning-400 focus:outline-none focus:border-kuning-400 focus:bg-kuning-400">Submit</button>

                <h2 class="text-sm font-normal mt-6  p-2">Already have account? <a href="{{ route('login') }}" class="button text-kuning-500 hover:text-kuning-400 focus:text-kuning-400">Login here</a></h2>

            </form>
        </div>


        <div class="col-span-1 hidden lg:flex items-center justify-center mr-6">
            <a href="{{ route('index') }}" class=" " wire:navigate>
                <img class=" rounded-3xl" src="{{ asset('asset/logo.png') }}" alt="Placeholder Image">
            </a>
        </div>
    </div>
</x-guest-layout>

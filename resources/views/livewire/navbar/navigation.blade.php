<div class="navbar bg-merah-500 fixed z-50 h-28 shadow-lg justify-between">
    <div  class="flex-1 max-w-7xl px-1 sm:px-6 lg:px-8">
        <a href="{{ route('index') }}" class=" ">
            <img src="{{ asset('asset/logo.png') }}" alt="" class="w-24 h-20 mx-2 my-auto">
        </a>
    </div>
    <div class="mx-4">
        {{-- dashboard admin & owner --}}
        @auth
            @if (Auth()->user()->usertype === 'admin')
                <a href="{{ route('home') }}" class=" mx-8 my-2 text-center capitalize text-gray-300 hover:text-white">Dashboard</a>
            @elseif (Auth()->user()->usertype === 'cashier')
                <a href="{{ route('home') }}" class=" mx-8 my-2 text-center capitalize text-gray-300 hover:text-white">Dashboard</a>
            @endif
        @endauth

            {{-- Cartlist --}}
            @auth
            @if (Auth()->user()->usertype === 'user')
            <a href="{{ route('cartlist')}}">
                <div  tabindex="0" class="btn btn-ghost hover:border-none active:border-none btn-circle group mr-8">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-kuning-500 group-hover:text-kuning-300 duration-75" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        @if($cart > 0)
                        <span class="badge badge-sm rounded-full h-5 w-5 border-none text-white bg-blue-900 group-hover:bg-blue-800 indicator-item">{{ $cart }}</span>
                        @endif
                    </div>
                </div>
            </a>
            @endif
            @endauth

        @auth
        <div class="dropdown dropdown-end ">

            {{-- Avatar Logo --}}
            @if (isset(Auth()->user()->avatar))
            <label tabindex="0" class="btn block lg:hidden group-hover:cursor-pointer focus:ring-2  w-14 h-14 btn-circle avatar">
                <div class="rounded-full">
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo">
                </div>
            </label>

            <div class="lg:flex hidden mr-10">
                <div class="btn hidden lg:block capitalize group overflow-visible relative max-w-sm mx-auto py-2 pr-1 bg-kuning-500 rounded-none hover:bg-kuning-400 duration-150 border-none mt-3 ">
                    <label tabindex="0">
                        <img class="group-hover:cursor-pointer absolute -left-6 -top-1 w-14 h-14 rounded-full shadow-lg duration-150" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo"></img>
                    </label>
                    {{-- Username --}}
                    <label tabindex="0" class="group-hover:cursor-pointer py-5 px-6  text-black text-lg font-bold  ">{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}</label>

                </div>
                <img src="/asset/vector/kipas2.png" alt="" class="h-[60px] mt-1.5 w-10">
            </div>

            {{-- Tanpa logo --}}
            @else
                {{-- Media Query Kecil --}}
            <label tabindex="0" class="btn block lg:hidden py-3 px-[10px] bg-merah-500 hover:cursor-pointer border-2 text-kuning-500 hover:bg-merah-400 active:bg-merah-400 focus:bg-merah-400 btn-circle avatar">
                <div class="rounded-full">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user text-kuning-500"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                </div>
            </label>

            {{-- Dekstop --}}
            <div class="lg:flex hidden mr-9 ">
                <div class="flex group mt-3 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 h-12 max-w-sm mx-auto">
                    <label tabindex="0" class="bg-merah-500 btn group-hover:cursor-pointer text-kuning-500 group-hover:bg-merah-400 group-active:bg-merah-400 group-focus:bg-merah-400 btn-circle avatar">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user text-kuning-500"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                    </label>

                    {{-- Username --}}
                    <label tabindex="0" class="group-hover:cursor-pointer  my-auto px-4 text-black text-lg font-bold hidden md:block ">{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}
                    </label>
                </div>
                <img src="/asset/vector/kipas2.png" alt="" class="h-[60px] mt-1.5 w-10">
            </div>

            @endif



            {{-- Dropdown Avatar --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-kuning-500 text-black rounded-box w-52">
                <li><a href="{{route('profile.edit')}}" class="hover:text-white active:bg-kuning-300 focus:bg-kuning-300 ">Profile Settings</a></li>
                <li><form method="POST" action="{{ route('logout') }}" class="inline-flex hover:text-white active:bg-kuning-300 focus:bg-kuning-300">
                    @csrf

                    <a class="w-full" href="{{route('logout')}}"
                            onclick="event.preventDefault();
                                        this.closest('form').submit();" >
                        {{ __('Log Out') }}
                    </a>
                </form></li>
            </ul>
        </div>

        {{-- Non logged-in --}}
        @else
        <button class="border-none -mr-2">
            <a href="{{ route('login') }}" class="rounded-none font-bold  flex-none md:px-12 px-8 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 border-none py-3 h-10 w-22 text-xl text-black ">Login</a>
        </button>
        <img src="/asset/vector/kipas.png">
        @endauth
    </div>
</div>


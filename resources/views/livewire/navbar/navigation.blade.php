<div class="navbar bg-merah-500 fixed z-50 shadow-lg justify-between">
    <div  class="flex-1 max-w-7xl px-1 sm:px-6 lg:px-8">
        <a href="{{ route('index') }}" class=" w-16 h-20 mx-2 mt-1" wire:navigate>
            <img src={!! asset('Inni.png') !!} alt="">
        </a>
        @auth
        <a href="{{ route('home') }}"  class=" font-bold px-2 text-xl" wire:navigate>
        @else
        <a href="{{ route('menu') }}"  class=" font-bold px-2 text-xl" wire:navigate>
        @endauth
            Menu
        </a>
    </div>
    <div class="mx-4">

            {{-- Cartlist --}}
            @auth
            @if (Auth()->user()->usertype === 'user')
            <a href="{{ route('cartlist')}}" wire:navigate>
                <div  tabindex="0" class="btn btn-ghost btn-circle  mr-3">
                    <div class="indicator">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 text-black" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" /></svg>
                        @if($cart > 0)
                        <span class="badge badge-sm rounded-full h-5 w-5 border-none text-white bg-color1 indicator-item">{{ $cart }}</span>
                        @endif
                    </div>
                </div>
            </a>
            @endif
            @endauth

        @auth    
        <div class="dropdown dropdown-end ">
            
            {{-- Avatar Logo --}}
            <div class="flex group">
                @if (isset(Auth()->user()->avatar))  
                <label tabindex="0" class="btn group-hover:cursor-pointer  focus:ring-2 focus:ring-color2 btn-circle avatar">
                    <div class="rounded-full">
                        <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo"></img>
                    </div>
                </label>
                @else
                <div tabindex="0" class="btn group-hover:cursor-pointer  focus:ring-2 focus:ring-color2 btn-circle avatar">
                    <label class="rounded-full">
                        <i data-feather="user"></i> 
                    </label>
                </div>
                @endif

                {{-- Username --}}
                <label tabindex="0" class="group-hover:cursor-pointer pt-3 pl-4 text-black hidden md:block ">{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}</label>
            </div>

            {{-- Dropdown Avatar --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-color4 text-black rounded-box w-52">
                <li><a href="{{route('profile.edit')}}" wire:navigate class="hover:text-color1 active:bg-color3 focus:bg-color3 ">Profile Settings</a></li>
                <li><form method="POST" action="{{ route('logout') }}" class="inline-flex hover:text-color1">
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
        <div class="flex-none md:px-12 ">
            <a href="{{ route('login') }}" class="pr-1 font-bold text-black hover:text-grey-400">Login</a>

            @if (Route::has('register'))
            <a href="{{ route('register') }}" class="btn border-none bg-color1 hover:bg-red-700 text-base text-white capitalize rounded-full ml-4 font-semibold ">Register</a>
            @endif
        </div>
        @endauth
    </div>
</div>


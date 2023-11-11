<div class="navbar bg-merah-500 fixed z-50 shadow-lg justify-between">
    <div  class="flex-1 max-w-7xl px-1 sm:px-6 lg:px-8">
        <a href="{{ route('index') }}" class=" " wire:navigate>
            <img src={!! asset('Inni.png') !!} alt="" class="w-18 h-16 mx-2 my-auto">
        </a>
    </div>
    <div class="mx-4">

            {{-- Cartlist --}}
            @auth
            @if (Auth()->user()->usertype === 'user')
            <a href="{{ route('cartlist')}}" wire:navigate>
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
                    <img src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo"></img>
                </div>
            </label>
            <div class="btn hidden lg:block capitalize group overflow-visible relative max-w-sm mx-auto mr-6 py-2 pr-1 bg-kuning-500 rounded-lg hover:bg-kuning-400 hover:rounded-none duration-150 shadow-lg   items-center ">
                
                <label tabindex="0">
                    <img class="group-hover:cursor-pointer absolute -left-6 -top-1 w-14 h-14 rounded-full shadow-lg duration-150" src="{{ asset('storage/' . Auth::user()->avatar) }}" alt="user photo"></img>
                </label>
                {{-- Username --}}
                <label tabindex="0" class="group-hover:cursor-pointer py-5 px-6  text-black text-lg font-bold  ">{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}</label>
            </div>
            @else
            <div class="flex group bg-kuning-500 rounded-lg h-12 max-w-sm mx-auto">
                <label tabindex="0" class="btn group-hover:cursor-pointer focus:ring-2 focus:ring-color2 btn-circle avatar">
                    <i data-feather="user"></i> 
                </label>
            </label>
            {{-- Username --}}
            <label tabindex="0" class="group-hover:cursor-pointer  my-auto px-4 text-black text-lg font-bold hidden md:block ">{{ Auth::user()->f_name }} {{ Auth::user()->l_name }}</label>
           </div>
            @endif

           

            {{-- Dropdown Avatar --}}
            <ul tabindex="0" class="menu menu-sm dropdown-content mt-3 z-[1] p-2 shadow bg-kuning-500 text-black rounded-box w-52">
                <li><a href="{{route('profile.edit')}}" wire:navigate class="hover:text-white active:bg-kuning-300 focus:bg-kuning-300 ">Profile Settings</a></li>
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
        <div class="flex-none md:px-12 px-8 bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 mr-6 py-2 h-10 w-22">
            <a href="{{ route('login') }}" class="rounded-none font-bold    text-black hover:text-white ">Login</a>
        </div>
        @endauth
    </div>
</div>


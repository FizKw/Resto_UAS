<div>
@if (isset($item1) && isset($item2))
<div class="carousel w-full max-h-screen relative ">
    {{-- slide 1 --}}
    {{-- Media Query Dekstop--}}
    <div id="slide1" class="relative w-full carousel-item hidden xl:grid grid-cols-3 pt-18">
        <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-[85%]">

        <div class="pt-18 mx-auto lg:ml-24 ml-10 z-20 min-w-full">
            <h1 class="xl:text-8xl lg:text-7xl md:text-6xl sm:text-5xl text-4xl text-white font-semibold leading-none z-20 bg-merah-500 bg-opacity-60 ">{{$item1->food }}</h1>
            <p class="text-white text-base mt-6 mb-2 w-8/12 xl:w-3/4">{{$item1->description}}</p>
            <div  class="relative mt-6 md:mt-8 mx-10">
                <button class="outline outline-2 hidden md:block md:outline-offset-[10px] outline-yellow-600">
                @auth
                    @if (Auth()->user()->usertype === 'user')
                        <a href="{{ route('home') }}" class="text-center text-yellow-600 text-xl font-semibold" wire:navigate>Check Our Menu</a>
                    @endif
                @else
                <a href="{{ route('menu') }}" class="text-center text-yellow-600 text-xl font-semibold" wire:navigate>Our Menu</a>
                @endauth
                </button>
            </div>
        </div>

        <img class="w-11/12 h-5/6 mx-10 object-center object-cover z-0 col-span-2" src="{{ asset('storage/' . $item1->food_image) }}" />

        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
            </svg>
            </a>
            <a href="#slide2">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
            </svg>
            </a>
        </div>
    </div>

        {{-- Media Query Ipad --}}
    <div id="slide3" class="relative w-full h-[80vh] carousel-item xl:hidden block pt-24">
        <img src="{{ asset('asset/vector/kotak.png') }}" class="-z-30 absolute w-1/2 h-[87%]">
        <div class="absolute  flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide4">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </a>
            <a href="#slide4">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
            </svg>
            </a>
        </div>
        <img class="w-10/12 h-3/5 mx-auto object-center flex  object-cover col-span-2" src="{{ asset('storage/' . $item1->food_image) }}" />
        <h1 class="text-4xl md:text-6xl text-center text-white font-semibold mt-6">{{$item1->food}}</h1>
        <div class="mx-auto">
        <p class="text-center text-white mt-3 mx-16">{{$item1->description}}</p>
        </div>
        <div class="flex justify-center pt-6">
            <button>
            @auth
                @if (Auth()->user()->usertype === 'user')
                    <a href="{{ route('home') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Check Our Menu</a>
                @endif
            @else
            <a href="{{ route('menu') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Our Menu</a>
            @endauth
            </button>
        </div>
    </div>

        {{-- Slide 2 --}}
    <div id="slide2" class="relative w-full carousel-item hidden xl:grid grid-cols-3 pt-18">
        <img src="{{ asset('asset/vector/kotak.png') }}" class="absolute w-1/2 h-[85%]">


        <div class="mt-18 mx-auto lg:ml-24 ml-10 z-20 min-w-full">
            <h1 class="xl:text-8xl lg:text-7xl md:text-6xl sm:text-5xl text-4xl text-white font-semibold leading-none z-20 bg-merah-500 bg-opacity-60">{{$item2->food}}</h1>
            <p class="text-white text-sm lg:text-base mt-6 mb-2 w-3/4">{{$item2->description}}</p>
            <div  class="relative mt-6 md:mt-8 mx-10">
                <button class="outline outline-2 outline-offset-4 md:outline-offset-[10px] outline-yellow-600">
                @auth
                    @if (Auth()->user()->usertype === 'user')
                        <a href="{{ route('home') }}" class="text-center text-yellow-600 text-xl font-semibold" wire:navigate>Check Our Menu</a>
                    @endif
                @else
                <a href="{{ route('menu') }}" class="text-center text-yellow-600 text-xl font-semibold" wire:navigate>Our Menu</a>
                @endauth
                </button>
            </div>
        </div>

        <img class="w-11/12 h-5/6 mx-10 object-center object-cover z-0 col-span-2" src="{{ asset('storage/' . $item2->food_image) }}" />

        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </a>
            <a href="#slide1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
                </svg>
            </a>
        </div>
    </div>

        {{-- Media Query Ipad --}}
    <div id="slide4" class="relative w-full h-[80vh] carousel-item xl:hidden block pt-24">
        <img src="{{ asset('asset/vector/kotak.png') }}" class="-z-30 absolute w-1/2 h-[87%]">
        <div class="absolute flex justify-between transform -translate-y-1/2 left-5 right-5 top-1/2">
            <a href="#slide3">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M18.75 19.5l-7.5-7.5 7.5-7.5m-6 15L5.25 12l7.5-7.5" />
                </svg>
            </a>
            <a href="#slide3">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="text-kuning-500 w-10 h-10">
                <path stroke-linecap="round" stroke-linejoin="round" d="M11.25 4.5l7.5 7.5-7.5 7.5m-6-15l7.5 7.5-7.5 7.5" />
            </svg>
            </a>
        </div>
        <img class="w-10/12 h-3/5 mx-auto object-center flex  object-cover col-span-2" src="{{ asset('storage/' . $item2->food_image) }}" />
        <h1 class="text-4xl md:text-6xl text-center text-white font-semibold mt-6">{{$item2->food}}</h1>
        <div class="mx-auto">
            <p class="text-center text-white mt-3 mx-16">{{$item2->description}}</p>
        </div>
        <div class="flex justify-center pt-6">
            <button>
            @auth
                @if (Auth()->user()->usertype === 'user')
                    <a href="{{ route('home') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Check Our Menu</a>
                @endif
            @else
            <a href="{{ route('menu') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Our Menu</a>
            @endauth
            </button>
        </div>
    </div>
</div>
@else
<button class="block mx-auto mt-32 mb-6">
    @auth
        @if (Auth()->user()->usertype === 'user')
            <a href="{{ route('home') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Check Our Menu</a>
        @endif
    @else
    <a href="{{ route('menu') }}" class=" px-6 py-2 text-center capitalize text-2xl font-bold bg-kuning-500 hover:bg-kuning-400 text-black" wire:navigate>Check Our Menu</a>
    @endauth
    </button>
@endif
</div>
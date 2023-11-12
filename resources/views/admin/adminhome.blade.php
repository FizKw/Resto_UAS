@section('title', 'Home Product')
<x-app-layout>
    
    <x-slot name="header">
        <h2 class="font-semibold text-xl">
            Admin Dashboard
        </h2>
    </x-slot>

    <div class="flex justify-between mt-16 border-b-2 border-kuning-500 pb-5">
        <div class="justify-start flex">
            <h1 class="text-xl font-semibold text-yellow-500 self-end pl-28 ">Our Menu</h1>
        </div>
        <div class="flex justify-end items-center mx-12  ">
            <a href="#" class="capitalize text-black text-md bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 mr-8 px-10 py-2 rounded-sm">Cek Pemasukan</a>
            <a href="{{ route('products.create') }}" class="capitalize text-black text-md bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 px-4 py-2 rounded-sm">Tambahkan Menu Baru</a>
        </div>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success bg-green-600 my-6 mx-6" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

        <div class="max-w-full ">
                <!-- Table admin CRUD  -->
                <livewire:admin.adminedit />  
        </div>
    
</x-app-layout>

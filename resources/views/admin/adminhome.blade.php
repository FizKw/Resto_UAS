@section('title', 'Home Product')
<x-app-layout>
    <div class="flex justify-end pt-28 border-b-2 border-kuning-500 pb-5 container max-w-screen-sm md:max-w-full pr-10">
            <a href="{{ route('products.history') }}" class="capitalize text-black text-sm md:text-md bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 mr-4 px-5 md:px-10 py-2 rounded-sm">Cek Pemasukan</a>
            <a href="{{ route('products.create') }}" class="capitalize text-black text-sm md:text-md bg-kuning-500 hover:bg-kuning-400 active:bg-kuning-300 focus:bg-kuning-300 px-4 py-2 rounded-sm">Tambahkan Menu</a>
    </div>
    @if(Session::has('success'))
    <div class="alert alert-success bg-green-600 my-6 mx-6" role="alert">
        {{ Session::get('success') }}
    </div>
    @endif

        <div class="mx-6 ">
                <!-- Table admin CRUD  -->
                <livewire:admin.adminedit />  
        </div>
    
</x-app-layout>

<x-app-layout>
    <section class="py-12 px-4 lg:px-0 container mx-auto">
        <h2 class="text-center font-semibold text-2xl text-kuning-500 p-6">Edit Menu</h2>
        <div class="p-12 sm:p-8 bg-biru-500 border-4 border-kuning-500 rounded-lg justify-center">
            <div class="max-w-full justify-center">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="py-6 mx-auto">
                        <div class="px-2 mx-auto">
                            <section class="lg:flex justify-center lg:justify-around">
                                <div class="" x-data="{src: '{{ asset('storage/' . $product->food_image) }}'}">
                                    <h1 class="font-semibold text-lg text-kuning-500 mb-2 text-center">Foto</h1>
                                    <img class="object-cover object-center w-96 h-56 justify-center  max-w-full mx-auto rounded-lg mb-4" :src="src" alt="">
                                    <div class="mt-4 mb-3">
                                        <x-text-input class="w-full file:shadow-lg file:mr-4 file:py-2 file:px-4 file:rounded-lg file:border-0 file:text-md file:font-semibold file:bg-merah-500 file:text-white hover:file:bg-merah-400 " type="file" name="food_image" placeholder="Food Image"
                                            @change="src = URL.createObjectURL($event.target.files[0])"
                                        />
                                    </div>
                                </div>
                                <div class="w-full lg:w-[40%]">
                                    <div class="mb-3">
                                        <x-input-label class="form-label">Menu</x-input-label>
                                        <x-text-input type="text" name="food" class="mt-1 " placeholder="Food" value="{{ $product->food }}" />
                                    </div>
                                    <div class="mb-3">
                                        <x-input-label class="form-label">Harga</x-input-label>
                                        <x-text-input type="number" name="price" class="mt-1 " placeholder="Price" value="{{ $product->price }}" />
                                    </div>
                                    {{-- Ini Kategori --}}
                                    {{-- <div class="mb-3">
                                        <x-input-label class="form-label">Kategori</x-input-label>
                                        <div class="input-group ">
                                            <select class="select select-bordered text-md text-md border border-black bg-kuning-500 ring-merah-500 focus:border-merah-500 focus:ring-merah-500 rounded-lg  text-black w-2/5 mr-8" name="category" required>
                                                <option value="Mozarella" {{ old('category', $product->category) == 'Mozarella' ? 'selected' : '' }}>Mozarella</option>
                                                <option value="Mie" {{ old('category', $product->category) == 'Mie' ? 'selected' : '' }}>Mie Ayam</option>
                                            </select>
                                        </div>
                                    </div> --}}
                                    <div class="mb-3">
                                        <x-input-label class="form-label">Slider</x-input-label>
                                        <div class="input-group ">
                                            <select class="select select-bordered text-md text-md border border-black bg-kuning-500 ring-merah-500 focus:border-merah-500 focus:ring-merah-500 rounded-lg  text-black w-2/5 mr-8" name="carouselId">
                                                <option value="" {{ old('carouselId', $product->carouselId) == null ? 'selected' : '' }}>None</option>
                                                <option value= "1" {{ old('carouselId', $product->carouselId) == 1 ? 'selected' : '' }}>1</option>
                                                <option value= "2" {{ old('carouselId', $product->carouselId) == 2 ? 'selected' : '' }}>2</option>
                                            </select>
                                        </div>
                                    </div>


                            </section>
                            <div class="my-2 mx-auto relative w-full">
                                <x-input-label class="mt-1 ">Deskripsi</x-input-label>
                                <textarea class="px-3 py-2.5 mt-1 block resize-none peer min-h-[100px] w-full h-full text-lg border border-black bg-kuning-500 ring-merah-500 focus:border-merah-500 focus:ring-merah-500 rounded-lg" name="description" placeholder="Food Description">{{ old('description', $product->description) }}</textarea>
                            </div>
                            <div class="flex justify-center mt-4">
                                <x-primary-button class="btn">Simpan</x-primary-button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>

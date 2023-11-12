<x-app-layout>
    <section class="py-12 px-4 lg:px-0 container mx-auto">
        <h2 class="text-center font-bold text-2xl p-3">Edit Menu</h2>
        <div class="p-12 sm:p-8 bg-color4 shadow rounded-lg">
            <div class="max-w-xl">
                <form action="{{ route('products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                        <figure class=" flex-shrink-0 flex-grow-0 mx-8 w-72 h-56 justify-center rounded-lg ">
                            <img class="object-fill object-center  flex-shrink-0 flex-grow-0 h-full max-w-full mx-auto rounded-lg mb-4 justtify-center" src="{{ asset('storage/' . $product->food_image) }}" alt="">   
                        </figure>
                        <div class="mt-4">
                            <x-text-input type="file" name="food_image" placeholder="Food Image" />
                        </div>
                    <div class="pt-3">
                        <div class="mb-3">
                            <x-input-label class="form-label">Food</x-input-label>
                            <x-text-input type="text" name="food" class="mt-1 block w-full" placeholder="Food" value="{{ $product->food }}" />
                        </div>
                        <div class="mb-3">
                            <x-input-label class="form-label">Price</x-input-label>
                            <x-text-input type="number" name="price" class="mt-1 block w-full" placeholder="Price" value="{{ $product->price }}" />
                        </div>
                        <div class="input-group">
                            <select class="select select-bordered text-md text-black" name="category" required>
                                <option value="Mozarella" {{ old('category', $product->category) == 'Mozarella' ? 'selected' : '' }}>Mozarella</option>
                                <option value="Mie" {{ old('category', $product->category) == 'Mie' ? 'selected' : '' }}>Mie Ayam</option>
                            </select>
                        </div>
                            <div class="mb-3 relative w-full min-w-[200px]">
                                <x-input-label class="mt-1 ">Description</x-input-label>
                                <textarea class="px-3 py-2.5 mt-1 block resize-none peer min-h-[100px] w-full h-full border  ring-1 ring-orange-950 bg-color3 focus:border-orange-950  focus:ring-orange-950 text-black rounded-sm mr-4" name="description" placeholder="Food Description">{{ old('description', $product->description) }}</textarea>
                            </div>
                        <div class="">
                            <x-primary-button class="btn btn-warning">Update</x-primary-button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
</x-app-layout>
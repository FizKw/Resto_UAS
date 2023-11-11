<div class="container mx-auto w-full">
        <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                @if($product->count() > 0)
                    <table class="table text-white border-separate space-y-6 text-sm">
                        <thead class=" text-kuning-500 sticky top-0">
                            <tr>
                                <th class="p-3"></th>
                                <th class="p-3 text-left">Menu</th>
                                <th class="p-3 text-left">Detail</th>
                                <th class="p-3 text-left">Harga</th>
                                <th class="p-3 text-left">Kategori</th>
                                <th class="p-3 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $rs)
                            <div class="">
                                <tr class="bg-biru-500 outline outline-offset-1 outline-kuning-500">
                                    <td class="p-2">
                                        <img src="{{ asset('storage/' . $rs->food_image) }}" alt="{{ $rs->food_image }}" class=" object-center object-cover mx-auto h-16 w-36 rounded">
                                    </td>
                                    <td class="p-3 capitalize">
                                        {{ $rs->food }}
                                    </td>
                                    <td class="p-3">
                                        {{ $rs->description }}
                                    </td>
                                    <td class="p-3">
                                        Rp.{{number_format($rs->price,0,".",".")  }}
                                    </td>
                                    <td class="p-3">
                                        {{ $rs->category }}
                                    </td>
                                    <td class="p-3 flex ">
                                        <a wire:click="setCarousel1({{ $rs->id }})" type="button" class="{{ ($rs->carouselId == 1 ? 'invisible' : '') }} btn btn-xs sm:btn-sm md:btn-md btn-error hover:bg-green-200 bg-green-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-3 w-3 sm:h-4 sm:w-4 md:h-6 md:w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <a wire:click="setCarousel2({{ $rs->id }})" type="button" class="{{ ($rs->carouselId == 2 ? 'invisible' : '') }} btn btn-xs sm:btn-sm md:btn-md btn-error hover:bg-blue-200 bg-blue-500">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-3 w-3 sm:h-4 sm:w-4 md:h-6 md:w-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M16.862 4.487l1.687-1.688a1.875 1.875 0 112.652 2.652L10.582 16.07a4.5 4.5 0 01-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 011.13-1.897l8.932-8.931zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0115.75 21H5.25A2.25 2.25 0 013 18.75V8.25A2.25 2.25 0 015.25 6H10" />
                                            </svg>
                                        </a>
                                        <a href="{{ route('products.edit', $rs->id)}}" class=" text-kuning-500 hover:text-kuning-300 text-md py-4 "><i data-feather="edit-2"></i></a>
                                        <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"  onsubmit="return confirm('Apakah anda yakin ingin mengapusnya?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" text-kuning-500 hover:text-kuning-300 text-md py-4 ml-6"><i data-feather="trash"></i>
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            </div>
                            @endforeach
                        </tbody>
                    </table>
                @else
                <h1 class="text-center text-kuning-500 font-semibold bg-biru-500 border border-offset-1 border-kuning-500 py-3 rounded-lg">Menu belum di daftarkan</h1>
                @endif
            </div>
        </div>
    <style>
        .table {
            border-spacing: 0 15px;
        }
    
        i {
            font-size: 1rem !important;
        }
    
        .table tr {
            border-radius: 20px;
        }
    
        tr td:nth-child(n+5),
        tr th:nth-child(n+5) {
            border-radius: 0 .625rem .625rem 0;
        }
    
        tr td:nth-child(1),
        tr th:nth-child(1) {
            border-radius: .625rem 0 0 .625rem;
        }
    </style>
</div>

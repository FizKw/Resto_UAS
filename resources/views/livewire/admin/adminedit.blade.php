<div class="mx-auto max-w-screen-sm md:max-w-full">
        
    <div class="col-span-12">
            <div class="overflow-auto lg:overflow-visible ">
                @if($product->count() > 0)
                    <table class="table text-white border-separate space-y-6 text-sm relative">
                        <thead class=" text-kuning-500">
                            <tr class="sticky top-0">
                                <th class="md:p-3"></th>
                                <th class="md:p-3 text-left">Menu</th>
                                <th class="md:p-3 text-left">Detail</th>
                                <th class="md:p-3 text-left">Harga</th>
                                <th class="md:p-3 text-left"></th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($product as $rs)
                            <div class="">
                                <tr class="bg-biru-500 outline outline-offset-1 outline-kuning-500 text-sm">
                                    <td class="md:p-2 h-16 w-36">
                                        <img src="{{ asset('storage/' . $rs->food_image) }}" alt="{{ $rs->food_image }}" class=" object-center object-cover mx-auto h-16 w-36 rounded">
                                    </td>
                                    <td class="md:p-3 capitalize">
                                        {{ $rs->food }}
                                    </td>
                                    <td class="md:p-3  ">
                                        {{ $rs->description }}
                                    </td>
                                    <td class="md:p-3">
                                        Rp {{number_format($rs->price,0,".",".")  }}
                                    </td>
                                    <td class="md:p-3 flex btn-group ">

                                        <button>
                                            <a href="{{ route('products.edit', $rs->id)}}" type="button" class="text-kuning-500 hover:text-kuning-300 text-md py-2 mt-1 ">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                                        </button>
                                        <form action="{{ route('products.destroy', $rs->id) }}" method="POST" type="button"  onsubmit="return confirm('Apakah anda yakin ingin mengapusnya?')">
                                            @csrf
                                            @method('DELETE')
                                            <button class=" text-kuning-500 hover:text-kuning-300 text-md py-2 ml-6 mb-2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2"><polyline points="3 6 5 6 21 6"></polyline><path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path><line x1="10" y1="11" x2="10" y2="17"></line><line x1="14" y1="11" x2="14" y2="17"></line></svg>
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

<?php
namespace App\Http\Controllers;

use App\Http\Requests\FoodImageRequest;
use App\Models\Foods;
use App\Models\Orders;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.products.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(FoodImageRequest $request)
    {
        $path = Storage::disk('public')->put('foods',$request->file('food_image'));
        $data = $request->all();
        $data['category'] = "Kosong";
        $data['food_image'] = $path;
        Foods::create($data);


        return redirect()->route('home')->with('success', 'Product added successfully');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $product = Foods::findOrFail($id);

        return view('admin.products.edit', compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $product = Foods::findOrFail($id);
        $data = $request->all();
        if($data['carouselId'] != null){
            Foods::where('carouselId', $data['carouselId'])->update(['carouselId'=> null]);
        }

        if(isset($request->food_image)){
            Storage::disk('public')->delete($product->food_image);
            $path = Storage::disk('public')->put('foods',$request->file('food_image'));
            $data['food_image'] = $path;
        }

        $product->update($data);
        return redirect()->route('home')->with('success', 'product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Foods::findOrFail($id);
        $product->users()->detach();
        $product->delete();

        return redirect()->route('home')->with('success', 'product deleted successfully');
    }

    public function history()
    {
        $history = null;

        return view('admin.history', compact('history'));
    }

    public function filterHistory(Request $request){

        $history = Orders::with('user', 'foods')->onlyTrashed()
            ->whereBetween('deleted_at',[$request->start_date, $request->end_date])
            ->where('status', 'Done')
            ->get()->sortBy('id');
        return view('admin.history', compact('history'));
    }
}

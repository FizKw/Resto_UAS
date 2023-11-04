<?php
namespace App\Http\Controllers;

use App\Http\Requests\FoodImageRequest;
use App\Models\Foods;
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
        $data['food_image'] = $path;
        Foods::create($data);
        
 
        return redirect()->route('home')->with('success', 'Product added successfully');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $product = Foods::findOrFail($id);
        if (Auth::check()) {
            $counts = DB::table('user_foods')->where('user_id', Auth()->user()->id)->where('foods_id', $id)->get()->count();
        }else{
            $counts = 0;
        }
        // dd($counts);

  
        return view('admin.products.show', compact('product','counts'));
    }
    
    public function insert(int $foods){

        $user = User::find(Auth()->user()->id);
        $user->foods()->attach($foods);
        return redirect()->back();

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

        // dd($data);
  
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
}
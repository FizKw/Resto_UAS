<?php

namespace App\Livewire\Foodlist;

use Livewire\Component;
use App\Models\Foods;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FoodList extends Component
{
    public $category = null;
    public Foods $selectedFood;
    public $foodCount;

    public function filterCategory($category = null){
        $this->category = $category;
    }

    public function addToCart($foodsId = null){
        $user = User::find(Auth()->user()->id);
        if(Auth::id()){
            if( $user->order_id == null || $user->order->status == "Cancel" || $user->order->status == "Done"){
                $user->update(['order_id' => null]);
                $user->foods()->attach($foodsId);
                $this->foodCount = 1;
                $this->dispatch('counts-update');

            }else{
                session()->flash('orderStatus', 'Your Order Is Still In Progress');
            }
        }else{
            return redirect()->route('login');
        }
    }

    public function increase($foodId = null){
        $user = User::find(Auth()->user()->id);
        DB::table('user_foods')->where('foods_id', $foodId)->where('user_id', $user->id)->where('order_id', null)->increment('count');
        $this->foodCount++;
        $this->dispatch('counts-update');
    }

    public function decrease($foodId = null){
        $user = User::find(Auth()->user()->id);
        $row = DB::table('user_foods')->where('foods_id', $foodId)->where('user_id', $user->id)->where('order_id', null)->first();
        if($row->count > 1){
            DB::table('user_foods')->where('foods_id', $foodId)->where('user_id', $user->id)->where('order_id', null)->decrement('count');
            $this->foodCount--;
        }else{
            DB::table('user_foods')->where('foods_id', $foodId)->where('user_id', $user->id)->where('order_id', null)->delete();
            $this->foodCount = 0;
        }
        $this->dispatch('counts-update');

    }

    public function viewDetail(Foods $product)
    {
        $this->selectedFood = $product;
        if(Auth::id()){
            $count = DB::table('user_foods')->where('user_id', Auth()->user()->id)->where('foods_id', $product->id)->where('order_id', null)->first();
            if(isset($count)){
            $this->foodCount = $count->count;
            }
            else{
                $this->foodCount = 0;
            }

        }else{
            $this->foodCount = 0;
        }
        $this->dispatch('open-detail', name:'food-detail');
    }


    public function render()
    {
        $products = Foods::orderBy('created_at', 'DESC')
            ->when($this->category, function($query, $category){
                return $query->where('category', $category);
            })
            ->get();
        $btnActive = "none";
        return view('livewire.foodlist.food-list',[
            'products' => $products,
            'btnActive' => $btnActive,
        ]);
    }
}

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
    public Foods$selectedFood;
    public $foodCount;

    public function filterCategory($category = null){
        $this->category = $category;
    }


    public function viewDetail($product)
    {
        $this->selectedFood = Foods::with('users')->where('id', $product)->first();
        if(Auth::id()){
            $food = $this->selectedFood->users()->where('user_id', Auth()->user()->id)->wherePivot('order_id', null)->first();
            if(isset($food)){
            $this->foodCount = $food->pivot->count;
            }
            else{
                $this->foodCount = 0;
            }

        }else{
            $this->foodCount = 0;
        }
        $this->dispatch('open-detail', name:'food-detail');
    }



    public function addToCart($foodsId = null){
        if(Auth::id()){
            $user = User::find(Auth()->user()->id);
            if( $user->order_id == null || $user->order->status == "Cancel" || $user->order->status == "Done"){
                Orders::where('user_id', $user->id)->delete();
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
        $user = User::with('foods')->where('id', Auth()->user()->id)->first();
        $user->foods()->where('foods_id', $foodId)->increment('count');
        $this->foodCount++;
        $this->dispatch('counts-update');
    }

    public function decrease($foodId = null){
        $user = User::with('foods')->where('id', Auth()->user()->id)->first();
        if($user->foods()->where('foods_id', $foodId)->first()->pivot->count > 1){
            $user->foods()->where('foods_id', $foodId)->decrement('count');
            $this->foodCount--;
        }else{
            $user->foods()->wherePivot('order_id', null)->detach($foodId);
            $this->foodCount = 0;
        }
        $this->dispatch('counts-update');
    }




    public function render()
    {
        $products = Foods::with('users')->whereNull('carouselId')->get()->sortBy('id');
        // dd($products);
        // $products = Foods::orderBy('created_at', 'DESC')
        //     ->when($this->category, function($query, $category){
        //         return $query->where('category', $category);
        //     })
        //     ->get();
        $btnActive = "none";
        return view('livewire.foodlist.food-list',[
            'products' => $products,
            'btnActive' => $btnActive,
        ]);
    }
}

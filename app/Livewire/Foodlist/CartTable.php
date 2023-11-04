<?php

namespace App\Livewire\Foodlist;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CartTable extends Component
{
    public $listFood;
    public $counts;
    public $totalPrice;

    public function increase($cartId = null){
        $user = User::find(Auth()->user()->id);
        DB::table('user_foods')->where('foods_id', $cartId)->where('user_id', $user->id)->increment('count');
        $this->dispatch('counts-update');
    }

    public function decrease($cartId = null){
        $user = User::find(Auth()->user()->id);
        $row = DB::table('user_foods')->where('foods_id', $cartId)->where('user_id', $user->id)->first();
        if($row->count > 1){
            DB::table('user_foods')->where('foods_id', $cartId)->where('user_id', $user->id)->decrement('count');
        }else{
            $user->foods()->detach($cartId);
        }
        $this->dispatch('counts-update');
        
    }

    public function render()
    {
        $price = 0;
        $this->counts = DB::table('user_foods')->where('user_id', Auth()->user()->id)->get();
        $cart = User::with('foods')->where('id',Auth()->user()->id)->first();
        $this->listFood = $cart->foods;
        foreach($cart->foods as $product){
            $price += $product->price * $product->pivot->count;
        }
        $this->totalPrice = $price;
        
        return view('livewire.foodlist.cart-table');
    }
}

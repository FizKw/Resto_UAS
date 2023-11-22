<?php

namespace App\Livewire\Foodlist;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;

class CartTable extends Component
{
    public $listFood;
    public $counts;
    public $totalPrice;

    public function increase($cartId = null){
        $user = User::with('foods')->where('id', Auth()->user()->id)->first();
        $user->foods()->where('foods_id', $cartId)->increment('count');
        $this->dispatch('counts-update');
    }

    public function decrease($cartId = null){
        $user = User::with('foods')->where('id', Auth()->user()->id)->first();
        if($user->foods()->where('foods_id', $cartId)->first()->pivot->count > 1){
            $user->foods()->where('foods_id', $cartId)->decrement('count');
        }else{
            $user->foods()->wherePivot('order_id', null)->detach($cartId);
        }
        $this->dispatch('counts-update');

    }

    #[On('counts-detail')]
    public function render()
    {
        $price = 0;
        $cart = User::with('foods')->where('id',Auth()->user()->id)->first();
        $this->listFood = $cart->foods;
        foreach($cart->foods as $product){
            $price += $product->price * $product->pivot->count;
        }
        $this->totalPrice = $price;

        return view('livewire.foodlist.cart-table');
    }
}

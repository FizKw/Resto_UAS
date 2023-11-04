<?php

namespace App\Livewire\Foodlist;

use Livewire\Component;
use App\Models\Foods;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class FoodList extends Component
{
    public $category = null;

    public function filterCategory($category = null){
        $this->category = $category;
    }

    public function addToCart($foodsId = null){
        if(Auth::id()){
            $user = User::find(Auth()->user()->id);
            if(DB::table('user_foods')->where('foods_id', $foodsId)->where('user_id', $user->id)->exists()){
                DB::table('user_foods')->where('foods_id', $foodsId)->where('user_id', $user->id)->increment('count');
            }else{
                $user->foods()->attach($foodsId);
            }

            $this->dispatch('counts-update');
        }else{
            return redirect()->route('login');
        }
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

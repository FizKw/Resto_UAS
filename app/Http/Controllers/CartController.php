<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{


    public function show(){

        $cart = User::with('foods')->where('id',Auth()->user()->id)->first();
        $listFood = $cart->foods->unique();
        // dd($listFood->toArray());

        $counts = DB::table('user_foods')->selectRaw('foods_id, count(*) as count')->where('user_id', Auth()->user()->id)->groupBy('foods_id')->get();
        

        // dd($counts);
        $totalPrice = 0;
        foreach ($listFood as $list) {
            foreach ($counts as $count)
                if ($list->id == $count->foods_id) {
                $totalPrice = $totalPrice + ($list->price * $count->count);
                }
        }
        // dd($totalPrice);

        return view('user.cartlist', compact('listFood', 'counts', 'totalPrice'));

    }


    public function checkout(){
        $user = User::find(Auth()->user()->id);
        $user->foods()->detach();

        return redirect()->route('home');
    }

}

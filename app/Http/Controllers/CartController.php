<?php

namespace App\Http\Controllers;

use App\Models\Foods;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class CartController extends Controller
{


    public function show(){

        $cart = User::with('foods')->where('id',Auth()->user()->id)->first();
        $listFood = $cart->foods->unique();
        $counts = DB::table('user_foods')->selectRaw('foods_id, count(*) as count')->where('user_id', Auth()->user()->id)->groupBy('foods_id')->get();


        $totalPrice = 0;
        foreach ($listFood as $list) {
            foreach ($counts as $count)
                if ($list->id == $count->foods_id) {
                $totalPrice = $totalPrice + ($list->price * $count->count);
                }
        }

        return view('user.cartlist', compact('listFood', 'counts', 'totalPrice'));

    }


    public function paynow(Request $request){

        $path = Storage::disk('public')->put('payment_images',$request->file('payment_image'));
        $user = User::find(Auth()->user()->id);
        $order = Orders::where('user_id', $user->id)->where('status','!=','Done')->where('status','!=','Cancel')->first();
        $order->update([
            'payment_image' => $path,
        ]);
        return redirect()->back();
    }

    public function order(Request $request){
        $user = User::find(Auth()->user()->id);
        Orders::create([
            'user_id' => $user->id,
            'order_note' => $request->order_note,
        ]);
        $order = Orders::where('user_id', $user->id)->where('status','!=','Done')->where('status','!=','Cancel')->first();
        $user->update([
            'order_id' => $order->id,
        ]);
        DB::table('user_foods')->where('user_id', $user->id)->where('order_id', null)->update(['order_id' => $order->id]);
        return redirect()->back();
    }

}

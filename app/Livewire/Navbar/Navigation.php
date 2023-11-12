<?php

namespace App\Livewire\Navbar;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\Attributes\On;
use Illuminate\Support\Facades\Auth;



class Navigation extends Component
{
    public $cart;

    #[On('counts-update')]
    public function render()
    {
        if (Auth::check()) {
            $total = 0;
            $counts = DB::table('user_foods')->where('user_id', Auth()->user()->id)->get();
            foreach($counts as $count){
                $total = $total + $count->count;
            }
            $this->cart = $total;
        }
        return view('livewire.navbar.navigation');
    }
}

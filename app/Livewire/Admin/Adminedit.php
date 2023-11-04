<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Foods;

class Adminedit extends Component
{
    public $product;

    public function setCarousel1($foodId = null){
        // dd($foodId);
        if (Foods::where('carouselId', 1)->exists()) {
            $old = Foods::where('carouselId', 1)->first();
            $old->carouselId = null;
            $old->save();
            // dd($old->id);
            $new = Foods::where('id', $foodId)->first();
            $new->carouselId = 1;
            $new->save();
            // dd($new->id);
        }else{
            $new = Foods::where('id', $foodId)->first();
            $new->carouselId = 1;
            $new->save();
        }
    }
    public function setCarousel2($foodId = null){
        if (Foods::where('carouselId', 2)->exists()) {
            $old = Foods::where('carouselId', 2)->first();
            $old->carouselId = null;
            $old->save();
            $new = Foods::where('id', $foodId)->first();
            $new->carouselId = 2;
            $new->save();
        }else{
            $new = Foods::where('id', $foodId)->first();
            $new->carouselId = 2;
            $new->save();
        }
    }


    public function render()
    {
        $this->product = Foods::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.adminedit');
    }
}

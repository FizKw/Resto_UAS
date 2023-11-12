<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Foods;

class Adminedit extends Component
{
    public $product;

    public function setCarousel1($foodId = null){
        if (Foods::where('carouselId', 1)->exists()) {
            Foods::where('carouselId', 1)->update(['carouselId'=> null]);
        }
        
        Foods::where('id', $foodId)->update(['carouselId'=> 1]);
    }
    public function setCarousel2($foodId = null){
        if (Foods::where('carouselId', 2)->exists()) {
            Foods::where('carouselId', 2)->update(['carouselId'=> null]);;
        }
        Foods::where('id', $foodId)->update(['carouselId'=> 2]);;
    }


    public function render()
    {
        $this->product = Foods::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.adminedit');
    }
}

<?php

namespace App\Livewire\Carousel;

use App\Models\Foods;
use Livewire\Component;

class Carousel extends Component
{
    public $item1;
    public $item2;




    public function render()
    {
        $this->item1 = Foods::where('carouselId', 1)->first();
        $this->item2 = Foods::where('carouselId', 2)->first();
        return view('livewire.carousel.carousel');
    }
}

<?php

namespace App\Livewire\Admin;

use Livewire\Component;
use App\Models\Foods;

class Adminedit extends Component
{
    public $product;

    public function render()
    {
        $this->product = Foods::orderBy('created_at', 'DESC')->get();
        return view('livewire.admin.adminedit');
    }
}

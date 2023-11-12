<?php

namespace App\Livewire\Order;

use App\Models\Orders;
use Illuminate\Support\Facades\Auth;
use Livewire\Component;

class OrderStatus extends Component
{
    public $orderNumber;

    public function render()
    {
        $this->orderNumber = Orders::where('id', Auth()->user()->order_id)->first();
        return view('livewire.order.order-status');
    }
}

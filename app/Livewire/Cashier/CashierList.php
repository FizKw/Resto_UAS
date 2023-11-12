<?php

namespace App\Livewire\Cashier;

use App\Models\Foods;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On;

class CashierList extends Component
{
    public $status = "Process";
    public Orders $selectedOrder;
    public $cartDetail;


    public function filterStatus($status = null){
        $this->status = $status;

    }

    public function orderdetail(Orders $order){
        $this->selectedOrder = $order;
        $this->dispatch('update-detail');
        $this->dispatch('open-detail', name:'order-detail');
    }

    public function nextProcess(){
        if ($this->selectedOrder->status == 'Waiting') {
            $this->selectedOrder->update(['status' => 'Process']);
        }else if($this->selectedOrder->status == 'Process'){
            $this->selectedOrder->update(['status' => 'Ready']);
        }else if($this->selectedOrder->status == 'Ready'){
            $this->selectedOrder->update(['status' => 'Done']);
        }
        $this->dispatch('update-detail');
    }

    #[On('update-detail')]
    public function render()
    {
        if (isset($this->selectedOrder)) {
            $carts = User::find($this->selectedOrder->user_id)->foodOrder()->where('order_id', $this->selectedOrder->id)->get();
            $user = User::find($this->selectedOrder->user_id);
        }else{
            $carts = null;
            $user = null;
        }

        $orders = Orders::orderBy('created_at', 'ASC')
            ->when($this->status, function($query, $status){
                return $query->where('status', $status);
            })
            ->get();
        return view('livewire.cashier.cashier-list',[
            'carts' => $carts,
            'orders' => $orders,
            'user' =>$user,
        ]);
    }
}

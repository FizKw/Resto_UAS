<?php

namespace App\Livewire\Cashier;

use App\Models\Foods;
use App\Models\Orders;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Livewire\Component;
use Livewire\Attributes\On;
use Livewire\Attributes\Rule;

class CashierList extends Component
{
    public $status = "Waiting";
    public Orders $selectedOrder;
    public $cartDetail;

    #[Rule('required')]
    public $cancelOption = "";

    public $cashierNote = "";



    public function filterStatus($status = null){
        $this->status = $status;
    }

    public function orderdetail(Orders $order){
        $this->selectedOrder = $order;
        $this->dispatch('update-detail');
        $this->dispatch('open-detail', name:'order-detail');
    }

    public function orderCancel(){
        $this->selectedOrder->update([
            'status' => 'Cancel',
            'cashier_note' => $this->cancelOption,
        ]);
        $this->dispatch('update-detail');
        $this->dispatch('close-detail');
    }

    public function orderAccept(){
        $this->selectedOrder->update(['status' => 'Process']);
        $this->dispatch('update-detail');
        $this->dispatch('close-detail');
    }

    public function verivication(){
        $this->selectedOrder->update(['is_paid' => 1]);
        $this->dispatch('update-detail');

    }

    public function orderReady(){
        $this->selectedOrder->update([
            'status' => 'Ready',
            'cashier_note' => $this->cashierNote,
        ]);
        $this->dispatch('update-detail');
        $this->dispatch('close-detail');
    }

    public function orderDone(){
        $this->selectedOrder->update(['status' => 'Done']);
        User::find($this->selectedOrder->user_id)->update(['order_id' => null]);
        $this->dispatch('update-detail');
        $this->dispatch('close-detail');

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

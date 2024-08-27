<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;
use Livewire\WithPagination;

class ShowOrders extends Component
{

    use WithPagination;

    protected $listeners = ['render'];
    public $order;


    public function render()
    {
        $orders = Order::orderBy('date', 'asc')->paginate();
        return view('livewire.orders.show-orders', compact('orders'));
    }


}

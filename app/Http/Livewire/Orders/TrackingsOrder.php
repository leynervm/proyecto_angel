<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class TrackingsOrder extends Component
{

    public $order;

    public function mount(Order $order)
    {
        $this->order = $order;
    }

    public function render()
    {
        return view('livewire.orders.trackings-order');
    }
}

<?php

namespace App\Http\Livewire\Orders;

use App\Models\Estado;
use App\Models\Order;
use App\Models\Tracking;
use Carbon\Carbon;
use Livewire\Component;

class EditOrder extends Component
{

    public $order;

    protected function rules()
    {
        return [
            'order.document' => [
                'required',
                'numeric',
            ],
            'order.name' => [
                'required',
                'string',
            ],
            'order.fechaentrega' => [
                'required',
                'date'
            ],
        ];
    }

    public function mount(Order $order)
    {
        $this->order = $order;
        $this->order->fechaentrega = Carbon::parse($this->order->fechaentrega)->format('Y-m-d');
    }


    public function render()
    {
        $estados = Estado::orderBy('name', 'asc')->get();
        return view('livewire.orders.edit-order', compact('estados'));
    }

    public function update()
    {
        $this->order->document = trim($this->order->document);
        $this->validate();
        $this->order->save();
    }
}

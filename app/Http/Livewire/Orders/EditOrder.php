<?php

namespace App\Http\Livewire\Orders;

use App\Models\Estado;
use App\Models\Order;
use App\Models\Tracking;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditOrder extends Component
{

    public $order;
    public $estado_id;

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

    public function savetracking()
    {
        $this->validate([
            'estado_id' => [
                'required',
                'integer',
                'min:1',
                Rule::unique('trackings', 'estado_id')->where('order_id', $this->order->id),
                'exists:estados,id'
            ]
        ]);

        $this->order->trackings()->create([
            'date' => now('America/Lima'),
            'estado_id' => $this->estado_id,
        ]);
        $this->order->refresh();
        $this->dispatchBrowserEvent('created');
        $this->reset(['estado_id']);
        $this->resetValidation();
    }

    public function deletetracking(Tracking $tracking)
    {
        $tracking->delete();
        $this->order->refresh();
        $this->dispatchBrowserEvent('deleted');
    }
}

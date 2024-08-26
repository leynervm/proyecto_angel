<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use Livewire\Component;

class CreateOrder extends Component
{

    public $open = false;
    public $document, $name, $amount, $fechaentrega;

    public $service_id, $price, $cantidad = 1, $detalle;
    public $itemservices = [];

    protected function rules()
    {
        return [
            'document' => [
                'required',
                'numeric',

            ],
            'name' => [
                'required',
                'string',
            ],
            'amount' => [
                'required',
                'numeric',
                'gt:0',
                'decimal:0,2'
            ],
            'fechaentrega' => [
                'required',
                'date'
            ],
            'itemservices' => [
                'required',
                'array',
                'min:1'
            ]
        ];
    }

    public function render()
    {
        return view('livewire.orders.create-order');
    }

    public function updatingOpen()
    {
        if (!$this->open) {
            $this->reset();
            $this->resetValidation();
        }
    }

    public function addservice()
    {
        $dataItem = $this->validate([
            'cantidad' => ['required', 'numeric', 'gt:0'],
            'detalle' => ['required'],
            'price' => ['required', 'numeric', 'gt:0', 'decimal:0,2'],
            'service_id' => ['required', 'integer', 'min:1', 'exists:services,id']
        ]);

        // $collect = collect($this->itemservices ?? []);
        // $find = $collect->firstWhere('service_id', $this->service_id);
        // if ($find) {
        //     $this->addError('service_id', 'El servicio ya se encuentra agregado en la orden.');
        // }

        $this->itemservices[] = $dataItem;
        $this->reset(['cantidad', 'detalle', 'price', 'service_id']);
        $this->resetValidation();
    }

    public function save()
    {

        $validateData = $this->validate();
        $order = Order::create($validateData);
    }
}

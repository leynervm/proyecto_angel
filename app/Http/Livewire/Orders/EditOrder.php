<?php

namespace App\Http\Livewire\Orders;

use App\Models\Estado;
use App\Models\Item;
use App\Models\Order;
use App\Models\Payment;
use App\Models\Tracking;
use Carbon\Carbon;
use Illuminate\Validation\Rule;
use Livewire\Component;

class EditOrder extends Component
{

    public $order;
    public $estado_id;
    public $methodpay, $amount;

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
        $this->amount = number_format($order->amount - $order->payments->sum('amount'), 2, '.', '');
    }


    public function render()
    {
        $estados = Estado::orderBy('name', 'asc')->get();
        $methodpayments = response()->json([
            ['value' => "EFECTIVO"],
            ['value' => "YAPE"],
            ['value' => "PLIN"],
            ['value' => "DEPÓSITO"],
            ['value' => "TRANSFERENCIA"],
        ])->getData();
        $typepayments = response()->json([
            ['value' => "INGRESO"],
            ['value' => "EGRESO"],
        ])->getData();
        return view('livewire.orders.edit-order', compact('estados', 'methodpayments', 'typepayments'));
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
        $this->order->fechaentrega = Carbon::parse($this->order->fechaentrega)->format('Y-m-d');
        $this->dispatchBrowserEvent('created');
        $this->reset(['estado_id']);
        $this->resetValidation();
    }

    public function deletetracking(Tracking $tracking)
    {
        $tracking->delete();
        $this->order->refresh();
        $this->order->fechaentrega = Carbon::parse($this->order->fechaentrega)->format('Y-m-d');
        $this->dispatchBrowserEvent('deleted');
    }

    public function deleteservice(Item $item)
    {
        $item->delete();
        $this->order->amount = $this->order->items()->sum('amount') ?? 0;
        $this->order->save();
        $this->order->refresh();
        $this->order->fechaentrega = Carbon::parse($this->order->fechaentrega)->format('Y-m-d');
        $this->dispatchBrowserEvent('deleted');
    }

    public function savepayment()
    {
        $this->validate([
            'amount' => ['required', 'numeric', 'gt:0', 'max:' . $this->order->amount],
            'methodpay' => ['required', 'string'],
        ]);

        if ($this->amount + $this->order->payments->sum('amount') > $this->order->amount) {
            $this->dispatchBrowserEvent('alert', [
                'title' => 'EL MONTO A PAGAR SOBREPASA EL TOTAL DEL PEDIDO',
                'text' => null,
                'icon' => 'info'
            ]);
            return false;
        }

        $this->order->payments()->create([
            'amount' => $this->amount,
            'method' => $this->methodpay,
            'type' => Payment::INGRESO,
            'user_id' => auth()->user()->id
        ]);
        $this->reset(['amount', 'methodpay']);
        $this->resetValidation();
        $this->order->refresh();
        $this->dispatchBrowserEvent('toast', ['title' => 'PAGO REGISTRADO CORRECTAMENTE', 'icon' => 'success']);
    }

    public function deletepayment(Payment $payment)
    {
        $payment->delete();
        $this->dispatchBrowserEvent('toast', ['title' => 'PAGO ELIMINADO CORRECTAMENTE', 'icon' => 'success']);
        $this->order->refresh();
    }

    public function hydrate() {}
}

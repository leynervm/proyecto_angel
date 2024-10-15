<?php

namespace App\Http\Livewire\Orders;

use App\Models\Order;
use App\Models\Service;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;
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

        $this->validate([
            'cantidad' => ['required', 'numeric', 'gt:0'],
            'detalle' => ['required'],
            'price' => ['required', 'numeric', 'gt:0', 'decimal:0,2'],
            'service_id' => ['required', 'integer', 'min:1', 'exists:services,id']
        ]);

        $service = Service::find($this->service_id);
        $dataItem = [
            'cantidad' => $this->cantidad,
            'name' => $service->name,
            'detalle' => trim(mb_strtoupper($this->detalle, "UTF-8")),
            'price' => $this->price,
            'importe' => $this->price * $this->cantidad,
            'service_id' => $this->service_id
        ];

        // $collect = collect($this->itemservices ?? []);
        // $find = $collect->firstWhere('service_id', $this->service_id);
        // if ($find) {
        //     $this->addError('service_id', 'El servicio ya se encuentra agregado en la orden.');
        // }

        $this->itemservices[] = $dataItem;
        $this->reset(['cantidad', 'detalle', 'price', 'service_id']);
        $this->resetValidation();
        $this->amount = collect($this->itemservices)->sum('importe') ?? 0;
    }

    public function save()
    {

        $this->document = trim($this->document);
        $validateData = $this->validate();
        DB::beginTransaction();

        try {
            $order = Order::create([
                'purchase' => Str::random(12),
                'date' => now('America/Lima'),
                'document' => $this->document,
                'name' => trim($this->name),
                'fechaentrega' => $this->fechaentrega,
                'amount' => $this->amount,
            ]);
            foreach ($this->itemservices as $item) {
                $order->items()->create([
                    'cantidad' => $item['cantidad'],
                    'price' => $item['price'],
                    'amount' => $item['importe'],
                    'detalle' => $item['detalle'],
                    'service_id' => $item['service_id'],
                ]);
            }

            DB::commit();
            $this->emit('render');
            $this->dispatchBrowserEvent('created');
            $this->resetValidation();
            $this->reset();
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

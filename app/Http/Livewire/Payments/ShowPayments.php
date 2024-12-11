<?php

namespace App\Http\Livewire\Payments;

use App\Models\Payment;
use Livewire\Component;
use Livewire\WithPagination;

class ShowPayments extends Component
{

    use WithPagination;

    public $date = '', $methodpay = '';

    protected $queryString = [
        'date' => [
            'except' => '',
            'as' => 'fecha'
        ],
        'methodpay' => [
            'except' => '',
            'as' => 'forma-pago'
        ]
    ];

    public function render()
    {
        $payments = Payment::with(['order', 'user']);

        if ($this->date != '') {
            $payments->whereDate('created_at', $this->date);
        }
        if ($this->methodpay != '') {
            $payments->where('method', $this->methodpay);
        }

        $payments = $payments->orderByDesc('created_at')->paginate();
        $methodpayments = Payment::select('method')->groupBy('method')->get();

        return view('livewire.payments.show-payments', compact('payments', 'methodpayments'));
    }

    public function updatedDate()
    {
        $this->resetPage();
    }

    public function updatedMethod()
    {
        $this->resetPage();
    }
}

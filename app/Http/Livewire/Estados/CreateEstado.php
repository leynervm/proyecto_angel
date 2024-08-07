<?php

namespace App\Http\Livewire\Estados;

use App\Models\Estado;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;
use Livewire\Component;

class CreateEstado extends Component
{

    public $open, $finish = false;
    public $name;

    protected function rules()
    {
        return [
            'name' => [
                'required', 'string', 'unique:estados,name'
            ],
            'finish' => [
                'required', 'boolean',
                Rule::unique('estados', 'finish')->where('finish', Estado::FINISH)
            ]
        ];
    }

    public function render()
    {
        return view('livewire.estados.create-estado');
    }

    public function updatingOpen()
    {
        if ($this->open == false) {
            $this->resetValidation();
            $this->reset();
        }
    }

    public function save()
    {
        $this->name = mb_strtoupper(trim($this->name), "UTF-8");
        $this->finish = $this->finish ? 1 : 0;
        $this->validate();

        DB::beginTransaction();
        try {
            $estado = Estado::create([
                'name' => $this->name,
                'finish' => $this->finish,
            ]);
            DB::commit();
            $this->emitTo('estados.show-estados', 'render');
            $this->reset();
            $this->resetValidation();
            $this->dispatchBrowserEvent('toast', ['title' => 'REGISTRADO CORRECTAMENTE', 'icon' => 'success']);
        } catch (\Exception $e) {
            DB::rollBack();
            throw $e;
        } catch (\Throwable $e) {
            DB::rollBack();
            throw $e;
        }
    }
}

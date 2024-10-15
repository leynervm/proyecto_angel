<?php

namespace App\Http\Livewire\Estados;

use App\Models\Estado;
use Illuminate\Validation\Rule;
use Livewire\Component;
use Livewire\WithPagination;

class ShowEstados extends Component
{

    use WithPagination;

    public $open = false;
    public $estado;

    protected $listeners = ['render'];

    protected function rules()
    {
        return [
            'estado.name' => [
                'required',
                'string',
                'unique:estados,name,' . $this->estado->id
            ],
            'estado.finish' => [
                'required',
                'boolean',
                Rule::unique('estados', 'finish')
                    ->where('finish', Estado::FINISH)
                    ->ignore($this->estado->id)
            ]
        ];
    }

    public function mount()
    {
        $this->estado = new Estado();
    }

    public function render()
    {
        $estados = Estado::orderBy('name', 'asc')->paginate();
        return view('livewire.estados.show-estados', compact('estados'));
    }

    public function edit(Estado $estado)
    {
        $this->resetValidation();
        $this->resetExcept(['estado']);
        $this->estado = $estado;
        $this->estado->finish = $estado->isFinish() ? true : false;
        $this->open = true;
    }

    public function update()
    {
        $this->estado->finish = $this->estado->finish ? 1 : 0;
        $this->validate();
        $this->estado->save();
        $this->resetValidation();
        $this->resetExcept(['estado']);
    }

    public function delete(Estado $estado)
    {
        if ($estado->trackings()->exists()) {
            $this->dispatchBrowserEvent('alert', [
                'title' => 'NO SE PUEDE ELIMINAR ESTADO, YA QUE SE ENCUENTRA VINCULADO A LAS ORDENES',
                'text' => null,
                'icon' => 'info'
            ]);
            return false;
        }

        $estado->delete();
        $this->dispatchBrowserEvent('toast', ['title' => 'ELIMINADO CORRECTAMENTE', 'icon' => 'success']);
    }
}

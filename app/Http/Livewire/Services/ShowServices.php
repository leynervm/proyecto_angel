<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Intervention\Image\ImageManagerStatic as Image;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class ShowServices extends Component
{
    use WithFileUploads, WithPagination;

    protected $listeners = ['render'];

    public $service, $image;
    public $open = false;

    protected function rules()
    {
        return [
            'service.name' => [
                'required', 'string', 'unique:services,name,' . $this->service->id
            ],
            'service.pricereferencial' => [
                'required', 'numeric', 'gt:0', 'decimal:0,2'
            ],
            'image' => [
                'nullable', 'file', 'mimes:jpeg,png,gif', 'max:5120'
            ],
        ];
    }

    public function mount()
    {
        $this->service = new Service();
    }

    public function render()
    {
        $services = Service::orderBy('name', 'asc')->paginate();
        return view('livewire.services.show-services', compact('services'));
    }

    public function edit(Service $service)
    {
        $this->resetValidation();
        $this->resetExcept(['service']);
        $this->service = $service;
        $this->open = true;
    }

    public function update()
    {
        $this->validate();

        $imageURL = null;
        if ($this->image) {
            if (!Storage::directoryExists('images/')) {
                Storage::makeDirectory('images/');
            }

            $compressedImage = Image::make($this->image->getRealPath())
                ->orientate()->encode('jpg', 30);

            $imageURL = uniqid('service_') . '.' . $this->image->getClientOriginalExtension();
            $compressedImage->save(public_path('storage/images/' . $imageURL));
            if ($compressedImage->filesize() > 1048576) { //1MB
                $compressedImage->destroy();
                $compressedImage->delete();
                $this->addError('image', 'La imagen excede el tamaño máximo permitido.');
                return false;
            }

            if ($this->service->image) {
                Storage::delete('images/' . $this->service->image);
            }

            $this->service->image = $imageURL;
        }

        $this->service->save();
        $this->resetValidation();
        $this->resetExcept(['service']);
    }

    public function delete(Service $service)
    {
        $service->delete();
        $this->dispatchBrowserEvent('toast', ['title' => 'ELIMINADO CORRECTAMENTE', 'icon' => 'success']);
    }

    public function clearImage()
    {
        $this->reset(['image']);
        $this->resetValidation();
    }

    public function updatedImage($file)
    {
        try {
            $url = $file->temporaryUrl();
        } catch (\Exception $e) {
            $this->reset(['image']);
            $this->addError('image', $e->getMessage());
            return;
        }
    }
}

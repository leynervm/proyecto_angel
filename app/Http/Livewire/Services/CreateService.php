<?php

namespace App\Http\Livewire\Services;

use App\Models\Service;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Livewire\Component;
use Livewire\WithFileUploads;
use Intervention\Image\ImageManagerStatic as Image;

class CreateService extends Component
{

    use WithFileUploads;

    public $open = false;
    public $name, $price, $image;

    protected function rules()
    {
        return [
            'name' => [
                'required', 'string', 'unique:services,name'
            ],
            'price' => [
                'required', 'numeric', 'gt:0', 'decimal:0,2'
            ],
            'image' => [
                'required', 'file', 'mimes:jpeg,png,gif', 'max:5120'
            ],
        ];
    }

    public function render()
    {
        return view('livewire.services.create-service');
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
            // dd($imageURL);
            if ($compressedImage->filesize() > 1048576) { //1MB
                $compressedImage->destroy();
                $compressedImage->delete();
                $this->addError('image', 'La imagen excede el tamaño máximo permitido.');
                return false;
            }
        }

        DB::beginTransaction();
        try {
            $service = Service::create([
                'name' => $this->name,
                'pricereferencial' => $this->price,
                'image' => $imageURL,
            ]);
            DB::commit();
            $this->emitTo('services.show-services', 'render');
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

<div>
    <x-button wire:click="$set('open', true)">NUEVO ESTADO TRACKING</x-button>

    <x-dialog-modal wire:model="open" maxWidth="2xl" footerAlign="justify-end">
        <x-slot name="title">
            <h1 class="font-semibold text-[10px]">REGISTRAR SERVICIO</h1>
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="save" class="w-full">
                <div class="mt-2">
                    <x-label value="Nombre / Descripción :" />
                    <x-input class="block w-full" wire:model.defer="name"
                        placeholder="Ingrese nombre / descripción..." />
                    <x-input-error for="name" />
                </div>

                <div class="mt-2">
                    <x-toggle-input for="default" text="DEFINIR COMO FINAL DEL PROCESO ">
                        <input type="checkbox" id="default" class="sr-only" wire:model.defer="finish">
                    </x-toggle-input>
                    <x-input-error for="finish" />
                </div>

                <div class="w-full mt-2 flex pt-4 justify-end">
                    <x-button type="submit" wire:loading.attr="disabled">
                        {{ __('Save') }}</x-button>
                </div>
            </form>
        </x-slot>
    </x-dialog-modal>
</div>

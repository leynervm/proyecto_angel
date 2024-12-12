<div x-data="loadimage()">
    <x-button wire:click="$set('open', true)" @click="image=null">NUEVO SERVICIO</x-button>

    <x-dialog-modal wire:model="open" maxWidth="2xl" footerAlign="justify-end">
        <x-slot name="title">
            <h1 class="font-semibold text-[10px]">REGISTRAR SERVICIO</h1>
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="save" class="w-full">

                <div class="relative">
                    <div class="w-full h-60 relative mb-2 shadow-md shadow-shadowminicard rounded-xl overflow-hidden">
                        <template x-if="image">
                            <img class="object-scale-down block w-full h-full" :src="image" />
                        </template>
                        <template x-if="!image">
                            <span class="block w-full h-full !my-0">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round" class="block w-full h-full">
                                    <line x1="2" x2="22" y1="2" y2="22" />
                                    <path d="M10.41 10.41a2 2 0 1 1-2.83-2.83" />
                                    <line x1="13.5" x2="6" y1="13.5" y2="21" />
                                    <line x1="18" x2="21" y1="12" y2="15" />
                                    <path
                                        d="M3.59 3.59A1.99 1.99 0 0 0 3 5v14a2 2 0 0 0 2 2h14c.55 0 1.052-.22 1.41-.59" />
                                    <path d="M21 15V5a2 2 0 0 0-2-2H9" />
                                </svg>
                            </span>
                        </template>
                    </div>

                    <div class="w-full mt-2 flex gap-1 flex-wrap justify-center items-center">
                        <template x-if="image">
                            <x-button class="inline-flex" wire:loading.attr="disabled" @click="reset">
                                LIMPIAR</x-button>
                        </template>

                        <x-input-file for="image" titulo="SELECCIONAR IMÁGEN"
                            wire:loading.class="disabled:opacity-25">
                            <input type="file" class="hidden" wire:model="image" id="image"
                                accept="image/jpg,image/jpeg,image/png" @change="loadlogo" />
                        </x-input-file>
                    </div>
                    <x-input-error for="image" class="text-center" />
                </div>

                <div class="mt-2">
                    <x-label value="Nombre / Descripción :" />
                    <x-input class="block w-full" wire:model.defer="name"
                        placeholder="Ingrese nombre / descripción..." />
                    <x-input-error for="name" />
                </div>

                <div class="mt-2">
                    <x-label value="Precio :" />
                    <x-input class="block w-full" wire:model.defer="price" placeholder="0.00" />
                    <x-input-error for="price" />
                </div>

                <div class="w-full mt-2 flex pt-4 justify-end">
                    <x-button type="submit" wire:loading.attr="disabled">
                        {{ __('Save') }}</x-button>
                </div>
            </form>
        </x-slot>
    </x-dialog-modal>

    <x-loading wire:loading.flex />

    <script>
        function loadimage() {
            return {
                image: null,
                loadlogo() {
                    let file = document.getElementById('image').files[0];
                    var reader = new FileReader();
                    reader.onload = (e) => this.image = e.target.result;
                    reader.readAsDataURL(file);
                },
                reset() {
                    this.image = null;
                    @this.clearImage();
                },

            }
        }
    </script>
</div>

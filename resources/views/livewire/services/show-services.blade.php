<div x-data="editservice()">
    @if ($services->hasPages())
        <div class="w-full">
            {{ $services->links() }}
        </div>
    @endif

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="p-2 font-semibold text-center">IMÁGEN</th>
                <th class="p-2 font-semibold">DESCRIPCIÓN DEL SERVICIO</th>
                <th class="p-2 font-semibold text-center">COSTO</th>
                <th class="p-2 font-semibold text-center">OPCIONES</th>
            </tr>
        </x-slot>

        @foreach ($services as $item)
            <tr>
                <td class="p-2">
                    <div class="w-20 h-20 block shadow rounded-lg overflow-hidden">
                        <img class="w-full h-full block object-scale-down overflow-hidden" src="{{ $item->getImageURL() }}" alt="">
                    </div>
                </td>
                <td class="p-2">{{ $item->name }}</td>
                <td class="p-2 text-center">{{ $item->pricereferencial }}</td>
                <td class="align-middle text-center">
                    <x-button-edit wire:click="edit({{ $item->id }})" wire:key="editservice_{{ $item->id }}"
                        @click="image=null" />
                    <x-button-delete wire:key="delservice_{{ $item->id }}"
                        @click="confirmDelete('{{ $item->id }}')" />
                </td>
            </tr>
        @endforeach
    </x-table>

    <x-dialog-modal wire:model="open" maxWidth="2xl" footerAlign="justify-end">
        <x-slot name="title">
            <h1 class="font-semibold text-[10px]">ACTUALIZAR SERVICIO</h1>
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="update" class="w-full">

                <div class="w-full h-60 relative mb-2 shadow-md shadow-shadowminicard rounded-xl overflow-hidden">
                    <template x-if="image">
                        <img class="object-scale-down block w-full h-full" :src="image" />
                    </template>
                    <template x-if="!image">
                        @if ($service->image)
                            <img class="object-scale-down block w-full h-full" src="{{ $service->getImageURL() }}" />
                        @else
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
                        @endif
                    </template>
                </div>

                <div class="w-full flex flex-wrap gap-2 justify-center">
                    <template x-if="image">
                        <x-button class="inline-flex" wire:loading.attr="disabled" @click="reset">
                            LIMPIAR</x-button>
                    </template>

                    <x-input-file for="editimage" titulo="SELECCIONAR IMAGEN" wire:loading.class="disabled:opacity-25">
                        <input type="file" class="hidden" wire:model="image" id="editimage"
                            accept="image/jpg,image/jpeg,image/png" @change="loadlogo" />
                    </x-input-file>
                </div>
                <x-input-error for="image" class="text-center" />


                <div class="mt-2">
                    <x-label value="Nombre / Descripción :" />
                    <x-input class="block w-full" wire:model.defer="service.name"
                        placeholder="Ingrese nombre / descripción..." />
                    <x-input-error for="service.name" />
                </div>

                <div class="mt-2">
                    <x-label value="Precio :" />
                    <x-input class="block w-full" wire:model.defer="service.pricereferencial" placeholder="0.00" />
                    <x-input-error for="service.pricereferencial" />
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
        function editservice() {
            return {
                image: null,
                loadlogo() {
                    let file = document.getElementById('editimage').files[0];
                    var reader = new FileReader();
                    reader.onload = (e) => this.image = e.target.result;
                    reader.readAsDataURL(file);
                },
                reset() {
                    this.image = null;
                    @this.clearImage();
                },
                confirmDelete(service_id) {
                    swal.fire({
                        title: 'ELIMINAR SERVICIO SELECCIONADO ? ',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3B86F2',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.$wire.call('delete', service_id).then(() => {});
                        }
                    })
                }
            }
        }
    </script>
</div>

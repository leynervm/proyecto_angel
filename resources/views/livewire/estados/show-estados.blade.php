<div>
    @if ($estados->hasPages())
        <div class="w-full">
            {{ $estados->links() }}
        </div>
    @endif

    <div class="w-full flex flex-wrap gap-2" x-data="editestado()">
        @foreach ($estados as $item)
            <div class="shadow w-32 h-32 p-3 rounded-lg flex flex-col justify-between">
                <div class="w-full h-full flex flex-col items-center justify-center">
                    <h1 class="text-[10px] text-center">{{ $item->name }}</h1>
                    @if ($item->isFinish())
                        <div class="w-full">
                            <small class="leading-3 p-1 rounded-md text-[10px] bg-blue-500 text-white">FINALIZA
                                PROCESO</small>
                        </div>
                    @endif
                </div>
                <div class="w-full mt-2 text-end">
                    <x-button-edit wire:click="edit({{ $item->id }})" wire:key="editestd_{{ $item->id }}" />
                    <x-button-delete wire:key="delestd_{{ $item->id }}"
                        @click="confirmDelete('{{ $item->id }}')" />
                </div>
            </div>
        @endforeach
    </div>

    <x-dialog-modal wire:model="open" maxWidth="2xl" footerAlign="justify-end">
        <x-slot name="title">
            <h1 class="font-semibold text-[10px]">ACTUALIZAR ESTADO</h1>
        </x-slot>

        <x-slot name="content">
            <form wire:submit.prevent="update" class="w-full">
                <div class="mt-2">
                    <x-label value="Nombre / Descripción :" />
                    <x-input class="block w-full" wire:model.defer="estado.name"
                        placeholder="Ingrese nombre / descripción..." />
                    <x-input-error for="estado.name" />
                </div>

                <div class="mt-2">
                    <x-toggle-input for="editdefault" text="DEFINIR COMO FINAL DEL PROCESO ">
                        <input type="checkbox" id="editdefault" class="sr-only" wire:model.defer="estado.finish">
                    </x-toggle-input>
                    <x-input-error for="estado.finish" />
                </div>

                <div class="w-full mt-2 flex pt-4 justify-end">
                    <x-button type="submit" wire:loading.attr="disabled">
                        {{ __('Save') }}</x-button>
                </div>
            </form>
        </x-slot>
    </x-dialog-modal>

    <script>
        function editestado() {
            return {
                confirmDelete(estado_id) {
                    swal.fire({
                        title: 'ELIMINAR ESTADO SELECCIONADO ? ',
                        icon: 'question',
                        showCancelButton: true,
                        confirmButtonColor: '#3B86F2',
                        cancelButtonColor: '#d33',
                        confirmButtonText: 'Confirmar',
                        cancelButtonText: 'Cancelar'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            this.$wire.call('delete', estado_id).then(() => {});
                        }
                    })
                }
            }
        }
    </script>
</div>

<div>
    <form wire:submit.prevent="update" class="w-full p-3 shadow rounded-xl border bg-white">
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
            <div class="">
                <x-label value="ORDEN :" />
                <p class="block w-full p-2.5 text-xs border rounded-lg shadow-sm border-gray-300">N°-{{ $order->id }}
                </p>
            </div>
            <div class="">
                <x-label value="DOCUMENTO CLIENTE :" />
                <p class="block w-full p-2.5 text-xs border rounded-lg shadow-sm border-gray-300">{{ $order->date }}</p>
            </div>
            <div class="">
                <x-label value="TOTAL A PAGAR :" />
                <p class="block w-full p-2.5 text-xs border rounded-lg shadow-sm border-gray-300">
                    {{ number_format($order->amount, 2, '.', ', ') }}</p>
            </div>
        </div>
        <div class="w-full grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
            <div class="">
                <x-label value="DOCUMENTO CLIENTE :" />
                <x-input class="block w-full" wire:model.defer="order.document" maxlength="11" />
                <x-input-error for="order.document" />
            </div>
            <div class="lg:col-span-2">
                <x-label value="NOMBRES CLIENTE :" />
                <x-input class="block w-full" wire:model.defer="order.name" />
                <x-input-error for="order.name" />
            </div>
            <div class="">
                <x-label value="FECHA ENTREGA SOLICITADA:" />
                <x-input class="block w-full" wire:model.defer="order.fechaentrega" type="date" />
                <x-input-error for="order.fechaentrega" />
            </div>
        </div>
        <div class="w-full mt-2 flex pt-4 justify-end">
            <x-button type="submit" wire:loading.attr="disabled">
                {{ __('Save') }}</x-button>
        </div>
    </form>

    <div class="w-full flex flex-col gap-1 mt-5">
        @foreach ($order->items as $item)
            <div class="w-full rounded-xl p-2 text-xs shadow bg-white">
                <h1 class="w-full text-blue-700 text-sm">{{ $item->service->name }}</h1>
                <p class="text-xs text-neutral-500">{{ $item->detalle }}</p>
                <div class="w-full grid grid-cols-2 text-neutral-900">
                    <div>
                        <span class="font-semibold text-lg">{{ $item->cantidad }} UND</span>
                        <small class=""> \ P.UNIT. :{{ $item->price }}</small>
                    </div>
                    <small class="text-end">IMPORTE :
                        <span
                            class="text-end font-semibold text-xl">{{ number_format($item->importe, 2, '.', ', ') }}</span>
                    </small>
                </div>

                <div class="w-full flex gap-2 justify-end pt-2">
                    <x-button-edit wire:key="editservice_{{ $item->id }}"
                        wire:click="deleteservice({{ $item->id }})" />
                    <x-button-delete wire:key="delservice_{{ $item->id }}"
                        wire:click="deleteservice({{ $item->id }})" />
                </div>
            </div>
        @endforeach
    </div>

    <div class="w-full flex flex-col md:flex-row gap-3 mt-5">
        <form wire:submit.prevent="savetracking" class="w-full md:w-72 p-3 shadow rounded-xl border bg-white">
            <div class="w-full flex flex-col gap-2">
                <div class="">
                    <x-label value="ESTADO TRACKING :" />
                    <select class="w-full block" name="estados" id="estados" wire:model.defer="estado_id">
                        <option value="">SELECCIONAR...</option>
                        @foreach ($estados as $item)
                            <option value="{{ $item->id }}">{{ $item->name }}</option>
                        @endforeach
                    </select>
                </div>
            </div>
            <div class="w-full mt-2 flex pt-4 justify-end">
                <x-button type="submit" wire:loading.attr="disabled">
                    {{ __('Save') }}</x-button>
            </div>
        </form>
        <div class="w-full flex-1 shadow p-3 bg-white rounded-xl border">

        </div>
    </div>
</div>

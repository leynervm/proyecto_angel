<div>
    <div
        class="w-full p-3 shadow rounded-xl border bg-white grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-2">
        <div class="">
            <x-label value="FECHA PAGO:" />
            <x-input class="block w-full" wire:model.lazy="date" type="date" />
            <x-input-error for="date" />
        </div>
        <div class="">
            <x-label value="FORMA DE PAGO:" />
            <select class="w-full block outline-none rounded-lg shadow-sm border border-gray-300" name="methodpay"
                id="methodpay" wire:model.lazy="methodpay">
                <option value="">SELECCIONAR...</option>
                @foreach ($methodpayments as $item)
                    <option value="{{ $item->method }}">{{ $item->method }}</option>
                @endforeach
            </select>
            <x-input-error for="methodpay" />
        </div>
    </div>


    @if ($payments->hasPages())
        <div class="w-full mt-3">
            {{ $payments->links() }}
        </div>
    @endif

    <x-table class="mt-3">
        <x-slot name="header">
            <tr>
                <th class="p-2 font-semibold text-center">FECHA</th>
                <th class="p-2 font-semibold">MONTO</th>
                <th class="p-2 font-semibold text-center">TIPO DE MOVIMIENTO</th>
                <th class="p-2 font-semibold text-center">FORMA DE PAGO</th>
                <th class="p-2 font-semibold text-center">REFERENCIA</th>
                <th class="p-2 font-semibold text-center">USUARIO</th>
            </tr>
        </x-slot>

        @foreach ($payments as $item)
            <tr class="odd:bg-white even:bg-blue-50">
                <td class="p-2.5 text-center uppercase">
                    {{ \Carbon\Carbon::parse($item->created_at)->translatedFormat('l, d \d\e F \d\e\l Y') }} </td>
                <td class="p-2.5 text-center">{{ $item->amount }}</td>
                <td class="p-2.5 text-center">{{ $item->type }}</td>
                <td class="p-2.5 text-center">{{ $item->method }}</td>
                <td class="p-2.5 text-center">#{{ $item->order->purchase }}</td>
                <td class="p-2.5 text-center">{{ $item->user->name }}</td>
            </tr>
        @endforeach
    </x-table>
</div>

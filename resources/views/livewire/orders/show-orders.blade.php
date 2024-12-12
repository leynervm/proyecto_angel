<div>
    @if ($orders->hasPages())
        <div class="w-full">
            {{ $orders->links() }}
        </div>
    @endif

    <x-table>
        <x-slot name="header">
            <tr>
                <th class="p-2 font-semibold text-start">PEDIDO</th>
                <th class="p-2 font-semibold text-start">CLIENTE</th>
                <th class="p-2 font-semibold text-center">FECHA ESTIMADA ENTREGA</th>
                <th class="p-2 font-semibold text-center">TOTAL PAGAR</th>
                <th class="p-2 font-semibold text-center">IR</th>
            </tr>
        </x-slot>

        @foreach ($orders as $item)
            <tr class="odd:bg-white even:bg-blue-50">
                <td class="p-2.5 uppercase">
                    N°-{{ $item->purchase }}
                    <br>
                    {{ \Carbon\Carbon::parse($item->date)->translatedFormat('l, d \d\e F \d\e Y') }} <br>
                    {{ \Carbon\Carbon::parse($item->date)->translatedFormat('h:i A') }}
                </td>
                <td class="p-2.5">
                    {{ $item->name }} <br> {{ $item->document }}
                </td>
                <td class="p-2.5 text-center uppercase">
                    {{ \Carbon\Carbon::parse($item->fechaentrega)->translatedFormat('l, d \d\e F \d\e Y') }}
                </td>
                <td class="p-2.5 text-center">
                    {{ number_format($item->amount, 2, '.', ', ') }}
                </td>
                <td class="p-2.5 text-center">
                    <a href="{{ route('admin.orders.show', $item) }}"
                        class="text-white bg-blue-700 p-2.5 rounded-lg inline-block">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                            stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="block w-4 h-4">
                            <path d="M20.0001 11.9998L4.00012 11.9998" />
                            <path
                                d="M15.0003 17C15.0003 17 20.0002 13.3176 20.0002 12C20.0002 10.6824 15.0002 7 15.0002 7" />
                        </svg>
                    </a>
                </td>
            </tr>
        @endforeach
    </x-table>
</div>

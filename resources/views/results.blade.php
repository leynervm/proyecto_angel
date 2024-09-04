<x-app-layout>
    <section class="py-8 md:py-16">
        <div class="mx-auto max-w-screen-xl px-4 2xl:px-0">
            <h2 class="text-xl font-semibold text-gray-900 ">
                ORDER N°- {{ $order->id }}</h2>

            <div class="mt-6 sm:mt-8 lg:flex lg:gap-8">
                <div
                    class="w-full divide-y divide-gray-200 overflow-hidden rounded-lg border border-gray-200 lg:max-w-xl xl:max-w-2xl">

                    @foreach ($order->items as $item)
                        <div class="space-y-4 p-3">
                            <div class="flex items-center gap-6">
                                <p class="h-14 w-14 shrink-0">
                                    <img class="h-full w-full block object-cover"
                                        src="{{ $item->service->getImageURL() }}" alt="imac image" />
                                </p>

                                <div class="w-full flex-1">
                                    <p class="min-w-0 flex-1 font-medium text-gray-900">
                                        {{ $item->service->name }}</p>
                                    <p class="text-sm font-normal text-gray-500 ">
                                        {{ $item->detalle }}
                                    </p>
                                </div>
                            </div>

                            <div class="flex items-center justify-between gap-4">


                                <div class="flex items-center justify-end gap-4">
                                    <p class="text-base font-normal text-gray-900 ">x{{ $item->cantidad }}</p>

                                    <p class="text-xl font-bold leading-tight text-gray-900 ">S/. {{ $item->amount }}
                                    </p>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="space-y-4 p-3">
                        <dl class="flex items-center justify-between gap-4 pt-2 ">
                            <dt class="text-lg font-bold text-gray-900 ">Total</dt>
                            <dd class="text-2xl font-bold text-gray-900 ">
                                S/. {{ number_format($order->amount, 2, '.', ', ') }}</dd>
                        </dl>
                    </div>
                </div>

                <div class="mt-6 grow sm:mt-8 lg:mt-0">
                    <div class="space-y-6 rounded-lg border border-gray-200 p-3 shadow-sm ">
                        <h3 class="text-xl font-semibold text-neutral-700 ">
                            Historial Orden</h3>

                        <ol class="relative ms-3 border-s border-neutral-300 ">
                            @foreach ($order->trackings as $item)
                                <li class="mb-10 ms-6">
                                    <span
                                        class="absolute -start-3 flex h-6 w-6 items-center justify-center rounded-full ring-8 {{ $item->estado->isFinish() ? 'ring-blue-500 text-blue-500' : 'ring-neutral-500 text-neutral-500' }}">
                                        <svg class="h-4 w-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24" stroke="currentColor"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke-width="2" d="M5 11.917 9.724 16.5 19 7.5" />
                                        </svg>
                                    </span>
                                    <h4
                                        class="mb-0.5 font-semibold {{ $item->estado->isFinish() ? 'text-blue-500' : 'text-neutral-700' }} uppercase">
                                        {{ \Carbon\Carbon::parse($item->date)->translatedFormat('l, d \d\e F \d\e Y h:i A') }}
                                    </h4>
                                    <p class="text-sm {{ $item->estado->isFinish() ? 'text-blue-500' : 'text-neutral-500' }}">{{ $item->estado->name }}</p>
                                </li>
                            @endforeach
                        </ol>

                        <div class="">
                            <a href="{{ route('tracking') }}"
                                class="w-full block border-2 p-2.5 rounded-lg border-blue-500 text-center text-blue-700 hover:bg-blue-700 hover:text-white cursor-pointer transition ease-in-out duration-150">
                                Inicio</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</x-app-layout>

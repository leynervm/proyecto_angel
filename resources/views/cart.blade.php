<x-app-layout>

    <section class="block my-20" data-aos="zoom-in">
        <div class="w-full max-w-6xl px-6 mx-auto flex flex-col justify-center items-center">
            {{-- <h2 class="text-5xl text-center font-semibold text-violet-700">
                Mis productos</h2> --}}
            <div class="w-full">
                <div class="flex flex-col lg:flex-row gap-5">
                    <div class="w-ful lg:w-3/4 bg-white p-5">
                        <div class="flex justify-between border-b pb-8">
                            {{-- <h1 class="font-semibold text-2xl">
                                Shopping Cart</h1> --}}
                            <h2 class="text-5xl text-center font-semibold text-blue-700">
                                Shopping Cart</h2>
                            <h2 class="font-semibold text-2xl">{{ Cart::instance('shopping')->count() }} Items</h2>
                        </div>
                        <div class="flex mt-10 mb-5 text-gray-600 text-sm">
                            <h3 class="font-semibold w-2/5">DETALLE DEL PRODUCTO</h3>
                            <h3 class="font-semibold text-center uppercase w-1/5">
                                CANTIDAD</h3>
                            <h3 class="font-semibold text-center uppercase w-1/5">
                                PRECIO</h3>
                            <h3 class="font-semibold text-center uppercase w-1/5">
                                TOTAL</h3>
                        </div>

                        @foreach (Cart::instance('shopping')->content() as $item)
                            <div class="flex items-center hover:bg-gray-100 px-3 py-5">
                                <div class="flex w-2/5">
                                    <div class="w-24 h-24">
                                        @if ($item->options->image)
                                            <img class="w-full h-full object-cover bg-cover overflow-hidden"
                                                src="{{ $item->options->image }}" alt="">
                                        @else
                                        @endif
                                    </div>
                                    <div class="flex-1 flex flex-col justify-between ml-4 flex-grow">
                                        <span class="font-bold text-sm">{{ $item->name }}</span>
                                        <span class="text-neutral-500 text-xs">CATEGORY</span>
                                        <a href="#"
                                            class="font-semibold hover:text-red-700 text-red-500 text-xs">Remove</a>
                                    </div>
                                </div>
                                <div class="flex justify-center w-1/5">
                                    <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                                        <path
                                            d="M416 208H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h384c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                    </svg>

                                    <input
                                        class="mx-2 border text-center w-16 rounded-xl text-neutral-700 text-sm focus:outline-none focus:ring-0"
                                        type="text" value="{{ $item->qty }}">

                                    <svg class="fill-current text-gray-600 w-3" viewBox="0 0 448 512">
                                        <path
                                            d="M416 208H272V64c0-17.67-14.33-32-32-32h-32c-17.67 0-32 14.33-32 32v144H32c-17.67 0-32 14.33-32 32v32c0 17.67 14.33 32 32 32h144v144c0 17.67 14.33 32 32 32h32c17.67 0 32-14.33 32-32V304h144c17.67 0 32-14.33 32-32v-32c0-17.67-14.33-32-32-32z" />
                                    </svg>
                                </div>
                                <span class="text-center w-1/5 font-semibold text-sm">
                                    S/. {{ $item->price }}</span>
                                <span class="text-center w-1/5 font-semibold text-sm">
                                    S/. {{ $item->price * $item->qty }}</span>
                            </div>
                        @endforeach

                        <a href="{{ route('services') }}" class="flex font-semibold text-indigo-600 text-sm mt-10">
                            <svg class="fill-current mr-2 text-indigo-600 w-4" viewBox="0 0 448 512">
                                <path
                                    d="M134.059 296H436c6.627 0 12-5.373 12-12v-56c0-6.627-5.373-12-12-12H134.059v-46.059c0-21.382-25.851-32.09-40.971-16.971L7.029 239.029c-9.373 9.373-9.373 24.569 0 33.941l86.059 86.059c15.119 15.119 40.971 4.411 40.971-16.971V296z" />
                            </svg>
                            SEGUIR COMPRANDO
                        </a>
                    </div>

                    <div class="w-ful lg:w-1/4 p-5">
                        <h1 class="font-semibold text-2xl border-b pb-8">
                            Resumen Orden</h1>
                        <div class="flex justify-between mt-10 mb-5">
                            <span class="font-semibold text-sm uppercase">Items
                                {{ Cart::instance('shopping')->count() }}</span>
                            <span class="font-semibold text-sm">{{ Cart::instance('shopping')->subtotal() }}</span>
                        </div>

                        <div class="border-t mt-4">
                            <div class="flex font-semibold justify-between py-6 text-sm uppercase">
                                <span>Costo Total</span>
                                <span>{{ Cart::instance('shopping')->subtotal() }}</span>
                            </div>
                            <x-button class="block w-full !p-4 !text-center items-center justify-center text-sm">
                                COTIZAR PEDIDO
                            </x-button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</x-app-layout>

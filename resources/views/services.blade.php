<x-app-layout>

    <section class="block py-5 lg:py-10">
        <div class="w-full max-w-6xl px-6 mx-auto flex flex-col justify-center items-center">
            <h2 class="text-2xl sm:text-3xl lg:text-5xl text-center font-semibold text-blue-700 leading-none">
                {{ __('Popular Services') }}</h2>
            {{-- <p class="mt-4 text-center max-w-96 font-medium text-neutral-500">
                Here are some of the most popular events
                in New York City curated by
                professionals.</p> --}}
        </div>
    </section>

    <section x-data="cart"
        class="w-full max-w-6xl mx-auto grid grid-cols-[repeat(auto-fill,minmax(170px,1fr))] lg:grid-cols-[repeat(auto-fill,minmax(250px,1fr))] gap-1 lg:gap-3 mb-5">

        @foreach ($services as $item)
            <div class="w-full block bg-white shadow-md rounded-xl duration-500 hover:scale-105 hover:shadow-xl">
                <div>
                    <img src="{{ $item->getImageURL() }}" alt="Product"
                        class="h-24 lg:h-64 w-full block object-scale-down rounded-t-xl" />
                    <div class="p-1 sm:p-2 lg:px-4 lg:py-3 w-full">
                        <p class="text-sm lg:text-lg font-bold text-neutral-800 block capitalize text-center">
                            {{ $item->name }}</p>

                        <p class="text-lg font-semibold text-black cursor-auto mb-3 text-center leading-4">
                            <small class="text-[9px] text-neutral-500 italic">PRECIO REGULAR</small>
                            <br>
                            S/. {{ $item->pricereferencial }}
                        </p>
                        {{-- @click="addcart(`{{ route('cart.add') }}`, '{{ $item->id }}')" --}}
                        <a class="w-full inline-flex items-center justify-center text-[10px] sm:text-xs gap-2 bg-green-600 text-white p-2.5 rounded-lg hover:bg-green-700 transition ease duration-150"
                            href="{{ config('services.links.whatsapp') . '?text=Hola, estoy interesado en el servicio: ' . $item->name }}"
                            target="_blank">
                            <span>SOLICITAR VÍA WHATSAPP</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"
                                class="w-4 h-4 sm:w-6 sm:h-6 block text-white" fill="none" stroke="currentColor"
                                stroke-width="1.5" stroke-linejoin="round">
                                <path
                                    d="M12 22C17.5228 22 22 17.5228 22 12C22 6.47715 17.5228 2 12 2C6.47715 2 2 6.47715 2 12C2 13.3789 2.27907 14.6926 2.78382 15.8877C3.06278 16.5481 3.20226 16.8784 3.21953 17.128C3.2368 17.3776 3.16334 17.6521 3.01642 18.2012L2 22L5.79877 20.9836C6.34788 20.8367 6.62244 20.7632 6.87202 20.7805C7.12161 20.7977 7.45185 20.9372 8.11235 21.2162C9.30745 21.7209 10.6211 22 12 22Z" />
                                <path
                                    d="M8.58815 12.3773L9.45909 11.2956C9.82616 10.8397 10.2799 10.4153 10.3155 9.80826C10.3244 9.65494 10.2166 8.96657 10.0008 7.58986C9.91601 7.04881 9.41086 7 8.97332 7C8.40314 7 8.11805 7 7.83495 7.12931C7.47714 7.29275 7.10979 7.75231 7.02917 8.13733C6.96539 8.44196 7.01279 8.65187 7.10759 9.07169C7.51023 10.8548 8.45481 12.6158 9.91948 14.0805C11.3842 15.5452 13.1452 16.4898 14.9283 16.8924C15.3481 16.9872 15.558 17.0346 15.8627 16.9708C16.2477 16.8902 16.7072 16.5229 16.8707 16.165C17 15.8819 17 15.5969 17 15.0267C17 14.5891 16.9512 14.084 16.4101 13.9992C15.0334 13.7834 14.3451 13.6756 14.1917 13.6845C13.5847 13.7201 13.1603 14.1738 12.7044 14.5409L11.6227 15.4118" />
                            </svg>
                        </a>
                    </div>
                </div>
            </div>
        @endforeach
    </section>

    <script>
        document.addEventListener('alpine:init', () => {
            Alpine.data('cart', () => ({
                init() {

                },
                addchat(descripcion) {
                    var link_whatsapp = "{{ config('services.links.whatsapp') }}";
                    var message = "DESEO COTIZAR EL SERVICIO :" + descripcion + ".";
                    console.log(link_whatsapp);

                    window.open(link_whatsapp + "&text=" + encodeURIComponent(message), "_blank");
                },
                addcart(url, service_id) {
                    const data = {
                        service_id: service_id
                    }

                    fetch(url, {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            },
                            body: JSON.stringify(data)
                        })
                        .then((response) => response.json())
                        .then((data) => {
                            console.log(data);

                        }).catch(function(error) {
                            console.log("Hubo un problema con la petición Fetch:" + error.message);
                        });
                }
            }))
        })
    </script>

</x-app-layout>

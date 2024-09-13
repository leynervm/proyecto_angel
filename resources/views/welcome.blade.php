<x-app-layout>
    @include('layouts.partials.slider')



    <div class="relative min-h-[60svh] w-full">
        <div
            class="absolute w-full h-full flex flex-col lg:flex-row inset-0 z-10 p-8 text-center self-center gap-3 bg-gradient-to-t from-slate-200/85 to-transparent">
            <h3 class="w-full flex-1 self-center text-justify text-balance text-2xl lg:text-3xl font-bold text-neutral-600 px-8">
                En <b class="text-primary italic">PubliCalin</b> estamos comprometidos contigo, ofreciéndote
                <b class="text-secondary">soluciones que van mas allá de tus expectativas</b>,
                poniendo a tu disposición equipo de vanguardia tecnológica y personal altamente calificado.
            </h3>
            <div class="w-full max-w-xl flex-shrink-0 self-center">
                <img src="{{ asset('assets/images/PLOTER.png') }}" alt="" class="w-full h-64 object-scale-down">
            </div>
        </div>
    </div>


    <section class="w-full block my-20">
        <div class="max-w-6xl px-6 mx-auto">
            {{-- <div class="text-center max-w-3xl pb-20 mx-auto" data-aos="zoom-in">
                <h2 class="text-5xl leading-10 font-semibold text-blue-700">
                    Put clarity at the center of your website</h2>
            </div> --}}

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-10" data-aos-id-featbl="">
                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/IMPRESIONES.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Impresiones</h1>
                </div>



                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/LETREROS.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Letreros</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/PLOTEOYCORTE.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Ploteo y corte</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/CORTELASER.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Corte láser</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/DISENOGRAFICO.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Diseño gráfico</h1>
                </div>


                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/ATENCIONPERSONALIZADA.svg') }}" alt=""
                        class="w-auto h-32 sm:h-40 block">
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Venta de insumos</h1>
                </div>
            </div>
        </div>
    </section>


    {{-- SECTION DE DATAS ICON --}}
    <section class="w-full block">
        <div
            class="gap-8 sm:gap-10 flex flex-wrap justify-center sm:justify-between items-center py-8 px-4 mx-auto max-w-6xl lg:py-16 lg:px-6">
            <div class="relative w-40">
                <div class="relative w-40 h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-orange-500 flex items-center justify-center">
                        <img src="{{ asset('assets/images/ICONOIDEA.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-orange-500 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-lg leading-5 text-neutral-600 mt-2 text-center">
                    Ideas y soluciones innovadoras para tus problemas publicitarios.
                </h1>
            </div>

            <div class="relative w-40">
                <div class="relative w-40 h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-blue-700 flex items-center justify-center">
                        <img src="{{ asset('assets/images/ALTONIVEL.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-blue-700 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-lg leading-5 text-neutral-600 mt-2 text-center">
                    Cada proyecto se realiza con un alto nivel de detalle
                </h1>
            </div>

            <div class="relative w-40">
                <div class="relative w-40 h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-orange-500 flex items-center justify-center">
                        <img src="{{ asset('assets/images/TIEMPO.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-orange-500 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-lg leading-5 text-neutral-600 mt-2 text-center">
                    Tiempo de entrega establecidos y concretos
                </h1>
            </div>

            <div class="relative w-40">
                <div class="relative w-40 h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-blue-700 flex items-center justify-center">
                        <img src="{{ asset('assets/images/CALIDADPRECIO.svg') }}" alt=""
                            class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-blue-700 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-lg leading-5 text-neutral-600 mt-2 text-center">
                    Buena relación
                </h1>
            </div>
        </div>
    </section>

    <section class="block my-20" data-aos="zoom-in">
        <div class="w-full max-w-6xl px-6 mx-auto flex flex-col justify-center items-center">
            <h2 class="text-5xl text-center font-semibold text-blue-700">
                Nuestros Clientes</h2>


            <div class="w-full relative py-10 px-10">
                <div class="w-full flex gap-10 overflow-x-hidden" id="sugerencias">
                    @for ($i = 0; $i < 10; $i++)
                        <div class="relative w-28 flex-shrink-0">
                            <div class="relative w-full h-28">
                                @php
                                    $colorborder = $i % 2 == 0 ? 'border-orange-500' : 'border-blue-700';
                                @endphp
                                <div
                                    class="{{ $colorborder }} w-full overflow-hidden h-full bg-white rounded-full absolute border border-dashed flex items-center justify-center">
                                    {{-- <img src="{{ asset('assets/images/cliente_logo.jpg') }}" alt="Product"
                                        class="h-full w-full block object-cover overflow-hidden" /> --}}
                                </div>
                                <div
                                    class="{{ $colorborder }} w-full h-full rounded-full absolute border-4 border-solid">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <button id="leftsugerencias"
                    class="absolute text-colorsubtitleform top-1/2 left-0 -translate-y-1/2 h-16 w-8 flex items-center justify-center disabled:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        fill="currentColor" class="w-8 h-8 block text-blue-700">
                        <path
                            d="M15.8051 5.40705C15.4776 4.96235 14.8516 4.86736 14.4069 5.19488C14.0615 5.44927 13.7332 5.70372 13.4472 5.92689C12.8764 6.3724 12.1118 6.98572 11.3444 7.65208C10.5819 8.31412 9.79361 9.04815 9.18811 9.73344C8.88637 10.0749 8.60888 10.4279 8.4014 10.7721C8.21046 11.0888 8 11.524 8 12.0001C8 12.4762 8.21046 12.9115 8.4014 13.2282C8.60888 13.5724 8.88637 13.9253 9.18811 14.2668C9.79361 14.9521 10.5819 15.6861 11.3444 16.3482C12.1118 17.0145 12.8764 17.6278 13.4472 18.0734C13.7332 18.2965 14.0615 18.551 14.4069 18.8054C14.8516 19.1329 15.4776 19.0379 15.8051 18.5932C15.9368 18.4144 16.0002 18.2064 16 18.0002V12.0001V6.00007C16.0002 5.79387 15.9368 5.58581 15.8051 5.40705Z" />
                    </svg>
                </button>
                <button id="rightsugerencias"
                    class="absolute text-colorsubtitleform top-1/2 right-0 -translate-y-1/2 h-16 w-8 flex items-center justify-center disabled:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                        fill="currentColor" class="w-8 h-8 block text-blue-700">
                        <path
                            d="M8.19486 5.40705C8.52237 4.96235 9.14837 4.86736 9.59306 5.19488C9.93847 5.44927 10.2668 5.70372 10.5528 5.92689C11.1236 6.3724 11.8882 6.98573 12.6556 7.65208C13.4181 8.31412 14.2064 9.04815 14.8119 9.73344C15.1136 10.0749 15.3911 10.4279 15.5986 10.7721C15.7895 11.0888 16 11.524 16 12.0001C16 12.4762 15.7895 12.9115 15.5986 13.2282C15.3911 13.5724 15.1136 13.9253 14.8119 14.2668C14.2064 14.9521 13.4181 15.6861 12.6556 16.3482C11.8882 17.0145 11.1236 17.6278 10.5528 18.0734C10.2668 18.2965 9.93847 18.551 9.59307 18.8054C9.14837 19.1329 8.52237 19.0379 8.19486 18.5932C8.0632 18.4144 7.99983 18.2064 8.00001 18.0002L8 12.0001L8 6.00007C7.99983 5.79387 8.0632 5.58581 8.19486 5.40705Z" />
                    </svg>
                </button>
            </div>



            {{-- grid grid-cols-[repeat(auto-fit,7rem)] grid-rows-[repeat(auto-fit,_100px)] --}}

            {{-- <div
                class="grid grid-flow-col auto-cols-[7rem] gap-10 overflow-hidden py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">

                @for ($i = 0; $i < 10; $i++)
                    <div class="relative w-28 flex-shrink-0">
                        <div class="relative w-full h-28">
                            <div
                                class="w-full overflow-hidden h-full bg-white rounded-full absolute border border-dashed border-purple-500 flex items-center justify-center">
                                <img src="{{ asset('assets/images/image.jpeg') }}" alt="Product"
                                    class="h-full w-full block object-cover overflow-hidden" />
                            </div>
                            <div class="w-full h-full rounded-full absolute border-4 border-solid border-purple-500">
                            </div>
                        </div>
                    </div>
                @endfor
            </div> --}}
    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // $("#leftrecents, #leftsugerencias, #leftsimilares").prop('disabled', true);

            let sugerencias = $("#sugerencias");
            $("#rightsugerencias").click(() => hacerScroll(sugerencias));
            $("#leftsugerencias").click(() => hacerScroll(sugerencias, '-'));
            disabledButtons(sugerencias, '#leftsugerencias', '#rightsugerencias');

            function hacerScroll(contenedor, type = "+") {
                $(contenedor).animate({
                    scrollLeft: type + '=' + Math.round($(contenedor).width())
                }, 'slow');
            }

            function disabledButtons(contenedor, left, right) {
                $(contenedor).scroll(function() {
                    if ($(contenedor).scrollLeft() <= 0) {
                        $(left).prop('disabled', true);
                        $(right).prop('disabled', false);
                    }

                    if ($(contenedor).scrollLeft() >= $(contenedor).get(0).scrollWidth - $(contenedor)
                        .width()) {
                        $(right).prop('disabled', true);
                        $(left).prop('disabled', false);
                    }
                });
            }

        })
    </script>


</x-app-layout>

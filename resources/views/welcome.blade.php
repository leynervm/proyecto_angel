<x-app-layout>
    @include('layouts.partials.slider')



    <div class="relative min-h-[45svh] xs:min-h-[35svh] lg:min-h-[40svh] w-full">
        <div
            class="absolute w-full h-full flex flex-col sm:flex-row inset-0 z-10 p-3 lg:p-8 text-center self-center gap-3 bg-gradient-to-t from-slate-200/85 to-transparent">
            <h3
                class="w-full sm:flex-1 self-center text-justify text-balance text-lg lg:text-3xl font-bold text-neutral-600">
                En <b class="text-primary italic">PubliCalin</b> estamos comprometidos contigo, ofreciéndote
                <b class="text-secondary">soluciones que van mas allá de tus expectativas</b>,
                poniendo a tu disposición equipo de vanguardia tecnológica y personal altamente calificado.
            </h3>
            <div class="w-full max-w-xs lg:max-w-md flex-shrink-0 self-center">
                <img src="{{ asset('assets/images/PLOTER.png') }}" alt=""
                    class="w-full block h-48 lg:h-64 object-scale-down object-right">
            </div>
        </div>
    </div>


    <section class="w-full block my-10 lg:my-20">
        <div class="max-w-6xl px-3 sm:px-6 mx-auto">
            {{-- <div class="text-center max-w-3xl pb-20 mx-auto" data-aos="zoom-in">
                <h2 class="text-5xl leading-10 font-semibold text-blue-700">
                    Put clarity at the center of your website</h2>
            </div> --}}

            <div class="w-full grid grid-cols-1 xs:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-10" data-aos-id-featbl="">
                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/IMPRESIONES.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Impresiones</h1>
                </div>

                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/LETREROS.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Letreros</h1>
                </div>

                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/PLOTEOYCORTE.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Ploteo y corte</h1>
                </div>

                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/CORTELASER.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Corte láser</h1>
                </div>

                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/DISENOGRAFICO.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Diseño gráfico</h1>
                </div>


                <div class="cardbox-welcome" data-aos="fade-up" data-aos-anchor-placement="bottom-bottom">
                    <img src="{{ asset('assets/images/VENTAINSUMOS.svg') }}" alt=""
                        class="w-auto h-28 sm:h-40 block">
                    <h1 class="title-cardbox-shadow">
                        Venta de Insumos</h1>
                </div>
            </div>
        </div>
    </section>


    {{-- SECTION DE DATAS ICON --}}
    <section class="w-full block">
        <div
            class="gap-8 sm:gap-10 flex flex-wrap justify-center sm:justify-between items-start py-8 px-1 mx-auto max-w-6xl lg:py-16 lg:px-6">
            <div class="relative w-28 lg:w-40">
                <div class="relative w-28 lg:w-40 h-28 lg:h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-orange-500 flex items-center justify-center">
                        <img src="{{ asset('assets/images/ICONOIDEA.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-orange-500 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-sm lg:text-lg !leading-none text-neutral-600 mt-2 text-center">
                    Ideas y soluciones innovadoras para tus problemas publicitarios.
                </h1>
            </div>

            <div class="relative w-28 lg:w-40">
                <div class="relative w-28 lg:w-40 h-28 lg:h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-blue-700 flex items-center justify-center">
                        <img src="{{ asset('assets/images/ALTONIVEL.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-blue-700 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-sm lg:text-lg !leading-none text-neutral-600 mt-2 text-center">
                    Cada proyecto se realiza con un alto nivel de detalle
                </h1>
            </div>

            <div class="relative w-28 lg:w-40">
                <div class="relative w-28 lg:w-40 h-28 lg:h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-orange-500 flex items-center justify-center">
                        <img src="{{ asset('assets/images/TIEMPO.svg') }}" alt="" class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-orange-500 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-sm lg:text-lg !leading-none text-neutral-600 mt-2 text-center">
                    Tiempo de entrega establecidos y concretos
                </h1>
            </div>

            <div class="relative w-28 lg:w-40">
                <div class="relative w-28 lg:w-40 h-28 lg:h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-blue-700 flex items-center justify-center">
                        <img src="{{ asset('assets/images/CALIDADPRECIO.svg') }}" alt=""
                            class="w-14 h-14 block">
                    </div>
                    <div
                        class="w-full h-full rounded-full absolute  border-8 border-solid border-blue-700 border-r-transparent">
                    </div>
                </div>
                <h1 class="font-semibold text-sm lg:text-lg !leading-none text-neutral-600 mt-2 text-center">
                    Buena relación
                </h1>
            </div>
        </div>
    </section>


    <section class="block my-5 lg:my-20" data-aos="zoom-in">
        <div class="w-full max-w-6xl lg:px-6 mx-auto flex flex-col justify-center items-center">
            <h2 class="w-full block py-6 text-2xl lg:text-5xl text-center font-semibold text-blue-700">
                Nuestros Clientes</h2>


            <div class="w-full relative px-1 lg:p-10">
                <div x-data="{}" x-init="$nextTick(() => {
                    let ul = $refs.logos;
                    ul.insertAdjacentHTML('afterend', ul.outerHTML);
                    ul.nextSibling.setAttribute('aria-hidden', 'true');
                })"
                    class="w-full inline-flex flex-nowrap overflow-hidden [mask-image:_linear-gradient(to_right,transparent_0,_black_10px,_black_calc(100%-10px),transparent_100%)]">
                    <ul x-ref="logos"
                        class="flex items-center justify-center md:justify-start [&_li]:mx-4 sm:[&_li]:mx-8 [&_img]:max-w-none animate-infinite-scroll">
                        @foreach ($clientes as $image)
                            <li class="relative size-28 sm:size-32 flex-shrink-0">
                                @php
                                    $colorborder = $loop->index % 2 == 0 ? 'border-orange-500' : 'border-blue-700';
                                @endphp
                                <div
                                    class="absolute {{-- {{ $colorborder }} --}} w-full overflow-hidden h-full {{-- bg-white rounded-full border border-dashed --}} flex items-center justify-center">
                                    <img src="{{ $image->image }}" alt="Product"
                                        class="h-full w-full block object-scale-down overflow-hidden" />
                                </div>
                                {{-- <div
                                    class="absolute top-0 left-0 {{ $colorborder }} w-full h-full rounded-full border-4 border-solid">
                                </div> --}}
                            </li>
                        @endforeach
                    </ul>
                </div>

                {{-- <button id="leftsugerencias"
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
                </button> --}}
            </div>
        </div>
    </section>



    <a target="_blank" href="{{ config('services.links.whatsapp') }}"
        class="fixed bottom-4 left-4 z-[999] inline-flex items-center justify-center w-14 h-14 sm:w-16 sm:h-16 rounded-full bg-[#25d366]">
        <div class="absolute z-10 top-0 left-0 w-full h-full rounded-full bg-[#25d366] animate-whatsapp"></div>
        <div class="relative z-20">
            <svg fill="#fff" version="1.1" xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 0 308.00 308.00" xml:space="preserve"
                stroke="#fff" transform="matrix(1, 0, 0, 1, 0, 0)" class="block w-full h-full p-3">
                <path
                    d="M227.904,176.981c-0.6-0.288-23.054-11.345-27.044-12.781c-1.629-0.585-3.374-1.156-5.23-1.156 c-3.032,0-5.579,1.511-7.563,4.479c-2.243,3.334-9.033,11.271-11.131,13.642c-0.274,0.313-0.648,0.687-0.872,0.687 c-0.201,0-3.676-1.431-4.728-1.888c-24.087-10.463-42.37-35.624-44.877-39.867c-0.358-0.61-0.373-0.887-0.376-0.887 c0.088-0.323,0.898-1.135,1.316-1.554c1.223-1.21,2.548-2.805,3.83-4.348c0.607-0.731,1.215-1.463,1.812-2.153 c1.86-2.164,2.688-3.844,3.648-5.79l0.503-1.011c2.344-4.657,0.342-8.587-0.305-9.856c-0.531-1.062-10.012-23.944-11.02-26.348 c-2.424-5.801-5.627-8.502-10.078-8.502c-0.413,0,0,0-1.732,0.073c-2.109,0.089-13.594,1.601-18.672,4.802 c-5.385,3.395-14.495,14.217-14.495,33.249c0,17.129,10.87,33.302,15.537,39.453c0.116,0.155,0.329,0.47,0.638,0.922 c17.873,26.102,40.154,45.446,62.741,54.469c21.745,8.686,32.042,9.69,37.896,9.69c0.001,0,0.001,0,0.001,0 c2.46,0,4.429-0.193,6.166-0.364l1.102-0.105c7.512-0.666,24.02-9.22,27.775-19.655c2.958-8.219,3.738-17.199,1.77-20.458 C233.168,179.508,230.845,178.393,227.904,176.981z" />
                <path
                    d="M156.734,0C73.318,0,5.454,67.354,5.454,150.143c0,26.777,7.166,52.988,20.741,75.928L0.212,302.716 c-0.484,1.429-0.124,3.009,0.933,4.085C1.908,307.58,2.943,308,4,308c0.405,0,0.813-0.061,1.211-0.188l79.92-25.396 c21.87,11.685,46.588,17.853,71.604,17.853C240.143,300.27,308,232.923,308,150.143C308,67.354,240.143,0,156.734,0z M156.734,268.994c-23.539,0-46.338-6.797-65.936-19.657c-0.659-0.433-1.424-0.655-2.194-0.655c-0.407,0-0.815,0.062-1.212,0.188 l-40.035,12.726l12.924-38.129c0.418-1.234,0.209-2.595-0.561-3.647c-14.924-20.392-22.813-44.485-22.813-69.677 c0-65.543,53.754-118.867,119.826-118.867c66.064,0,119.812,53.324,119.812,118.867 C276.546,215.678,222.799,268.994,156.734,268.994z" />
            </svg>
        </div>
    </a>



    <!-- Código de instalación Cliengo para services.test -->
    <script type="text/javascript">
        (function() {
            var ldk = document.createElement('script');
            ldk.type = 'text/javascript';
            ldk.async = true;
            ldk.src =
                'https://s.cliengo.com/weboptimizer/670dc89214ff823a088b82a4/670dc89214ff823a088b82a7.js?platform=dashboard';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ldk, s);
        })();

        function redirectWhatsapp() {
            var phoneNumber = "{{ config('services.whatsapp.phone') }}";
            var message = "";
            window.open("https://api.whatsapp.com/send?phone=" + phoneNumber, "_blank");
        }

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

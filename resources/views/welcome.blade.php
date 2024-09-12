<x-app-layout>
    @include('layouts.partials.slider')



    {{-- <section class="w-full block">
        <div class="flex gap-16 items-center justify-between py-8 px-4 mx-auto max-w-screen-xl">
            <div class="flex-1 font-light text-gray-500 sm:text-lg max-w-lg">
                <h2 class="mb-4 text-5xl leading-10 font-semibold text-blue-700" data-aos="zoom-in">
                    We didn't reinvent the wheel</h2>
                <p class="mb-4">We are strategists, designers and developers. Innovators and problem solvers. Small
                    enough to be simple and quick, but big enough to deliver the scope you want at the pace you need.
                    Small enough to be simple and quick, but big enough to deliver the scope you want at the pace you
                    need.</p>

            </div>
            <div class="w-72 mt-8">
                <img class="mt-4 w-full rounded-lg h-72" src="{{ asset('assets/images/image.jpeg') }}"
                    alt="office content 2">
            </div>
        </div>
    </section> --}}

    <section class="w-full block my-20">
        <div class="max-w-6xl px-6 mx-auto">
            {{-- <div class="text-center max-w-3xl pb-20 mx-auto" data-aos="zoom-in">
                <h2 class="text-5xl leading-10 font-semibold text-blue-700">
                    Put clarity at the center of your website</h2>
            </div> --}}

            <div class="w-full grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5 sm:gap-10" data-aos-id-featbl="">
                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-impresiones />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Impresiones</h1>
                </div>



                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-letreros />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Letreros</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-ploteo-corte />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Ploteo y corte</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-corte-laser />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Corte láser</h1>
                </div>

                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-diseno-grafico />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Diseño gráfico</h1>
                </div>


                <div class="bg-white flex flex-col p-5 sm:p-8 rounded-lg card-welcome" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <x-icon-venta-insumos />
                    <h1 class="font-bold text-2xl sm:text-3xl text-center text-primary">Venta de insumos</h1>
                </div>
            </div>
        </div>
    </section>


    {{-- <section class="w-full block my-20">
        <div class="max-w-6xl px-6 mx-auto">
            <div class="text-center max-w-3xl pb-20 mx-auto" data-aos="zoom-in">
                <h2 class="text-5xl leading-10 font-semibold text-blue-700">
                    Put clarity at the center of your website</h2>
            </div>

            <div class="w-full grid grid-cols-4 gap-5" data-aos-id-featbl="">
                <div class="text-white flex flex-col bg-[#3ABAB4] p-5" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <svg class="w-8 h-8 mb-3 block align-middle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path
                            d="M19 18.414l-4 4L9.586 17l.707-.707L12 14.586V8.414l-5-5L4.414 6l6.293 6.293-1.414 1.414L1.586 6 7 .586l7 7v5l8.463-8.463a3.828 3.828 0 115.414 5.414L21 16.414v6.172l5 5L28.586 25l-6.293-6.293 1.414-1.414L31.414 25 26 30.414l-7-7v-5zm-4 1.172L26.463 8.123a1.828 1.828 0 10-2.586-2.586L12.414 17 15 19.586zM11 30v2C4.925 32 0 27.075 0 21h2a9 9 0 009 9zm0-5v2a6 6 0 01-6-6h2a4 4 0 004 4z" />
                    </svg>
                    <div class="font-semibold text-xl leading-5 mb-1">Simpler Sharing</div>
                    <div class="mb-4">Lorem ipsum dolor amet sit consect adipiscing.</div>
                    <svg class="w-6 h-6 self-end" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path d=" M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                    </svg>
                </div>

                <div class="text-white flex flex-col bg-[#9F7AEA] p-5" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <svg class="w-8 h-8 mb-3 block align-middle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path
                            d="M20.796 20l-1.677 7.264a6 6 0 01-7.302 4.471L0 28.781V11.54l.35-.3 9.457-8.107a3.751 3.751 0 015.29 5.29L11.175 13H28.5a3.5 3.5 0 012.6 1.156c.663.736.984 1.72.878 2.74-.252 1.808-1.817 3.143-3.622 3.104h-7.56zM2 27.22l10.303 2.575a4 4 0 004.868-2.98L19.204 18h9.173c.812.018 1.508-.575 1.615-1.345A1.5 1.5 0 0028.5 15H11.173a2 2 0 01-1.517-3.3l3.922-4.577a1.755 1.755 0 00-.597-2.733 1.751 1.751 0 00-1.872.262L2 12.46v14.76zM28 .585L29.414 2 23 8.414 21.586 7 28 .586zm-8.272 6.627l-1.94-.485 1.484-5.94 1.94.484-1.484 5.94zm3.544 5l-.485-1.94 5.94-1.486.486 1.94-5.94 1.486z" />
                    </svg>
                    <div class="font-semibold text-xl leading-5 mb-1">Simpler Sharing</div>
                    <div class="mb-4">Lorem ipsum dolor amet sit consect adipiscing.</div>
                    <svg class="w-6 h-6 self-end" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z">
                        </path>
                    </svg>
                </div>

                <div class="text-white flex flex-col bg-[#667EEA] p-5" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <svg class="w-8 h-8 mb-3 block align-middle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path
                            d="M19 5.612V25a6 6 0 11-2-4.472V0h2v2.961A5.98 5.98 0 0023.497 5a8.476 8.476 0 018.444 9.474l-.253 2.13-1.469-1.563A6.472 6.472 0 0025.5 13c-1.842 0-3.634-.6-5.103-1.713l1.206-1.594A6.455 6.455 0 0025.5 11c1.557 0 3.068.428 4.376 1.217A6.475 6.475 0 0023.5 7 7.981 7.981 0 0119 5.612zM13 29a4 4 0 100-8 4 4 0 000 8zM0 5V3h14v2H0zm0 5V8h14v2H0zm0 5v-2h14v2H0z" />
                    </svg>
                    <div class="font-semibold text-xl leading-5 mb-1">Simpler Sharing</div>
                    <div class="mb-4">Lorem ipsum dolor amet sit consect adipiscing.</div>
                    <svg class="w-6 h-6 self-end" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z" />
                    </svg>
                </div>

                <div class="text-white flex flex-col bg-[#ED64A6] p-5" data-aos="fade-up"
                    data-aos-anchor-placement="bottom-bottom">
                    <svg class="w-8 h-8 mb-3 block align-middle" viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path
                            d="M20.243 6.757l.707.707-1.414 1.414-.707-.707a4 4 0 00-5.658 0l-.707.707-1.414-1.414.707-.707a6 6 0 018.486 0zm3.535-3.535l.707.707-1.414 1.414-.707-.707a9 9 0 00-12.728 0l-.707.707L7.515 3.93l.707-.707c4.296-4.296 11.26-4.296 15.556 0zM9 17.212V16a7 7 0 00-7-7H1V7h1a9 9 0 019 9v.788l2.302 5.18L11 23.117V24a4 4 0 01-4 4H5v3H3v-5h4a2 2 0 002-2v-2.118l1.698-.85L9 17.213zm12-.424V16a9 9 0 019-9h1v2h-1a7 7 0 00-7 7v1.212l-1.698 3.82 1.698.85V24a2 2 0 002 2h4v5h-2v-3h-2a4 4 0 01-4-4v-.882l-2.302-1.15L21 16.787zM16 12a1 1 0 110-2 1 1 0 010 2z" />
                    </svg>
                    <div class="font-semibold text-xl leading-5 mb-1">Simpler Sharing</div>
                    <div class="mb-4">Lorem ipsum dolor amet sit consect adipiscing.</div>
                    <svg class="w-6 h-6 self-end" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"
                        stroke="currentColor" fill="currentColor">
                        <path d="M13 11V5.057L22.72 12 13 18.943V13H2v-2h11zm2 4.057L19.28 12 15 8.943v6.114z">
                        </path>
                    </svg>
                </div>
            </div>
        </div>
    </section> --}}

    {{-- SECTION DE DATAS ICON --}}
    <section class="w-full block">
        <div
            class="gap-8 sm:gap-10 flex flex-wrap justify-center sm:justify-between items-center py-8 px-4 mx-auto max-w-6xl lg:py-16 lg:px-6">
            <div class="relative w-40">
                <div class="relative w-40 h-40">
                    <div
                        class="w-full h-full bg-white rounded-full absolute border border-dashed border-orange-500 flex items-center justify-center">
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" xml:space="preserve"
                            class="w-14 h-14 block text-orange-500" fill="currentColor" fill-rule="nonzero"
                            viewBox="0 0 85.3 85.3">
                            <path
                                d="M42.65 12.29c-1.47,0 -2.67,-1.19 -2.67,-2.67l0 -6.96c0,-1.47 1.19,-2.67 2.67,-2.67 1.47,0 2.67,1.19 2.67,2.67l0 6.96c0,1.47 -1.19,2.67 -2.67,2.67z" />
                            <path
                                d="M66.01 21.96c-0.68,0 -1.36,-0.26 -1.88,-0.78 -1.04,-1.04 -1.04,-2.73 0,-3.77l4.92 -4.92c1.04,-1.04 2.73,-1.04 3.77,0 1.04,1.04 1.04,2.73 0,3.77l-4.92 4.92c-0.52,0.52 -1.21,0.78 -1.89,0.78z" />
                            <path
                                d="M82.64 45.32l-6.96 0c-1.47,0 -2.67,-1.19 -2.67,-2.67 0,-1.47 1.19,-2.67 2.67,-2.67l6.96 0c1.47,0 2.67,1.19 2.67,2.67 0,1.47 -1.19,2.67 -2.67,2.67z" />
                            <path
                                d="M70.93 73.59c-0.68,0 -1.36,-0.26 -1.88,-0.78l-4.92 -4.92c-1.04,-1.04 -1.04,-2.73 0,-3.77 1.04,-1.04 2.73,-1.04 3.77,0l4.92 4.92c1.04,1.04 1.04,2.73 0,3.77 -0.52,0.52 -1.21,0.78 -1.89,0.78z" />
                            <path
                                d="M14.38 73.59c-0.68,0 -1.36,-0.26 -1.88,-0.78 -1.04,-1.04 -1.04,-2.73 0,-3.77l4.92 -4.92c1.04,-1.04 2.73,-1.04 3.77,0 1.04,1.04 1.04,2.73 0,3.77l-4.92 4.92c-0.52,0.52 -1.21,0.78 -1.89,0.78z" />
                            <path
                                d="M9.62 45.32l-6.96 0c-1.47,0 -2.67,-1.19 -2.67,-2.67 0,-1.47 1.19,-2.67 2.67,-2.67l6.96 0c1.47,0 2.67,1.19 2.67,2.67 0,1.47 -1.19,2.67 -2.67,2.67z" />
                            <path
                                d="M19.3 21.96c-0.68,0 -1.37,-0.26 -1.88,-0.78l-4.92 -4.92c-1.04,-1.04 -1.04,-2.73 0,-3.77 1.04,-1.04 2.73,-1.04 3.77,0l4.92 4.92c1.04,1.04 1.04,2.73 0,3.77 -0.53,0.52 -1.21,0.78 -1.89,0.78z" />
                            <path
                                d="M53.31 74.64l0 4.44c0,3.41 -2.81,6.22 -6.22,6.22l-8.89 0c-2.99,0 -6.22,-2.27 -6.22,-7.25l0 -3.41 21.33 0z" />
                            <path
                                d="M58.33 23.32c-5.83,-4.73 -13.51,-6.58 -21.01,-4.98 -9.42,1.95 -17.06,9.63 -19.02,19.05 -1.99,9.67 1.63,19.26 9.38,25.13 2.1,1.56 3.55,3.98 4.05,6.79l0 0.04c0.07,-0.04 0.18,-0.04 0.25,-0.04l21.33 0c0.07,0 0.11,0 0.18,0.04l0 -0.04c0.5,-2.7 2.1,-5.19 4.55,-7.11 6.01,-4.76 9.49,-11.87 9.49,-19.55 0,-7.54 -3.34,-14.57 -9.21,-19.34zm-2.35 21.11c-1.46,0 -2.67,-1.21 -2.67,-2.67 0,-5.4 -4.37,-9.77 -9.77,-9.77 -1.46,0 -2.67,-1.21 -2.67,-2.67 0,-1.46 1.21,-2.67 2.67,-2.67 8.32,0 15.11,6.79 15.11,15.11 0,1.46 -1.21,2.67 -2.67,2.67z" />
                            <path d="M31.74 69.31l0.25 0c-0.07,0 -0.18,0 -0.25,0.04l0 -0.04z" />
                            <path d="M53.49 69.31l0 0.04c-0.07,-0.04 -0.11,-0.04 -0.18,-0.04l0.18 0z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            xmlns:xodm="http://www.corel.com/coreldraw/odm/2003" xml:space="preserve"
                            class="w-14 h-14 block text-blue-700" fill="currentColor" fill-rule="nonzero"
                            viewBox="0 0 142.66 145.6">
                            <path
                                d="M140.83 80.84l-2.21 -3.01c-2.39,-3.28 -2.45,-7.73 -0.09,-11.07l2.15 -3.04c3.28,-4.65 1.76,-11.13 -3.28,-13.84l-3.28 -1.76c-3.58,-1.91 -5.55,-5.91 -4.86,-9.94l0.63 -3.67c0.96,-5.61 -3.25,-10.8 -8.95,-11.04l-3.73 -0.15c-4.06,-0.18 -7.58,-2.92 -8.71,-6.83l-1.04 -3.58c-1.58,-5.49 -7.61,-8.32 -12.86,-6.06l-3.43 1.46c-3.73,1.61 -8.08,0.66 -10.8,-2.39l-2.48 -2.77c-3.79,-4.24 -10.44,-4.21 -14.2,0.12l-2.45 2.8c-2.69,3.07 -7.01,4.09 -10.77,2.54l-3.46 -1.43c-5.28,-2.18 -11.25,0.78 -12.77,6.27l-0.98 3.61c-1.07,3.94 -4.53,6.74 -8.59,6.95l-3.73 0.21c-5.7,0.33 -9.82,5.58 -8.77,11.19l0.69 3.67c0.75,4 -1.16,8.03 -4.71,9.99l-3.25 1.82c-4.98,2.77 -6.41,9.28 -3.04,13.87l2.21 3.01c2.39,3.28 2.45,7.73 0.09,11.07l-2.15 3.04c-3.28,4.65 -1.76,11.13 3.28,13.84l3.28 1.76c3.58,1.91 5.55,5.91 4.86,9.94l-0.63 3.67c-0.96,5.61 3.25,10.8 8.95,11.04l3.73 0.15c4.06,0.18 7.58,2.92 8.71,6.83l1.04 3.58c1.58,5.49 7.61,8.32 12.86,6.06l3.43 -1.46c3.73,-1.61 8.08,-0.66 10.8,2.39l2.48 2.77c3.82,4.24 10.47,4.21 14.2,-0.12l2.45 -2.8c2.69,-3.07 7.01,-4.09 10.77,-2.54l3.46 1.43c5.28,2.18 11.25,-0.78 12.77,-6.27l0.98 -3.61c1.07,-3.94 4.53,-6.74 8.59,-6.95l3.73 -0.21c5.7,-0.33 9.82,-5.58 8.77,-11.19l-0.69 -3.67c-0.75,-4 1.16,-8.03 4.71,-9.99l3.25 -1.82c4.98,-2.74 6.41,-9.25 3.04,-13.87zm-69.5 39.69c-26.32,0 -47.73,-21.41 -47.73,-47.73 0,-26.32 21.41,-47.73 47.73,-47.73 26.32,0 47.73,21.41 47.73,47.73 0,26.32 -21.41,47.73 -47.73,47.73z" />
                            <path
                                d="M71.33 33.6c-21.62,0 -39.2,17.59 -39.2,39.2 0,21.62 17.59,39.2 39.2,39.2 21.61,0 39.2,-17.59 39.2,-39.2 0,-21.61 -17.59,-39.2 -39.2,-39.2zm23.27 31.82l-28.08 28.08c-1.18,1.18 -2.72,1.77 -4.27,1.77 -1.54,0 -3.09,-0.59 -4.27,-1.77l-10.73 -10.73c-2.36,-2.36 -2.36,-6.18 0,-8.54 2.36,-2.36 6.18,-2.36 8.54,0l6.46 6.46 23.82 -23.82c2.36,-2.36 6.18,-2.36 8.54,0 2.36,2.36 2.36,6.18 0,8.54z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-14 h-14 block text-orange-500" fill="currentColor" fill-rule="nonzero"
                            viewBox="0 0 136.9 130.58">
                            <path class="text-white" fill="none"
                                d="M50.96 98.1l-10.62 0c-1.28,0 -2.33,-1.05 -2.33,-2.33l0 -10.62c0,-1.28 1.05,-2.33 2.33,-2.33l10.62 0c1.28,0 2.33,1.05 2.33,2.33l0 10.62c0,1.28 -1.05,2.33 -2.33,2.33zm28.82 -28.82l-10.62 0c-1.28,0 -2.33,-1.05 -2.33,-2.33l0 -10.62c0,-1.28 1.05,-2.33 2.33,-2.33l10.62 0c1.28,0 2.33,1.05 2.33,2.33l0 10.62c0,1.28 -1.05,2.33 -2.33,2.33zm-28.82 0l-10.62 0c-1.28,0 -2.33,-1.05 -2.33,-2.33l0 -10.62c0,-1.28 1.05,-2.33 2.33,-2.33l10.62 0c1.28,0 2.33,1.05 2.33,2.33l0 10.62c0,1.28 -1.05,2.33 -2.33,2.33zm-28.82 0l-10.62 0c-1.28,0 -2.33,-1.05 -2.33,-2.33l0 -10.62c0,-1.28 1.05,-2.33 2.33,-2.33l10.62 0c1.28,0 2.33,1.05 2.33,2.33l0 10.62c0,1.28 -1.05,2.33 -2.33,2.33zm0 28.82l-10.62 0c-1.28,0 -2.33,-1.05 -2.33,-2.33l0 -10.62c0,-1.28 1.05,-2.33 2.33,-2.33l10.62 0c1.28,0 2.33,1.05 2.33,2.33l0 10.62c0,1.28 -1.05,2.33 -2.33,2.33z" />
                            <path
                                d="M33.67 62.9l-11.22 0c-1.55,0 -2.81,1.25 -2.81,2.81l0 14.03c0,1.55 1.26,2.81 2.81,2.81l11.22 0c1.55,0 2.81,-1.26 2.81,-2.81l0 -14.03c0,-1.55 -1.25,-2.81 -2.81,-2.81zm52.61 18.24c0,-1.94 -1.57,-3.51 -3.51,-3.51l-33.67 0c-1.94,0 -3.51,1.57 -3.51,3.51 0,1.94 1.57,3.51 3.51,3.51l33.67 0c1.94,0 3.51,-1.57 3.51,-3.51zm-72.25 26.66c-1.55,0 -2.81,-1.26 -2.81,-2.81l0 -47.7c0,-1.55 1.26,-2.81 2.81,-2.81l72.96 0c1.55,0 2.81,1.25 2.81,2.81l0 26.44 11.22 -11.22 0 -34.86c0,-6.2 -5.03,-11.22 -11.22,-11.22l-78.57 0c-6.2,0 -11.22,5.03 -11.22,11.22l0 70.15c0,6.2 5.03,11.22 11.22,11.22l45.79 0c0.24,-1.83 1.04,-3.55 2.34,-4.85 1.02,-1.02 3.85,-3.84 3.85,-3.84l2.53 -2.53 -51.7 0zm19.64 -71.55l11.22 0c2.33,0 4.21,1.88 4.21,4.21 0,2.32 -1.88,4.21 -4.21,4.21l-11.22 0c-2.32,0 -4.21,-1.89 -4.21,-4.21 0,-2.33 1.89,-4.21 4.21,-4.21zm-16.84 -1.4c3.1,0 5.61,2.51 5.61,5.61 0,3.1 -2.51,5.61 -5.61,5.61 -3.1,0 -5.61,-2.51 -5.61,-5.61 0,-3.1 2.51,-5.61 5.61,-5.61zm89.98 59.87l-8.05 -8.05c-0.55,-0.55 -1.44,-0.55 -1.98,0l-22.55 22.55c-0.55,0.55 -0.55,1.44 0,1.99l8.05 8.05c0.55,0.55 1.44,0.55 1.98,0l22.55 -22.55c0.55,-0.55 0.55,-1.44 0,-1.98zm-37.66 21.56c-0.55,-0.55 -1.43,-0.55 -1.98,-0.01 -0.92,0.91 -2.23,2.22 -2.85,2.85 -0.23,0.24 -0.37,0.54 -0.39,0.87l-0.7 9.08c-0.07,0.88 0.68,1.6 1.56,1.5l8.73 -1c0.31,-0.04 0.61,-0.18 0.83,-0.4l2.85 -2.85c0.55,-0.55 0.55,-1.44 0,-1.98l-8.05 -8.05zm-48.11 -24.61c-1.94,0 -3.51,1.57 -3.51,3.51 0,1.94 1.57,3.51 3.51,3.51l50.51 0c1.94,0 3.51,-1.57 3.51,-3.51 0,-1.94 -1.57,-3.51 -3.51,-3.51l-50.51 0zm61.73 -28.06l-33.67 0c-1.94,0 -3.51,1.57 -3.51,3.51 0,1.94 1.57,3.51 3.51,3.51l33.67 0c1.94,0 3.51,-1.57 3.51,-3.51 0,-1.94 -1.57,-3.51 -3.51,-3.51zm35.13 20.02l-8.05 -8.05c-0.55,-0.55 -1.44,-0.55 -1.98,0l-4.23 4.23c-0.55,0.55 -0.55,1.44 0,1.98l8.05 8.05c0.55,0.55 1.43,0.55 1.98,0l4.23 -4.23c0.55,-0.55 0.55,-1.43 0,-1.98z" />
                            <path class="text-white" stroke-miterlimit="10" stroke="#fff" stroke-width="15.23"
                                d="M119.58 29.45l-1.82 0c-1,0 -1.82,0.81 -1.82,1.82 0,1 0.81,1.82 1.82,1.82l1.82 0c1,0 1.82,-0.81 1.82,-1.82 0,-1 -0.81,-1.82 -1.82,-1.82zm-13.95 -21.83c-13.06,0 -23.65,10.59 -23.65,23.65 0,13.06 10.59,23.65 23.65,23.65 13.06,0 23.65,-10.59 23.65,-23.65 0,-13.06 -10.59,-23.65 -23.65,-23.65zm0 41.23c-9.7,0 -17.58,-7.89 -17.58,-17.58 0,-9.7 7.89,-17.58 17.58,-17.58 9.7,0 17.58,7.89 17.58,17.58 0,9.7 -7.89,17.58 -17.58,17.58zm7.93 -27.7l-7.16 7.17c-0.25,-0.05 -0.5,-0.08 -0.77,-0.08 -0.38,0 -0.75,0.08 -1.1,0.19l-5.55 -5.55c-0.71,-0.71 -1.86,-0.71 -2.57,0 -0.71,0.71 -0.71,1.86 0,2.57l5.67 5.67c-0.05,0.25 -0.09,0.5 -0.09,0.77 0,2.01 1.63,3.64 3.64,3.64 2.01,0 3.64,-1.63 3.64,-3.64 0,-0.38 -0.08,-0.75 -0.19,-1.1l7.05 -7.05c0.71,-0.71 0.71,-1.86 0,-2.57 -0.71,-0.71 -1.86,-0.71 -2.57,0zm-7.93 20.42c-1,0 -1.82,0.81 -1.82,1.82l0 1.82c0,1 0.82,1.82 1.82,1.82 1,0 1.82,-0.82 1.82,-1.82l0 -1.82c0,-1 -0.82,-1.82 -1.82,-1.82zm-12.13 -12.13l-1.82 0c-1,0 -1.82,0.81 -1.82,1.82 0,1 0.81,1.82 1.82,1.82l1.82 0c1,0 1.82,-0.81 1.82,-1.82 0,-1 -0.82,-1.82 -1.82,-1.82zm12.13 -13.95c-1,0 -1.82,0.81 -1.82,1.82l0 1.82c0,1 0.82,1.82 1.82,1.82 1,0 1.82,-0.81 1.82,-1.82l0 -1.82c0,-1 -0.82,-1.82 -1.82,-1.82z" />
                            <path
                                d="M119.58 29.44l-1.82 0c-1,0 -1.82,0.81 -1.82,1.82 0,1 0.81,1.82 1.82,1.82l1.82 0c1,0 1.82,-0.81 1.82,-1.82 0,-1 -0.81,-1.82 -1.82,-1.82zm-13.95 -21.83c-13.06,0 -23.65,10.59 -23.65,23.65 0,13.06 10.59,23.65 23.65,23.65 13.06,0 23.65,-10.59 23.65,-23.65 0,-13.06 -10.59,-23.65 -23.65,-23.65zm0 41.23c-9.7,0 -17.58,-7.89 -17.58,-17.58 0,-9.7 7.89,-17.58 17.58,-17.58 9.7,0 17.58,7.89 17.58,17.58 0,9.7 -7.89,17.58 -17.58,17.58zm7.93 -27.7l-7.16 7.17c-0.25,-0.05 -0.5,-0.08 -0.77,-0.08 -0.38,0 -0.75,0.08 -1.1,0.19l-5.55 -5.55c-0.71,-0.71 -1.86,-0.71 -2.57,0 -0.71,0.71 -0.71,1.86 0,2.57l5.67 5.67c-0.05,0.25 -0.08,0.5 -0.08,0.77 0,2.01 1.63,3.64 3.64,3.64 2.01,0 3.64,-1.63 3.64,-3.64 0,-0.38 -0.08,-0.75 -0.19,-1.1l7.05 -7.05c0.71,-0.71 0.71,-1.86 0,-2.57 -0.71,-0.71 -1.86,-0.71 -2.57,0zm-7.93 20.42c-1,0 -1.82,0.81 -1.82,1.82l0 1.82c0,1 0.81,1.82 1.82,1.82 1,0 1.82,-0.81 1.82,-1.82l0 -1.82c0,-1 -0.82,-1.82 -1.82,-1.82zm-12.13 -12.13l-1.82 0c-1,0 -1.82,0.81 -1.82,1.82 0,1 0.81,1.82 1.82,1.82l1.82 0c1,0 1.82,-0.81 1.82,-1.82 0,-1 -0.81,-1.82 -1.82,-1.82zm12.13 -13.95c-1,0 -1.82,0.81 -1.82,1.82l0 1.82c0,1 0.81,1.82 1.82,1.82 1,0 1.82,-0.81 1.82,-1.82l0 -1.82c0,-1 -0.82,-1.82 -1.82,-1.82z" />
                        </svg>
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
                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                            class="w-14 h-14 block text-blue-700" viewBox="0 0 88.57 88.57" fill="currentColor"
                            fill-rule="nonzero">
                            <path stroke-width="2" stroke="#fff"
                                d="M51.38 0l0 0c11.89,0 21.62,9.73 21.62,21.62l0 0c0,11.89 -9.73,21.62 -21.62,21.62l0 0c-11.89,0 -21.62,-9.73 -21.62,-21.62l0 0c0,-11.89 9.73,-21.62 21.62,-21.62zm-4.14 19.9c-2.72,-1 -3.2,-1.69 -3.2,-2.75 0,-0.98 0.86,-1.97 2.79,-1.97 1.72,0 2.81,0.56 3.1,0.73 0.16,0.09 0.35,0.12 0.53,0.05 0.18,-0.06 0.32,-0.2 0.39,-0.38l0.65 -1.82c0.1,-0.28 -0.02,-0.59 -0.28,-0.74 -0.5,-0.28 -1.92,-0.93 -4.3,-0.93 -3.83,0 -6.5,2.18 -6.5,5.3 0,2.48 1.71,4.28 5.21,5.49 2.52,0.89 3.01,1.71 3.01,2.83 0,1.46 -1.18,2.33 -3.17,2.33 -1.36,0 -2.76,-0.38 -3.84,-1.03 -0.16,-0.1 -0.36,-0.12 -0.54,-0.06 -0.18,0.06 -0.33,0.21 -0.39,0.39l-0.62 1.87c-0.09,0.26 0.02,0.55 0.26,0.71 1.12,0.71 3.21,1.22 4.98,1.22 5.14,0 6.96,-3.02 6.96,-5.61 0,-2.67 -1.45,-4.31 -5.02,-5.64zm13.27 6.76c-1.14,0 -2,0.85 -2,1.97 0,1.13 0.84,1.97 1.94,1.97l0.03 0c1.16,0 2,-0.83 2,-1.97 0,-1.14 -0.83,-1.97 -1.97,-1.97zm2.18 -13.8l-7.4 17.78c-0.06,0.14 -0.2,0.24 -0.37,0.24l-1.79 -0c-0.13,0 -0.25,-0.06 -0.32,-0.16 -0.07,-0.1 -0.09,-0.23 -0.04,-0.34l7.34 -17.78c0.06,-0.14 0.2,-0.24 0.37,-0.24l1.85 0c0.13,0 0.25,0.06 0.32,0.16 0.07,0.1 0.09,0.23 0.04,0.34z" />
                            <path
                                d="M79.01 54.36l-9.82 12.84c-1.96,2.57 -5.01,4.07 -8.25,4.07l-18.22 0c-1.43,0 -2.59,-1.16 -2.59,-2.59 0,-1.43 1.16,-2.59 2.59,-2.59l15.8 0c3.39,0 6.24,-2.78 6.17,-6.17 -0.06,-3.29 -2.75,-5.94 -6.05,-5.94l-18.16 0c-5.22,-5.01 -13.26,-5.6 -19.15,-1.4l-1.95 1.4 0 29.41 17.3 0 3.46 0 24.37 0c5.3,0 10.23,-2.69 13.1,-7.15l10.13 -15.75c0.55,-0.86 0.85,-1.86 0.85,-2.88 0,-5.09 -6.46,-7.28 -9.56,-3.24z" />
                            <path
                                d="M11.59 48.78l-9 0c-1.43,0 -2.59,1.16 -2.59,2.59l0 34.6c0,1.43 1.16,2.59 2.59,2.59l9 0c1.43,0 2.59,-1.16 2.59,-2.59l0 -34.6c0,-1.43 -1.16,-2.59 -2.59,-2.59z" />
                        </svg>
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
                        <div class="relative w-32 flex-shrink-0">
                            <div class="relative w-full h-32">
                                <div
                                    class="w-full overflow-hidden h-full bg-white rounded-full absolute border border-dashed border-purple-500 flex items-center justify-center">
                                    <img src="{{ asset('assets/images/cliente_logo.jpg') }}" alt="Product"
                                        class="h-full w-full block object-cover overflow-hidden" />
                                </div>
                                <div
                                    class="w-full h-full rounded-full absolute border-4 border-solid border-purple-500">
                                </div>
                            </div>
                        </div>
                    @endfor
                </div>

                <button id="leftsugerencias"
                    class="absolute text-colorsubtitleform top-1/2 left-0 -translate-y-1/2 h-16 w-8 shadow flex items-center justify-center disabled:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 block">
                        <path d="M15 7L10 12L15 17" />
                    </svg>
                </button>
                <button id="rightsugerencias"
                    class="absolute text-colorsubtitleform top-1/2 right-0 -translate-y-1/2 h-16 w-8 shadow flex items-center justify-center disabled:opacity-25">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="w-6 h-6 block">
                        <path d="M10 7L15 12L10 17" />
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

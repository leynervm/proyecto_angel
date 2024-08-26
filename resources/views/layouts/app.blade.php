<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'PROYECTO FINAL') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/sweetAlert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('assets/aos/aos.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->

    @livewireStyles
</head>

<body class="font-sans antialiased">

    <div class="min-h-screen bg-gray-100">
        <nav class="p-2 bg-white text-gray-200">
            <div class="w-full contenedor flex flex-col md:flex-row justify-between items-center">
                <div class="flex items-center">
                    <a href="/" class="flex-1 items-center justify-center block h-full">
                        <svg class="h-12 w-auto text-blue-700" xmlns='http://www.w3.org/2000/svg' viewBox='0 0 177.778 100'
                            stroke="currentColor" fill="currentColor">
                            <path
                                d='M31.941,62.825h25.65V37.175H31.941ZM52.654,47.532h-5.42v-5.42h5.42Zm-15.777-5.42H42.3V52.468H52.654v5.42H36.877Zm37.417-4.937A12.825,12.825,0,1,0,87.119,50,12.84,12.84,0,0,0,74.294,37.175Zm0,20.713A7.888,7.888,0,1,1,82.182,50,7.9,7.9,0,0,1,74.294,57.888Zm58.719-20.713A12.825,12.825,0,1,0,145.837,50,12.84,12.84,0,0,0,133.013,37.175Zm0,20.713A7.888,7.888,0,1,1,140.9,50,7.9,7.9,0,0,1,133.013,57.888Zm-29.36-20.713A12.825,12.825,0,1,0,116.478,50,12.84,12.84,0,0,0,103.653,37.175Zm0,20.713a7.888,7.888,0,1,1,7.488-10.356h-7.488v4.936h7.488A7.9,7.9,0,0,1,103.653,57.888Z' />
                        </svg>
                    </a>
                </div>

                <div class="flex">
                    <ul class="flex flex-wrap gap-3">
                        <li class="text-sm p-2">
                            <a href="{{ route('home') }}"
                                class="link-nav {{ request()->routeIs('home') ? 'link-active' : '' }}"
                                style="text-underline-offset: 8px;">{{ __('Home') }}</a>
                        </li>
                        <li class="text-sm p-2">
                            <a href="{{ route('services') }}"
                                class="link-nav {{ request()->routeIs('services') ? 'link-active' : '' }}"
                                style="text-underline-offset: 8px;">Servicios Populares</a>
                        </li>
                        <li class="text-sm p-2">
                            <a href="{{ route('about') }}"
                                class="link-nav {{ request()->routeIs('about') ? 'link-active' : '' }}"
                                style="text-underline-offset: 8px;">{{ __('About') }}</a>
                        </li>
                        <li class="text-sm p-2">
                            <a href="{{ route('cart') }}"
                                class="link-nav {{ request()->routeIs('cart') ? 'link-active' : '' }}"
                                style="text-underline-offset: 8px;">{{ __('Rastrear pedido') }}</a>
                        </li>
                        {{-- <li class="text-sm p-2">
                            <a href=""
                                class="link-nav"
                                style="text-underline-offset: 8px;">{{ __('Contact') }}</a>
                        </li> --}}

                        <li class="text-sm p-2">
                            @auth
                                <form method="POST" action="{{ route('logout') }}" x-data>
                                    @csrf

                                    <a href="{{ route('logout') }}" class="link-nav" style="text-underline-offset: 8px;"
                                        @click.prevent="$root.submit();">{{ __('Log Out') }}</a>
                                </form>
                            @else
                                <a href="{{ route('login') }}" class="link-nav"
                                    style="text-underline-offset: 8px;">{{ __('Log In') }}</a>
                            @endauth
                        </li>

                    </ul>
                </div>
            </div>
        </nav>

        <!-- Page Content -->
        <main>
           
            {{-- <div class="fixed-whatsapp">
                <div class="aba-whatsphone">
                    <div class="aba-whatsphone-icone">
                        <a target="_blank"
                            href="https://api.whatsapp.com/send?phone=51928393901&text=Hola+necesito+mas+informacion">
                            <strong>Escríbenos al WhatsApp!</strong></a>
                    </div>
                </div>
            </div> --}}

            {{ $slot }}
        </main>
        @include('layouts.partials.footer')
    </div>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('assets/sweetAlert2/sweetalert2.all.min.js') }}"></script>
    <script src="{{ asset('assets/aos/aos.js') }}"></script>
    <script src="{{ asset('assets/bootstrap/jquery-3.4.1.min.js') }}"></script>


    <!-- Código de instalación Cliengo para services.test -->
    {{-- <script type="text/javascript">
        (function() {
            var ldk = document.createElement('script');
            ldk.type = 'text/javascript';
            ldk.async = true;
            ldk.src =
                'https://s.cliengo.com/weboptimizer/66c382e50d294f41222c2630/66c796954cfa490f088c22e6.js?platform=onboarding_modular';
            var s = document.getElementsByTagName('script')[0];
            s.parentNode.insertBefore(ldk, s);
        })();
    </script> --}}

    <script>
        AOS.init();

        // You can also pass an optional settings object
        // below listed default settings
        AOS.init({
            // Global settings:
            disable: false, // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
            startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
            initClassName: 'aos-init', // class applied after initialization
            animatedClassName: 'aos-animate', // class applied on animation
            useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
            disableMutationObserver: false, // disables automatic mutations' detections (advanced)
            debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
            throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)


            // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
            offset: 120, // offset (in px) from the original trigger point
            delay: 0, // values from 0 to 3000, with step 50ms
            duration: 400, // values from 0 to 3000, with step 50ms
            easing: 'ease', // default easing for AOS animations
            once: true, // whether animation should happen only once - while scrolling down
            mirror: false, // whether elements should animate out while scrolling past them
            anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

        });


        const Toast = Swal.mixin({
            toast: true,
            position: 'top-end',
            showConfirmButton: false,
            timer: 2000,
            timerProgressBar: true,
            didOpen: (toast) => {
                toast.addEventListener('mouseenter', Swal.stopTimer)
                toast.addEventListener('mouseleave', Swal.resumeTimer)
            }
        });

        window.addEventListener('toast', toast => {
            console.log(toast);
            Toast.fire({
                icon: toast.detail.icon,
                title: toast.detail.title
            });
        });

        window.addEventListener('alert', alert => {
            Swal.fire({
                title: alert.detail.title,
                text: alert.detail.text,
                icon: alert.detail.icon,
                showCancelButton: false,
                allowOutsideClick: false,
                confirmButtonColor: '#3085d6',
                confirmButtonText: 'CERRAR',
                allowEscapeKey: true,
            });
        });
    </script>
</body>

</html>

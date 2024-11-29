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

<body class="font-sans lg:overflow-y-auto" x-data="{ menu: false }" x-init=""
    :class="menu ? 'overflow-hidden ' : 'overflow-y-auto'">

    <div class="relative min-h-screen bg-gray-100">
        <button @click="menu =!menu"
            class="fixed top-2 left-2 z-[9999] lg:hidden p-2.5 bg-blue-700 rounded-lg cursor-pointer text-white">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="-0.5 0 25 25" fill="none" stroke="currentColor"
                stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" class="block w-6 h-6">
                <path
                    d="M19 3.32001H16C14.8954 3.32001 14 4.21544 14 5.32001V8.32001C14 9.42458 14.8954 10.32 16 10.32H19C20.1046 10.32 21 9.42458 21 8.32001V5.32001C21 4.21544 20.1046 3.32001 19 3.32001Z" />
                <path
                    d="M8 3.32001H5C3.89543 3.32001 3 4.21544 3 5.32001V8.32001C3 9.42458 3.89543 10.32 5 10.32H8C9.10457 10.32 10 9.42458 10 8.32001V5.32001C10 4.21544 9.10457 3.32001 8 3.32001Z" />
                <path
                    d="M19 14.32H16C14.8954 14.32 14 15.2154 14 16.32V19.32C14 20.4246 14.8954 21.32 16 21.32H19C20.1046 21.32 21 20.4246 21 19.32V16.32C21 15.2154 20.1046 14.32 19 14.32Z" />
                <path
                    d="M8 14.32H5C3.89543 14.32 3 15.2154 3 16.32V19.32C3 20.4246 3.89543 21.32 5 21.32H8C9.10457 21.32 10 20.4246 10 19.32V16.32C10 15.2154 9.10457 14.32 8 14.32Z" />
            </svg>
        </button>

        <nav class="w-full fixed h-screen overflow-y-auto lg:translate-x-0 lg:h-auto top-0 left-0 z-[999] bg-white lg:relative lg:p-2 text-gray-200 duration-300"
            :class="menu ? 'translate-x-0' : '-translate-x-full'">
            <div class="relative w-full lg:px-3 flex flex-col lg:flex-row justify-between gap-2 items-center">
                <div class="w-full lg:w-auto pt-1 pr-2 lg:p-0">
                    <a href="/" class="flex-1 flex items-center justify-end h-full">
                        <img src="{{ asset('assets/images/LOGOCALIN.svg') }}" alt=""
                            class="h-12 lg:h-16 w-auto block object-cover object-right">
                    </a>
                </div>

                <ul class="w-full flex-1 flex flex-col lg:flex-row lg:justify-end lg:gap-3 items-center">
                    <li class="text-sm w-full block lg:inline-block lg:w-auto">
                        <a href="{{ route('home') }}"
                            class="link-nav group {{ request()->routeIs('home') ? 'link-active' : '' }}"
                            style="text-underline-offset: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 block {{ request()->routeIs('home') ? 'link-active' : '' }}">
                                <path d="M2 10L10.7506 2.99951C11.481 2.41516 12.519 2.41516 13.2494 2.99951L22 10" />
                                <path d="M4 8.5V19C4 20.1046 4.89543 21 6 21H18C19.1046 21 20 20.1046 20 19V8.5" />
                                <path d="M12 17V18" />
                            </svg>
                            {{ __('Home') }}
                        </a>
                    </li>
                    <li class="text-sm w-full block lg:inline-block lg:w-auto">
                        <a href="{{ route('services') }}"
                            class="link-nav {{ request()->routeIs('services') ? 'link-active' : '' }}"
                            style="text-underline-offset: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 block {{ request()->routeIs('home') ? 'link-active' : '' }}">
                                <path
                                    d="M18 3H6C5.06812 3 4.60218 3 4.23463 3.15224C3.74458 3.35523 3.35523 3.74458 3.15224 4.23463C3 4.60218 3 5.06812 3 6C3 6.93188 3 7.39782 3.15224 7.76537C3.35523 8.25542 3.74458 8.64477 4.23463 8.84776C4.60218 9 5.06812 9 6 9H18C18.9319 9 19.3978 9 19.7654 8.84776C20.2554 8.64477 20.6448 8.25542 20.8478 7.76537C21 7.39782 21 6.93188 21 6C21 5.06812 21 4.60218 20.8478 4.23463C20.6448 3.74458 20.2554 3.35523 19.7654 3.15224C19.3978 3 18.9319 3 18 3Z" />
                                <path
                                    d="M18 9H6C5.06812 9 4.60218 9 4.23463 9.15224C3.74458 9.35523 3.35523 9.74458 3.15224 10.2346C3 10.6022 3 11.0681 3 12C3 12.9319 3 13.3978 3.15224 13.7654C3.35523 14.2554 3.74458 14.6448 4.23463 14.8478C4.60218 15 5.06812 15 6 15H18C18.9319 15 19.3978 15 19.7654 14.8478C20.2554 14.6448 20.6448 14.2554 20.8478 13.7654C21 13.3978 21 12.9319 21 12C21 11.0681 21 10.6022 20.8478 10.2346C20.6448 9.74458 20.2554 9.35523 19.7654 9.15224C19.3978 9 18.9319 9 18 9Z" />
                                <path
                                    d="M18 15H6C5.06812 15 4.60218 15 4.23463 15.1522C3.74458 15.3552 3.35523 15.7446 3.15224 16.2346C3 16.6022 3 17.0681 3 18C3 18.9319 3 19.3978 3.15224 19.7654C3.35523 20.2554 3.74458 20.6448 4.23463 20.8478C4.60218 21 5.06812 21 6 21H18C18.9319 21 19.3978 21 19.7654 20.8478C20.2554 20.6448 20.6448 20.2554 20.8478 19.7654C21 19.3978 21 18.9319 21 18C21 17.0681 21 16.6022 20.8478 16.2346C20.6448 15.7446 20.2554 15.3552 19.7654 15.1522C19.3978 15 18.9319 15 18 15Z" />
                                <path d="M6 6H6.01" />
                                <path d="M6 12H6.01" />
                                <path d="M6 18H6.01" />
                                <path d="M9 6H9.01" />
                                <path d="M9 12H9.01" />
                                <path d="M9 18H9.01" />
                            </svg>
                            Servicios
                        </a>
                    </li>
                    <li class="text-sm w-full block lg:inline-block lg:w-auto">
                        <a href="{{ route('nosotros') }}"
                            class="link-nav {{ request()->routeIs('nosotros') ? 'link-active' : '' }}"
                            style="text-underline-offset: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 block {{ request()->routeIs('home') ? 'link-active' : '' }}">
                                <path
                                    d="M17 11.8045C17 11.4588 17 11.286 17.052 11.132C17.2032 10.6844 17.6018 10.5108 18.0011 10.3289C18.45 10.1244 18.6744 10.0222 18.8968 10.0042C19.1493 9.98378 19.4022 10.0382 19.618 10.1593C19.9041 10.3198 20.1036 10.6249 20.3079 10.873C21.2513 12.0188 21.7229 12.5918 21.8955 13.2236C22.0348 13.7334 22.0348 14.2666 21.8955 14.7764C21.6438 15.6979 20.8485 16.4704 20.2598 17.1854C19.9587 17.5511 19.8081 17.734 19.618 17.8407C19.4022 17.9618 19.1493 18.0162 18.8968 17.9958C18.6744 17.9778 18.45 17.8756 18.0011 17.6711C17.6018 17.4892 17.2032 17.3156 17.052 16.868C17 16.714 17 16.5412 17 16.1955V11.8045Z" />
                                <path
                                    d="M7 11.8046C7 11.3694 6.98778 10.9782 6.63591 10.6722C6.50793 10.5609 6.33825 10.4836 5.99891 10.329C5.55001 10.1246 5.32556 10.0224 5.10316 10.0044C4.43591 9.9504 4.07692 10.4058 3.69213 10.8732C2.74875 12.019 2.27706 12.5919 2.10446 13.2237C1.96518 13.7336 1.96518 14.2668 2.10446 14.7766C2.3562 15.6981 3.15152 16.4705 3.74021 17.1856C4.11129 17.6363 4.46577 18.0475 5.10316 17.996C5.32556 17.978 5.55001 17.8757 5.99891 17.6713C6.33825 17.5167 6.50793 17.4394 6.63591 17.3281C6.98778 17.0221 7 16.631 7 16.1957V11.8046Z" />
                                <path d="M20 10.5V9C20 5.13401 16.4183 2 12 2C7.58172 2 4 5.13401 4 9V10.5" />
                                <path d="M20 17.5C20 22 16 22 12 22" />
                            </svg>
                            {{ __('nosotros') }}</a>
                    </li>
                    <li class="text-sm w-full block lg:inline-block lg:w-auto">
                        <a href="{{ route('tracking') }}"
                            class="link-nav {{ request()->routeIs('tracking') ? 'link-active' : '' }}"
                            style="text-underline-offset: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                class="w-4 h-4 block {{ request()->routeIs('home') ? 'link-active' : '' }}">
                                <circle cx="17" cy="18" r="2" />
                                <circle cx="7" cy="18" r="2" />
                                <path
                                    d="M5 17.9724C3.90328 17.9178 3.2191 17.7546 2.73223 17.2678C2.24536 16.7809 2.08222 16.0967 2.02755 15M9 18H15M19 17.9724C20.0967 17.9178 20.7809 17.7546 21.2678 17.2678C22 16.5355 22 15.357 22 13V11H17.3C16.5555 11 16.1832 11 15.882 10.9021C15.2731 10.7043 14.7957 10.2269 14.5979 9.61803C14.5 9.31677 14.5 8.94451 14.5 8.2C14.5 7.08323 14.5 6.52485 14.3532 6.07295C14.0564 5.15964 13.3404 4.44358 12.4271 4.14683C11.9752 4 11.4168 4 10.3 4H2" />
                                <path d="M2 8H8" />
                                <path d="M2 11H6" />
                                <path
                                    d="M14.5 6H16.3212C17.7766 6 18.5042 6 19.0964 6.35371C19.6886 6.70742 20.0336 7.34811 20.7236 8.6295L22 11" />
                            </svg>
                            {{ __('Tracking') }}</a>
                    </li>

                    @auth
                        <li class="w-full lg:w-auto text-sm">
                            <a href="{{ route('dashboard.orders') }}" class="link-nav" style="text-underline-offset: 8px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                                    stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                    class="w-4 h-4 block">
                                    <path
                                        d="M2.5 12C2.5 7.52167 2.5 5.2825 3.89124 3.89126C5.28249 2.50002 7.52166 2.50002 12 2.50002C16.4783 2.50002 18.7175 2.50002 20.1088 3.89126C21.5 5.2825 21.5 7.52167 21.5 12C21.5 16.4784 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4784 2.5 12Z">
                                    </path>
                                    <path d="M2.5 9.00002H21.5"></path>
                                    <path d="M6.99981 6.00002H7.00879"></path>
                                    <path d="M10.9998 6.00002H11.0088"></path>
                                    <path d="M17 17C17 14.2386 14.7614 12 12 12C9.23858 12 7 14.2386 7 17"></path>
                                    <path d="M12.707 15.293L11.2928 16.7072"></path>
                                </svg>
                                {{ __('Dashboard') }}</a>
                        </li>
                    @else
                        <li class="w-full lg:w-auto text-sm">
                            <a href="{{ route('login') }}" class="link-nav" style="text-underline-offset: 8px;">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                    stroke-linejoin="round"
                                    class="w-4 h-4 block {{ request()->routeIs('home') ? 'link-active' : '' }}">
                                    <path
                                        d="M12.5 22H6.59087C5.04549 22 3.81631 21.248 2.71266 20.1966C0.453366 18.0441 4.1628 16.324 5.57757 15.4816C7.97679 14.053 10.8425 13.6575 13.5 14.2952" />
                                    <path
                                        d="M16.5 6.5C16.5 8.98528 14.4853 11 12 11C9.51472 11 7.5 8.98528 7.5 6.5C7.5 4.01472 9.51472 2 12 2C14.4853 2 16.5 4.01472 16.5 6.5Z" />
                                    <path
                                        d="M16.7596 16.378C15.6796 16.378 15.2171 17.1576 15.0971 17.6373C14.9771 18.117 14.9771 19.856 15.0491 20.5755C15.2891 21.475 15.8891 21.8468 16.4771 21.9667C17.0171 22.0147 19.2971 21.9967 19.9571 21.9967C20.9171 22.0147 21.6371 21.6549 21.9371 20.5755C21.9971 20.2157 22.0571 18.2369 21.9071 17.6373C21.5891 16.6778 20.866 16.378 20.266 16.378M16.7596 16.378H20.266M16.7596 16.378C16.7596 16.378 16.7582 15.5516 16.7596 15.1173C16.7609 14.7204 16.726 14.3378 16.9156 13.9876C17.626 12.5748 19.666 12.7187 20.17 14.1579C20.2573 14.3948 20.2626 14.7704 20.26 15.1173C20.2567 15.5605 20.266 16.378 20.266 16.378" />
                                </svg>
                                {{ __('Log In') }}</a>
                        </li>
                    @endauth
                </ul>
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

    <script>
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

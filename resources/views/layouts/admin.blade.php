<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="shortcut icon" href="{{ asset('assets/images/isotipo.ico') }}">

    <title>{{ config('app.name', 'PROYECTO FINAL') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="{{ asset('assets/sweetAlert2/sweetalert2.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/animate/animate.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body x-data="sidebar()" class="bg-gray-50" @resize.window="handleResize()">
    <div class="xl:flex">
        <div x-show="isOpen()" class="fixed xl:static inset-0 flex bg-white bg-opacity-75 h-screen z-20">
            <div @click.away="handleAway()" class="w-52 text-white bg-principal shadow">
                <div class="flex content-between">
                    <a class="p-3 w-full text-lg sm:text-xl" href="/">{{ config('app.name') }}</a>
                    <button @click.prevent="handleClose()" class="p-3 flex-1 flex items-center">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <ul class="w-full flex-grow md:overflow-y-auto overflow-x-hidden">
                    <li>
                        <a class="item-link-sidebar {{ request()->routeIs('admin') ? 'item-sidebar-active' : '' }}"
                            href="{{ route('admin') }}">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                class="w-5 h-5">
                                <path
                                    d="M2.5 12C2.5 7.52167 2.5 5.2825 3.89124 3.89126C5.28249 2.50002 7.52166 2.50002 12 2.50002C16.4783 2.50002 18.7175 2.50002 20.1088 3.89126C21.5 5.2825 21.5 7.52167 21.5 12C21.5 16.4784 21.5 18.7175 20.1088 20.1088C18.7175 21.5 16.4783 21.5 12 21.5C7.52166 21.5 5.28249 21.5 3.89124 20.1088C2.5 18.7175 2.5 16.4784 2.5 12Z" />
                                <path d="M2.5 9.00002H21.5" />
                                <path d="M6.99981 6.00002H7.00879" />
                                <path d="M10.9998 6.00002H11.0088" />
                                <path d="M17 17C17 14.2386 14.7614 12 12 12C9.23858 12 7 14.2386 7 17" />
                                <path d="M12.707 15.293L11.2928 16.7072" />
                            </svg>
                            <span class="mx-4">INICIO</span>
                        </a>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <div class="item-link-sidebar !bg-inherit !text-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="block w-5 h-5">
                                        <path
                                            d="M5 22C3.89543 22 3 21.1046 3 20L3 4.00145C3 2.89631 3.89631 2.00065 5.00145 2.00145L19.0014 2.01158C20.1055 2.01237 21 2.90757 21 4.01157L21 20C21 21.1046 20.1046 22 19 22H5Z" />
                                        <path d="M15 9.5H7M10.5556 14.5H7" />
                                    </svg>
                                    <span class="mx-4">PEDIDOS</span>
                                </div>
                            </li>
                            <li>
                                <a class="item-link-sidebar {{ request()->routeIs('admin.orders') || request()->routeIs('admin.orders.*') ? 'item-sidebar-active' : '' }}"
                                    href="{{ route('admin.orders') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round" fill="none"
                                        class="w-5 h-5">
                                        <path d="M12 4V20M20 12H4" />
                                    </svg>
                                    <span class="mx-4">
                                        GENERAR PEDIDO</span>
                                </a>
                            </li>
                            <li>
                                <a class="item-link-sidebar {{ request()->routeIs('admin.estados') ? 'item-sidebar-active' : '' }}"
                                    href="{{ route('admin.estados') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" class="w-5 h-5"
                                        stroke="currentColor" stroke-width="2" stroke-linecap="round"
                                        stroke-linejoin="round"fill="none">
                                        <path
                                            d="M8 22H6C4.11438 22 3.17157 22 2.58579 21.4142C2 20.8284 2 19.8856 2 18V16C2 14.1144 2 13.1716 2.58579 12.5858C3.17157 12 4.11438 12 6 12H8C9.88562 12 10.8284 12 11.4142 12.5858C12 13.1716 12 14.1144 12 16V18C12 19.8856 12 20.8284 11.4142 21.4142C10.8284 22 9.88562 22 8 22Z" />
                                        <path d="M6 15L8 15" />
                                        <path
                                            d="M18 2C15.7909 2 14 3.80892 14 6.04033C14 7.31626 14.5 8.30834 15.5 9.1945C16.2049 9.81911 17.0588 10.8566 17.5714 11.6975C17.8173 12.1008 18.165 12.1008 18.4286 11.6975C18.9672 10.8733 19.7951 9.81911 20.5 9.1945C21.5 8.30834 22 7.31626 22 6.04033C22 3.80892 20.2091 2 18 2Z" />
                                        <path
                                            d="M18 15V18C18 19.8856 18 20.8284 17.5314 21.4142C17.0839 21.9735 16.3761 21.9988 15 21.9999" />
                                        <path d="M18.0078 6L17.9988 6" />
                                    </svg>
                                    <span class="mx-4">REGISTRAR ESTADOS DE PEDIDO</span>
                                </a>
                            </li>
                            <li>
                                <a class="item-link-sidebar {{ request()->routeIs('admin.payments') ? 'item-sidebar-active' : '' }}"
                                    href="{{ route('admin.payments') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                        stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="block w-5 h-5">
                                        <path d="M14.5 17.5L17 20L22 14" />
                                        <path
                                            d="M11.5 20H4C2.89543 20 2 19.1046 2 18V6C2 4.89543 2.89543 4 4 4H20C21.1046 4 22 4.89543 22 6V10.5" />
                                        <path d="M5.5 11.5H5.49102" />
                                        <path
                                            d="M14.5 11.5C14.5 12.8807 13.3807 14 12 14C10.6193 14 9.5 12.8807 9.5 11.5C9.5 10.1193 10.6193 9 12 9C13.3807 9 14.5 10.1193 14.5 11.5Z" />
                                    </svg>
                                    <span class="mx-4">HISTORIAL DE PAGOS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li>
                        <ul>
                            <li>
                                <div class="item-link-sidebar !bg-inherit !text-blue-300">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" color="currentColor"
                                        fill="none" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"
                                        stroke-linejoin="round" class="block w-5 h-5">
                                        <path d="M12.5 8L10 12H14L11.5 16" />
                                        <path
                                            d="M21.011 14.1391C21.5329 13.9955 21.7939 13.9237 21.8969 13.7864C22 13.6491 22 13.4282 22 12.9865V11.0136C22 10.5719 22 10.351 21.8969 10.2137C21.7938 10.0764 21.5329 10.0046 21.011 9.86099C19.0606 9.32431 17.8399 7.24382 18.3433 5.26681C18.4817 4.72311 18.5509 4.45126 18.4848 4.29182C18.4187 4.13238 18.2291 4.0225 17.8497 3.80275L16.125 2.80363C15.7528 2.588 15.5667 2.48018 15.3997 2.50314C15.2326 2.5261 15.0442 2.71792 14.6672 3.10157C13.208 4.58689 10.7936 4.58683 9.33434 3.10147C8.95743 2.71782 8.76898 2.526 8.60193 2.50304C8.43489 2.48008 8.24877 2.5879 7.87653 2.80353L6.15184 3.80266C5.77253 4.02239 5.58287 4.13226 5.51678 4.29168C5.45068 4.4511 5.51987 4.72298 5.65825 5.26674C6.16137 7.2438 4.93972 9.32435 2.98902 9.86101C2.46712 10.0046 2.20617 10.0764 2.10308 10.2137C2 10.351 2 10.5718 2 11.0136V12.9865C2 13.4282 2 13.6491 2.10308 13.7864C2.20615 13.9237 2.46711 13.9955 2.98902 14.1391C4.9394 14.6758 6.16008 16.7563 5.65672 18.7333C5.51829 19.277 5.44907 19.5488 5.51516 19.7083C5.58126 19.8677 5.77092 19.9776 6.15025 20.1973L7.87495 21.1965C8.24721 21.4121 8.43334 21.5199 8.6004 21.497C8.76746 21.474 8.95588 21.2821 9.33271 20.8985C10.7927 19.4119 13.2088 19.4119 14.6689 20.8984C15.0457 21.2821 15.2341 21.4739 15.4012 21.4969C15.5682 21.5198 15.7544 21.412 16.1266 21.1964L17.8513 20.1972C18.2307 19.9775 18.4204 19.8676 18.4864 19.7081C18.5525 19.5487 18.4833 19.2768 18.3448 18.7332C17.8412 16.7563 19.0609 14.6758 21.011 14.1391Z" />
                                    </svg>
                                    <span class="mx-4">SERVICIOS</span>
                                </div>
                            </li>
                            <li>
                                <a class="item-link-sidebar {{ request()->routeIs('admin.services') ? 'item-sidebar-active' : '' }}"
                                    href="{{ route('admin.services') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" stroke="currentColor"
                                        stroke-width="2" stroke-linecap="round" stroke-linejoin="round"
                                        fill="none" class="w-5 h-5">
                                        <path d="M12 4V20M20 12H4" />
                                    </svg>
                                    <span class="mx-4">
                                        AGREGAR SERVICIOS</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
        <div class="w-full">
            <nav class="text-principal bg-blue-50 flex p-2">
                <div x-show="!isOpen()" class="flex" style="display: none;">
                    <button x-show="!isOpen()" @click.prevent="handleOpen()"
                        class="p-3 hover:bg-principal hover:text-white rounded-lg">
                        <svg class="h-6 w-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 6h16M4 12h16M4 18h16" />
                        </svg>
                    </button>
                    <a class="p-3 text-lg sm:text-xl" href="/">
                        {{ config('app.name') }}
                    </a>
                </div>

                @auth
                    <form class="flex ml-auto" method="POST" action="{{ route('logout') }}" x-data>
                        @csrf
                        <a title="Logout" href="{{ route('logout') }}" class="item-link-sidebar bg-principal rounded-lg"
                            @click.prevent="$root.submit();">
                            <span class="mr-4">SALIR</span>
                            <svg class="fill-current w-6 h-6 block flex-shrink-0" fill-rule="evenodd" clip-rule="evenodd"
                                stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg" aria-label="door-leave"
                                viewBox="0 0 32 32" title="door-leave">
                                <path
                                    d="M27.708,15.293c0.39,0.39 0.39,1.024 0,1.414l-4,4c-0.391,0.391 -1.024,0.391 -1.415,0c-0.39,-0.39 -0.39,-1.024 0,-1.414l2.293,-2.293l-11.586,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l11.586,0l-2.293,-2.293c-0.39,-0.39 -0.39,-1.024 0,-1.414c0.391,-0.391 1.024,-0.391 1.415,0l4,4Z">
                                </path>
                                <path
                                    d="M11.999,8c0.001,0 0.001,0 0.002,0c1.699,-0.001 2.859,0.045 3.77,0.25c0.005,0.001 0.01,0.002 0.015,0.003c0.789,0.173 1.103,0.409 1.291,0.638c0,0 0,0.001 0,0.001c0.231,0.282 0.498,0.834 0.679,2.043c0,0.001 0,0.002 0.001,0.003c0.007,0.048 0.014,0.097 0.021,0.147c0.072,0.516 0.501,0.915 1.022,0.915c0.584,0 1.049,-0.501 0.973,-1.08c-0.566,-4.332 -2.405,-4.92 -7.773,-4.92c-7,0 -8,1 -8,10c0,9 1,10 8,10c5.368,0 7.207,-0.588 7.773,-4.92c0.076,-0.579 -0.389,-1.08 -0.973,-1.08c-0.521,0 -0.95,0.399 -1.022,0.915c-0.007,0.05 -0.014,0.099 -0.021,0.147c-0.001,0.001 -0.001,0.002 -0.001,0.003c-0.181,1.209 -0.448,1.762 -0.679,2.044l0,0c-0.188,0.229 -0.502,0.465 -1.291,0.638c-0.005,0.001 -0.01,0.002 -0.015,0.003c-0.911,0.204 -2.071,0.25 -3.77,0.25c-0.001,0 -0.001,0 -0.002,0c-1.699,0 -2.859,-0.046 -3.77,-0.25c-0.005,-0.001 -0.01,-0.002 -0.015,-0.003c-0.789,-0.173 -1.103,-0.409 -1.291,-0.638l0,0c-0.231,-0.282 -0.498,-0.835 -0.679,-2.043c0,-0.001 0,-0.003 -0.001,-0.005c-0.189,-1.247 -0.243,-2.848 -0.243,-5.061c0,0 0,0 0,0c0,-2.213 0.054,-3.814 0.243,-5.061c0.001,-0.002 0.001,-0.004 0.001,-0.005c0.181,-1.208 0.448,-1.76 0.679,-2.042c0,0 0,-0.001 0,-0.001c0.188,-0.229 0.502,-0.465 1.291,-0.638c0.005,-0.001 0.01,-0.002 0.015,-0.003c0.911,-0.205 2.071,-0.251 3.77,-0.25Z">
                                </path>
                            </svg>
                        </a>
                    </form>
                @endauth
            </nav>
            <main class="p-2">
                {{ $slot }}
            </main>
        </div>
    </div>
    <script>
        function sidebar() {
            const breakpoint = 1280
            return {
                open: {
                    above: true,
                    below: false,
                },
                isAboveBreakpoint: window.innerWidth > breakpoint,

                handleResize() {
                    this.isAboveBreakpoint = window.innerWidth > breakpoint
                },

                isOpen() {
                    console.log(this.isAboveBreakpoint)
                    if (this.isAboveBreakpoint) {
                        return this.open.above
                    }
                    return this.open.below
                },
                handleOpen() {
                    if (this.isAboveBreakpoint) {
                        this.open.above = true
                    }
                    this.open.below = true
                },
                handleClose() {
                    if (this.isAboveBreakpoint) {
                        this.open.above = false
                    }
                    this.open.below = false
                },
                handleAway() {
                    if (!this.isAboveBreakpoint) {
                        this.open.below = false
                    }
                },
            }
        }
    </script>

    @stack('modals')

    @livewireScripts
    <script src="{{ asset('assets/sweetAlert2/sweetalert2.all.min.js') }}"></script>

    <script>
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

        // document.querySelectorAll("input[type=number]").forEach((input) => {
        //     input.addEventListener("keydown", event => validarNumero(event))
        // });

        //onkeypress="return validarNumeroDecimal(event)"
        function validarDecimal(event, maxlenth = 0) {
            var charCode = (event.which) ? event.which : event.keyCode;
            var charTyped = String.fromCharCode(charCode);
            var regex = /^[0-9.]+$/;
            var selectedText = window.getSelection().toString();

            if (maxlenth > 0 && !selectedText.length) {
                if (event.target.value.length >= maxlenth) {
                    return charCode == 13 ? true : false;
                }
            }

            if (regex.test(charTyped)) {
                if (charTyped === '.' && event.target.value.includes('.') && !selectedText.length) {
                    return false;
                }
                return true;
            }
            //permitir hacer enter en input
            return charCode == 13 ? true : false;
        }

        function validarNumero(event, maxlenth = 0) {
            var charCode = (event.which) ? event.which : event.keyCode;
            var charTyped = String.fromCharCode(charCode);
            var regex = /^[0-9]+$/;
            var selectedText = window.getSelection().toString();

            // Bloquear específicamente la "e" y "E"
            if (charTyped.toLowerCase() === 'e') {
                return false;
            }

            if (maxlenth > 0 && !selectedText.length) {
                if (event.target.value.length >= maxlenth) {
                    return charCode == 13 ? true : false;
                }
            }

            if (regex.test(charTyped)) {
                return true;
            }
            console.log(event);
            //permitir hacer enter en input
            return charCode == 13 ? true : false;
        }

        function validarPasteNumero(event, propiedad, maxlenth = 0) {
            const clipboardData = event.clipboardData || window.clipboardData;
            const pastedData = clipboardData.getData('Text');
            const onlyNumbers = pastedData.replace(/[^0-9]/g, '');
            event.preventDefault();

            const input = event.target;
            const start = input.selectionStart;
            const end = input.selectionEnd;

            if (start !== end) {
                input.value = input.value.substring(0, start) + onlyNumbers + input.value.substring(end);
            } else {
                input.value += onlyNumbers;
            }

            if (input.value.length > input.maxLength) {
                input.value = input.value.substring(0, input.maxLength);
            }

            const newLength = (start !== end) ? start + onlyNumbers.length : input.value.length;
            input.setSelectionRange(newLength, newLength);
            input.dispatchEvent(new Event("input"));
            return true;
        }
    </script>
</body>

</html>

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
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>
    <!-- Styles -->
    @livewireStyles
</head>

<body class="">
    <div x-cloak x-data="sidebar()" class="relative flex items-start w-full max-w-full">
        <div class="fixed top-0 z-40 transition-all duration-300">
            <div class="flex justify-end">
                <button @click="sidebarOpen = !sidebarOpen"
                    :class="{ 'hover:bg-blue-700 hover:text-white': !sidebarOpen, 'hover:bg-blue-900 text-white': sidebarOpen }"
                    class="transition-all duration-300 w-8 p-1 mx-3 my-2 rounded-full focus:outline-none text-blue-800">
                    <svg viewBox="0 0 20 20" class="w-6 h-6 fill-current" stroke="currentColor">
                        <path x-show="!sidebarOpen" fill-rule="evenodd"
                            d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM9 15a1 1 0 011-1h6a1 1 0 110 2h-6a1 1 0 01-1-1z"
                            clip-rule="evenodd"></path>
                        <path x-show="sidebarOpen" fill-rule="evenodd"
                            d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                            clip-rule="evenodd"></path>
                    </svg>
                </button>
            </div>
        </div>

        <div x-cloak wire:ignore :class="{ 'w-56': sidebarOpen, 'w-0': !sidebarOpen }"
            class="fixed top-0 bottom-0 left-0 z-30 block w-56 h-full min-h-screen overflow-y-auto text-white transition-all duration-300 ease-in-out bg-primary shadow-lg overflow-x-hidden">

            <div class="flex flex-col items-stretch justify-between h-full">
                <div class="flex flex-col flex-shrink-0 w-full">
                    <div class="flex items-center justify-center px-8 py-3 text-center">
                        <a href="#" class="text-lg leading-normal text-white focus:outline-none focus:ring">
                            Publicalín</a>
                    </div>
                    <nav>
                        <div class="flex-grow md:block md:overflow-y-auto overflow-x-hidden"
                            :class="{ 'opacity-1': sidebarOpen, 'opacity-0': !sidebarOpen }">

                            <a class="flex items-center text-white text-xs px-4 py-3 hover:bg-blue-900 hover:text-white focus:outline-none focus:ring {{ request()->routeIs('dashboard.orders') ? 'bg-blue-900 text-neutral-200' : '' }}"
                                href="{{ route('dashboard.orders') }}">
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
                                <span class="mx-4">ORDERS</span>
                            </a>

                            <a class="flex items-center text-white text-xs px-4 py-3 hover:bg-blue-900 hover:text-white focus:outline-none focus:ring {{ request()->routeIs('dashboard.services') ? 'bg-blue-900 text-neutral-200' : '' }}"
                                href="{{ route('dashboard.services') }}">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none"
                                    class="w-5 h-5" stroke="currentColor" stroke-width="2">
                                    <path
                                        d="M16 9C16 5.13401 12.866 2 9 2C5.13401 2 2 5.13401 2 9C2 12.866 5.13401 16 9 16" />
                                    <path
                                        d="M16 9H15C12.1716 9 10.7574 9 9.87868 9.87868C9 10.7574 9 12.1716 9 15V16C9 18.8284 9 20.2426 9.87868 21.1213C10.7574 22 12.1716 22 15 22H16C18.8284 22 20.2426 22 21.1213 21.1213C22 20.2426 22 18.8284 22 16V15C22 12.1716 22 10.7574 21.1213 9.87868C20.2426 9 18.8284 9 16 9Z" />
                                </svg>
                                <span class="mx-4">SERVICIOS</span>
                            </a>
                            <a class="flex items-center text-white text-xs px-4 py-3 hover:bg-blue-900 hover:text-white focus:outline-none focus:ring {{ request()->routeIs('dashboard.estados') ? 'bg-blue-900 text-neutral-200' : '' }}"
                                href="{{ route('dashboard.estados') }}">
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
                                <span class="mx-4">ESTADOS DE SEGUIMIENTO</span>
                            </a>
                        </div>
                    </nav>
                </div>
                <div>
                    <form method="POST" action="{{ route('logout') }}" x-data class="">
                        @csrf

                        <a title="Logout" href="{{ route('logout') }}"
                            class="flex gap-2 items-center px-4 text-white text-xs py-3 hover:bg-blue-900"
                            @click.prevent="$root.submit();">
                            <svg class="text-white fill-current w-6 h-6 block flex-shrink-0" fill-rule="evenodd"
                                clip-rule="evenodd" stroke-linejoin="round" xmlns="http://www.w3.org/2000/svg"
                                aria-label="door-leave" viewBox="0 0 32 32" title="door-leave">
                                <path
                                    d="M27.708,15.293c0.39,0.39 0.39,1.024 0,1.414l-4,4c-0.391,0.391 -1.024,0.391 -1.415,0c-0.39,-0.39 -0.39,-1.024 0,-1.414l2.293,-2.293l-11.586,0c-0.552,0 -1,-0.448 -1,-1c0,-0.552 0.448,-1 1,-1l11.586,0l-2.293,-2.293c-0.39,-0.39 -0.39,-1.024 0,-1.414c0.391,-0.391 1.024,-0.391 1.415,0l4,4Z">
                                </path>
                                <path
                                    d="M11.999,8c0.001,0 0.001,0 0.002,0c1.699,-0.001 2.859,0.045 3.77,0.25c0.005,0.001 0.01,0.002 0.015,0.003c0.789,0.173 1.103,0.409 1.291,0.638c0,0 0,0.001 0,0.001c0.231,0.282 0.498,0.834 0.679,2.043c0,0.001 0,0.002 0.001,0.003c0.007,0.048 0.014,0.097 0.021,0.147c0.072,0.516 0.501,0.915 1.022,0.915c0.584,0 1.049,-0.501 0.973,-1.08c-0.566,-4.332 -2.405,-4.92 -7.773,-4.92c-7,0 -8,1 -8,10c0,9 1,10 8,10c5.368,0 7.207,-0.588 7.773,-4.92c0.076,-0.579 -0.389,-1.08 -0.973,-1.08c-0.521,0 -0.95,0.399 -1.022,0.915c-0.007,0.05 -0.014,0.099 -0.021,0.147c-0.001,0.001 -0.001,0.002 -0.001,0.003c-0.181,1.209 -0.448,1.762 -0.679,2.044l0,0c-0.188,0.229 -0.502,0.465 -1.291,0.638c-0.005,0.001 -0.01,0.002 -0.015,0.003c-0.911,0.204 -2.071,0.25 -3.77,0.25c-0.001,0 -0.001,0 -0.002,0c-1.699,0 -2.859,-0.046 -3.77,-0.25c-0.005,-0.001 -0.01,-0.002 -0.015,-0.003c-0.789,-0.173 -1.103,-0.409 -1.291,-0.638l0,0c-0.231,-0.282 -0.498,-0.835 -0.679,-2.043c0,-0.001 0,-0.003 -0.001,-0.005c-0.189,-1.247 -0.243,-2.848 -0.243,-5.061c0,0 0,0 0,0c0,-2.213 0.054,-3.814 0.243,-5.061c0.001,-0.002 0.001,-0.004 0.001,-0.005c0.181,-1.208 0.448,-1.76 0.679,-2.042c0,0 0,-0.001 0,-0.001c0.188,-0.229 0.502,-0.465 1.291,-0.638c0.005,-0.001 0.01,-0.002 0.015,-0.003c0.911,-0.205 2.071,-0.251 3.77,-0.25Z">
                                </path>
                            </svg>
                            SALIR
                        </a>
                    </form>
                </div>
            </div>

            <script>
                function sidebar() {
                    return {
                        sidebarOpen: false,
                        sidebarProductMenuOpen: false,
                        openSidebar() {
                            this.sidebarOpen = true
                        },
                        closeSidebar() {
                            this.sidebarOpen = false
                        },
                        sidebarProductMenu() {
                            if (this.sidebarProductMenuOpen === true) {
                                this.sidebarProductMenuOpen = false
                                window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                            } else {
                                this.sidebarProductMenuOpen = true
                                window.localStorage.setItem('sidebarProductMenuOpen', 'open');
                            }
                        },
                        checkSidebarProductMenu() {
                            if (window.localStorage.getItem('sidebarProductMenuOpen')) {
                                if (window.localStorage.getItem('sidebarProductMenuOpen') === 'open') {
                                    this.sidebarProductMenuOpen = true
                                } else {
                                    this.sidebarProductMenuOpen = false
                                    window.localStorage.setItem('sidebarProductMenuOpen', 'close');
                                }
                            }
                        },
                    }
                }
            </script>
        </div>

        <div :class="{ 'ml-56': sidebarOpen, 'ml-0 pt-12': !sidebarOpen }"
            class="w-full flex-1 flex-col p-1 lg:p-3 ml-56 transition-all duration-300 md:flex md:flex-col min-h-screen">

            {{ $slot }}

        </div>
    </div>


    {{-- <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <main>
            {{ $slot }}
        </main>
    </div> --}}

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
    </script>
</body>

</html>

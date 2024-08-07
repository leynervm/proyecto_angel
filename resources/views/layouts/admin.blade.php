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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Kdam+Thmor+Pro&family=Tilt+Neon&display=swap');

        * {
            font-family: "Kdam Thmor Pro", sans-serif;
            font-weight: 300;
            font-style: normal;
        }
    </style>
    @livewireStyles
</head>

<body class="font-sans antialiased">
    <x-banner />

    <div class="min-h-screen bg-gray-100">
        @livewire('navigation-menu')

        <!-- Page Heading -->
        @if (isset($header))
            <header class="bg-white shadow">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endif

        <!-- Page Content -->
        <main>
            {{ $slot }}
        </main>
    </div>

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

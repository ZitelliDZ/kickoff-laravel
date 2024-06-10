<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link href="{{ asset('web/css/style.css') }}" rel="stylesheet" type="text/css">

    <!-- Styles -->
    @stack('styles')
    @livewireStyles

    <script>
        tailwind.config = {
            darkMode: 'class',
        }
    </script>

<body class="font-sans antialiased  body">


    {{-- <x-banner /> --}}
    <livewire:layout.sidebar />

    <div class="content">
        <div
            class=" flex flex-row | justify-between | items-center | pt-3 pe-5 | cabecera | fixed | w-[calc(100%-250px)] | backdrop-filter | backdrop-blur-sm | shadow-md | z-30 ">
            @if (isset($header))
                <header class="">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <livewire:layout.profile />


        </div>

        <!-- Page Content -->
        <main class="pt-[100px]"
            {{ $slot }}
        </main>
    </div>

    {{-- <div class="min-h-screen bg-gray-100">
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
        </div> --}}

    @stack('modals')

    @livewireScripts
</body>
@stack('scripts')
<script>
    if (localStorage.theme === 'dark') {
        // Si el tema guardado es 'dark2', añade la clase 'dark2' al body
        document.body.classList.add('dark2');
        document.documentElement.classList.add('dark')
        localStorage.theme = 'dark'
    } else {

        document.querySelector('.body').classList.remove('dark2')
        document.documentElement.classList.remove('dark')
        localStorage.theme = 'light'
    }
</script>

</html>

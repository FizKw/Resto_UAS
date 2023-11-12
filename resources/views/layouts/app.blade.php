






<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Inni Foods') }}</title>
        <link rel="icon" href="{!! asset('Inni.png') !!}"/>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;900&display=swap" rel="stylesheet">
       

        
        <!-- Scripts -->
        <script src="https://unpkg.com/feather-icons"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
        
    </head>
    <body class="font-poppins antialiased min-h-screen bg-[#5B0017]">
        <div class="min-h-screen bg-color3">
            {{-- Navbar masuk disini --}}
            <livewire:navbar.navigation />

            {{-- Page Content  --}}
            <main class="pt-10">
                {{ $slot }}
            </main>
        </div>
    <script>feather.replace();</script>
    

    </body>
</html>

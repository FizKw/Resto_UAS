<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'INNI Foods') }}</title>
        <link rel="icon" href="{{ asset('asset/logo.png') }}"/>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;900&display=swap" rel="stylesheet">
        
        <!-- Scripts -->
        <script src="https://unpkg.com/feather-icons"></script>
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-poppins antialiased w-full n bg-[#5B0017] relative">
        <img src="{{ asset('asset/vector/matahari.png') }}" class="absolute -bottom-3 sm:w-14 w-8">
        <section class="mt-36 mx-8 max-h-screen">
            {{ $slot }}
        </section>           
    <script>feather.replace();</script>
    </body>
</html>

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-900 antialiased">
    <header class="relative flex items-center justify-center h-screen overflow-hidden">
        <div class="relative z-30 p-5 w-96 text-black bg-white rounded-xl border-2 border-gray-500 opacity-95">
            {{ $slot }}
        </div>
        <video autoplay loop muted class="absolute z-10">
            <source src="{{ asset('video/brgyhome.mp4') }}" type="video/mp4" />
        </video>
    </header>
</body>

</html>
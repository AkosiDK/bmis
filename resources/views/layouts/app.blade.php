<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
        <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
        <script src="https://cdn.tailwindcss.com"></script>

        <!-- Scripts -->
        @livewireStyles
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200 md:pl-64">
            
            <header class="flex items-center h-20 md:h-auto" x-data="{ open: false }">
                <nav class="relative flex items-center w-full px-4">
                    <!-- Mobile Header -->
                    <div class="inline-flex items-center justify-center w-full md:hidden print:hidden">
                        <a href="#" @click="open = true" @click.away="open = false" class="absolute left-0 pl-2">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-7 w-7 stroke-blue-600" fill="currentColor" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M4 6h16M4 12h8m-8 6h16" />
                            </svg>
                        </a>
                        <a href="#">
                            <h2 class="text-2xl font-extrabold text-blue-600 print:hidden">{{ config('app.name', 'Laravel') }}</h2>
                        </a>
                    </div>
                    
                    @include('layouts.sidebar')
                    
                </nav>
            </header>

            <!-- Page Heading -->
            <div class="h-auto py-3.5 bg-gradient-to-r from-blue-600 to-blue-500">
                <div class="w-full px-3.5 mx-auto">
                    <div class="flex flex-wrap -mx-3.5 items-center">
                        <div class="flex-[0_0_100%] max-w-full w-full relative px-3.5 print:hidden">
                            <!-- Breadcrumbs -->
                            <nav class="text-blue-100 print:hidden">
                                {{ $breadcrumb }}
                            </nav>
                            <!-- Title -->
                            {{ $header }}
                        </div>
                    </div>
                </div>
            </div>

            <!-- Page Content -->
            <main class="pt-4 w-full px-4 mx-auto">
                {{ $slot }}
            </main>
            
        </div>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.js"></script>
        @livewireScripts
    </body>
</html>

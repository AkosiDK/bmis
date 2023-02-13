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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
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
                <div class="grid grid-cols-12">
                    <div class="col-span-6">
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
                    <div class="col-span-6 justify-end flex place-items-center">
                        <div class="relative">
                            <img type="button" class="w-10 h-10 rounded-full cursor-pointer ring-2 ring-gray-300  bg-white" src="{{ asset('img/defaultavatar.png') }}" alt="User dropdown" data-dropdown-toggle="userDropdown" data-dropdown-placement="bottom-start">
                            <span class="top-0 left-7 absolute  w-3.5 h-3.5 bg-green-400 border-2 border-white dark:border-gray-800 rounded-full"></span>
                            <!-- Dropdown menu -->
                            <div id="userDropdown" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700 dark:divide-gray-600">
                                <div class="px-4 py-3 text-sm text-gray-900 dark:text-white">
                                    <div>{{ auth()->user()->name }}</div>
                                    <div class="font-medium truncate">{{ auth()->user()->email }}</div>
                                </div>
                                <div class="py-1">
                                    <form method="POST" action="{{ route('logout') }}">
                                        @csrf
                                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" onclick="event.preventDefault();this.closest('form').submit();">
                                            Sign out
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
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
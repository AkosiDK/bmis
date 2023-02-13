<!-- Sidebar Menu -->
<div :class="{ '!translate-x-0': open }" class="fixed top-0 left-0 z-20 w-9/12 h-screen overflow-y-auto transition duration-300 ease-in-out transform -translate-x-full bg-gray-800 shadow-2xl sm:w-64 md:translate-x-0">
    <!-- Sidebar Header -->
    <div class="flex items-center h-20">
        <div class="inline-flex items-center justify-center w-full md:justify-center">
            <!-- Hamburger -->
            <a href="#" @click="open = !open" class="absolute right-0 top-0 mr-1.5 mt-1.5 inline-flex p-1 items-center justify-center rounded-md hover:bg-blue-100 md:hidden">
                <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5 stroke-blue-600" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                </svg>
            </a>
            <!-- Logo -->
            <img src="{{ asset('img/logo.png') }}" alt="logo" class="inline-block w-10 px-1"/>
            <h2 class="text-xl font-extrabold text-white"><a href="#"> {{ config('app.name', 'Laravel') }}</a></h2>
        </div>
    </div>
    <!-- Profile Section -->
    <div class="divide-y divide-gray-100 divide-solid">
        <div class="p-5 text-center">
            <!-- Profile Picture -->
            <a href="" class="inline-block w-auto p-2 mb-4 border-2 border-blue-600 rounded-full">
                <img src="{{ asset('img/brgylogo.png') }}" alt="" class="object-cover object-top w-32 h-32 align-top rounded-full">
            </a>
            <!-- Profile Info -->
            <div>
                <div>
                    <h5 class="overflow-hidden text-xs whitespace-nowrap overflow-ellipsis text-white font-bold">
                        ADMINISTRATOR
                    </h5>
                </div>
            </div>
        </div>
    </div>
    <!-- Navigation Links -->
    <div class="flex flex-col mb-0 ml-0">
        <x-sidebar-nav-link :href="route('dashboard')" :active="request()->routeIs('dashboard')">
            <x-slot name="icon">
                <x-fas-home class="w-4 mr-4 fill-white"/>
            </x-slot>
            <p class="text-white">{{ __('Dashboard') }}</p>
        </x-sidebar-nav-link>

        <x-sidebar-nav-link :href="route('officials.index')" :active="request()->routeIs('officials.index')">
            <x-slot name="icon">
                <x-fas-user-tie class="w-4 mr-4 fill-white"/>
            </x-slot>
            <p class="text-white">{{ __('Barangay Officials') }}</p>
        </x-sidebar-nav-link>

        <!-- Ayaw Gumana -->

        <x-sidebar-nav-link :href="route('resident.index')" :active="request()->routeIs('resident.index')">
            <x-slot name="icon">
            <x-fas-user class="w-4 mr-4 fill-white"/>
            </x-slot>
            <p class="text-white">{{ __('Barangay Residents') }}</p>
        </x-sidebar-nav-link>

        <x-sidebar-nav-link :href="route('residentrequest')" :active="request()->routeIs('residentrequest')">
            <x-slot name="icon">
            <x-fas-file-lines class="w-4 mr-4 fill-white"/>
            </x-slot>
            <p class="text-white">{{ __('Barangay Residents Request') }}</p>
        </x-sidebar-nav-link>

        <x-sidebar-nav-link :href="route('settings')" :active="request()->routeIs('settings')">
            <x-slot name="icon">
            <x-fas-gear class="w-4 mr-4 fill-white" />
            </x-slot>
            <p class="text-white">{{ __('Settings') }}</p>
        </x-sidebar-nav-link>
    </div>
</div>
<div :class="{ '!inline': open }" class="z-10 fixed top-0 left-0 w-screen h-screen bg-gray-900 bg-opacity-30 hidden md:!hidden transition ease-in-out duration-300"></div>
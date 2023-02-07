<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Dashboard
        </h2>
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>

    <div class="">
        <div class="mx-auto">
            <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
                <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                    <div class="grid grid-cols-5 gap-5">
                        <div class="col-span-1">
                            <li role="presentation">
                                <button class="rounded-lg drop-shadow-xl bg-blue-600 hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring focus:ring-blue-500" id="totalblotter-tab" data-tabs-target="#totalblotter" role="tab" aria-controls="totalblotter" aria-selected="true">
                                    <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-11">
                                                <p class="font-bold text-white text-start dashboardcounter" data-target="8000" style="font-size:25px;">0</p>
                                                <p class="text-white text-start">POPULATION</p>
                                            </div>
                                            <div>
                                                <x-fas-user-large fill="white" class="w-8 h-8" />
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12">
                                                <p class="text-white text-end text-xs pt-8 tracking-widest">Total Population</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>


                            </li>
                        </div>
                        <div class="col-span-1">
                            <li role="presentation">
                                <button class="rounded-lg drop-shadow-xl bg-green-600 hover:bg-green-700 active:bg-green-800 focus:outline-none focus:ring focus:ring-green-500" id="activeblotter-tab" data-tabs-target="#activeblotter" role="tab" aria-controls="activeblotter" aria-selected="false">
                                    <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-11">
                                                <p class="font-bold text-white text-start dashboardcounter" data-target="7000" style="font-size:25px;">0</p>
                                                <p class="text-white text-start">VOTERS</p>
                                            </div>
                                            <div>
                                                <x-fas-user-check fill="white" class="w-8 h-8" />
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12">
                                                <p class="text-white text-end text-xs pt-8 tracking-widest">Total Voters</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </div>
                        <div class="col-span-1">
                            <li role="presentation">
                                <button class="rounded-lg drop-shadow-xl bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:ring focus:ring-yellow-400" id="settledblotter-tab" data-tabs-target="#settledblotter" role="tab" aria-controls="settledblotter" aria-selected="false">
                                    <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-11">
                                                <p class="font-bold text-white text-start dashboardcounter" data-target="6000" style="font-size:25px;">0</p>
                                                <p class="text-white text-start">NON VOTERS</p>
                                            </div>
                                            <div>
                                                <x-fas-user-xmark fill="white" class="w-8 h-8" />

                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12">
                                                <p class="text-white text-end text-xs pt-8 tracking-widest">Total Non Voters</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </div>
                        <div class="col-span-1">
                            <li role="presentation">
                                <button class="rounded-lg drop-shadow-xl bg-sky-500 hover:bg-sky-600 active:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-400" id="scheduledblotter-tab" data-tabs-target="#scheduledblotter" role="tab" aria-controls="scheduledblotter" aria-selected="false">
                                    <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-11">
                                                <p class="font-bold text-white text-start dashboardcounter" data-target="5000" style="font-size:25px;">0</p>
                                                <p class="text-white text-start">SENIOR CITIZEN</p>
                                            </div>
                                            <div>
                                                <x-fas-user-group fill="white" class="w-8 h-8" />
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12">
                                                <p class="text-white text-end text-xs pt-8 tracking-widest">Total Senior Citizen</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </div>
                        <div class="col-span-1">
                            <li role="presentation">
                                <button class="rounded-lg drop-shadow-xl bg-red-500 hover:bg-red-600 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-400" id="unscheduledblotter-tab" data-tabs-target="#unscheduledblotter" role="tab" aria-controls="unscheduledblotter" aria-selected="false">
                                    <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-11">
                                                <p class="font-bold text-white text-start dashboardcounter" data-target="3000" style="font-size:25px;">0</p>
                                                <p class="text-white text-start">PWD</p>
                                            </div>
                                            <div>
                                                <x-fas-wheelchair fill="white" class="w-8 h-8" />
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12">
                                            <div class="col-span-12">
                                                <p class="text-white text-end text-xs pt-8 tracking-widest">Total PWD</p>
                                            </div>
                                        </div>
                                    </div>
                                </button>
                            </li>
                        </div>
                    </div>
                </ul>
            </div>

            <div id="myTabContent">
                <div class="grid grid-cols-12 gap-x-5 rounded-lg" id="totalblotter" role="tabpanel" aria-labelledby="totalblotter-tab">
                    <div class="col-span-12">
                        <div class="bg-white dark:bg-gray-800 rounded-lg">
                            <div class="grid grid-cols-12">
                                <div class="col-span-9 py-6 px-5">
                                    <div class="text-xl font-bold text-start">Barangay Population</div>
                                </div>

                                <div class="col-span-3 py-3 px-5">
                                    <form class="">
                                        <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Fullname
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                National ID
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alias
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Gender
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Age
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Birthday
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Civil Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Voters Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                PWD
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Address
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alived/Deceased
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-gray-100 dark:bg-gray-800">
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Darryl Kaye A. Sanga
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            123456789123
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            DA
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Male
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            21
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            01/01/2005
                                        </td>

                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Married
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                                Alived
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                </div>
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Previous</span>
                                                <!-- Heroicon name: mini/chevron-left -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Next</span>
                                                <!-- Heroicon name: mini/chevron-right -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="grid grid-cols-12 gap-x-5 hidden" id="activeblotter" role="tabpanel" aria-labelledby="activeblotter-tab">
                    <div class="col-span-12">
                        <div class="bg-white dark:bg-gray-800 rounded-lg">
                            <div class="grid grid-cols-12">
                                <div class="col-span-9 py-6 px-5">
                                    <div class="text-xl font-bold text-start">Barangay Voters</div>
                                </div>

                                <div class="col-span-3 py-3 px-5">
                                    <form class="">
                                        <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Fullname
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                National ID
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alias
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Gender
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Age
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Birthday
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Civil Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Voters Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                PWD
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Address
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alived/Deceased
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-gray-100 dark:bg-gray-800">
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Darryl Kaye A. Sanga
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            123456789123
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            DA
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Male
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            21
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            01/01/2005
                                        </td>

                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Married
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                                Alived
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                </div>
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Previous</span>
                                                <!-- Heroicon name: mini/chevron-left -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Next</span>
                                                <!-- Heroicon name: mini/chevron-right -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-5 hidden" id="settledblotter" role="tabpanel" aria-labelledby="settledblotter-tab">
                    <div class="col-span-12">
                        <div class="bg-white dark:bg-gray-800 rounded-lg">
                            <div class="grid grid-cols-12">
                                <div class="col-span-9 py-6 px-5">
                                    <div class="text-xl font-bold text-start">Barangay Non-Voters</div>
                                </div>

                                <div class="col-span-3 py-3 px-5">
                                    <form class="">
                                        <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Fullname
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                National ID
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alias
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Gender
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Age
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Birthday
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Civil Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Voters Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                PWD
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Address
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alived/Deceased
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-gray-100 dark:bg-gray-800">
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Darryl Kaye A. Sanga
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            123456789123
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            DA
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Male
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            21
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            01/01/2005
                                        </td>

                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Married
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                                Alived
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                </div>
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Previous</span>
                                                <!-- Heroicon name: mini/chevron-left -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Next</span>
                                                <!-- Heroicon name: mini/chevron-right -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-5 hidden" id="scheduledblotter" role="tabpanel" aria-labelledby="scheduledblotter-tab">
                    <div class="col-span-12">
                        <div class="bg-white dark:bg-gray-800 rounded-lg">
                            <div class="grid grid-cols-12">
                                <div class="col-span-9 py-6 px-5">
                                    <div class="text-xl font-bold text-start">Barangay Senior Citizen</div>
                                </div>

                                <div class="col-span-3 py-3 px-5">
                                    <form class="">
                                        <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Fullname
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                National ID
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alias
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Gender
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Age
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Birthday
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Civil Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Voters Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                PWD
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Address
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alived/Deceased
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-gray-100 dark:bg-gray-800">
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Darryl Kaye A. Sanga
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            123456789123
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            DA
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Male
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            21
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            01/01/2005
                                        </td>

                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Married
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                                Alived
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                </div>
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Previous</span>
                                                <!-- Heroicon name: mini/chevron-left -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Next</span>
                                                <!-- Heroicon name: mini/chevron-right -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="grid grid-cols-12 gap-x-5 hidden" id="unscheduledblotter" role="tabpanel" aria-labelledby="unscheduledblotter-tab">
                    <div class="col-span-12">
                        <div class="bg-white dark:bg-gray-800 rounded-lg">
                            <div class="grid grid-cols-12">
                                <div class="col-span-9 py-6 px-5">
                                    <div class="text-xl font-bold text-start">Barangay PWD</div>
                                </div>

                                <div class="col-span-3 py-3 px-5">
                                    <form class="">
                                        <label for="default-search" class="text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                        <div class="relative">
                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                                </svg>
                                            </div>
                                            <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                            <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                                <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                    <tr>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Fullname
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                National ID
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alias
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Gender
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Age
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Birthday
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Civil Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Voters Status
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                PWD
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Address
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>
                                        <th scope="col" class="px-6 py-3">
                                            <div class="flex items-center">
                                                Alived/Deceased
                                                <a href="#">
                                                    <x-fas-sort class="w-3 h-3" />
                                                </a>
                                            </div>
                                        </th>

                                    </tr>
                                </thead>
                                <tbody>

                                    <tr class="bg-gray-100 dark:bg-gray-800">
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Darryl Kaye A. Sanga
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            123456789123
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            DA
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Male
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            21
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            01/01/2005
                                        </td>

                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Married
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Yes
                                        </td>
                                        <td class="px-6 py-2 text-clip overflow-hidden ...">
                                            Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                        </td>
                                        <td class="px-6 py-2">
                                            <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                                Alived
                                            </span>
                                        </td>

                                    </tr>
                                </tbody>

                            </table>
                            <div class="flex items-center justify-between border-t border-gray-200 bg-white px-4 py-3 sm:px-6">
                                <div class="flex flex-1 justify-between sm:hidden">
                                    <a href="#" class="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Previous</a>
                                    <a href="#" class="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50">Next</a>
                                </div>
                                <div class="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                                    <div>
                                        <p class="text-sm text-gray-700">
                                            Showing
                                            <span class="font-medium">1</span>
                                            to
                                            <span class="font-medium">10</span>
                                            of
                                            <span class="font-medium">97</span>
                                            results
                                        </p>
                                    </div>
                                    <div>
                                        <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
                                            <a href="#" class="relative inline-flex items-center rounded-l-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Previous</span>
                                                <!-- Heroicon name: mini/chevron-left -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M12.79 5.23a.75.75 0 01-.02 1.06L8.832 10l3.938 3.71a.75.75 0 11-1.04 1.08l-4.5-4.25a.75.75 0 010-1.08l4.5-4.25a.75.75 0 011.06.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                            <!-- Current: "z-10 bg-indigo-50 border-indigo-500 text-indigo-600", Default: "bg-white border-gray-300 text-gray-500 hover:bg-gray-50" -->
                                            <a href="#" aria-current="page" class="relative z-10 inline-flex items-center border border-indigo-500 bg-indigo-50 px-4 py-2 text-sm font-medium text-indigo-600 focus:z-20">1</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">2</a>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">3</a>
                                            <span class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700">...</span>
                                            <a href="#" class="relative hidden items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20 md:inline-flex">8</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">9</a>
                                            <a href="#" class="relative inline-flex items-center border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">10</a>
                                            <a href="#" class="relative inline-flex items-center rounded-r-md border border-gray-300 bg-white px-2 py-2 text-sm font-medium text-gray-500 hover:bg-gray-50 focus:z-20">
                                                <span class="sr-only">Next</span>
                                                <!-- Heroicon name: mini/chevron-right -->
                                                <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                                                    <path fill-rule="evenodd" d="M7.21 14.77a.75.75 0 01.02-1.06L11.168 10 7.23 6.29a.75.75 0 111.04-1.08l4.5 4.25a.75.75 0 010 1.08l-4.5 4.25a.75.75 0 01-1.06-.02z" clip-rule="evenodd" />
                                                </svg>
                                            </a>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>

    <div class="mx-auto py-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>

    <script>
        const counters = document.querySelectorAll('.dashboardcounter');
        const speed = 200;

        counters.forEach(dashboardcounter => {
            const updateCount = () => {
                const target = +dashboardcounter.getAttribute('data-target');
                const count = +dashboardcounter.textContent;

                const inc = target / speed;

                if (count < target) {
                    dashboardcounter.textContent = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    count.textContent = target;
                }
            }

            updateCount();
        });
    </script>
</x-app-layout>
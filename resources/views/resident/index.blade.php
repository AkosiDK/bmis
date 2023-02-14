<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Barangay Residents
        </h2>
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-lg">
            <div class="grid grid-cols-4">
                <div class="rounded-lg col-span-4 py-2">
                    <div class="text-center">
                        <p class="text-xs font-bold">Republic of the Philippines</p>
                        <p class="text-xs font-bold">Province of Misamis Oriental</p>
                        <p class="text-xs font-bold">Municipality of Tagoloan, 9001</p>
                        <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24">
                        <p class="text-xl font-bold">BRGY. BALUARTE</p>
                        <p class="text-xs font-bold">Contact No.: 09123456789</p>
                        <p class="text-xs font-bold">Email: brgybaluarte@gmail.com</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mx-auto pt-5">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-lg">
            <div class="grid grid-cols-4 gap-5">
                <div class="rounded-lg col-span-4">
                    <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                        <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Resident Information</div>
                        <div class="grid grid-cols-12">
                            <div class="col-span-3">
                                <form class="pb-5 pl-5">
                                    <label for="default-search" class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-white">Search</label>
                                    <div class="relative">
                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                                            </svg>
                                        </div>
                                        <input type="search" id="default-search" class="block w-full p-4 pl-10 text-sm text-gray-900 border border-gray-300 rounded-lg bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search by name..." required>
                                        <button type="button" id="search-button" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Resident">Search</button>
                                        <script>
                                            const searchButton = document.querySelector('#search-button');
                                            searchButton.addEventListener('click', function() {
                                                const searchTerm = document.querySelector('#default-search').value;
                                                window.location.href = `http://127.0.0.1:8000/admin/resident/search/${searchTerm}`;
                                            });
                                            
                                        </script>
                                    </div>
                                </form>
                            </div>
                            <div class="col-span-9 pt-2 justify-self-end px-5">
                                <!-- add Resident Modal -->
                                <button data-modal-target="addresident-modal" data-modal-toggle="addresident-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Resident">
                                    <x-fas-user-plus class="w-4 h-4 mr-1" fill="white" />
                                    Resident
                                </button>
                                {{-- <!-- Insert Resident Modal -->
                                <livewire:residents.addresident /> --}}
                            </div>
                        </div>
                        {{-- <livewire:residents.residentstable /> --}}
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
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Action
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($residents as $resident)
                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->firstname }} {{$resident->middlename }} {{$resident->lastname }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->nationalid }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->alias}}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->gender}}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{ \Carbon\Carbon::parse($resident->birthdate)->age }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->birthdate }}
                                    </td>

                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->civilstatus }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->voterstatus }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        {{$resident->pwd }}
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        Zone 6B, Baluarte, Tagoloan, Mis. Or.
                                    </td>
                                    <td class="px-6 py-2">
                                        <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                                            {{$resident->alivedordeceased }}
                                        </span>
                                    </td>
                                    {{-- TODO: --}}
                                    <td class="px-6 py-2">
                                        <a href="{{ route('resident.show', $resident->id) }}" data-modal-target="viewresident-modal" data-modal-toggle="viewresident-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="View Resident">
                                            <x-fas-eye class="w-4 h-4  fill-green-600" />
                                        </a>
                                        <a href="{{ route('resident.edit', $resident->id) }}" data-modal-target="editresident-modal" data-modal-toggle="editresident-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Resident">
                                            <x-fas-square-pen class="w-4 h-4  fill-blue-600" />
                                        </a>
                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Official">
                                            <x-fas-square-xmark class=" w-4 h-4 fill-red-600" />
                                        </button>
                                        {{-- <!-- Update Modal -->
                                        
                                        <!-- Insert Update Modal -->

                                        <livewire:residents.updateresident>

                                            <!-- View Resident Modal -->
                                            <button data-modal-target="viewresident-modal" data-modal-toggle="viewresident-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="View Resident">
                                                <x-fas-eye class="w-4 h-4  fill-green-600" />
                                            </button>

                                            <!-- Insert View Modal -->

                                            <livewire:residents.viewresident>

                                                <!-- Delete Default Modal -->
                                                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Official">
                                                    <x-fas-square-xmark class=" w-4 h-4 fill-red-600" />
                                                </button>

                                                <!-- Delete Default Modal -->
                                                <div id="popup-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                                    <div class="relative w-full h-full max-w-md md:h-auto">
                                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                            <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-hide="popup-modal">
                                                                <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                                </svg>
                                                                <span class="sr-only">Close modal</span>
                                                            </button>
                                                            <div class="p-6 text-center">
                                                                <svg aria-hidden="true" class="mx-auto mb-4 text-red-500 w-14 h-14 dark:text-gray-200" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                                                </svg>
                                                                <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you
                                                                    sure you want to delete this Brgy. Official?</h3>
                                                                <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                                    Yes, I'm sure
                                                                </button>
                                                                <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                                                    cancel</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div> --}}
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>


                    </div>
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
                                {{ $residents->links() }}
                                {{-- <nav class="isolate inline-flex -space-x-px rounded-md shadow-sm" aria-label="Pagination">
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
                                    </nav> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <div class="pt-5">
        <hr>
    </div>
    <div class="mx-auto pt-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>
</x-app-layout>
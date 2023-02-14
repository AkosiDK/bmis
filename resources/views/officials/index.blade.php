<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Barangay Officials
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
                        <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Officials</div>
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
                                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Official">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-span-9 pt-2 justify-self-end px-5">
                                <button data-modal-target="addofficial-modal" data-modal-toggle="addofficial-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Official">
                                    <x-fas-user-plus class="w-4 h-4 mr-1" fill="white" />
                                    Official
                                </button>
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
                                            Contact
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Chairmanship
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Position
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
                                            Term Start
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Term End
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Status
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
                                @foreach($officials as $official)
                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="px-6 py-2">
                                        {{$official->fullname }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->contact }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->chairmanship }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->position }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->address }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->termstart }}
                                    </td>
                                    <td class="px-6 py-2">
                                        {{$official->termend }}
                                    </td>
                                    <td class="px-6 py-2">
                                        <span class="{{ $official->status === 'Active' ? 'bg-green-600' : 'bg-red-600' }} text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is {{ $official->status }}">
                                            {{$official->status }}
                                        </span>
                                    </td>

                                    <td class="px-6 py-2">
                                        <!-- Update Modal -->
                                        <button data-modal-target="medium-modal" data-modal-toggle="medium-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Official">
                                            <x-fas-square-pen class="w-5  fill-blue-600" />
                                        </button>
                                        <!-- Update Modal -->
                                        <div id="medium-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full max-w-lg md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                        <h3 class="text-xl font-medium text-white dark:text-white">
                                                            Edit - Brgy. Official Record
                                                        </h3>
                                                        <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="medium-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>
                                                    <!-- Modal body -->

                                                    <form class="space-y-6" action="#">
                                                        <div class="p-6 space-y-3">
                                                            <!-- Fullname -->
                                                            <label for="fullname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Full Name</label>
                                                            <input type="name" name="fullname" id="fullname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Darryl Kaye A. Sanga" required>

                                                            <!-- Contact -->
                                                            <label for="contact" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                                            <input type="number" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="09123456789" required>

                                                            <!-- Chairmanship -->
                                                            <label for="chairmanship" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Chairmanship</label>
                                                            <select id="chairmanship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option>Choose a Chairmanship</option>
                                                                <option selected>Presiding officer 1</option>
                                                                <option>Committee on Peacer & Order</option>
                                                            </select>

                                                            <!-- Position -->
                                                            <label for="position" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Position</label>
                                                            <select id="position" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option>Choose a Position</option>
                                                                <option selected>Administrative Aid</option>
                                                                <option>SK Chairperson</option>
                                                            </select>

                                                            <!-- terms -->
                                                            <div class="grid grid-cols-4 gap-3">
                                                                <div class="col-span-2">
                                                                    <label for="termstart" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Term Start</label>
                                                                    <div class="relative">
                                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <input datepicker type="text" id="termstart" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="05/01/2023">
                                                                    </div>
                                                                </div>
                                                                <div class="col-span-2">
                                                                    <label for="termend" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Term End</label>
                                                                    <div class="relative">
                                                                        <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                            <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                                <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                            </svg>
                                                                        </div>
                                                                        <input datepicker type="text" id="termend" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="05/01/2026">
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Address -->
                                                            <label for="address" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Address</label>
                                                            <input type="text" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Zone 6B, Baluarte, Tagoloan Mis. Or." required>

                                                            <!-- Status -->
                                                            <label for="status" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                            <select id="status" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                <option>Choose a Status</option>
                                                                <option selected>Active</option>
                                                                <option>InActive</option>
                                                            </select>

                                                        </div>

                                                    </form>
                                                    <!-- Modal footer -->
                                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                        <button data-modal-hide="medium-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                        <button data-modal-hide="medium-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Delete Default Modal -->
                                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Official">
                                            <x-fas-square-xmark class=" w-5 fill-red-600" />
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
                                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you sure you want to delete this Brgy. Official?</h3>
                                                        <button data-modal-hide="popup-modal" type="button" class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                                            Yes, I'm sure
                                                        </button>
                                                        <button data-modal-hide="popup-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No, cancel</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                    </td>
                                </tr>
                                @endforeach

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




    <div class="pt-5">
        <hr>
    </div>

    <div class="mx-auto pt-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>
</x-app-layout>
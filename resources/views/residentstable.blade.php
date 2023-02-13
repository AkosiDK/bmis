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
                <span
                    class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full"
                    title="Official is Active">
                    {{$resident->alivedordeceased }}
                </span>
            </td>
            <td class="px-6 py-2">
                <!-- Update Modal -->
                <button data-modal-target="editresident-modal" data-modal-toggle="editresident-modal"
                    class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500"
                    title="Edit Resident">
                    <x-fas-square-pen class="w-4 h-4  fill-blue-600" />
                </button>
                <!-- Insert Update Modal -->

                <livewire:residents.updateresident>

                    <!-- View Resident Modal -->
                    <button data-modal-target="viewresident-modal" data-modal-toggle="viewresident-modal"
                        class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500"
                        title="View Resident">
                        <x-fas-eye class="w-4 h-4  fill-green-600" />
                    </button>

                    <!-- Insert View Modal -->

                    <livewire:residents.viewresident>

                        <!-- Delete Default Modal -->
                        <button data-modal-target="popup-modal" data-modal-toggle="popup-modal"
                            class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500"
                            title="Delete Official">
                            <x-fas-square-xmark class=" w-4 h-4 fill-red-600" />
                        </button>

                        <!-- Delete Default Modal -->
                        <div id="popup-modal" tabindex="-1"
                            class="fixed top-0 left-0 right-0 z-50 hidden p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                            <div class="relative w-full h-full max-w-md md:h-auto">
                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                    <button type="button"
                                        class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white"
                                        data-modal-hide="popup-modal">
                                        <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path fill-rule="evenodd"
                                                d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                                                clip-rule="evenodd"></path>
                                        </svg>
                                        <span class="sr-only">Close modal</span>
                                    </button>
                                    <div class="p-6 text-center">
                                        <svg aria-hidden="true"
                                            class="mx-auto mb-4 text-red-500 w-14 h-14 dark:text-gray-200" fill="none"
                                            stroke="currentColor" viewBox="0 0 24 24"
                                            xmlns="http://www.w3.org/2000/svg">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                d="M12 8v4m0 4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                        </svg>
                                        <h3 class="mb-5 text-lg font-normal text-gray-500 dark:text-gray-400">Are you
                                            sure you want to delete this Brgy. Official?</h3>
                                        <button data-modal-hide="popup-modal" type="button"
                                            class="text-white bg-red-600 hover:bg-red-800 focus:ring-4 focus:outline-none focus:ring-red-300 dark:focus:ring-red-800 font-medium rounded-lg text-sm inline-flex items-center px-5 py-2.5 text-center mr-2">
                                            Yes, I'm sure
                                        </button>
                                        <button data-modal-hide="popup-modal" type="button"
                                            class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">No,
                                            cancel</button>
                                    </div>
                                </div>
                            </div>
                        </div>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
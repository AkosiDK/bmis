<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Barangay Blotter Records
        </h2>
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>

    <div class="mx-auto">
        <div class="border-b border-gray-200 dark:border-gray-700 mb-4">
            <ul class="flex flex-wrap -mb-px" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <div class="grid grid-cols-5 gap-5">
                    <div class="col-span-1">
                        <li role="presentation">
                            <button class="inline-block rounded-lg bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-400" id="totalblotter-tab" data-tabs-target="#totalblotter" role="tab" aria-controls="totalblotter" aria-selected="true">
                                <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-11">
                                            <p class="font-bold text-white text-start blottercounter" data-target="5000" style="font-size:25px;">0</p>
                                            <p class="text-white text-start">BLOTTERS</p>
                                        </div>
                                        <div>
                                            <x-fas-user-group fill="white" class="w-8 h-8" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <p class="text-white text-end text-xs pt-8 tracking-widest">Total Blotter</p>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <div class="col-span-1">
                        <li role="presentation">
                            <button class="inline-block rounded-lg bg-red-500 hover:bg-red-600 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-400" id="activeblotter-tab" data-tabs-target="#activeblotter" role="tab" aria-controls="activeblotter" aria-selected="false">
                                <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-11">
                                            <p class="font-bold text-white text-start blottercounter" data-target="4000" style="font-size:25px;">0</p>
                                            <p class="text-white text-start">ACTIVE</p>
                                        </div>
                                        <div>
                                            <x-fas-user-group fill="white" class="w-8 h-8" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <p class="text-white text-end text-xs pt-8 tracking-widest">Total Active</p>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <div class="col-span-1">
                        <li role="presentation">
                            <button class="inline-block rounded-lg bg-green-500 hover:bg-green-600 active:bg-green-700 focus:outline-none focus:ring focus:ring-green-400" id="settledblotter-tab" data-tabs-target="#settledblotter" role="tab" aria-controls="settledblotter" aria-selected="false">
                                <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-11">
                                            <p class="font-bold text-white text-start blottercounter" data-target="3000" style="font-size:25px;">0</p>
                                            <p class="text-white text-start">SETTLED</p>
                                        </div>
                                        <div>
                                            <x-fas-user-group fill="white" class="w-8 h-8" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <p class="text-white text-end text-xs pt-8 tracking-widest">Total Settled</p>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <div class="col-span-1">
                        <li role="presentation">
                            <button class="inline-block rounded-lg bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:ring focus:ring-yellow-400" id="scheduledblotter-tab" data-tabs-target="#scheduledblotter" role="tab" aria-controls="scheduledblotter" aria-selected="false">
                                <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-11">
                                            <p class="font-bold text-white text-start blottercounter" data-target="2000" style="font-size:25px;">0</p>
                                            <p class="text-white text-start">SCHEDULED</p>
                                        </div>
                                        <div>
                                            <x-fas-user-group fill="white" class="w-8 h-8" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <p class="text-white text-end text-xs pt-8 tracking-widest">Total Scheduled</p>
                                        </div>
                                    </div>
                                </div>
                            </button>
                        </li>
                    </div>
                    <div class="col-span-1">
                        <li role="presentation">
                            <button class="inline-block rounded-lg bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-400" id="unscheduledblotter-tab" data-tabs-target="#unscheduledblotter" role="tab" aria-controls="unscheduledblotter" aria-selected="false">
                                <div class="mx-auto  p-5" style="width: 100; height:150px;">
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-11">
                                            <p class="font-bold text-white text-start blottercounter" data-target="1000" style="font-size:25px;">0</p>
                                            <p class="text-white text-start">UNSCHEDULED</p>
                                        </div>
                                        <div>
                                            <x-fas-user-group fill="white" class="w-8 h-8" />
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <div class="col-span-12">
                                            <p class="text-white text-end text-xs pt-8 tracking-widest">Total Unscheduled</p>
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
            <!-- Barangay blotter records  -->
            <div class="bg-white rounded-lg dark:bg-gray-800" id="totalblotter" role="tabpanel" aria-labelledby="totalblotter-tab">
                <div class="relative overflow-x-auto">
                    <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Blotter Records</div>
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
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Name">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-span-6 pt-2 justify-self-start items-start flex px-5 gap-x-2">
                            <!-- Download ALL record by PDF  -->
                            <button class="text-white inline-flex items-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700" title="Download PDF">
                                <x-fas-file-pdf class="w-4 h-4 mr-1" fill="white" />
                                Download
                            </button>
                            <!-- Print ALL record -->
                            <button class="text-white inline-flex items-center bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700" title="Print PDF">
                                <x-fas-print class="w-4 h-4 mr-1" fill="white" />
                                Print Records
                            </button>
                        </div>
                        <div class="col-span-3 pt-2 justify-self-end items-start flex px-5">
                            <!-- Add Blotter Modal -->
                            <button data-modal-target="addblotter-modal" data-modal-toggle="addblotter-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Blotter">
                                <x-fas-plus class="w-4 h-4 mr-1" fill="white" />
                                Blotter
                            </button>

                            <!-- Add Blotter Modal -->
                            <div id="addblotter-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-4xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                            <h3 class="text-xl font-medium text-white dark:text-white">
                                                Add - Blotter
                                            </h3>
                                            <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addblotter-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>

                                        </div>
                                        <!-- Modal body -->
                                        <form class="space-y-6" action="#">
                                            <div class="grid grid-cols-2">
                                                <div class="col-span-1">
                                                    <div class="py-6 px-6 space-y-3">
                                                        <!-- Complainant Name -->
                                                        <label for="addblottercomplainantname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complainant Name</label>
                                                        <input type="text" name="addblottercomplainantname" id="addblottercomplainantname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Complainant Name" required>

                                                        <!-- Victims Name -->
                                                        <label for="addblottervictimsname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Victim(s) Name </label>
                                                        <input type="text" name="addblottervictimsname" id="addblottervictimsname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Victim(s) Name" required>

                                                        <!-- Incident -->
                                                        <label for="addblotterincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Incident </label>
                                                        <input type="text" name="addblotterincident" id="addblotterincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Incident Type" required>

                                                        <!-- Incident Location -->
                                                        <label for="addblotterincidentlocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Incident Location </label>
                                                        <input type="text" name="addblotterincidentlocation" id="addblotterincidentlocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Incident Location" required>

                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div class="py-6 pr-6 space-y-3">
                                                        <!-- Respondent Name -->
                                                        <label for="addblotterrespondentname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respondent Name</label>
                                                        <input type="text" name="addblotterrespondentname" id="addblotterrespondentname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Respondent Name" required>

                                                        <!-- Date of Incident -->
                                                        <label for="addblotterdateofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Incident</label>
                                                        <div class="relative">
                                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </div>
                                                            <input datepicker type="text" id="addblotterdateofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date of Incident" required>
                                                        </div>

                                                        <!-- Time of Incident -->
                                                        <label for="addblottertimeofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time of Incident</label>
                                                        <input type="time" id="addblottertimeofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Time of Incident" required>

                                                        <!-- Blotter Status -->
                                                        <label for="addblotterstatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                        <select id="addblotterstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                            <option selected>Select Blotter Status</option>
                                                            <option>Active</option>
                                                            <option>Settled</option>
                                                            <option>Scheduled</option>
                                                            <option>Unscheduled</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <div class="px-6 pb-6">
                                                        <!-- Details -->
                                                        <label for="addblotterremarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                                                        <textarea id="addblotterremarks" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter more details here..." required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                            <button data-modal-hide="addblotter-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                            <button data-modal-hide="addblotter-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Case No.
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Complainant
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Respondent
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Victim(s)
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Incident
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

                        <tr class="bg-gray-100 dark:bg-gray-800">
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                2023-0001
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Monkey D. Luffy
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Kaido D. Beast
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Straw Hat Group
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Ninakaw ang mansinitas treasure.
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                <span class="bg-red-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Blotter is Active">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-2">
                                <!-- Update Blotter Modal -->
                                <button data-modal-target="editblotter-modal" data-modal-toggle="editblotter-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Blotter">
                                    <x-fas-square-pen class="w-5  fill-blue-600" />
                                </button>
                                <!-- Update Blotter Modal -->
                                <div id="editblotter-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full max-w-4xl md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                <h3 class="text-xl font-medium text-white dark:text-white">
                                                    Edit - Blotter
                                                </h3>
                                                <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editblotter-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>

                                            </div>
                                            <!-- Modal body -->
                                            <form class="space-y-6" action="#">
                                                <div class="grid grid-cols-2">
                                                    <div class="col-span-1">
                                                        <div class="py-6 px-6 space-y-3">
                                                            <!-- Complainant Name -->
                                                            <label for="editblottercomplainantname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complainant Name</label>
                                                            <input type="text" name="editblottercomplainantname" id="editblottercomplainantname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Monkey D. Luffy" required>

                                                            <!-- Victims Name -->
                                                            <label for="editblottervictimsname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Victim(s) Name </label>
                                                            <input type="text" name="editblottervictimsname" id="editblottervictimsname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Straw Hat Group" required>

                                                            <!-- Incident -->
                                                            <label for="editblotterincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Incident </label>
                                                            <input type="text" name="editblotterincident" id="editblotterincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Ninakaw ang mansinitas treasure" required>

                                                            <!-- Incident Location -->
                                                            <label for="editblotterincidentlocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Incident Location </label>
                                                            <input type="text" name="editblotterincidentlocation" id="editblotterincidentlocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Zone 6B, Baluarte, Tagoloan, Misamis Oriental" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <div class="py-6 pr-6 space-y-3">
                                                            <!-- Respondent Name -->
                                                            <label for="editblotterrespondentname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respondent Name</label>
                                                            <input type="text" name="editblotterrespondentname" id="editblotterrespondentname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Kaido D. Beast" required>

                                                            <!-- Date of Incident -->
                                                            <label for="editblotterdateofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Incident</label>
                                                            <div class="relative">
                                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                                <input datepicker type="text" id="editblotterdateofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="01/24/2023" required>
                                                            </div>

                                                            <!-- Time of Incident -->
                                                            <label for="editblottertimeofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time of Incident</label>
                                                            <input type="time" id="editblottertimeofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

                                                            <!-- Blotter Status -->
                                                            <label for="editblotterstatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                            <select id="editblotterstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                                <option>Select Blotter Status</option>
                                                                <option selected>Active</option>
                                                                <option>Settled</option>
                                                                <option>Scheduled</option>
                                                                <option>Unscheduled</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="px-6 pb-6">
                                                            <!-- Details -->
                                                            <label for="editblotterremarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                                                            <textarea id="editblotterremarks" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ninakaw ang mansinitas treasure dito sa barko, nagalit si luffy." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                <button data-modal-hide="editblotter-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                <button data-modal-hide="editblotter-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Generate Blotter Modal -->
                                <button data-modal-target="generateblotter-modal" data-modal-toggle="generateblotter-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="Generate Blotter">
                                    <x-fas-square-poll-horizontal class="w-5 fill-green-600" />
                                </button>
                                <!-- Delete Blotter Modal -->
                                <button data-modal-target="deleteblotter-modal" data-modal-toggle="deleteblotter-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Blotter">
                                    <x-fas-square-xmark class="w-5 fill-red-600" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Barangay active blotter records  -->
            <div class="bg-white rounded-lg dark:bg-gray-800 hidden" id="activeblotter" role="tabpanel" aria-labelledby="activeblotter-tab">
                <div class="relative overflow-x-auto">
                    <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Active Blotter Records</div>
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
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Name">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-span-6 pt-2 justify-self-start items-start flex px-5 gap-x-2">
                            <!-- Download ALL record by PDF  -->
                            <button class="text-white inline-flex items-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700" title="Download PDF">
                                <x-fas-file-pdf class="w-4 h-4 mr-1" fill="white" />
                                Download
                            </button>
                            <!-- Print ALL record -->
                            <button class="text-white inline-flex items-center bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700" title="Print PDF">
                                <x-fas-print class="w-4 h-4 mr-1" fill="white" />
                                Print Records
                            </button>
                        </div>
                        <div class="col-span-3 pt-2 justify-self-end items-start flex px-5">
                            <!-- Add Blotter Active Modal -->
                            <button data-modal-target="addblotteractive-modal" data-modal-toggle="addblotteractive-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Blotter">
                                <x-fas-plus class="w-4 h-4 mr-1" fill="white" />
                                Blotter
                            </button>

                            <!-- Add Blotter Active Modal -->
                            <div id="addblotteractive-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-4xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                            <h3 class="text-xl font-medium text-white dark:text-white">
                                                Add - Blotter
                                            </h3>
                                            <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addblotteractive-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>

                                        </div>
                                        <!-- Modal body -->
                                        <form class="space-y-6" action="#">
                                            <div class="grid grid-cols-2">
                                                <div class="col-span-1">
                                                    <div class="py-6 px-6 space-y-3">
                                                        <!-- Complainant Name -->
                                                        <label for="addblotteractivecomplainantname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complainant Name</label>
                                                        <input type="text" name="addblotteractivecomplainantname" id="addblotteractivecomplainantname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Complainant Name" required>

                                                        <!-- Victims Name -->
                                                        <label for="addblotteractivevictimsname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Victim(s) Name </label>
                                                        <input type="text" name="addblotteractivevictimsname" id="addblotteractivevictimsname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Victim(s) Name" required>

                                                        <!-- Incident -->
                                                        <label for="addblotteractiveincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Incident </label>
                                                        <input type="text" name="addblotteractiveincident" id="addblotteractiveincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Incident Type" required>

                                                        <!-- Incident Location -->
                                                        <label for="addblotteractiveincidentlocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Incident Location </label>
                                                        <input type="text" name="addblotteractiveincidentlocation" id="addblotteractiveincidentlocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Incident Location" required>

                                                    </div>
                                                </div>
                                                <div class="col-span-1">
                                                    <div class="py-6 pr-6 space-y-3">
                                                        <!-- Respondent Name -->
                                                        <label for="addblotteractiverespondentname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respondent Name</label>
                                                        <input type="text" name="addblotteractiverespondentname" id="addblotteractiverespondentname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Respondent Name" required>

                                                        <!-- Date of Incident -->
                                                        <label for="addblotteractivedateofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Incident</label>
                                                        <div class="relative">
                                                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                    <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                </svg>
                                                            </div>
                                                            <input datepicker type="text" id="addblotteractivedateofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Date of Incident" required>
                                                        </div>

                                                        <!-- Time of Incident -->
                                                        <label for="addblotteractivetimeofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time of Incident</label>
                                                        <input type="time" id="addblotteractivetimeofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Time of Incident" required>

                                                        <!-- Blotter Status -->
                                                        <label for="addblotteractivestatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                        <select id="addblotteractivestatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                            <option selected>Select Blotter Status</option>
                                                            <option>Active</option>
                                                            <option>Settled</option>
                                                            <option>Scheduled</option>
                                                            <option>Unscheduled</option>
                                                        </select>

                                                    </div>
                                                </div>
                                                <div class="col-span-2">
                                                    <div class="px-6 pb-6">
                                                        <!-- Details -->
                                                        <label for="addblotteractiveremarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                                                        <textarea id="addblotteractiveremarks" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter more details here..." required></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                            <button data-modal-hide="addblotteractive-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                            <button data-modal-hide="addblotteractive-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Case No.
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Complainant
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Respondent
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Victim(s)
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Incident
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

                        <tr class="bg-gray-100 dark:bg-gray-800">
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                2023-0001
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Monkey D. Luffy
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Kaido D. Beast
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Straw Hat Group
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Ninakaw ang mansinitas treasure.
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                <span class="bg-red-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Blotter is Active">
                                    Active
                                </span>
                            </td>
                            <td class="px-6 py-2">
                                <!-- Update Blotter Active Modal -->
                                <button data-modal-target="editblotteractive-modal" data-modal-toggle="editblotteractive-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Blotter">
                                    <x-fas-square-pen class="w-5  fill-blue-600" />
                                </button>
                                <!-- Update Blotter Active Modal -->
                                <div id="editblotteractive-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full max-w-4xl md:h-auto">
                                        <!-- Modal content -->
                                        <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                <h3 class="text-xl font-medium text-white dark:text-white">
                                                    Edit - Blotter
                                                </h3>
                                                <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editblotteractive-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>

                                            </div>
                                            <!-- Modal body -->
                                            <form class="space-y-6" action="#">
                                                <div class="grid grid-cols-2">
                                                    <div class="col-span-1">
                                                        <div class="py-6 px-6 space-y-3">
                                                            <!-- Complainant Name -->
                                                            <label for="editblotteractivecomplainantname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Complainant Name</label>
                                                            <input type="text" name="editblotteractivecomplainantname" id="editblotteractivecomplainantname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Monkey D. Luffy" required>

                                                            <!-- Victims Name -->
                                                            <label for="editblotteractivevictimsname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Victim(s) Name </label>
                                                            <input type="text" name="editblotteractivevictimsname" id="editblotteractivevictimsname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Straw Hat Group" required>

                                                            <!-- Incident -->
                                                            <label for="editblotteractiveincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Type of Incident </label>
                                                            <input type="text" name="editblotteractiveincident" id="editblotteractiveincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Ninakaw ang mansinitas treasure" required>

                                                            <!-- Incident Location -->
                                                            <label for="editblotteractiveincidentlocation" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Incident Location </label>
                                                            <input type="text" name="editblotteractiveincidentlocation" id="editblotteractiveincidentlocation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Zone 6B, Baluarte, Tagoloan, Misamis Oriental" required>

                                                        </div>
                                                    </div>
                                                    <div class="col-span-1">
                                                        <div class="py-6 pr-6 space-y-3">
                                                            <!-- Respondent Name -->
                                                            <label for="editblotteractiverespondentname" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Respondent Name</label>
                                                            <input type="text" name="editblotteractiverespondentname" id="editblotteractiverespondentname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Kaido D. Beast" required>

                                                            <!-- Date of Incident -->
                                                            <label for="editblotteractivedateofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Date of Incident</label>
                                                            <div class="relative">
                                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                                <input datepicker type="text" id="editblotteractivedateofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="01/24/2023" required>
                                                            </div>

                                                            <!-- Time of Incident -->
                                                            <label for="editblotteractivetimeofincident" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Time of Incident</label>
                                                            <input type="time" id="editblotteractivetimeofincident" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>

                                                            <!-- Blotter Status -->
                                                            <label for="editblotteractivestatus" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Status</label>
                                                            <select id="editblotteractivestatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                                <option>Select Blotter Status</option>
                                                                <option selected>Active</option>
                                                                <option>Settled</option>
                                                                <option>Scheduled</option>
                                                                <option>Unscheduled</option>
                                                            </select>

                                                        </div>
                                                    </div>
                                                    <div class="col-span-2">
                                                        <div class="px-6 pb-6">
                                                            <!-- Details -->
                                                            <label for="editblotteractiveremarks" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Details</label>
                                                            <textarea id="editblotteractiveremarks" rows="2" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Ninakaw ang mansinitas treasure dito sa barko, nagalit si luffy." required></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                            </form>
                                            <!-- Modal footer -->
                                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                <button data-modal-hide="editblotteractive-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                <button data-modal-hide="editblotteractive-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Generate Blotter Modal -->
                                <button data-modal-target="generateblotter-modal" data-modal-toggle="generateblotter-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="Generate Blotter">
                                    <x-fas-square-poll-horizontal class="w-5 fill-green-600" />
                                </button>
                                <!-- Delete Blotter Modal -->
                                <button data-modal-target="deleteblotter-modal" data-modal-toggle="deleteblotter-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Blotter">
                                    <x-fas-square-xmark class="w-5 fill-red-600" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <!-- Barangay settled blotter records  -->
            <div class="bg-white rounded-lg dark:bg-gray-800 hidden" id="settledblotter" role="tabpanel" aria-labelledby="settledblotter-tab">
                <div class="relative overflow-x-auto">
                    <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Settled Blotter Records</div>
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
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Name">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-span-6 pt-2 justify-self-start items-start flex px-5 gap-x-2">
                            <!-- Download ALL record by PDF  -->
                            <button class="text-white inline-flex items-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700" title="Download PDF">
                                <x-fas-file-pdf class="w-4 h-4 mr-1" fill="white" />
                                Download
                            </button>
                            <!-- Print ALL record -->
                            <button class="text-white inline-flex items-center bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700" title="Print PDF">
                                <x-fas-print class="w-4 h-4 mr-1" fill="white" />
                                Print Records
                            </button>
                        </div>

                    </div>
                </div>
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Case No.
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Complainant
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Respondent
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Victim(s)
                                    <a href="#">
                                        <x-fas-sort class="w-3 h-3" />
                                    </a>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                <div class="flex items-center">
                                    Incident
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

                        <tr class="bg-gray-100 dark:bg-gray-800">
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                2023-0001
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Monkey D. Luffy
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Kaido D. Beast
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Straw Hat Group
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                Ninakaw ang mansinitas treasure.
                            </td>
                            <td class="px-6 py-2 text-clip overflow-hidden ...">
                                <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Blotter is Settled">
                                    Settled
                                </span>
                            </td>
                            <td class="px-6 py-2">
                                <!-- Generate Blotter Modal -->
                                <button class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Print Record">
                                    <x-fas-print class="w-6 fill-blue-600" />
                                </button>
                                <!-- Delete Blotter Modal -->
                                <button data-modal-target="deleteblotter-modal" data-modal-toggle="deleteblotter-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Blotter">
                                    <x-fas-square-xmark class="w-5 fill-red-600" />
                                </button>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
            <div class="bg-white rounded-lg dark:bg-gray-800 hidden" id="scheduledblotter" role="tabpanel" aria-labelledby="scheduledblotter-tab">
                <div class="relative overflow-x-auto">
                    <div class="mx-auto pl-5 pb-2 pt-3 text-lg font-bold">Barangay Scheduled Blotter Records</div>
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
                                    <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Name">Search</button>
                                </div>
                            </form>
                        </div>
                        <div class="col-span-6 pt-2 justify-self-start items-start flex px-5 gap-x-2">
                            <!-- Download ALL record by PDF  -->
                            <button class="text-white inline-flex items-center bg-red-600 hover:bg-red-700 focus:ring-4 focus:outline-none focus:ring-red-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-red-500 dark:hover:bg-red-600 dark:focus:ring-red-700" title="Download PDF">
                                <x-fas-file-pdf class="w-4 h-4 mr-1" fill="white" />
                                Download
                            </button>
                            <!-- Print ALL record -->
                            <button class="text-white inline-flex items-center bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-green-500 dark:hover:bg-green-600 dark:focus:ring-green-700" title="Print PDF">
                                <x-fas-print class="w-4 h-4 mr-1" fill="white" />
                                Print Records
                            </button>
                        </div>
                        <div class="col-span-3 pt-2 justify-self-end items-start flex px-5">
                            <!-- Add summon Modal -->
                            <button data-modal-target="addblottersummon-modal" data-modal-toggle="addblottersummon-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Summon">
                                <x-fas-plus class="w-4 h-4 mr-1" fill="white" />
                                Summon
                            </button>

                            <!-- Add summon Modal -->
                            <div id="addblottersummon-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                <div class="relative w-full h-full max-w-xl md:h-auto">
                                    <!-- Modal content -->
                                    <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                        <!-- Modal header -->
                                        <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                            <h3 class="text-xl font-medium text-white dark:text-white">
                                                Add - Summon
                                            </h3>
                                            <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addblottersummon-modal">
                                                <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                    <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                </svg>
                                                <span class="sr-only">Close modal</span>
                                            </button>

                                        </div>
                                        <!-- Modal body -->
                                        <form class="space-y-6" action="#">
                                            <div class="py-6 px-6 space-y-3">
                                                <!-- Case No. -->
                                                <label for="addblottersummoncasenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Case No.</label>
                                                <select id="addblottersummoncasenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                    <option selected>Select Case No.</option>
                                                    <option>2023-0001</option>
                                                    <option>2023-0002</option>
                                                </select>

                                                <!-- Summon Details -->
                                                <label for="addblottersummondetails" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summon Details</label>
                                                <input type="text" name="addblottersummondetails" id="addblottersummondetails" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter Summon Details" required>

                                                <!-- No. of Summons -->
                                                <label for="addblottersummonnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summon Details</label>
                                                <input type="text" name="addblottersummonnumber" id="addblottersummonnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Enter No. of Summons" required>

                                                <!-- Date of Summon -->
                                                <label for="addblottersummonscheduleddate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled Date</label>
                                                <div class="relative">
                                                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                            <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                        </svg>
                                                    </div>
                                                    <input datepicker type="text" id="addblottersummonscheduleddate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Schedule Date" required>
                                                </div>

                                                <!-- Time of Summon -->
                                                <label for="addblottersummonscheduledtime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled Time</label>
                                                <input type="time" id="addblottersummonscheduledtime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select Schedule Time" required>

                                            </div>
                                        </form>
                                        <!-- Modal footer -->
                                        <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                            <button data-modal-hide="addblottersummon-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                            <button data-modal-hide="addblottersummon-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="grid grid-cols-12 gap-x-5">
                    <div class="col-span-9">
                        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                            <thead class="text-xs text-white uppercase bg-gray-800 dark:bg-gray-700 dark:text-gray-400">
                                <tr>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Case No.
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Summon Details
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            No. of Summons
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Scheduled Date
                                            <a href="#">
                                                <x-fas-sort class="w-3 h-3" />
                                            </a>
                                        </div>
                                    </th>
                                    <th scope="col" class="px-6 py-3">
                                        <div class="flex items-center">
                                            Scheduled Time
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

                                <tr class="bg-gray-100 dark:bg-gray-800">
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        2023-0001
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        Summoning both parties
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        1st
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        01/24/2023
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        10:30 AM
                                    </td>
                                    <td class="px-6 py-2 text-clip overflow-hidden ...">
                                        <span class="bg-yellow-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Blotter is Active">
                                            Scheduled
                                        </span>
                                    </td>
                                    <td class="px-6 py-2">
                                        <!-- Update Blotter Modal -->
                                        <button data-modal-target="editblottersummon-modal" data-modal-toggle="editblottersummon-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Blotter Summon">
                                            <x-fas-square-pen class="w-5  fill-blue-600" />
                                        </button>
                                        <!-- Add summon Modal -->
                                        <div id="editblottersummon-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full p-4 overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full max-w-xl md:h-auto">
                                                <!-- Modal content -->
                                                <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-5 border-b rounded-t dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                        <h3 class="text-xl font-medium text-white dark:text-white">
                                                            Edit - Summon
                                                        </h3>
                                                        <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editblottersummon-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>

                                                    </div>
                                                    <!-- Modal body -->
                                                    <form class="space-y-6" action="#">
                                                        <div class="py-6 px-6 space-y-3">
                                                            <!-- Case No. -->
                                                            <label for="editlottersummoncasenumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Case No.</label>
                                                            <select id="editlottersummoncasenumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" required>
                                                                <option>Select Case No.</option>
                                                                <option selected>2023-0001</option>
                                                                <option>2023-0002</option>
                                                            </select>

                                                            <!-- Summon Details -->
                                                            <label for="editblottersummondetails" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summon Details</label>
                                                            <input type="text" name="editblottersummondetails" id="editblottersummondetails" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="Summoning both parties" required>

                                                            <!-- No. of Summons -->
                                                            <label for="editblottersummonnumber" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Summon Details</label>
                                                            <input type="text" name="editblottersummonnumber" id="editblottersummonnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" value="1st" required>

                                                            <!-- Date of Summon -->
                                                            <label for="editblottersummonscheduleddate" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled Date</label>
                                                            <div class="relative">
                                                                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                                                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                        <path fill-rule="evenodd" d="M6 2a1 1 0 00-1 1v1H4a2 2 0 00-2 2v10a2 2 0 002 2h12a2 2 0 002-2V6a2 2 0 00-2-2h-1V3a1 1 0 10-2 0v1H7V3a1 1 0 00-1-1zm0 5a1 1 0 000 2h8a1 1 0 100-2H6z" clip-rule="evenodd"></path>
                                                                    </svg>
                                                                </div>
                                                                <input datepicker type="text" id="editblottersummonscheduleddate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" value="01/24/2023" required>
                                                            </div>

                                                            <!-- Time of Summon -->
                                                            <label for="editblottersummonscheduledtime" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Scheduled Time</label>
                                                            <input type="time" id="editblottersummonscheduledtime" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" Value="10:30 AM" required>

                                                        </div>
                                                    </form>
                                                    <!-- Modal footer -->
                                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                        <button data-modal-hide="editblottersummon-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                        <button data-modal-hide="editblottersummon-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Generate Blotter Modal -->
                                        <button data-modal-target="generateblotter-modal" data-modal-toggle="generateblotter-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="Generate Blotter">
                                            <x-fas-square-poll-horizontal class="w-5 fill-green-600" />
                                        </button>
                                        <!-- Delete Blotter Modal -->
                                        <button data-modal-target="deleteblotter-modal" data-modal-toggle="deleteblotter-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Blotter">
                                            <x-fas-square-xmark class="w-5 fill-red-600" />
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-span-3 bg-gray-100 px-5 h-96 mb-5">
                        <p class="text-xs font-bold pt-3">BLOTTER INFORMATION</p>

                        <div class="grid grid-cols-4 pb-2">
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Case No.</p>
                                <p class="text-xs font-bold pt-1">2023-0001</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Date Filed</p>
                                <p class="text-xs font-bold pt-1">01/23/2023 04:30 PM</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 pb-2">
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Complainant Name</p>
                                <p class="text-xs font-bold pt-1">Monkey D. Luffy</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Respondent Name</p>
                                <p class="text-xs font-bold pt-1">Kaido D. Beast</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 pb-2">
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Victem(s) Name</p>
                                <p class="text-xs font-bold pt-1">Straw Hat Group</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Type of Incident</p>
                                <p class="text-xs font-bold pt-1">Ninakaw ang mansinitas Treasure</p>
                            </div>
                        </div>

                        <div class="grid grid-cols-4 pb-2">
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Date of Incident</p>
                                <p class="text-xs font-bold pt-1">01/23/2023</p>
                            </div>
                            <div class="col-span-2">
                                <p class="text-xs pt-3">Time of Incident</p>
                                <p class="text-xs font-bold pt-1">04:30 PM</p>
                            </div>
                        </div>

                        <p class="text-xs pt-3">Incident Location</p>
                        <p class="text-xs font-bold pt-1">Zone 6B, Baluarte, Tagoloan, Misamis Oriental</p>

                        <p class="text-xs pt-3">Details</p>
                        <p class="text-xs font-bold pt-1">Maraming detalye di ko na maalala.sorry po.</p>

                    </div>
                </div>

            </div>
            <div class="bg-white p-4 rounded-lg dark:bg-gray-800 hidden" id="unscheduledblotter" role="tabpanel" aria-labelledby="unscheduledblotter-tab">
                SAMPLE5
            </div>
        </div>
    </div>

    <div class="pt-5">
        <hr>
    </div>

    <div class="mx-auto pt-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>

    <script>
        const counters = document.querySelectorAll('.blottercounter');
        const speed = 200;

        counters.forEach(blottercounter => {
            const updateCount = () => {
                const target = +blottercounter.getAttribute('data-target');
                const count = +blottercounter.textContent;

                const inc = target / speed;

                if (count < target) {
                    blottercounter.textContent = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    count.textContent = target;
                }
            }

            updateCount();
        });
    </script>

</x-app-layout>
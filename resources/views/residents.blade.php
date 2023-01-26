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
                    <div>
                        <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24 h-24">
                        <p class="text-center text-xl font-bold text-black">Barangay Baluarte, Tagoloan</p>
                        <p class="text-center text-xl font-bold text-black">Misamis Oriental, 9001</p>
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
                                        <button type="submit" class="text-white absolute right-2.5 bottom-2.5 bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Search Resident">Search</button>
                                    </div>
                                </form>
                            </div>
                            <div class="col-span-9 pt-2 justify-self-end px-5">
                                <!-- add Resident Modal -->
                                <button data-modal-target="addresident-modal" data-modal-toggle="addresident-modal" class="text-white inline-flex items-center bg-blue-600 hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-400 font-medium rounded-full text-sm px-4 py-2 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700" title="Add Resident">
                                    <x-fas-user-plus class="w-4 h-4 mr-1" fill="white" />
                                    Resident
                                </button>

                                <!-- add Resident -->
                                <div id="addresident-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                    <div class="relative w-full h-full">
                                        <!-- Modal content -->
                                        <div class="relative bg-gray-200 dark:bg-gray-700">
                                            <!-- Modal header -->
                                            <div class="flex items-center justify-between p-5 border-b  dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                <h3 class="text-xl font-medium text-white dark:text-white">
                                                    Add - Resident Record
                                                </h3>
                                                <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="addresident-modal">
                                                    <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                    </svg>
                                                    <span class="sr-only">Close modal</span>
                                                </button>
                                            </div>

                                            <!-- Modal body -->
                                            <div class="mx-auto">
                                                <div class="container mx-auto my-5 p-5">
                                                    <div class="mx-auto pb-5">
                                                        <div class="bg-white overflow-hidden rounded-lg shadow-lg">

                                                            <div class="grid grid-cols-4">
                                                                <div class="rounded-lg col-span-4 py-2">
                                                                    <div>
                                                                        <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24 h-24">
                                                                        <p class="text-center text-xl font-bold text-black">Barangay Baluarte, Tagoloan</p>
                                                                        <p class="text-center text-xl font-bold text-black">Misamis Oriental, 9001</p>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                        </div>
                                                    </div>
                                                    <div class="md:flex no-wrap md:-mx-2 ">
                                                        <!-- Left Side -->
                                                        <div class="w-full md:w-3/12 md:mx-2">
                                                            <div class="flex justify-center">
                                                                <div class="rounded-lg shadow-lg bg-white w-full h-full">
                                                                    <div class="m-4">
                                                                        <label class="inline-block mb-2 text-gray-500">Upload
                                                                            Image(jpg,png,svg,jpeg)</label>
                                                                        <div class="flex items-center justify-center w-full">
                                                                            <label class="flex flex-col w-full h-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                                                <div class="flex flex-col items-center justify-center pt-7">
                                                                                    <img src="{{ asset('img/defaultavatar.png') }}" alt="" class="mx-auto w-36 h-36">
                                                                                    <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                                                        Select a photo</p>
                                                                                </div>
                                                                                <input type="file" class="opacity-0" />
                                                                            </label>
                                                                        </div>
                                                                    </div>
                                                                    <div class="flex p-2 space-x-4 justify-center pb-5">
                                                                        <button class="px-4 py-2 text-white bg-red-500 rounded shadow-lg hover:bg-red-600">Capture</button>
                                                                        <button class="px-4 py-2 text-white bg-green-500 rounded shadow-lg hover:bg-green-600">Upload</button>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <div class="my-4"></div>

                                                        </div>

                                                        <!-- Right Side -->
                                                        <!-- About Section -->
                                                        <div class="bg-white p-5 shadow-lg rounded-lg mx-3 ">
                                                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                <span clas="text-green-500">
                                                                    <x-fas-user class="h-5" />
                                                                </span>
                                                                <span class="tracking-wide">About</span>
                                                            </div>
                                                            <div class="py-5">
                                                                <div class="grid grid-cols-9 gap-x-5">

                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="firstname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                                                        <input type="name" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Darryl Kaye" required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="middlename" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                                                                        <input type="name" name="middlename" id="middlename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="A." required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="lastname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                                                        <input type="name" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Sanga" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="suffixname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Suffix</label>
                                                                        <input type="name" name="suffixname" id="suffixname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jr." required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="aliasname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                                                                        <input type="name" name="aliasname" id="aliasname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="DA" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="gender" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                                                        <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Gender</option>
                                                                            <option>Male</option>
                                                                            <option>Female</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="bdate" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
                                                                        <input type="date" name="bdate" id="bdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="01/01/2001" required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-3">
                                                                        <label for="placeofbirth" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</label>
                                                                        <input type="text" name="placeofbirth" id="placeofbirth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="email" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                                        <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="da@gmail.com" required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="contact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                                                        <input type="number" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="citizenship" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                                                                        <select id="citizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Citizenship</option>
                                                                            <option>Filipino</option>
                                                                            <option>FilAm</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="civilstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                                                                        <select id="civilstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Civil Status</option>
                                                                            <option>Single</option>
                                                                            <option>Married</option>
                                                                            <option>Widdowed</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="alivedeceased" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alived/Deceased</label>
                                                                        <select id="alivedeceased" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Status</option>
                                                                            <option>Alived</option>
                                                                            <option>Deceased</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="votersstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Voters Status</label>
                                                                        <select id="votersstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Status</option>
                                                                            <option>Yes</option>
                                                                            <option>No</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="bloodtype" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
                                                                        <select id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Blood Type</option>
                                                                            <option>A</option>
                                                                            <option>O+</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="pwd" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">PWD?</label>
                                                                        <select id="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Status</option>
                                                                            <option>Yes</option>
                                                                            <option>No</option>
                                                                        </select>
                                                                    </div>


                                                                </div>
                                                                <!-- Address -->
                                                                <div class="grid grid-cols-4 gap-x-5">
                                                                    <div class="pb-5">
                                                                        <label for="region" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                                                        <select id="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Region</option>
                                                                            <option>Region 1</option>
                                                                            <option>Region 2</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="province" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                                                        <select id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Province</option>
                                                                            <option>Province 1</option>
                                                                            <option>Province 2</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="city" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                                        <select id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a City</option>
                                                                            <option>City 1</option>
                                                                            <option>City 2</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="barangay" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Barangay</label>
                                                                        <select id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                            <option selected>Choose a Barangay</option>
                                                                            <option>Barangay 1</option>
                                                                            <option>Barangay 2</option>
                                                                        </select>
                                                                    </div>
                                                                    <div class="pb-5 col-span-2">
                                                                        <label for="street" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Street</label>
                                                                        <input type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Purok/Street/House Number" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="nationalid" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                                                                        <input type="number" name="nationalid" id="nationalid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="1234567887654321" required>
                                                                    </div>
                                                                    <div class="pb-5 col-span-4">
                                                                        <label for="remarks" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                                                        <input type="text" name="remarks" id="remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Example. I have a birthmark on my face." required>
                                                                    </div>
                                                                </div>
                                                            </div>

                                                            <!-- Current Employment -->
                                                            <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                <span clas="text-green-500">
                                                                    <x-fas-briefcase class="h-5" />
                                                                </span>
                                                                <span class="tracking-wide">Employment</span>
                                                            </div>
                                                            <div class="py-5">
                                                                <div class="grid grid-cols-4 gap-x-5">

                                                                    <div class="pb-5">
                                                                        <label for="occupation" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
                                                                        <input type="text" name="occupation" id="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Office Clerk" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="occupationaddress" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation Address</label>
                                                                        <input type="text" name="occupationaddress" id="occupationaddress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="employername" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Name</label>
                                                                        <input type="text" name="employername" id="employername" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Juan Dela Cruz" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="employercontact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Contact</label>
                                                                        <input type="number" name="employercontact" id="employercontact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
                                                                    </div>

                                                                </div>
                                                                <div class="grid grid-cols-5 gap-5">
                                                                    <div class="pb-5">
                                                                        <label for="sssnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">SSS No.</label>
                                                                        <input type="number" name="sssnumber" id="sssnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="1234567890" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="gsisnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">GSIS No.</label>
                                                                        <input type="number" name="gsisnumber" id="gsisnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123456789012" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="tinnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">TIN No.</label>
                                                                        <input type="number" name="tinnumber" id="tinnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123456789012" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="pagibignumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Pagibig No.</label>
                                                                        <input type="number" name="pagibignumber" id="pagibignumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123456789012" required>
                                                                    </div>
                                                                    <div class="pb-5">
                                                                        <label for="philhealthnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Philhealth No.</label>
                                                                        <input type="number" name="philhealthnumber" id="philhealthnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="123456789012" required>
                                                                    </div>

                                                                </div>
                                                            </div>


                                                            <!-- Modal footer -->
                                                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                                <button data-modal-hide="addresident-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                                <button data-modal-hide="addresident-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
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
                                    <td class="px-6 py-2">
                                        <!-- Update Modal -->
                                        <button data-modal-target="editresident-modal" data-modal-toggle="editresident-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Resident">
                                            <x-fas-square-pen class="w-4 h-4  fill-blue-600" />
                                        </button>
                                        <!-- Update Modal -->
                                        <div id="editresident-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-gray-200 dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-5 border-b  dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                        <h3 class="text-xl font-medium text-white dark:text-white">
                                                            Add - Resident Record
                                                        </h3>
                                                        <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="editresident-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="mx-auto">
                                                        <div class="container mx-auto my-5 p-5">
                                                            <div class="mx-auto pb-5">
                                                                <div class="bg-white overflow-hidden rounded-lg shadow-lg">

                                                                    <div class="grid grid-cols-4">
                                                                        <div class="rounded-lg col-span-4 py-2">
                                                                            <div>
                                                                                <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24 h-24">
                                                                                <p class="text-center text-xl font-bold text-black">Barangay Baluarte, Tagoloan</p>
                                                                                <p class="text-center text-xl font-bold text-black">Misamis Oriental, 9001</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="md:flex no-wrap md:-mx-2 ">
                                                                <!-- Left Side -->
                                                                <div class="w-full md:w-3/12 md:mx-2">
                                                                    <div class="flex justify-center">
                                                                        <div class="rounded-lg shadow-lg bg-white w-full h-full">
                                                                            <div class="m-4">
                                                                                <label class="inline-block mb-2 text-gray-500">Upload
                                                                                    Image(jpg,png,svg,jpeg)</label>
                                                                                <div class="flex items-center justify-center w-full">
                                                                                    <label class="flex flex-col w-full h-full border-4 border-dashed hover:bg-gray-100 hover:border-gray-300">
                                                                                        <div class="flex flex-col items-center justify-center pt-7">
                                                                                            <img src="{{ asset('img/defaultavatar.png') }}" alt="" class="mx-auto w-36 h-36">
                                                                                            <p class="pt-1 text-sm tracking-wider text-gray-400 group-hover:text-gray-600">
                                                                                                Select a photo</p>
                                                                                        </div>
                                                                                        <input type="file" class="opacity-0" />
                                                                                    </label>
                                                                                </div>
                                                                            </div>
                                                                            <div class="flex p-2 space-x-4 justify-center pb-5">
                                                                                <button class="px-4 py-2 text-white bg-red-500 rounded shadow-lg hover:bg-red-600">Capture</button>
                                                                                <button class="px-4 py-2 text-white bg-green-500 rounded shadow-lg hover:bg-green-600">Upload</button>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <div class="my-4"></div>

                                                                </div>

                                                                <!-- Right Side -->
                                                                <!-- About Section -->
                                                                <div class="bg-white p-5 shadow-lg rounded-lg mx-3 ">
                                                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                        <span clas="text-green-500">
                                                                            <x-fas-user class="h-5" />
                                                                        </span>
                                                                        <span class="tracking-wide">About</span>
                                                                    </div>
                                                                    <div class="py-5">
                                                                        <div class="grid grid-cols-9 gap-x-5">

                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="firstname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">First Name</label>
                                                                                <input type="name" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="middlename" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                                                                                <input type="name" name="middlename" id="middlename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="lastname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                                                                <input type="name" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="suffixname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Suffix</label>
                                                                                <input type="name" name="suffixname" id="suffixname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="aliasname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                                                                                <input type="name" name="aliasname" id="aliasname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="gender" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                                                                <select id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Gender</option>
                                                                                    <option>Male</option>
                                                                                    <option>Female</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="bdate" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
                                                                                <input type="date" name="bdate" id="bdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-3">
                                                                                <label for="placeofbirth" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</label>
                                                                                <input type="text" name="placeofbirth" id="placeofbirth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="email" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                                                <input type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="contact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                                                                <input type="number" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="citizenship" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                                                                                <select id="citizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Citizenship</option>
                                                                                    <option>Filipino</option>
                                                                                    <option>FilAm</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="civilstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                                                                                <select id="civilstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Civil Status</option>
                                                                                    <option>Single</option>
                                                                                    <option>Married</option>
                                                                                    <option>Widdowed</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="alivedeceased" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alived/Deceased</label>
                                                                                <select id="alivedeceased" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Status</option>
                                                                                    <option>Alived</option>
                                                                                    <option>Deceased</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="votersstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Voters Status</label>
                                                                                <select id="votersstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Status</option>
                                                                                    <option>Yes</option>
                                                                                    <option>No</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="bloodtype" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
                                                                                <select id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Blood Type</option>
                                                                                    <option>A</option>
                                                                                    <option>O+</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="pwd" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">PWD?</label>
                                                                                <select id="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Status</option>
                                                                                    <option>Yes</option>
                                                                                    <option>No</option>
                                                                                </select>
                                                                            </div>


                                                                        </div>
                                                                        <!-- Address -->
                                                                        <div class="grid grid-cols-4 gap-x-5">
                                                                            <div class="pb-5">
                                                                                <label for="region" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                                                                <select id="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Region</option>
                                                                                    <option>Region 1</option>
                                                                                    <option>Region 2</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="province" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                                                                <select id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Province</option>
                                                                                    <option>Province 1</option>
                                                                                    <option>Province 2</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="city" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                                                <select id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a City</option>
                                                                                    <option>City 1</option>
                                                                                    <option>City 2</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="barangay" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Barangay</label>
                                                                                <select id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                                                    <option selected>Choose a Barangay</option>
                                                                                    <option>Barangay 1</option>
                                                                                    <option>Barangay 2</option>
                                                                                </select>
                                                                            </div>
                                                                            <div class="pb-5 col-span-2">
                                                                                <label for="street" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Street</label>
                                                                                <input type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="nationalid" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                                                                                <input type="number" name="nationalid" id="nationalid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5 col-span-4">
                                                                                <label for="remarks" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                                                                <input type="text" name="remarks" id="remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                    <!-- Current Employment -->
                                                                    <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                        <span clas="text-green-500">
                                                                            <x-fas-briefcase class="h-5" />
                                                                        </span>
                                                                        <span class="tracking-wide">Employment</span>
                                                                    </div>
                                                                    <div class="py-5">
                                                                        <div class="grid grid-cols-4 gap-x-5">

                                                                            <div class="pb-5">
                                                                                <label for="occupation" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation</label>
                                                                                <input type="text" name="occupation" id="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="occupationaddress" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation Address</label>
                                                                                <input type="text" name="occupationaddress" id="occupationaddress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="employername" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Name</label>
                                                                                <input type="text" name="employername" id="employername" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="employercontact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Contact</label>
                                                                                <input type="number" name="employercontact" id="employercontact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>

                                                                        </div>
                                                                        <div class="grid grid-cols-5 gap-5">
                                                                            <div class="pb-5">
                                                                                <label for="sssnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">SSS No.</label>
                                                                                <input type="number" name="sssnumber" id="sssnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="gsisnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">GSIS No.</label>
                                                                                <input type="number" name="gsisnumber" id="gsisnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="tinnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">TIN No.</label>
                                                                                <input type="number" name="tinnumber" id="tinnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="pagibignumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Pagibig No.</label>
                                                                                <input type="number" name="pagibignumber" id="pagibignumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>
                                                                            <div class="pb-5">
                                                                                <label for="philhealthnumber" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Philhealth No.</label>
                                                                                <input type="number" name="philhealthnumber" id="philhealthnumber" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="" required>
                                                                            </div>

                                                                        </div>
                                                                    </div>


                                                                    <!-- Modal footer -->
                                                                    <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                                        <button data-modal-hide="editresident-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                                                        <button data-modal-hide="editresident-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>


                                                </div>
                                            </div>
                                        </div>


                                        <!-- View Resident Modal -->
                                        <button data-modal-target="viewresident-modal" data-modal-toggle="viewresident-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="View Resident">
                                            <x-fas-eye class="w-4 h-4  fill-green-600" />
                                        </button>

                                        <!-- View Resident -->
                                        <div id="viewresident-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
                                            <div class="relative w-full h-full">
                                                <!-- Modal content -->
                                                <div class="relative bg-gray-200 dark:bg-gray-700">
                                                    <!-- Modal header -->
                                                    <div class="flex items-center justify-between p-5 border-b  dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                                                        <h3 class="text-xl font-medium text-white dark:text-white">
                                                            View - Resident Record
                                                        </h3>
                                                        <button type="button" class="text-white bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-modal-hide="viewresident-modal">
                                                            <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                                <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                                            </svg>
                                                            <span class="sr-only">Close modal</span>
                                                        </button>
                                                    </div>

                                                    <!-- Modal body -->
                                                    <div class="mx-auto">
                                                        <div class="container mx-auto my-5 p-5">
                                                            <div class="mx-auto pb-5">
                                                                <div class="bg-white overflow-hidden rounded-lg shadow-lg">

                                                                    <div class="grid grid-cols-4">
                                                                        <div class="rounded-lg col-span-4 py-2">
                                                                            <div>
                                                                                <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24 h-24">
                                                                                <p class="text-center text-xl font-bold text-black">Barangay Baluarte, Tagoloan</p>
                                                                                <p class="text-center text-xl font-bold text-black">Misamis Oriental, 9001</p>
                                                                            </div>
                                                                        </div>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                            <div class="md:flex no-wrap md:-mx-2 ">
                                                                <!-- Left Side -->
                                                                <div class="h-full md:w-3/12 md:mx-2 bg-white overflow-hidden rounded-lg shadow-lg pb-5">
                                                                    <img src="{{ asset('img/user.jpeg') }}" alt="" class="mx-auto w-96 h-96">
                                                                    <!-- Profile Card -->
                                                                    <div class="bg-white p-3 border-t-4 border-green-400">
                                                                        <div class="image overflow-hidden">
                                                                            <img class="h-auto w-full mx-auto" src="https://lavinephotography.com.au/wp-content/uploads/2017/01/PROFILE-Photography-112.jpg" alt="">
                                                                        </div>
                                                                        <h1 class="text-gray-900 font-bold text-lg my-1">Monkey D. Luffy</h1>
                                                                        <div class="grid grid-cols-2">
                                                                            <strong class="text-sm font-medium text-gray-900 dark:text-white">Alias</strong>
                                                                            <p class="text-sm font-medium">King of Pirates</p>
                                                                        </div>
                                                                        <div class="grid grid-cols-2">
                                                                            <strong class="text-sm font-medium text-gray-900 dark:text-white">Email</strong>
                                                                            <p class="text-sm font-medium truncate ...">monkeydluffy@gmaiasdsadsdasdasdsadasdasdasdl.com</p>
                                                                        </div>
                                                                        <div class="grid grid-cols-2">
                                                                            <strong class="text-sm font-medium text-gray-900 dark:text-white">Contact</strong>
                                                                            <p class="text-sm font-medium">09123456789</p>
                                                                        </div>
                                                                    </div>
                                                                    <ul class="bg-gray-100 text-gray-600 divide-y rounded shadow-sm px-3 mx-3">
                                                                        <li class="flex items-center py-3 px-3">
                                                                            <span>Status</span>
                                                                            <span class="ml-auto"><span class="bg-green-500 py-1 px-2 rounded text-white text-sm">Alive</span></span>
                                                                        </li>
                                                                        <li class="flex items-center py-3 px-3">
                                                                            <span>Last Updated</span>
                                                                            <span class="ml-auto">Nov 07, 2016</span>
                                                                        </li>
                                                                    </ul>

                                                                </div>
                                                                <!-- Right Side -->
                                                                <div class="w-full h-full md:w-9/12 mx-2">
                                                                    <!-- Profile tab -->
                                                                    <!-- About Section -->
                                                                    <div class="px-5 pt-5 bg-white overflow-hidden rounded-lg shadow-lg">
                                                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                            <span clas="text-green-500">
                                                                                <x-fas-user class="h-5" />
                                                                            </span>
                                                                            <span class="tracking-wide">About</span>
                                                                        </div>
                                                                        <div class="py-5">
                                                                            <div class="grid grid-cols-4 gap-x-5">

                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">First Name</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Luffy</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Middle Name</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">D.</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Last Name</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Monkey</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Suffix</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Jr.</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Gender</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Male</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Birth Date</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">01/01/2001</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Zone 6B, Baluarte, Tagoloan, Misamis Oriental</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Citizenship</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Filipino</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Civil Status</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Married</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Voters Status</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Yes</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Blood Type</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">O+</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">PWD</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">No</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Region</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Region 10</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Province</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Misamis Oriental</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">City</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Cagayan de Oro City</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Barangay</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Baluarte</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Steet</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Zone 6B TTI Street, House# 195</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">National ID</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">12346789012</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-4">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Remarks</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">I have birth mark all over my body... Lorem ipsum dolor sit amet consectetur adipisicing elit. Laboriosam culpa, velit reiciendis omnis aperiam dolores, minus impedit provident laborum aspernatur quia nulla voluptatibus sapiente totam? Commodi quos tenetur voluptatibus nihil.</p>
                                                                                </div>

                                                                            </div>

                                                                        </div>

                                                                        <!-- Current Employment -->
                                                                        <div class="flex items-center space-x-2 font-semibold text-gray-900 leading-8">
                                                                            <span clas="text-green-500">
                                                                                <x-fas-briefcase class="h-5" />
                                                                            </span>
                                                                            <span class="tracking-wide">Employment</span>
                                                                        </div>
                                                                        <div class="py-5">
                                                                            <div class="grid grid-cols-5 gap-x-5">
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Office Clerk</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-2">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation Address</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Zone 6B, Baluarte, Tagoloan, Misamis Oriental</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Name</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">Juan Dela Cruz</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Contact</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">12345678901</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">SSS No.</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">123456789012</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">GSIS No.</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">123456789012</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">TIN No.</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">123456789012</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Pagibig No.</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">123456789012</p>
                                                                                </div>
                                                                                <div class="pb-5 col-span-1">
                                                                                    <strong class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Philhealth No.</strong>
                                                                                    <p class="text-sm font-medium text-clip overflow-hidden ...">123456789012</p>
                                                                                </div>
                                                                            </div>

                                                                            <!-- Modal footer -->
                                                                            <div class="flex items-center p-6 space-x-2 border-t border-gray-200 rounded-b dark:border-gray-600 justify-end">
                                                                                <button data-modal-hide="viewresident-modal" type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Close</button>
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





                            </tbody>
                        </table>
                    </div>


                </div>

            </div>

        </div>

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




    <div class="pt-5">
        <hr>
    </div>
    <div class="mx-auto pt-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>
</x-app-layout>
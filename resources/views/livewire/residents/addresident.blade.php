<!-- add Resident -->
<div wire:ignore.self id="addresident-modal" tabindex="-1" class="fixed top-0 left-0 right-0 z-50 hidden w-full h-full overflow-x-hidden overflow-y-auto md:inset-0 h-modal md:h-full">
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
                                        <input wire:model.defer="firstname" type="name" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Darryl Kaye" required>
                                        @error('firstname') <span class="error">{{ $message }}</span> @enderror
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="middlename" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                                        <input wire:model.defer="middlename" type="name" name="middlename" id="middlename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="A." required>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="lastname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                        <input wire:model.defer="lastname" type="name" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Sanga" required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="suffixname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Suffix</label>
                                        <input wire:model.defer="suffix" type="name" name="suffixname" id="suffixname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jr." required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="aliasname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                                        <input wire:model.defer="alias" type="name" name="aliasname" id="aliasname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="DA" required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="gender" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                        <select wire:model.defer="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="birthdate" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
                                        <input wire:model.defer="birthdate" type="date" name="bdate" id="bdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="01/01/2001" required>
                                    </div>
                                    <div class="pb-5 col-span-3">
                                        <label for="placeofbirth" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</label>
                                        <input wire:model.defer="birthplace" type="text" name="placeofbirth" id="placeofbirth" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="email" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                        <input wire:model.defer="email" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="da@gmail.com" required>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="contact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                        <input wire:model.defer="contact" type="text" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="citizenship" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                                        <select wire:model.defer="citizenship" id="citizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Citizenship</option>
                                            <option value="filipino">Filipino</option>
                                            <option value="filam">FilAm</option>
                                        </select>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="civilstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                                        <select wire:model.defer="civilstatus" id="civilstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Civil Status</option>
                                            <option value="single">Single</option>
                                            <option value="married">Married</option>
                                            <option value="widdowed">Widdowed</option>
                                        </select>
                                    </div>
                                    <div class="pb-5 col-span-2">
                                        <label for="alivedeceased" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alived/Deceased</label>
                                        <select wire:model.defer="alivedordeceased" id="alivedeceased" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Status</option>
                                            <option value="alived">Alived</option>
                                            <option value="deceased">Deceased</option>
                                        </select>
                                    </div>
                                    <div class="pb-5">
                                        <label for="votersstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Voters Status</label>
                                        <select wire:model.defer="voterstatus" id="votersstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                    <div class="pb-5">
                                        <label for="bloodtype" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
                                        <select wire:model.defer="bloodtype" id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Blood Type</option>
                                            <option value="A">A</option>
                                            <option value="O+">O+</option>
                                        </select>
                                    </div>
                                    <div class="pb-5">
                                        <label for="pwd" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">PWD?</label>
                                        <select wire:model.defer="pwd" id="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            <option selected>Choose a Status</option>
                                            <option value="Yes">Yes</option>
                                            <option value="No">No</option>
                                        </select>
                                    </div>
                                </div>
                                <!-- Address -->
                                <div class="grid grid-cols-4 gap-x-5">
                                    <div class="pb-5">
                                        <label for="region" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                        <select id="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                            
                                            <option>Region</option>
                                            
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
                                        <input wire:model.defer="street" type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Purok/Street/House Number" required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="nationalid" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                                        <input wire:model.defer="nationalid" type="number" name="nationalid" id="nationalid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="1234567887654321" required>
                                    </div>
                                    <div class="pb-5 col-span-4">
                                        <label for="remarks" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                        <input wire:model.defer="remarks" type="text" name="remarks" id="remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Example. I have a birthmark on my face." required>
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
                                        <input wire:model.defer="occupation" type="text" name="occupation" id="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Office Clerk" required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="occupationaddress" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation Address</label>
                                        <input wire:model.defer="officeaddress" type="text" name="occupationaddress" id="occupationaddress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="employername" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Name</label>
                                        <input wire:model.defer="employer" type="text" name="employername" id="employername" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Juan Dela Cruz" required>
                                    </div>
                                    <div class="pb-5">
                                        <label for="employercontact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Contact</label>
                                        <input wire:model.defer="employercontact" type="number" name="employercontact" id="employercontact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
                                        @error('employercontact') <span class="error">{{ $message }}</span> @enderror
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
                                <button data-modal="addresident-modal" type="button" wire:click.prevent="store()" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Save</button>
                            </div>

                        </div>

                    </div>
                </div>
            </div>


        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <!-- Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
    <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
</head>
<body>
    <div>
        <!-- edit Resident -->
        <div id="addresident-modal" tabindex="-1">
            <div class="relative w-full h-full">
                <!-- Modal content -->
                <div class="relative bg-gray-200 dark:bg-gray-700">
                    <!-- Modal header -->
                    <div class="flex items-center justify-between p-5 border-b  dark:border-gray-600 bg-gradient-to-r from-blue-600 to-blue-500">
                        <h3 class="text-xl font-medium text-white dark:text-white">
                            Edit - Resident Record
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
                                <form class="space-y-6" action="{{ route('resident.update', $resident->id) }}" method="POST">
                                    @csrf
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
                                                    <input value="{{ $resident->firstname }}" type="name" name="firstname" id="firstname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Darryl Kaye" required>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="middlename" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Middle Name</label>
                                                    <input value="{{ $resident->middlename }}" type="name" name="middlename" id="middlename" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="A." required>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="lastname" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Last Name</label>
                                                    <input value="{{ $resident->lastname }}" type="name" name="lastname" id="lastname" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Sanga" required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="suffix" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Suffix</label>
                                                    <input value="{{ $resident->suffix }}" type="name" name="suffix" id="suffix" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Jr." required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="alias" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alias</label>
                                                    <input value="{{ $resident->alias }}" type="name" name="alias" id="alias" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="DA" required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="gender" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Gender</label>
                                                    <select name="gender" id="gender" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Gender</option>
                                                        <option {{ $resident->gender == 'male' ? 'selected' : '' }} value="male">Male</option>
                                                        <option {{ $resident->gender == 'female' ? 'selected' : '' }} value="female">Female</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="birthdate" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Birth Date</label>
                                                    <input value="{{ $resident->birthdate }}" type="date" name="birthdate" id="birthdate" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="01/01/2001" required>
                                                </div>
                                                <div class="pb-5 col-span-3">
                                                    <label for="birthplace" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Place of Birth</label>
                                                    <input value="{{ $resident->birthplace }}" type="text" name="birthplace" id="birthplace" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="email" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                                                    <input value="{{ $resident->email }}" type="email" name="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="da@gmail.com" required>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="contact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Contact</label>
                                                    <input value="{{ $resident->contact }}" type="text" name="contact" id="contact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="citizenship" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Citizenship</label>
                                                    <select name="citizenship" id="citizenship" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Citizenship</option>
                                                        <option {{ $resident->citizenship == 'filipino' ? 'selected' : '' }} value="filipino">Filipino</option>
                                                        <option {{ $resident->citizenship == 'filam' ? 'selected' : '' }} value="filam">FilAm</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="civilstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Civil Status</label>
                                                    <select name="civilstatus" id="civilstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Civil Status</option>
                                                        <option {{ $resident->civilstatus == 'single' ? 'selected' : '' }} value="single">Single</option>
                                                        <option {{ $resident->civilstatus == 'married' ? 'selected' : '' }} value="married">Married</option>
                                                        <option {{ $resident->civilstatus == 'widdowed' ? 'selected' : '' }} value="widdowed">Widdowed</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="alivedordeceased" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Alived/Deceased</label>
                                                    <select name="alivedordeceased" id="alivedordeceased" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Status</option>
                                                        <option {{ $resident->alivedordeceased == 'alived' ? 'selected' : '' }} value="alived">Alived</option>
                                                        <option {{ $resident->alivedordeceased == 'deceased' ? 'selected' : '' }} value="deceased">Deceased</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="voterstatus" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Voters Status</label>
                                                    <select name="voterstatus" id="voterstatus" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Status</option>
                                                        <option {{ $resident->voterstatus == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                                        <option {{ $resident->voterstatus == 'No' ? 'selected' : '' }} value="No">No</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="bloodtype" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Blood Type</label>
                                                    <select name="bloodtype" id="bloodtype" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Blood Type</option>
                                                        <option {{ $resident->bloodtype == 'A' ? 'selected' : '' }} value="A">A</option>
                                                        <option {{ $resident->bloodtype == 'O+' ? 'selected' : '' }} value="O+">O+</option>
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="pwd" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">PWD?</label>
                                                    <select name="pwd" id="pwd" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        <option>Choose a Status</option>
                                                        <option {{ $resident->pwd == 'Yes' ? 'selected' : '' }} value="Yes">Yes</option>
                                                        <option {{ $resident->pwd == 'No' ? 'selected' : '' }} value="No">No</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <!-- Address -->
                                            <div class="grid grid-cols-4 gap-x-5">
                                                <div class="pb-5">
                                                    <label for="region" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Region</label>
                                                    <select id="region" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                    
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="province" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Province</label>
                                                    <select id="province" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="city" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">City</label>
                                                    <select id="city" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        
                                                    </select>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="barangay" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Barangay</label>
                                                    <select id="barangay" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                                                        
                                                    </select>
                                                </div>
                                                <div class="pb-5 col-span-2">
                                                    <label for="street" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Street</label>
                                                    <input value="{{ $resident->street }}" type="text" name="street" id="street" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Purok/Street/House Number" required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="nationalid" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">National ID</label>
                                                    <input value="{{ $resident->nationalid }}" type="number" name="nationalid" id="nationalid" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="1234567887654321" required>
                                                </div>
                                                <div class="pb-5 col-span-4">
                                                    <label for="remarks" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Remarks</label>
                                                    <input value="{{ $resident->remarks }}" type="text" name="remarks" id="remarks" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Example. I have a birthmark on my face." required>
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
                                                    <input value="{{ $resident->occupation }}" type="text" name="occupation" id="occupation" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Office Clerk" required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="officeaddress" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Occupation Address</label>
                                                    <input value="{{ $resident->officeaddress }}" type="text" name="officeaddress" id="officeaddress" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Zone 6B, Baluarte, Tagoloan, Mis. Or." required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="employer" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Name</label>
                                                    <input value="{{ $resident->employer }}" type="text" name="employer" id="employer" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="Juan Dela Cruz" required>
                                                </div>
                                                <div class="pb-5">
                                                    <label for="employercontact" class="mb-5 text-sm font-medium text-gray-900 dark:text-white">Employer Contact</label>
                                                    <input value="{{ $resident->employercontact }}" type="number" name="employercontact" id="employercontact" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500  w-full p-2.5 dark:bg-gray-600 dark:border-gray-500 dark:placeholder-gray-400 dark:text-white" placeholder="09123456789" required>
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
                                            <button  data-modal-hide="addresident-modal" type="button" class="text-gray-500 bg-white hover:bg-gray-100 focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-lg border border-gray-200 text-sm font-medium px-5 py-2.5 hover:text-gray-900 focus:z-10 dark:bg-gray-700 dark:text-gray-300 dark:border-gray-500 dark:hover:text-white dark:hover:bg-gray-600 dark:focus:ring-gray-600">Cancel</button>
                                            <button  type="submit"  class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Update</button>
                                        </div>
            
                                    </div>
                                </form>
        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <script>

        var my_handlers = {
    
            fill_provinces:  function(){
    
                var region_code = $(this).val();
                $('#province').ph_locations('fetch_list', [{"region_code": region_code}]);
    
            },
    
            fill_cities: function(){
    
                var province_code = $(this).val();
                $('#city').ph_locations( 'fetch_list', [{"province_code": province_code}]);
            },
    
    
            fill_barangays: function(){
    
                var city_code = $(this).val();
                $('#barangay').ph_locations('fetch_list', [{"city_code": city_code}]);
            }
        };
    
        $(function(){
            $('#region').on('change', my_handlers.fill_provinces);
            $('#province').on('change', my_handlers.fill_cities);
            $('#city').on('change', my_handlers.fill_barangays);
    
            $('#region').ph_locations({'location_type': 'regions'});
            $('#province').ph_locations({'location_type': 'provinces'});
            $('#city').ph_locations({'location_type': 'cities'});
            $('#barangay').ph_locations({'location_type': 'barangays'});
    
            $('#region').val("{{ $region }}");
            $('#province').val("{{ $selectedProvince }}");
            $('#city').val("{{ $selectedCity }}");
            $('#barangay').val("{{ $selectedBarangay }}");
    
            $('#region').ph_locations('fetch_list');
    
        });
    
    </script> --}}
</body>
</html>
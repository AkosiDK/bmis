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
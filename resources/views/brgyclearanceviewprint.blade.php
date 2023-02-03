<x-app-layout>
    <x-slot name="header" class="print:hidden">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Barangay Clearance
        </h2>
    </x-slot>
    <x-slot name="breadcrumb" class="print:hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item print:hidden">Dashboard</li>
        </ol>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-lg ">
            <div class="grid grid-cols-4 py-4">
                <div class="col-span-4 text-center">
                    <p class="text-xs font-bold">Republic of the Philippines</p>
                    <p class="text-xs font-bold">Province of Misamis Oriental</p>
                    <p class="text-xs font-bold">Municipality of Tagoloan, 9001</p>
                    <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24">
                    <p class="text-sm font-bold">BRGY. BALUARTE</p>
                    <p class="text-xs font-bold">Contact No.: 09123456789 / Email: brgybaluarte@gmail.com</p>
                </div>
            </div>


            <div class="grid grid-cols-12 mx-5 pb-2">
                <div class="col-span-3 border-2 border-slate-200 pb-2 px-2">
                    <p class="text-xs text-center font-semibold py-2"> SANGUNIANG BRGY. BALUARTE TAGOLOAN 2023-2026</p>
                    <p class="text-xs text-center font-semibold underline"> Branden Lawson </p>
                    <p class="text-xs text-center pb-3"> Punong Barangay </p>

                    <p class="text-xs text-center font-semibold py-2"> SANGUNIANG BARANGAY KAGAWAD</p>
                    <p class="text-xs text-center font-semibold pb-2"> Myah Herring </p>
                    <p class="text-xs text-center font-semibold pb-2"> Zaire Galloway </p>
                    <p class="text-xs text-center font-semibold pb-2"> Misael Nixon </p>
                    <p class="text-xs text-center font-semibold pb-2"> Kayleigh Barrett </p>
                    <p class="text-xs text-center font-semibold pb-2"> Felipe Gordon </p>
                    <p class="text-xs text-center font-semibold pb-2"> Kennedy Knight </p>
                    <p class="text-xs text-center font-semibold pb-3"> Talan Ayers </p>

                    <p class="text-xs text-center font-semibold underline"> Deshawn Jacobson </p>
                    <p class="text-xs text-center pb-3"> Barangay Secretary </p>

                    <p class="text-xs text-center font-semibold underline"> Laura Townsend </p>
                    <p class="text-xs text-center pb-3"> Barangay Treasurer </p>

                    <p class="text-xs text-center font-semibold underline"> Laura Townsend </p>
                    <p class="text-xs text-center"> Administrative Aid </p>


                </div>

                <div class="col-span-9 border-2 border-slate-200">
                    <p class="text-xs text-center font-bold pt-2"> OFFICE OF THE PUNONG BARANGAY</p>
                    <p class="text-base text-center font-bold"> BARANGAY CLEARANCE</p>

                    <p class="text-xs pt-3 px-5 pb-2"> TO WHOM IT MAY CONCERN, </p>
                    <p class="text-xs px-5 indent-8 pb-5"> This is to <strong>CERTIFY</strong> that the person whose name
                        appearing herein has requested a <strong>BARANGAY CLEARANCE</strong> from the
                        office and the result(s) is/are listed below:
                    </p>

                    <div class="grid grid-cols-12 px-5">
                        <div class="col-span-2">
                            <p class="text-xs"> First Name: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Luffy </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Address: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Zone 6B, Baluarte, Tagoloan, Mis. Or. </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 px-5 pb-2">
                        <div class="col-span-2">
                            <p class="text-xs"> Middle Name: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> D. </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Citizenship: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Filipino </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 px-5 pb-2">
                        <div class="col-span-2">
                            <p class="text-xs"> Last Name: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Monkey </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Civil Status: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Single </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 px-5 pb-2">
                        <div class="col-span-2">
                            <p class="text-xs"> Suffix: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Jr. </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Date Issued: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> 01/01/2023 </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 px-5 pb-2">
                        <div class="col-span-2">
                            <p class="text-xs"> Gender: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Male </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Valid Until: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> 01/01/2024 </p>
                        </div>
                    </div>
                    <div class="grid grid-cols-12 px-5 pb-5">
                        <div class="col-span-2">
                            <p class="text-xs"> Birth Date: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> 05/05/2005 </p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs"> Place of Birth: </p>
                        </div>
                        <div class="col-span-4">
                            <p class="text-xs font-semibold"> Zone 6B, Baluarte, Tagoloan, Mis. Or. </p>
                        </div>
                    </div>

                    <p class="text-xs px-5 indent-8 pb-5"> This is to <strong>CERTIFY</strong> further that <strong>Monkey D. Luffy</strong>,
                        has no derogatory record filed and/or pending case against him/her before this office.
                        Provided however, that any complaint against his/her application and purpose found valid
                        shall be sufficient cause for revocation of this clearance.
                    </p>

                    <p class="text-xs px-5 indent-8 pb-5"> The <strong>CLEARANCE</strong> is issued for <strong>Water Connection
                        from Metro Tagoloan Water District (MTWD)</strong>.
                    </p>

                    <div class="grid grid-cols-12 px-5 pb-5">
                        <div class="col-span-2 flex items-center justify-center h-full">
                            <img src="{{ asset('img/user.jpeg') }}" alt="" class="w-24 border-2 border-slate-500">
                        </div>
                        <div class="flex items-center justify-center h-full col-span-4">
                            <div class="text-center">
                                <p class="text-xs font-semibold underline">Monkey D. Luffy</p>
                                <p class="text-xs">Name & Signature</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center h-full col-span-3">
                            <div class="text-center">
                                <p class="text-xs font-semibold underline">Branden Lawson</p>
                                <p class="text-xs">Punong Brgy.</p>
                            </div>
                        </div>
                        <div class="flex items-center justify-center h-full col-span-3">
                            <div class="text-center">
                                <p class="text-xs font-semibold underline">Kayleigh Barrett</p>
                                <p class="text-xs">Brgy. Official on Duty</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="grid grid-cols-12 mx-5 mb-5 border-2 border-slate-200">
                <div class="col-span-10  pb-2 px-3">
                    <p class="text-xs font-semibold">Remarks:</p>
                    <p class="text-xs font-semibold indent-8">Barangay Clearance Issuance, etc.</p>
                </div>
                <div class="col-span-2 py-1 flex justify-end pr-3">
                <button type="button" class="print:hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800 mr-3">PDF</button>
                <button type="button" onclick="window.print()" class="print:hidden text-white bg-blue-700 hover:bg-blue-800 focus:ring-2 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-1.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Print</button>
                </div>
            </div>

        </div>
    </div>

    <div class="py-1">
        <hr class="text-black">
    </div>

    <div class="mx-auto print:hidden">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>
</x-app-layout>
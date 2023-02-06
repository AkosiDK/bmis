<x-app-layout>
    <x-slot name="header" class="print:hidden">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Barangay Settled Blotter Records
        </h2>
    </x-slot>
    <x-slot name="breadcrumb" class="print:hidden">
        <ol class="breadcrumb">
            <li class="breadcrumb-item print:hidden">Dashboard</li>
        </ol>
    </x-slot>

    <div class="mx-auto">
        <div class="bg-white overflow-hidden sm:rounded-lg shadow-lg ">
            <div class="grid grid-cols-12 py-3">
                <div class="col-span-12 text-center">
                    <p class="text-xs font-bold">Republic of the Philippines</p>
                    <p class="text-xs font-bold">Province of Misamis Oriental</p>
                    <p class="text-xs font-bold">Municipality of Tagoloan, 9001</p>
                    <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-24">
                    <p class="text-sm font-bold">BRGY. BALUARTE</p>
                    <p class="text-xs font-bold">Contact No.: 09123456789</p>
                    <p class="text-xs font-bold">Email: brgybaluarte@gmail.com</p>
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

                <div class="col-span-9 border-2 border-slate-200 ">
                    <p class="text-base text-center font-bold pt-1"> OFFICE OF THE PUNONG TAGAPAMAYAPA</p>
                    <p class="text-xs text-center font-semibold"> Case No.: <span>2023-0001</span></p>
                    <p class="text-xs text-center font-semibold"> For: <span>Reason here</span></p>

                    <hr class="mx-5 my-2">

                    <table class="border-collapse table-auto w-96 text-xs mx-auto mb-2">
                        <thead>
                            <tr>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Complainant</th>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Respondent</th>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Victim(s)</th>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Date of Incident</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">Monkey D. Luffy</td>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">Kaido D. Beast</td>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">Straw Hat Group</td>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">01/2/2023</td>
                            </tr>

                        </tbody>
                    </table>

                    <table class="border-collapse table-auto w-96 text-xs mx-auto mb-2">
                        <thead>
                            <tr>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Time of Incident</th>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Type of Incident</th>
                                <th class="border-2 dark:border-slate-600 text-xs  text-slate-400 dark:text-slate-200 text-left">Incident Location</th>
                            </tr>
                        </thead>
                        <tbody class="bg-white dark:bg-slate-800">
                            <tr>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">04:30 PM</td>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">Thief</td>
                                <td class="border-2 border-slate-100 dark:border-slate-700 text-slate-500 dark:text-slate-400">Zone 6B</td>
                            </tr>

                        </tbody>
                    </table>

                    <p class="text-sm text-center font-bold"> AMICABLE SETTLEMENT</p>
                    <p class="text-xs font-semibold mx-5 indent-8 pb-2">
                        AFTER hearing the testimonies given and carefully examination of the evidence presented in this case. award is herby made as follows:
                    </p>

                    <p class="text-xs text-slate-500 mx-5 indent-8 pb-2 text-clip overflow-hidden">
                        ***********************************Message here***********************************
                    </p>
                    <p class="text-xs text-slate-500 mx-5 indent-8 pb-2">
                        Both parties complainant and respondent agreed to settle this case and will sign in the presence of the
                        <strong> Hon. Branden Lawson, on January 25,2023 </strong> and will bind themeselves to comply honestly
                        and failthfully with the above terms of settlement.
                    </p>
                    <p class="text-xs text-slate-500 mx-5 indent-8 pb-2">
                        Entered into this <strong>25th day of January 2023.</strong>
                    </p>

                    <p class="text-sm text-center font-bold"> ATTESTATION</p>
                    <p class="text-xs font-semibold mx-5 indent-8 pb-5">
                        I hereby certify that the foregoing amicable settlement was entered into by the parties freely and voluntarily after I had explained
                        to them the nature and consequence of such settlement.
                    </p>

                    <div class="grid grid-cols-5 mx-5 pb-3">
                        <div class="col-span-1">
                            <p class="text-xs">Attested By:</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs text-center font-semibold underline">Branden Lawson</p>
                            <p class="text-xs text-center">Punong Barangay</p>
                        </div>
                        <div class="col-span-2">
                            <p class="text-xs text-center font-semibold underline">Official on Duty Here</p>
                            <p class="text-xs text-center">Brgy. Kagawad on Duty</p>
                        </div>
                    </div>

                </div>
            </div>

            <div class="grid grid-cols-12 mx-5 mb-5 border-2 border-slate-200">
                <div class="col-span-12 py-1 flex justify-end pr-3">
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
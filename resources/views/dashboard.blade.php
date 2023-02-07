<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Dashboard
        </h2>
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Home</li>
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>

    <div class="">
        <div class="mx-auto">
            <div class="grid grid-cols-5 gap-3">
                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-blue-600 hover:bg-blue-700 active:bg-blue-800 focus:outline-none focus:ring focus:ring-blue-500">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="8000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">POPULATION</p>
                                </div>
                                <div>
                                    <x-fas-user-large fill="white" class="w-8 h-8" />
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Population</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-green-600 hover:bg-green-700 active:bg-green-800 focus:outline-none focus:ring focus:ring-green-500">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="7000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">VOTERS</p>
                                </div>
                                <div>
                                    <x-fas-user-check fill="white" class="w-8 h-8" />
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Voters</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-yellow-500 hover:bg-yellow-600 active:bg-yellow-700 focus:outline-none focus:ring focus:ring-yellow-400">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="6000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">NON VOTERS</p>
                                </div>
                                <div>
                                    <x-fas-user-xmark fill="white" class="w-8 h-8" />

                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Non Voters</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-sky-500 hover:bg-sky-600 active:bg-sky-700 focus:outline-none focus:ring focus:ring-sky-400">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="5000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">SENIOR CITIZEN</p>
                                </div>
                                <div>
                                    <x-fas-user-group fill="white" class="w-8 h-8" />
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Senior Citizen</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-red-500 hover:bg-red-600 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="3000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">PWD</p>
                                </div>
                                <div>
                                    <x-fas-wheelchair fill="white" class="w-8 h-8" />
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total PWD</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

            </div>

            
        </div>



    </div>

    <div class="mx-auto py-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>

    <script>
        const counters = document.querySelectorAll('.dashboardcounter');
        const speed = 200;

        counters.forEach(dashboardcounter => {
            const updateCount = () => {
                const target = +dashboardcounter.getAttribute('data-target');
                const count = +dashboardcounter.textContent;

                const inc = target / speed;

                if (count < target) {
                    dashboardcounter.textContent = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    count.textContent = target;
                }
            }

            updateCount();
        });
    </script>
</x-app-layout>
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
            <div class="bg-white overflow-hidden sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="grid grid-cols-4 gap-5">
                        <div class="rounded-lg shadow-xl col-span-3">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load('current', {
                                    'packages': ['corechart']
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Day', 'Brgy. Clearane', 'Indigency Cert.', 'Residency Cert.', 'Business Permit', 'Others'],
                                        ['Monday', 999, 899, 799, 699, 599],
                                        ['Tuesday', 1, 1, 1, 1, 1],
                                        ['Wednesday', 999, 899, 799, 699, 599],
                                        ['Thursday', 1, 1, 1, 1, 1],
                                        ['Friday', 999, 899, 799, 699, 599],
                                    ]);

                                    var options = {
                                        curveType: 'function',
                                        legend: {
                                            position: 'top'

                                        }
                                    };

                                    var chart = new google.visualization.LineChart(document.getElementById('curve_chart'));

                                    chart.draw(data, options);
                                }
                            </script>
                            <div class="mx-auto pt-6 pl-12 text-lg font-bold">Weekly Revenue Chart</div>
                            <div id="curve_chart" style="width: 100; height:350px;" class="mx-auto"></div>
                        </div>
                        <div class="rounded-lg shadow-xl my-auto col-span-1">
                            <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
                            <script type="text/javascript">
                                google.charts.load("current", {
                                    packages: ["corechart"]
                                });
                                google.charts.setOnLoadCallback(drawChart);

                                function drawChart() {
                                    var data = google.visualization.arrayToDataTable([
                                        ['Day', 'Revenue'],
                                        ['Brgy.Clearance', 100],
                                        ['Indigency Cert.', 100],
                                        ['Residency Cert.', 100],
                                        ['Business Permit', 100],
                                        ['Others', 100]
                                    ]);

                                    var options = {
                                        pieHole: 0.1,
                                        legend: {
                                            position: 'top'
                                        }
                                    };

                                    var chart = new google.visualization.PieChart(document.getElementById('donutchart'));
                                    chart.draw(data, options);
                                }
                            </script>
                            <div class="mx-auto pt-6 pl-12 text-lg font-bold">Total Weekly Revenue per Category</div>
                            <div id="donutchart" style="width: 100; height:350px;" class="mx-auto"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="mx-auto pt-5">
            <div class="grid grid-cols-4 gap-5">
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
                    <button class="rounded-lg bg-indigo-500 hover:bg-indigo-600 active:bg-indigo-700 focus:outline-none focus:ring focus:ring-indigo-400">
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

            </div>

            <div class="grid grid-cols-4 gap-5 pt-5">
                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-sky-400 hover:bg-sky-500 active:bg-sky-600 focus:outline-none focus:ring focus:ring-sky-300">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="4000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">ESTABLISHMENT</p>
                                </div>
                                <div>
                                    <x-fas-building fill="white" class="w-8 h-8" />
                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Business Permit</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-blue-500 hover:bg-blue-600 active:bg-blue-700 focus:outline-none focus:ring focus:ring-blue-400">
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

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-red-500 hover:bg-red-600 active:bg-red-700 focus:outline-none focus:ring focus:ring-red-400">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="2000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">BLOTTER</p>
                                </div>
                                <div>
                                    <x-fas-database fill="white" class="w-8 h-8" />

                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Blotter</p>
                                </div>
                            </div>
                        </div>
                    </button>
                </div>

                <div class="rounded-lg shadow-xl col-span-1">
                    <button class="rounded-lg bg-teal-500 hover:bg-teal-600 active:bg-teal-700 focus:outline-none focus:ring focus:ring-teal    -400">
                        <div class="mx-auto  p-5" style="width: 100; height:150px;">
                            <div class="grid grid-cols-12">
                                <div class="col-span-11">
                                    <p class="font-bold text-white text-start dashboardcounter" data-target="1000" style="font-size:25px;">0</p>
                                    <p class="text-white text-start">REVENUE</p>
                                </div>
                                <div>
                                    <x-fas-peso-sign fill="white" class="w-8 h-8" />

                                </div>
                            </div>
                            <div class="grid grid-cols-12">
                                <div class="col-span-12">
                                    <p class="text-white text-end text-xs pt-8 tracking-widest">Total Revenue</p>
                                </div>
                            </div>
                        </div>
                    </button>
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
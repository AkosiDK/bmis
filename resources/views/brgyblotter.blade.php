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
                                            <p class="font-bold text-white text-start counter" data-target="5000" style="font-size:25px;">0</p>
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
                                            <p class="font-bold text-white text-start counter" data-target="4000" style="font-size:25px;">0</p>
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
                                            <p class="font-bold text-white text-start counter" data-target="3000" style="font-size:25px;">0</p>
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
                                            <p class="font-bold text-white text-start counter" data-target="2000" style="font-size:25px;">0</p>
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
                                            <p class="font-bold text-white text-start counter" data-target="1000" style="font-size:25px;">0</p>
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
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800" id="totalblotter" role="tabpanel" aria-labelledby="totalblotter-tab">
                SAMPLE1
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="activeblotter" role="tabpanel" aria-labelledby="activeblotter-tab">
                SAMPLE2
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="settledblotter" role="tabpanel" aria-labelledby="settledblotter-tab">
                SAMPLE3
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="scheduledblotter" role="tabpanel" aria-labelledby="scheduledblotter-tab">
                SAMPLE4
            </div>
            <div class="bg-gray-50 p-4 rounded-lg dark:bg-gray-800 hidden" id="unscheduledblotter" role="tabpanel" aria-labelledby="unscheduledblotter-tab">
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
        const counters = document.querySelectorAll('.counter');
        const speed = 200;

        counters.forEach(counter => {
            const updateCount = () => {
                const target = +counter.getAttribute('data-target');
                const count = +counter.textContent;

                const inc = target / speed;

                if (count < target) {
                    counter.textContent = Math.ceil(count + inc);
                    setTimeout(updateCount, 1);
                } else {
                    count.textContent = target;
                }
            }

            updateCount();
        });
    </script>

</x-app-layout>
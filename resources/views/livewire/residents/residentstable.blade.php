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
        @foreach($residents as $resident)
        <tr class="bg-gray-100 dark:bg-gray-800">
            <td class="px-6 py-2 text-clip overflow-hidden ...">
             {{$resident->firstname }} {{$resident->middlename }} {{$resident->lastname }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->nationalid }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->alias}}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->gender}}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->age }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->birthdate }}
            </td>

            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->civilstatus }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->voterstatus }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                {{$resident->pwd }}
            </td>
            <td class="px-6 py-2 text-clip overflow-hidden ...">
                Zone 6B, Baluarte, Tagoloan, Mis. Or.
            </td>
            <td class="px-6 py-2">
                <span class="bg-green-600 text-white text-xs font-medium items-center file:mr-2 px-2.5 py-0.5 rounded-full" title="Official is Active">
                    {{$resident->alivedordeceased }}
                </span>
            </td>
            <td class="px-6 py-2">
                <!-- Update Modal -->
                <button data-modal-target="editresident-modal" data-modal-toggle="editresident-modal" class="inline-flex items-center hover:bg-blue-400 focus:ring-2 focus:outline-none  focus:ring-blue-500" title="Edit Resident">
                    <x-fas-square-pen class="w-4 h-4  fill-blue-600" />
                </button>
                <!-- Insert Update Modal -->

                <livewire:residents.updateresident>

                <!-- View Resident Modal -->
                <button data-modal-target="viewresident-modal" data-modal-toggle="viewresident-modal" class="inline-flex items-center hover:bg-green-400 focus:ring-2 focus:outline-none  focus:ring-green-500" title="View Resident">
                    <x-fas-eye class="w-4 h-4  fill-green-600" />
                </button>

                <!-- Insert View Modal -->

                <livewire:residents.viewresident>

                <!-- Delete Default Modal -->
                <button data-modal-target="popup-modal" data-modal-toggle="popup-modal" class="inline-flex items-center hover:bg-red-400 focus:ring-2 focus:outline-none  focus:ring-red-500" title="Delete Official">
                    <x-fas-square-xmark class=" w-4 h-4 fill-red-600" />
                </button>
                <!-- Insert Delete Modal -->
                <livewire:residents.deleteresident>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
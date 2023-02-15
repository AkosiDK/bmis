<x-app-layout>
    <x-slot name="header">
        <h2 class="text-lg text-blue-100 md:text-2xl">
            Settings
        </h2>
        
    </x-slot>
    <x-slot name="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item">Dashboard</li>
        </ol>
    </x-slot>
    <!-- Interface -->
    <h2 class="text-lg md:text-2xl">
            Interface
        </h2>
   <p class="text-sm opacity-75">
            Manage your interface here.
        </p>
        <hr class="h-px my-4 bg-gray-200 border-0 dark:bg-gray-700">

    <!-- -->
    <div class="grid grid-cols-4">
    <h3 class="text-base md:text-2xl">
            Logo
            <p class="text-sm opacity-75">
            Upload your logo here.
        </p>
        </h3>
        <form>
<input class="block w-full text-sm text-blue-900 border border-blue-300 rounded-lg cursor-pointer bg-blue-50 dark:text-blue-400 focus:outline-none dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400" id="file_input" type="file">
        </form>

    </div>
    <div class="grid grid-cols-4 mt-5">
    <h3 class="text-base md:text-2xl">
            Background Image
            <p class="text-sm opacity-75">
            Upload your background image here.
        </p>
        </h3>
        <form>
        <input class="block w-full text-sm text-blue-900 border border-blue-300 rounded-lg cursor-pointer bg-blue-50 dark:text-blue-400 focus:outline-none dark:bg-blue-700 dark:border-blue-600 dark:placeholder-blue-400" id="file_input" type="file">
        </form>
    </div>

    <div class="grid grid-cols-4 mt-5">
    <h3 class="text-base md:text-2xl">
            Barangay
            <p class="text-sm opacity-75">
            Edit your barangay here.
        </p>
        </h3>
        <input type="text" id="phone" class="bg-white-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-5 my-5" placeholder="Baluarte Proper">
    </div>
    
    <div class="grid grid-cols-4 mt-5">
    <h3 class="text-base md:text-2xl">
            Location
            <p class="text-sm opacity-75">
            Edit your location here.
        </p>
        </h3>
        <input type="text" id="phone" class="bg-white-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-5 my-5" placeholder="Tagoloan, Misamis Oriental">
    </div>
    
    <div class="grid grid-cols-4 mt-5">
    <h3 class="text-base md:text-2xl">
             Zip
            <p class="text-sm opacity-75">
            Enter your zip code here.
        </p>
        </h3>
        <input type="tel" id="phone" class="bg-white-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-3/12 p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-5 my-5" placeholder="1111">
    </div>

    <div class="grid grid-cols-4 mt-5">
    <h3 class="text-base md:text-2xl">
             Contact Number
            <p class="text-sm opacity-75">
            Enter your contant number here.
        </p>
        </h3>
         <input type="tel" id="phone" class="bg-white-50 border border-black-300 text-black-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-white-700 dark:border-white-600 dark:placeholder-gray-400 dark:text-dark dark:focus:ring-blue-500 dark:focus:border-blue-500 mx-5 my-5" placeholder="+63123123123" pattern="[0-9]{3}-[0-9]{2}-[0-9]{3}">
    </div>
    <div class="flex justify-center">
    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded mx-5 content-center" input type="image">Submit</button>
    </div>
    
    

   <div class="">
    <div class="mx-auto pt-2">
        <p class="text-center text-xs">@ 2023 | Barangay Monitoring Information System</p>
    </div>

</x-app-layout>


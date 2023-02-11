<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/flowbite.min.css" rel="stylesheet" />
  <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.2/datepicker.min.js"></script>
  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.0/jquery.js"></script>
  <script src="https://f001.backblazeb2.com/file/buonzz-assets/jquery.ph-locations.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/tw-elements/dist/css/index.min.css" />
  <script src="https://cdn.jsdelivr.net/npm/tw-elements/dist/js/index.min.js"></script>
  <title>News Page</title>
</head>

<body class="bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('./img/BG.jpg');">

  <header class="flex items-center justify-center">
    <nav class="bg-gradient-to-r from-blue-700 px-2 sm:px-4 py-2.5 dark:bg-gray-900 w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
      <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="#" class="flex items-center">
          <img src="{{'./img/logo.png'}}" class="h-6 mr-3 sm:h-9" alt="Logo">
          <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-white">BMIS</span>
        </a>
        <div class="flex md:order-2">
          <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-3 md:mr-0 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button>
          <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600" aria-controls="navbar-sticky" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z" clip-rule="evenodd"></path>
            </svg>
          </button>
        </div>
        <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
          <ul class="flex flex-col p-4 mt-4 border border-gray-100 rounded-lg md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700" aria-current="page">Home</a>
            </li>
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Announcement</a>
            </li>
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">News</a>
            </li>
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Document</a>
            </li>
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Official</a>
            </li>
            <li>
              <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>

  <section class="flex h-screen w-screen justify-center items-center">
    <div class="grid grid-cols-8 gap-x-5">
      <div class="col-span-2">
        <div class="max-w-sm border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <x-fas-file-lines class="w-48 h-60 fill-gray-700 py-5" />
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-5 py-2 text-center text-2xl font-bold tracking-tight text-white dark:text-white">
              BARANGAY CLEARANCE
              <span class="text-lg block">Barangay Baluarte</span>
            </h5>
            <div class="py-5 px-5">
              <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Certificate Purpose</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery Method</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Date Requested</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery/Pickup Date</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Remarks</span>
                </li>
              </ul>
            </div>
            <div class="flex justify-center align-center pb-5">
              <button data-bs-toggle="modal" data-bs-target="#brgycertificates" type="button" class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Request Now
                <x-fas-arrow-right class="w-6 pl-2" />
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-2">
        <div class="max-w-sm border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <x-fas-people-group class="w-48 h-60 fill-gray-700 py-5" />
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-5 py-2 text-center text-2xl font-bold tracking-tight text-white dark:text-white">
              BARANGAY INDIGENCY
              <span class="text-lg block">Barangay Baluarte</span>
            </h5>
            <div class="py-5 px-5">
              <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Certificate Purpose</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery Method</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Date Requested</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery/Pickup Date</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Remarks</span>
                </li>
              </ul>
            </div>
            <div class="flex justify-center align-center pb-5">
              <button data-bs-toggle="modal" data-bs-target="#brgycertificates" type="button" class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Request Now
                <x-fas-arrow-right class="w-6 pl-2" />
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-2">
        <div class="max-w-sm border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <x-fas-people-roof class="w-48 h-60 fill-gray-700 py-5" />
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-5 py-2 text-center text-2xl font-bold tracking-tight text-white dark:text-white">
              BARANGAY RESIDENCY
              <span class="text-lg block">Barangay Baluarte</span>
            </h5>
            <div class="py-5 px-5">
              <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Certificate Purpose</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery Method</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Date Requested</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery/Pickup Date</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Remarks</span>
                </li>
              </ul>
            </div>
            <div class="flex justify-center align-center pb-5">
              <button data-bs-toggle="modal" data-bs-target="#brgycertificates" type="button" class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Request Now
                <x-fas-arrow-right class="w-6 pl-2" />
              </button>
            </div>
          </div>
        </div>
      </div>
      <div class="col-span-2">
        <div class="max-w-sm border-2 border-gray-200 rounded-lg shadow dark:bg-gray-800 dark:border-gray-700">
          <div class="flex justify-center align-center bg-gray-300">
            <x-fas-id-badge class="w-48 h-60 fill-gray-700 py-5" />
          </div>
          <div class="">
            <h5 class="bg-gray-700 px-5 py-2 text-center text-2xl font-bold tracking-tight text-white dark:text-white">
              BARANGAY ID
              <span class="text-lg block">Barangay Baluarte</span>
            </h5>
            <div class="py-5 px-5">
              <ul class="space-y-4 text-left text-gray-500 dark:text-gray-400">
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Proof of Residency</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery Method</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Date Requested</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Delivery/Pickup Date</span>
                </li>
                <li class="flex items-center space-x-3">
                  <!-- Icon -->
                  <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                  </svg>
                  <span class="text-yellow-400">Remarks</span>
                </li>
              </ul>
            </div>
            <div class="flex justify-center align-center pb-5">
              <button data-bs-toggle="modal" data-bs-target="#brgycertificates" type="button" class="inline-flex text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Request Now
                <x-fas-arrow-right class="w-6 pl-2" />
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ====== barangay certificates modal -->
  <div class="modal fade fixed top-0 left-0 hidden w-full h-full outline-none overflow-x-hidden overflow-y-auto" id="brgycertificates" tabindex="-1" aria-labelledby="brgycertificates" aria-modal="true" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable relative w-auto pointer-events-none">
      <div class="modal-content border-none shadow-lg relative flex flex-col w-full pointer-events-auto bg-gray-100 bg-clip-padding rounded-md outline-none text-current">
        <div class="modal-header flex flex-shrink-0 items-center justify-between p-4 border-b border-gray-200 rounded-t-md bg-gradient-to-r from-blue-700 to-blue-400">
          <h5 class="text-xl font-medium leading-normal text-white" id="brgycertificatesLabel">
            Request Form
          </h5>
          <button type="button" class="text-gray-400 bg-transparent hover:bg-blue-600 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-600 dark:hover:text-white" data-bs-dismiss="modal">
            <svg aria-hidden="true" class="w-5 h-5" fill="white" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
              <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path>
            </svg>
            <span class="sr-only">Close modal</span>
          </button>
        </div>
        <div class="modal-body relative p-4">

          <form class="">
            <div class="relative z-0 w-full mb-6 group">
              <select id="floating_brgycertificates" name="floating_brgycertificates" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                <option>Brgy. Clearance</option>
                <option>Brgy. Indigency</option>
                <option>Brgy. Residency</option>
                <option>Brgy. ID</option>
              </select>
              <label for="floating_brgycertificates" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Brgy. Certificates</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <input type="text" name="floating_purpose" id="floating_purpose" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="floating_purpose" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Purpose</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <select id="floating_deliverymethod" name="floating_deliverymethod" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required>
                <option>Pickup</option>
                <option>COD</option>
              </select>
              <label for="floating_deliverymethod" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Delivery method</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <input type="date" name="floating_deliverypickupdate" id="floating_deliverypickupdate" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
              <label for="floating_deliverypickupdate" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Deliver/Pickup Date</label>
            </div>
            <div class="relative z-0 w-full mb-6 group">
              <textarea name="floating_remarks" id="floating_remarks" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
              <label for="floating_remarks" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Remarks</label>
            </div>

          </form>

        </div>
        <div class="modal-footer flex flex-shrink-0 flex-wrap items-center justify-end p-4 border-t border-gray-200 rounded-b-md">
          <button type="button" class="inline-block px-6 py-2.5 bg-gray-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-gray-700 hover:shadow-lg focus:bg-gray-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-800 active:shadow-lg transition duration-150 ease-in-out" data-bs-dismiss="modal">
            Close
          </button>
          <button type="button" class="inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out ml-1">
            Submit
          </button>
        </div>
      </div>
    </div>
  </div>

  <!-- ====== Footer Section Start -->
  <footer class="relative z-10 bg-gradient-to-r from-red-700  to-blue-700 pt-20 pb-10 lg:pt-[120px] lg:pb-20">
    <div class="container mx-auto">
      <div class="-mx-4 flex flex-wrap">
        <div class="w-full px-4 sm:w-3/3 lg:w-3/12">
          <div class="mb-10 w-full">
            <a href="#" class="flex items-center mb-8">
              <img src="{{'./img/logo.png'}}" class="h-6 mr-3 sm:h-9" alt="Logo">
              <span class="self-center text-xl font-bold whitespace-nowrap dark:text-white text-white">BMIS</span>
            </a>
            <p class="text-white mb-9 text-base">
              Baluarte, Tagoloan, Misamis Oriental, 9001
              Monday to Friday (8AM - 5PM)
            </p>
            <p class="text-dark flex items-center text-sm font-medium mb-2">
              <span class="text-primary mr-3">
                <x-clarity-phone-handset-solid class="w-5 fill-white" />
              </span>
              <span class="text-white">09197568493</span>
            </p>
            <p class="text-dark flex items-center text-sm font-medium">
              <span class="text-primary mr-3">
                <x-clarity-email-solid class="w-5 fill-white" />
              </span>
              <span class="text-white">brgybaluarte@gmail.com</span>
            </p>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-4/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Navigation</h4>
            <ul>
              <div class="grid grid-cols-6">
                <div class="col-span-3">
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Home
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Announcement
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      News
                    </a>
                  </li>
                </div>
                <div class="col-span-3">
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Document
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      Official
                    </a>
                  </li>
                  <li>
                    <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                      About
                    </a>
                  </li>
                </div>
              </div>
            </ul>
          </div>
        </div>

        <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Quick Links</h4>
            <ul>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Clearance
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Indigency
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Residency
                </a>
              </li>
              <li>
                <a href="#" class="text-yellow-400 hover:text-white mb-2 inline-block text-base leading-loose">
                  Brgy. Resident ID
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
          <div class="mb-10 w-full">
            <h4 class="text-white mb-9 text-lg font-semibold">Follow Us On</h4>
            <div class="mb-6 flex items-center">
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-facebook class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-twitter class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-instagram class="w-6 fill-blue-700" />
              </a>
              <a href="#" class="text-white bg-white  hover:border-yellow-400 mr-3 flex h-8 w-8 items-center justify-center rounded border-2 hover:text-white sm:mr-4 lg:mr-3 xl:mr-4">
                <x-fab-square-youtube class="w-6 fill-blue-700" />
              </a>
            </div>
            <p class="text-white text-base">&copy; {{ date('Y') }} | BMIS</p>
          </div>
        </div>
      </div>

    </div>
    <div>
      <span class="absolute left-0 bottom-0 z-[-1]">
        <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z" fill="url(#paint0_linear_1179_5)" />
          <defs>
            <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
              <stop stop-color="#3056D3" stop-opacity="0.08" />
              <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </span>
      <span class="absolute top-10 right-10 z-[-1]">
        <svg width="75" height="75" viewBox="0 0 75 75" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M37.5 -1.63918e-06C58.2107 -2.54447e-06 75 16.7893 75 37.5C75 58.2107 58.2107 75 37.5 75C16.7893 75 -7.33885e-07 58.2107 -1.63918e-06 37.5C-2.54447e-06 16.7893 16.7893 -7.33885e-07 37.5 -1.63918e-06Z" fill="url(#paint0_linear_1179_4)" />
          <defs>
            <linearGradient id="paint0_linear_1179_4" x1="-1.63917e-06" y1="37.5" x2="75" y2="37.5" gradientUnits="userSpaceOnUse">
              <stop stop-color="#13C296" stop-opacity="0.31" />
              <stop offset="1" stop-color="#C4C4C4" stop-opacity="0" />
            </linearGradient>
          </defs>
        </svg>
      </span>
    </div>
  </footer>
  <!-- ====== Footer Section End -->

  <!-- ====== refresh start top script-->
  <script>
    window.onbeforeunload = function() {
      window.scrollTo(0, 0);
    }
  </script>

</body>

</html>
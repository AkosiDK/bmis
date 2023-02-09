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
    <title>Landing Page</title>
</head>

<body class="bg-cover bg-center bg-no-repeat bg-fixed" style="background-image: url('./img/BG.jpg');">

    <header class="flex items-center justify-center">
        <nav class="bg-gradient-to-r from-blue-700 px-2 sm:px-4 py-2.5 dark:bg-gray-900 fixed w-full z-20 top-0 left-0 border-b border-gray-200 dark:border-gray-600">
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
                        <li>
                            <a href="#" class="block text-lg py-2 pl-3 pr-4 text-white rounded bg-clip-text hover:font-semibold hover:bg-gradient-to-r from-yellow-400 to-blue-600 hover:text-transparent hover:bg-gray-100 md:hover:bg-transparent md:hover:underline md:p-0 md:dark:hover:text-white dark:text-gray-400 dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Contact</a>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>

    <section class="h-screen flex items-center justify-center">

      <div class="flex justify-center">
        <div class="pb-8">
            <img src="{{ asset('img/brgylogo.png') }}" alt="" class="mx-auto w-48 border-2 rounded-full">
          <p class="text-5xl text-white font-bold text-center pb-4">Welcome to Barangay</p>
          <p class="text-9xl text-white font-bold text-center bg-clip-text bg-gradient-to-r from-yellow-400 to-blue-700 text-transparent pb-8">Baluarte Proper</p>
          <p class="text-5xl text-white font-bold text-center pb-2">Tagoloan, Misamis Oriental, 9001</p>
          <p class="text-3xl text-white font-bold text-center pb-2">Open Hours of Barangay: Monday to Friday (8AM - 5PM)</p>
          <p class="text-2xl text-blue-500 font-bold text-center">Contact No.: 09197568493 | Email: brgybaluarte@gmail.com</p>
        </div>
      </div>

    </section>



</body>

</html>
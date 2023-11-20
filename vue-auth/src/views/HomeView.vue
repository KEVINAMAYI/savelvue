<script setup>

</script>

<template>

  <div class="container px-7 py-7 mx-auto">


    <div
        class="w-full p-4 text-center mb-20 bg-white border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-white dark:border-white-700">
      <div class="flex w-full justify-center">
        <img src="../assets/main_logo.PNG" class="w-21 h-18" alt="">
      </div>
      <p class="mb-5 text-base text-gray-500 sm:text-lg dark:text-gray-400">
        Savelvue( Sanctum, Sentinel, Laravel, and Vue) scaffold. Savelvue contains:
      </p>
      <ul class="list-decimal justify-start">
        <ol>
          <a href="https://laravel.com/docs/9.x/sanctum#main-content" target="_blank">Laravel with Sanctum</a> for Authenticating APIs with token
        </ol>
        <ol>
          <a href="https://cartalyst.com/manual/sentinel/6.x#introduction" target="_blank">Sentinel</a>  ( Laravel Package for Managing Roles, Permissions and advanced Authentication features such as OTP
          and Account activation ).
        </ol>
        <ol>
          <a href="https://vuejs.org/guide/introduction.html" target="_blank">Vue</a>Front scaffold with Pinia for state management
        </ol>
      </ul>

      <div class="items-center justify-center space-y-4 sm:flex sm:space-y-0 sm:space-x-4 rtl:space-x-reverse">
        <a href="https://github.com/KEVINAMAYI/savelvue" target="_blank"
           class="w-full sm:w-auto bg-white hover:bg-white-700 focus:ring-4 focus:outline-none focus:ring-gray-300 text-white rounded-lg inline-flex items-center justify-center px-4 py-2.5 dark:bg-white-700 dark:hover:bg-white-600 dark:focus:ring-gray-700">
          <img src="../assets/github.png" class="w-15 h-8 mr-2" alt="">
          <div class="text-left rtl:text-right">
            <div class="mb-1 text-black  text-xs">Download now</div>
            <div class="-mt-1 font-sans text-sm text-black font-semibold">Github</div>
          </div>
        </a>
      </div>
    </div>

    <ol class="relative border-s border-gray-200 dark:border-gray-700">
      <li class="mb-10 ms-6">
        <span
            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </span>
        <h3 class="flex items-center mb-1 text-lg font-semibold text-gray-900 dark:text-white">Savelvue Authentication
          APIs with Vue Frontend Scaffold v1.2.0<span
              class="bg-blue-100 text-blue-800 text-sm font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300 ms-3">Latest</span>
        </h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on November
          20th, 2023
        </time>
        <p class="mb-4 text-base font-normal text-gray-500 dark:text-gray-400">Get access to Laravel authentication APIs
          that can be used with different frontend frameworks.</p>
        <a href="https://github.com/KEVINAMAYI/savelvue"
           target="_blank"
           class="inline-flex items-center px-4 py-2 text-sm font-medium text-gray-900 bg-white border border-gray-200 rounded-lg hover:bg-gray-100 hover:text-blue-700 focus:z-10 focus:ring-4 focus:outline-none focus:ring-gray-200 focus:text-blue-700 dark:bg-gray-800 dark:text-gray-400 dark:border-gray-600 dark:hover:text-white dark:hover:bg-gray-700 dark:focus:ring-gray-700">
          <svg class="w-3.5 h-3.5 me-2.5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor"
               viewBox="0 0 20 20">
            <path
                d="M14.707 7.793a1 1 0 0 0-1.414 0L11 10.086V1.5a1 1 0 0 0-2 0v8.586L6.707 7.793a1 1 0 1 0-1.414 1.414l4 4a1 1 0 0 0 1.416 0l4-4a1 1 0 0 0-.002-1.414Z"/>
            <path
                d="M18 12h-2.55l-2.975 2.975a3.5 3.5 0 0 1-4.95 0L4.55 12H2a2 2 0 0 0-2 2v4a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2v-4a2 2 0 0 0-2-2Zm-3 5a1 1 0 1 1 0-2 1 1 0 0 1 0 2Z"/>
          </svg>
          Download</a>
      </li>
      <li class="mb-10 ms-6">
        <span
            class="absolute flex items-center justify-center w-6 h-6 bg-blue-100 rounded-full -start-3 ring-8 ring-white dark:ring-gray-900 dark:bg-blue-900">
            <svg class="w-2.5 h-2.5 text-blue-800 dark:text-blue-300" aria-hidden="true"
                 xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                <path
                    d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
            </svg>
        </span>
        <h3 class="mb-1 text-lg font-semibold text-gray-900 dark:text-white">Savelvue Authentication APIs v1.0.0</h3>
        <time class="block mb-2 text-sm font-normal leading-none text-gray-400 dark:text-gray-500">Released on November
          17th, 2023
        </time>
        <p class="text-base font-normal text-gray-500 dark:text-gray-400"> Frontend Authentication scaffold build with
          Vue
          Framework.</p>
      </li>
    </ol>
  </div>


  <footer class="bg-white dark:bg-gray-900">
    <div class="mx-auto w-full max-w-screen-xl">
      <div class="grid grid-cols-2 gap-8 px-4 py-6 lg:py-8 md:grid-cols-4">
        <div>
          <h2 class="mb-6 text-sm font-semibold text-gray-900 uppercase dark:text-white">Company</h2>
          <ul class="text-gray-500 dark:text-gray-400 font-medium">
            <li class="mb-4">
              <a href="https://github.com/KEVINAMAYI/savelvue" target="_blank" class=" hover:underline">About</a>
            </li>
          </ul>
        </div>

      </div>
      <div class="px-4 py-6 bg-gray-100 dark:bg-gray-700 md:flex md:items-center md:justify-between">
        <span class="text-sm text-gray-500 dark:text-gray-300 sm:text-center">© 2023 <a href="https://flowbite.com/">Savelvue™</a>. All Rights Reserved.
        </span>
      </div>
    </div>
  </footer>
</template>
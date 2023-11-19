<script setup>
import {onMounted} from "vue";
import {useAuthStore} from "../stores/Authstore";

const authStore = useAuthStore();

</script>

<template>
  <!-- Main navigation container -->
  <nav
      class="relative flex sticky top-0 z-50 w-full flex-wrap items-center justify-between bg-[#FBFBFB] py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:py-4"
      data-te-navbar-ref>

    <div class="flex w-full flex-wrap items-center justify-between px-3">
      <div>
        <a
            class="mx-2 my-1 flex items-center text-xl font-semibold text-gray-900 dark:text-white hover:text-neutral-900 focus:text-neutral-900 lg:mb-0 lg:mt-0"
            href="/">
          <img class="w-15 h-8 mr-2" src="../assets/savelvue.png" loading="lazy" alt="logo">
          Savelvue
        </a>
      </div>

      <!-- Hamburger button for mobile view -->
      <button
          class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
          type="button"
          data-te-collapse-init
          data-te-target="#navbarSupportedContent4"
          aria-controls="navbarSupportedContent4"
          aria-expanded="false"
          aria-label="Toggle navigation">
        <!-- Hamburger icon -->
        <span class="[&>svg]:w-7">
        <svg
            xmlns="http://www.w3.org/2000/svg"
            viewBox="0 0 24 24"
            fill="currentColor"
            class="h-7 w-7">
          <path
              fill-rule="evenodd"
              d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
              clip-rule="evenodd"/>
        </svg>
      </span>
      </button>

      <!-- Collapsible navbar container -->
      <div
          class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
          id="navbarSupportedContent4"
          data-te-collapse-item>
        <!-- Left links -->
        <ul
            class="list-style-none mr-auto flex flex-col pl-0 lg:mt-1 lg:flex-row"
            data-te-navbar-nav-ref>

        </ul>



        <div v-if="authStore.token" class="flex items-center">
          <a
              href="/logout"
              type="button"
              data-te-ripple-init
              data-te-ripple-color="light"
              class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
            logout
          </a>
        </div>

        <div v-if="!authStore.token" class="flex items-center">
          <a
              href="/login"
              type="button"
              data-te-ripple-init
              data-te-ripple-color="light"
              class="mr-3 inline-block rounded px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary transition duration-150 ease-in-out hover:bg-neutral-100 hover:text-primary-600 focus:text-primary-600 focus:outline-none focus:ring-0 active:text-primary-700 motion-reduce:transition-none">
            login
          </a>
          <a
              href="/register"
              type="button"
              data-te-ripple-init
              data-te-ripple-color="light"
              class="mr-3 inline-block rounded bg-primary px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-white shadow-[0_4px_9px_-4px_#3b71ca] transition duration-150 ease-in-out hover:bg-primary-600 hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:bg-primary-600 focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] focus:outline-none focus:ring-0 active:bg-primary-700 active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.3),0_4px_18px_0_rgba(59,113,202,0.2)] motion-reduce:transition-none dark:shadow-[0_4px_9px_-4px_rgba(59,113,202,0.5)] dark:hover:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:focus:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)] dark:active:shadow-[0_8px_9px_-4px_rgba(59,113,202,0.2),0_4px_18px_0_rgba(59,113,202,0.1)]">
            Sign up
          </a>
        </div>
      </div>
    </div>
  </nav>
</template>



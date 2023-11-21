<script setup>
import {onMounted, ref} from "vue";
import {useAuthStore} from '../stores/Authstore.js';

const authStore = useAuthStore();

const form = ref({
  first_name: '',
  last_name: '',
  email: '',
  password: '',
  password_confirmation: ''
});


</script>
<template>
  <main class="relative z-10">

    <div v-if="authStore.isLoading" class="flex absolute pt-20 justify-center w-full z-30 mt-20">
      <div role="status">
        <svg aria-hidden="true" class="w-12 h-12 text-gray-200 animate-spin dark:text-gray-600 fill-blue-600"
             viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path
              d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
              fill="currentColor"/>
          <path
              d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
              fill="currentFill"/>
        </svg>
        <span class="sr-only">Loading...</span>
      </div>
    </div>

    <section class="mt-14 mb-14">
      <div id="success_alert" v-if="authStore.success.message"
           class="flex items-center w-1/2 mx-auto p-4 mb-14  text-sm text-green-800 border border-green-300 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400 dark:border-green-800"
           role="alert">
        <span class="font-medium"> {{ authStore.success.message }}</span>
      </div>

      <div class="flex -mt-8 flex-col items-center justify-center px-6 py-8 mx-auto  lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-15 h-8 mr-2" src="../assets/savelvue.png" alt="logo">
          Savelvue
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-lg xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight text-gray-900 md:text-2xl dark:text-white">
              Create account
            </h1>
            <form @submit.prevent="authStore.register(form)" class="space-y-4 md:space-y-6">
              <div class="grid grid-cols-2 gap-4">
                <div>
                  <label for="first_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">First
                    Name</label>
                  <input v-model="form.first_name" type="text" name="first_name" id="first_name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         placeholder="Kevin">
                  <p v-if="authStore.errors.first_name" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                      class="font-medium">{{ authStore.errors.first_name[0] }}</span></p>
                </div>
                <div>
                  <label for="last_name" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Last
                    Name</label>
                  <input v-model="form.last_name" type="text" name="last_name" id="last_name"
                         class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                         placeholder="Amayi">
                  <p v-if="authStore.errors.last_name" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                      class="font-medium">{{ authStore.errors.last_name[0] }}</span></p>
                </div>
              </div>
              <div>
                <label for="email"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Email</label>
                <input v-model="form.email" type="email" name="password" id="email" placeholder="test@gmail.com"
                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <p v-if="authStore.errors.email" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{ authStore.errors.email[0] }}</span></p>
              </div>
              <div>
                <label for="password"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Password</label>
                <input v-model="form.password" type="password" name="password" id="password" placeholder="••••••••"
                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <p v-if="authStore.errors.password" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{ authStore.errors.password[0] }}</span></p>
              </div>
              <div>
                <label for="confirm-password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Confirm
                  password</label>
                <input v-model="form.password_confirmation" type="password" name="confirm-password"
                       id="confirm-password" placeholder="••••••••"
                       class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                >
                <p v-if="authStore.errors.password_confirmation"
                   class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{ authStore.errors.password_confirmation[0] }}</span></p>
              </div>
              <button type="submit"
                      class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Create an account
              </button>
              <router-link to="/login" class="text-sm font-light text-gray-500 dark:text-gray-400">
                Already have an account? <a href="#"
                                            class="font-medium text-primary-600 hover:underline dark:text-primary-500">Login
                here</a>
              </router-link>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>



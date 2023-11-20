<script setup>
import {useAuthStore} from "../stores/Authstore";
import {ref} from "vue";

const authStore = useAuthStore();

const props = defineProps({
  email: {
    type: String,
    required: true
  },
  passwordResetCode: {
    type: String,
    required: true
  }
})

const form = ref({
  email: props.email,
  reset_password_code: props.passwordResetCode,
  password: '',
  password_confirmation: ''
})


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

    <section>
      <div class="flex -mt-8 flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
        <a href="#" class="flex items-center mb-6 text-2xl font-semibold text-gray-900 dark:text-white">
          <img class="w-15 h-8 mr-2" src="../assets/savelvue.png" alt="logo">
          Savelvue
        </a>
        <div
            class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-lg xl:p-0 dark:bg-gray-800 dark:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
            <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl dark:text-white">
              Reset Password
            </h1>
            <form @submit.prevent="authStore.resetPassword(form)" class="space-y-4 md:space-y-6">
              <div>
                <label for="password"
                       class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">New Password</label>
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
                <p v-if="authStore.errors.password_confirmation" class="mt-2 text-xs text-red-600 dark:text-red-400"><span
                    class="font-medium">{{ authStore.errors.password_confirmation[0] }}</span></p>
              </div>
              <button type="submit"
                      class="w-full text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">
                Reset Password
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
  </main>
</template>



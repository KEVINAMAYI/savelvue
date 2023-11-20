<script setup>
import {useAuthStore} from '../stores/Authstore.js';

const authStore = useAuthStore();

</script>

<template>
  <div class="container py-2 px-2">
    <h1> Hello {{ authStore.loggedInUser.first_name }} {{ authStore.loggedInUser.last_name }}</h1>
    <p> Let's Build Something Great</p>
  </div>
</template>
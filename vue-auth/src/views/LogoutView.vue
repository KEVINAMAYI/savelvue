<script setup>
import {onMounted} from "vue";
import {useAuthStore} from '../stores/Authstore.js';

const authStore = useAuthStore();

onMounted(async () => {
  await authStore.logout(authStore.userToken);
});

</script>

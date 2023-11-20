import {useAuthStore} from "./stores/Authstore";
import './assets/style.css'
import './axios'
import {createApp} from 'vue'
import {createPinia} from 'pinia'

import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)
app.use(createPinia())


router.beforeEach((to, from, next) => {

    const authStore = useAuthStore();

    if (to.meta.requiresAuth && !authStore.userToken) {
        next({name: 'login'})
    } else {
        next()
    }
});

app.mount('#app')



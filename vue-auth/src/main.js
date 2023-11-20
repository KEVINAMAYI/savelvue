import {useAuthStore} from "./stores/Authstore";
import './assets/style.css'
import './axios'
import {createApp} from 'vue'
import {createPinia} from 'pinia'
import piniaPersist from 'pinia-plugin-persist'


import App from './App.vue'
import router from './router'

const app = createApp(App)

app.use(router)
const pinia = createPinia()
pinia.use(piniaPersist)

app.use(pinia)


router.beforeEach((to, from, next) => {

    const authStore = useAuthStore();

    if (to.meta.requiresAuth && !authStore.userToken) {
        next({name: 'login'})
    } else {
        next()
    }
});

app.mount('#app')



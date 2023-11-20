import {createRouter, createWebHistory} from 'vue-router'
import HomeView from '../views/HomeView.vue'


const router = createRouter({
    history: createWebHistory(import.meta.env.BASE_URL),
    routes: [
        {
            path: '/',
            name: 'home',
            component: HomeView,
            meta: {requiresAuth: false},

        },
        {
            path: '/register',
            name: 'register',
            component: () => import('../views/RegistrationView.vue'),
            meta: {requiresAuth: false},

        },
        {
            path: '/activate/:email/:activationCode',
            name: 'activate',
            component: () => import('../views/ActivateAccountView.vue'),
            props: true,
            meta: {requiresAuth: false},

        },
        {
            path: '/login',
            name: 'login',
            component: () => import('../views/LoginView.vue'),
            meta: {requiresAuth: false},

        },
        {
            path: '/logout',
            name: 'logout',
            component: () => import('../views/LogoutView.vue'),
            meta: {requiresAuth: true},
        },
        {
            path: '/dashboard',
            name: 'dashboard',
            component: () => import('../views/DashboardView.vue'),
            meta: {requiresAuth: true},

        },
        {
            path: '/forgot-password',
            name: 'forgot-password',
            component: () => import('../views/ForgotPasswordView.vue'),
            meta: {requiresAuth: false},

        },
        {
            path: '/reset-password/:email/:passwordResetCode',
            name: 'reset-password',
            component: () => import('../views/ResetPasswordView.vue'),
            props : true,
            meta: {requiresAuth: false},

        },
    ]
})


export default router

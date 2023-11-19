import {defineStore} from "pinia";
import axios from "axios";
import router from "../router";


export const useAuthStore = defineStore("auth", {
    state: () => ({
        errors: {},
        user: null,
        token: null,
        isLoading: false,
        success: {}
    }),
    getters: {
        userToken: (state) => state.token,
        loggedInUser: (state) => state.user,
    },
    actions: {
        async register(data) {
            try {
                this.isLoading = true;
                await axios.post('/register', data).then((res) => {
                    this.isLoading = false;
                    this.success.message = res.data.message;
                    this.clearAlert();

                });
            } catch (error) {

                this.isLoading = false;
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    this.clearAlert();
                }
            }

        },
        async activateAccount(data) {
            try {
                this.isLoading = true
                await axios.post('/activate', data).then((res) => {
                    this.isLoading = false;
                    this.success.message = res.data.message;
                    router.push({name: "login"});
                    this.clearAlert();

                });
            } catch (error) {

                this.isLoading = false;
                if (error.response.status === 500) {
                    this.errors.error = error.response.data.error
                    this.clearAlert();
                }
            }
        },
        async login(data) {
            try {
                this.isLoading = true;
                await axios.post('/login', data).then((res) => {
                    this.isLoading = false;
                    this.token = res.data.access_token;
                    this.user = res.data.user;
                    router.push({name: "dashboard"})
                });
            } catch (error) {

                this.isLoading = false;
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    this.clearAlert();
                }
                if (error.response.status === 401) {
                    this.errors.error = error.response.data.error
                    this.clearAlert();

                }
            }
        },
        async logout(token) {
            await axios.get('/logout', {headers: {Authorization: `Bearer ${token}`}}).then((res) => {
                this.token = null;
                this.user = null;
                router.push({name: "home"})
            });
        },
        async forgotPassword(data) {
            try {
                this.isLoading = true;
                await axios.post('/send-password-reset-code', data).then((res) => {
                    this.isLoading = false;
                    this.success.message = res.data.message;
                    this.clearAlert();
                });
            } catch (error) {
                this.isLoading = false;
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    this.clearAlert();
                }
            }
        },
        async resetPassword(data) {
            try {
                this.isLoading = true;
                await axios.post('/reset-password', data).then((res) => {
                    this.isLoading = false;
                    this.success.message = res.data.message;
                    router.push({name: "login"})
                    this.clearAlert();

                });
            } catch (error) {

                this.isLoading = false;
                if (error.response.status === 422) {
                    this.errors = error.response.data.errors
                    this.clearAlert();
                }

                if (error.response.status === 500) {
                    this.errors.error = error.response.data.error
                    this.clearAlert();
                }
            }
        },
        clearAlert() {
            setTimeout(() => this.errors = {}, 5000);
            setTimeout(() => this.success = {}, 5000);
        }
    },
});
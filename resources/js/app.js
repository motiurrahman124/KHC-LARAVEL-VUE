import './bootstrap';

import { createApp } from 'vue'

import app from './components/app.vue'

// import HeaderDetails from "./components/pages/layouts/HeaderDetails.vue"

import router from "./router"

// createApp(app).component("header-details", HeaderDetails);
createApp(app).use(router).mount('#app')

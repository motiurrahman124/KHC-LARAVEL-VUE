import './bootstrap';

import { createApp } from 'vue';

import app from './components/app.vue';
// import back from './components/back.vue';
import backend from './components/backend.vue';

// import HeaderDetails from "./components/pages/layouts/HeaderDetails.vue"

import router from "./router"

// createApp(app).component("header-details", HeaderDetails);
createApp(app).use(router).mount('#app');
// createApp(back).use(router).mount('#back');
createApp(backend).use(router).mount('#backend');




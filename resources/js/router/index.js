import { createRouter, createWebHistory } from "vue-router";


//pages
import homePageIndex from '../components/pages/home/index.vue'

const routes= [
    //pages
    {
        path: '/',
        component: homePageIndex
    }

]
const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
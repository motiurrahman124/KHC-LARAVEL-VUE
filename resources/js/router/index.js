import { createRouter, createWebHistory } from "vue-router";


//pages
import homePageIndex from '../components/pages/home/index.vue'
import homePageAbout from '../components/pages/home/about.vue'
import homePageService from '../components/pages/home/service.vue'
import homePageProduct from '../components/pages/home/product.vue'
import homePageAppoinment from '../components/pages/home/appoinment.vue'

const routes= [
    //pages
    {
        path: '/',
        component: homePageIndex
    },
    {
        path: '/about',
        component: homePageAbout
    },
    {
        path: '/services',
        component: homePageService
    },
    {
        path: '/product',
        component: homePageProduct
    },
    {
        path: '/appoinment',
        component: homePageAppoinment
    },

]
const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
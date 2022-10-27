import { createRouter, createWebHistory } from "vue-router";


//pages
import homePageIndex from '../components/pages/home/index.vue'
import homePageAbout from '../components/pages/home/about.vue'
import homePageService from '../components/pages/home/service.vue'
import homePageProduct from '../components/pages/home/product.vue'
import homePageAppoinment from '../components/pages/home/appoinment.vue'

//backend
// import adminPageIndex from '../components/admin/home/index.vue'
import backPageIndex from '../components/backend/layouts/index.vue'

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
    // backend routing
    // {
    //     path: '/admin',
    //     component: adminPageIndex
    // },
    {
        path: '/admin',
        component: backPageIndex
    },


]
const router = createRouter({
    history: createWebHistory(),
    routes,
})

export default router
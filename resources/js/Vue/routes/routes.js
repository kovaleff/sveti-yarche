import Home from '../components/Home.vue'
import About from '../components/About.vue'
import {createRouter, createWebHashHistory} from "vue-router";

const routes = [
    {
        path: '/',
        name: 'home',
        component: Home
    },
    {
        path: '/about',
        component: () => import(".../components/About.vue"),
        name: 'about',
    },
]
 export default  createRouter({
     history: createWebHashHistory(),
     routes: routes,
 })

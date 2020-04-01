import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/Toolbar'
import Main from '../components/Main/main'

const routes = [
 { path: '/', component: Login },
 { path: '/main' , component: Main , name: 'main'}

];

const router = new VueRouter({
    routes,
    hashbang: false,
    mode: 'history'
})

export default router

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/Toolbar'
import Main from '../components/Main/main'
import Logout from '../components/login/Logout'

const routes = [
 { path: '/', component: Login , name:'login'},
 { path: '/main' , component: Main , name: 'main'},
 { path: '/logout' , component: Logout}
];

const router = new VueRouter({
    routes
    // hashbang: false,
    // mode: 'history'
})

export default router

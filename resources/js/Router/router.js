import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Login from '../components/Toolbar'
import Main from '../components/Main/main'
import Logout from '../components/login/Logout'
import Patients from '../components/Patient/Patients'
import NewPatient from '../components/Patient/NewPatient'
import Remainder from '../components/Patient/Remainder'
import Staffs from '../components/Staffs/Staffs'
import NewStaff from '../components/Staffs/NewStaff'

const routes = [
 { path: '/', component: Login , name:'login'},
 { path: '/main' , component: Main , name: 'main', children: [
    { path: 'patients' , component: Patients},
    { path: 'newpatient' , component: NewPatient},
    { path: 'create_reminder' , component:Remainder},
    { path: 'staffs' , component:Staffs},
    { path: 'newstaff' , component:NewStaff},

  ]},

 { path: '/logout' , component: Logout}
];

const router = new VueRouter({
    routes,
    // hashbang: false,
    // mode: 'history'

})

export default router

require('./bootstrap');

window.Vue = require('vue');  //**important
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)

import User from './Helpers/User'
window.User=User
User.id()
Vue.component('AppHome',require('./components/AppHome.vue').default);

import router from './Router/router.js'

const vuetify = new Vuetify();

const app= new Vue({
    el: '#app',
    vuetify,
    router
}
);

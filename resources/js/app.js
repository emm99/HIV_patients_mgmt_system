require('./bootstrap');

window.Vue = require('vue');  //**important
import Vue from 'vue'
import Vuetify from 'vuetify'
import VueSimpleAlert from "vue-simple-alert";

Vue.use(VueSimpleAlert);

Vue.use(Vuetify)

import User from './Helpers/User'
window.User=User


window.EventBus = new Vue();

Vue.component('AppHome',require('./components/AppHome.vue').default);

import router from './Router/router.js'
import Token from './Helpers/Token';

const vuetify = new Vuetify();

const app= new Vue({
    el: '#app',
    vuetify,
    router
}
);

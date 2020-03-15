require('./bootstrap');

window.Vue = required('vue');
import Vue from 'vue'
import Vuetify from 'vuetify'

Vue.use(Vuetify)


const app= new Vue({
    el: '#app'
//     icons: {
//         iconfont: 'md', // 'mdi' || 'mdiSvg' || 'md' || 'fa' || 'fa4'
//     },
//     theme: {
//         dark: false,
//     },
//     themes: {
//         light: {
//             primary: "#4682b4",
//             secondary: "#b0bec5",
//             accent: "#8c9eff",
//             error: "#b71c1c",
//         },
//     },
// }
});



require('./bootstrap');
import BootstrapVue from 'bootstrap-vue'
window.Vue = require('vue');
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//appel de tous les composants
Vue.component('navbar-section', require('./components/navbar/Navbar.vue').default);
Vue.component('slider-section', require('./components/slider/Slider.vue').default);
 

const app = new Vue({
    el: '#app',
});

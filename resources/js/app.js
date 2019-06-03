

require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'

Vue.use(BootstrapVue)
window.Vue = require('vue');
import 'bootstrap/dist/css/bootstrap.css'
import 'bootstrap-vue/dist/bootstrap-vue.css'

//appel de tous les composants
Vue.component('hero-section', require('./components/hero/Hero.vue').default);
Vue.component('navbar-section', require('./components/navbar/Navbar.vue').default);
Vue.component('slider-section', require('./components/slider/Slider.vue').default);
 

const app = new Vue({
    el: '#app',
});

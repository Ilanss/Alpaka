
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
Vue.component('footer-section', require('./components/footer/Footer.vue').default);
Vue.component('product-card', require('./components/productcard/Productcard.vue').default);
Vue.component('product-list', require('./components/productslist/Productlist.vue').default);
Vue.component('order-list', require('./components/orderProductsBy/OrderProductsBy.vue').default);
Vue.component('filter-list-1', require('./components/filterProducts_1/FilterProducts_1.vue').default);
Vue.component('filter-list-2', require('./components/filterProducts_2/FilterProducts_2.vue').default);
Vue.component('best-sellers', require('./components/bestSellers/bestSellers.vue').default);


new Vue({
    el: '#app',
});

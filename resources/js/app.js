require('./bootstrap');
import Vue from 'vue'
import BootstrapVue from 'bootstrap-vue'
import vueSmoothScroll from 'vue2-smooth-scroll'
Vue.use(vueSmoothScroll)

Vue.use(BootstrapVue)
window.Vue = require('vue');
import '../sass/_variables.scss'
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
Vue.component('modal-popup', require('./components/modal/Modal.vue').default);
Vue.component('modal', {
    template: '#modal-template'
})
Vue.component('login-form', require('./components/login/Login.vue').default);
Vue.component('signup-form', require('./components/signUp/SignUp.vue').default);
Vue.component('cover-section', require('./components/cover/Cover.vue').default);
Vue.component('contact-section', require('./components/contact/Contact.vue').default);
Vue.component('story-section', require('./components/story/Story.vue').default);
Vue.component('brand-section', require('./components/brand/Brand.vue').default);
Vue.component('map-section', require('./components/map/Map.vue').default);
Vue.component('blog-section', require('./components/blog/Blog.vue').default);
Vue.component('promo-section', require('./components/promo/Promo.vue').default);
Vue.component('create-section', require('./components/admin_create/Create.vue').default);

new Vue({
    el: '#app',
    data: {
        showModal: false
    }
});

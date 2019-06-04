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
Vue.component('cover-section', require('./components/cover/Cover.vue').default);
Vue.component('contact-section', require('./components/contact/Contact.vue').default);
Vue.component('story-section', require('./components/story/Story.vue').default);
Vue.component('brand-section', require('./components/brand/Brand.vue').default);
Vue.component('map-section', require('./components/map/Map.vue').default);


new Vue({
    el: '#app',
});

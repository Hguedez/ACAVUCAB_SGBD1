require('./bootstrap');
import Vue from 'vue'

window.Vue = require('vue');

Vue.config.productionTip = false


Vue.component('example-component', require('./components/ExampleComponent.vue').default);
Vue.component('MyFooter', require('./components/Footer.vue').default);


const app = new Vue({
    el: '#app',
});


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('app-main-menu', require('./components/layouts/MainMenu.vue'));
Vue.component('app-form-lista-espera', require('./components/forms/FormListaEspera.vue'));
//digiPack component
Vue.component('app-digi-pack-menu',require('./components/layouts/DigiPackMenu.vue'));

const app = new Vue({
    el: '#app'
});

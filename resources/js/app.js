
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

// forms
Vue.component('app-form-lista-espera', require('./components/forms/FormListaEspera.vue'));
Vue.component('app-form-contacto', require('./components/forms/ContactForm.vue'));

// calculadora
Vue.component('app-calculadora', require('./components/layouts/Calculadora.vue'));
//digiPack component
Vue.component('app-digi-pack-menu',require('./components/layouts/DigiPackMenu.vue'));
//tarifasMobil component
Vue.component('app-tarifas-combo', require('./components/layouts/TarifasCombo.vue'));
Vue.component('app-tarifas-ilimitado',require('./components/layouts/TarifasIlimitado.vue'));
Vue.component('app-tarifas-navega', require('./components/layouts/TarifasNavega.vue'));

//faq problemas conexion
Vue.component('app-faq-configuracion',require('./components/layouts/FaqConfiguracion.vue'));
//modals
Vue.component('app-faq-digi-combo',require('./components/modals/faqDigiCombo.vue'));

const app = new Vue({
    el: '#app'
});

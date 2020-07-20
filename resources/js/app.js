
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

// formularios
Vue.component('app-form-lista-espera', require('./components/forms/FormListaEspera.vue'));
Vue.component('app-form-contacto', require('./components/forms/ContactForm.vue'));

// calculadora
Vue.component('app-calculadora', require('./components/layouts/Calculadora.vue'));

Vue.component('app-calc-container', require('./components/layouts/calculadora/CalcContainer.vue'));
Vue.component('app-fibra', require('./components/layouts/calculadora/Fibra.vue'));
Vue.component('app-movil', require('./components/layouts/calculadora/Movil.vue'));
Vue.component('app-ilimitado', require('./components/layouts/calculadora/Ilimitado.vue'));
Vue.component('app-combo', require('./components/layouts/calculadora/Combo.vue'));
Vue.component('app-price-component', require('./components/layouts/calculadora/PriceComponent.vue'));

//digiPack component
Vue.component('app-digi-pack-menu',require('./components/layouts/DigiPackMenu.vue'));

//tarifas para el movil component
Vue.component('app-tarifas-combo', require('./components/layouts/TarifasCombo.vue'));
Vue.component('app-tarifas-ilimitado',require('./components/layouts/TarifasIlimitado.vue'));
Vue.component('app-tarifas-navega', require('./components/layouts/TarifasNavega.vue'));

//faq problemas conexion
Vue.component('app-faq-configuracion',require('./components/layouts/FaqConfiguracion.vue'));

//modals
Vue.component('app-faq-digi-combo',require('./components/modals/faqDigiCombo.vue'));
Vue.component('app-modal-tarifas', require('./components/modals/ModalTarifas.vue'));


// event bus
export const eventBus = new Vue();


// start vue
const app = new Vue({
    el: '#app'
});

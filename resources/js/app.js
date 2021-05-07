import RegisterComponent from './components/RegisterComponent.vue';
import FrmQuotesComponent from './components/FrmQuotesComponent.vue';
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('register-component', RegisterComponent);
Vue.component('quotes-component', FrmQuotesComponent);

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app',
});

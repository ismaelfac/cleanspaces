import RegisterComponent from './components/RegisterComponent.vue';
import FrmQuotesComponent from './components/FrmQuotesComponent.vue';
require('./bootstrap');

window.Vue = require('vue').default;

Vue.component('register-component', RegisterComponent);
Vue.component('quotes-component', FrmQuotesComponent);

const app = new Vue({
    el: '#app',
});

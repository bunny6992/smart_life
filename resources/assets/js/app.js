
require('./bootstrap');
window.Vue = require('vue');

Vue.component('example-component', require('./components/ExampleComponent.vue'));
Vue.component('public-info', require('./components/PublicInfo.vue'));

const app = new Vue({
    el: '#app'
});

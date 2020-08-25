require('./bootstrap');

Vue.component('serviceIndex', require('./components/admin/services/home.vue').default);
Vue.component('serviceCreate', require('./components/admin/services/create.vue').default);



const app = new Vue({
    el: '#app',
    // router
});

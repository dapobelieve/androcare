require('./bootstrap');


/**
 * Services
 */
Vue.component('serviceIndex', require('./components/admin/services/home.vue').default);
Vue.component('serviceCreate', require('./components/admin/services/create.vue').default);
Vue.component('serviceEdit', require('./components/admin/services/edit.vue').default);


/**
 * Article Components
 */
Vue.component('articleIndex', require('./components/admin/articles/home.vue').default);
Vue.component('articleCreate', require('./components/admin/articles/create.vue').default);
Vue.component('articleEdit', require('./components/admin/articles/edit.vue').default);

/**
 * Gallery
 */
Vue.component('galaIndex', require('./components/admin/gallery/home').default);
Vue.component('galaCreate', require('./components/admin/gallery/create').default);
Vue.component('galaEdit', require('./components/admin/gallery/edit').default);

const app = new Vue({
    el: '#app',
    // router
});

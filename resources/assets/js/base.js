
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

window.events = new Vue();
window.flash = function (message) {
    window.events.$emit('flash', message);
}
window.Vue.prototype.authorize = function (handler) {
    uid = document.head.querySelector('meta[name="uid"]').content;

    if(! uid) return false;

    if(uid == 1) {
	return true;
    }
    
    return handler(uid);
};

/**
 *
 */
//const fontawesome = require('@fortawesome/fontawesome');
//const FontAwesomeIcon = require('@fortawesome/vue-fontawesome');
//const solid = require('@fortawesome/fontawesome-pro-solid');
//const regular = require('@fortawesome/fontawesome-pro-regular');
//const light = require('@fortawesome/fontawesome-pro-light');
//const brands = require('@fortawesome/fontawesome-free-brands');

//fontawesome.library.add(solid); // Use any icon from the Solid style
//fontawesome.library.add(regular); // Use any icon from the Regular style
//fontawesome.library.add(light); // Use any icon from the Light style
//fontawesome.library.add(brands); // Use any icon from the Free Brands style

//Vue.component('icon', FontAwesomeIcon); // Use the icon component anywhere in the app

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */
Vue.component('flash', require('./components/Flash.vue'));
Vue.component('follow', require('./components/Follow.vue'));
Vue.component('notifications', require('./components/Notifications.vue'));
Vue.component('paginator', require('./components/Paginator.vue'));
Vue.component('replies', require('./components/Replies.vue'));

const app = new Vue({
    el: '#app'
});


/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

// import moment js
import moment from 'moment';
Vue.prototype.moment = moment;
window.moment = moment;

// import tempusdominus-bootstrap-4
require('tempusdominus-bootstrap-4');
import 'tempusdominus-bootstrap-4/build/css/tempusdominus-bootstrap-4.min.css';

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i)
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key)))

// for passport components
Vue.component('passport-clients', require('./components/passport/Clients.vue'));
Vue.component('passport-authorized-clients', require('./components/passport/AuthorizedClients.vue'));
Vue.component('passport-personal-access-tokens', require('./components/passport/PersonalAccessTokens.vue'));

// Vue.component('example-component', require('./components/ExampleComponent.vue'));

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

const app = new Vue({
    el: '#app'
});

// configure datepicker
$.fn.datetimepicker.Constructor.Default = $.extend({}, $.fn.datetimepicker.Constructor.Default, {
    icons: {
        time: 'icon ion-ios-time',
        date: 'icon ion-ios-calendar',
        up: 'icon ion-ios-arrow-up',
        down: 'icon ion-ios-arrow-down',
        previous: 'icon ion-ios-arrow-back',
        next: 'icon ion-ios-arrow-forward',
        today: 'icon ion-ios-calendar',
        clear: 'icon ion-ios-trash',
        close: 'icon ion-ios-times'
    } });

$(function () {
    $('#datetimepicker1').datetimepicker();
});

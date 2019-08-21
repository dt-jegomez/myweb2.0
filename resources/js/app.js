


require('./bootstrap');

window.Vue = require('vue');



Vue.component('intro', require('./components/Intro.vue').default);
Vue.component('about', require('./components/About.vue').default);
Vue.component('services', require('./components/Services.vue').default);
Vue.component('why-us', require('./components/Why-us.vue').default);



const app = new Vue({
    el: '#app',    
});





import Vue from 'vue';
import router from './router.js';
import App from './components/App/App.vue';
require('./bootstrap');



const app = new Vue({
    el: '#app',
    components:{
        App
    },
    router
});

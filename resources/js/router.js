import Vue from 'vue';
import VueRouter from 'vue-router';
import MessageCreate from "./views/MessageCreate/MessageCreate";




Vue.use(VueRouter);

export default new VueRouter({
    routes:[
        {
            path:'/',
            component: MessageCreate
        }
    ],
    mode:'history'
})


window.Vue = require('vue').default;


Vue.component('main-component',require('./mainComponent.vue').default);

// /**

const app = new Vue({
    el: '#app',

});












// import Vue from 'vue';
// import VueRouter from 'vue-router';
// import App from './components/AppComponent.vue';
// import About from './components/AboutComponent.vue';
// import Home from './components/HomeComponent.vue';
// Vue.use(VueRouter);
// const router = new VueRouter({
//     mode: 'history',
//     routes: [
//         {
//             path: '/',
//             name: 'home',
//             component: Home
//         },
//         {
//             path: '/about',
//             name: 'about',
//             component: About,
//         },
//     ],
// });
// const app = new Vue({
//     el: '#app',
//     components: { App },
//     router,
// });

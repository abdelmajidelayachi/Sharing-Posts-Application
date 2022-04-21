
window.Vue = require('vue').default;
import Vue from 'vue';
import VueRouter from 'vue-router';
import VueResource from 'vue-resource';
import App from './App.vue';
import routes from './components/router/index';
// import { vue } from 'laravel-mix';

// Vue.component('main-component',require('./mainComponent.vue').default);

// /**
Vue.use(VueResource);
Vue.use(VueRouter);

const router = new VueRouter({
    mode: 'history',
    routes: routes,

});

Vue.filter('snippet', function (value) {
   return value.slice(0,100) + '...';  
});




const app = new Vue({
    el: '#app',
    render: h => h(App),
    router: router,

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

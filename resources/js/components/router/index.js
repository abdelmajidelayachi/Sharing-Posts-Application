// import { createWebHistory, createRouter } from "vue-router";
import Home from "../../views/HomeView.vue";
import Profile from "../../views/ProfileView.vue";

const routes = [
  {
    path: "/",
    name: "Home",
    component: Home,
  },
  {
    path: "/profile",
    name: "Profile",
    component: Profile,
  },
];



export default routes;
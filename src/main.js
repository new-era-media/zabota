import Vue from "vue";
import App from "./App.vue";
import store from "./store";
import AOS from "aos";
import "aos/dist/aos.css";
AOS.init();
import VueTyperPlugin from "vue-typer";
import VueRouter from "vue-router";

import loader from "vue-ui-preloader";

Vue.use(loader);

import "./assets/scss/global.scss"

Vue.use(VueRouter);

const router = new VueRouter({
  mode: 'hash',
  routes: [
    {
      path: "",
      component: () => import("./views/Main.vue")
    },
    {
      path: "/about",
      component: () => import("./views/About.vue")
    },
    {
      path: "/staff",
      component: () => import("./views/Staff.vue")
    },
    {
      path: "/price",
      component: () => import("./views/Price.vue")
    },
    {
      path: "/license",
      component: () => import("./views/License.vue")
    },
    {
      path: "/regulations",
      component: () => import("./views/Regulations.vue")
    },
    {
      path: "/reviews",
      component: () => import("./views/Reviews.vue")
    },
    {
      path: "/OMS",
      component: () => import("./views/OMS.vue")
    },
    
  ]
});

Vue.use(VueTyperPlugin);

Vue.config.productionTip = false;

new Vue({
  store,
  render: (h) => h(App),
  router
}).$mount("#app");

import Vue from 'vue'
import VueRouter from 'vue-router'

Vue.use(VueRouter)

import Home from '../components/Page/Home'
import Estadisticas from '../components/Page/Estadisticas'

const routes = [
	{ path: '/', component: Home },
	{ path: '/estadisticas', component: Estadisticas }
]

const router = new VueRouter({
  routes, // short for `routes: routes`
  hashbang : false,
  mode: 'history'
})

export default router
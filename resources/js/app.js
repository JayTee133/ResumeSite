require('./bootstrap');

import Vue from 'vue';
import VueRouter from 'vue-router';

Vue.use(VueRouter);

import App  from './vue-components/App.vue';
import Home from './vue-components/Home.vue';
import abtMe from './vue-components/AboutMe.vue';
import abtSite from './vue-components/AboutSite.vue';

const router = new VueRouter({
	mode: 'history',
	routes: [
		{
			path: '/',
			name: 'home',
			component: Home
		},
		{
			path: '/aboutme',
			name: 'aboutme',
			component: abtMe
		},
		{
			path: '/aboutsite',
			name: 'aboutsite',
			component: abtSite
		},
	]	
});

const app = new Vue({
	el: '#app',
	components: { App },
	router,
});

import Vue from 'vue';
import VueRouter from 'vue-router';

//Import pages

import DashboardLayout from './components/dashboard/dashboard-layout.vue';


Vue.use(VueRouter);


const routes = [
	{
		path : "/dashboard",
		component : DashboardLayout
	},

]

export default new VueRouter({routes, mode:'history', base: __dirname})
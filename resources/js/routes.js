import Vue from 'vue';
import VueRouter from 'vue-router';

//Import pages

import DashboardLayout from './components/dashboard/dashboard-layout.vue';
import EmployeeListLayout from './components/employee/employee-list-layout.vue';


Vue.use(VueRouter);


const routes = [
	{
		path : "/dashboard",
		component : DashboardLayout
	},
	{
		path : '/employee',
		component : EmployeeListLayout
	},
	// {
	// 	path : '/add-employee',
	// 	component : AddEmployeeLayout
	// }

]

export default new VueRouter({routes, mode:'history', base: __dirname})
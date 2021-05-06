import Vue from 'vue';
import router from './routes.js';
import GlobalImport from './plugins/global-import.js';
require('./bootstrap');

require('alpinejs');

window.Vue = Vue
Vue.use(GlobalImport)

new Vue({
	router,
	computed :{
		currentPage(){

			return this.$route.path
		}
	}
	
	
}).$mount('#app');
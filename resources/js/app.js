import Vue from 'vue'
import router from './routes.js'

require('./bootstrap');

require('alpinejs');

window.Vue = require('vue');

new Vue({
	router,
	computed :{
		currentPage(){

			return this.$route.path
		}
	}
	
	
}).$mount('#app');
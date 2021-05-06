<template>
	<div>
		<dashboard-header></dashboard-header>
		<div class="row">
			<dashboard-activities></dashboard-activities>
		</div>
		<div class="row">
			<dashboard-employee></dashboard-employee>
			<div class="col-md-8">
				PROJECT LIST
			</div>
		</div>
		<div class="row">
			
		</div>
	</div>
</template>

<script>
	import DashboardHeader from './dashboard-header-layout.vue';
	import DashboardEmployee from './dashboard-employee-list-layout.vue';
	import DashboardActivities from './dashboard-activities-layout.vue';
	export default{
		name : 'dashboard',
		components : {
			DashboardHeader,
			DashboardEmployee,
			DashboardActivities
		}
	};
</script>
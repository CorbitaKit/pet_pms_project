<template>
	<div class="col-md-4">      
        <div class="card">
          	<div class="card-header">
            	<h3 class="card-title">Employee List</h3>
          	</div>
          <!-- /.card-header -->
          	<div class="card-body p-0">
            	<ul class="users-list clearfix">
              		<li>
                		<img src="/assets/dist/img/user1-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Alexander Pierce</a>
                		<span class="users-list-date">Today</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user8-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Norman</a>
                		<span class="users-list-date">Yesterday</span>
              		</li>
              		<li>
              			<img src="/assets/dist/img/user7-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Jane</a>
                		<span class="users-list-date">12 Jan</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user6-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">John</a>
                		<span class="users-list-date">12 Jan</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user2-160x160.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Alexander</a>
                		<span class="users-list-date">13 Jan</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user5-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Sarah</a>
                		<span class="users-list-date">14 Jan</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user4-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Nora</a>
                		<span class="users-list-date">15 Jan</span>
              		</li>
              		<li>
                		<img src="/assets/dist/img/user3-128x128.jpg" alt="User Image">
                		<a class="users-list-name" href="#">Nadia</a>
                		<span class="users-list-date">15 Jan</span>
              		</li>
            	</ul>
          	</div>
            <div class="card-footer text-center">
            	<a href="javascript:">View All Users</a>
          	</div>
        </div>   
    </div>

</template>

<script>
	export default{

		name : 'dashboard-employee'
	};
</script>
<template>
	<div>
		<section class="content-header">
      		<div class="container-fluid">
        		<div class="row mb-2">
          			<div class="col-sm-6">
           				<h1>Add Employee</h1>
          			</div>
          			<div class="col-sm-6">
            			<ol class="breadcrumb float-sm-right">
              				<li class="breadcrumb-item"><a href="#">Home</a></li>
              				<li class="breadcrumb-item">Employee</li>
              				<li class="breadcrumb-item active">Add Employee</li>
            			</ol>
          			</div>
        		</div>
      		</div>
   		</section>
		<section class="content">
      		<div class="row">
      			<div class="col-md-1"></div>
        		<div class="col-md-10">
          			<div class="card card-primary">
            			<div class="card-header">
              				<h3 class="card-title">General</h3>
              				<div class="card-tools">
                				
                				<router-link to="/employee" class="btn btn-tool">
                  					<i class="fas fa-times"></i>
                				</router-link>
              				</div>
            			</div>
            			<div class="card-body">
              				<div class="form-group">
                				<label for="inpuFirstName">First Name</label>
                				<!-- <input type="text" id="inputFirstName" class="form-control"> -->
                				<el-input placeholder="Please input" ></el-input>
              				</div>
              				<div class="form-group">
                				<label for="inputLastName">Last Name</label>
                				<el-input placeholder="Please input" ></el-input>
              				</div>
              				<div class="form-group">
                				<label for="inputEmail">Email</label>
                				<el-input placeholder="Please input" ></el-input>
              				</div>
              				<div class="form-group">
                				<label for="inputPosition">Position (Change if there are functionalities)</label>
                				<el-input placeholder="Please input" ></el-input>
              				</div>
              				
            			</div>
            			<div class="card-footer">
	            			<div class="row">
	            				<div class="col-md-10"></div>
	            				<div class="col-md-2">
	            					<button type="button" class="btn btn-success">Add Employee</button>
	            				</div>
	            			</div>
            			</div>

                    </div>
        		</div>
        		<div class="col-md-1"></div>
     		 </div>
    	</section>
	</div>
</template>

<script>
	export default{
		name : 'add-employee',
	};
</script>
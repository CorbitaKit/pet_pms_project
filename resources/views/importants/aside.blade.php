  <aside class="main-sidebar sidebar-dark-primary elevation-4">

    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Alexander Pierce</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            
            <router-link to="/dashboard" :class="[currentPage.includes('dashboard') ? 'active' : '', 'nav-link']">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
          </router-link>
          </li>


          <li class="nav-item">
            <router-link to="/employee" :class="[currentPage.includes('employee') ? 'active' : '', 'nav-link']">
              <i class="nav-icon fas fa-users"></i>
              <p>
                Employee
              </p>
          </router-link>
          </li>
          
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
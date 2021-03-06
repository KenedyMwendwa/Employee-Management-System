 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{ asset('vendor/dist/img/makueni.jpeg')}}" alt="Makueni Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">Makueni County EMS</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{ asset('vendor/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div>

      {{-- <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div> --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
 {{-- start of dasboard icon --}}
 <div>
  <li class="nav-item menu-open">
    <a href="#" class="nav-link active">
      <i class="fa fa-university" aria-hidden="true"></i>
      <p>
        Departments
        <i class="right fas fa-angle-left"></i>
      </p>
    </a>
 <ul class="nav ">
      <li class="nav-item">
        <a href="{{ route('all-departments') }}" class="nav-link">
          <i class="far fa-box nav-icon"></i>
          <p>All Departments</p>
        </a>
      </li>
      <li class="nav-item">
        <a href="{{ route('create-department') }}" class="nav-link">
          <i class="far fa-box nav-icon"></i>
          <p>Add department</p>
        </a>
      </li>
    </ul>
  </li>
   </div>
{{-- end of dasboard icon --}}
{{-- start of departments icon --}}
<li class="nav-item menu-open">
  <a href="#" class="nav-link active">
      <i class="fa fa-users" aria-hidden="true"></i>
    <p>
      Employees
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="{{ route('all-employees') }}" class="nav-link">
        <i class="far fa-box nav-icon"></i>
        <p>All employees</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="{{ route('create-employee') }}" class="nav-link">
        <i class="far fa-box nav-icon"></i>
        <p>Add Employee</p>
      </a>
    </li>
  </ul>
</li>

{{-- end of departments button --}}

{{-- start of departments icon --}}
<li class="nav-item menu-open">
  <a href="#" class="nav-link active">
    <i class="fa fa-folder" aria-hidden="true"></i>
    <p>
      Reports
      <i class="right fas fa-angle-left"></i>
    </p>
  </a>
  <ul class="nav nav-treeview">
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-box nav-icon"></i>
        <p>Attendance</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-box nav-icon"></i>
        <p>Payments</p>
      </a>
    </li>
    <li class="nav-item">
      <a href="#" class="nav-link">
        <i class="far fa-box nav-icon"></i>
        <p>Performance</p>
      </a>
    </li>
  
  </ul>
</li>
</li>
</ul>
  </li>
</ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>





  {{-- <li class="nav-item">
    <a href="#" class="nav-link">
      <i class="nav-icon fas fa-th"></i>
      <p>
        Simple Link
        <span class="right badge badge-danger">New</span>
      </p>
    </a> --}}
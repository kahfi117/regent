 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
  <!-- Brand Logo -->
 <a href="{{route('admin')}}" class="brand-link">
    <img src="{{url('regent_admin/dist/img/regent.png')}}" alt="" class="brand-image img-circle elevation-3"
         style="opacity: .8">
    <span class="brand-text font-weight-light">REGENT</span>
  </a>

  <!-- Sidebar -->
  <div class="sidebar">
    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item">
        <a href="{{route('admin')}}" class="nav-link">
            <i class="nav-icon fas fa-tachometer-alt"></i>
            <p>
              Dashboard
            </p>
          </a>
        </li>
        <li class="nav-item">
        <a href="{{route('content')}}" class="nav-link">
            <i class="nav-icon fas fa-copy"></i>
            <p>
              Postingan
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="{{route('adminTourGuide')}}" class="nav-link">
            <i class="nav-icon fas fa-user-tie"></i>
            <p>
              Tour Guide
            </p>
          </a>
        </li>
        <li class="nav-item">
          <a href="#" class="nav-link">
            <i class="nav-icon fas fa-users"></i>
            <p>
              User
            </p>
          </a>
        </li>
      </ul>
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  <!-- /.sidebar -->
</aside>

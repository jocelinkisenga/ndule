<aside class="main-sidebar  elevation-4">
    <!-- Brand Logo -->
    <a href="/" class="brand-link">
      <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light"></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('Client/assets/images/MS Logo JPG.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="" class="d-block text-bold color-orange" style=" font-size:30px"> Dashboard</a>
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2" style="background-color: white">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <a href="" class="nav-link btn-background " style=" color:white">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
 
              <li class="nav-item">
                <a href="{{route('categorie-form')}}" class="nav-link ">
                  <i class="far fa-circle nav-icon color-orange"></i>
                  <p>Catégories</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('song-form')}}" class="nav-link">
                  <i class="far fa-circle color-orange nav-icon"></i>
                  <p>chansons</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('articles-form')}}" class="nav-link">
                  <i class="far fa-circle nav-icon color-orange"></i>
                  <p>articles</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="{{route('admin-artistes')}}" class="nav-link">
                  <i class="far fa-circle nav-icon color-orange"></i>
                  <p>Artistes</p>
                </a>
              </li>
              <li class="nav-item">
                <a href="" class="nav-link">
                  <i class="far fa-circle nav-icon color-orange"></i>
                  <p>evenements</p>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
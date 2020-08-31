       <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{url('/dist/img/user2-160x160.jpg')}}" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Kelompok 6</a>
        </div>
      </div>


      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item has-treeview menu-open">
            <a href="#" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Beranda
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ url('/student') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>List student</p>
                </a>
              </li>

              <li class="nav-item">
                <a href="{{ url('/student-detail') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Detail student</p>
                </a>
              </li>
       

           <li>
            <a href="{{ url('/logout')}}" class="nav-link">
              <i class="fa fa-arrow-circle-left"></i>
              <p>
                Logout
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>

            </ul>
          </li>
         
      <!-- /.sidebar-menu -->
    </div>
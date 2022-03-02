

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary leftsectiondesign">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link brndarea">
      <!--<img src="{{asset('public/userassets')}}/dist/img/logotest.png" alt="userLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
      
      <img src="https://www.abtyp.org/monthly-report/public/adminassets/dist/img/logotest.png" 
      alt="AdminLTE Logo" class="brand-image img-circle elevation-3 asitelogo" style="opacity: .8; box-shadow: none !important;">
      <span class="brand-text font-weight-light cmpnbrndtxt">User</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/userassets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">user</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <!--<div class="form-inline arasrchboxdesign">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar xboxsection" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar srcrgtbackarea">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>-->

      <!-- Sidebar Menu -->
      <nav class="mt-3 innermenuarea">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('user.dashboard') }}" class="nav-link active">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/user/monthly-report" class="nav-link">
              <i class="nav-icon fas fa-flag"></i>
              <p>
                Report
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/yuva-sangam" class="nav-link">
              <i class="nav-icon fas fa-user-friends"></i>
              <p>
                Yuva Sangam
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/members" class="nav-link">
              <i class="nav-icon fas fa-user-tie"></i>
              <p>
                T8 Members
              </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/user/news-list" class="nav-link">
              <i class="nav-icon fas fa-newspaper"></i>
              <p>
                News
              </p>
            </a>
          </li>
          <!--<li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/user/password-change" class="nav-link">
              <i class="nav-icon fas fa-unlock"></i>
              <p>
                Change Password
              </p>
            </a>
          </li>-->
          <li class="nav-item">
            <a href="https://www.abtyp.org/monthly-report/user/list-of-booked-slot" class="nav-link">
              <i class="nav-icon fas fa-clock"></i>
              <p>
                Book Your Slot
              </p>
            </a>
          </li>
           <li class="nav-item lgbtndesign">
            <a href="{{ route('user.logout') }}" class="nav-link ">
              <i class="fas fa-sign-out-alt"></i>
              <p>
                Logout
              </p>
            </a>
          </li>
        </ul>
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>
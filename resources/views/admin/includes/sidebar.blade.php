@php
$admin = Auth::guard('admin')->user();
@endphp
<style>
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #b30000;
    color: #fff;
}
</style>
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="#" class="brand-link">
      <img src="{{asset('public/adminassets')}}/dist/img/logotest.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">
        @if ($admin->name=='Admin') Admin
        @elseif ($admin->name=='National President') National President
        @elseif ($admin->name=='National Secretary') National Secretary
        @elseif ($admin->name=='ABTYPOffice') ABTYPOffice

        @endif







      </span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      {{-- <div class="user-panel mt-3 pb-3 mb-3 d-flex">
        <div class="image">
          <img src="{{asset('public/adminassets')}}/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
        </div>
        <div class="info">
          <a href="#" class="d-block">Admin</a>
        </div>
      </div> --}}

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
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item">
            <a href="{{ route('admin.dashboard') }}" class="nav-link {{ request()->is('admin') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li>
         
          {{-- <li class="nav-item">
            <a href="#" class="nav-link" >
              <i class="nav-icon fas fa-book"></i>
              <p>
                Parishad
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.add-branch') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Parishad</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.branch-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parishad List</p>
                </a>
              </li>
            </ul>
          </li> --}}

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/add-user') || request()->is('admin/user-list') ? 'active' : ''}}">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Parishad
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.add-user') }}" class="nav-link ">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Add Parishad</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.user-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Parishad List</p>
                </a>
              </li>
            </ul>
          </li>









          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/atdc-list') || request()->is('admin/mbdd-list-list') || request()->is('admin/ttf-list-list') || request()->is('admin/yuva-vahini-list') || request()->is('admin/eye-donation-list') || request()->is('admin/ampk-list') || request()->is('admin/choka-satkar-list') || request()->is('admin/atdc-report-filter') || request()->is('admin/mbdd-report-filter') || request()->is('admin/ttf-report-filter') || request()->is('admin/yuvavahini-report-filter') || request()->is('admin/eyedonation-report-filter') || request()->is('admin/ampk-report-filter') || request()->is('admin/chokasatar-report-filter')   ? 'active' : ''}}">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Seva
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.atdc-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ACHARYA TULSI DIAGNOSTIC CENTER</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.mbdd-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MEGA BLOOD DONATION DRIVE</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.ttf-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TERAPANTH TASK FORCE</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.yuva-vahini-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> YUVA VAHINI</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.eye-donation-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> EYE DONATION</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.ampk-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ACHARYA MAHAPRAGYA PRAGYA KENDRA</p>
                </a>
              </li>
            </ul>
           <!--  <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.atjh-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ACHARYA MAHAPRAGYA PRAGYA KENDRA</p>
                </a>
              </li>
            </ul> -->
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.choka-satkar-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> CHOKA SATKAR</p>
                </a>
              </li>
            </ul>
          </li>


          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/jain-sanskar-vidhi-list') || request()->is('admin/samayik-sadhak-list') || request()->is('admin/tapoyagya-list') || request()->is('admin/cps-list') || request()->is('admin/pd-list') || request()->is('admin/barah-vrat-list') || request()->is('admin/twenty-bol-list') || request()->is('admin/jain-vidhya-katyashala-list') || request()->is('admin/yuva-divas-list') || request()->is('admin/jsv-report-filter') || request()->is('admin/samayiksadhak-report-filter') || request()->is('admin/tapoyagya-report-filter') || request()->is('admin/cps-report-filter') || request()->is('admin/pd-report-filter') || request()->is('admin/barahvarat-report-filter') || request()->is('admin/twentyfivebol-report-filter') || request()->is('admin/jvk-report-filter') || request()->is('admin/yuvadivas-report-filter')  ? 'active' : ''}}">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Sanskar
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.jain-sanskar-vidhi-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JAIN SANSKAR VIDHI</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.samayik-sadhak-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> SAMAYIK SADHAK</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.tapoyagya-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAPOYAGYA</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.cps-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>CONFIDENT PUBLIC SPEAKING</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.pd-listipd-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PERSONALITY DEVELOPMENT</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.barah-vrat-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BARAH VRAT</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.twenty-bol-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 25 BOL</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.jain-vidhya-katyashala-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JAIN VIDHYA KATYASHALA</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.yuva-divas-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  YUVA DIVAS</p>
                </a>
              </li>
            </ul>
          </li>




           <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/tkm-list') || request()->is('admin/yuva-sangam-list') || request()->is('admin/fit-yuva-list') || request()->is('admin/jtn-list') || request()->is('admin/sankalp-sangathan-yatra-list') || request()->is('admin/sargam-list') || request()->is('admin/abtyp-direct-list') || request()->is('admin/ttk-report-filter') || request()->is('admin/yuvasangam-report-filter') || request()->is('admin/fityuva-report-filter')   ? 'active' : ''}}">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Sangathan
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.tkm-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TERAPANTH KISHORE MANDAL</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.yuva-sangam-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  YUVA SANGAM</p>
                </a>
              </li>
            </ul>

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.fit-yuva-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> FIT YUVA</p>
                </a>
              </li>
            </ul>
            <!-- <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.jtn-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JAIN TERAPANTH NEWS</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.sankalp-sangathan-yatra-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> SANKALP SANGATHAN YATRA</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.sargam-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SARGAM</p>
                </a>
              </li>
            </ul>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.abtyp-direct-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> ABTYP DIRECT</p>
                </a>
              </li>
            </ul> -->
            
          
          </li>

          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/monthly-report') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Monthly Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.monthly-report') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Report</p>
                </a>
              </li>
            </ul>
           
          </li>
          
        
          
          
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('admin/password-change')   ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('admin.change-password') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
           
          </li>
           <li class="nav-item">
            <a href="{{ route('admin.news') }}" class="nav-link {{ request()->is('admin/news') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Jain Terapanth News
           
              </p>
            </a>
          
           
          </li>
          <li class="nav-item">
            <a href="{{ route('admin.user-booked-slot') }}" class="nav-link {{ request()->is('/user-booked-slot') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Booked Slot
           
              </p>
            </a>
          
           
          </li>



























           <li class="nav-item">
            <a href="{{ route('admin.logout') }}" class="nav-link ">
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
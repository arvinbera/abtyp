@php
$branch = Auth::guard('branch')->user();
@endphp


<style>
    .sidebar-dark-primary .nav-sidebar>.nav-item>.nav-link.active, .sidebar-light-primary .nav-sidebar>.nav-item>.nav-link.active {
    background-color: #b30000;
    color: #fff;
}
</style>

  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4 leftsectiondesign">
    <!-- Brand Logo -->
    <a href="index3.html" class="brand-link brndarea">
      <img src="{{asset('public/adminassets')}}/dist/img/logotest.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3 asitelogo" style="opacity: .8; box-shadow: none !important;">
      <span class="brand-text font-weight-light cmpnbrndtxt">
        @if ($branch->name=='ATDC') ATDC
        @elseif ($branch->name=='MBDD') MBDD
        @elseif ($branch->name=='TTF') TTF
        @elseif ($branch->name=='YuvaVahini') YuvaVahini
        @elseif ($branch->name=='EyeDonation') EyeDonation
        @elseif ($branch->name=='AMPK') AMPK
        @elseif ($branch->name=='ATJH') ATJH
        @elseif ($branch->name=='ChokaSatkar') ChokaSatkar
        @elseif ($branch->name=='JainSanskarVidhi') JainSanskarVidhi
        @elseif ($branch->name=='SamayikSadhak') SamayikSadhak
        @elseif ($branch->name=='Tapoyagya') Tapoyagya
        @elseif ($branch->name=='CPS') CPS
        @elseif ($branch->name=='PD') PD
        @elseif ($branch->name=='BarahVrat') BarahVrat
        @elseif ($branch->name=='JainVidhyaKatyashal') JainVidhyaKatyashal
        @elseif ($branch->name=='YuvaDivas') YuvaDivas
        @elseif ($branch->name=='TKM') TKM
        @elseif ($branch->name=='YuvaSangam') YuvaSangam
        @elseif ($branch->name=='FitYuva') FitYuva
        @elseif ($branch->name=='JTN') JTN
        
















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
          <a href="#" class="d-block">Coordinator</a>
        </div>
      </div> --}}

      <!-- SidebarSearch Form -->
      <div class="form-inline arasrchboxdesign">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar xboxsection" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar srcrgtbackarea">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-3 innermenuarea">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <!-- <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('branch') ? 'active' : ''}}">
              <i class="nav-icon fas fa-tachometer-alt"></i>
              <p>
                Dashboard
                
              </p>
            </a>
            
          </li> -->
         
         <!-- <li class="nav-item">
            <a href="#" class="nav-link ">
              <i class="nav-icon fas fa-book"></i>
              <p>
                Users 
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item">
                <a href="{{ route('branch.user-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>User List</p>
                </a>
              </li>
            </ul>
          </li>-->


         <!--  <li class="nav-item">
            <a href="#" class="nav-link  {{ request()->is('branch/atdc-list') || request()->is('branch/mbdd-list-list') || request()->is('branch/ttf-list-list') || request()->is('branch/yuva-vahini-list') || request()->is('branch/eye-donation-list') || request()->is('branch/ampk-list') || request()->is('branch/choka-satkar-list') || request()->is('branch/atdc-report-filter') || request()->is('branch/mbdd-report-filter') || request()->is('branch/ttf-report-filter') || request()->is('branch/yuvavahini-report-filter') || request()->is('branch/eyedonation-report-filter') || request()->is('branch/ampk-report-filter') || request()->is('branch/chokasatar-report-filter')    ? 'active' : ''}}">
              <i class="fas fa-circle nav-icon"></i>
              <p>
                Report
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            @if ($branch->name=='ATDC')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.atdc-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ATDC</p>
                </a>
              </li>
            </ul>
             @endif
             @if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.mbdd-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>MBDD</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='TTF')
            

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.ttf-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TTF</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='YuvaVahini')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.yuva-vahini-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> YUVA VAHINI</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='EyeDonation')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.eye-donation-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> EYE DONATION</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='AMPK')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.ampk-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>AMPK</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='ATJH')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.atjh-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>ATJH</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='ChokaSatkar')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.choka-satkar-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> CHOKA SATKAR</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='JainSanskarVidhi')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.jain-sanskar-vidhi-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JAIN SANSKAR VIDHI</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='SamayikSadhak')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.samayik-sadhak-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> SAMAYIK SADHAK</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='Tapoyagya')

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.tapoyagya-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TAPOYAGYA</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='CPS')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.cps-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> CPS</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='PD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.pd-listipd-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>PD</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='BarahVrat')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.barah-vrat-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>BARAH VRAT</p>
                </a>
              </li>
            </ul>
            @endif -->
             <!--@if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.twenty-bol-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> 25 BOL</p>
                </a>
              </li>
            </ul>
            @endif-->
           <!--   @if ($branch->name=='JainVidhyaKatyashal')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.jain-vidhya-katyashala-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JAIN VIDHYA KATYASHALA</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='YuvaDivas')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.yuva-divas-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  YUVA DIVAS</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='TKM')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.tkm-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>TKM</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='YuvaSangam')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.yuva-sangam-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>  YUVA SANGAM</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='FitYuva')

            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.fit-yuva-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> FIT YUVA</p>
                </a>
              </li>
            </ul>
            @endif -->
            <!-- @if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.jtn-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> JTN</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.sankalp-sangathan-yatra-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> SANKALP SANGATHAN YATRA</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.sargam-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>SARGAM</p>
                </a>
              </li>
            </ul>
            @endif
             @if ($branch->name=='MBDD')
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.abtyp-direct-list') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p> ABTYP DIRECT</p>
                </a>
              </li>
            </ul>
            @endif-->
          </li>

           <li class="nav-item">
            <a href="{{ route('branch.monthly-report') }}" class="nav-link {{ request()->is('branch/monthly-report') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Monthly Report
           
              </p>
            </a>
          
           
          </li>
          
          
            @if ($branch->name=='JTN') 
        
          
          
          
          
           <li class="nav-item">
            <a href="{{ route('branch.news') }}" class="nav-link {{ request()->is('branch/news') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Jain Terapanth News
           
              </p>
            </a>
          
           
          </li>
          
          @endif












          
          
          <li class="nav-item">
            <a href="#" class="nav-link {{ request()->is('branch/password-change') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
                Settings
                <i class="fas fa-angle-left right"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item ">
                <a href="{{ route('branch.change-password') }}" class="nav-link">
                  <i class="far fa-circle nav-icon"></i>
                  <p>Change Password</p>
                </a>
              </li>
            </ul>
           
          </li>
          <li class="nav-item">
            <a href="{{ route('branch.booked-slot') }}" class="nav-link {{ request()->is('branch/booked-slot') ? 'active' : ''}}">
              <i class="nav-icon far fa-circle text-danger"></i>
              <p>
               Booked Slot
           
              </p>
            </a>
          
           
          </li>






                 <li class="nav-item lgbtndesign">
            <a href="{{ route('branch.logout') }}" class="nav-link ">
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
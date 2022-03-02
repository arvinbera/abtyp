@php
$branch = Auth::guard('branch')->user();
@endphp

<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{url('/admin/dashboard')}}">
          <img src="{{url('/')}}/public/images/logo.png" class="header-brand-img desktop-lgo" alt="Logo">
          <img src="{{url('/')}}/public/images/logo.png" class="header-brand-img dark-logo" alt="Logo">
          <img src="{{url('/')}}/public/images/logo.png" class="header-brand-img mobile-logo" alt="Logo">
          <img src="{{url('/')}}/public/images/logo.png" class="header-brand-img darkmobile-logo" alt="Logo">
        </a>
    </div>
    <!--<div class="app-sidebar__user">
        <div class="dropdown user-pro-body text-center">
            <div class="user-pic">
                <img src="{{url('/')}}/public/admin/assets/images/users/2.jpg" alt="user-img" class="avatar-xl rounded-circle mb-1">
            </div>
            <div class="user-info">
                <h5 class=" mb-1">Jessica <i class="ion-checkmark-circled  text-success fs-12"></i></h5>
                <span class="text-muted app-sidebar__user-name text-sm">Web Designer</span>
            </div>
        </div>
        <div class="sidebar-navs">
          <ul class="nav nav-pills-circle">
            <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Go To Website">
              <a class="icon" target="_blank" href="{{url('/')}}" >
                <i class="las la-life-ring header-icons"></i>
              </a>
            </li>
            <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Documentation">
              <a class="icon" href="#">
                <i class="las  la-file-alt header-icons"></i>
              </a>
            </li>
            <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Projects">
              <a href="#" class="icon">
                <i class="las la-project-diagram header-icons"></i>
              </a>
            </li>
            <li class="nav-item" data-placement="top" data-toggle="tooltip" title="Settins">
              <a class="icon" href="#">
                <i class="las la-cog header-icons"></i>
              </a>
            </li>
          </ul>
        </div>
    </div>-->
    <br>
    <br>
    <ul class="side-menu app-sidebar3">
     
        <li class="side-item side-item-category mt-4">Main</li>
        <li class="slide">
        @if($branch->name=='ATDC')
          	<a class="side-menu__item"  href="{{ route('branch.atdc-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='MBDD')
          	<a class="side-menu__item"  href="{{ route('branch.mbdd-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='TTF')
          	<a class="side-menu__item"  href="{{ route('branch.ttf-form-view') }}"><svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='YuvaVahini')
          	<a class="side-menu__item"  href="{{ route('branch.yv-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='EyeDonation')
          	<a class="side-menu__item"  href="{{ route('branch.ed-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='AMPK')
          	<a class="side-menu__item"  href="{{ route('branch.ampk-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='ChokaSatkar')
          	<a class="side-menu__item"  href="{{ route('branch.cs-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='JainSanskarVidhi')
          	<a class="side-menu__item"  href="{{ route('branch.jsv-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='SamayikSadhak')
          	<a class="side-menu__item"  href="{{ route('branch.ss-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='Tapoyagya')
          	<a class="side-menu__item"  href="{{ route('branch.tapo-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='CPS')
          	<a class="side-menu__item"  href="{{ route('branch.cps-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='PD')
          	<a class="side-menu__item"  href="{{ route('branch.pd-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='BarahVrat')
          	<a class="side-menu__item"  href="{{ route('branch.bv-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='JainVidhyaKatyashal')
          	<a class="side-menu__item"  href="{{ route('branch.jvk-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='TKM')
          	<a class="side-menu__item"  href="{{ route('branch.tkm-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='YuvaSangam')
          	<a class="side-menu__item"  href="{{ route('branch.ys-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='FitYuva')
          	<a class="side-menu__item"  href="{{ route('branch.fy-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
        @if($branch->name=='YuvaDivas')
          	<a class="side-menu__item"  href="{{ route('branch.fy-form-view') }}"> <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Monthly report</span></a>
        @endif
           
      	</li>
     
      	<!--======================================================================Project & Activity=====================================================================-->
      	@if ($branch->name=='Tapoyagya' || $branch->name=='BarahVrat' || $branch->name=='YuvaVahini' || $branch->name=='Tapoyagya') 
        <li class="slide">
							<a class="side-menu__item" data-toggle="slide" href="#">
							<svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
							<span class="side-menu__label">Projects & Activity</span><i class="angle fa fa-angle-right"></i></a>
							<ul class="slide-menu ">
							    
							   
								@if ($branch->name=='Tapoyagya') 
								
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Tapoyagya Reservation</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
									
											<li><a class="sub-slide-item" href="{{ route('branch.slot_book.list') }}">Tapoyagya Bookig List</a></li>
										
									</ul>
								</li>
									@endif
							<!--	@if ($branch->name=='YuvaVahini') 
								<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Manage YUVA VAHINI</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
										<li><a class="sub-slide-item" href="{{ route('branch.acharaya-pravar') }}">ACHARAYA PRAVAR DATA</a></li>
											<li><a class="sub-slide-item" href="{{ route('branch.charitra-atma') }}">CHARITRA ATMA DATA</a></li>
										
									</ul>
								</li>
								@endif-->
									<!--<li><a href="{{ route('branch.adhivesan2021.list') }}" class="slide-item">Adhivesan 2021</a></li>-->
										@if ($branch->name=='Tapoyagya') 
									<li><a href="{{ route('branch.tapoyagya_report') }}" class="slide-item">Tapoyagya Report</a></li>
									@endif
									@if ($branch->name=='BarahVrat') 
									<li><a href="{{ route('branch.barahvrat-registration-form.list') }}" class="slide-item">Barahvrat Registration Form</a></li>
									@endif
								<!--	<li><a href="{{ route('branch.ewc') }}" class="slide-item">EWC</a></li>-->
									@if ($branch->name=='YuvaVahini') 
									<!--<li class="sub-slide">
									<a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Yuva Vahini Registration</span><i class="sub-angle fe fe-chevron-down"></i></a>
									<ul class="sub-slide-menu">
									
										<li><a class="sub-slide-item" href="{{ route('branch.yuva-vahini-reg-slot-list') }}">Booking Record</a></li>
										
										
									</ul>
								</li>-->
								
								<li><a href="{{ route('branch.yuva-vahini-reg-slot-list') }}" class="slide-item">Yuva Vahini Registration</a></li>
								@endif
							</ul>
						</li>
            @endif
      	<!--======================================================================Project & Activity=====================================================================-->
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('branch.change-password') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Change Password</span><!-- <span class="badge badge-danger side-badge">Hot</span> --></a>
      	</li>
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('branch.booked-slot') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Booked Slot</span><!-- <span class="badge badge-danger side-badge">Hot</span> --></a>
      	</li>
      	
      	@if ($branch->name=='JTN') 
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('branch.news') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">   Jain Terapanth News</span><!-- <span class="badge badge-danger side-badge">Hot</span> --></a>
      	</li>
      	@endif
      	@if ($branch->name=='Tapoyagya') 
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('branch.tapoyagya_report') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">  Tapoyagya Report</span><!-- <span class="badge badge-danger side-badge">Hot</span> --></a>
      	</li>
      	@endif
      
        <!--<li class="side-item side-item-category">Manage Banner</li>-->
        
        
        
        
        <!--==================================================================New Menu start===============================================================-->
        
        
						
						
					
        
        
        
        
        <!--==================================================================New Menu start===============================================================-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     
    </ul>
</aside>
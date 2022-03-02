<aside class="app-sidebar">
    <div class="app-sidebar__logo">
        <a class="header-brand" href="{{route('user.stat-dashboard')}}">
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
          	<a class="side-menu__item"  href="{{route('user.t8members')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Office Bearer 21-22</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="#">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">EWC</span></a>
      	</li>
      	
      	<!--<li class="slide">
          	<a class="side-menu__item"  href="{{route('user.members')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Members</span></a>
      	</li>-->
      	
      	<li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/></svg>
                                     <span class="side-menu__label">Members</span><i class="angle fa fa-angle-right"></i></a>
                                     <ul class="slide-menu">
                                        <li><a href="{{route('user.members')}}" class="slide-item">Members</a></li>
                                    </ul>
                                      <ul class="slide-menu">
                                        <li><a href="{{route('user.yuva-sangam')}}" class="slide-item">Pending Members</a></li>
                                    </ul>
                                     
                                    
        </li>
      	
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="#">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Terapanth Kishore Mandal</span></a>
      	</li>
      	
      		<li class="slide">
          	<a class="side-menu__item"  href="{{route('user.news-list')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label"> News</span></a>
      	</li>
      	
      	
      		<li class="slide">
          	<a class="side-menu__item"  href="{{route('user.list-of-booked-slot')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label"> Book Your Slot</span></a>
      	</li>
      	
      	
      	
      	             <!-- <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="index.html#">
                                <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M16.66 4.52l2.83 2.83-2.83 2.83-2.83-2.83 2.83-2.83M9 5v4H5V5h4m10 10v4h-4v-4h4M9 15v4H5v-4h4m7.66-13.31L11 7.34 16.66 13l5.66-5.66-5.66-5.65zM11 3H3v8h8V3zm10 10h-8v8h8v-8zm-10 0H3v8h8v-8z"/></svg>
                                     <span class="side-menu__label">Monthly Report</span><i class="angle fa fa-angle-right"></i></a>
                                     <ul class="slide-menu">
                                        <li><a href="{{route('user.dashboard')}}" class="slide-item">Add Report</a></li>
                                    </ul>
                                      <ul class="slide-menu">
                                        <li><a href="{{ route('user.monthly-report') }}" class="slide-item">View Report</a></li>
                                    </ul>      
                        </li> -->

                <!-- ============================Monthly report================================= -->

                <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
                            <span class="side-menu__label">Monthly Report</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu">
                          
                                 <li class="sub-slide">
                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">View Report</span><i class="sub-angle fe fe-chevron-down"></i></a>
                                    <ul class="sub-slide-menu">
                                        <li><a class="sub-slide-item" href="{{route('user.atdc-form-view')}}">ATDC</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.mbdd-form-view')}}">MBDD</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.ttf-form-view')}}">TTF</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.yuva-vahini-form-view')}}">YUVA VAHINI</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.eye-donation-form-view')}}">EYE DONATION</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.ampk-form-view')}}">AMPK</a></li>
                                        
                                        <li><a class="sub-slide-item" href="{{route('user.choka-satkar-form-view')}}">CHOKA SATKAR</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.jsv-form-view')}}">JSV</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.samayik-sadhak-form-view')}}">SAMAYIK SADHAK</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.tapoyagya-form-view')}}">TAPOYAGYA</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.cps-form-view')}}">CPS</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.pd-form-view')}}">PD</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.barah-vrat-form-view')}}">BARAH VRAT</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.jvk-form-view')}}">JVK</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.tkm-form-view')}}">TKM</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.yuva-sangam-form-view')}}">YUVA SANGAM</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.fit-yuva-form-view')}}">FIT YUVA</a></li> 
                                    </ul>
                                </li>
                                <li class="sub-slide">
                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Add Report</span><i class="sub-angle fe fe-chevron-down"></i></a>
                                    <ul class="sub-slide-menu">
                                        <li><a class="sub-slide-item" href="{{route('user.atdc-form')}}">ATDC</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.mbdd-form')}}">MBDD</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.ttf-form')}}">TTF</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.yuva-vahini-form')}}">YUVA VAHINI</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.eye-donation-form')}}">EYE DONATION</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.ampk-form')}}">AMPK</a></li>
                                        
                                        <li><a class="sub-slide-item" href="{{route('user.choka-satkar-form')}}">CHOKA SATKAR</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.jsv-form')}}">JSV</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.samayik-sadhak-form')}}">SAMAYIK SADHAK</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.tapoyagya-form')}}">TAPOYAGYA</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.cps-form')}}">CPS</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.pd-form')}}">PD</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.barah-vrat-form')}}">BARAH VRAT</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.jvk-form')}}">JVK</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.tkm-form')}}">TKM</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.yuva-sangam-form')}}">YUVA SANGAM</a></li>

                                        <li><a class="sub-slide-item" href="{{route('user.fit-yuva-form')}}">FIT YUVA</a></li> 
                                    </ul>
                                </li>
                                
                                <li class="sub-slide">
                                    <a class="sub-side-menu__item" data-toggle="sub-slide" href="#"><span class="sub-side-menu__label">Seva</span><i class="sub-angle fe fe-chevron-down"></i></a>
                                    <ul class="sub-slide-menu">
                                        <li><a class="sub-slide-item" href="{{route('user.atdc-list')}}">ATDC</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.mbdd-list')}}">MBDD</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.ttf-list')}}">TTF</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.yuva-vahini-list')}}">YUVA VAHINI</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.eye-donation-list')}}">EYE DONATION</a></li>
                                        <!-- <li><a class="sub-slide-item" href="{{route('user.atdc-list')}}">AMPK</a></li> -->
                                        <li><a class="sub-slide-item" href="{{route('user.atjh-list')}}">ATJH</a></li>
                                        <li><a class="sub-slide-item" href="{{route('user.choka-satkar-list')}}">CHOKA SATKAR</a></li>

                                        
                                    </ul>
                                </li>
                                
                            </ul>
                        </li>



                <!-- ============================Monthly report================================= -->
               <!-- =============================================================================================-->
                <li class="slide">
                            <a class="side-menu__item" data-toggle="slide" href="#">
                            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M4 8h4V4H4v4zm6 12h4v-4h-4v4zm-6 0h4v-4H4v4zm0-6h4v-4H4v4zm6 0h4v-4h-4v4zm6-10v4h4V4h-4zm-6 4h4V4h-4v4zm6 6h4v-4h-4v4zm0 6h4v-4h-4v4z"/></svg>
                            <span class="side-menu__label">Projects & Activities</span><i class="angle fa fa-angle-right"></i></a>
                            <ul class="slide-menu ">
                                
                               <li><a href="{{route('user.yuva-vahini-reg-slot-list')}}" class="slide-item">Yuva Vahini Registration</a></li>
                               <li><a href="{{route('user.tapoyagya_report')}}" class="slide-item">Tapoyagya Report</a></li>
                              
                            </ul>
                        </li>
                <!--==========================================================================================================-->
      	
      	
      	
      	
      	
      	<!-- <li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.mbdd-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">MBDD</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.eye-donation-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Eye donation</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.samayik-sadhak-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Samayik Sadak</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.tapoyagya-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Tapoyag</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.ttf-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Terapanth Task force</span></a>
      	</li>
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.cps-list') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Confident Public Speaking</span></a>
      	</li>
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.tapoyagya_report') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Tapoyagya Report</span></a>
      	</li>
      	<li class="slide">
          	<a class="side-menu__item"  href="{{ route('user.barahvrat-registration-form') }}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Barahvrat Registration</span></a>
      	</li> -->
      		<!--<li class="slide">
          	<a class="side-menu__item"  href="{{route('user.yuva-sangam')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label">Pending Members</span></a>
      	</li>-->
      	
      	<li class="slide">
          	<a class="side-menu__item"  href="{{route('user.logout')}}">
            <svg class="side-menu__icon" xmlns="http://www.w3.org/2000/svg" height="24" viewBox="0 0 24 24" width="24"><path d="M0 0h24v24H0V0z" fill="none"/><path d="M19 5v2h-4V5h4M9 5v6H5V5h4m10 8v6h-4v-6h4M9 17v2H5v-2h4M21 3h-8v6h8V3zM11 3H3v10h8V3zm10 8h-8v10h8V11zm-10 4H3v6h8v-6z"/></svg>
            <span class="side-menu__label"> Logout</span></a>
      	</li>
      	
        
        
        
       
      	
      	
      
      	
      
      
      	
        <!--<li class="side-item side-item-category">Manage Banner</li>-->
        
        
        
        
        <!--==================================================================New Menu start===============================================================-->
        
        
						
						
					
        
        
        
        
        <!--==================================================================New Menu start===============================================================-->
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
        
     
    </ul>
</aside>
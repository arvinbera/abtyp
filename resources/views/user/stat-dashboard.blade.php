<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('user.newinclude.head')

<body class="app sidebar-mini">

   @include('user.newinclude.settings')

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('user.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

                    @include('user.newinclude.header')
                                                              <!--Page header-->
                    <div class="page-header">
                        <div class="page-leftheader">
                            
                            <h4 class="page-title mb-0">Jai Jinendra! {{ Auth::user()->name }}</h4>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html#"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><a href="index.html#">Abtyp Dashboard</a></li>
                            </ol>
                        </div>
                        <!--<div class="page-rightheader">
                            <div class="btn btn-list">
                                <a href="index.html#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
                                <a href="index.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
                                <a href="index.html#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
                            </div>
                        </div>-->
                    </div>
                    <!--End Page header-->
                                                                    
                    <!-- Row-1 -->
                     <div class="row">
                        <!--<div class="col-xl-3 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <p class=" mb-1 ">Total Parishad</p>
                                    <?php $tot_mem=DB::Table('users')->count(); ?>
                                    <h2 class="mb-1 number-font">{{$tot_mem}}</h2>
                                    
                                </div>
                                <div id="spark1"></div>
                            </div>
                        </div>-->
                        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <p class=" mb-1 ">My Total Members</p>
                                    <?php 
                                    $user=Auth::user()->id;
                                    $user_name=Auth::user()->name;
                                    
                                    
                                    $tot_mem=DB::Table('yuva_sangam_form_details')->where('parishad_name',$user_name)->where('status', 'Active')->count(); ?>
                                    
                                    <h2 class="mb-1 number-font">{{$tot_mem}}</h2>
                                  
                                </div>
                                <div id="spark2"></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <p class=" mb-1 ">My Total Pending Members</p>
                                    <?php $tot_mem=DB::Table('yuva_sangam_form_details')->where('parishad_name',$user_name)->where('status','=','pending')->count(); ?>
                                    <h2 class="mb-1 number-font">{{$tot_mem}}</h2>
                                    <!-- <small class="fs-12 text-muted">Compared to Last Month</small>
                                    <span class="ratio bg-danger">62%</span>
                                    <span class="ratio-text text-muted">Goals Reached</span> -->
                                </div>
                                <div id="spark3"></div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-md-6 col-xm-12">
                            <div class="card overflow-hidden dash1-card border-0">
                                <div class="card-body">
                                    <p class=" mb-1">
                                        My Total Welcome form
                                    </p>
                                    <?php
                                     
                                     $tot_data=DB::Table('welcome_form_prashid_details')->where('prashid_user_id',$user)->count();
                                   
                                    
                                    ?>
                                    <h2 class="mb-1 number-font">{{$tot_data}}</h2>
                                    <!-- <small class="fs-12 text-muted">Compared to Last Month</small>
                                    <span class="ratio bg-success">53%</span>
                                    <span class="ratio-text text-muted">Goals Reached</span> -->
                                </div>
                                <div id="spark4"></div>
                            </div>
                        </div>
                    </div> 
                    <!-- End Row-1 -->

                    <!-- Row-2 -->
                    <div class="row" style="display:none;">
                        <div class="col-xl-8 col-lg-8 col-md-12">
                            <div class="card">
                                
                                <div class="card-body">
                                    
                                    <div id="echart1" class="chart-tasks chart-dropshadow text-center"></div>
                                    <div class="text-center mt-2">
                                        <span class="mr-4"><span class="dot-label bg-primary"></span>Total Sales</span>
                                        <span><span class="dot-label bg-secondary"></span>Total Units Sold</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                       <!-- <div class="col-xl-4 col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="card-title">Recent Activity</h3>
                                    <div class="card-options">
                                        <a href="index.html#" class="option-dots" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fe fe-more-horizontal fs-20"></i></a>
                                        <div class="dropdown-menu dropdown-menu-right">
                                            <a class="dropdown-item" href="index.html#">Today</a>
                                            <a class="dropdown-item" href="index.html#">Last Week</a>
                                            <a class="dropdown-item" href="index.html#">Last Month</a>
                                            <a class="dropdown-item" href="index.html#">Last Year</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="card-body">
                                    <div class="latest-timeline scrollbar3" id="scrollbar3">
                                        <ul class="timeline mb-0">
                                            <li class="mt-0">
                                                <div class="d-flex"><span class="time-data">Task Finished</span><span class="ml-auto text-muted fs-11">09 June 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Joseph Ellison</span> finished task on<a href="index.html#" class="font-weight-semibold"> Project Management</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">New Comment</span><span class="ml-auto text-muted fs-11">05 June 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Elizabeth Scott</span> Product delivered<a href="index.html#" class="font-weight-semibold"> Service Management</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">Target Completed</span><span class="ml-auto text-muted fs-11">01 June 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Sonia Peters</span> finished target on<a href="index.html#" class="font-weight-semibold"> this month Sales</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">Revenue Sources</span><span class="ml-auto text-muted fs-11">26 May 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Justin Nash</span> source report on<a href="index.html#" class="font-weight-semibold"> Generated</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">Dispatched Order</span><span class="ml-auto text-muted fs-11">22 May 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Ella Lambert</span> ontime order delivery <a href="index.html#" class="font-weight-semibold">Service Management</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">New User Added</span><span class="ml-auto text-muted fs-11">19 May 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Nicola  Blake</span> visit the site<a href="index.html#" class="font-weight-semibold"> Membership allocated</a></p>
                                            </li>
                                            <li>
                                                <div class="d-flex"><span class="time-data">Revenue Sources</span><span class="ml-auto text-muted fs-11">15 May 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Richard Mills</span> source report on<a href="index.html#" class="font-weight-semibold"> Generated</a></p>
                                            </li>
                                            <li class="mb-0">
                                                <div class="d-flex"><span class="time-data">New Order Placed</span><span class="ml-auto text-muted fs-11">11 May 2020</span></div>
                                                <p class="text-muted fs-12"><span class="text-info">Steven Hart</span> is proces the order<a href="index.html#" class="font-weight-semibold"> #987</a></p>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>-->
                    </div>
                    <!-- End Row-2 -->

                    <!-- Row-3 -->
                    
                    <!-- End Row-3 -->

                    <!--Row-->
                    
                    <!--End row-->

                </div>
            </div>
            <!-- End app-content-->
        </div>
        @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
</body>

</html>
        
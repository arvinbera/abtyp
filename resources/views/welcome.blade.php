<!DOCTYPE html>
<html class="no-js" lang="">
<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ABTYP</title>
    <meta name="description" content="Ela Admin - HTML5 Admin Template">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    


   {{--  <link rel="icon" type="image/png" href="{{asset('assets_admin_login/images/header-logo.png')}}" /> --}}
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/normalize.css@8.0.0/normalize.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/font-awesome@4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/lykmapipo/themify-icons@0.1.2/css/themify-icons.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/flag-icon-css/3.2.0/css/flag-icon.min.css">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/cs-skin-elastic.css') }}">
    <link rel="stylesheet" href="{{ asset('theme/assets/css/style.css') }}">

    <link href="https://cdn.jsdelivr.net/npm/chartist@0.11.0/dist/chartist.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/jqvmap@1.5.1/dist/jqvmap.min.css" rel="stylesheet">

    <link href="https://cdn.jsdelivr.net/npm/weathericons@2.1.0/css/weather-icons.css" rel="stylesheet" />
    <link href="https://cdn.jsdelivr.net/npm/fullcalendar@3.9.0/dist/fullcalendar.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet">
    <link href="{{ asset('theme/assets/css/ars_coolection.css') }}" rel="stylesheet" type="text/css" media="screen">
    <script src="{{ asset('theme/assets/js/jquery.gridly.js') }}" type='text/javascript'></script>
    <script src="{{ asset('theme/assets/js/sample.js') }}" type='text/javascript'></script>
    <script src="{{ asset('theme/assets/js/rainbow.js') }}" type='text/javascript'></script>
    
    
    
    <style>
        body{background:url({{ asset('theme/images/main-bg.jpg') }})  no-repeat;background-size:100%;font-family: 'Lato', sans-serif;}p{font-family: 'Lato', sans-serif;}.logo-main{position:relative;}.logo-main a img {
            max-width: 200px;
            transform: rotate(-90deg);

        }
        .content{margin:80px auto;}
        .header {
            padding: 10px 0;
            color: #fff;
        }
        .logo-inr{
            position:absolute;
            margin-top:17%;
        }
        .user-name {float: right;padding-right: 86px;}.user-name h4 {font-size: 16px;}.user-name i{color:red;}.user-name h4 span {margin-left: 15px;} .user-name .ti-user{color:#fff;}
        @-moz-document url-prefix(){
            .logo-inr{
                position:absolute;margin-top:17%;}}

                .not-click{
                    transition: transform .5s ease; 
                }

                .not-click:hover{
                    transform: scale(1.2); 
                }

            </style>

        </head>

        <body>
            <div class="header">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="user-name">
                                
                            </div>

                        </div>
                    </div>
                </div>
            </div>
            
            
            
            <div class="logo-main"><div class="logo-inr"><a href="{{ url( '/' ) }}"><!--<img  src="{{ asset('theme/images/logo.png') }}" alt="logo" >--></a></div></div>
            <div class="content">
                <section class="text-center example">
                    <div class='gridly '>
                
            <div class="clearfix"></div>
            <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 brick small' style="cursor: context-menu;">
                <a href="{{ route('admin.dashboard') }}">
                    <div class="dash-icon">
                        <img src="{{ asset('theme/images/procurement.png') }}" alt="procurement">
                        <p>ADMIN</p>
                    </div>
                </a>
                
            </div>

             
            <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 brick small' style="cursor: context-menu;">
                <a href="{{ route('branch.dashboard') }}">
                    <div class="dash-icon">
                        <i class="fa fa-users fa-4x" style="color: #fff;"></i>
                        <p>Branch Manager</p>
                    </div>
                </a>
                
            </div>
           
           
           
            <div class='col-lg-4 col-md-4 col-sm-4 col-xs-12 brick small' style="cursor: context-menu;">
                <a href="{{ route('user.dashboard') }}">
                    <div class="dash-icon">
                        <i class="fa fa-mobile fa-5x" style="color: #fff;"></i>
                        <p>User</p>
                    </div>
                </a>
               
            </div>
            
           
            
        </div>
    </div>
</section>
</div>


<!-- Scripts -->
<script src="https://cdn.jsdelivr.net/npm/jquery@2.2.4/dist/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.4/dist/umd/popper.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-match-height@0.7.2/dist/jquery.matchHeight.min.js"></script>
<script src="{{ asset('theme/assets/js/main.js') }}"></script>

<!--<script src="dragonfly.js"></script>-->
<script src="{{ asset('theme/assets/js/jquery.js') }}" type='text/javascript'></script>
<script src="{{ asset('theme/assets/js/jquery.gridly.js') }}" type='text/javascript'></script>
<script src="{{ asset('theme/assets/js/sample.js') }}" type='text/javascript'></script>
<script src="{{ asset('theme/assets/js/rainbow.js') }}" type='text/javascript'></script>
</body>
</html>
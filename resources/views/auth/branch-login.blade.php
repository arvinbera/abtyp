<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
        <!-- Meta data -->
        <meta charset="UTF-8">
        <meta name='viewport' content='width=device-width, initial-scale=1.0, user-scalable=0'>
        <meta content="abtyp" name="description">
        <meta content="abtyp" name="author">
        <meta name="keywords" content="abtyp"/>

        <!-- Title -->
        <title>ABTYP</title>

        <!--Favicon -->
        <link rel="icon" href="{{url('/')}}/public/images/logo.png" type="image/x-icon"/>

        <!--Bootstrap css -->
        <link href="{{url('/')}}/public/admin/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha512-1ycn6IcaQQ40/MKBW2W4Rhis/DbILU74C1vSrLJxCq57o941Ym01SwNsOMqvEBFlcgUa6xLiPY/NS5R+E6ztJQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <!-- Style css -->
        <link href="{{url('/')}}/public/admin/assets/css/style.css" rel="stylesheet" />
        <link href="{{url('/')}}/public/admin/assets/css/dark.css" rel="stylesheet" />
        <link href="{{url('/')}}/public/admin/assets/css/skin-modes.css" rel="stylesheet" />

        <!-- Animate css -->
        <link href="{{url('/')}}/public/admin/assets/css/animated.css" rel="stylesheet" />
        
        <!---Icons css-->
        <link href="{{url('/')}}/public/admin/assets/css/icons.css" rel="stylesheet" />
        
                
        <!-- Color Skin css -->
        <link id="theme" href="{{url('/')}}/public/admin/assets/colors/color1.css" rel="stylesheet" type="text/css"/>
            
    </head>
    <body class="h-100vh albackdesign">
        <div class="page">
            <div class="page-single">
                <div class="container">
                    <div class="row">
                        <div class="col mx-auto">
                            <div class="row justify-content-center">
                                <div class="col-md-5">
                                    <form method="POST" action="{{ route('branch.login.submit') }}">
                                    @csrf
                                        <div class="card">
                                            <div class="card-body">
                                                <div class="text-center title-style mb-6">
                                                    <h1 class="mb-2">Login</h1>
                                                    <hr>
                                                    <p class="text-muted">Sign In to your account</p>
                                                    @if(Session::has('message'))
                      <div class="error" style="color:red;">{{ Session::get('message') }}</div>
                      @endif
                                                </div>
                                                <!-- <div class="btn-list d-flex">
                                                    <a href="https://www.google.com/gmail/" class="btn btn-google btn-block"><i class="fa fa-google fa-1x mr-2"></i> Google</a>
                                                    <a href="https://twitter.com/" class="btn btn-twitter"><i class="fa fa-twitter fa-1x"></i></a>
                                                    <a href="https://www.facebook.com/" class="btn btn-facebook"><i class="fa fa-facebook fa-1x"></i></a>
                                                </div> -->
                                                <!--<div style="text-align: center;">
                                                    <h2 >{{date("h:i A")}}</h2>
                                                    <h5 >{{date("l, M d,Y")}}</h5>
                                                </div>-->
                                                <img class="typlimgdesign" alt="" src="https://www.abtyp.org/public/website/images/TYP-red.png">
                                                <br>
                                                <h6 class="usrltxtdesign">User Role</h6>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user-tie"></i>
                                                        </div>
                                                    </div>
                                                    <select name="cars" id="cars" class="form-control" onchange="location = this.value;">
                                                        <option value="Admin">Coordinator</option>
                                                      <option value="https://www.abtyp.org/user/login">Parishad</option>
                                                      <option value="https://www.abtyp.org/regional-coordinator-login">Regional coordinator</option>
                                                      <option value="https://www.abtyp.org/admin/login">Admin</option>
                                                    </select>
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-user"></i>
                                                        </div>
                                                    </div>
                                                    <input type="email" name="email" class="form-control" placeholder="Username" required="" value="{{ old('email') }}">
                                                </div>
                                                <div class="input-group mb-4">
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text">
                                                            <i class="fas fa-lock"></i>
                                                        </div>
                                                    </div>
                                                    <input type="password" name="password" class="form-control" placeholder="Password" required="">
                                                </div>
                                                <div class="row">
                                                    <div class="col-12">
                                                        <button type="submit" class="btn  allgnbtnx btn-block px-4">Login</button>
                                                    </div>
                                                    <div class="col-12 text-center">
                                                        <a href="#" class="btn btn-link box-shadow-0 px-0">Forgot password?</a>
                                                    </div>
                                                </div>
                                                <div class="text-center pt-4">
                                                    <!-- <div class="font-weight-normal fs-16">You Don't have an account <a class="btn-link font-weight-normal" href="#">Register Here</a></div> -->
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Jquery js-->
        <script src="{{url('/')}}/public/admin/assets/js/jquery-3.5.1.min.js"></script>

        <!-- Bootstrap4 js-->
        <script src="{{url('/')}}/public/admin/assets/plugins/bootstrap/popper.min.js"></script>
        <script src="{{url('/')}}/public/admin/assets/plugins/bootstrap/js/bootstrap.min.js"></script>

        <!--Othercharts js-->
        <script src="{{url('/')}}/public/admin/assets/plugins/othercharts/jquery.sparkline.min.js"></script>

        <!-- Circle-progress js-->
        <script src="{{url('/')}}/public/admin/assets/js/circle-progress.min.js"></script>

        <!-- Jquery-rating js-->
        <script src="{{url('/')}}/public/admin/assets/plugins/rating/jquery.rating-stars.js"></script>
                <!-- Custom js-->
        <script src="{{url('/')}}/public/admin/assets/js/custom.js"></script> 
    </body>

</html>
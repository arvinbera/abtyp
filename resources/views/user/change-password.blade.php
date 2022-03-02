@extends('user.layouts.app')
@section('header')
<title>ABTYP | user Dashboard</title>
   @include('user.includes.header')
      <style>
      .backimg1
      {
         background-image: url({{asset('/')}}/public/adminassets/dist/img/animate-background1.jpg) !important;
         width: 100%;
         background-size: cover !important;
         background-position: center top !important;
      }
      .main-htext
      {
         font-weight: 600;
         font-size: 30px;
         letter-spacing: 2px;
         font-family: emoji;
         color: #FFF;
      }
      .xhead 
      {
         background: #b30000 !important;
      }
</style>
   @endsection

         

   @section('content')
 <div class="content-wrapper backimg1"  style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 main-htext">Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header xhead">
                <h3 class="card-title">Change Password <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('user.password.update') }}">
           @csrf
           <input type="hidden" name="id" value="{{$user_details->id}}">
                <div class="card-body">
                  <div class="form-group">
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Old password</label>
                    <input type="password" name="oldpassword" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                   
                     
                  </div>

                    



                 


                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password <font color="red">(password must be at least 8 characters.)</font></label>
                    <input type="password" name="newpassword" class="form-control" id="exampleInputPassword1" placeholder="New Password">
                    @if ($errors->has('newpassword'))
                      <div class="error" style="color:red;">{{ $errors->first('newpassword') }}</div>
                      @endif
                      
                    
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger xhead">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   @endsection
@section('footer')
    @include('user.includes.footer')
@endsection


 
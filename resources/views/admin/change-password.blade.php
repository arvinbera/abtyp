@extends('admin.layouts.app')
@section('header')
<title>ABTYP | Admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
   <style>
       .xhead {
    background: #b30000 !important;
}
   </style>
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Change Password</h1>
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
      <div class="container-fluid">
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
              <form id="quickForm" method="POST" action="{{ route('admin.password.update') }}">
           @csrf
           <input type="hidden" name="id" value="{{$admin_details->id}}">
                <div class="card-body">
                  <div class="form-group">
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Old password</label>
                    <input type="password" name="oldpassword" class="form-control" id="exampleInputPassword1" placeholder="Old Password">
                   
                     
                  </div>

                    



                 


                  <div class="form-group">
                    <label for="exampleInputPassword1">New Password</label>
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
    @include('admin.includes.footer')
@endsection


 
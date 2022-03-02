<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('branch.newinclude.head')

<body class="app sidebar-mini">

   @include('branch.newinclude.settings')

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('branch.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

                    @include('branch.newinclude.header')
                                                              <!--Page header-->
                                                             
            
       
                                                              
                                                              
                                                              
               <div class="row">
          <!-- left column -->
          <div class="col-md-12">
               <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
            </ol>
          </div>
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header xhead">
                <h3 class="card-title">Change Password <small></small></h3>
               
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('branch.password.update') }}">
           @csrf
           <input type="hidden" name="id" value="{{$branch_details->id}}">
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
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                             
 </div>
            <!-- End app-content-->
        </div>
        @include('branch.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('branch.newinclude.script')
</body>

</html>
        
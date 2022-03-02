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
                         <div class="content-wrapper">
    <!-- Content Header (Page header) -->
   
      <div class="container-fluid">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
                <h3> MBDD</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="table-responsive">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Branch</th>

                    <th>Action</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>X</td>
                  </tr>
                  

                  </tbody>
                 
                  <tfoot>
                  <!--<tr>
                     <th>Sl No</th>
                    <th>Branch Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Branch</th>

                    <th>Action</th>
                  </tr>-->
                  </tfoot>
                </table>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
   
    <!-- /.content -->
  </div>                                      
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
            
                   
  </div>                 
</div>
        @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
</body>

</html>
        
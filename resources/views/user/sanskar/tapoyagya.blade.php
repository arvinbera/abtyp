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
                <h3 class="card-title"> TAPOYAGYA</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
               <div class="table-responsive">
                   
                   <table class="table table-bordered text-nowrap" id="example1">
                  <thead>
                  <tr>
                   <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Special Thanks</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                   

                    
                  </tr>
                  </thead>
                  
                  <tbody>
                    @if(isset($tapoyagya_list))
                     @foreach($tapoyagya_list as $tapoyagya)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $tapoyagya->username }}</td>
                    <td>{{ $tapoyagya->monthly_report_month }}</td>
                      <td>{{ $tapoyagya->branch_name }}</td>
                      <td>{{ $tapoyagya->tapoyaga_date   }}</td>
                      <td>{{ $tapoyagya->tapoyaga_time   }}</td>
                      <td>{{ $tapoyagya->tapoyaga_venue  }}</td>
                      <td>{{ $tapoyagya->tapoyaga_in_association   }}</td>
                      <td>{{ $tapoyagya->tapoyaga_conveynor }}</td>
                      <td>{{ $tapoyagya->tapoyaga_key_member   }}</td>
                      <td>{{ $tapoyagya->tapoyaga_special_thanks }}</td>
                      <td>{{ $tapoyagya->tapoyaga_brief_report }}</td>
                      <td>{{ $tapoyagya->tapoyaga_prepared_by  }}</td>
                      
                  

                   
                  </tr>
                  @endforeach
                    @endif
                  

                  </tbody>
                 
                  <tfoot>
                  <!--<tr>
                   <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Special Thanks</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                   
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
        
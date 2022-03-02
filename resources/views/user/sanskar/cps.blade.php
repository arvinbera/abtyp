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
                <h3 class="card-title"> Confident Public Speaking</h3>
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
         
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Chaitra Aatma</th>
                    <th>ABTYP Members</th>
                    <th>Parishad</th>
                    <th>Chief Guest</th>
                    <th>Guests</th>
                    <th>Total Presence</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                    

                    
                  </tr>
                  </thead>
                  
                  <tbody>
                    @if(isset($cps_list))
                     @foreach($cps_list as $cps)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $cps->username }}</td>
                    <td>{{ $cps->monthly_report_month }}</td>
                     <td>{{ $cps->branch_name }}</td>
                     <td>{{ $cps->cps_date }}</td>
                     <td>{{ $cps->cps_time }}</td>
                     <td>{{ $cps->cps_venue }}</td>
                     <td>{{ $cps->cps_in_association   }}</td>
                     <td>{{ $cps->cps_chaitra_aatma }}</td>
                     <td>{{ $cps->cps_abtyp_members }}</td>
                     <td>{{ $cps->cps_chief_guest }}</td>
                     <td>{{ $cps->cps_guest }}</td>
                     <td>{{ $cps->cps_total_presesnt }}</td>
                     <td>{{ $cps->cps_conveynor }}</td>
                     <td>{{ $cps->cps_key_member }}</td>
                     <td>{{ $cps->cps_sponcer }}</td>
                     <td>{{ $cps->cps_special_thanks }}</td>
                     <td>{{ $cps->cps_brief_report }}</td>
                     <td>{{ $cps->cps_prepared_by }}</td>
               

                    
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
                    <th>Chaitra Aatma</th>
                    <th>ABTYP Members</th>
               
                    <th>Chief Guest</th>
                    <th>Guests</th>
                    <th>Total Presence</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
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
        
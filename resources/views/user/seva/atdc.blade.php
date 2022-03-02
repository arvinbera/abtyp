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
                <h3> ATDC</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                    <div class="table-responsive">
               <table id="table" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                     <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <!-- <th>Parishad</th> -->
                    <th>Center Name</th>
                    <th>Total Amount of Billing</th>
                    <th>Total Number of Pathology Patients</th>
                    <th>Number of Dental Patients</th>
                    <th>Number of X-ray Patients</th>
                    <th>Number of Sonography Patients</th>
                    <th>Number of OPD Patients</th>
                    <th>Total Amount of Inventory Used</th>
                    <th>Amount of Special Donation of the month</th>
                   <!--  <th>Number of Doctor Visit in Center</th> -->
                    <th>Key Members</th>
                    <th>Brief Reporting</th>
                    
                  </tr>
                  </thead>
                  
                  <tbody>
                       @if(isset($atdc_list))
                     @foreach($atdc_list as $atdc)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $atdc->username }}</td>
                    <td>{{ $atdc->monthly_report_month }}</td>
                    <!-- <td>{{ $atdc->branch_name }}</td> -->
                    <td>{{ $atdc->center_name }}</td>
                    <td>{{ $atdc->total_no_of_billing }}</td>
                    <td>{{ $atdc->total_no_of_pathology_patients   }}</td>
                    <td>{{ $atdc->no_of_dental_patients }}</td>
                    <td>{{ $atdc->no_of_x_ray_patients }}</td>
                    <td>{{ $atdc->no_of_sonography_patients }}</td>
                    <td>{{ $atdc->no_of_opd_patients }}</td>
                    <td>{{ $atdc->total_no_of_inventory_used }}</td>
                    <td>{{ $atdc->special_donation }}</td>
                    <td>{{ $atdc->atdc_key_members }}</td>
                    <td>{{ $atdc->brief_reporting }}</td>
                 
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
                    <th>Number of Camps</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>Name of Blood Bank</th>
                    <th>In Association(if any)</th>
                    <th>Total Units Collected</th>
                    <th>Camp Convenors</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Chaitra Aatma</th>
                    <th>ABTYP Members</th>
                    <th>Chief Guest</th>
                    <th>Guests</th>
                    <th>Total</th>
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
    <script>
        $(document).ready(function() {
    $('#table').DataTable( {
        dom: 'Bfrtip',
        buttons: [
            'copy', 'csv', 'excel', 
        ]
    } );
} );
    </script>
</body>

</html>
        
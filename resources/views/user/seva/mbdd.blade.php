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
               <table id="table" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                     <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Date</th>
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
                    
                  </tr>
                  </thead>
                  
                  <tbody>
                       @if(isset($mbdds_list))
                     @foreach($mbdds_list as $mbdd)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $mbdd->username }}</td>
                    <td>{{ $mbdd->monthly_report_month }}</td>
                    <td>{{ $mbdd->date }}</td>
                    <td>{{ $mbdd->venue }}</td>
                    <td>{{ $mbdd->name_of_blood_bank }}</td>
                    <td>{{ $mbdd->in_association }}</td>
                    <td>{{ $mbdd->total_units_collected }}</td>
                    <td>{{ $mbdd->camp_convenors }}</td>
                    <td>{{ $mbdd->key_members }}</td>
                    <td>{{ $mbdd->sponsors }}</td>
                    <td>{{ $mbdd->special_thatnks_to }}</td>
                    <td>{{ $mbdd->brief_reports }}</td>
                    <td>{{ $mbdd->chaitra_aatma }}</td>
                    <td>{{ $mbdd->abtyp_members }}</td>
                    <td>{{ $mbdd->chief_guest }}</td>
                    <td>{{ $mbdd->guests }}</td>
                   
                    
                    
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
        
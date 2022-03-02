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
                <h3 class="card-title"> TTF</h3>
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
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Number Of participants</th>
                    <th>NDRF Trainer's Name</th>
                    <th>Convenors</th>
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
                       @if(isset($ttf_list))
                     @foreach($ttf_list as $ttf)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ttf->username }}</td>
                    <td>{{ $ttf->monthly_report_month }}</td>
                    
                    <td>{{ $ttf->ttf_date }}</td>
                    <td>{{ $ttf->ttf_time }}</td>
                    <td>{{ $ttf->ttf_venue }}</td>
                    <td>{{ $ttf->ttf_in_associati }}</td>
                    <td>{{ $ttf->ttf_number_Of_participants }}</td>
                    <td>{{ $ttf->ttf_ndrf_trainer_ame }}</td>
                   
                    <td>{{ $ttf->ttf_convenors }}</td>
                    <td>{{ $ttf->ttf_key_members }}</td>
                    <td>{{ $ttf->ttf_sponsors }}</td>
                    <td>{{ $ttf->ttf_special_thanks_to }}</td>
                    <td>{{ $ttf->ttf_brief_reports }}</td>
                    <td>{{ $ttf->ttf_chaitra_aatma }}</td>
                    <td>{{ $ttf->ttf_abtyp_members }}</td>
                    <td>{{ $ttf->ttf_chief_guest }}</td>
                    <td>{{ $ttf->ttf_guests }}</td>
                    
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
                    <th>Number Of participants</th>
                    <th>NDRF Trainer's Name</th>
                    <th>Stage</th>
                    <th>Convenors</th>
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
        
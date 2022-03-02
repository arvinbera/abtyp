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
                <h3> CHOKA SATKAR</h3>
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
                    <th>Number of Days</th>
                    <th>Amount Paid</th>
                    <th>Sponsor</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                  
              
                  </tr>
                  </thead>
                  
                  
                  <tbody>
                       @if(isset($cs_list))
                     @foreach($cs_list as $cs_list)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $cs_list->username }}</td>
                    <td>{{$cs_list->monthly_report_month }}</td>
                    <td>{{$cs_list->choka_satkar_no_of_days  }}</td>
                    <td>{{$cs_list->choka_satkar_amount_paid   }}</td>
                    <td>{{$cs_list->choka_satkar_sponsor }}</td>
                    <td>{{$cs_list->choka_satkar_special_thanks_to }}</td>
                    <td>{{$cs_list->choka_satkar_brief_reports }}</td>
                   
                    
                  </tr>
                   @endforeach
                    @endif
                  

                  </tbody>
                 
                 
                  <tfoot>
                 <!-- <tr>
                      <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date Form</th>
                    <th>Date To</th>
                    <th>Time</th>
                    <th>Number of Days</th>
                    <th>Amount Paid</th>
                    <th>Sponsor</th>
                    <th>In Association(if any)</th>
                    <th>Special Thanks To</th>
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
        
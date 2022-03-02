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
                <h3 class="card-title">  SAMAYIK SADHAK</h3>
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
                    <th>Jain Samayik Festival</th>
                    <th>Total Participants</th>
                    <th>Total Number of Samayik Sadhak</th>
                    <th>Donation of Samayik Kits</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>


                   
                  </tr>
                  </thead>
                  
                  <tbody>
                    @if(isset($ss_list))
                     @foreach($ss_list as $ss)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ss->username }}</td>
                    <td>{{ $ss->monthly_report_month }}</td>
                    <td>{{ $ss->branch_name }}</td>
                    <td>{{ $ss->ss_date }}</td>
                    <td>{{ $ss->ss_time }}</td>
                    <td>{{ $ss->ss_venue }}</td>
                    <td>{{ $ss->ss_in_association }}</td>
                    <td>{{ $ss->ss_jain_samayik_festival   }}</td>
                    <td>{{ $ss->ss_total_participants  }}</td>
                    <td>{{ $ss->ss_total_no_of_samayik_sadhak  }}</td>
                    <td>{{ $ss->ss_donation_of_samayik_kits }}</td>
                    <td>{{ $ss->ss_conveynor }}</td>
                    <td>{{ $ss->ss_key_member }}</td>
                    <td>{{ $ss->ss_special_thanks_to }}</td>
                    <td>{{ $ss->ss_brief_report }}</td>
                    <td>{{ $ss->ss_prepared_by   }}</td>
                    
                   
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
                    <th>Jain Samayik Festival</th>
                    <th>Total Participants</th>
                    <th>Total Number of Samayik Sadhak</th>
                    <th>Donation of Samayik Kits</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
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
</body>

</html>
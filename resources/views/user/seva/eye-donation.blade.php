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
                <h3 class="card-title"> EYE DONATION</h3>
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
                   
                    <th>Number of Eye Donation</th>
                    <th>Number of Eye Bank</th>
                    <th>Key Members</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                   
                    

                   
                  </tr>
                  </thead>
                   
                  
                  <tbody>
                      @if(isset($eye_donation_list))
                     @foreach($eye_donation_list as $eyedonate)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $eyedonate->username }}</td>
                    <td>{{ $eyedonate->monthly_report_month }}</td>
                  
                    <td>{{ $eyedonate->eye_donate_no_of_eye_donation }}</td>
                    <td>{{ $eyedonate->eye_donate_no_ofeye_bank  }}</td>
                    <td>{{ $eyedonate->eye_donate_kry_members }}</td>
                    <td>{{ $eyedonate->eye_donate_special_thanks_to }}</td>
                    <td>{{ $eyedonate->eye_donate_brief_report }}</td>
              
                    
                    
                    
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
                    <th>Number of Eye Donation</th>
                    <th>Number of Eye Bank</th>
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
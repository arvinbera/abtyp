<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('branch.newinclude.head')
<link id="theme" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link id="theme" href="https://cdn.datatables.net/buttons/2.0.1/css/buttons.dataTables.min.css" type="text/css"/>
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
                    <div class="page-header">
                          <div class="page-leftheader">
                              <h4 class="page-title mb-0">Adhivesan 2021</h4>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Adhivesan 2021</a></li>
                              </ol>
                          </div>
                        
                      </div>
                    <!--End Page header-->                                            
                    <!-- Row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Adhivesan 2021</div>
                                    </div>
                                    <div class="card-body">
                                   
                                        <div class="table-responsive">
                                            <table id="table" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Sl No</th>
                                                        <th class="wd-15p border-bottom-0">Parishad Name</th>
                                                        <th class="wd-20p border-bottom-0">Name</th>
                                                        <th class="wd-20p border-bottom-0">Mobile No</th>
                                                        <th class="wd-20p border-bottom-0">Email</th>
                                                        <th class="wd-15p border-bottom-0">Role</th>
                                                        <th class="wd-15p border-bottom-0">Date Of Arrival</th>
                                                        <th class="wd-15p border-bottom-0">Date of Departure</th>
                                                        <th class="wd-15p border-bottom-0">Time of Arrival</th>
                                                        <th class="wd-15p border-bottom-0">Time of Departure</th>
                                                        <th class="wd-15p border-bottom-0">Mode of Transportation</th>
                                                        <th class="wd-15p border-bottom-0">Adhveshan Fee	</th>
                                                        <th class="wd-15p border-bottom-0">Remarks</th>
                                                        <th class="wd-15p border-bottom-0">Mode of Payment</th>
                                                        <th class="wd-15p border-bottom-0">Status</th>
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($Adhivesan2021))
                                                    @foreach($Adhivesan2021 as $list)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                       
                                                        <td>{{ $list->parishad_name	 }}</td>
                                                        <td>{{ $list->name }}</td>
                                                        <td>{{ $list->mobile_no }}</td>
                                                        <td>{{ $list->email	 }}</td>
                                                        <td>{{ $list->role }}</td>
                                                        <td>{{ $list->date_of_arrival }}</td>
                                                        
                                                        <td>{{ $list->date_of_departure }}</td>
                                                        <td>{{ $list->time_of_arrival }}</td>
                                                        <td>{{ $list->time_of_departure	 }}</td>
                                                        <td>{{ $list->mode_of_transportation }}</td>
                                                        <td>{{ $list->adhveshan_fee }}</td>
                                                        <td>{{ $list->remarks	 }}</td>
                                                        <td>{{ $list->mode_of_payment }}</td>
                                                        <td>{{ $list->status }}</td>
                                                        
                                                        
                                                         
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <!--/div-->
                            </div>
                        </div>
                </div>
            </div>
            <!-- End app-content-->
        </div>
        @include('branch.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>
    @include('branch.newinclude.script')
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
        
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
                              <h4 class="page-title mb-0">EWC</h4>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">EWC</a></li>
                              </ol>
                          </div>
                        
                      </div>
                    <!--End Page header-->                                            
                    <!-- Row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">EWC</div>
                                    </div>
                                    <div class="card-body">
                                   
                                        <div class="table-responsive">
                                            <table id="table" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th>Sl No</th>
                                                        <th>Parishad Name</th>
                                                         <th>Name</th>
                                                          <th>DOB</th>
                                                        <th>Date is anniversary</th>
                                                        <th>Father Name</th>
                                                        <th>Present Address</th>
                                                        <th>State</th>
                                                        <th>City</th>
                                                        <th>Pincode</th>
                                                        <th>Native</th>
                                                        <th>Mobile</th>
                                                        <th>E-mail</th>
                                                        <th>shirt Size</th>
                                                        <th>Chest Measurement</th>
                                                        <th>Waist Measurement</th>
                                                        <th>Shoulder Measurement</th>
                                                        <th>Length in cm</th>
                                                        <th>Neck Opening in cm (full round)</th>
                                                        <th>Arrival date</th>
                                                        <th>Arrival Time</th>
                                                        <th>Arrival Transportation Mode</th>
                                                        <th>Departure date</th>
                                                        <th>Departure Time</th>
                                                        <th>Departure Transportation Mode</th>
                                                        
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($data))
                                                    @foreach($data as $list)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                       
                                                        <td>{{ $list->parishad_name	 }}</td>
                                                        <td>{{ $list->name }}</td>
                                                        <td>{{ $list->dob }}</td>
                                                        <td>{{ $list->date_of_anniversary	 }}</td>
                                                        <td>{{ $list->fater_name }}</td>
                                                        
                                                         <td>{{ $list->present_address }}</td>
                                                        
                                                        <td>{{ $list->state }}</td>
                                                        <td>{{ $list->city }}</td>
                                                        <td>{{ $list->pincode	 }}</td>
                                                        <td>{{ $list->native }}</td>
                                                        <td>{{ $list->mobile }}</td>
                                                        <td>{{ $list->email	 }}</td>
                                                         <td>{{ $list->size	 }}</td>
                                                         <td>{{ $list->chest_measurement_in_cm	 }}</td>
                                                         <td>{{ $list->waist_measurement_in_cm	 }}</td>
                                                         <td>{{ $list->shoulder_measurement_in_cm	 }}</td>
                                                         <td>{{ $list->length_in_cm }}</td>
                                                         <td>{{ $list->neck_opening_in_cm	 }}</td>
                                                         <td>{{ date('d-m-Y', strtotime($list->arrival_dates)) }}</td>
                                                          <td>{{ $list->arrival_time	 }}</td>
                                                          <td>{{ $list->arrival_transportation_mode	 }}</td>
                                                         <td>{{ date('d-m-Y', strtotime($list->departure_dates)) }}</td>
                                                         <td>{{ $list->departure_time	 }}</td>
                                                          <td>{{ $list->departure_transportation_mode	 }}</td>
                                                        
                                                        
                                                        
                                                         
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
        
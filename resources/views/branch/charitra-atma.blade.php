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
                              <h4 class="page-title mb-0">Charitra Atma Managemnt</h4>
                              <ol class="breadcrumb">
                                  <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                                  <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Charitra Atma List</a></li>
                              </ol>
                          </div>
                          
                      </div>
                    <!--End Page header-->                                            
                    <!-- Row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Charitra Atma List</div>
                                    </div>
                                    <div class="card-body">
                                     
                                        <div class="table-responsive">
                                           <table id="table" class="display nowrap" style="width:100%">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Sl No</th>
                                                        <th class="wd-15p border-bottom-0">State</th>
                                                        <th class="wd-20p border-bottom-0">Parishad</th>
                                                        <th class="wd-15p border-bottom-0">From Date</th>
                                                        <th class="wd-10p border-bottom-0">To Date</th>
                                                        <th class="wd-10p border-bottom-0">Chritratma Ka Name</th>
                                                        <th class="wd-10p border-bottom-0">No Of People</th>
                                                        <th class="wd-10p border-bottom-0">Total Kilometre</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($date))
                                                    @foreach($date as $even)
                                                    
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $even->state }}</td>
                                                        <td>{{ $even->parishad_name }}</td>
                                                        <td><?php echo date('d-m-Y', strtotime($even->from_date)); ?></td>
                                                        <td><?php echo date('d-m-Y', strtotime($even->to_date)); ?></td>
                                                         <td>{{ $even->chritratma_ka_name }}</td>
                                                          <td>{{ $even->no_of_people }}</td>
                                                          <td>{{ $even->total_kilometre }}</td>
                                                        
                                                        
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
        
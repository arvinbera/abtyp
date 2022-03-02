<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
@include('branch.newinclude.head')
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
                        <h4 class="page-title mb-0">Yuva Vahini Registration</h4>
                        <ol class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{url('/admin/dashboard')}}"><i class="fe fe-home mr-2 fs-14"></i>Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page"><a href="javascript:void(0)">Yuva Vahini Registration</a></li>
                        </ol>
                      </div>
                      <div class="page-rightheader">
                       
                      </div>
                    </div>
                    <!--End Page header-->                                            
                    <!-- Row -->
                        <div class="row">
                            <div class="col-12">
                                <div class="card">
                                    <div class="card-header">
                                        <div class="card-title">Yuva Vahini Registration</div>
                                    </div>
                                    <div class="card-body">
                                      
                                        <div class="table-responsive">
                                           <table class="table table-bordered text-nowrap" id="table">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Sl No</th>
                                                        <th class="wd-15p border-bottom-0">Parishad</th>
                                                        <th class="wd-15p border-bottom-0">Slot</th>
                                                        <th class="wd-20p border-bottom-0">Member Details</th>
                                                        <th class="wd-20p border-bottom-0">Amount</th>
                                                        <th class="wd-20p border-bottom-0">Payment</th>
                                                        
                                                       
                                                        
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($data))
                                                    @foreach($data as $data_list)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>{{ $data_list->parishad_name }}</td>
                                                        <td>{{$data_list->start_date}} - {{$data_list->end_date}}</td>
                                                        
                                                        <?php
                                                        $member_data=DB::Table('yuva_vahini_registration_reg_member_list')->where('yuva_vahini_registration_reg_data_id',$data_list->id)->get();
                                                        ?>
                                                       <td>
                                                        @foreach($member_data as $member_datas)
                                                        Name: {{$member_datas->member_name}} | Mobile No: {{$member_datas->mobile_number}} | Jacket: @if($member_datas->coat_required == 'yes') Yes @else No @endif <br>
                                                       @endforeach
                                                  
                                                        </td>
                                                        <td>{{$data_list->amount}}</td>
                                                        @if($data_list->payment_status == 'complete')
                                                        <td>Done</td>
                                                        @else
                                                        <td>Pending</td>
                                                        @endif
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
            'copy', 'excel', 
        ]
    } );
} );
    </script>
</body>
</html>
        
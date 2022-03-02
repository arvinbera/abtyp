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
                   
                    <!--End Page header-->
                    <!-- ===========================Filter Start ================================== -->
   <!--               <form method="post" action="{{ route('user.monthly-report_filer') }}">
                @csrf

                <div class="card-body">
                <div class="row">
                
                    <div class="form-group">
                      
                        <select class="form-control" name="startmonth">
                            @if(isset($monthly_report_months))
                     @foreach($monthly_report_months as $monthyreportmonth)
                     
                          <option value={{$monthyreportmonth->month}}> <?php $newDateFormat2 = date('M-Y', strtotime($monthyreportmonth->month)); echo $newDateFormat2; ?>
                              
                              
                              
                              
                              </option>
                          @endforeach
                    @endif
                
                          
                        </select>
                      </div> 
                  
                  
                  <div class="col-3">
                     <button type="submit" class="btn btn-block btn-danger xhead">Filter</button>
                  </div>
                </div>
              </div>
               </form> -->
                    
                    
                     <div class="row">
                        <div class="col-12">
                            <div class="card">
									<div class="card-header">
										<div class="card-title">PD Monthly Report</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
                                        <table class="table table-bordered text-nowrap" id="table">
												<thead>
                  <tr>
                    <th class="wd-15p border-bottom-0">Sl No</th>
                    <th class="wd-15p border-bottom-0">Parishad Name </th>
                    <th class="wd-15p border-bottom-0">Month</th>
                    <th class="wd-15p border-bottom-0">Last EWC meeting Date</th>
                    
                    <th class="wd-15p border-bottom-0">Date From</th>
                    <th class="wd-15p border-bottom-0">Date To</th>
                    <th class="wd-15p border-bottom-0">Venue</th>
                    <th class="wd-15p border-bottom-0">In Association</th>
                    <th class="wd-15p border-bottom-0">Teachers Name</th>
                    <th class="wd-15p border-bottom-0">NUMBER OF PARTICIPANTS</th>
                    <th class="wd-15p border-bottom-0">Conveynor</th>
                    <th class="wd-15p border-bottom-0">Key Members</th>
                     <th class="wd-15p border-bottom-0">Sponsors</th>
                      <th class="wd-15p border-bottom-0">Special Thanks</th>
                       <th class="wd-15p border-bottom-0">Brief Report</th>
                        <th class="wd-15p border-bottom-0">Chaitra Aatma</th>
                         <th class="wd-15p border-bottom-0">ABTYP Members</th>
                          <th class="wd-15p border-bottom-0">Chief Guest</th>
                           <th class="wd-15p border-bottom-0">Guests</th>


               
                  




                    <th class="wd-15p border-bottom-0">Filled By</th>
                    <th class="wd-15p border-bottom-0">Role</th>
                    <th class="wd-15p border-bottom-0">Edit</th>
                    <th class="wd-15p border-bottom-0">PDF</th>
                    <th class="wd-15p border-bottom-0">Print</th> 
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                      @if(isset($monthly_report))
                     @foreach($monthly_report as $monthyreport)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $monthyreport->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($monthyreport->monthly_report_month)); echo $newDateFormat2; ?></td>
                    <td>{{ $monthyreport->ecw_meeting_date }}</td>

                    <td>{{ $monthyreport->pd_date }}</td>
                    <td>{{ $monthyreport->pd_time }}</td>
                    <td>{{ $monthyreport->pd_venue }}</td>
                    <td>{{ $monthyreport->pd_in_association }}</td>
                    <td>{{ $monthyreport->pd_teachers_name }}</td>
                    <td>{{ $monthyreport->pd_no_of_the_paticipants }}</td>
                    <td>{{ $monthyreport->pd_convenors }}</td>
                    <td>{{ $monthyreport->pd_kry_member }}</td>
                    <td>{{ $monthyreport->pd_sponsors }}</td>
                    <td>{{ $monthyreport->pd_special_thanks_to }}</td>
                    <td>{{ $monthyreport->pd_brief_report }}</td>
                    <td>{{ $monthyreport->pd_chaitra_aatma }}</td>
                    <td>{{ $monthyreport->pd_abtyp_members }}</td>
                    <td>{{ $monthyreport->pd_chief_guest }}</td>
                    <td>{{ $monthyreport->pd_guest }}</td>
               

              
              
             

                    <td>{{ $monthyreport->filled_by }}</td>
                    <td>{{ $monthyreport->filled_by_role }}</td>
                    <td>
                        @if (
                        
                        
                         $monthyreport->status=='Approve' 
                    
                                
                        ) Not Allowed
                        
                        
                        
                        
                        
                        @else
                    
                         <a href="{{url('user/pd-edit-form-view')}}/{{$monthyreport->id}}"><button class="btn btn-info w-100">Edit</button></a>
                         @endif
                    
                    
                    
                    
                    </td>
                    <td><a href="{{ url('user/pd_pdfview')}}/{{$monthyreport->id}}/{download}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a></td>
                    <td><a href="{{url('user/pd_print')}}/{{$monthyreport->id}}" target="_blank"><button class="btn btn-info w-100"><i class="fa fa-print" aria-hidden="true"></i> Print</button></td>
                    
                  
  

                    
                  </tr>
                   @endforeach
                    @endif
                
                  

                  </tbody>
                  
                 </tbody>
											</table>
										</div>
									</div>
								</div>
                        </div>
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
        
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
										<div class="card-title">Samayik Sadhak Monthly Report</div>
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
                    
                    <th class="wd-15p border-bottom-0">Venue</th>
                    <th class="wd-15p border-bottom-0">In Association</th>
                    <th class="wd-15p border-bottom-0">Jain Samayik Festival</th>
                    <th class="wd-15p border-bottom-0">Total Participants</th>
                    <th class="wd-15p border-bottom-0">Total Number of New Samayik Sadhak</th>
                    <th class="wd-15p border-bottom-0">Number of Samayik Kits Distributed</th>
                    <th class="wd-15p border-bottom-0">Convenors</th>
                    <th class="wd-15p border-bottom-0">Key Members</th>
                    <th class="wd-15p border-bottom-0">Special Thanks To</th>
                    <th class="wd-15p border-bottom-0">Brief Report</th>
                    <th class="wd-15p border-bottom-0">Chaitra Aatma</th>
                    <th class="wd-15p border-bottom-0">ABTYP Members</th>
               
                  




                    <th class="wd-15p border-bottom-0">Filled By</th>
                    <th class="wd-15p border-bottom-0">Role</th>
                    <th class="wd-15p border-bottom-0">Status</th>
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

                    <td>{{ $monthyreport->ss_venue }}</td>
                    <td>{{ $monthyreport->ss_in_association }}</td>
                    <td>{{ $monthyreport->ss_jain_samayik_festival }}</td>
                    <td>{{ $monthyreport->ss_total_participants }}</td>
                    <td>{{ $monthyreport->ss_total_no_of_samayik_sadhak }}</td>
                    <td>{{ $monthyreport->ss_donation_of_samayik_kits }}</td>
                    <td>{{ $monthyreport->ss_conveynor }}</td>
                    <td>{{ $monthyreport->ss_key_member }}</td>
                    <td>{{ $monthyreport->ss_special_thanks_to }}</td>
                    <td>{{ $monthyreport->ss_brief_report }}</td>
                    <td>{{ $monthyreport->ss_chaitra_aatma }}</td>
                    <td>{{ $monthyreport->ss_abtyp_members }}</td>
             

                    <td>{{ $monthyreport->filled_by }}</td>
                    <td>{{ $monthyreport->filled_by_role }}</td>
                      <td>
                        @if($monthyreport->status == 'pending')
                         <a href="{{url('branch/ss-status/'.$monthyreport->id)}}"><button class="btn btn-warning w-100">Pending</button></a>
                        @else
                        <a href="#"><button class="btn btn-success w-100">Accept</button></a>
                        @endif
                    </td>
                    
                    <td><a href="{{url('branch/ss__pdfview')}}/{{$monthyreport->id}}/{download}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a></td>
                    <td><a href="{{url('branch/ss_print')}}/{{$monthyreport->id}}" target="_blank"><button class="btn btn-info w-100"><i class="fa fa-print" aria-hidden="true"></i> Print</button></td>
                    
                  
  

                    
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
                    
                    
                    
 @include('branch.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('branch.newinclude.script')
</body>

</html>
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
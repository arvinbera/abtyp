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
                 <form method="post" action="{{ route('user.monthly-report_filer') }}">
                @csrf

                <div class="card-body">
                <div class="row">
                 <!-- <div class="col-3">
                    <input type="month" class="form-control" name="startmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" >
                  
     
                  </div>-->
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
                  <!--<div class="col-3">
                    <input type="month" class="form-control" name="endmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" value="<?php $today=date('Y-m'); echo $today; ?>" >
                  </div>-->
                  
                  <div class="col-3">
                     <button type="submit" class="btn btn-block btn-danger xhead">Filter</button>
                  </div>
                </div>
              </div>
               </form>
                    
                    
                     <div class="row">
                        <div class="col-12">
                            <div class="card">
									<div class="card-header">
										<div class="card-title">Monthly Report</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
											<table class="table table-bordered text-nowrap" id="example1">
												<thead>
                  <tr>
                    <th class="wd-15p border-bottom-0">Sl No</th>
                    <th class="wd-15p border-bottom-0">Parishad Name </th>
                    <th class="wd-15p border-bottom-0">Month</th>
                    <th class="wd-15p border-bottom-0">Edit</th>
                    <th class="wd-15p border-bottom-0">PDF</th>
                    <th class="wd-15p border-bottom-0">Print</th>
                   
                     <!--   <th>Print</th> -->
                    
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                      @if(isset($monthly_report))
                     @foreach($monthly_report as $monthyreport)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $monthyreport->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($monthyreport->monthly_report_month)); echo $newDateFormat2; ?></td>
                    <td>
                        @if (
                        
                        $monthyreport->atdc_status=='Approve' &&
                         $monthyreport->mbdd_status=='Approve' &&
                         $monthyreport->ttf_status=='Approve' &&
                         $monthyreport->yuvavahini_status=='Approve' &&
                         $monthyreport->eyedonation_status=='Approve' &&
                         $monthyreport->ampk_status=='Approve'  &&
                         $monthyreport->chokasatar_status=='Approve'
                         
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        
                        ) Not Allowed
                        
                        
                        
                        
                        
                        @else
                    
                         <a href="{{url('/user/monthly-report-edit')}}/{{$monthyreport->id}}"><button class="btn btn-info w-100">Edit</button></a>
                         @endif
                    
                    
                    
                    
                    </td>
                    <td><a href="{{ route('user/monthyreport-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a></td>
                    <td><a href="{{url('/monthly-report-print')}}/{{$monthyreport->id}}" target="_blank"><button class="btn btn-info w-100"><i class="fa fa-print" aria-hidden="true"></i> Print</button></td>
                    
                  
                  <!--  <td>
                   @if ($monthyreport->atdc_total_no_of_billing==null && 
                   $monthyreport->mbdd_name_of_camps==null && 
                        $monthyreport->ttf_ttf_date==null &&
                        $monthyreport->yuvavahini_yuva_vahini_date_form==null 
                   
                   
                   
                   ) Partial 
                   @else Complete @endif</td>
                   
                   <td>
                   @if ($monthyreport->atdc_status=='pending' && 
                   $monthyreport->mbdd_status=='pending' && 
                        $monthyreport->ttf_status=='pending' &&
                        $monthyreport->yuvavahini_status=='pending' 
                   
                   
                   
                   ) Pending 
                   @elseif ($monthyreport->atdc_status=='Approve' && 
                   $monthyreport->mbdd_status=='Approve' && 
                        $monthyreport->ttf_status=='Approve' &&
                        $monthyreport->yuvavahini_status=='Approve' 
                   
                   
                   
                   ) Approved 
                   
                   @else Dispproved
                   
                   
                   
                   
                   
                   
                   
                   
                   
                    @endif</td>
            

                    

                    
                  </tr>-->
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
</body>

</html>
        
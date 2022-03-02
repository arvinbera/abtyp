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
                                                              <form method="post" action="{{ route('branch.monthly-report_filer') }}">
                @csrf

                <div class="card-body">
                <div class="row">
                  <div class="col-3">
                    <input type="month" class="form-control" name="startmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" >
                  </div>
                  <div class="col-3">
                    <input type="month" class="form-control" name="endmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" value="<?php $today=date('Y-m'); echo $today; ?>" >
                  </div>
                  
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
                    <th>Sl No</th>
                    <th>Parishad Name</th>
                    <th>Month</th>
                    <!--<th>Edit</th>-->
                    <th>View</th>
                   
                     <th>PDF</th>
                        <th>Print</th>
                         <!-- <th>Status</th> -->
                         <th>Approval Status</th>
                         
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                      @if(isset($monthly_report))
                     @foreach($monthly_report as $monthyreport)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $monthyreport->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($monthyreport->monthly_report_month)); echo $newDateFormat2; ?></td>
                   <td><a href="{{url('/branch/monthly-report-edit')}}/{{$monthyreport->id}}"><button class="btn btn-info w-100">View</button></a></td>
                   <td>
                         @if ($branchh->name=='ATDC') 
                          <a href="{{ route('atdc-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif
                          
                           @if ($branchh->name=='MBDD') 
                            <a href="{{ route('mbdd-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif
                          
                             @if ($branchh->name=='TTF') 
                    <a href="{{ route('ttf-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif
                          
                          
                           @if ($branchh->name=='YuvaVahini') 
                     <a href="{{ route('yuvavahini-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif

                          @if ($branchh->name=='EyeDonation') 
                      <a href="{{ route('eyedonation-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif

                          @if ($branchh->name=='AMPK') 
                      <a href="{{ route('ampk-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif

                           @if ($branchh->name=='ChokaSatkar') 
                     <a href="{{ route('chokasatkar-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><button class="btn btn-success w-100"><i class="fa fa-file-pdf-o" aria-hidden="true"></i> Pdf</button></a>
                          @endif
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                       
                      
                       
                       
                       </td>

<!--                    <td><a href="{{ route('branch.monthyreport-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>-->
                    <td><a href="{{url('branch/monthly-report-print')}}/{{$monthyreport->id}}" target="_blank"><button class="btn btn-info w-100"><i class="fa fa-print" aria-hidden="true"></i> Print</button></td>
                     <!--   <td>
                   @if ($monthyreport->atdc_total_no_of_billing==null && 
                   $monthyreport->mbdd_name_of_camps==null && 
                        $monthyreport->ttf_ttf_date==null &&
                        $monthyreport->yuvavahini_yuva_vahini_date_form==null 
                   
                   
                   
                   ) Partial 
                   @else Complete @endif</td> -->
                   <td>
                        @if ($branchh->name=='ATDC')   {{$monthyreport->atdc_status}}
                        @elseif ($branchh->name=='MBDD')   {{$monthyreport->mbdd_status}}
                          @elseif ($branchh->name=='TTF')   {{$monthyreport->ttf_status}}
                            @elseif ($branchh->name=='YuvaVahini')   {{$monthyreport->yuvavahini_status}}
                             @elseif ($branchh->name=='EyeDonation')   {{$monthyreport->eyedonation_status}}
                              @elseif ($branchh->name=='AMPK')   {{$monthyreport->ampk_status}}
                               @elseif ($branchh->name=='ATJH')   {{$monthyreport->atjh_status}}
                               @elseif ($branchh->name=='ChokaSatkar')   {{$monthyreport->chokasatar_status}}
                                 @elseif ($branchh->name=='JainSanskarVidhi')   {{$monthyreport->jsv_status}}
                                 @elseif ($branchh->name=='JainVidhyaKatyashal')   {{$monthyreport->jvk_status}}
                                  @elseif ($branchh->name=='SamayikSadhak')   {{$monthyreport->samayiksadhak_status}}
                                    @elseif ($branchh->name=='Tapoyagya')   {{$monthyreport->tapoyagya_status}}
                                    @elseif ($branchh->name=='CPS')   {{$monthyreport->cps_status}}
                                     @elseif ($branchh->name=='PD')   {{$monthyreport->pd_status}}
                                     @elseif ($branchh->name=='BarahVrat')   {{$monthyreport->barahvarat_status}}
                                      @elseif ($branchh->name=='YuvaDivas')   {{$monthyreport->yuvadivas_status}}


                   
                   
                   
                   
                   @endif
                   </td>
                   

            

                    

                    
                  </tr>
                   @endforeach
                    @endif
                
                  

                  </tbody>
                  
                 
                  <tfoot>
                  <!--<tr>
                    <th>Sl No</th>
                    <th>Coordinator</th>
                    <th>Month</th>
             
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Number Of participants</th>
                    <th>NDRF Trainer's Name</th>
                    <th>Stage</th>
                    <th>Convenors</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Chaitra Aatma</th>
                    <th>ABTYP Members</th>
                    <th>Chief Guest</th>
                    <th>Guests</th>
                    <th>Total</th>
                    <th>Prepared By</th>
                  </tr>-->
                  </tfoot>
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
        
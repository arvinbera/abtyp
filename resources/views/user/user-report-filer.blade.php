@extends('user.layouts.app')
@section('header')
<title>ABTYP Report | user Dashboard</title>
   @include('user.includes.header')
   <style>
       .xhead 
       {
          background: #b30000 !important;
       }
       .backimg
      {
        background-image: url({{asset('/')}}/public/adminassets/dist/img/animate-background1.jpg) !important;
        width: 100%;
        background-size: cover !important;
        background-position: center top !important;
      }
      .main-htext
      {
         font-weight: 600;
         font-size: 30px;
         letter-spacing: 2px;
         font-family: emoji;
         color: #FFF;
      }
   </style>
   @endsection

         

   @section('content')
<!-- <div class="content-wrapper" style="min-height: 2610px;margin-left: 0px;background: #FFF;">-->
<div class="content-wrapper backimg" style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 main-htext"> Monthly Report</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
           <!-- ===========================Filter Start ================================== -->
                 <form method="post" action="{{ route('user.monthly-report_filer') }}">
                @csrf

                <div class="card-body">
                <div class="row">
                  <!--<div class="col-3">
                    <input type="month" class="form-control" name="startmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" >
                    
                  </div>-->
                  
                    <div class="form-group">
                         
                        <select class="form-control" name="startmonth">
                            @if(isset($monthly_report_months))
                     @foreach($monthly_report_months as $monthyreportmonth)
                     
                     @if (old('startmonth') == $monthyreportmonth->month)
                     
                          <option value="{{$monthyreportmonth->month}}" selected> <?php $newDateFormat2 = date('M-Y', strtotime($monthyreportmonth->month)); echo $newDateFormat2; ?> </option>
                              @else
                               <option value="{{$monthyreportmonth->month}}" > <?php $newDateFormat2 = date('M-Y', strtotime($monthyreportmonth->month)); echo $newDateFormat2; ?> </option>
                               @endif
                              
                              
                              
                             
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


              <!-- ===========================Filter End=============================== -->
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
               <table id="example" class="display nowrap table table-striped table-bordered dataTable no-footer" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Parishad Name </th>
                    <th>Month</th>
                    <th>Edit</th>
                    <th>PDF</th>
                    <th>Print</th>
                   
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
                    <td><a href="{{url('/user/monthly-report-edit')}}/{{$monthyreport->id}}">Edit</a></td>
                    <td><a href="{{ route('user/monthyreport-pdfview',['id'=>$monthyreport->id, 'monthly_report_month'=>$monthyreport->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('/monthly-report-print')}}/{{$monthyreport->id}}" target="_blank"><i class="fas fa-print"></td>
                    
                  
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
              <!-- /.card-body -->
              <div class="table-responsive">
              <div class="card-body">
               <table id="example" class="display nowrap table table-striped table-bordered dataTable no-footer" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th> Name </th>
                    <th>Status</th>
                     <th>Edit</th>
                  
                    



                    
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                    
                     
                 <tr>
                    <td>1</td>
                    <td>ATDC</td>
                    <td>@if ($atdc_ststus->total_no_of_billing != null && $atdc_ststus->atdc_status=='pending') Submitted
                    @elseif ($atdc_ststus->atdc_status=='Approve') Approved
                      @elseif ($atdc_ststus->atdc_status=='Disapprove') Disapprove

                   
                    
                 
                    @endif</td>
                    <td>@if ($atdc_ststus->total_no_of_billing != null && $atdc_ststus->atdc_status=='pending') 
                    <a href="{{url('/user/monthly-report-edit/atdc')}}/{{$monthyreport->id}}">Edit</a>
                    

                   
                    
                 
                    @endif</td>
                    
                  
                </tr>
                
                  <tr>
                    <td>2</td>
                    <td>MBDD</td>
                    <td>@if ($mbdd_ststus->name_of_camps != null && $mbdd_ststus->status=='pending') Submitted
                    @elseif ($mbdd_ststus->status=='Approve') Approved
                    @elseif ($mbdd_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($mbdd_ststus->name_of_camps != null && $mbdd_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/mbdd')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>3</td>
                    <td>TTF</td>
                    <td>@if ($ttf_ststus->ttf_date != null && $ttf_ststus->status=='pending') Submitted
                    @elseif ($ttf_ststus->status=='Approve') Approved
                    @elseif ($ttf_ststus->status=='Disapprove') Disapprove
                   
                    @endif</td>
                    <td>@if ($ttf_ststus->ttf_date != null && $ttf_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/ttf')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>4</td>
                    <td>Yuvavahini</td>
                   <td>@if ($yuvavahini_ststus->yuva_vahini_date_form != null && $yuvavahini_ststus->status=='pending') Submitted
                    @elseif ($yuvavahini_ststus->status=='Approve') Approved
                     @elseif ($yuvavahini_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($yuvavahini_ststus->yuva_vahini_date_form != null && $yuvavahini_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/yuvavahini')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>5</td>
                    <td>Eye Donation	</td>
                     <td>@if ($eyedonation_ststus->eye_donate_no_of_eye_donation != null && $eyedonation_ststus->status=='pending') Submitted
                    @elseif ($eyedonation_ststus->status=='Approve') Approved
                           @elseif ($eyedonation_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($eyedonation_ststus->eye_donate_no_of_eye_donation != null && $eyedonation_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/eye-donation')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>6</td>
                    <td>AMPK</td>
                   
                     <td>@if ($ampk_ststus->ampk_address != null && $ampk_ststus->status=='pending') Submitted
                    @elseif ($ampk_ststus->status=='Approve') Approved
                     @elseif ($ampk_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                    <td>@if ($ampk_ststus->ampk_address != null && $ampk_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/ampk')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>7</td>
                    <td>Chokasatar	</td>
                    <td>@if ($chokasatar_ststus->choka_satkar_date_form != null && $chokasatar_ststus->status=='pending') Submitted
                    @elseif ($chokasatar_ststus->status=='Approve') Approved
                        @elseif ($chokasatar_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                    <td>@if ($chokasatar_ststus->choka_satkar_date_form != null && $chokasatar_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/chokasatar')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>8</td>
                    <td>JAIN SANSKAR VIDHI	</td>
                     <td>@if ($jsv_ststus->jsv_date != null && $jsv_ststus->status=='pending') Submitted
                    @elseif ($jsv_ststus->status=='Approve') Approved
                     @elseif ($jsv_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                    <td>@if ($jsv_ststus->jsv_date != null && $jsv_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/jsv')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>9</td>
                    <td>SAMAYIK SADHAK	</td>
                    <td>@if ($samayiksadhak_ststus->ss_date != null && $samayiksadhak_ststus->status=='pending') Submitted
                    @elseif ($samayiksadhak_ststus->status=='Approve') Approved
                    @elseif ($samayiksadhak_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($samayiksadhak_ststus->ss_date != null && $samayiksadhak_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/ss')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>10</td>
                    <td>TAPOYAGYA</td>
                   <td>@if ($tapoyagya_ststus->tapoyaga_date != null && $tapoyagya_ststus->status=='pending') Submitted
                    @elseif ($tapoyagya_ststus->status=='Approve') Approved
                        @elseif ($tapoyagya_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($tapoyagya_ststus->tapoyaga_date != null && $tapoyagya_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/tapoyagya')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>11</td>
                    <td>CPS</td>
                    <td>@if ($cps_ststus->cps_date != null && $cps_ststus->status=='pending') Submitted
                    @elseif ($cps_ststus->status=='Approve') Approved
                       @elseif ($cps_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                    <td>@if ($cps_ststus->cps_date != null && $cps_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/cps')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>12</td>
                    <td>PD</td>
                      <td>@if ($pd_ststus->pd_date != null && $pd_ststus->status=='pending') Submitted
                    @elseif ($pd_ststus->status=='Approve') Approved
                     @elseif ($pd_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                    <td>@if ($pd_ststus->pd_date != null && $pd_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/pd')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>13</td>
                    <td>BARAH VRAT	</td>
                    
                      <td>@if ($barahvarat_ststus->bv_date != null && $barahvarat_ststus->status=='pending') Submitted
                    @elseif ($barahvarat_ststus->status=='Approve') Approved
                        @elseif ($barahvarat_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($barahvarat_ststus->bv_date != null && $barahvarat_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/barahvarat')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>14</td>
                    <td>JAIN VIDHYA KATYASHALA	</td>
                    <td>@if ($jvk_ststus->jvk_date != null && $jvk_ststus->status=='pending') Submitted
                    @elseif ($jvk_ststus->status=='Approve') Approved
                        @elseif ($jvk_ststus->status=='Disapprove') Disapprove
                   
                    
                 
                    @endif</td>
                     <td>@if ($jvk_ststus->jvk_date != null && $jvk_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/jvk')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>15</td>
                    <td>YUVA DIVAS	</td>
                     <td>@if ($yuvadivas_ststus->yd_date != null && $yuvadivas_ststus->status=='pending') Submitted
                    @elseif ($yuvadivas_ststus->status=='Approve') Approved
                        @elseif ($yuvadivas_ststus->status=='Disapprove') Disapprove
                    
                   
                    
                 
                    @endif</td>
                    <td>@if ($yuvadivas_ststus->yd_date != null && $yuvadivas_ststus->status=='pending')
                    <a href="{{url('/user/monthly-report-edit/yuvadivas')}}/{{$monthyreport->id}}">Edit</a>
                    @endif</td>
                    
                  
                </tr>
                  <tr>
                    <td>16</td>
                    <td>TKM</td>
                    <td></td>
                    <td></td>
                    
                  
                </tr>
                  <tr>
                    <td>17</td>
                    <td>YUVA SANGAM	</td>
                    <td></td>
                    <td></td>
                    
                  
                </tr>
                  <tr>
                    <td>18</td>
                    <td>Fit Yuva	</td>
                    <td></td>
                    <td></td>
                    
                  
                </tr>
                 <!--  -->
                 
                
                
                
                  

                  </tbody>
                  
                 
                
                </table>
              </div>
              </div>
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

   @endsection
@section('footer')
    @include('user.includes.footer')
@endsection


 
@extends('user.layouts.app')
@section('header')
<title>ABTYP Report | user Dashboard</title>
   @include('user.includes.header')
   @endsection

         

   @section('content')
 <div class="content-wrapper" style="min-height: 2610px;margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Monthly Report</h1>
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
                  <div class="col-3">
                    <input type="month" class="form-control" name="startmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" >
                  </div>
                  <!--<div class="col-3">
                    <input type="month" class="form-control" name="endmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" value="<?php $today=date('Y-m'); echo $today; ?>" >
                  </div>-->
                  
                  <div class="col-3">
                     <button type="submit" class="btn btn-block btn-danger">Filter</button>
                  </div>
                </div>
              </div>
               </form>


              <!-- ===========================Filter End=============================== -->
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
               <table id="example" class="display nowrap" style="width:100%">
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
                 
                  </tfoot>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
                  <div class="table-responsive">
              <div class="card-body">
               <table id="example" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Parishad Name </th>
                    <th>Month</th>
                
                    
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                    
                     
                 <tr>
                  <td></td>
                      <td></td>
                          <td></td>
                    
                  
                 
                  

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


 
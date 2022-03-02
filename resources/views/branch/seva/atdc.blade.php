@extends('branch.layouts.app')
@section('header')
<title>ABTYP ATDC List | branch Dashboard</title>
   @include('branch.includes.header')
   @endsection
   @section('sidebar')
   @include('branch.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> ATDC</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
             <!-- ===========================Filter Start ================================== -->
                 <form method="post" action="{{ route('branch.atdc-report-filter') }}">
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
                     
                        <select class="form-control" name="user_id" id="" >
                           @if(isset($users_list))
                             @foreach($users_list as $users)
                          <option value="{{ $users->id }}">{{ $users->address }}</option>
                           @endforeach
                           @endif
                        </select>
                      
                 </div>
                  <div class="col-1">
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
                   <th>Coordinator Name</th>
                    <th>Month</th>
                   
                    <th>Total Amount of Billing</th>
                    <th>Total Number of Pathology Patients</th>
                    <th>Number of Dental Patients</th>
                    
                    <th>Number of X-ray Patients</th>
                    <th>Number of Sonography Patients</th>
                    <th>Number of OPD Patients</th>
                    <th>Total Amount of Inventory Used</th>
                    <th>Any Special Donation of the Month</th>
                    <th>Special Activity Or Camp</th>
                    <th>Any Change in Machinery</th>
                    <th>Key Members</th>
                    <th>Brief Reporting</th>
                    <th>Prepared By</th>
                    <th>Edit</th>
                    <th>PDF</th>
                       <th>Print</th>
                     
                   
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                       @if(isset($atdc_list))
                     @foreach($atdc_list as $atdc)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $atdc->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($atdc->monthly_report_month)); echo $newDateFormat2; ?>
                        
                       </td>
                    
                    <td>{{ $atdc->total_no_of_billing }}</td>
                    <td>{{ $atdc->total_no_of_pathology_patients   }}</td>
                    <td>{{ $atdc->no_of_dental_patients }}</td>
                    <td>{{ $atdc->no_of_x_ray_patients }}</td>
                    <td>{{ $atdc->no_of_sonography_patients }}</td>
                    <td>{{ $atdc->no_of_opd_patients }}</td>
                    <td>{{ $atdc->total_no_of_inventory_used }}</td>
                    <td>{{ $atdc->special_donation }}</td>
                    <td>{{ $atdc->special_activity }}</td>
                    <td>{{ $atdc->chnage_in_machinery }}</td>
                    <td>{{ $atdc->atdc_key_members }}</td>
                    <td>{{ $atdc->brief_reporting }}</td>
                    <td>{{ $atdc->atdc_prepared_by }}</td>
                    <td><a href="{{url('/branch/atdc-edit')}}/{{$atdc->id}}">Edit</a></td>
                    <td><a href="{{ route('atdc-pdfview',['id'=>$atdc->id, 'monthly_report_month'=>$atdc->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('branch/atdc-print')}}/{{$atdc->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                 

                    
                  </tr>
                   @endforeach
                    @endif
                    
                   
                  

                  </tbody>
                 
                 
                  <tfoot>
                  <!--<tr>
                     <th>Sl No</th>
                   <th>Coordinator Name</th>
                    <th>Month</th>
                   
                    <th>Total Amount of Billing</th>
                    <th>Total Number of Pathology Patients</th>
                    <th>Number of Dental Patients</th>
                    
                    <th>Number of X-ray Patients</th>
                    <th>Number of Sonography Patients</th>
                    <th>Number of OPD Patients</th>
                    <th>Total Amount of Inventory Used</th>
                    <th>Any Special Donation of the Month</th>
                    <th>Special Activity Or Camp</th>
                    <th>Any Change in Machinery</th>
                    <th>Key Members</th>
                    <th>Brief Reporting</th>
                    <th>Prepared By</th>
                    
                  </tr>-->
                  </tfoot>
                </table>
              </div>
              </div>
              <!-- /.card-body -->
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
    @include('branch.includes.footer')
@endsection
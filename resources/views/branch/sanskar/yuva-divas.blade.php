@extends('branch.layouts.app')
@section('header')
<title>ABTYP Branch List | branch Dashboard</title>
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
            <h1>  YUVA DIVAS</h1>
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
                 <form method="post" action="{{ route('branch.yuvadivas-report-filter') }}">
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
                   <th>Coordinator Name</th>
                    <th>Month</th>
                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>TOPIC</th>
                    <th>NUMBER OF PARTICIPANTS:</th>
                    <th>CONVENORS</th>
                    <th>KEY MEMBERS</th>
                    <th>SPONSORS</th>
                    <th>SPECIAL THANKS TO:</th>
                    <th>BREIF REPORT</th>
                    <th>Note</th>
                    <th>Edit</th>
                      <th>PDF</th>
                       <th>Print</th>

                    

                  </tr>
                  </thead>
                  
                  <tbody>
                     @if(isset($yuvadivas_list))
                     @foreach($yuvadivas_list as $yuvadivas)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $yuvadivas->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($yuvadivas->monthly_report_month)); echo $newDateFormat2; ?>
                        
                    </td>
          
                     <td>{{ $yuvadivas->yd_date }}</td>
                     <td>{{ $yuvadivas->yd_time }}</td>
                     <td>{{ $yuvadivas->yd_venue }}</td>
                     <td>{{ $yuvadivas->yd_in_association }}</td>
                     <td>{{ $yuvadivas->yd_topic }}</td>
                     <td>{{ $yuvadivas->yd_no_of_participants }}</td>
                     <td>{{ $yuvadivas->yd_convenors }}</td>
                     <td>{{ $yuvadivas->yd_key_members   }}</td>
                     <td>{{ $yuvadivas->yd_sponsors }}</td>
                     <td>{{ $yuvadivas->yd_special_thanks_to }}</td>
                     <td>{{ $yuvadivas->yd_brief_reports }}</td>
                     <td>{{ $yuvadivas->yd_note }}</td>
                       <td><a href="{{url('/branch/yuvadivas-edit')}}/{{$yuvadivas->id}}">Edit</a></td>
                       <td><a href="{{ route('yuva-divas-pdfview',['id'=>$yuvadivas->id, 'monthly_report_month'=>$yuvadivas->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('branch/yuvadivas-print')}}/{{$yuvadivas->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                     
                   
                  </tr>
                  @endforeach
                    @endif
                  

                  </tbody>
                 
                  <tfoot>
                <!--  <tr>
                    <th>Sl No</th>
                   <th>Coordinator Name</th>
                    <th>Month</th>
                 
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>TOPIC</th>
                    <th>NUMBER OF PARTICIPANTS:</th>
                    <th>CONVENORS</th>
                    <th>KEY MEMBERS</th>
                    <th>SPONSORS</th>
                    <th>SPECIAL THANKS TO:</th>
                    <th>BREIF REPORT</th>
                    <th>Note</th>
                   
    
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


 
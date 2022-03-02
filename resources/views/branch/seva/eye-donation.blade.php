@extends('branch.layouts.app')
@section('header')
<title>ABTYP EYE DONATION List | branch Dashboard</title>
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
            <h1> EYE DONATION</h1>
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
                 <form method="post" action="{{ route('branch.eyedonation-report-filter') }}">
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
              <!-- /.card-header --><div class="table-responsive">
              <div class="card-body">
                <table id="example" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                   <th>Coordinator Name</th>
                    <th>Month</th>
               
                    <th>Number of Eye Donation</th>
                    <th>Number of Eye Bank</th>
                    <th>Key Members</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                    <th>Edit</th>
                     <th>PDF</th>
                       <th>Print</th>
                    

                   
                  </tr>
                  </thead>
                   
                  
                  <tbody>
                      @if(isset($eye_donation_list))
                     @foreach($eye_donation_list as $eyedonate)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $eyedonate->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($eyedonate->monthly_report_month)); echo $newDateFormat2; ?>
                        
                     </td>
              
                    <td>{{ $eyedonate->eye_donate_no_of_eye_donation }}</td>
                    <td>{{ $eyedonate->eye_donate_no_ofeye_bank  }}</td>
                    <td>{{ $eyedonate->eye_donate_kry_members }}</td>
                    <td>{{ $eyedonate->eye_donate_special_thanks_to }}</td>
                    <td>{{ $eyedonate->eye_donate_brief_report }}</td>
                    <td>{{ $eyedonate->eye_donate_prepared_by }}</td>
                    <td><a href="{{url('/branch/eyedonate-edit')}}/{{$eyedonate->id}}">Edit</a></td>
                     <td><a href="{{ route('eyedonation-pdfview',['id'=>$eyedonate->id, 'monthly_report_month'=>$eyedonate->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('branch/eyedonate-print')}}/{{$eyedonate->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                    
                    
                  </tr>
                  @endforeach
                    @endif
                  

                  </tbody>
                  
                 
                  <tfoot>
                 <!-- <tr>
                    <th>Sl No</th>
                   <th>Coordinator Name</th>
                    <th>Month</th>
                
                    <th>Number of Eye Donation</th>
                    <th>Number of Eye Bank</th>
                    <th>Key Members</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
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


 
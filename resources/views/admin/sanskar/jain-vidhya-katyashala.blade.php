@extends('admin.layouts.app')
@section('header')
<title>ABTYP Branch List | Admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
   <style>
       .xhead {
    background: #b30000 !important;
}
   </style>
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> JAIN VIDHYA KATYASHALA</h1>
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
                 <form method="post" action="{{ route('admin.jvk-report-filter') }}">
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
                     
                        <select class="form-control" name="parisad_id" id="" >
                           @if(isset($users_list))
                             @foreach($users_list as $users)
                          <option value="{{ $users->id }}">{{ $users->address }}</option>
                           @endforeach
                           @endif
                        </select>
                      
                  </div>
                  <div class="col-3">
                     <button type="submit" class="btn btn-block btn-danger xhead <th>C<th>Coordinator Name</th>">Filter</button>
                  </div>
                </div>
              </div>
               </form>


              <!-- ===========================Filter End=============================== -->
              </div>
              <!-- /.card-header -->
             <div class="table-responsive">
           
              <div class="card-body">
                <form method="post"  action="{{ route('admin.jvk_pdf_submit',['download'=>'pdf']) }}">
                    @csrf
               <table id="example" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                     <th>
                      <input type="checkbox" name="" id="checkAll">
                    </th>
                    <th>Sl No</th>
                    <th>Coordinator Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Teacher's Name</th>
                    <th>Number Of participants</th>
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
                    <th>PDF</th>
                       <th>Print</th>
                    



                    
                  </tr>
                  </thead>
                   
                  
                  <tbody>
                    @if(isset($jvk_list))
                     @foreach($jvk_list as $jvk)
                 <tr>
                   <td>

                    <input type="checkbox" name="atdccb[]" value="{{$jvk->id}}" id="checkAll" multiple="">
                  </td>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $jvk->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($jvk->monthly_report_month)); echo $newDateFormat2; ?>
                        
                        
                      </td>
                     
                     <td>{{ $jvk->address }}</td>
                     <td>{{ $jvk->jvk_date   }}</td>
                     <td>{{ $jvk->jvk_time }}</td>
                     <td>{{ $jvk->jvk_venue  }}</td>
                     <td>{{ $jvk->jvk_in_association     }}</td>
                     <td>{{ $jvk->jvk_teachers_name }}</td>
                     <td>{{ $jvk->jvk_no_of_participants  }}</td>
                     <td>{{ $jvk->jvk_convenors }}</td>
                     <td>{{ $jvk->jvk_key_members }}</td>
                     <td>{{ $jvk->jvk_sponsor }}</td>
                     <td>{{ $jvk->jvk_special_thanks_to }}</td>
                     <td>{{ $jvk->jvk_brief_report }}</td>
                     <td>{{ $jvk->jvk_chaitra_aatma }}</td>
                     <td>{{ $jvk->jvk_abtyp_members }}</td>
                     <td>{{ $jvk->jvk_chief_guest }}</td>
                     <td>{{ $jvk->jvk_guest }}</td>
                     <td>{{ $jvk->jvk_total }}</td>
                     <td>{{ $jvk->jvk_prepared_by }}</td>
                      <td><a href="{{ route('admin-jvk-pdfview',['id'=>$jvk->id, 'monthly_report_month'=>$jvk->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                     <td><a href="{{url('admin/yuvasangam-print')}}/{{$jvk->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                    
                  </tr>
                  @endforeach
                    @endif

                  

                  </tbody>
                 
                  <tfoot>

                 <!-- <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Teacher's Name</th>
                    <th>Number Of participants</th>
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
                 <button type="submit">Download</button>

                </form>
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
    @include('admin.includes.footer')
  
    <script type="text/javascript">
      $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
    </script>
@endsection


 
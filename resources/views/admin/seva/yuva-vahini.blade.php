@extends('admin.layouts.app')
@section('header')
<title>ABTYP YUVA VAHINI List | Admin Dashboard</title>
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
            <h1> YUVA VAHINI</h1>
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
                 <form method="post" action="{{ route('admin.yuvavahini-report-filter') }}">
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
                <form method="post"  action="{{ route('admin.yuvavahini_pdf_submit',['download'=>'pdf']) }}">
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
                    <th>Date Form</th>
                    <th>Date To</th>
                    <th>Time</th>
                    <th>Number of Days</th>
                    <th>Number of Members</th>
                    <th>Total Distance</th>
                    <th>Number of YV Jackets Collected</th>
                    <th>Availed Abtyp's Accomodation</th>
                    <th>Availed Satkar</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                      <th>PDF</th>
                       <th>Print</th>
                   

                    

                    
                  </tr>
                  </thead>
                   
                  
                  <tbody>
                      @if(isset($yuva_vahini_list))
                     @foreach($yuva_vahini_list as $yv)
                 <tr>
                  <td>

                    <input type="checkbox" name="atdccb[]" value="{{$yv->id}}" id="checkAll" multiple="">
                  </td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $yv->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($yv->monthly_report_month)); echo $newDateFormat2; ?>
                        
                       </td>
                    <td>{{ $yv->address }}</td>
                    <td>{{ $yv->yuva_vahini_date_form  }}</td>
                    <td>{{ $yv->yuva_vahini_date_to  }}</td>
                    <td>{{ $yv->yuva_vahini_time }}</td>
                    <td>{{ $yv->yuva_vahini_no_Of_days }}</td>
                    <td>{{ $yv->yuva_vahini_no_of_members }}</td>
                    <td>{{ $yv->yuva_vahini_total_distance }}</td>
                    <td>{{ $yv->yuva_vahini_no_of_yv_jackets_collected }}</td>
                    <td>{{ $yv->yuva_vahini_availed_abtyp_accomodation }}</td>
                    <td>{{ $yv->yuva_vahini_availed_satkar }}</td>
                    <td>{{ $yv->yuva_vahini_brief_report }}</td>
                    <td>{{ $yv->yuva_vahini_prepared_by }}</td>
                     <td><a href="{{ route('admin-yuvavahini-pdfview',['id'=>$yv->id, 'monthly_report_month'=>$yv->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                  <td><a href="{{url('admin/yv-print')}}/{{$yv->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                    
                   
                  </tr>
                  @endforeach
                    @endif
                 
                  

                  </tbody>
                   
                  <tfoot>
                  <!--<tr>
                    <th>Sl No</th>
                   <th>Coordinator Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date Form</th>
                    <th>Date To</th>
                    <th>Time</th>
                    <th>Number of Days</th>
                    <th>Number of Members</th>
                    <th>Total Distance</th>
                    <th>Number of YV Jackets Collected</th>
                    <th>Availed Abtyp's Accomodation</th>
                    <th>Availed Satkar</th>
                    <th>Brief Report</th>
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


 
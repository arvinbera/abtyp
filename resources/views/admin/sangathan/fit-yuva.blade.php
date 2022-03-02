@extends('admin.layouts.app')
@section('header')
<title>ABTYP Branch List | Admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> FIT YUVA</h1>
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
                 <form method="post" action="{{ route('admin.fityuva-report-filter') }}">
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
                 <form method="post"  action="{{ route('admin.fityuva_pdf_submit',['download'=>'pdf']) }}">
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
                    <th>Event</th>
                    <th>Number Of participants</th>
                    <th>Convenors</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                
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
                    @if(isset($fityuva_list))
                     @foreach($fityuva_list as $fityuva)
                 <tr>
                   <td>

                    <input type="checkbox" name="atdccb[]" value="{{$fityuva->id}}" id="checkAll" multiple="">
                  </td>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $fityuva->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($fityuva->monthly_report_month)); echo $newDateFormat2; ?>
                        
                    </td>
                     <td>{{ $fityuva->address }}</td>
                     <td>{{ $fityuva->fit_yuva_date  }}</td>
                     <td>{{ $fityuva->fit_yuva_time }}</td>
                     <td>{{ $fityuva->fit_yuva_venue   }}</td>
                     <td>{{ $fityuva->fit_yuva_in_association }}</td>
                     <td>{{ $fityuva->fit_yuva_event }}</td>
                     <td>{{ $fityuva->fit_yuva_no_of_participants }}</td>
                     <td>{{ $fityuva->fit_yuva_convenors }}</td>
                     <td>{{ $fityuva->fit_yuva_key_members }}</td>
                     <td>{{ $fityuva->fit_yuva_sponsors }}</td>
                     <td>{{ $fityuva->fit_yuva_brief_report }}</td>
                     <td>{{ $fityuva->fit_yuva_chaitrs_aatma }}</td>
                     <td>{{ $fityuva->fit_yuva_abtyp_members }}</td>
                     <td>{{ $fityuva->fit_yuva_chief_guest }}</td>
                     <td>{{ $fityuva->fit_yuva_guest }}</td>
                     <td>{{ $fityuva->fit_yuva_total }}</td>
                     <td>{{ $fityuva->fit_yuva_prepared_by }}</td>
                      <td><a href="{{ route('admin-fittyuva-pdfview',['id'=>$fityuva->id, 'monthly_report_month'=>$fityuva->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                    <td><a href="{{url('admin/fityuva-print')}}/{{$fityuva->id}}" target="_blank"><i class="fas fa-print"></i></a></td>

                   
                  </tr>
                  @endforeach
                    @endif
                  

                  </tbody>
                 
                  <tfoot>
                 <!-- <tr>
                        <th>Sl No</th>
                    <th>Coordinator Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Event</th>
                    <th>Number Of participants</th>
                    <th>Convenors</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                
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


 
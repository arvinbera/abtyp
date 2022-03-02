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
            <h1>  25 BOL</h1>
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
                 <form method="post" action="{{ route('admin.twentyfivebol-report-filter') }}">
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
                <form method="post"  action="{{ route('admin.twentyfivebol_pdf_submit',['download'=>'pdf']) }}">
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
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks</th>
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
                      @if(isset($twentyfivebol_list))
                     @foreach($twentyfivebol_list as $tfbl)
                 <tr>
                   <td>

                    <input type="checkbox" name="atdccb[]" value="{{$tfbl->id}}" id="checkAll" multiple="">
                  </td>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $tfbl->username }}</td>
                    <td><?php $newDateFormat2 = date('M/Y', strtotime($tfbl->monthly_report_month)); echo $newDateFormat2; ?>
                        
                      </td>
                     <td>{{ $tfbl->address }}</td>
                     <td>{{ $tfbl->tbol_date }}</td>
                     <td>{{ $tfbl->tbol_time }}</td>
                     <td>{{ $tfbl->tbol_venue }}</td>
                     <td>{{ $tfbl->tbol_in_association   }}</td>
                     <td>{{ $tfbl->tbol_conveymor  }}</td>
                     <td>{{ $tfbl->tbol_key_members   }}</td>
                     <td>{{ $tfbl->tbol_sponsors   }}</td>
                     <td>{{ $tfbl->tbol_special_thanks   }}</td>
                     <td>{{ $tfbl->tbol_brief_report }}</td>
                     <td>{{ $tfbl->tbol_chaitra_aatma }}</td>
                     <td>{{ $tfbl->tbol_abtyp_members }}</td>
                     <td>{{ $tfbl->tbol_chief_guest }}</td>
                     <td>{{ $tfbl->tbol_guest  }}</td>
                     <td>{{ $tfbl->tbol_total }}</td>
                     <td>{{ $tfbl->tbol_preapred_by }}</td>
                      <td><a href="{{ route('admin-twenty-five-bol-pdfview',['id'=>$tfbl->id, 'monthly_report_month'=>$tfbl->monthly_report_month,'download'=>'pdf']) }}"><i class="fas fa-download"></i></a></td>
                   <td><a href="{{url('admin/tfbl-print')}}/{{$tfbl->id}}" target="_blank"><i class="fas fa-print"></i></a></td>
                     
                   
                  </tr>
                   @endforeach
                    @endif

                  

                  </tbody>
                 
                  <tfoot>
                  <!--<tr>
                      <th>Sl No</th>
                  <th>C<th>Coordinator Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks</th>
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


 
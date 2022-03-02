@extends('user.layouts.app')
@section('header')
<title>ABTYP user List | user Dashboard</title>
   @include('user.includes.header')
   @endsection
   @section('sidebar')
   @include('user.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>  JAIN SANSKAR VIDHI</h1>
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
                <h3 class="card-title">  JAIN SANSKAR VIDHI</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                     <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Sanskar's Name</th>
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

                 
                  </tr>
                  </thead>
                  
                  <tbody>
                     @if(isset($jsv_list))
                     @foreach($jsv_list as $jsv)
                 <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $jsv->username }}</td>
                    <td>{{ $jsv->monthly_report_month }}</td>
                     <td>{{ $jsv->branch_name }}</td>
                     <td>{{ $jsv->jsv_date   }}</td>
                     <td>{{ $jsv->jsv_time }}</td>
                     <td>{{ $jsv->jsv_venue }}</td>
                     <td>{{ $jsv->jsv_in_association   }}</td>
                     <td>{{ $jsv->jsv_sanskar_name }}</td>
                     <td>{{ $jsv->jsv_no_of_participant  }}</td>
                     <td>{{ $jsv->jsv_convenors }}</td>
                     <td>{{ $jsv->jsv_key_member }}</td>
                     <td>{{ $jsv->jsv_sponsors }}</td>
                     <td>{{ $jsv->jsv_specila_thanks_to }}</td>
                     <td>{{ $jsv->jsv_brief_report }}</td>
                     <td>{{ $jsv->jsv_chaitra_aatma }}</td>
                     <td>{{ $jsv->jsv_abtyp_members }}</td>
                     <td>{{ $jsv->jsv_chief_guest }}</td>
                     <td>{{ $jsv->jsv_guest }}</td>
                     <td>{{ $jsv->jsv_total }}</td>
                     <td>{{ $jsv->jsv_prepared_by }}</td>
                  </tr>
                  @endforeach
                    @endif
                  

                  </tbody>
                 
                  <tfoot>
                  <!--<tr>
                      <th>Sl No</th>
                    <th>Name</th>
                    <th>Month</th>
                    <th>Parishad</th>
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Sanskar's Name</th>
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
    @include('user.includes.footer')
@endsection


 
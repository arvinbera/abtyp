@extends('user.layouts.app')
@section('header')
<title>ABTYP Branch List | user Dashboard</title>
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
            <h1>  BARAH VRAT</h1>
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
                <h3 class="card-title">  BARAH VRAT</h3>
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
                     @if(isset($barahvarat_list))
                     @foreach($barahvarat_list as $bvl)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $bvl->username }}</td>
                    <td>{{ $bvl->monthly_report_month }}</td>
                     <td>{{ $bvl->branch_name }}</td>
                     <td>{{ $bvl->bv_date  }}</td>
                     <td>{{ $bvl->bv_time }}</td>
                     <td>{{ $bvl->bv_venue }}</td>
                     <td>{{ $bvl->bv_in_association }}</td>
                     <td>{{ $bvl->bv_sanskar_name  }}</td>
                     <td>{{ $bvl->bv_no_of_participant }}</td>
                     <td>{{ $bvl->bv_convenors }}</td>
                     <td>{{ $bvl->bv_key_members }}</td>
                     <td>{{ $bvl->bv_sponsors }}</td>
                     <td>{{ $bvl->bv_special_thanks_to }}</td>
                     <td>{{ $bvl->bv_brief_report  }}</td>
                     <td>{{ $bvl->bv_chaitra_aatma }}</td>
                     <td>{{ $bvl->bv_abtyp_members }}</td>
                     <td>{{ $bvl->bv_chief_guest }}</td>
                     <td>{{ $bvl->bv_guets }}</td>
                     <td>{{ $bvl->bv_total }}</td>
                     <td>{{ $bvl->bv_prepared_by }}</td>

                    
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


 
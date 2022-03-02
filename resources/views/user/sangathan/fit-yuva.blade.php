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
            <h1>User Data List of FIT YUVA</h1>
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
                <h3 class="card-title">User Data List of FIT YUVA</h3>
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



                  </tr>
                  </thead>
                  
                  <tbody>
                    @if(isset($fityuva_list))
                     @foreach($fityuva_list as $fityuva)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $fityuva->username }}</td>
                    <td>{{ $fityuva->monthly_report_month }}</td>
                     <td>{{ $fityuva->branch_name }}</td>
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


 
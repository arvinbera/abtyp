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
            <h1> PD</h1>
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
                <h3 class="card-title"> PD</h3>
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
                  


                    
                  </tr>
                  </thead>
                  
                  <tbody>
                 <tr>
                   @if(isset($pd_list))
                     @foreach($pd_list as $pd)
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $pd->username }}</td>
                    <td>{{ $pd->monthly_report_month }}</td>
                     <td>{{ $pd->branch_name }}</td>
                     <td>{{ $pd->pd_date }}</td>
                     <td>{{ $pd->pd_time   }}</td>
                     <td>{{ $pd->pd_venue  }}</td>
                     <td>{{ $pd->pd_in_association }}</td>
                     <td>{{ $pd->pd_teachers_name }}</td>
                     <td>{{ $pd->pd_no_of_participants }}</td>
                     <td>{{ $pd->pd_convenors }}</td>
                     <td>{{ $pd->pd_kry_member }}</td>
                     <td>{{ $pd->pd_sponsors }}</td>
                     <td>{{ $pd->pd_special_thanks_to }}</td>
                     <td>{{ $pd->pd_brief_report }}</td>
                     <td>{{ $pd->pd_chaitra_aatma }}</td>
                     <td>{{ $pd->pd_abtyp_members }}</td>
                     <td>{{ $pd->pd_chief_guest }}</td>
                     <td>{{ $pd->pd_guest }}</td>
                     <td>{{ $pd->pd_total }}</td>
                     <td>{{ $pd->pd_prepared_by }}</td>
                     
                    
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


 
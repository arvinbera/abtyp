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
            <h1>User Data List of TKM</h1>
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
                <h3 class="card-title">User Data List of TKM</h3>
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
                    @if(isset($ttk_list))
                     @foreach($ttk_list as $ttk)
                 <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $ttk->username }}</td>
                    <td>{{ $ttk->monthly_report_month }}</td>
                     <td>{{ $ttk->branch_name }}</td>
                     <td>{{ $ttk->tkm_name   }}</td>
                     <td>{{ $ttk->tkm_time }}</td>
                     <td>{{ $ttk->tkm_venue }}</td>
                     <td>{{ $ttk->tkm_in_association }}</td>
                     <td>{{ $ttk->tkm_no_of_participants }}</td>
                     <td>{{ $ttk->tkm_convenors }}</td>
                     <td>{{ $ttk->tkm_key_members }}</td>
                     <td>{{ $ttk->tkm_sponsors   }}</td>
                     <td>{{ $ttk->tkm_special_thanks_to  }}</td>
                     <td>{{ $ttk->tkm_brief_report }}</td>
                     <td>{{ $ttk->tkm_chaitra_aatma }}</td>
                     <td>{{ $ttk->tkm_abtyp_members }}</td>
                     <td>{{ $ttk->tkm_chief_guest }}</td>
                     <td>{{ $ttk->tkm_guest }}</td>
                     <td>{{ $ttk->tkm_total }}</td>
                     <td>{{ $ttk->tkm_prepared_by }}</td>
                     
                    
                    
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


 
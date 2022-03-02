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
                <h3 class="card-title"> JAIN VIDHYA KATYASHALA</h3>
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
                    @if(isset($jvk_list))
                     @foreach($jvk_list as $jvk)
                 <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $jvk->username }}</td>
                    <td>{{ $jvk->monthly_report_month }}</td>
                     <td>{{ $jvk->branch_name }}</td>
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


 
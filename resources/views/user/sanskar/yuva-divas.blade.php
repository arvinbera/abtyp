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
            <h1>  YUVA DIVAS</h1>
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
                <h3 class="card-title">  YUVA DIVAS</h3>
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
                    <th>TOPIC</th>
                    <th>NUMBER OF PARTICIPANTS:</th>
                    <th>CONVENORS</th>
                    <th>KEY MEMBERS</th>
                    <th>SPONSORS</th>
                    <th>SPECIAL THANKS TO:</th>
                    <th>BREIF REPORT</th>
                    <th>Note</th>

                    

                  </tr>
                  </thead>
                  
                  <tbody>
                     @if(isset($yuvadivas_list))
                     @foreach($yuvadivas_list as $yuvadivas)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $yuvadivas->username }}</td>
                    <td>{{ $yuvadivas->monthly_report_month }}</td>
                     <td>{{ $yuvadivas->branch_name }}</td>
                     <td>{{ $yuvadivas->yd_date }}</td>
                     <td>{{ $yuvadivas->yd_time }}</td>
                     <td>{{ $yuvadivas->yd_venue }}</td>
                     <td>{{ $yuvadivas->yd_in_association }}</td>
                     <td>{{ $yuvadivas->yd_topic }}</td>
                     <td>{{ $yuvadivas->yd_no_of_participants }}</td>
                     <td>{{ $yuvadivas->yd_convenors }}</td>
                     <td>{{ $yuvadivas->yd_key_members   }}</td>
                     <td>{{ $yuvadivas->yd_sponsors }}</td>
                     <td>{{ $yuvadivas->yd_special_thanks_to }}</td>
                     <td>{{ $yuvadivas->yd_brief_reports }}</td>
                     <td>{{ $yuvadivas->yd_note }}</td>
                     
                   
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
                    <th>TOPIC</th>
                    <th>NUMBER OF PARTICIPANTS:</th>
                    <th>CONVENORS</th>
                    <th>KEY MEMBERS</th>
                    <th>SPONSORS</th>
                    <th>SPECIAL THANKS TO:</th>
                    <th>BREIF REPORT</th>
                    <th>Note</th>
                   
    
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


 
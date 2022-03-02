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
            <h1>User Data List of YUVA SANGAM</h1>
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
                <h3 class="card-title">User Data List of YUVA SANGAM</h3>
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
                    <th>Number of New Members</th>
                    <th>Conveynor</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>
                   


                    
                  </tr>
                  </thead>
                  
                  <tbody>
                     @if(isset($yuvasangam_list))
                     @foreach($yuvasangam_list as $yuvasangam)
                 <tr>
                   <td>{{ $loop->iteration }}</td>
                    <td>{{ $yuvasangam->username }}</td>
                    <td>{{ $yuvasangam->monthly_report_month }}</td>
                     <td>{{ $yuvasangam->branch_name }}</td>
                     <td>{{ $yuvasangam->ys_no_new_members   }}</td>
                     <td>{{ $yuvasangam->ys_conveynor  }}</td>
                     <td>{{ $yuvasangam->ys_special_thanks_to }}</td>
                     <td>{{ $yuvasangam->ys_brief_reports }}</td>
                     <td>{{ $yuvasangam->ys_prepared_by }}</td>
                  

                    
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
                    <th>Number of New Members</th>
                    <th>Conveynor</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
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


 
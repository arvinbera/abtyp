@extends('user.layouts.app')
@section('header')
<title>ABTYP AMPK List | user Dashboard</title>
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
            <h1> AMPK</h1>
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
                <h3 class="card-title"> AMPK</h3>
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
                    <th>Address</th>
                    <th>In Association(if any)</th>
                    <th>Chaitra Aatma's Visited</th>
                    <th>Date</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Prepared By</th>

                    
                  </tr>
                  </thead>
                  
                  <tbody>
                       @if(isset($ampk_list))
                     @foreach($ampk_list as $ampk)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $ampk->username }}</td>
                    <td>{{ $ampk->monthly_report_month }}</td>
                    <td>{{ $ampk->branch_name }}</td>
                    <td>{{ $ampk->ampk_address }}</td>
                    <td>{{ $ampk->ampk_in_association  }}</td>
                    <td>{{ $ampk->ampk_chaitra_atma_visited }}</td>
                    <td>{{ $ampk->ampk_date }}</td>
                    <td>{{ $ampk->ampk_conveynor }}</td>
                    <td>{{ $ampk->ampk_key_members }}</td>
                    <td>{{ $ampk->ampk_sponsors }}</td>
                    <td>{{ $ampk->ampk_special_thanks_to   }}</td>
                    <td>{{ $ampk->ampk_brief_report }}</td>
                    <td>{{ $ampk->ampk_prepared_by }}</td>
                    
                    
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
                    <th>Address</th>
                    <th>In Association(if any)</th>
                    <th>Chaitra Aatma's Visited</th>
                    <th>Date</th>
                    <th>Conveynor</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
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


 
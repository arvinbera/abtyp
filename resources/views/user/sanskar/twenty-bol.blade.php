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
                <h3 class="card-title">  25 BOL</h3>
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
                   

                   
                  </tr>
                  </thead>
                  
                  <tbody>
                      @if(isset($twentyfivebol_list))
                     @foreach($twentyfivebol_list as $tfbl)
                 <tr>
                     <td>{{ $loop->iteration }}</td>
                    <td>{{ $tfbl->username }}</td>
                    <td>{{ $tfbl->monthly_report_month }}</td>
                     <td>{{ $tfbl->branch_name }}</td>
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


 
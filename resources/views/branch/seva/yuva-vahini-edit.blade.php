@extends('branch.layouts.app')
@section('header')
<title>ABTYP Yuva Vahini List | branch Dashboard</title>
   @include('branch.includes.header')
   @endsection
   @section('sidebar')
   @include('branch.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Yuva Vahini</h1>
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
            
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
              <div class="card-body">
                <form action="{{ route('branch.yuva-vahini-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $yv->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $yv->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

               <div class="form-group">
                    <label for="yuva_vahini_date_form">Date Form</label>
                    <input type="date" class="form-control" id="yuva_vahini_date_form" placeholder="Date Form" name="yuva_vahini_date_form" value="{{ $yv->yuva_vahini_date_form  }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_date_to">Date To</label>
                    <input type="date" class="form-control" id="yuva_vahini_date_to" placeholder="Date To" name="yuva_vahini_date_to" value="{{ $yv->yuva_vahini_date_to  }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_time">Time</label>
                    <input type="time" class="form-control" id="yuva_vahini_time" placeholder="Time" name="yuva_vahini_time" value="{{ $yv->yuva_vahini_time }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_Of_days">Number of Days</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_Of_days" placeholder="Number of Days" name="yuva_vahini_no_Of_days" value="{{ $yv->yuva_vahini_no_Of_days }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_of_members">Number of Members</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_members" placeholder="Number of Members" name="yuva_vahini_no_of_members" value="{{ $yv->yuva_vahini_no_of_members }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_total_distance">Total Distance</label>
                    <input type="number" class="form-control" id="yuva_vahini_total_distance" placeholder="Total Distance" name="yuva_vahini_total_distance" value="{{ $yv->yuva_vahini_total_distance }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_no_of_yv_jackets_collected">Number of YV Jackets Collected</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_yv_jackets_collected" placeholder="Number of YV Jackets Collected" name="yuva_vahini_no_of_yv_jackets_collected" value="{{ $yv->yuva_vahini_no_of_yv_jackets_collected }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_availed_abtyp_accomodation">Availed Abtyp's Accomodation</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_abtyp_accomodation" placeholder="Availed Abtyp's Accomodation" name="yuva_vahini_availed_abtyp_accomodation" value="{{ $yv->yuva_vahini_availed_abtyp_accomodation }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_availed_satkar">Availed Satkar</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_satkar" placeholder="Availed Satkar" name="yuva_vahini_availed_satkar" value="{{ $yv->yuva_vahini_availed_satkar }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="yuva_vahini_brief_report" placeholder="Brief Report" name="yuva_vahini_brief_report" value="{{ $yv->yuva_vahini_brief_report }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yuva_vahini_prepared_by" placeholder="Prepared By" name="yuva_vahini_prepared_by" value="{{ $yv->yuva_vahini_prepared_by }}">
                  </div>
                  
                 

                  <!-- =========================================Update======================================== -->

                  <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger">Update</button>
                </div>
              </form>
                  
                  
              </div>
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
    @include('branch.includes.footer')
@endsection
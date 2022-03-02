@extends('branch.layouts.app')
@section('header')
<title>ABTYP ATDC List | branch Dashboard</title>
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
            <h1> MBDD</h1>
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
                <form action="{{ route('branch.mbdd-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $mbdd->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $mbdd->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

                <div class="form-group">
                    <label for="name_of_camps">Number of Camps</label>
                    <input type="number" class="form-control" id="name_of_camps" placeholder="Number of Camps" name="name_of_camps" value="{{ $mbdd->name_of_camps  }}">
                  </div>


                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="Date" name="date" value="{{ $mbdd->date   }}">
                  </div>

                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" placeholder="Time" name="time" value="{{ $mbdd->time }}">
                  </div>

                  <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue" value="{{ $mbdd->venue }}">
                  </div>

                  <div class="form-group">
                    <label for="name_of_blood_bank">Name of Blood Bank</label>
                    <input type="text" class="form-control" id="name_of_blood_bank" placeholder="Name of Blood Bank" name="name_of_blood_bank" value="{{ $mbdd->name_of_blood_bank }}">
                  </div>

                  <div class="form-group">
                    <label for="in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="in_association" placeholder="In Association(if any)" name="in_association" value="{{ $mbdd->in_association }}">
                  </div>

                  <div class="form-group">
                    <label for="total_units_collected">Total Units Collected</label>
                    <input type="text" class="form-control" id="total_units_collected" placeholder="Total Units Collected" name="total_units_collected" value="{{ $mbdd->total_units_collected }}">
                  </div>

                  <div class="form-group">
                    <label for="camp_convenors">Camp Convenors</label>
                    <input type="text" class="form-control" id="camp_convenors" placeholder="Camp Convenors" name="camp_convenors" value="{{ $mbdd->camp_convenors }}">
                  </div>

                   <div class="form-group">
                    <label for="key_members">Key Members</label>
                    <input type="text" class="form-control" id="key_members" placeholder="Key Members" name="key_members" value="{{ $mbdd->key_members }}">
                  </div>

                  <div class="form-group">
                    <label for="sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="sponsors" placeholder="Sponsors" name="sponsors" value="{{ $mbdd->sponsors }}">
                  </div>

                  <div class="form-group">
                    <label for="special_thatnks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="special_thatnks_to" placeholder="Special Thanks To" name="special_thatnks_to" value="{{ $mbdd->special_thatnks_to }}">
                  </div>

                  <div class="form-group">
                    <label for="brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="brief_reports" placeholder="Brief Report" name="brief_reports" value="{{ $mbdd->brief_reports }}">
                  </div>

                  <div class="form-group">
                    <label for="chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="chaitra_aatma" placeholder="Chaitra Aatma" name="chaitra_aatma" value="{{ $mbdd->chaitra_aatma }}">
                  </div>

                  <div class="form-group">
                    <label for="abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="abtyp_members" placeholder="ABTYP Members" name="abtyp_members" value="{{ $mbdd->abtyp_members }}">
                  </div>

                  <div class="form-group">
                    <label for="chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="chief_guest" placeholder="Chief Guest" name="chief_guest" value="{{ $mbdd->chief_guest }}">
                  </div>


                  <div class="form-group">
                    <label for="guests">Guests</label>
                    <input type="text" class="form-control" id="guests" placeholder="Guests" name="guests" value="{{ $mbdd->guests }}">
                  </div>

                  <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Total" name="total" value="{{ $mbdd->total }}">
                  </div>

                   <div class="form-group">
                    <label for="mbdd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="mbdd_prepared_by" placeholder="Prepared By" name="mbdd_prepared_by" value="{{ $mbdd->mbdd_prepared_by }}">
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
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
            <h1> TTF</h1>
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
                <form action="{{ route('branch.ttf-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $ttf->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $ttf->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

              <div class="form-group">
                    <label for="ttf_date">Date</label>
                    <input type="date" class="form-control" id="ttf_date" placeholder="Date" name="ttf_date" value="{{ $ttf->ttf_date }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_time">Time</label>
                    <input type="time" class="form-control" id="ttf_time" placeholder="Time" name="ttf_time" value="{{ $ttf->ttf_time }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_venue">Venue</label>
                    <input type="text" class="form-control" id="ttf_venue" placeholder="Venue" name="ttf_venue" value="{{ $ttf->ttf_venue }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_in_associati">In Association(if any)</label>
                    <input type="text" class="form-control" id="ttf_in_associati" placeholder="In Association(if any)" name="ttf_in_associati" value="{{ $ttf->ttf_in_associati }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_number_Of_participants">Number Of participants</label>
                    <input type="text" class="form-control" id="ttf_number_Of_participants" placeholder="Number Of participants" name="ttf_number_Of_participants" value="{{ $ttf->ttf_number_Of_participants }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_ndrf_trainer_ame">NDRF Trainer's Name</label>
                    <input type="text" class="form-control" id="ttf_ndrf_trainer_ame" placeholder="NDRF Trainer's Name" name="ttf_ndrf_trainer_ame" value="{{ $ttf->ttf_ndrf_trainer_ame }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_stage">Stage</label>
                    <input type="text" class="form-control" id="ttf_stage" placeholder="Stage" name="ttf_stage" value="{{ $ttf->ttf_stage }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_convenors">Convenors</label>
                    <input type="text" class="form-control" id="ttf_convenors" placeholder="Convenors" name="ttf_convenors" value="{{ $ttf->ttf_convenors }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ttf_key_members" placeholder="Key Members" name="ttf_key_members" value="{{ $ttf->ttf_key_members }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ttf_sponsors" placeholder="Sponsors" name="ttf_sponsors" value="{{ $ttf->ttf_sponsors }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ttf_special_thanks_to" placeholder="Special Thanks To" name="ttf_special_thanks_to" value="{{ $ttf->ttf_special_thanks_to }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="ttf_brief_reports" placeholder="Brief Report" name="ttf_brief_reports" value="{{ $ttf->ttf_brief_reports }}">
                  </div>

                   <div class="form-group">
                    <label for="ttf_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="ttf_chaitra_aatma" placeholder="Chaitra Aatma" name="ttf_chaitra_aatma" value="{{ $ttf->ttf_chaitra_aatma }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="ttf_abtyp_members" placeholder="ABTYP Members" name="ttf_abtyp_members" value="{{ $ttf->ttf_abtyp_members }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="ttf_chief_guest" placeholder="Chief Guest" name="ttf_chief_guest" value="{{ $ttf->ttf_chief_guest }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_guests">Guests</label>
                    <input type="text" class="form-control" id="ttf_guests" placeholder="Guests" name="ttf_guests" value="{{ $ttf->ttf_guests }}">
                  </div>

                  <div class="form-group">
                    <label for="ttf_total">Total</label>
                    <input type="text" class="form-control" id="ttf_total" placeholder="" name="ttf_total" value="{{ $ttf->ttf_total }}">
                  </div>

                   <div class="form-group">
                    <label for="ttf_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ttf_prepared_by" placeholder="Total" name="ttf_prepared_by" value="{{ $ttf->ttf_prepared_by }}">
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
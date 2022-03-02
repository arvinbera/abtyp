@extends('branch.layouts.app')
@section('header')
<title>ABTYP Eye Donate List | branch Dashboard</title>
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
            <h1> Eye Donate</h1>
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
                <form action="{{ route('branch.eyedonate-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $eyedonate->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $eyedonate->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

              <div class="form-group">
                    <label for="eye_donate_no_of_eye_donation">Number of Eye Donation</label>
                    <input type="number" class="form-control" id="eye_donate_no_of_eye_donation" placeholder="Number of Eye Donation" name="eye_donate_no_of_eye_donation" value="{{ $eyedonate->eye_donate_no_of_eye_donation }}">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_no_ofeye_bank">Number of Eye Bank</label>
                    <input type="number" class="form-control" id="eye_donate_no_ofeye_bank" placeholder="Number of Eye Bank" name="eye_donate_no_ofeye_bank" value="{{ $eyedonate->eye_donate_no_ofeye_bank  }}">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_kry_members">Key Members</label>
                    <input type="text" class="form-control" id="eye_donate_kry_members" placeholder="Key Members" name="eye_donate_kry_members" value="{{ $eyedonate->eye_donate_kry_members }}">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="eye_donate_special_thanks_to" placeholder="Special Thanks To" name="eye_donate_special_thanks_to" value="{{ $eyedonate->eye_donate_special_thanks_to }}">
                  </div>

                   <div class="form-group">
                    <label for="eye_donate_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="eye_donate_brief_report" placeholder="Brief Report" name="eye_donate_brief_report" value="{{ $eyedonate->eye_donate_brief_report }}">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="eye_donate_prepared_by" placeholder="Prepared By" name="eye_donate_prepared_by" value="{{ $eyedonate->eye_donate_prepared_by }}">
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
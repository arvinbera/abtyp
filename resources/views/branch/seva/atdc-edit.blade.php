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
            <h1> ATDC</h1>
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
                <form action="{{ route('branch.atdc-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $atdc->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $atdc->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

                <div class="form-group">
                    <label for="total_no_of_billing">Total Amount of Billing</label>
                    <input type="number" class="form-control" id="total_no_of_billing" name="total_no_of_billing" placeholder="Total Amount of Billing" value="{{ $atdc->total_no_of_billing }}">
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_pathology_patients">Total Number of Pathology Patients</label>
                    <input type="number" class="form-control" id="total_no_of_pathology_patients" name="total_no_of_pathology_patients" placeholder="Total Number of Pathology Patients" value="{{ $atdc->total_no_of_pathology_patients   }}">
                  </div>

                  <div class="form-group">
                    <label for="no_of_dental_patients">Number of Dental Patients</label>
                    <input type="number" class="form-control" id="no_of_dental_patients" name="no_of_dental_patients" placeholder="Number of Dental Patients" value="{{ $atdc->no_of_dental_patients }}">
                  </div>

                   <div class="form-group">
                    <label for="no_of_x_ray_patients">Number of X-ray Patients</label>
                    <input type="number" class="form-control" id="no_of_x_ray_patients" name="no_of_x_ray_patients" placeholder="Number of X-ray Patients" value="{{ $atdc->no_of_x_ray_patients }}">
                  </div>

                  <div class="form-group">
                    <label for="no_of_sonography_patients">Number of Sonography Patients</label>
                    <input type="number" class="form-control" id="no_of_sonography_patients" name="no_of_sonography_patients" placeholder="Number of Sonography Patients" value="{{ $atdc->no_of_sonography_patients }}">
                  </div>

                  <div class="form-group">
                    <label for="no_of_opd_patients">Number of OPD Patients</label>
                    <input type="number" class="form-control" id="no_of_opd_patients" name="no_of_opd_patients" placeholder="Number of OPD Patients" value="{{ $atdc->no_of_opd_patients }}">
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_inventory_used">Total Amount of Inventory Used</label>
                    <input type="number" class="form-control" id="total_no_of_inventory_used" name="total_no_of_inventory_used" placeholder="Total Amount of Inventory Used" value="{{ $atdc->total_no_of_inventory_used }}">
                  </div>

                  <div class="form-group">
                    <label for="special_donation">Any Special Donation of the Month</label>
                    <input type="text" class="form-control" id="special_donation" name="special_donation" placeholder="Any Special Donation of the Month" value="{{ $atdc->special_donation }}">
                  </div>

                  <div class="form-group">
                    <label for="special_activity">Special Activity Or Camp</label>
                    <input type="text" class="form-control" id="special_activity" name="special_activity" placeholder="Special Activity Or Camp" value="{{ $atdc->special_activity }}">
                  </div>

                  <div class="form-group">
                    <label for="chnage_in_machinery">Any Change in Machinery</label>
                    <input type="text" class="form-control" id="chnage_in_machinery" name="chnage_in_machinery" placeholder="Any Change in Machinery" value="{{ $atdc->chnage_in_machinery }}">
                  </div>

                  <div class="form-group">
                    <label for="atdc_key_members">Key Members</label>
                    <input type="text" class="form-control" id="atdc_key_members" name="atdc_key_members" placeholder="Key Members" value="{{ $atdc->atdc_key_members }}">
                  </div>

                  <div class="form-group">
                    <label for="brief_reporting">Brief Reporting</label>
                    <input type="text" class="form-control" id="brief_reporting" name="brief_reporting" placeholder="Brief Reporting" value="{{ $atdc->brief_reporting }}">
                  </div>

                  <div class="form-group">
                    <label for="atdc_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="atdc_prepared_by" name="atdc_prepared_by" placeholder="Prepared By" value="{{ $atdc->atdc_prepared_by }}">
                  </div>

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
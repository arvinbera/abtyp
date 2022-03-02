<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('user.newinclude.head')
<style>
    .bstbtndesign
    {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
</style>
<body class="app sidebar-mini">

   @include('user.newinclude.settings')

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('user.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

                    @include('user.newinclude.header')
                                                              <!--Page header-->
                    <div class="page-header">
                        <div class="page-leftheader">
                            <!--<h4 class="page-title mb-0">Hi! Welcome Back</h4>-->
                            <ol class="breadcrumb">
                                <!--<li class="breadcrumb-item"><a href="#">ATDC</a></li>-->
                                <!--<li class="breadcrumb-item active" aria-current="page"><a href="index.html#">Sales Dashboard</a></li>-->
                            </ol>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="{{ route('user.monthly-report-submit') }}" enctype="multipart/form-data" class="dropzone">
                 @csrf
                 <input type="hidden" name="monthly_report_id" id="monthly_report_id" value="">
                <div class="card-body">
                  <!--<div class="form-group">
                        <label>Parishad</label>
                        <select class="form-control" name="branch_id" id="branch_id">
                           @if(isset($branch_list))
                             @foreach($branch_list as $branch)
                          <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                          @endforeach
                           @endif
                        </select>
                        @if ($errors->has('branch_id'))
                      <div class="error" style="color:red;">{{ $errors->first('branch_id') }}</div>
                      @endif
                      </div>-->
                  <div class="form-group">
                    <label for="exampleInputEmail1">Parishad Name</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email_id" value="{{$user->name}}" readonly="">
                     
                  </div>
                  <!-- <div class="form-group">
                    <label for="exampleInputEmail1">Mobile Number</label>
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" name="ph_no" value="{{$user->phone_no}}">
                     @if ($errors->has('ph_no'))
                      <div class="error" style="color:red;">{{ $errors->first('ph_no') }}</div>
                      @endif
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">For The Month Of</label>
                    <input  type="month" class="form-control" id="exampleInputEmail1" placeholder="For The Month Of" data-inputmask-inputformat="yyyy/mm" name="month" onchange="GetUserData(this.value)">
                     @if ($errors->has('month'))
                      <div class="error" style="color:red;">{{ $errors->first('month') }}</div>
                      @endif
                  </div>
                   <div class="form-group">
                    <label for="ecw_meeting_date">Last EWC Meeting held on</label>
                    <input type="date" class="form-control" id="ecw_meeting_date" placeholder="ECW Meeting Date" name="ecw_meeting_date">
                     @if ($errors->has('ecw_meeting_date'))
                      <div class="error" style="color:red;">{{ $errors->first('ecw_meeting_date') }}</div>
                      @endif
                  </div>
                   


        {{-- ==================================Seva Form================================================================= --}}              
          @if ($user_list->seva_atdc=='1' || $user_list->seva_mbdd=='1' || $user_list->seva_ttf=='1' || $user_list->seva_yuva_vahini=='1' || $user_list->seva_eye_donation=='1' || $user_list->seva_ampk=='1' || $user_list->seva_atjh=='1'  || $user_list->seva_choka_satkar=='1')
          <h5 class="mb-2">Seva</h5>
          @endif
          <div class="row">
            {{-- ================================ATDC start ================================ --}}

            @if ($user_list->seva_atdc=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ACHARYA TULSI DIAGNOSTIC CENTER</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx1"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea">

                  {{-- ====================ATDC Form Strt================== --}}
                  {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="total_no_of_billing">Center Name</label>
                    <input type="number" class="form-control" id="center_name" name="center_name" placeholder="Center Name">
                  </div>

                      <div class="form-group">
                    <label for="total_no_of_billing">Total Amount of Billing</label>
                    <input type="number" class="form-control" id="total_no_of_billing" name="total_no_of_billing" placeholder="Total Amount of Billing">
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_pathology_patients">Total Number of Pathology Patients</label>
                    <input type="number" class="form-control" id="total_no_of_pathology_patients" name="total_no_of_pathology_patients" placeholder="Total Number of Pathology Patients">
                  </div>

                  <div class="form-group">
                    <label for="no_of_dental_patients">Number of Dental Patients</label>
                    <input type="number" class="form-control" id="no_of_dental_patients" name="no_of_dental_patients" placeholder="Number of Dental Patients">
                  </div>

                   <div class="form-group">
                    <label for="no_of_x_ray_patients">Number of X-ray Patients</label>
                    <input type="number" class="form-control" id="no_of_x_ray_patients" name="no_of_x_ray_patients" placeholder="Number of X-ray Patients">
                  </div>

                  <div class="form-group">
                    <label for="no_of_sonography_patients">Number of Sonography Patients</label>
                    <input type="number" class="form-control" id="no_of_sonography_patients" name="no_of_sonography_patients" placeholder="Number of Sonography Patients">
                  </div>

                  <div class="form-group">
                    <label for="no_of_opd_patients">Number of OPD Patients</label>
                    <input type="number" class="form-control" id="no_of_opd_patients" name="no_of_opd_patients" placeholder="Number of OPD Patients">
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_inventory_used">Total Amount of Inventory Used</label>
                    <input type="number" class="form-control" id="total_no_of_inventory_used" name="total_no_of_inventory_used" placeholder="Total Amount of Inventory Used">
                  </div>

                  <div class="form-group">
                    <label for="special_donation">Amount of Special Donation of the month</label>
                    <input type="text" class="form-control" id="special_donation" name="special_donation" placeholder="Any Special Donation of the Month">
                  </div>

                  <div class="form-group">
                    <label for="special_activity">Number of Doctor Visit in Center</label>
                    <input type="text" class="form-control" id="special_activity" name="special_activity" placeholder="Special Activity Or Camp">
                  </div>

                  <div class="form-group">
                    <label for="atdc_special_activity_or_camp">Special Activity or Camp</label>
                    <input type="file" class="form-control" id="atdc_special_activity_or_camp" name="atdc_special_activity_or_camp[]" placeholder="Any Change in Machinery" accept=".xlsx, .xls, .csv">
                  </div>

                  <div class="form-group">
                    <label for="chnage_in_machinery">Any Change in Machinery</label>
                    <input type="file" class="form-control" id="chnage_in_machinery" name="chnage_in_machinery[]" placeholder="Any Change in Machinery" accept=".xlsx, .xls, .csv">
                  </div>

                  <div class="form-group">
                    <label for="atdc_key_members">Key Members</label>
                    <input type="text" class="form-control" id="atdc_key_members" name="atdc_key_members" placeholder="Key Members">
                  </div>

                  <div class="form-group">
                    <label for="brief_reporting">Brief Reporting (Problems can also be mentioned)</label>
                    <input type="text" class="form-control" id="brief_reporting" name="brief_reporting" placeholder="Brief Reporting">
                  </div>

                  <!-- <div class="form-group">
                    <label for="atdc_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="atdc_prepared_by" name="atdc_prepared_by" placeholder="Prepared By">
                  </div> -->

                  <div class="form-group">
                    <label for="atdc_total_amount_of_collection_at_amms">Total AMount of Collection at AMMS</label>
                    <input type="file" class="form-control" id="atdc_total_amount_of_collection_at_amms" name="atdc_total_amount_of_collection_at_amms[]" placeholder="Total AMount of Collection at AMMS" accept=".xlsx, .xls, .csv">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add" name="atdc_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  
                  <div class="gallery"></div>











                  {{-- ====================ATDC Form End================== --}}

                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ATDC End ================================ --}}
            {{-- ================================MBDD Start ================================ --}}

            @if ($user_list->seva_mbdd=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">MEGA BLOOD DONATION DRIVE</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx2"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx3"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea1">
                  {{-- ====================MBDD Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <!-- <div class="form-group">
                    <label for="name_of_camps">Number of Camps</label>
                    <input type="number" class="form-control" id="name_of_camps" placeholder="Number of Camps" name="name_of_camps">
                  </div> -->


                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="Date" name="date">
                  </div>

                  <!-- <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" placeholder="Time" name="time">
                  </div> -->

                  <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue">
                  </div>

                  <div class="form-group">
                    <label for="name_of_blood_bank">Name of Blood Bank</label>
                    <input type="text" class="form-control" id="name_of_blood_bank" placeholder="Name of Blood Bank" name="name_of_blood_bank">
                  </div>

                  <div class="form-group">
                    <label for="in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="in_association" placeholder="In Association(if any)" name="in_association">
                  </div>

                  <div class="form-group">
                    <label for="total_units_collected">Total Units Collected</label>
                    <input type="text" class="form-control" id="total_units_collected" placeholder="Total Units Collected" name="total_units_collected">
                  </div>

                  <div class="form-group">
                    <label for="camp_convenors">Camp Convenors</label>
                    <input type="text" class="form-control" id="camp_convenors" placeholder="Camp Convenors" name="camp_convenors">
                  </div>

                   <div class="form-group">
                    <label for="key_members">Key Members</label>
                    <input type="text" class="form-control" id="key_members" placeholder="Key Members" name="key_members">
                  </div>

                  <div class="form-group">
                    <label for="sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="sponsors" placeholder="Sponsors" name="sponsors">
                  </div>

                  <div class="form-group">
                    <label for="special_thatnks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="special_thatnks_to" placeholder="Special Thanks To" name="special_thatnks_to">
                  </div>

                  <div class="form-group">
                    <label for="brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="brief_reports" placeholder="Brief Report" name="brief_reports">
                  </div>

                  <div class="form-group">
                    <label for="chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="chaitra_aatma" placeholder="Chaitra Aatma" name="chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="abtyp_members" placeholder="ABTYP Members" name="abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="chief_guest" placeholder="Chief Guest" name="chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="guests">Guests</label>
                    <input type="text" class="form-control" id="guests" placeholder="Guests" name="guests">
                  </div>

                  <!-- <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Total" name="total">
                  </div> -->

                   <!-- <div class="form-group">
                    <label for="mbdd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="mbdd_prepared_by" placeholder="Prepared By" name="mbdd_prepared_by">
                  </div> -->

                  <div class="form-group">
                    <label for="mbdd_total_units_collected">Total Units Collected</label>
                    <input type="file" class="form-control" id="mbdd_total_units_collected" name="mbdd_total_units_collected[]" placeholder="Total Units Collected" accept=".xlsx, .xls, .csv">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add2" name="mbdd_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="gallery2"></div>




                  {{-- ====================MBDD Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================MBDD End ================================ --}}



            {{-- ================================TTF Start ================================ --}}
            
            @if ($user_list->seva_ttf =='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TERAPANTH TASK FORCE</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx4"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx5"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea2">
                  {{-- ====================TTF Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div>
 --}}
                       <div class="form-group">
                    <label for="ttf_date">Date</label>
                    <input type="date" class="form-control" id="ttf_date" placeholder="Date" name="ttf_date">
                  </div>

                  <div class="form-group">
                    <label for="ttf_time">Time</label>
                    <input type="time" class="form-control" id="ttf_time" placeholder="Time" name="ttf_time">
                  </div>

                  <div class="form-group">
                    <label for="ttf_venue">Venue</label>
                    <input type="text" class="form-control" id="ttf_venue" placeholder="Venue" name="ttf_venue">
                  </div>

                  <div class="form-group">
                    <label for="ttf_in_associati">In Association(if any)</label>
                    <input type="text" class="form-control" id="ttf_in_associati" placeholder="In Association(if any)" name="ttf_in_associati">
                  </div>

                  <div class="form-group">
                    <label for="ttf_number_Of_participants">Number Of participants</label>
                    <input type="text" class="form-control" id="ttf_number_Of_participants" placeholder="Number Of participants" name="ttf_number_Of_participants">
                  </div>

                  <div class="form-group">
                    <label for="ttf_ndrf_trainer_ame">NDRF Trainer's Name</label>
                    <input type="text" class="form-control" id="ttf_ndrf_trainer_ame" placeholder="NDRF Trainer's Name" name="ttf_ndrf_trainer_ame">
                  </div>

                  <!-- <div class="form-group">
                    <label for="ttf_stage">Stage</label>
                    <input type="text" class="form-control" id="ttf_stage" placeholder="Stage" name="ttf_stage">
                  </div> -->

                  <div class="form-group">
                    <label for="ttf_convenors">Convenors</label>
                    <input type="text" class="form-control" id="ttf_convenors" placeholder="Convenors" name="ttf_convenors">
                  </div>

                  <div class="form-group">
                    <label for="ttf_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ttf_key_members" placeholder="Key Members" name="ttf_key_members">
                  </div>

                  <div class="form-group">
                    <label for="ttf_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ttf_sponsors" placeholder="Sponsors" name="ttf_sponsors">
                  </div>

                  <div class="form-group">
                    <label for="ttf_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ttf_special_thanks_to" placeholder="Special Thanks To" name="ttf_special_thanks_to">
                  </div>

                  <div class="form-group">
                    <label for="ttf_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="ttf_brief_reports" placeholder="Brief Report" name="ttf_brief_reports">
                  </div>

                   <div class="form-group">
                    <label for="ttf_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="ttf_chaitra_aatma" placeholder="Chaitra Aatma" name="ttf_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="ttf_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="ttf_abtyp_members" placeholder="ABTYP Members" name="ttf_abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="ttf_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="ttf_chief_guest" placeholder="Chief Guest" name="ttf_chief_guest">
                  </div>

                  <div class="form-group">
                    <label for="ttf_guests">Guests</label>
                    <input type="text" class="form-control" id="ttf_guests" placeholder="Guests" name="ttf_guests">
                  </div>

                 <!--  <div class="form-group">
                    <label for="ttf_total">Total</label>
                    <input type="text" class="form-control" id="ttf_total" placeholder="" name="ttf_total">
                  </div> -->
                  
                 <!--  <div class="form-group">
                    <label for="ttf_total">Participant List</label>
                    <input type="text" class="form-control" id="participant_list" placeholder="" name="participant_list">
                  </div> -->

                   <div class="form-group">
                    <label for="ttf_prepared_by">Number of Participants</label>
                    <input type="file" class="form-control" id="ttf_number_of_participants" placeholder="Number of Participants" name="ttf_number_of_participants[]" accept=".xlsx, .xls, .csv">
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add3" name="ttf_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery3"></div>



                  {{-- ====================TTF Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================TTF End ================================ --}}

            
            {{-- ================================ YUVA VAHINI Start ================================ --}}

            @if ($user_list->seva_yuva_vahini =='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> YUVA VAHINI</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx6"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx7"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea3">
                  {{-- ====================yUVA VAHINI Form Strt================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="yuva_vahini_date_form">Date Form</label>
                    <input type="date" class="form-control" id="yuva_vahini_date_form" placeholder="Date Form" name="yuva_vahini_date_form">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_date_to">Date To</label>
                    <input type="date" class="form-control" id="yuva_vahini_date_to" placeholder="Date To" name="yuva_vahini_date_to">
                  </div>

                  <!--<div class="form-group">
                    <label for="yuva_vahini_time">Time</label>
                    <input type="time" class="form-control" id="yuva_vahini_time" placeholder="Time" name="yuva_vahini_time">
                  </div>-->

                   <div class="form-group">
                    <label for="yuva_vahini_no_Of_days">Number of Days</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_Of_days" placeholder="Number of Days" name="yuva_vahini_no_Of_days">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_of_members">Number of Members</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_members" placeholder="Number of Members" name="yuva_vahini_no_of_members">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_total_distance">Total Distance Covered</label>
                    <input type="number" class="form-control" id="yuva_vahini_total_distance" placeholder="Total Distance" name="yuva_vahini_total_distance">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_no_of_yv_jackets_collected">Number of YV Jackets Collected</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_yv_jackets_collected" placeholder="Number of YV Jackets Collected" name="yuva_vahini_no_of_yv_jackets_collected">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_availed_abtyp_accomodation">Availed Abtyp's Accomodation</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_abtyp_accomodation" placeholder="Availed Abtyp's Accomodation" name="yuva_vahini_availed_abtyp_accomodation">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_availed_satkar">Availed Satkar</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_satkar" placeholder="Availed Satkar" name="yuva_vahini_availed_satkar">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="yuva_vahini_brief_report" placeholder="Brief Report" name="yuva_vahini_brief_report">
                  </div>

                  <!-- <div class="form-group">
                    <label for="yuva_vahini_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yuva_vahini_prepared_by" placeholder="Prepared By" name="yuva_vahini_prepared_by">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add4" name="yuvavahini_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery4"></div>

                  


                  {{-- ====================yUVA VAHINI Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ YUVA VAHINI End ================================ --}}




            {{-- ================================ EYE DONATION Start ================================ --}}
            
            @if ($user_list->seva_eye_donation =='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> EYE DONATION</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx8"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx9"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea4">
                  {{-- ==================== EYE DONATION Form Strt================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="eye_donate_no_of_eye_donation">Number of Eye Donation</label>
                    <input type="number" class="form-control" id="eye_donate_no_of_eye_donation" placeholder="Number of Eye Donation" name="eye_donate_no_of_eye_donation">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_no_ofeye_bank">Number of Eye Bank</label>
                    <input type="number" class="form-control" id="eye_donate_no_ofeye_bank" placeholder="Number of Eye Bank" name="eye_donate_no_ofeye_bank">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_kry_members">Key Members</label>
                    <input type="text" class="form-control" id="eye_donate_kry_members" placeholder="Key Members" name="eye_donate_kry_members">
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="eye_donate_special_thanks_to" placeholder="Special Thanks To" name="eye_donate_special_thanks_to">
                  </div>

                   <div class="form-group">
                    <label for="eye_donate_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="eye_donate_brief_report" placeholder="Brief Report" name="eye_donate_brief_report">
                  </div>

                 <!--  <div class="form-group">
                    <label for="eye_donate_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="eye_donate_prepared_by" placeholder="Prepared By" name="eye_donate_prepared_by">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add5" name="eye_donation_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery5"></div>

                  {{-- ==================== EYE DONATION Form Strt================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ EYE DONATION End ================================ --}}



            {{-- ================================ AMPK Start ================================ --}}
            
            @if ($user_list->seva_ampk=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ACHARYA MAHAPRAGYA PRAGYA KENDRA</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx10"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx11"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea5">
                  {{-- ==================== AMPK Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                       <!-- <div class="form-group">
                    <label for="ampk_address">Address</label>
                    <input type="text" class="form-control" id="ampk_address" placeholder="Address" name="ampk_address">
                  </div> -->

                  <div class="form-group">
                    <label for="ampk_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="ampk_in_association" placeholder="In Association(if any)" name="ampk_in_association">
                  </div>

                  <div class="form-group">
                    <label for="ampk_chaitra_atma_visited">Chaitra Aatma's Visited</label>
                    <input type="text" class="form-control" id="ampk_chaitra_atma_visited" placeholder="Chaitra Aatma's Visited" name="ampk_chaitra_atma_visited">
                  </div>

                  <div class="form-group">
                    <label for="ampk_date">Date</label>
                    <input type="date" class="form-control" id="ampk_date" placeholder="Date" name="ampk_date">
                  </div>

                  <div class="form-group">
                    <label for="ampk_conveynor">Convenors</label>
                    <input type="text" class="form-control" id="ampk_conveynor" placeholder="Conveynor" name="ampk_conveynor">
                  </div>

                  <div class="form-group">
                    <label for="ampk_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ampk_key_members" placeholder="Key Members" name="ampk_key_members">
                  </div>

                  <div class="form-group">
                    <label for="ampk_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ampk_sponsors" placeholder="Sponsors" name="ampk_sponsors">
                  </div>

                  <div class="form-group">
                    <label for="ampk_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ampk_special_thanks_to" placeholder="Special Thanks To" name="ampk_special_thanks_to">
                  </div>

                  <div class="form-group">
                    <label for="ampk_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="ampk_brief_report" placeholder="Brief Report" name="ampk_brief_report">
                  </div>

                 <!--  <div class="form-group">
                    <label for="ampk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ampk_prepared_by" placeholder="Prepared By" name="ampk_prepared_by">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add6" name="ampk_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery6"></div>
                  {{-- ==================== AMPK Form Strt================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ AMPK End ================================ --}}


            {{-- ================================ ATJH Start ================================ --}}
            
            @if ($user_list->seva_atjh=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ACHARYA TULSI JAIN HOSTEL</h3>
                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx12"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx13"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea6">
                  {{-- ==================== ATJH Form Strt================== --}}
                  
                      <!-- <div class="form-group">
                    <label for="atjh_address">ADDRESS</label>
                    <input type="text" class="form-control" id="atjh_address" placeholder="" name="atjh_ADDRESS">
                  </div> -->
                  <!--  <div class="form-group">
                    <label for="atjh_association">IN ASSOCIATION (IF ANY):</label>
                    <input type="text" class="form-control" id="atjh_association" placeholder="" name="atjh_IN_ASSOCIATION">
                  </div> -->
                   <div class="form-group">
                    <label for="atjh_numer_of_the_occupants">NUMBER OF OCCUPANTS:</label>
                    <input type="text" class="form-control" id="atjh_numer_of_the_occupants" placeholder="" name="atjh_NUMBER_OF_OCCUPANTS">
                  </div>
                  <div class="form-group">
                    <label for="atjh_tota_strenght">Staff Strength</label>
                    <input type="text" class="form-control" id="atjh_tota_strenght" placeholder="" name="atjh_TOTAL_STRENGHT">
                  </div>
                  <div class="form-group">
                    <label for="atjh_ttal_fee">Total Monthly Fees:</label>
                    <input type="text" class="form-control" id="atjh_ttal_fee" placeholder="" name="atjh_TOTAL_FEE">
                  </div>
                  <div class="form-group">
                    <label for="atjh_donation">Sponsors:</label>
                    <input type="text" class="form-control" id="atjh_donation" placeholder="" name="atjh_DONATION">
                  </div>
                   <div class="form-group">
                    <label for="atjh_total_food_expnses">TOTAL FOOD EXPENSES:</label>
                    <input type="text" class="form-control" id="atjh_total_food_expnses" placeholder="" name="atjh_TOTAL_FOOD_EXPENSES">
                  </div>
                  <div class="form-group">
                    <label for="atjh_total_salaries">TOTAL SALARIES:</label>
                    <input type="text" class="form-control" id="atjh_total_salaries" placeholder="" name="atjh_TOTAL_SALARIES">
                  </div>
                   <div class="form-group">
                    <label for="atjh_total_of_the_expenses">TOTAL OF OTHER EXPENSES:</label>
                    <input type="text" class="form-control" id="atjh_total_of_the_expenses" placeholder="" name="atjh_TOTALOF_OTHER_EXPENSES">
                  </div>
                   <div class="form-group">
                    <label for="atjh_convenors">CONVENORS:</label>
                    <input type="text" class="form-control" id="atjh_convenors" placeholder="" name="atjh_CONVENORS">
                  </div>
                    <div class="form-group">
                    <label for="atjh_key_members">KEY MEMBERS:</label>
                    <input type="text" class="form-control" id="atjh_key_members" placeholder="" name="atjh_KEY_MEMBERS">
                  </div>
                   <div class="form-group">
                    <label for="atjh_special_thanks_to">SPECIAL THANKS TO:</label>
                    <input type="text" class="form-control" id="atjh_special_thanks_to" placeholder="" name="atjh_SPECIAL_THANKS_TO">
                  </div>
                    <div class="form-group">
                    <label for="atjh_breif_report">BREIF REPORT:</label>
                    <textarea class="form-control" id="atjh_breif_report" placeholder="NOT MORE THAN 500 WORDS" name="atjh_BREIF_REPORT"></textarea>
                  </div>
                    <div class="form-group">
                    <label for="atjh_image">PICTURES (2-4) </label>
                    <input type="file" class="form-control" id="gallery-photo-add7" placeholder="" name="atjh_images[]" multiple="">
                  </div>
                   <div class="gallery7"></div>
                   <!-- <div class="form-group">
                    <label for="atjh_prepared_by">PREPARED BY:  </label>
                    <input type="text" class="form-control" id="atjh_prepared_by" placeholder="" name="atjh_PREPARED_BY">
                  </div> -->
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ ATJH End ================================ --}}


            {{-- ================================ CHOKA SATKAR Start ================================ --}}
            
            @if ($user_list->seva_choka_satkar=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> CHOKA SATKAR</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx14"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx15"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea7">
                  {{-- ==================== CHOKA SATKAR Form Strt================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <!-- <div class="form-group">
                    <label for="choka_satkar_date_form">Date Form</label>
                    <input type="date" class="form-control" id="choka_satkar_date_form" placeholder="Date Form" name="choka_satkar_date_form">
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="choka_satkar_date_to">Date To</label>
                    <input type="date" class="form-control" id="choka_satkar_date_to" placeholder="Date To" name="choka_satkar_date_to">
                  </div> -->

                  <!--<div class="form-group">
                    <label for="choka_satkar_time">Time</label>
                    <input type="time" class="form-control" id="choka_satkar_time" placeholder="Time" name="choka_satkar_time">
                  </div>-->

                   <div class="form-group">
                    <label for="choka_satkar_no_of_days">Number of Days</label>
                    <input type="number" class="form-control" id="choka_satkar_no_of_days" placeholder="Number of Days" name="choka_satkar_no_of_days">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_amount_paid">Amount Paid</label>
                    <input type="number" class="form-control" id="choka_satkar_amount_paid" placeholder="Amount Paid" name="choka_satkar_amount_paid">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_sponsor">Sponsor</label>
                    <input type="text" class="form-control" id="choka_satkar_sponsor" placeholder="Sponsor" name="choka_satkar_sponsor">
                  </div>

                  <!-- <div class="form-group">
                    <label for="choka_satkar_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="choka_satkar_in_association" placeholder="In Association(if any)" name="choka_satkar_in_association">
                  </div> -->

                  <div class="form-group">
                    <label for="choka_satkar_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="choka_satkar_special_thanks_to" placeholder="Special Thanks To" name="choka_satkar_special_thanks_to">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="choka_satkar_brief_reports" placeholder="Brief Report" name="choka_satkar_brief_reports">
                  </div>

                  <!-- <div class="form-group">
                    <label for="choka_satkarprepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="choka_satkarprepared_by" placeholder="Prepared By" name="choka_satkarprepared_by">
                  </div> -->
                  
                  
                  <!--  <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add8" name="chokasatar_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery8"></div> -->
                  {{-- ==================== CHOKA SATKAR Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ CHOKA SATKAR End ================================ --}}

         
        </div>

         {{-- ==================================Seva Form====================================================== --}}              


        {{-- ==================================Sanskar Form====================================================== --}}
             @if ($user_list->sanskar_jain_sanskar_vidhi=='1' || $user_list->sanskar_samayik_sadhak=='1' || $user_list->sanskar_tapoyagya=='1' || $user_list->sanskar_cps=='1' || $user_list->sanskar_pd=='1' || $user_list->sanskar_barah_vrat=='1' || $user_list->sanskar_twenty_five_bol=='1' || $user_list->sanskar_jain_vidhya_katyashala=='1' || $user_list->sanskar_yuva_divas=='1')
          <h5 class="mb-2">Sanskar</h5>
          @endif
          <div class="row">



            {{-- ================================ JAIN SANSKAR VIDHI Start ================================ --}}

            @if ($user_list->sanskar_jain_sanskar_vidhi=='1')

            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> JAIN SANSKAR VIDHI</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx16"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx17"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea8">
                  {{-- ==================== JAIN SANSKAR VIDHI Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="jsv_date">Date</label>
                    <input type="date" class="form-control" id="jsv_date" placeholder="Date" name="jsv_date">
                  </div>

                  <div class="form-group">
                    <label for="jsv_time">Time</label>
                    <input type="time" class="form-control" id="jsv_time" placeholder="Time" name="jsv_time">
                  </div>

                  <div class="form-group">
                    <label for="jsv_venue">Venue</label>
                    <input type="text" class="form-control" id="jsv_venue" placeholder="Venue" name="jsv_venue">
                  </div>

                 <!--  <div class="form-group">
                    <label for="jsv_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="jsv_in_association" placeholder="In Association(if any)" name="jsv_in_association">
                  </div> -->

                   <div class="form-group">
                    <label for="jsv_sanskar_name">Sanskarak Name (2 - 3)</label>
                    <input type="text" class="form-control" id="jsv_sanskar_name" placeholder="Sanskar's Name" name="jsv_sanskar_name">
                  </div>

                  <div class="form-group">
                    <label for="jsv_no_of_participant">Number Of participants</label>
                    <input type="text" class="form-control" id="jsv_no_of_participant" placeholder="Number Of participants" name="jsv_no_of_participant">
                  </div>

                  <div class="form-group">
                    <label for="jsv_convenors">Convenors</label>
                    <input type="text" class="form-control" id="jsv_convenors" placeholder="Convenors" name="jsv_convenors">
                  </div>

                  <div class="form-group">
                    <label for="jsv_key_member">Key Members</label>
                    <input type="text" class="form-control" id="jsv_key_member" placeholder="Key Members" name="jsv_key_member">
                  </div>

                  <div class="form-group">
                    <label for="jsv_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="jsv_sponsors" placeholder="Sponsors" name="jsv_sponsors">
                  </div>


                  <div class="form-group">
                    <label for="jsv_specila_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="jsv_specila_thanks_to" placeholder="Special Thanks To" name="jsv_specila_thanks_to">
                  </div>

                   <div class="form-group">
                    <label for="jsv_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="jsv_brief_report" placeholder="Brief Report" name="jsv_brief_report">
                  </div>

                   <div class="form-group">
                    <label for="jsv_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="jsv_chaitra_aatma" placeholder="Chaitra Aatma" name="jsv_chaitra_aatma">
                  </div>

                   <div class="form-group">
                    <label for="jsv_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="jsv_abtyp_members" placeholder="ABTYP Members" name="jsv_abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="jsv_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="jsv_chief_guest" placeholder="Chief Guest" name="jsv_chief_guest">
                  </div>

                  <div class="form-group">
                    <label for="jsv_guest">Guests</label>
                    <input type="text" class="form-control" id="jsv_guest" placeholder="Guests" name="jsv_guest">
                  </div>

                 <!--  <div class="form-group">
                    <label for="jsv_total">Total</label>
                    <input type="text" class="form-control" id="jsv_total" placeholder="Total" name="jsv_total">
                  </div>

                  <div class="form-group">
                    <label for="jsv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jsv_prepared_by" placeholder="Prepared By" name="jsv_prepared_by">
                  </div> -->
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload <font color="red">(Images / Videos / Presentation)</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add9" name="jsv_images[]" multiple="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery9"></div>

                  {{-- ==================== JAIN SANSKAR VIDHI Form End================== --}}
                
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            @endif 
            {{-- ================================ JAIN SANSKAR VIDHI END ================================ --}}

            


            {{-- ================================ SAMAYIK SADHAK Start ================================ --}}

            @if ($user_list->sanskar_samayik_sadhak=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> SAMAYIK SADHAK</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx20"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx21"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea9">
                  {{-- ==================== SAMAYIK SADHAK Form Strt================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <!-- <div class="form-group">
                    <label for="ss_date">Date</label>
                    <input type="date" class="form-control" id="ss_date" placeholder="" name="ss_date">
                  </div>

                  <div class="form-group">
                    <label for="ss_time">Time</label>
                    <input type="time" class="form-control" id="ss_time" placeholder="" name="ss_time">
                  </div> -->

                  <div class="form-group">
                    <label for="ss_venue">Venue</label>
                    <input type="text" class="form-control" id="ss_venue" placeholder="" name="ss_venue">
                  </div>

                  <div class="form-group">
                    <label for="ss_in_association">In Association (if any) (3 - 4)</label>
                    <input type="text" class="form-control" id="ss_in_association" placeholder="" name="ss_in_association">
                  </div>

                   <div class="form-group">
                    <label for="ss_jain_samayik_festival">Jain Samayik Festival</label>
                    <input type="text" class="form-control" id="ss_jain_samayik_festival" placeholder="" name="ss_jain_samayik_festival">
                  </div>

                  <div class="form-group">
                    <label for="ss_total_participants">Total Participants</label>
                    <input type="text" class="form-control" id="ss_total_participants" placeholder="" name="ss_total_participants">
                  </div>

                  <div class="form-group">
                    <label for="ss_total_no_of_samayik_sadhak">Total Number of New Samayik Sadhak</label>
                    <input type="text" class="form-control" id="ss_total_no_of_samayik_sadhak" placeholder="" name="ss_total_no_of_samayik_sadhak">
                  </div>

                   <div class="form-group">
                    <label for="ss_donation_of_samayik_kits">Number of Samayik Kits Distributed</label>
                    <input type="text" class="form-control" id="ss_donation_of_samayik_kits" placeholder="" name="ss_donation_of_samayik_kits">
                  </div>

                  <div class="form-group">
                    <label for="ss_conveynor">Convenors </label>
                    <input type="text" class="form-control" id="ss_conveynor" placeholder="" name="ss_conveynor">
                  </div>

                  <div class="form-group">
                    <label for="ss_key_member">Key Members</label>
                    <input type="text" class="form-control" id="ss_key_member" placeholder="" name="ss_key_member">
                  </div>

                  <div class="form-group">
                    <label for="ss_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ss_special_thanks_to" placeholder="" name="ss_special_thanks_to">
                  </div>

                  <div class="form-group">
                    <label for="ss_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="ss_brief_report" placeholder="" name="ss_brief_report">
                  </div>

                  <!-- <div class="form-group">
                    <label for="ss_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ss_prepared_by" placeholder="" name="ss_prepared_by">
                  </div> -->

                  <div class="form-group">
                    <label for="tapoyaga_prepared_by">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="chaitra_aatma" placeholder="" name="ss_chaitra_aatma">
                  </div>

                   <div class="form-group">
                    <label for="tapoyaga_prepared_by">ABTYP Members</label>
                    <input type="text" class="form-control" id="abtyp_members" placeholder="" name="ss_abtyp_members">
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add10" name="ss_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery10"></div>
                  {{-- ==================== SAMAYIK SADHAK Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ SAMAYIK SADHAK End ================================ --}}



           

            {{-- ================================ TAPOYAGYA Start ================================ --}}

            @if ($user_list->sanskar_tapoyagya=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TAPOYAGYA</h3>

                  <div class="card-tools">
                   <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx22"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx23"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea10">
                  {{-- ==================== TAPOYAGYA Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="tapoyaga_date">Date</label>
                    <input type="date" class="form-control" id="tapoyaga_date" placeholder="" name="tapoyaga_date">
                  </div>

                 <!--  <div class="form-group">
                    <label for="tapoyaga_time">Time</label>
                    <input type="time" class="form-control" id="tapoyaga_time" placeholder="" name="tapoyaga_time">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_venue">Venue</label>
                    <input type="text" class="form-control" id="tapoyaga_venue" placeholder="" name="tapoyaga_venue">
                  </div> -->

                  <!--<div class="form-group">
                    <label for="tapoyaga_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="tapoyaga_in_association" placeholder="" name="tapoyaga_in_association">
                  </div>-->
                  
                  <div class="form-group">
                    <label for="tapoyaga">Number Of participants</label>
                    <input type="text" class="form-control" id="tapoyaga_no_of_participant" placeholder="Number Of participants" name="tapoyagya_no_of_participants">
                  </div>
                  
                  <div class="form-group">
                    <label for="tapoyaga_participant_list">Participants List</label>
                    <input type="file" class="form-control" id="tapoyaga_participant_list" placeholder="Participants List" name="tapoyagya_Participants_List">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_conveynor">Convenors </label>
                    <input type="text" class="form-control" id="tapoyaga_conveynor" placeholder="" name="tapoyaga_conveynor">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_key_member">Key Members</label>
                    <input type="text" class="form-control" id="tapoyaga_key_member" placeholder="" name="tapoyaga_key_member">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="tapoyaga_special_thanks" placeholder="" name="tapoyaga_special_thanks">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="tapoyaga_brief_report" placeholder="" name="tapoyaga_brief_report">
                  </div>

                 <!-- <div class="form-group">
                    <label for="tapoyaga_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tapoyaga_prepared_by" placeholder="" name="tapoyaga_prepared_by">
                  </div>-->

                   <div class="form-group">
                    <label for="tapoyaga_prepared_by">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="chaitra_aatma" placeholder="" name="tapoyaga_chaitra_aatma">
                  </div>

                   <div class="form-group">
                    <label for="tapoyaga_prepared_by">ABTYP Members</label>
                    <input type="text" class="form-control" id="abtyp_members" placeholder="" name="tapoyaga_abtyp_members">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add11" name="tapoyaga_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery11"></div>
                  {{-- ==================== TAPOYAGYA Form Strt================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ TAPOYAGYA End ================================ --}}

            
            {{-- ================================ CPS Start ================================ --}}

            @if ($user_list->sanskar_cps=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> CONFIDENT PUBLIC SPEAKING</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx24"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx25"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea11">
                  {{-- ==================== CPS Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="cps_date_form">Date From</label>
                    <input type="date" class="form-control" id="cps_date_form" placeholder="" name="cps_date">
                  </div>
                  <div class="form-group">
                    <label for="cps_date_to">Date To</label>
                    <input type="date" class="form-control" id="cps_date_to" placeholder="" name="cps_time">
                  </div>

                

                  <div class="form-group">
                    <label for="cps_venue">Venue</label>
                    <input type="text" class="form-control" id="cps_venue" placeholder="" name="cps_venue">
                  </div>

                  <div class="form-group">
                    <label for="cps_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="cps_in_association" placeholder="" name="cps_in_association">
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="cps_teachers_name">Faculty Name (4 - 5 Names)</label>
                    <input type="text" class="form-control" id="cps_Faculty_Name" placeholder="" name="cps_Faculty_Name">
                  </div>
                  <div class="form-group">
                    <label for="cps_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="cps_NUMBER_OF_PARTICIPANTS" placeholder="" name="cps_NUMBER_OF_PARTICIPANTS">
                  </div>
                  
                  <div class="form-group">
                    <label for="cps_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="cps_conveynor" placeholder="" name="cps_conveynor">
                  </div>
                  
                  <div class="form-group">
                    <label for="cps_key_members">Key Members</label>
                    <input type="text" class="form-control" id="cps_key_members" placeholder="" name="cps_key_member">
                  </div>
                   <div class="form-group">
                    <label for="cps_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="cps_sponcer" placeholder="" name="cps_sponcer">
                  </div>
                       <div class="form-group">
                    <label for="cps_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="cps_special_thanks" placeholder="" name="cps_special_thanks">
                  </div>
                  
                   
                   <div class="form-group">
                    <label for="cps_brief_report">Brief Report</label>
                    <textarea class="form-control" id="cps_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="cps_brief_report"></textarea>
                  </div>
                    <div class="form-group">
                    <label for="cps_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="cps_participants_list"  name="cps_participants_list[]" accept=".xlsx, .xls, .csv">
                  </div>
                  
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="cps_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="cps_chaitra_aatma" placeholder="" name="cps_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="cps_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="cps_abtyp_members" placeholder="" name="cps_abtyp_members">
                  </div>


                  <div class="form-group">
                    <label for="cps_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="cps_chief_guest" placeholder="" name="cps_chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="cps_guest">Guests</label>
                    <input type="text" class="form-control" id="cps_guest" placeholder="" name="cps_guest">
                  </div>


                  <!-- <div class="form-group">
                    <label for="cps_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="cps_total_presesnt" placeholder="" name="cps_total_presesnt">
                  </div>
                   <div class="form-group">
                    <label for="cps_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="cps_prepared_by" placeholder="" name="cps_prepared_by">
                  </div> -->
                   <div class="form-group">
                    <label for="cps_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font></label>
                    <input type="file" class="form-control" id="gallery-photo-add12" placeholder="NOT MORE THAN 500 WORDS" name="cps_images[]" multiple="" accept=".ppt,image/*,video/*,">
                  </div>
                   <div class="gallery12"></div>
                  
                  

                  {{-- ==================== CPS Form Strt================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ CPS End ================================ --}}
 
            {{-- ================================ PD Start ================================ --}}

            @if ($user_list->sanskar_pd=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">PERSONALITY DEVELOPMENT</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx26"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx27"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea12">
                  {{-- ==================== pd Form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="pd_date_form">Date From</label>
                    <input type="date" class="form-control" id="pd_date_form" placeholder="" name="pd_date">
                  </div>
                  <div class="form-group">
                    <label for="pd_date_to">Date To</label>
                    <input type="date" class="form-control" id="pd_date_to" placeholder="" name="pd_time">
                  </div>

                

                  <div class="form-group">
                    <label for="pd_venue">Venue</label>
                    <input type="text" class="form-control" id="pd_venue" placeholder="" name="pd_venue">
                  </div>

                  <div class="form-group">
                    <label for="pd_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="pd_in_association" placeholder="" name="pd_in_association">
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="pd_teachers_name">Teachers Name</label>
                    <input type="text" class="form-control" id="pd_teachers_name" placeholder="" name="pd_teachers_name">
                  </div>
                  <div class="form-group">
                    <label for="pd_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="pd_no_of_participants" placeholder="" name="pd_no_of_the_paticipants">
                  </div>
                  
                  <div class="form-group">
                    <label for="pd_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="pd_conveynor" placeholder="" name="pd_convenors">
                  </div>
                  
                  <div class="form-group">
                    <label for="pd_key_members">Key Members</label>
                    <input type="text" class="form-control" id="pd_key_members" placeholder="" name="pd_kry_member">
                  </div>
                   <div class="form-group">
                    <label for="pd_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="pd_sponcer" placeholder="" name="pd_sponsors">
                  </div>
                       <div class="form-group">
                    <label for="pd_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="pd_special_thanks" placeholder="" name="pd_special_thanks_to">
                  </div>
                  
                 <!--   <div class="form-group">
                    <label for="pd_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="pd_brief_report" placeholder="" name="pd_brief_report">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="pd_brief_report">Brief Report</label>
                    <textarea class="form-control" id="pd_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="pd_brief_report"></textarea>
                  </div>
                    <div class="form-group">
                    <label for="pd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="pd_participants_list"  name="pd_participants_list[]" accept=".xlsx, .xls, .csv">
                  </div>
                   <div class="form-group">
                    <label for="pd_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="gallery-photo-add13" placeholder="NOT MORE THAN 500 WORDS" name="pd_images[]" multiple="">
                  </div>
                   <div class="gallery13"></div>
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="pd_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="pd_chaitra_aatma" placeholder="" name="pd_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="pd_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="pd_abtyp_members" placeholder="" name="pd_abtyp_members">
                  </div>


                  <div class="form-group">
                    <label for="pd_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="pd_chief_guest" placeholder="" name="pd_chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="pd_guest">Guests</label>
                    <input type="text" class="form-control" id="pd_guest" placeholder="" name="pd_guest">
                  </div>


                  <!-- <div class="form-group">
                    <label for="pd_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="pd_total_presesnt" placeholder="" name="pd_total">
                  </div>
                   <div class="form-group">
                    <label for="pd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="pd_prepared_by" placeholder="" name="pd_prepared_by">
                  </div> -->



                  {{-- ==================== pd Form End================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ PD End ================================ --}}



            {{-- ================================ BARAH VRAT Start ================================ --}}
            
            @if ($user_list->sanskar_barah_vrat=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> BARAH VRAT</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx28"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx29"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea13">
                  {{-- ==================== BARAH VRAT form Strt================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <!-- <div class="form-group">
                    <label for="bv_date">Date</label>
                    <input type="date" class="form-control" id="bv_date" placeholder="" name="bv_date">
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="bv_time">Time</label>
                    <input type="time" class="form-control" id="bv_time" placeholder="" name="bv_time">
                  </div> -->

                  <div class="form-group">
                    <label for="bv_venue">Venue</label>
                    <input type="text" class="form-control" id="bv_venue" placeholder="" name="bv_venue">
                  </div>

                  <div class="form-group">
                    <label for="bv_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="bv_in_association" placeholder="" name="bv_in_association">
                  </div>

                   <div class="form-group">
                    <label for="bv_sanskar_name">Speaker's Name</label>
                    <input type="text" class="form-control" id="bv_sanskar_name" placeholder="" name="bv_sanskar_name">
                  </div>

                  <div class="form-group">
                    <label for="bv_no_of_participant">Number Of participants</label>
                    <input type="text" class="form-control" id="bv_no_of_participant" placeholder="" name="bv_no_of_participant">
                  </div>

                  <div class="form-group">
                    <label for="bv_convenors">Convenors</label>
                    <input type="text" class="form-control" id="bv_convenors" placeholder="" name="bv_convenors">
                  </div>

                  <div class="form-group">
                    <label for="bv_key_members">Key Members</label>
                    <input type="text" class="form-control" id="bv_key_members" placeholder="" name="bv_key_members">
                  </div>

                  <div class="form-group">
                    <label for="bv_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="bv_sponsors" placeholder="" name="bv_sponsors">
                  </div>


                  <div class="form-group">
                    <label for="bv_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="bv_special_thanks_to" placeholder="" name="bv_special_thanks_to">
                  </div>

                   <div class="form-group">
                    <label for="bv_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="bv_brief_report" placeholder="" name="bv_brief_report">
                  </div>

                   <!-- <div class="form-group">
                    <label for="bv_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="bv_chaitra_aatma" placeholder="" name="bv_chaitra_aatma">
                  </div> -->

                   <div class="form-group">
                    <label for="bv_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="bv_abtyp_members" placeholder="" name="bv_abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="bv_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="bv_chief_guest" placeholder="" name="bv_chief_guest">
                  </div>

                  <div class="form-group">
                    <label for="bv_guets">Guests</label>
                    <input type="text" class="form-control" id="bv_guets" placeholder="" name="bv_guets">
                  </div>

                  <!-- <div class="form-group">
                    <label for="bv_total">Total</label>
                    <input type="text" class="form-control" id="bv_total" placeholder="" name="bv_total">
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="bv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="bv_prepared_by" placeholder="" name="bv_prepared_by">
                  </div> -->
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload <font color="red">(Images / Videos / Presentation)</font></label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add14" name="bv_images[]" multiple="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery14"></div>
                  {{-- ==================== BARAH VRAT Form End================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ BARAH VRAT End ================================ --}}


            {{-- ================================ BARAH VRAT Start ================================ --}}
            
            <!-- @if ($user_list->sanskar_twenty_five_bol=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> 25 BOL</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                 
                </div>
       
                <div class="card-body"> -->
                  {{-- ==================== 25 BOL Form End================== --}}

              

                   <!--    <div class="form-group">
                    <label for="tbol_date">Date</label>
                    <input type="date" class="form-control" id="tbol_date" placeholder="" name="tbol_date">
                  </div>

                  <div class="form-group">
                    <label for="tbol_time">Time</label>
                    <input type="time" class="form-control" id="tbol_time" placeholder="" name="tbol_time">
                  </div>

                  <div class="form-group">
                    <label for="tbol_venue">Venue</label>
                    <input type="text" class="form-control" id="tbol_venue" placeholder="" name="tbol_venue">
                  </div>

                  <div class="form-group">
                    <label for="tbol_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="tbol_in_association" placeholder="" name="tbol_in_association">
                  </div>

                  <div class="form-group">
                    <label for="tbol_conveymor">Conveynor</label>
                    <input type="text" class="form-control" id="tbol_conveymor" placeholder="" name="tbol_conveymor">
                  </div>

                  <div class="form-group">
                    <label for="tbol_key_members">Key Members</label>
                    <input type="text" class="form-control" id="tbol_key_members" placeholder="" name="tbol_key_members">
                  </div>

                  <div class="form-group">
                    <label for="tbol_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="tbol_sponsors" placeholder="" name="tbol_sponsors">
                  </div>

                  <div class="form-group">
                    <label for="tbol_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="tbol_special_thanks" placeholder="" name="tbol_special_thanks">
                  </div>

                  <div class="form-group">
                    <label for="tbol_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="tbol_brief_report" placeholder="" name="tbol_brief_report">
                  </div>

                   <div class="form-group">
                    <label for="tbol_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="tbol_chaitra_aatma" placeholder="" name="tbol_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="tbol_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="tbol_abtyp_members" placeholder="" name="tbol_abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="tbol_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="tbol_chief_guest" placeholder="" name="tbol_chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="tbol_guest">Guests</label>
                    <input type="text" class="form-control" id="tbol_guest" placeholder="" name="tbol_guest">
                  </div>

                  <div class="form-group">
                    <label for="tbol_total">Total</label>
                    <input type="text" class="form-control" id="tbol_total" placeholder="" name="tbol_total">
                  </div>

                   <div class="form-group">
                    <label for="tbol_preapred_by">Prepared By</label>
                    <input type="text" class="form-control" id="tbol_preapred_by" placeholder="" name="tbol_preapred_by">
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInput" name="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div> -->
                  {{-- ==================== 25 BOL Form End================== --}}
                  
              <!--   </div>
              
              </div>
           
            </div>
             @endif  -->
            {{-- ================================ BARAH VRAT End ================================ --}}


            {{-- ================================ JAIN VIDHYA KATYASHALA Start ================================ --}}
            
            @if ($user_list->sanskar_jain_vidhya_katyashala=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> JAIN VIDHYA KATYASHALA</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx30"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx31"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea14">
                  {{-- ==================== JAIN VIDHYA KATYASHALA Form start================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                       <div class="form-group">
                    <label for="jvk_date_form">Date From</label>
                    <input type="date" class="form-control" id="jvk_date_form" placeholder="" name="jvk_date">
                  </div>
                  <div class="form-group">
                    <label for="jvk_date_to">Date To</label>
                    <input type="date" class="form-control" id="jvk_date_to" placeholder="" name="jvk_time">
                  </div>

                

                  <div class="form-group">
                    <label for="jvk_venue">Venue</label>
                    <input type="text" class="form-control" id="jvk_venue" placeholder="" name="jvk_venue">
                  </div>

                  <div class="form-group">
                    <label for="jvk_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="jvk_in_association" placeholder="" name="jvk_in_association">
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="jvk_teachers_name">Teachers Name</label>
                    <input type="text" class="form-control" id="jvk_teachers_name" placeholder="" name="jvk_teachers_name">
                  </div>
                  <div class="form-group">
                    <label for="jvk_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="jvk_no_of_the_paticipants" placeholder="" name="jvk_no_of_participants">
                  </div>
                  
                  <div class="form-group">
                    <label for="jvk_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="jvk_conveynor" placeholder="" name="jvk_convenors">
                  </div>
                  
                  <div class="form-group">
                    <label for="jvk_key_members">Key Members</label>
                    <input type="text" class="form-control" id="jvk_key_members" placeholder="" name="jvk_key_members">
                  </div>
                   <div class="form-group">
                    <label for="jvk_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="jvk_sponcer" placeholder="" name="jvk_sponsor">
                  </div>
                       <div class="form-group">
                    <label for="jvk_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="jvk_special_thanks" placeholder="" name="jvk_special_thanks_to">
                  </div>
                  
                <!--    <div class="form-group">
                    <label for="jvk_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="jvk_brief_report" placeholder="" name="jvk_brief_report">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="jvk_brief_report">Brief Report</label>
                    <textarea class="form-control" id="jvk_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="jvk_brief_report"></textarea>
                  </div>
                    <!--<div class="form-group">
                    <label for="jvk_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="jvk_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="jvk_participants_list">
                  </div>-->
                   
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="jvk_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="jvk_chaitra_aatma" placeholder="" name="jvk_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="jvk_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="jvk_abtyp_members" placeholder="" name="jvk_abtyp_members">
                  </div>


                  <div class="form-group">
                    <label for="jvk_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="jvk_chief_guest" placeholder="" name="jvk_chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="jvk_guest">Guests</label>
                    <input type="text" class="form-control" id="jvk_guest" placeholder="" name="jvk_guest">
                  </div>


                  <!-- <div class="form-group">
                    <label for="jvk_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="jvk_total_presesnt" placeholder="" name="jvk_total">
                  </div>
                   <div class="form-group">
                    <label for="jvk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jvk_prepared_by" placeholder="" name="jvk_prepared_by">
                  </div> -->
                  <div class="form-group">
                    <label for="jvk_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font>></label>
                    <input type="file" class="form-control" id="gallery-photo-add15" placeholder="NOT MORE THAN 500 WORDS" name="jvk_images[]" multiple="">
                  </div>
                   <div class="gallery15"></div>
                  {{-- ==================== JAIN VIDHYA KATYASHALA Form End================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ JAIN VIDHYA KATYASHALA End ================================ --}}


            {{-- ================================ YUVA DIVAS Start ================================ --}}
            
            @if ($user_list->sanskar_yuva_divas=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">YUVA DIVAS</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx32"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx33"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea15">
                  {{-- ==================== YUVA DIVAS Form End================== --}}
                  <!-- <div class="form-group">
                    <label for="yd_date">Date</label>
                    <input type="date" class="form-control" id="yd_date" placeholder="" name="yd_date">
                  </div>

                  <div class="form-group">
                    <label for="yd_time">Time</label>
                    <input type="time" class="form-control" id="yd_time" placeholder="" name="yd_time">
                  </div> -->

                  <div class="form-group">
                    <label for="yd_venue">Venue</label>
                    <input type="text" class="form-control" id="yd_venue" placeholder="" name="yd_venue">
                  </div>

                  <div class="form-group">
                    <label for="yd_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="yd_in_association" placeholder="" name="yd_in_association">
                  </div>
                   <label for="">ABOUT THE PROGRAM</label>
                  
                  <div class="form-group">
                    <label for="yd_topic">TOPIC</label>
                    <input type="text" class="form-control" id="yd_topic" placeholder="" name="yd_topic">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_no_of_participants">NUMBER OF PARTICIPANTS:</label>
                    <input type="text" class="form-control" id="yd_no_of_participants" placeholder="" name="yd_no_of_participants">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_convenors">CONVENORS</label>
                    <input type="text" class="form-control" id="yd_convenors" placeholder="" name="yd_convenors">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_key_members">KEY MEMBERS</label>
                    <input type="text" class="form-control" id="yd_key_members" placeholder="" name="yd_key_members">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_sponsors">SPONSORS</label>
                    <input type="text" class="form-control" id="yd_sponsors" placeholder="" name="yd_sponsors">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_special_thanks_to">SPECIAL THANKS TO:</label>
                    <input type="text" class="form-control" id="yd_special_thanks_to" placeholder="" name="yd_special_thanks_to">
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_brief_reports">BREIF REPORT</label>
                    <textarea class="form-control" id="yd_brief_reports" placeholder="NOT MORE THAN 500 WORDS" name="yd_brief_reports"></textarea>
                  </div>
                  <!--<div class="form-group">
                    <label for="yd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="yd_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="yd_participants_list">
                  </div>-->
                   
                   
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="yd_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="yd_chaitra_aatma" placeholder="" name="yuvadivas_Chaitra_Aatma">
                  </div>

                  <div class="form-group">
                    <label for="yd_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="yd_abtyp_members" placeholder="" name="yuvadivas_ABTYP">
                  </div>


                  <div class="form-group">
                    <label for="yd_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="yd_chief_guest" placeholder="" name="yuvadivas_Chief_Guest">
                  </div>


                  <div class="form-group">
                    <label for="yd_guest">Guests</label>
                    <input type="text" class="form-control" id="yd_guest" placeholder="" name="yuvadivas_Guests">
                  </div>


                  <div class="form-group">
                    <label for="yd_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="yd_total_presesnt" placeholder="" name="yuvadivas_Total">
                  </div>
                   <!-- <div class="form-group">
                    <label for="yd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yd_prepared_by" placeholder="" name="yuvadivas_Prepared">
                  </div> -->

                  <div class="form-group">
<font color="red">(Images / Videos / Presentation)</font>
                    <label for="yd_inages">Pictures(2-4) </label>
                    <input type="file" class="form-control" id="gallery-photo-add16" placeholder="NOT MORE THAN 500 WORDS" name="yd_images[]" multiple="" accept=".ppt,image/*,video/*,">
                  </div>
                  <div class="gallery16"></div>
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  
                  {{-- ==================== YUVA DIVAS Form End================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ YUVA DIVAS End ================================ --}}

         
        </div>
          {{-- ==================================Sanskar Form====================================================== --}}



           {{-- ==================================Sanskar Form====================================================== --}}
            
           @if ($user_list->sangathan_tkm=='1' || $user_list->sangathan_yuva_sangam=='1' || $user_list->sangathan_fit_yuva=='1' || $user_list->sangathan_jtn=='1' || $user_list->sangathan_sankalp_sangathan_yatra=='1' || $user_list->sangathan_sargam=='1' || $user_list->sangathan_abtyp_direct=='1' )
          <h5 class="mb-2">Sangathan</h5>
          @endif
          <div class="row">
            {{-- ================================ TKM Start ================================ --}}

            @if ($user_list->sangathan_tkm=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TERAPANTH KISHORE MANDAL</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx34"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx35"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea16">
                  {{-- ==================== TKM Form End================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="tkm_name">Date</label>
                    <input type="date" class="form-control" id="tkm_name" placeholder="" name="tkm_name">
                  </div>

                  <div class="form-group">
                    <label for="tkm_time">Time</label>
                    <input type="time" class="form-control" id="tkm_time" placeholder="" name="tkm_time">
                  </div>

                  <div class="form-group">
                    <label for="tkm_event_title">Event Title</label>
                    <input type="text" class="form-control" id="tkm_event_title" placeholder="" name="tkm_event_title">
                  </div>

                  <div class="form-group">
                    <label for="tkm_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="tkm_in_association" placeholder="" name="tkm_in_association">
                  </div>
                  
                    <!-- <div class="form-group">
                    <label for="tkm_teachers_name">Teachers Name</label>
                    <input type="text" class="form-control" id="tkm_teachers_name" placeholder="" name="tkm_teachers_name">
                  </div> -->
                  <div class="form-group">
                    <label for="tkm_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="tkm_no_of_the_paticipants" placeholder="" name="tkm_no_of_the_paticipants">
                  </div>
                  
                  <div class="form-group">
                    <label for="tkm_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="tkm_conveynor" placeholder="" name="tkm_conveynor">
                  </div>
                  
                  <div class="form-group">
                    <label for="tkm_key_members">Key Members</label>
                    <input type="text" class="form-control" id="tkm_key_members" placeholder="" name="tkm_key_members">
                  </div>
                   <div class="form-group">
                    <label for="tkm_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="tkm_sponcer" placeholder="" name="tkm_sponcer">
                  </div>
                       <div class="form-group">
                    <label for="tkm_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="tkm_special_thanks" placeholder="" name="tkm_special_thanks">
                  </div>
                  
                  <!--  <div class="form-group">
                    <label for="tkm_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="tkm_brief_report" placeholder="" name="tkm_brief_report">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="tkm_brief_report">Brief Report</label>
                    <textarea class="form-control" id="tkm_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="tkm_brief_report"></textarea>
                  </div>
                    <!--<div class="form-group">
                    <label for="tkm_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="tkm_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="tkm_participants_list">
                  </div>-->
                  
                   
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="tkm_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="tkm_chaitra_aatma" placeholder="" name="tkm_chaitra_aatma">
                  </div>

                  <div class="form-group">
                    <label for="tkm_abtyp_members">ABTYP / BLUE BRIGADE</label>
                    <input type="text" class="form-control" id="tkm_abtyp_members" placeholder="" name="tkm_abtyp_members">
                  </div>


                  <div class="form-group">
                    <label for="tkm_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="tkm_chief_guest" placeholder="" name="tkm_chief_guest">
                  </div>


                  <div class="form-group">
                    <label for="tkm_guest">Guests</label>
                    <input type="text" class="form-control" id="tkm_guest" placeholder="" name="tkm_guest">
                  </div>


                  <!-- <div class="form-group">
                    <label for="tkm_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="tkm_total_presesnt" placeholder="" name="tkm_total_presesnt">
                  </div> -->
                   <!-- <div class="form-group">
                    <label for="tkm_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tkm_prepared_by" placeholder="" name="tkm_prepared_by">
                  </div> -->
                   <div class="form-group">
                    <label for="tkm_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font></label>
                    <input type="file" class="form-control" id="gallery-photo-add17" placeholder="NOT MORE THAN 500 WORDS" name="tkm_images[]" multiple="" accept=".ppt,image/*,video/*,"
>
                  </div>
                  <div class="gallery17"></div>

                  
                

                 
                  {{-- ==================== TKM Form End================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            <!-- /.col -->
             @endif 

            {{-- ================================ TKM end ================================ --}}


            {{-- ================================ YUVA SANGAM Start ================================ --}}

            @if ($user_list->sangathan_yuva_sangam=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> YUVA SANGAM</h3>

                  <div class="card-tools">
                   <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx36"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx37"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea17">
                  {{-- ==================== YUVA SANGAM Form Strt================== --}}
                 {{--  <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="ys_no_new_members">TYP (New Members added this month)</label>
                    <input type="text" class="form-control" id="ys_no_new_members" placeholder="" name="ys_no_new_members">
                  </div>
                   <div class="form-group">
                    <label for="ys_no_new_members">TKM (New Members added this month)</label>
                    <input type="text" class="form-control" id="ys_tkm" placeholder="" name="ys_no_new_members">
                  </div>

                  <div class="form-group">
                    <label for="ys_conveynor">Current Total Strength</label>
                    <input type="text" class="form-control" id="ys_conveynor" placeholder="" name="ys_conveynor">
                  </div>

                  <div class="form-group">
                    <label for="ys_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ys_special_thanks_to" placeholder="" name="ys_special_thanks_to">
                  </div>

                  <div class="form-group">
                    <label for="ys_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="ys_brief_reports" placeholder="" name="ys_brief_reports">
                  </div>
                  
                  
                  <div class="form-group">
                    <label for="ys_brief_reports">New Members List</label>
                    <input type="file" class="form-control" id="ys_participant_list" placeholder="" name="ys_participant_list[]" accept=".xlsx, .xls, .csv">
                  </div>

                  

                  <!--  <div class="form-group">
                    <label for="ys_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ys_prepared_by" placeholder="" name="ys_prepared_by">
                  </div> -->

                  <div class="form-group">
                    <label for="ys_prepared_by">New Members list updated on Yuva Sangam</label><br>
                    <input type="checkbox"  id="new_member_list_updated_on_ys" placeholder="" name="new_member_list_updated_on_ys" value="yes" onclick="onlyOne(this)">Yes<br>
                    <input type="checkbox"  id="new_member_list_updated_on_ys" placeholder="" name="new_member_list_updated_on_ys" value="no" onclick="onlyOne(this)">No<br>
                  </div>
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add18" name="ys_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery18"></div>
                  {{-- ==================== YUVA SANGAM Form Strt================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ YUVA SANGAM End ================================ --}}

            {{-- ================================ FIT YUVA Start ================================ --}}
            
            @if ($user_list->sangathan_fit_yuva=='1')
            <div class="col-md-12">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> FIT YUVA</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx38"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx39"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea18">
                  {{-- ==================== FIT YUVA Form End================== --}}
                  {{-- <div class="form-group">
                        <label>Parishad's Name</label>
                        <select class="form-control">
                          <option>option 1</option>
                          <option>option 2</option>
                          <option>option 3</option>
                          <option>option 4</option>
                          <option>option 5</option>
                        </select>
                      </div> --}}

                      <div class="form-group">
                    <label for="fit_yuva_date">Date</label>
                    <input type="date" class="form-control" id="fit_yuva_date" placeholder="" name="fit_yuva_date">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_time">Time</label>
                    <input type="time" class="form-control" id="fit_yuva_time" placeholder="" name="fit_yuva_time">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_venue">Venue</label>
                    <input type="text" class="form-control" id="fit_yuva_venue" placeholder="" name="fit_yuva_venue">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="fit_yuva_in_association" placeholder="" name="fit_yuva_in_association">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_event">Event Name</label>
                    <input type="text" class="form-control" id="fit_yuva_event" placeholder="" name="fit_yuva_event">
                  </div>


                  
                  <div class="form-group">
                    <label for="fit_yuva_no_of_participants">Number Of participants</label>
                    <input type="text" class="form-control" id="fit_yuva_no_of_participants" placeholder="" name="fit_yuva_no_of_participants">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_convenors">Convenors</label>
                    <input type="text" class="form-control" id="fit_yuva_convenors" placeholder="" name="fit_yuva_convenors">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_key_members">Key Members</label>
                    <input type="text" class="form-control" id="fit_yuva_key_members" placeholder="" name="fit_yuva_key_members">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="fit_yuva_sponsors" placeholder="" name="fit_yuva_sponsors">
                  </div>


                  <div class="form-group">
                    <label for="fit_yuva_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="fit_yuva_special_thanks_to" placeholder="" name="fit_yuva_special_thanks_to">
                  </div>

                   <div class="form-group">
                    <label for="fit_yuva_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="fit_yuva_brief_report" placeholder="" name="fit_yuva_brief_report">
                  </div>
                  
                  <div class="form-group">
                    <label for="ys_brief_reports">Participant list</label>
                    <input type="file" class="form-control" id="fit_yuva_participant_list" placeholder="" name="fit_yuva_participant_list[]" accept=".xlsx, .xls, .csv">
                  </div>

                   <div class="form-group">
                    <label for="fit_yuva_chaitrs_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="fit_yuva_chaitrs_aatma" placeholder="" name="fit_yuva_chaitrs_aatma">
                  </div>

                   <div class="form-group">
                    <label for="fit_yuva_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="fit_yuva_abtyp_members" placeholder="" name="fit_yuva_abtyp_members">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="fit_yuva_chief_guest" placeholder="" name="fit_yuva_chief_guest">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_guest">Guests</label>
                    <input type="text" class="form-control" id="fit_yuva_guest" placeholder="" name="fit_yuva_guest">
                  </div>

                  <!-- <div class="form-group">
                    <label for="fit_yuva_total">Total</label>
                    <input type="text" class="form-control" id="fit_yuva_total" placeholder="" name="fit_yuva_total">
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="fit_yuva_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="fit_yuva_prepared_by" placeholder="" name="fit_yuva_prepared_by">
                  </div> -->
                  
                   <div class="form-group">
<font color="red">(Images / Videos / Presentation)</font>
                    <label for="exampleInput">Image Upload </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="gallery-photo-add19" name="fit_yuva_images[]" multiple="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery19"></div>
                  {{-- ==================== FIT YUVA Form End================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            @endif 
            {{-- ================================ FIT YUVA End ================================ --}}
   
            {{-- ================================ JTN Start ================================ --}}

           <!--  @if ($user_list->sangathan_jtn=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title">JAIN TERAPANTH NEWS</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                
                </div>
             
                <div class="card-body">
                  The body of the card
                </div>
                
              </div>
             
            </div>
             @endif  -->
            {{-- ================================ JTN End ================================ --}}



            {{-- ================================ SANKALP SANGATHAN YATRA Start ================================ --}}
           <!--  
            @if ($user_list->sangathan_sankalp_sangathan_yatra=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title">  SANKALP SANGATHAN YATRA</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
           
                </div>
              
                <div class="card-body">
                  The body of the card
                </div>
               
              </div>
         
            </div>
             @endif  -->
            {{-- ================================ SANKALP SANGATHAN YATRA End ================================ --}}



            {{-- ================================ SARGAM Start ================================ --}}
           
           <!-- @if ($user_list->sangathan_sargam=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title">SARGAM</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  
                </div>
               
                <div class="card-body">
                  The body of the card
                </div>
               
              </div>
              
            </div>
             @endif  -->
            {{-- ================================ SARGAMA End ================================ --}}


            
            {{-- ================================ ABTYP DIRECT End ================================ --}}

            <!-- @if ($user_list->sangathan_abtyp_direct=='1')
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> ABTYP DIRECT</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                
                </div>
            
                <div class="card-body">
                  The body of the card
                </div>
                
              </div>
             

            </div>
            @endif  -->
            {{-- ================================ ABTYP DIRECT End ================================ --}}



            
         
        </div>
          {{-- ==================================Sanskar Form====================================================== --}}  
          <div class="form-group">
                    <label for="other_activity">Additional achievements / Participation / Activity done this month</label>
                    <textarea type="text" class="form-control" id="other_activity" placeholder="Additional achievements / Participation / Activity done this month" name="other_activity"></textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInput">Image Upload <font color="red">(Images / Videos / Presentation)</font></label>
                    <div class="input-group">
                      <div >
                        <input type="file" class="custom-file-input" id="gallery-photo-add20" name="monthly_report_photo[]" multiple="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                   <div class="gallery20"></div>
                 <div class="form-group">
                    <label for="filled_by">Filled By</label>
                    <input type="text" class="form-control" id="filled_by" placeholder="Filled By" name="filled_by">
                    @if ($errors->has('filled_by'))
                      <div class="error" style="color:red;">{{ $errors->first('filled_by') }}</div>
                      @endif

                  </div>
                   
                  <div class="form-group">
                      <label for="filled_by_role">Role</label>
                        
                        <select class="form-control" id="filled_by_role" name="filled_by_role">
                          <option value="President">President</option>
                          <option value="Secretary">Secretary</option>
                          <option value="Vice President I">Vice President I</option>

                          <option value="Vice President II">Vice President II</option>

                          <option value="Joint Secretary I">Joint Secretary I</option>
                          <option value="Joint Secretary II">Joint Secretary II</option>
                          <option value="Treasurer">Treasurer</option>
                          <option value="Organising Secretary">Organising Secretary</option> 
                        </select>
                         @if ($errors->has('filled_by_role'))
                      <div class="error" style="color:red;">{{ $errors->first('filled_by_role') }}</div>
                      @endif
                      </div>            
              


                    <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger xhead">Submit</button>
                </div>
              </form>
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
                            
            </div>                
                 </div>          
@include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
    <script type="text/javascript">
      function GetUserData(month){
        var branch_id = $("#branch_id").val();
        //alert(month);
        //alert(branch_id);
        $.ajax({
          type:'GET',
          url:'{{url('/fetch-dashboard-data')}}/'+month+'/'+branch_id,
          dataType:'json',
          success:function(data){
              
            //monthly_report Form Data
            $("#monthly_report_id").val(data.monthly_report.id);
            $("#ecw_meeting_date").val(data.monthly_report.ecw_meeting_date);
            $("#other_activity").val(data.monthly_report.other_activity);
            $("#filled_by").val(data.monthly_report.filled_by);
            $("#filled_by_role").append('<option value="'+data.monthly_report.filled_by_role+'" selected>'+data.monthly_report.filled_by_role+'</option>');
            
            //ATDC Form Data
            $("#total_no_of_billing").val(data.atdc_data.total_no_of_billing);
            $("#total_no_of_pathology_patients").val(data.atdc_data.total_no_of_pathology_patients);
            $("#no_of_dental_patients").val(data.atdc_data.no_of_dental_patients);
            $("#no_of_x_ray_patients").val(data.atdc_data.no_of_x_ray_patients);
            $("#no_of_sonography_patients").val(data.atdc_data.no_of_sonography_patients);
            $("#no_of_opd_patients").val(data.atdc_data.no_of_opd_patients);
            $("#total_no_of_inventory_used").val(data.atdc_data.total_no_of_inventory_used);
            $("#special_donation").val(data.atdc_data.special_donation);
            $("#special_activity").val(data.atdc_data.special_activity);
            $("#chnage_in_machinery").val(data.atdc_data.chnage_in_machinery);
            $("#atdc_key_members").val(data.atdc_data.atdc_key_members);
            $("#brief_reporting").val(data.atdc_data.brief_reporting);
            $("#atdc_prepared_by").val(data.atdc_data.atdc_prepared_by);

            //Mbdd Form Data
            $("#name_of_camps").val(data.mbdd_data.name_of_camps);
            $("#date").val(data.mbdd_data.date);
            $("#time").val(data.mbdd_data.time);
            $("#venue").val(data.mbdd_data.venue);
            $("#name_of_blood_bank").val(data.mbdd_data.name_of_blood_bank);
            $("#in_association").val(data.mbdd_data.in_association);
            $("#total_units_collected").val(data.mbdd_data.total_units_collected);
            $("#camp_convenors").val(data.mbdd_data.camp_convenors);
            $("#key_members").val(data.mbdd_data.key_members);
            $("#sponsors").val(data.mbdd_data.sponsors);
            $("#special_thatnks_to").val(data.mbdd_data.special_thatnks_to);
            $("#brief_reports").val(data.mbdd_data.brief_reports);
            $("#chaitra_aatma").val(data.mbdd_data.chaitra_aatma);
            $("#abtyp_members").val(data.mbdd_data.abtyp_members);
            $("#chief_guest").val(data.mbdd_data.chief_guest);
            $("#guests").val(data.mbdd_data.guests);
            $("#total").val(data.mbdd_data.total);
            $("#mbdd_prepared_by").val(data.mbdd_data.mbdd_prepared_by);
            //TTF Form Data
            $("#ttf_date").val(data.ttf_data.ttf_date);
            $("#ttf_time").val(data.ttf_data.ttf_time);
            $("#ttf_venue").val(data.ttf_data.ttf_venue);
            $("#ttf_in_associati").val(data.ttf_data.ttf_in_associati);
            $("#ttf_number_Of_participants").val(data.ttf_data.ttf_number_Of_participants);
            $("#ttf_ndrf_trainer_ame").val(data.ttf_data.ttf_ndrf_trainer_ame);
            $("#ttf_stage").val(data.ttf_data.ttf_stage);
            $("#ttf_convenors").val(data.ttf_data.ttf_convenors);
            $("#ttf_key_members").val(data.ttf_data.ttf_key_members);
            $("#ttf_sponsors").val(data.ttf_data.ttf_sponsors);
            $("#ttf_special_thanks_to").val(data.ttf_data.ttf_special_thanks_to);
            $("#ttf_brief_reports").val(data.ttf_data.ttf_brief_reports);
            $("#ttf_chaitra_aatma").val(data.ttf_data.ttf_chaitra_aatma);
            $("#ttf_abtyp_members").val(data.ttf_data.ttf_abtyp_members);
            $("#ttf_chief_guest").val(data.ttf_data.ttf_chief_guest);
            $("#ttf_guests").val(data.ttf_data.ttf_guests);
            $("#ttf_total").val(data.ttf_data.ttf_total);
            $("#ttf_prepared_by").val(data.ttf_data.ttf_prepared_by);
            
            //yuvavahini_data Form Data
            $("#yuva_vahini_date_form").val(data.yuvavahini_data.yuva_vahini_date_form);
            $("#yuva_vahini_date_to").val(data.yuvavahini_data.yuva_vahini_date_to);
            $("#yuva_vahini_time").val(data.yuvavahini_data.yuva_vahini_time);
            $("#yuva_vahini_no_Of_days").val(data.yuvavahini_data.yuva_vahini_no_Of_days);
            $("#yuva_vahini_no_of_members").val(data.yuvavahini_data.yuva_vahini_no_of_members);
            $("#yuva_vahini_total_distance").val(data.yuvavahini_data.yuva_vahini_total_distance);
            $("#yuva_vahini_no_of_yv_jackets_collected").val(data.yuvavahini_data.yuva_vahini_no_of_yv_jackets_collected);
            $("#yuva_vahini_availed_abtyp_accomodation").val(data.yuvavahini_data.ttf_prepared_by);
            $("#yuva_vahini_availed_abtyp_accomodation").val(data.yuvavahini_data.yuva_vahini_availed_abtyp_accomodation);
            $("#yuva_vahini_availed_satkar").val(data.yuvavahini_data.yuva_vahini_availed_satkar);
            $("#yuva_vahini_brief_report").val(data.yuvavahini_data.yuva_vahini_brief_report);
            $("#yuva_vahini_prepared_by").val(data.yuvavahini_data.yuva_vahini_prepared_by);
            
            // eyedonation_data Form Data
            $("#eye_donate_no_of_eye_donation").val(data.eyedonation_data.eye_donate_no_of_eye_donation);
            $("#eye_donate_no_ofeye_bank").val(data.eyedonation_data.eye_donate_no_ofeye_bank);
            $("#eye_donate_kry_members").val(data.eyedonation_data.eye_donate_kry_members);
            $("#eye_donate_special_thanks_to").val(data.eyedonation_data.eye_donate_special_thanks_to);
            $("#eye_donate_brief_report").val(data.eyedonation_data.eye_donate_brief_report);
            $("#eye_donate_prepared_by").val(data.eyedonation_data.eye_donate_prepared_by);
            
            //ampk_data form Data
            $("#ampk_address").val(data.ampk_data.ampk_address);
            $("#ampk_in_association").val(data.ampk_data.ampk_in_association);
            $("#ampk_chaitra_atma_visited").val(data.ampk_data.ampk_chaitra_atma_visited);
            $("#ampk_date").val(data.ampk_data.ampk_date);
            $("#ampk_conveynor").val(data.ampk_data.ampk_conveynor);
            $("#ampk_key_members").val(data.ampk_data.ampk_key_members);
            $("#ampk_sponsors").val(data.ampk_data.ampk_sponsors);
            $("#ampk_special_thanks_to").val(data.ampk_data.ampk_special_thanks_to);
            $("#ampk_brief_report").val(data.ampk_data.ampk_brief_report);
            $("#ampk_prepared_by").val(data.ampk_data.ampk_prepared_by);
            
            //choka_satkar Form Data
            $("#choka_satkar_date_form").val(data.chokasatar_data.choka_satkar_date_form);
            $("#choka_satkar_date_to").val(data.chokasatar_data.ampk_prepared_by);
            $("#ampk_prepared_by").val(data.chokasatar_data.choka_satkar_date_to);
            $("#choka_satkar_time").val(data.chokasatar_data.choka_satkar_time);
            $("#choka_satkar_no_of_days").val(data.chokasatar_data.choka_satkar_no_of_days);
            $("#choka_satkar_amount_paid").val(data.chokasatar_data.choka_satkar_amount_paid);
            $("#choka_satkar_sponsor").val(data.chokasatar_data.choka_satkar_sponsor);
            $("#choka_satkar_in_association").val(data.chokasatar_data.choka_satkar_in_association);
            $("#choka_satkar_special_thanks_to").val(data.chokasatar_data.choka_satkar_special_thanks_to);
            $("#choka_satkar_brief_reports").val(data.chokasatar_data.choka_satkar_brief_reports);
            $("#choka_satkarprepared_by").val(data.chokasatar_data.choka_satkarprepared_by);
            
            //jsv_data Form Data
            $("#jsv_date").val(data.jsv_data.jsv_date);
            $("#jsv_time").val(data.jsv_data.jsv_time);
            $("#jsv_venue").val(data.jsv_data.jsv_venue);
            $("#jsv_in_association").val(data.jsv_data.jsv_in_association);
            $("#jsv_sanskar_name").val(data.jsv_data.jsv_sanskar_name);
            $("#jsv_sanskar_name").val(data.jsv_data.jsv_sanskar_name);
            $("#jsv_no_of_participant").val(data.jsv_data.jsv_no_of_participant);
            $("#jsv_convenors").val(data.jsv_data.jsv_convenors);
            $("#jsv_key_member").val(data.jsv_data.jsv_key_member);
            $("#jsv_sponsors").val(data.jsv_data.jsv_sponsors);
            $("#jsv_specila_thanks_to").val(data.jsv_data.jsv_specila_thanks_to);
            $("#jsv_brief_report").val(data.jsv_data.jsv_brief_report);
            $("#jsv_chaitra_aatma").val(data.jsv_data.jsv_chaitra_aatma);
            $("#jsv_abtyp_members").val(data.jsv_data.jsv_abtyp_members);
            $("#jsv_chief_guest").val(data.jsv_data.jsv_chief_guest);
            $("#jsv_guest").val(data.jsv_data.jsv_guest);
            $("#jsv_total").val(data.jsv_data.jsv_total);
            $("#jsv_prepared_by").val(data.jsv_data.jsv_prepared_by);
            
            //samayiksadhak_data Form Data
            $("#ss_date").val(data.samayiksadhak_data.ss_date);
            $("#ss_time").val(data.samayiksadhak_data.ss_time);
            $("#ss_venue").val(data.samayiksadhak_data.ss_venue);
            $("#ss_in_association").val(data.samayiksadhak_data.ss_in_association);
            $("#ss_jain_samayik_festival").val(data.samayiksadhak_data.ss_jain_samayik_festival);
            $("#ss_total_participants").val(data.samayiksadhak_data.ss_total_participants);
            $("#ss_total_no_of_samayik_sadhak").val(data.samayiksadhak_data.ss_total_no_of_samayik_sadhak);
            $("#ss_donation_of_samayik_kits").val(data.samayiksadhak_data.ss_donation_of_samayik_kits);
            $("#ss_conveynor").val(data.samayiksadhak_data.ss_conveynor);
            $("#ss_key_member").val(data.samayiksadhak_data.ss_key_member);
            $("#ss_special_thanks_to").val(data.samayiksadhak_data.ss_special_thanks_to);
            $("#ss_brief_report").val(data.samayiksadhak_data.ss_brief_report);
            $("#ss_prepared_by").val(data.samayiksadhak_data.ss_prepared_by);
            
            //tapoyagya_data form data
            $("#tapoyaga_date").val(data.tapoyagya_data.tapoyaga_date);
            $("#tapoyaga_time").val(data.tapoyagya_data.tapoyaga_time);
            $("#tapoyaga_venue").val(data.tapoyagya_data.tapoyaga_venue);
            $("#tapoyaga_in_association").val(data.tapoyagya_data.tapoyaga_in_association);
            $("#tapoyaga_conveynor").val(data.tapoyagya_data.tapoyaga_conveynor);
            $("#tapoyaga_key_member").val(data.tapoyagya_data.tapoyaga_key_member);
            $("#tapoyaga_special_thanks").val(data.tapoyagya_data.tapoyaga_special_thanks);
            $("#tapoyaga_brief_report").val(data.tapoyagya_data.tapoyaga_brief_report);
            $("#tapoyaga_prepared_by").val(data.tapoyagya_data.tapoyaga_prepared_by);
            
            //cps_data
            $("#cps_date").val(data.cps_data.cps_date);
            $("#cps_time").val(data.cps_data.cps_time);
            $("#cps_venue").val(data.cps_data.cps_venue);
            $("#cps_in_association").val(data.cps_data.cps_in_association);
            $("#cps_chaitra_aatma").val(data.cps_data.cps_chaitra_aatma);
            $("#cps_abtyp_members").val(data.cps_data.cps_abtyp_members);
            $("#cps_chief_guest").val(data.cps_data.cps_chief_guest);
            $("#cps_guest").val(data.cps_data.cps_guest);
            $("#cps_total_presesnt").val(data.cps_data.cps_total_presesnt);
            $("#cps_conveynor").val(data.cps_data.cps_conveynor);
            $("#cps_key_member").val(data.cps_data.cps_key_member);
            $("#cps_sponcer").val(data.cps_data.cps_sponcer);
            $("#cps_special_thanks").val(data.cps_data.cps_special_thanks);
            $("#cps_brief_report").val(data.cps_data.cps_brief_report);
            $("#cps_prepared_by").val(data.cps_data.cps_prepared_by);
            
            //pd_data form data
            $("#pd_date").val(data.pd_data.pd_date);
            $("#pd_time").val(data.pd_data.pd_time);
            $("#pd_venue").val(data.pd_data.pd_venue);
            $("#pd_in_association").val(data.pd_data.pd_in_association);
            $("#pd_teachers_name").val(data.pd_data.pd_teachers_name);
            $("#pd_no_of_participants").val(data.pd_data.pd_no_of_participants);
            $("#pd_convenors").val(data.pd_data.pd_convenors);
            $("#pd_kry_member").val(data.pd_data.pd_kry_member);
            $("#pd_sponsors").val(data.pd_data.pd_sponsors);
            $("#pd_special_thanks_to").val(data.pd_data.pd_special_thanks_to);
            $("#pd_brief_report").val(data.pd_data.pd_brief_report);
            $("#pd_chaitra_aatma").val(data.pd_data.pd_chaitra_aatma);
            $("#pd_abtyp_members").val(data.pd_data.pd_abtyp_members);
            $("#pd_chief_guest").val(data.pd_data.pd_chief_guest);
            $("#pd_guest").val(data.pd_data.pd_guest);
            $("#pd_total").val(data.pd_data.pd_total);
            $("#pd_prepared_by").val(data.pd_data.pd_prepared_by);
            
            //Barahvarat Form data
            $("#bv_date").val(data.barahvarat_data.bv_date);
            $("#bv_time").val(data.barahvarat_data.bv_time);
            $("#bv_venue").val(data.barahvarat_data.bv_venue);
            $("#bv_in_association").val(data.barahvarat_data.bv_in_association);
            $("#bv_no_of_participant").val(data.barahvarat_data.bv_no_of_participant);
            $("#bv_sanskar_name").val(data.barahvarat_data.bv_sanskar_name);
            $("#bv_convenors").val(data.barahvarat_data.bv_convenors);
            $("#bv_key_members").val(data.barahvarat_data.bv_key_members);
            $("#bv_sponsors").val(data.barahvarat_data.bv_sponsors);
            $("#bv_special_thanks_to").val(data.barahvarat_data.bv_special_thanks_to);
            $("#bv_brief_report").val(data.barahvarat_data.bv_brief_report);
            $("#bv_chaitra_aatma").val(data.barahvarat_data.bv_chaitra_aatma);
            $("#bv_abtyp_members").val(data.barahvarat_data.bv_abtyp_members);
            $("#bv_chief_guest").val(data.barahvarat_data.bv_chief_guest);
            $("#bv_guets").val(data.barahvarat_data.bv_guets);
            $("#bv_total").val(data.barahvarat_data.bv_total);
            $("#bv_prepared_by").val(data.barahvarat_data.bv_prepared_by);
            
            //twentyfivebol_data 
            $("#tbol_date").val(data.twentyfivebol_data.tbol_date);
            $("#tbol_time").val(data.twentyfivebol_data.tbol_time);
            $("#tbol_venue").val(data.twentyfivebol_data.tbol_venue);
            $("#tbol_in_association").val(data.twentyfivebol_data.tbol_in_association);
            $("#tbol_conveymor").val(data.twentyfivebol_data.tbol_conveymor);
            $("#tbol_key_members").val(data.twentyfivebol_data.tbol_key_members);
            $("#tbol_sponsors").val(data.twentyfivebol_data.tbol_sponsors);
            $("#tbol_special_thanks").val(data.twentyfivebol_data.tbol_special_thanks);
            $("#tbol_brief_report").val(data.twentyfivebol_data.tbol_brief_report);
            $("#tbol_chaitra_aatma").val(data.twentyfivebol_data.tbol_chaitra_aatma);
            $("#tbol_abtyp_members").val(data.twentyfivebol_data.tbol_abtyp_members);
            $("#tbol_chief_guest").val(data.twentyfivebol_data.tbol_chief_guest);
            $("#tbol_guest").val(data.twentyfivebol_data.tbol_guest);
            $("#tbol_total").val(data.twentyfivebol_data.tbol_total);
            $("#tbol_preapred_by").val(data.twentyfivebol_data.tbol_preapred_by);
            
            //jvk_data
            $("#jvk_date").val(data.jvk_data.jvk_date);
            $("#jvk_time").val(data.jvk_data.jvk_time);
            $("#jvk_venue").val(data.jvk_data.jvk_venue);
            $("#jvk_in_association").val(data.jvk_data.jvk_in_association);
            $("#jvk_teachers_name").val(data.jvk_data.jvk_teachers_name);
            $("#jvk_chaitra_aatma").val(data.jvk_data.jvk_chaitra_aatma);
            $("#jvk_no_of_participants").val(data.jvk_data.jvk_no_of_participants);
            $("#jvk_convenors").val(data.jvk_data.jvk_convenors);
            $("#jvk_key_members").val(data.jvk_data.jvk_key_members);
            $("#jvk_sponsor").val(data.jvk_data.jvk_sponsor);
            $("#jvk_special_thanks_to").val(data.jvk_data.jvk_special_thanks_to);
            $("#jvk_brief_report").val(data.jvk_data.jvk_brief_report);
            $("#jvk_abtyp_members").val(data.jvk_data.jvk_abtyp_members);
            $("#jvk_chief_guest").val(data.jvk_data.jvk_chief_guest);
            $("#jvk_guest").val(data.jvk_data.jvk_guest);
            $("#jvk_total").val(data.jvk_data.jvk_total);
            $("#jvk_prepared_by").val(data.jvk_data.jvk_prepared_by);
            
            //fityuva_data
            $("#fit_yuva_date").val(data.fityuva_data.fit_yuva_date);
            $("#fit_yuva_time").val(data.fityuva_data.fit_yuva_time);
            $("#fit_yuva_venue").val(data.fityuva_data.fit_yuva_venue);
            $("#fit_yuva_in_association").val(data.fityuva_data.fit_yuva_in_association);
            $("#fit_yuva_event").val(data.fityuva_data.fit_yuva_event);
            $("#fit_yuva_no_of_participants").val(data.fityuva_data.fit_yuva_no_of_participants);
            $("#fit_yuva_convenors").val(data.fityuva_data.fit_yuva_convenors);
            $("#fit_yuva_key_members").val(data.fityuva_data.fit_yuva_key_members);
            $("#fit_yuva_sponsors").val(data.fityuva_data.fit_yuva_sponsors);
            $("#fit_yuva_brief_report").val(data.fityuva_data.fit_yuva_brief_report);
            $("#fit_yuva_chaitrs_aatma").val(data.fityuva_data.fit_yuva_chaitrs_aatma);
            $("#fit_yuva_abtyp_members").val(data.fityuva_data.fit_yuva_abtyp_members);
            $("#fit_yuva_chief_guest").val(data.fityuva_data.fit_yuva_chief_guest);
            $("#fit_yuva_guest").val(data.fityuva_data.fit_yuva_guest);
            $("#fit_yuva_total").val(data.fityuva_data.fit_yuva_total);
            $("#fit_yuva_prepared_by").val(data.fityuva_data.fit_yuva_prepared_by);
            
            //fyuvasangam_data
            $("#ys_no_new_members").val(data.yuvasangam_data.ys_no_new_members);
            $("#ys_conveynor").val(data.yuvasangam_data.ys_conveynor);
            $("#ys_special_thanks_to").val(data.yuvasangam_data.ys_special_thanks_to);
            $("#ys_brief_reports").val(data.yuvasangam_data.ys_brief_reports);
            $("#ys_prepared_by").val(data.yuvasangam_data.ys_prepared_by);
            
            //tkm_data
            $("#tkm_name").val(data.tkm_data.tkm_name);
            $("#tkm_time").val(data.tkm_data.tkm_time);
            $("#tkm_venue").val(data.tkm_data.tkm_venue);
            $("#tkm_in_association").val(data.tkm_data.tkm_in_association);
            $("#tkm_no_of_participants").val(data.tkm_data.tkm_no_of_participants);
            $("#tkm_convenors").val(data.tkm_data.tkm_convenors);
            $("#tkm_key_members").val(data.tkm_data.tkm_key_members);
            $("#tkm_sponsors").val(data.tkm_data.tkm_sponsors);
            $("#tkm_special_thanks_to").val(data.tkm_data.tkm_special_thanks_to);
            $("#tkm_brief_report").val(data.tkm_data.tkm_brief_report);
            $("#tkm_chaitra_aatma").val(data.tkm_data.tkm_chaitra_aatma);
            $("#tkm_abtyp_members").val(data.tkm_data.tkm_abtyp_members);
            $("#tkm_chief_guest").val(data.tkm_data.tkm_chief_guest);
            $("#tkm_guest").val(data.tkm_data.tkm_guest);
            $("#tkm_total").val(data.tkm_data.tkm_total);
            $("#tkm_total").val(data.tkm_data.tkm_prepared_by);
            
            //branch_id
            $("#yd_date").val(data.yuvadivas_data.yd_date);
            $("#yd_time").val(data.yuvadivas_data.yd_time);
            $("#yd_venue").val(data.yuvadivas_data.yd_venue);
            $("#yd_in_association").val(data.yuvadivas_data.yd_in_association);
            $("#yd_topic").val(data.yuvadivas_data.yd_topic);
            $("#yd_no_of_participants").val(data.yuvadivas_data.yd_no_of_participants);
            $("#yd_convenors").val(data.yuvadivas_data.yd_convenors);
            $("#yd_key_members").val(data.yuvadivas_data.yd_key_members);
            $("#yd_sponsors").val(data.yuvadivas_data.yd_sponsors);
            $("#yd_special_thanks_to").val(data.yuvadivas_data.yd_special_thanks_to);
            $("#yd_brief_reports").val(data.yuvadivas_data.yd_brief_reports);
            $("#yd_note").val(data.yuvadivas_data.yd_note);
            
            
            
            
          }
        });
      }
    </script>
    <script type="text/javascript">
$(function() {
    // Multiple images preview in browser
    var imagesPreview = function(input, placeToInsertImagePreview) {

        if (input.files) {
            var filesAmount = input.files.length;

            for (i = 0; i < filesAmount; i++) {
                var reader = new FileReader();

                reader.onload = function(event) {
                    $($.parseHTML('<img height="100px;" width="100px;">')).attr('src', event.target.result).appendTo(placeToInsertImagePreview);
                }

                reader.readAsDataURL(input.files[i]);
            }
        }

    };

    $('#gallery-photo-add').on('change', function() {
        imagesPreview(this, 'div.gallery');
    });

    $('#gallery-photo-add2').on('change', function() {
        imagesPreview(this, 'div.gallery2');
    });
    $('#gallery-photo-add3').on('change', function() {
        imagesPreview(this, 'div.gallery3');
    });
     $('#gallery-photo-add4').on('change', function() {
        imagesPreview(this, 'div.gallery4');
    });
     $('#gallery-photo-add5').on('change', function() {
        imagesPreview(this, 'div.gallery5');
    });
     $('#gallery-photo-add6').on('change', function() {
        imagesPreview(this, 'div.gallery6');
    });
     $('#gallery-photo-add7').on('change', function() {
        imagesPreview(this, 'div.gallery7');
    });
     $('#gallery-photo-add8').on('change', function() {
        imagesPreview(this, 'div.gallery8');
    });
     $('#gallery-photo-add9').on('change', function() {
        imagesPreview(this, 'div.gallery9');
    });
     $('#gallery-photo-add3').on('change', function() {
        imagesPreview(this, 'div.gallery10');
    });
     $('#gallery-photo-add11').on('change', function() {
        imagesPreview(this, 'div.gallery11');
    });
     $('#gallery-photo-add12').on('change', function() {
        imagesPreview(this, 'div.gallery12');
    });
     $('#gallery-photo-add13').on('change', function() {
        imagesPreview(this, 'div.gallery13');
    });
     $('#gallery-photo-add14').on('change', function() {
        imagesPreview(this, 'div.gallery14');
    });
     $('#gallery-photo-add15').on('change', function() {
        imagesPreview(this, 'div.gallery15');
    });
     $('#gallery-photo-add16').on('change', function() {
        imagesPreview(this, 'div.gallery16');
    });
     $('#gallery-photo-add17').on('change', function() {
        imagesPreview(this, 'div.gallery17');
    });
     $('#gallery-photo-add18').on('change', function() {
        imagesPreview(this, 'div.gallery18');
    });
     $('#gallery-photo-add19').on('change', function() {
        imagesPreview(this, 'div.gallery19');
    });
     $('#gallery-photo-add20').on('change', function() {
        imagesPreview(this, 'div.gallery20');
    });
});
</script>
<script type="text/javascript">
  function onlyOne(checkbox) {
    var checkboxes = document.getElementsByName('new_member_list_updated_on_ys')
    checkboxes.forEach((item) => {
        if (item !== checkbox) item.checked = false
    })
}
</script>
    <script type="text/javascript">
      $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx1").click(function(){
         $("#xarea").show("slow");
         $("#xmnsx1").hide();
         $("#xmnsx").show();
         });
         $("#xmnsx").click(function(){
          $("#xarea").hide("slow");
          $("#xmnsx").hide();
          $("#xmnsx1").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx2").click(function(){
         $("#xarea1").show("slow");
         $("#xmnsx2").hide();
         $("#xmnsx3").show();
         });
         $("#xmnsx3").click(function(){
          $("#xarea1").hide("slow");
          $("#xmnsx3").hide();
          $("#xmnsx2").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx4").click(function(){
         $("#xarea2").show("slow");
         $("#xmnsx4").hide();
         $("#xmnsx5").show();
         });
         $("#xmnsx5").click(function(){
          $("#xarea2").hide("slow");
          $("#xmnsx5").hide();
          $("#xmnsx4").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx6").click(function(){
         $("#xarea3").show("slow");
         $("#xmnsx6").hide();
         $("#xmnsx7").show();
         });
         $("#xmnsx7").click(function(){
          $("#xarea3").hide("slow");
          $("#xmnsx7").hide();
          $("#xmnsx6").show();
         });
    	});
    </script>
    
     <script>
    	$(document).ready(function(){
         $("#xmnsx8").click(function(){
         $("#xarea4").show("slow");
         $("#xmnsx8").hide();
         $("#xmnsx9").show();
         });
         $("#xmnsx9").click(function(){
          $("#xarea4").hide("slow");
          $("#xmnsx9").hide();
          $("#xmnsx8").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx10").click(function(){
         $("#xarea5").show("slow");
         $("#xmnsx10").hide();
         $("#xmnsx11").show();
         });
         $("#xmnsx11").click(function(){
          $("#xarea5").hide("slow");
          $("#xmnsx11").hide();
          $("#xmnsx10").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx12").click(function(){
         $("#xarea6").show("slow");
         $("#xmnsx12").hide();
         $("#xmnsx13").show();
         });
         $("#xmnsx13").click(function(){
          $("#xarea6").hide("slow");
          $("#xmnsx13").hide();
          $("#xmnsx12").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx14").click(function(){
         $("#xarea7").show("slow");
         $("#xmnsx14").hide();
         $("#xmnsx15").show();
         });
         $("#xmnsx15").click(function(){
          $("#xarea7").hide("slow");
          $("#xmnsx15").hide();
          $("#xmnsx14").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx16").click(function(){
         $("#xarea8").show("slow");
         $("#xmnsx16").hide();
         $("#xmnsx17").show();
         });
         $("#xmnsx17").click(function(){
          $("#xarea8").hide("slow");
          $("#xmnsx17").hide();
          $("#xmnsx16").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx20").click(function(){
         $("#xarea9").show("slow");
         $("#xmnsx20").hide();
         $("#xmnsx21").show();
         });
         $("#xmnsx21").click(function(){
          $("#xarea9").hide("slow");
          $("#xmnsx21").hide();
          $("#xmnsx20").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx22").click(function(){
         $("#xarea10").show("slow");
         $("#xmnsx22").hide();
         $("#xmnsx23").show();
         });
         $("#xmnsx23").click(function(){
          $("#xarea10").hide("slow");
          $("#xmnsx23").hide();
          $("#xmnsx22").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx24").click(function(){
         $("#xarea11").show("slow");
         $("#xmnsx24").hide();
         $("#xmnsx25").show();
         });
         $("#xmnsx25").click(function(){
          $("#xarea11").hide("slow");
          $("#xmnsx25").hide();
          $("#xmnsx24").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx26").click(function(){
         $("#xarea12").show("slow");
         $("#xmnsx26").hide();
         $("#xmnsx27").show();
         });
         $("#xmnsx27").click(function(){
          $("#xarea12").hide("slow");
          $("#xmnsx27").hide();
          $("#xmnsx26").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx28").click(function(){
         $("#xarea13").show("slow");
         $("#xmnsx28").hide();
         $("#xmnsx29").show();
         });
         $("#xmnsx29").click(function(){
          $("#xarea13").hide("slow");
          $("#xmnsx29").hide();
          $("#xmnsx28").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx30").click(function(){
         $("#xarea14").show("slow");
         $("#xmnsx30").hide();
         $("#xmnsx31").show();
         });
         $("#xmnsx31").click(function(){
          $("#xarea14").hide("slow");
          $("#xmnsx31").hide();
          $("#xmnsx30").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx32").click(function(){
         $("#xarea15").show("slow");
         $("#xmnsx32").hide();
         $("#xmnsx33").show();
         });
         $("#xmnsx33").click(function(){
          $("#xarea15").hide("slow");
          $("#xmnsx33").hide();
          $("#xmnsx32").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx34").click(function(){
         $("#xarea16").show("slow");
         $("#xmnsx34").hide();
         $("#xmnsx35").show();
         });
         $("#xmnsx35").click(function(){
          $("#xarea16").hide("slow");
          $("#xmnsx35").hide();
          $("#xmnsx34").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx36").click(function(){
         $("#xarea17").show("slow");
         $("#xmnsx36").hide();
         $("#xmnsx37").show();
         });
         $("#xmnsx37").click(function(){
          $("#xarea17").hide("slow");
          $("#xmnsx37").hide();
          $("#xmnsx36").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx38").click(function(){
         $("#xarea18").show("slow");
         $("#xmnsx38").hide();
         $("#xmnsx39").show();
         });
         $("#xmnsx39").click(function(){
          $("#xarea18").hide("slow");
          $("#xmnsx39").hide();
          $("#xmnsx38").show();
         });
    	});
    </script>
    
    
</body>
</html>
        
@extends('user.layouts.app')
@section('header')
<title>ABTYP | User Dashboard</title>
   @include('user.includes.header')
   <style>
        .xhead 
       {
          background: #b30000 !important;
       }
       .backimg
      {
        background-image: url({{asset('/')}}/public/adminassets/dist/img/animate-background1.jpg) !important;
        width: 100%;
        background-size: contain !important;
        background-position: center top !important;
      }
      .main-htext
      {
         font-weight: 600;
         font-size: 30px;
         letter-spacing: 2px;
         font-family: emoji;
         color: #FFF;
      }
   </style>
   @endsection
   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <!--<div class="content-wrapper" style="min-height: 2610px;margin-left: 0px;background: #FFF;">-->
    <div class="content-wrapper backimg" style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 main-htext">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
               @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container">
         <div class="row">
          <!-- left column -->
          <div class="col-md-12">
        <!-- Small boxes (Stat box) -->
        
         <div class="card card-primary">
              <div class="card-header xhead">
                <h3 class="card-title">Monthly Report</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form method="post" action="{{ route('user.monthly-report-submit') }}">
                 @csrf
                 <input type="hidden" name="monthly_report_id" id="monthly_report_id" value="{{ $monthly_report->id }}">

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
                    <input type="number" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone Number" name="ph_no" value="{{$user->phone_no}}" readonly="">
                     @if ($errors->has('ph_no'))
                      <div class="error" style="color:red;">{{ $errors->first('ph_no') }}</div>
                      @endif
                  </div> -->
                  <div class="form-group">
                    <label for="exampleInputEmail1">For The Month Of</label>
                    <input  type="month" class="form-control" id="exampleInputEmail1" placeholder="For The Month Of" data-inputmask-inputformat="yyyy/mm" name="month" onchange="GetUserData(this.value)" value="{{$monthly_report->month}}" readonly="">
                     @if ($errors->has('month'))
                      <div class="error" style="color:red;">{{ $errors->first('month') }}</div>
                      @endif
                  </div>
                   <div class="form-group">
                    <label for="ecw_meeting_date">ECW Meeting Date</label>
                    <input type="date" class="form-control" id="ecw_meeting_date" placeholder="ECW Meeting Date" name="ecw_meeting_date" value="{{$monthly_report->ecw_meeting_date}}" >
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ATDC</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">

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
                    <label for="total_no_of_billing">Total Amount of Billing</label>
                    <input type="number" class="form-control" id="total_no_of_billing" name="total_no_of_billing" placeholder="Total Amount of Billing" value="{{ $monthly_report->total_no_of_billing }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_pathology_patients">Total Number of Pathology Patients</label>
                    <input type="number" class="form-control" id="total_no_of_pathology_patients" name="total_no_of_pathology_patients" placeholder="Total Number of Pathology Patients" value="{{ $monthly_report->total_no_of_pathology_patients   }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="no_of_dental_patients">Number of Dental Patients</label>
                    <input type="number" class="form-control" id="no_of_dental_patients" name="no_of_dental_patients" placeholder="Number of Dental Patients" value="{{ $monthly_report->no_of_dental_patients }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="no_of_x_ray_patients">Number of X-ray Patients</label>
                    <input type="number" class="form-control" id="no_of_x_ray_patients" name="no_of_x_ray_patients" placeholder="Number of X-ray Patients" value="{{ $monthly_report->no_of_x_ray_patients }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="no_of_sonography_patients">Number of Sonography Patients</label>
                    <input type="number" class="form-control" id="no_of_sonography_patients" name="no_of_sonography_patients" placeholder="Number of Sonography Patients" value="{{ $monthly_report->no_of_sonography_patients }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="no_of_opd_patients">Number of OPD Patients</label>
                    <input type="number" class="form-control" id="no_of_opd_patients" name="no_of_opd_patients" placeholder="Number of OPD Patients" value="{{ $monthly_report->no_of_opd_patients }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="total_no_of_inventory_used">Total Amount of Inventory Used</label>
                    <input type="number" class="form-control" id="total_no_of_inventory_used" name="total_no_of_inventory_used" placeholder="Total Amount of Inventory Used" value="{{ $monthly_report->total_no_of_inventory_used }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="special_donation">Any Special Donation of the Month</label>
                    <input type="text" class="form-control" id="special_donation" name="special_donation" placeholder="Any Special Donation of the Month" value="{{ $monthly_report->special_donation }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="special_activity">Special Activity Or Camp</label>
                    <input type="text" class="form-control" id="special_activity" name="special_activity" placeholder="Special Activity Or Camp" value="{{ $monthly_report->special_activity }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="chnage_in_machinery">Any Change in Machinery</label>
                    <input type="text" class="form-control" id="chnage_in_machinery" name="chnage_in_machinery" placeholder="Any Change in Machinery" value="{{ $monthly_report->chnage_in_machinery }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="atdc_key_members">Key Members</label>
                    <input type="text" class="form-control" id="atdc_key_members" name="atdc_key_members" placeholder="Key Members" value="{{ $monthly_report->atdc_key_members }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="brief_reporting">Brief Reporting</label>
                    <input type="text" class="form-control" id="brief_reporting" name="brief_reporting" placeholder="Brief Reporting" value="{{ $monthly_report->brief_reporting }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="atdc_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="atdc_prepared_by" name="atdc_prepared_by" placeholder="Prepared By" value="{{ $monthly_report->atdc_prepared_by }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
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
                  </div>










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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">MBDD</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                      <div class="form-group">
                    <label for="name_of_camps">Number of Camps</label>
                    <input type="number" class="form-control" id="name_of_camps" placeholder="Number of Camps" name="name_of_camps" value="{{ $monthly_report->name_of_camps  }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="Date" name="date" value="{{ $monthly_report->date   }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" placeholder="Time" name="time" value="{{ $monthly_report->time }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="venue">Venue</label>
                    <input type="text" class="form-control" id="venue" placeholder="Venue" name="venue" value="{{ $monthly_report->venue }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="name_of_blood_bank">Name of Blood Bank</label>
                    <input type="text" class="form-control" id="name_of_blood_bank" placeholder="Name of Blood Bank" name="name_of_blood_bank" value="{{ $monthly_report->name_of_blood_bank }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="in_association" placeholder="In Association(if any)" name="in_association" value="{{ $monthly_report->in_association }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="total_units_collected">Total Units Collected</label>
                    <input type="text" class="form-control" id="total_units_collected" placeholder="Total Units Collected" name="total_units_collected" value="{{ $monthly_report->total_units_collected }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="camp_convenors">Camp Convenors</label>
                    <input type="text" class="form-control" id="camp_convenors" placeholder="Camp Convenors" name="camp_convenors" value="{{ $monthly_report->camp_convenors }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="key_members">Key Members</label>
                    <input type="text" class="form-control" id="key_members" placeholder="Key Members" name="key_members" value="{{ $monthly_report->key_members }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="sponsors" placeholder="Sponsors" name="sponsors" value="{{ $monthly_report->sponsors }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="special_thatnks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="special_thatnks_to" placeholder="Special Thanks To" name="special_thatnks_to" value="{{ $monthly_report->special_thatnks_to }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="brief_reports" placeholder="Brief Report" name="brief_reports" value="{{ $monthly_report->brief_reports }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="chaitra_aatma" placeholder="Chaitra Aatma" name="chaitra_aatma" value="{{ $monthly_report->chaitra_aatma }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="abtyp_members" placeholder="ABTYP Members" name="abtyp_members" value="{{ $monthly_report->abtyp_members }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="chief_guest" placeholder="Chief Guest" name="chief_guest" value="{{ $monthly_report->chief_guest }}">
                  </div>


                  <div class="form-group">
                    <label for="guests">Guests</label>
                    <input type="text" class="form-control" id="guests" placeholder="Guests" name="guests" value="{{ $monthly_report->guests }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Total" name="total" value="{{ $monthly_report->total }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="mbdd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="mbdd_prepared_by" placeholder="Prepared By" name="mbdd_prepared_by" value="{{ $monthly_report->mbdd_prepared_by }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
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
                  </div>




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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TTF</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- ====================TTF Form Strt================== --}}
                  
                       <div class="form-group">
                    <label for="ttf_date">Date</label>
                    <input type="date" class="form-control" id="ttf_date" placeholder="Date" name="ttf_date" value="{{ $monthly_report->ttf_date }}"  @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_time">Time</label>
                    <input type="time" class="form-control" id="ttf_time" placeholder="Time" name="ttf_time" value="{{ $monthly_report->ttf_time }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_venue">Venue</label>
                    <input type="text" class="form-control" id="ttf_venue" placeholder="Venue" name="ttf_venue" value="{{ $monthly_report->ttf_venue }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_in_associati">In Association(if any)</label>
                    <input type="text" class="form-control" id="ttf_in_associati" placeholder="In Association(if any)" name="ttf_in_associati" value="{{ $monthly_report->ttf_in_associati }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_number_Of_participants">Number Of participants</label>
                    <input type="text" class="form-control" id="ttf_number_Of_participants" placeholder="Number Of participants" name="ttf_number_Of_participants" value="{{ $monthly_report->ttf_number_Of_participants }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_ndrf_trainer_ame">NDRF Trainer's Name</label>
                    <input type="text" class="form-control" id="ttf_ndrf_trainer_ame" placeholder="NDRF Trainer's Name" name="ttf_ndrf_trainer_ame" value="{{ $monthly_report->ttf_ndrf_trainer_ame }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_stage">Stage</label>
                    <input type="text" class="form-control" id="ttf_stage" placeholder="Stage" name="ttf_stage" value="{{ $monthly_report->ttf_stage }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_convenors">Convenors</label>
                    <input type="text" class="form-control" id="ttf_convenors" placeholder="Convenors" name="ttf_convenors" value="{{ $monthly_report->ttf_convenors }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ttf_key_members" placeholder="Key Members" name="ttf_key_members" value="{{ $monthly_report->ttf_key_members }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ttf_sponsors" placeholder="Sponsors" name="ttf_sponsors" value="{{ $monthly_report->ttf_sponsors }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ttf_special_thanks_to" placeholder="Special Thanks To" name="ttf_special_thanks_to" value="{{ $monthly_report->ttf_special_thanks_to }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="ttf_brief_reports" placeholder="Brief Report" name="ttf_brief_reports" value="{{ $monthly_report->ttf_brief_reports }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="ttf_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="ttf_chaitra_aatma" placeholder="Chaitra Aatma" name="ttf_chaitra_aatma" value="{{ $monthly_report->ttf_chaitra_aatma }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="ttf_abtyp_members" placeholder="ABTYP Members" name="ttf_abtyp_members" value="{{ $monthly_report->ttf_abtyp_members }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="ttf_chief_guest" placeholder="Chief Guest" name="ttf_chief_guest" value="{{ $monthly_report->ttf_chief_guest }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_guests">Guests</label>
                    <input type="text" class="form-control" id="ttf_guests" placeholder="Guests" name="ttf_guests" value="{{ $monthly_report->ttf_guests }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ttf_total">Total</label>
                    <input type="text" class="form-control" id="ttf_total" placeholder="" name="ttf_total" value="{{ $monthly_report->ttf_total }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="ttf_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ttf_prepared_by" placeholder="Total" name="ttf_prepared_by" value="{{ $monthly_report->ttf_prepared_by }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
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
                  </div>
                  



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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> YUVA VAHINI</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="date" class="form-control" id="yuva_vahini_date_form" placeholder="Date Form" name="yuva_vahini_date_form" value="{{ $monthly_report->yuva_vahini_date_form }}"  @if($monthly_report->yuvavahini_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_date_to">Date To</label>
                    <input type="date" class="form-control" id="yuva_vahini_date_to" placeholder="Date To" name="yuva_vahini_date_to" value="{{ $monthly_report->yuva_vahini_date_to }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_time">Time</label>
                    <input type="time" class="form-control" id="yuva_vahini_time" placeholder="Time" name="yuva_vahini_time" value="{{ $monthly_report->yuva_vahini_time }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_Of_days">Number of Days</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_Of_days" placeholder="Number of Days" name="yuva_vahini_no_Of_days" value="{{ $monthly_report->yuva_vahini_no_Of_days }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_of_members">Number of Members</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_members" placeholder="Number of Members" name="yuva_vahini_no_of_members" value="{{ $monthly_report->yuva_vahini_no_of_members }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_total_distance">Total Distance</label>
                    <input type="number" class="form-control" id="yuva_vahini_total_distance" placeholder="Total Distance" name="yuva_vahini_total_distance" value="{{ $monthly_report->yuva_vahini_total_distance }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_no_of_yv_jackets_collected">Number of YV Jackets Collected</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_yv_jackets_collected" placeholder="Number of YV Jackets Collected" name="yuva_vahini_no_of_yv_jackets_collected" value="{{ $monthly_report->yuva_vahini_no_of_yv_jackets_collected }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_availed_abtyp_accomodation">Availed Abtyp's Accomodation</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_abtyp_accomodation" placeholder="Availed Abtyp's Accomodation" name="yuva_vahini_availed_abtyp_accomodation" value="{{ $monthly_report->yuva_vahini_availed_abtyp_accomodation }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_availed_satkar">Availed Satkar</label>
                    <input type="text" class="form-control" id="yuva_vahini_availed_satkar" placeholder="Availed Satkar" name="yuva_vahini_availed_satkar" value="{{ $monthly_report->yuva_vahini_availed_satkar }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="yuva_vahini_brief_report" placeholder="Brief Report" name="yuva_vahini_brief_report" value="{{ $monthly_report->yuva_vahini_brief_report }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yuva_vahini_prepared_by" placeholder="Prepared By" name="yuva_vahini_prepared_by" value="{{ $monthly_report->yuva_vahini_prepared_by }}" @if($monthly_report->yuvavahini_status=='Approve') readonly @endif>
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
                  </div>

                  


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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> EYE DONATION</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="number" class="form-control" id="eye_donate_no_of_eye_donation" placeholder="Number of Eye Donation" name="eye_donate_no_of_eye_donation"  value="{{ $monthly_report->eye_donate_no_of_eye_donation }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_no_ofeye_bank">Number of Eye Bank</label>
                    <input type="number" class="form-control" id="eye_donate_no_ofeye_bank" placeholder="Number of Eye Bank" name="eye_donate_no_ofeye_bank"  value="{{ $monthly_report->eye_donate_no_ofeye_bank }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_kry_members">Key Members</label>
                    <input type="text" class="form-control" id="eye_donate_kry_members" placeholder="Key Members" name="eye_donate_kry_members"  value="{{ $monthly_report->eye_donate_kry_members }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="eye_donate_special_thanks_to" placeholder="Special Thanks To" name="eye_donate_special_thanks_to"  value="{{ $monthly_report->eye_donate_special_thanks_to }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="eye_donate_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="eye_donate_brief_report" placeholder="Brief Report" name="eye_donate_brief_report"  value="{{ $monthly_report->eye_donate_brief_report }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="eye_donate_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="eye_donate_prepared_by" placeholder="Prepared By" name="eye_donate_prepared_by"  value="{{ $monthly_report->eye_donate_prepared_by }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
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
                  </div>

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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">AMPK</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                       <div class="form-group">
                    <label for="ampk_address">Address</label>
                    <input type="text" class="form-control" id="ampk_address" placeholder="Address" name="ampk_address" value="{{ $monthly_report->ampk_address }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="ampk_in_association" placeholder="In Association(if any)" name="ampk_in_association" value="{{ $monthly_report->ampk_in_association }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_chaitra_atma_visited">Chaitra Aatma's Visited</label>
                    <input type="text" class="form-control" id="ampk_chaitra_atma_visited" placeholder="Chaitra Aatma's Visited" name="ampk_chaitra_atma_visited" value="{{ $monthly_report->ampk_chaitra_atma_visited }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_date">Date</label>
                    <input type="date" class="form-control" id="ampk_date" placeholder="Date" name="ampk_date" value="{{ $monthly_report->ampk_date }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_conveynor">Convenors </label>
                    <input type="text" class="form-control" id="ampk_conveynor" placeholder="Conveynor" name="ampk_conveynor" value="{{ $monthly_report->ampk_conveynor }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ampk_key_members" placeholder="Key Members" name="ampk_key_members" value="{{ $monthly_report->ampk_key_members }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ampk_sponsors" placeholder="Sponsors" name="ampk_sponsors" value="{{ $monthly_report->ampk_sponsors }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ampk_special_thanks_to" placeholder="Special Thanks To" name="ampk_special_thanks_to" value="{{ $monthly_report->ampk_special_thanks_to }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="ampk_brief_report" placeholder="Brief Report" name="ampk_brief_report" value="{{ $monthly_report->ampk_brief_report }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ampk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ampk_prepared_by" placeholder="Prepared By" name="ampk_prepared_by" value="{{ $monthly_report->ampk_prepared_by }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
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
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ATJH</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- ==================== ATJH Form Strt================== --}}
                  <div class="form-group">
                    <label for="atjh_address">ADDRESS</label>
                    <input type="text" class="form-control" id="atjh_address" placeholder="" name="atjh_ADDRESS" value="{{ $monthly_report->atjh_ADDRESS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_association">IN ASSOCIATION (IF ANY):</label>
                    <input type="text" class="form-control" id="atjh_association" placeholder="" name="atjh_IN_ASSOCIATION" value="{{ $monthly_report->atjh_IN_ASSOCIATION }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_numer_of_the_occupants">NUMBER OF OCCUPANTS:</label>
                    <input type="text" class="form-control" id="atjh_numer_of_the_occupants" placeholder="" name="atjh_NUMBER_OF_OCCUPANTS" value="{{ $monthly_report->atjh_NUMBER_OF_OCCUPANTS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_tota_strenght">TOTAL STRENGHT:</label>
                    <input type="text" class="form-control" id="atjh_tota_strenght" placeholder="" name="atjh_TOTAL_STRENGHT" value="{{ $monthly_report->atjh_TOTAL_STRENGHT }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_ttal_fee">TOTAL FEE:</label>
                    <input type="text" class="form-control" id="atjh_ttal_fee" placeholder="" name="atjh_TOTAL_FEE" value="{{ $monthly_report->atjh_TOTAL_FEE }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_donation">DONATION:</label>
                    <input type="text" class="form-control" id="atjh_donation" placeholder="" name="atjh_DONATION" value="{{ $monthly_report->atjh_DONATION }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_total_food_expnses">TOTAL FOOD EXPENSES:</label>
                    <input type="text" class="form-control" id="atjh_total_food_expnses" placeholder="" name="atjh_TOTAL_FOOD_EXPENSES" value="{{ $monthly_report->atjh_TOTAL_FOOD_EXPENSES }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_total_salaries">TOTAL SALARIES:</label>
                    <input type="text" class="form-control" id="atjh_total_salaries" placeholder="" name="atjh_TOTAL_SALARIES" value="{{ $monthly_report->atjh_TOTAL_SALARIES }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_total_of_the_expenses">TOTAL OF OTHER EXPENSES:</label>
                    <input type="text" class="form-control" id="atjh_total_of_the_expenses" placeholder="" name="atjh_TOTALOF_OTHER_EXPENSES" value="{{ $monthly_report->atjh_TOTALOF_OTHER_EXPENSES }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_convenors">CONVENORS:</label>
                    <input type="text" class="form-control" id="atjh_convenors" placeholder="" name="atjh_CONVENORS" value="{{ $monthly_report->atjh_CONVENORS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                    <div class="form-group">
                    <label for="atjh_key_members">KEY MEMBERS:</label>
                    <input type="text" class="form-control" id="atjh_key_members" placeholder="" name="atjh_KEY_MEMBERS" value="{{ $monthly_report->atjh_KEY_MEMBERS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_special_thanks_to">SPECIAL THANKS TO:</label>
                    <input type="text" class="form-control" id="atjh_special_thanks_to" placeholder="" name="atjh_SPECIAL_THANKS_TO" value="{{ $monthly_report->atjh_SPECIAL_THANKS_TO }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                    <div class="form-group">
                    <label for="atjh_breif_report">BREIF REPORT:</label>
                    <textarea class="form-control" id="atjh_breif_report" placeholder="NOT MORE THAN 500 WORDS" name="atjh_BREIF_REPORT"> value="{{ $monthly_report->atjh_BREIF_REPORT }}"</textarea>
                  </div>
                    <div class="form-group">
                    <label for="atjh_image">PICTURES (2-4) </label>
                    <input type="file" class="form-control" id="atjh_image" placeholder="" name="atjh_image">
                  </div>
                   <div class="form-group">
                    <label for="atjh_prepared_by">PREPARED BY:  </label>
                    <input type="text" class="form-control" id="atjh_prepared_by" placeholder="" name="atjh_PREPARED_BY" value="{{ $monthly_report->atjh_PREPARED_BY }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ ATJH End ================================ --}}


            



            {{-- ================================ CHOKA SATKAR Start ================================ --}}
            
            @if ($user_list->seva_choka_satkar=='1')
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> CHOKA SATKAR</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                      <div class="form-group">
                    <label for="choka_satkar_date_form">Date Form</label>
                    <input type="date" class="form-control" id="choka_satkar_date_form" placeholder="Date Form" name="choka_satkar_date_form" value="{{ $monthly_report->choka_satkar_date_form }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_date_to">Date To</label>
                    <input type="date" class="form-control" id="choka_satkar_date_to" placeholder="Date To" name="choka_satkar_date_to" value="{{ $monthly_report->choka_satkar_date_to }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_time">Time</label>
                    <input type="time" class="form-control" id="choka_satkar_time" placeholder="Time" name="choka_satkar_time" value="{{ $monthly_report->choka_satkar_time }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="choka_satkar_no_of_days">Number of Days</label>
                    <input type="number" class="form-control" id="choka_satkar_no_of_days" placeholder="Number of Days" name="choka_satkar_no_of_days" value="{{ $monthly_report->choka_satkar_no_of_days }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_amount_paid">Amount Paid</label>
                    <input type="number" class="form-control" id="choka_satkar_amount_paid" placeholder="Amount Paid" name="choka_satkar_amount_paid" value="{{ $monthly_report->choka_satkar_amount_paid }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_sponsor">Sponsor</label>
                    <input type="text" class="form-control" id="choka_satkar_sponsor" placeholder="Sponsor" name="choka_satkar_sponsor" value="{{ $monthly_report->choka_satkar_sponsor }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="choka_satkar_in_association" placeholder="In Association(if any)" name="choka_satkar_in_association" value="{{ $monthly_report->choka_satkar_in_association }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="choka_satkar_special_thanks_to" placeholder="Special Thanks To" name="choka_satkar_special_thanks_to" value="{{ $monthly_report->choka_satkar_special_thanks_to }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="choka_satkar_brief_reports" placeholder="Brief Report" name="choka_satkar_brief_reports" value="{{ $monthly_report->choka_satkar_brief_reports }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkarprepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="choka_satkarprepared_by" placeholder="Prepared By" name="choka_satkarprepared_by" value="{{ $monthly_report->choka_satkarprepared_by }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
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
                  </div>
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
            <!-- @if ($user_list->sanskar_jain_sanskar_vidhi=='1' || $user_list->sanskar_samayik_sadhak=='1' || $user_list->sanskar_tapoyagya=='1' || $user_list->sanskar_cps=='1' || $user_list->sanskar_pd=='1' || $user_list->sanskar_barah_vrat=='1' || $user_list->sanskar_twenty_five_bol=='1' || $user_list->sanskar_jain_vidhya_katyashala=='1' || $user_list->sanskar_yuva_divas=='1')
          <h5 class="mb-2">Sanskar</h5>
          @endif-->
          <div class="row">



            {{-- ================================ JAIN SANSKAR VIDHI Start ================================ --}}

            @if ($user_list->sanskar_jain_sanskar_vidhi=='1')

            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> JAIN SANSKAR VIDHI</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button> 
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="date" class="form-control" id="jsv_date" placeholder="Date" name="jsv_date" value="{{ $monthly_report->jsv_date }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_time">Time</label>
                    <input type="time" class="form-control" id="jsv_time" placeholder="Time" name="jsv_time" value="{{ $monthly_report->jsv_time }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_venue">Venue</label>
                    <input type="text" class="form-control" id="jsv_venue" placeholder="Venue" name="jsv_venue" value="{{ $monthly_report->jsv_venue }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="jsv_in_association" placeholder="In Association(if any)" name="jsv_in_association" value="{{ $monthly_report->jsv_in_association }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="jsv_sanskar_name">Sanskar's Name</label>
                    <input type="text" class="form-control" id="jsv_sanskar_name" placeholder="Sanskar's Name" name="jsv_sanskar_name" value="{{ $monthly_report->jsv_sanskar_name }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_no_of_participant">Number Of participants</label>
                    <input type="text" class="form-control" id="jsv_no_of_participant" placeholder="Number Of participants" name="jsv_no_of_participant" value="{{ $monthly_report->jsv_no_of_participant }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_convenors">Convenors</label>
                    <input type="text" class="form-control" id="jsv_convenors" placeholder="Convenors" name="jsv_convenors" value="{{ $monthly_report->jsv_convenors }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_key_member">Key Members</label>
                    <input type="text" class="form-control" id="jsv_key_member" placeholder="Key Members" name="jsv_key_member" value="{{ $monthly_report->jsv_key_member }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="jsv_sponsors" placeholder="Sponsors" name="jsv_sponsors" value="{{ $monthly_report->jsv_sponsors }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="jsv_specila_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="jsv_specila_thanks_to" placeholder="Special Thanks To" name="jsv_specila_thanks_to" value="{{ $monthly_report->jsv_specila_thanks_to }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="jsv_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="jsv_brief_report" placeholder="Brief Report" name="jsv_brief_report" value="{{ $monthly_report->jsv_brief_report }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="jsv_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="jsv_chaitra_aatma" placeholder="Chaitra Aatma" name="jsv_chaitra_aatma" value="{{ $monthly_report->jsv_chaitra_aatma }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="jsv_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="jsv_abtyp_members" placeholder="ABTYP Members" name="jsv_abtyp_members" value="{{ $monthly_report->jsv_abtyp_members }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="jsv_chief_guest" placeholder="Chief Guest" name="jsv_chief_guest" value="{{ $monthly_report->jsv_chief_guest }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_guest">Guests</label>
                    <input type="text" class="form-control" id="jsv_guest" placeholder="Guests" name="jsv_guest" value="{{ $monthly_report->jsv_guest }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_total">Total</label>
                    <input type="text" class="form-control" id="jsv_total" placeholder="Total" name="jsv_total" value="{{ $monthly_report->jsv_total }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jsv_prepared_by" placeholder="Prepared By" name="jsv_prepared_by" value="{{ $monthly_report->jsv_prepared_by }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
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
                  </div>

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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> SAMAYIK SADHAK</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                      <div class="form-group">
                    <label for="ss_date">Date</label>
                    <input type="date" class="form-control" id="ss_date" placeholder="" name="ss_date" value="{{ $monthly_report->ss_date }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_time">Time</label>
                    <input type="time" class="form-control" id="ss_time" placeholder="" name="ss_time" value="{{ $monthly_report->ss_time }}"  @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_venue">Venue</label>
                    <input type="text" class="form-control" id="ss_venue" placeholder="" name="ss_venue" value="{{ $monthly_report->ss_venue }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="ss_in_association" placeholder="" name="ss_in_association" value="{{ $monthly_report->ss_in_association }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="ss_jain_samayik_festival">Jain Samayik Festival</label>
                    <input type="text" class="form-control" id="ss_jain_samayik_festival" placeholder="" name="ss_jain_samayik_festival" value="{{ $monthly_report->ss_jain_samayik_festival }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_total_participants">Total Participants</label>
                    <input type="text" class="form-control" id="ss_total_participants" placeholder="" name="ss_total_participants" value="{{ $monthly_report->ss_total_participants }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_total_no_of_samayik_sadhak">Total Number of Samayik Sadhak</label>
                    <input type="text" class="form-control" id="ss_total_no_of_samayik_sadhak" placeholder="" name="ss_total_no_of_samayik_sadhak" value="{{ $monthly_report->ss_total_no_of_samayik_sadhak }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="ss_donation_of_samayik_kits">Donation of Samayik Kits</label>
                    <input type="text" class="form-control" id="ss_donation_of_samayik_kits" placeholder="" name="ss_donation_of_samayik_kits" value="{{ $monthly_report->ss_donation_of_samayik_kits }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="ss_conveynor" placeholder="" name="ss_conveynor" value="{{ $monthly_report->ss_conveynor }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_key_member">Key Members</label>
                    <input type="text" class="form-control" id="ss_key_member" placeholder="" name="ss_key_member" value="{{ $monthly_report->ss_key_member }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ss_special_thanks_to" placeholder="" name="ss_special_thanks_to" value="{{ $monthly_report->ss_special_thanks_to }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="ss_brief_report" placeholder="" name="ss_brief_report" value="{{ $monthly_report->ss_brief_report }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ss_prepared_by" placeholder="" name="ss_prepared_by" value="{{ $monthly_report->ss_prepared_by }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
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
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TAPOYAGYA</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="date" class="form-control" id="tapoyaga_date" placeholder="" name="tapoyaga_date" value="{{ $monthly_report->tapoyaga_date }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                <!--   <div class="form-group">
                    <label for="tapoyaga_time">Time</label>
                    <input type="time" class="form-control" id="tapoyaga_time" placeholder="" name="tapoyaga_time">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_venue">Venue</label>
                    <input type="text" class="form-control" id="tapoyaga_venue" placeholder="" name="tapoyaga_venue">
                  </div> -->
<!-- 
                  <div class="form-group">
                    <label for="tapoyaga_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="tapoyaga_in_association" placeholder="" name="tapoyaga_in_association" value="{{ $monthly_report->tapoyaga_in_association }}">
                  </div> -->
                    <div class="form-group">
                    <label for="tapoyaga">Number Of participants</label>
                    <input type="text" class="form-control" id="tapoyaga_no_of_participant" placeholder="Number Of participants" name="tapoyagya_no_of_participants" value="{{ $monthly_report->tapoyagya_no_of_participants }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="tapoyaga_participant_list">Participants List</label>
                    <input type="text" class="form-control" id="tapoyaga_participant_list" placeholder="Participants List" name="tapoyagya_Participants_List" value="{{ $monthly_report->tapoyagya_Participants_List }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="tapoyaga_conveynor" placeholder="" name="tapoyaga_conveynor" value="{{ $monthly_report->tapoyaga_conveynor }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_key_member">Key Members</label>
                    <input type="text" class="form-control" id="tapoyaga_key_member" placeholder="" name="tapoyaga_key_member" value="{{ $monthly_report->tapoyaga_key_member }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="tapoyaga_special_thanks" placeholder="" name="tapoyaga_special_thanks" value="{{ $monthly_report->tapoyaga_special_thanks }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="tapoyaga_brief_report" placeholder="" name="tapoyaga_brief_report" value="{{ $monthly_report->tapoyaga_brief_report }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tapoyaga_prepared_by" placeholder="" name="tapoyaga_prepared_by" value="{{ $monthly_report->tapoyaga_prepared_by }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
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
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> CPS</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="date" class="form-control" id="cps_date_form" placeholder="" name="cps_date" value="{{ $monthly_report->cps_date }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="cps_date_to">Date To</label>
                    <input type="date" class="form-control" id="cps_date_to" placeholder="" name="cps_time" value="{{ $monthly_report->cps_time }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>

                

                  <div class="form-group">
                    <label for="cps_venue">Venue</label>
                    <input type="text" class="form-control" id="cps_venue" placeholder="" name="cps_venue" value="{{ $monthly_report->cps_venue }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="cps_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="cps_in_association" placeholder="" name="cps_in_association" value="{{ $monthly_report->cps_in_association }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="cps_teachers_name">Faculty Name</label>
                    <input type="text" class="form-control" id="cps_Faculty_Name" placeholder="" name="cps_Faculty_Name" value="{{ $monthly_report->cps_Faculty_Name }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="cps_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="cps_NUMBER_OF_PARTICIPANTS" placeholder="" name="cps_NUMBER_OF_PARTICIPANTS" value="{{ $monthly_report->cps_NUMBER_OF_PARTICIPANTS }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="cps_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="cps_conveynor" placeholder="" name="cps_conveynor" value="{{ $monthly_report->cps_conveynor }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="cps_key_members">Key Members</label>
                    <input type="text" class="form-control" id="cps_key_members" placeholder="" name="cps_key_member" value="{{ $monthly_report->cps_key_member }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="cps_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="cps_sponcer" placeholder="" name="cps_sponcer" value="{{ $monthly_report->cps_sponcer }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                       <div class="form-group">
                    <label for="cps_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="cps_special_thanks" placeholder="" name="cps_special_thanks" value="{{ $monthly_report->cps_special_thanks }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                  
                   
                   <div class="form-group">
                    <label for="cps_brief_report">Brief Report</label>
                    <textarea class="form-control" id="cps_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="cps_brief_report"> value="{{ $monthly_report->cps_brief_report }}"</textarea>
                  </div>
                    <div class="form-group">
                    <label for="cps_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="cps_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="cps_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="cps_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="cps_inages" placeholder="NOT MORE THAN 500 WORDS" name="cps_inages">
                  </div>
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="cps_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="cps_chaitra_aatma" placeholder="" name="cps_chaitra_aatma" value="{{ $monthly_report->cps_chaitra_aatma }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="cps_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="cps_abtyp_members" placeholder="" name="cps_abtyp_members" value="{{ $monthly_report->cps_abtyp_members }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="cps_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="cps_chief_guest" placeholder="" name="cps_chief_guest" value="{{ $monthly_report->cps_chief_guest }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="cps_guest">Guests</label>
                    <input type="text" class="form-control" id="cps_guest" placeholder="" name="cps_guest" value="{{ $monthly_report->cps_guest }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="cps_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="cps_total_presesnt" placeholder="" name="cps_total_presesnt" value="{{ $monthly_report->cps_total_presesnt }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="cps_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="cps_prepared_by" placeholder="" name="cps_prepared_by" value="{{ $monthly_report->cps_prepared_by }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>


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
            <div class="col-md-6" >
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">PD</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <input type="date" class="form-control" id="pd_date_form" placeholder="" name="pd_date" value="{{ $monthly_report->pd_date }}" @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="pd_date_to">Date To</label>
                    <input type="date" class="form-control" id="pd_date_to" placeholder="" name="pd_time" value="{{ $monthly_report->pd_time }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>

                

                  <div class="form-group">
                    <label for="pd_venue">Venue</label>
                    <input type="text" class="form-control" id="pd_venue" placeholder="" name="pd_venue" value="{{ $monthly_report->pd_venue }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="pd_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="pd_in_association" placeholder="" name="pd_in_association" value="{{ $monthly_report->pd_in_association }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="pd_teachers_name">Teachers Name</label>
                    <input type="text" class="form-control" id="pd_teachers_name" placeholder="" name="pd_teachers_name" value="{{ $monthly_report->pd_teachers_name }}"@if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="pd_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="pd_no_of_participants" placeholder="" name="pd_no_of_the_paticipants" value="{{ $monthly_report->pd_no_of_the_paticipants }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="pd_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="pd_conveynor" placeholder="" name="pd_convenors" value="{{ $monthly_report->pd_convenors }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="pd_key_members">Key Members</label>
                    <input type="text" class="form-control" id="pd_key_members" placeholder="" name="pd_kry_member" value="{{ $monthly_report->pd_kry_member }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="pd_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="pd_sponcer" placeholder="" name="pd_sponsors" value="{{ $monthly_report->pd_sponsors }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                       <div class="form-group">
                    <label for="pd_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="pd_special_thanks" placeholder="" name="pd_special_thanks_to" value="{{ $monthly_report->pd_special_thanks_to }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                  
                 <!--   <div class="form-group">
                    <label for="pd_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="pd_brief_report" placeholder="" name="pd_brief_report">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="pd_brief_report">Brief Report</label>
                    <textarea class="form-control" id="pd_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="pd_brief_report"> value="{{ $monthly_report->pd_brief_report }}"></textarea>
                  </div>
                    <div class="form-group">
                    <label for="pd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="pd_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="pd_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="pd_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="pd_inages" placeholder="NOT MORE THAN 500 WORDS" name="pd_inages">
                  </div>
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="pd_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="pd_chaitra_aatma" placeholder="" name="pd_chaitra_aatma" value="{{ $monthly_report->pd_chaitra_aatma }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="pd_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="pd_abtyp_members" placeholder="" name="pd_abtyp_members" value="{{ $monthly_report->pd_abtyp_members }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="pd_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="pd_chief_guest" placeholder="" name="pd_chief_guest" value="{{ $monthly_report->pd_chief_guest }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="pd_guest">Guests</label>
                    <input type="text" class="form-control" id="pd_guest" placeholder="" name="pd_guest" value="{{ $monthly_report->pd_guest }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="pd_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="pd_total_presesnt" placeholder="" name="pd_total" value="{{ $monthly_report->pd_total }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="pd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="pd_prepared_by" placeholder="" name="pd_prepared_by" value="{{ $monthly_report->pd_prepared_by }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>




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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> BARAH VRAT</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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

                         <div class="form-group">
                    <label for="bv_date">Date</label>
                    <input type="date" class="form-control" id="bv_date" placeholder="" name="bv_date" value="{{$monthly_report->bv_date}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_time">Time</label>
                    <input type="time" class="form-control" id="bv_time" placeholder="" name="bv_time" value="{{$monthly_report->bv_time}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_venue">Venue</label>
                    <input type="text" class="form-control" id="bv_venue" placeholder="" name="bv_venue" value="{{$monthly_report->bv_venue}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="bv_in_association" placeholder="" name="bv_in_association" value="{{$monthly_report->bv_in_association}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="bv_sanskar_name">Speaker's Name</label>
                    <input type="text" class="form-control" id="bv_sanskar_name" placeholder="" name="bv_sanskar_name" value="{{$monthly_report->bv_sanskar_name}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_no_of_participant">Number Of participants</label>
                    <input type="text" class="form-control" id="bv_no_of_participant" placeholder="" name="bv_no_of_participant" value="{{$monthly_report->bv_no_of_participant}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_convenors">Convenors</label>
                    <input type="text" class="form-control" id="bv_convenors" placeholder="" name="bv_convenors" value="{{$monthly_report->bv_convenors}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_key_members">Key Members</label>
                    <input type="text" class="form-control" id="bv_key_members" placeholder="" name="bv_key_members" value="{{$monthly_report->bv_key_members}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="bv_sponsors" placeholder="" name="bv_sponsors" value="{{$monthly_report->bv_sponsors}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="bv_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="bv_special_thanks_to" placeholder="" name="bv_special_thanks_to" value="{{$monthly_report->bv_special_thanks_to}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="bv_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="bv_brief_report" placeholder="" name="bv_brief_report" value="{{$monthly_report->bv_brief_report}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="bv_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="bv_chaitra_aatma" placeholder="" name="bv_chaitra_aatma" value="{{$monthly_report->bv_chaitra_aatma}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="bv_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="bv_abtyp_members" placeholder="" name="bv_abtyp_members" value="{{$monthly_report->bv_abtyp_members}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="bv_chief_guest" placeholder="" name="bv_chief_guest" value="{{$monthly_report->bv_chief_guest}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_guets">Guests</label>
                    <input type="text" class="form-control" id="bv_guets" placeholder="" name="bv_guets" value="{{$monthly_report->bv_guets}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_total">Total</label>
                    <input type="text" class="form-control" id="bv_total" placeholder="" name="bv_total" value="{{$monthly_report->bv_total}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="bv_prepared_by" placeholder="" name="bv_prepared_by" value="{{$monthly_report->bv_prepared_by}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
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
                  </div>
                  {{-- ==================== BARAH VRAT Form End================== --}}
                 
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
             @endif 
            {{-- ================================ BARAH VRAT End ================================ --}}


            {{-- ================================ BARAH VRAT Start ================================ --}}
           <!--  
            @if ($user_list->sanskar_twenty_five_bol=='1')
            <div class="col-md-6" style="display:none;">
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
                  
                <!-- </div>
              
              </div>
         
            </div>
             @endif  -->
            {{-- ================================ BARAH VRAT End ================================ --}}


            {{-- ================================ JAIN VIDHYA KATYASHALA Start ================================ --}}
            
            @if ($user_list->sanskar_jain_vidhya_katyashala=='1')
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> JAIN VIDHYA KATYASHALA</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- ==================== JAIN VIDHYA KATYASHALA Form End================== --}}
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
                    <input type="date" class="form-control" id="jvk_date_form" placeholder="" name="jvk_date" value="{{$monthly_report->jvk_date}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="jvk_date_to">Date To</label>
                    <input type="date" class="form-control" id="jvk_date_to" placeholder="" name="jvk_time" value="{{$monthly_report->jvk_time}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>

                

                  <div class="form-group">
                    <label for="jvk_venue">Venue</label>
                    <input type="text" class="form-control" id="jvk_venue" placeholder="" name="jvk_venue" value="{{$monthly_report->jvk_venue}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jvk_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="jvk_in_association" placeholder="" name="jvk_in_association" value="{{$monthly_report->jvk_in_association}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  
                    <label for="">ABOUT THE PROGRAM</label>
                    <div class="form-group">
                    <label for="jvk_teachers_name">Teachers Name</label>
                    <input type="text" class="form-control" id="jvk_teachers_name" placeholder="" name="jvk_teachers_name" value="{{$monthly_report->jvk_teachers_name}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="jvk_no_of_the_paticipants">NUMBER OF PARTICIPANTS: </label>
                    <input type="text" class="form-control" id="jvk_no_of_the_paticipants" placeholder="" name="jvk_no_of_participants" value="{{$monthly_report->jvk_no_of_participants}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="jvk_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="jvk_conveynor" placeholder="" name="jvk_convenors" value="{{$monthly_report->jvk_convenors}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="jvk_key_members">Key Members</label>
                    <input type="text" class="form-control" id="jvk_key_members" placeholder="" name="jvk_key_members" value="{{$monthly_report->jvk_key_members}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="jvk_sponcer">Sponsors</label>
                    <input type="text" class="form-control" id="jvk_sponcer" placeholder="" name="jvk_sponsor" value="{{$monthly_report->jvk_sponsor}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                       <div class="form-group">
                    <label for="jvk_special_thanks">Special Thanks</label>
                    <input type="text" class="form-control" id="jvk_special_thanks" placeholder="" name="jvk_special_thanks_to" value="{{$monthly_report->jvk_special_thanks_to}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                  
                <!--    <div class="form-group">
                    <label for="jvk_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="jvk_brief_report" placeholder="" name="jvk_brief_report">
                  </div> -->
                  
                   <div class="form-group">
                    <label for="jvk_brief_report">Brief Report</label>
                    <textarea class="form-control" id="jvk_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="jvk_brief_report"> value="{{$monthly_report->jvk_brief_report}}"</textarea>
                  </div>
                    <div class="form-group">
                    <label for="jvk_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="jvk_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="jvk_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="jvk_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="jvk_inages" placeholder="NOT MORE THAN 500 WORDS" name="jvk_inages">
                  </div>
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="jvk_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="jvk_chaitra_aatma" placeholder="" name="jvk_chaitra_aatma" value="{{$monthly_report->jvk_chaitra_aatma}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jvk_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="jvk_abtyp_members" placeholder="" name="jvk_abtyp_members" value="{{$monthly_report->jvk_abtyp_members}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="jvk_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="jvk_chief_guest" placeholder="" name="jvk_chief_guest" value="{{$monthly_report->jvk_chief_guest}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="jvk_guest">Guests</label>
                    <input type="text" class="form-control" id="jvk_guest" placeholder="" name="jvk_guest" value="{{$monthly_report->jvk_guest}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="jvk_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="jvk_total_presesnt" placeholder="" name="jvk_total" value="{{$monthly_report->jvk_total}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="jvk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jvk_prepared_by" placeholder="" name="jvk_prepared_by" value="{{$monthly_report->jvk_prepared_by}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">  YUVA DIVAS</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                  {{-- ==================== YUVA DIVAS Form End================== --}}
                 <div class="form-group">
                    <label for="yd_date">Date</label>
                    <input type="date" class="form-control" id="yd_date" placeholder="" name="yd_date" value="{{$monthly_report->yd_date}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yd_time">Time</label>
                    <input type="time" class="form-control" id="yd_time" placeholder="" name="yd_time" value="{{$monthly_report->yd_time}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yd_venue">Venue</label>
                    <input type="text" class="form-control" id="yd_venue" placeholder="" name="yd_venue" value="{{$monthly_report->yd_venue}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yd_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="yd_in_association" placeholder="" name="yd_in_association" value="{{$monthly_report->yd_in_association}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                   <label for="">ABOUT THE PROGRAM</label>
                  
                  <div class="form-group">
                    <label for="yd_topic">TOPIC</label>
                    <input type="text" class="form-control" id="yd_topic" placeholder="" name="yd_topic" value="{{$monthly_report->yd_topic}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_no_of_participants">NUMBER OF PARTICIPANTS:</label>
                    <input type="text" class="form-control" id="yd_no_of_participants" placeholder="" name="yd_no_of_participants" value="{{$monthly_report->yd_no_of_participants}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_convenors">CONVENORS</label>
                    <input type="text" class="form-control" id="yd_convenors" placeholder="" name="yd_convenors" value="{{$monthly_report->yd_convenors}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_key_members">KEY MEMBERS</label>
                    <input type="text" class="form-control" id="yd_key_members" placeholder="" name="yd_key_members" value="{{$monthly_report->yd_key_members}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_sponsors">SPONSORS</label>
                    <input type="text" class="form-control" id="yd_sponsors" placeholder="" name="yd_sponsors" value="{{$monthly_report->yd_sponsors}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_special_thanks_to">SPECIAL THANKS TO:</label>
                    <input type="text" class="form-control" id="yd_special_thanks_to" placeholder="" name="yd_special_thanks_to" value="{{$monthly_report->yd_special_thanks_to}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  <div class="form-group">
                    <label for="yd_brief_reports">BREIF REPORT</label>
                    <textarea class="form-control" id="yd_brief_reports" placeholder="NOT MORE THAN 500 WORDS" name="yd_brief_reports"> value="{{$monthly_report->yd_brief_reports}}"</textarea>
                  </div>
                  <div class="form-group">
                    <label for="yd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="yd_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="yd_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="yd_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="yd_inages" placeholder="NOT MORE THAN 500 WORDS" name="yd_inages">
                  </div>
                    
                  <label for="">PRESENCE IN THE PROGRAM</label>

                  <div class="form-group">
                    <label for="yd_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="yd_chaitra_aatma" placeholder="" name="yuvadivas_Chaitra_Aatma" value="{{$monthly_report->yuvadivas_Chaitra_Aatma}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yd_abtyp_members">ABTYP Members</label>
                    <input type="text" class="form-control" id="yd_abtyp_members" placeholder="" name="yuvadivas_ABTYP" value="{{$monthly_report->yuvadivas_ABTYP}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="yd_chief_guest">Chief Guest</label>
                    <input type="text" class="form-control" id="yd_chief_guest" placeholder="" name="yuvadivas_Chief_Guest" value="{{$monthly_report->yuvadivas_Chief_Guest}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="yd_guest">Guests</label>
                    <input type="text" class="form-control" id="yd_guest" placeholder="" name="yuvadivas_Guests" value="{{$monthly_report->yuvadivas_Guests}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>


                  <div class="form-group">
                    <label for="yd_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="yd_total_presesnt" placeholder="" name="yuvadivas_Total" value="{{$monthly_report->yuvadivas_Total}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="yd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yd_prepared_by" placeholder="" name="yuvadivas_Prepared" value="{{$monthly_report->yuvadivas_Prepared}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>
                  
                  
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
            
          <!-- @if ($user_list->sangathan_tkm=='1' || $user_list->sangathan_yuva_sangam=='1' || $user_list->sangathan_fit_yuva=='1' || $user_list->sangathan_jtn=='1' || $user_list->sangathan_sankalp_sangathan_yatra=='1' || $user_list->sangathan_sargam=='1' || $user_list->sangathan_abtyp_direct=='1' )
          <h5 class="mb-2">Sangathan</h5>
          @endif-->
          <div class="row">
            {{-- ================================ TKM Start ================================ --}}

            @if ($user_list->sangathan_tkm=='1')
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">TKM</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <label for="tkm_venue">Venue</label>
                    <input type="text" class="form-control" id="tkm_venue" placeholder="" name="tkm_venue">
                  </div>

                  <div class="form-group">
                    <label for="tkm_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="tkm_in_association" placeholder="" name="tkm_in_association">
                  </div>

                  
                  <div class="form-group">
                    <label for="tkm_no_of_participants">Number Of participants</label>
                    <input type="text" class="form-control" id="tkm_no_of_participants" placeholder="" name="tkm_no_of_participants">
                  </div>

                  <div class="form-group">
                    <label for="tkm_convenors">Convenors</label>
                    <input type="text" class="form-control" id="tkm_convenors" placeholder="" name="tkm_convenors">
                  </div>

                  <div class="form-group">
                    <label for="tkm_key_members">Key Members</label>
                    <input type="text" class="form-control" id="tkm_key_members" placeholder="" name="tkm_key_members">
                  </div>

                  <div class="form-group">
                    <label for="tkm_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="tkm_sponsors" placeholder="" name="tkm_sponsors">
                  </div>


                  <div class="form-group">
                    <label for="tkm_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="tkm_special_thanks_to" placeholder="" name="tkm_special_thanks_to">
                  </div>

                   <div class="form-group">
                    <label for="tkm_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="tkm_brief_report" placeholder="" name="tkm_brief_report">
                  </div>

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

                  <div class="form-group">
                    <label for="tkm_total">Total</label>
                    <input type="text" class="form-control" id="tkm_total" placeholder="" name="tkm_total">
                  </div>

                  <div class="form-group">
                    <label for="tkm_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tkm_prepared_by" placeholder="" name="tkm_prepared_by">
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
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> YUVA SANGAM</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <label for="ys_no_new_members">TYP</label>
                    <input type="text" class="form-control" id="ys_no_new_members" placeholder="" name="ys_no_new_members">
                  </div>

                      <div class="form-group">
                    <label for="ys_no_new_members">TKM</label>
                    <input type="text" class="form-control" id="ys_tkm" placeholder="" name="ys_no_new_members">
                  </div>

                  <div class="form-group">
                    <label for="ys_conveynor">Conveynor</label>
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
                    <label for="ys_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ys_prepared_by" placeholder="" name="ys_prepared_by">
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
                  </div>
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
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> FIT YUVA</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse"><i class="fas fa-plus"></i>
                    </button>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body">
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
                    <label for="fit_yuva_event">Event</label>
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

                  <div class="form-group">
                    <label for="fit_yuva_total">Total</label>
                    <input type="text" class="form-control" id="fit_yuva_total" placeholder="" name="fit_yuva_total">
                  </div>

                  <div class="form-group">
                    <label for="fit_yuva_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="fit_yuva_prepared_by" placeholder="" name="fit_yuva_prepared_by">
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
                  </div>
                  {{-- ==================== FIT YUVA Form End================== --}}
                  
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
            @endif 
            {{-- ================================ FIT YUVA End ================================ --}}



            
            {{-- ================================ JTN Start ================================ --}}

            <!-- @if ($user_list->sangathan_jtn=='1')
            <div class="col-md-6" style="display:none;">
              <div class="card card-primary collapsed-card">
                <div class="card-header">
                  <h3 class="card-title"> JTN</h3>

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
            
           <!--  @if ($user_list->sangathan_sankalp_sangathan_yatra=='1')
            <div class="col-md-6" style="display:none;">
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
           
          <!--  @if ($user_list->sangathan_sargam=='1')
            <div class="col-md-6" style="display:none;">
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

         <!--    @if ($user_list->sangathan_abtyp_direct=='1')
            <div class="col-md-6" style="display:none;">
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
                    <label for="other_activity">Any Other Activity Done This Month</label>
                    <textarea type="text" class="form-control" id="other_activity" placeholder="Any Other Activity Done This Month" name="other_activity" >{{$monthly_report->other_activity}}</textarea>
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
                  </div>
                 <div class="form-group">
                    <label for="filled_by">Filled By</label>
                    <input type="text" class="form-control" id="filled_by" placeholder="Filled By" name="filled_by" value="{{$monthly_report->filled_by}}">
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



        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @endsection
@section('footer')
    @include('user.includes.footer')
    
@endsection


 
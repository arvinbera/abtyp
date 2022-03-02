<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('user.newinclude.head')

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
                    
                    
<!--    ==========================================================main content===============================================================================-->
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
                    <label for="ecw_meeting_date">Last EWC Meeting held on</label>
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
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">ATDC</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx42"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx43"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea20">

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
                    <label for="center_name">Center Name</label>
                    <input type="number" class="form-control" id="center_name" name="center_name" placeholder="Center Name" value="{{ $monthly_report->center_name }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>
                        
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
                    <label for="special_donation">Amount of Special Donation of the month</label>
                    <input type="text" class="form-control" id="special_donation" name="special_donation" placeholder="Any Special Donation of the Month" value="{{ $monthly_report->special_donation }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="special_activity">Number of Doctor Visit in Center</label>
                    <input type="text" class="form-control" id="special_activity" name="special_activity" placeholder="enter no of doctor visit in center" value="{{ $monthly_report->special_activity }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="atdc_special_activity_or_camp">Special Activity or Camp</label>
                    <input type="file" class="form-control" id="atdc_special_activity_or_camp" name="" placeholder="Any Change in Machinery" accept=".xlsx, .xls, .csv">
                  </div>
                  
                   <div class="form-group">
                    <label for="chnage_in_machinery">Any Change in Machinery</label>
                    <input type="file" class="form-control" id="chnage_in_machinery" name="chnage_in_machinery[]" placeholder="Any Change in Machinery" accept=".xlsx, .xls, .csv">
                  </div>

                  <div class="form-group">
                    <label for="atdc_key_members">Key Members</label>
                    <input type="text" class="form-control" id="atdc_key_members" name="atdc_key_members" placeholder="Key Members" value="{{ $monthly_report->atdc_key_members }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="brief_reporting">Brief Reporting (Problems can also be mentioned)</label>
                    <input type="text" class="form-control" id="brief_reporting" name="brief_reporting" placeholder="Brief Reporting" value="{{ $monthly_report->brief_reporting }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div>

                  <!-- <div class="form-group">
                    <label for="atdc_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="atdc_prepared_by" name="atdc_prepared_by" placeholder="Prepared By" value="{{ $monthly_report->atdc_prepared_by }}" @if($monthly_report->atdc_status=='Approve') readonly @endif>
                  </div> -->
                   <div class="form-group">
                    <label for="atdc_total_amount_of_collection_at_amms">Total AMount of Collection at AMMS</label>
                    <input type="file" class="form-control" id="atdc_total_amount_of_collection_at_amms" name="atdc_total_amount_of_collection_at_amms[]" placeholder="Total AMount of Collection at AMMS" accept=".xlsx, .xls, .csv">
                  </div>
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInput" name="atdc_images[]" multiple="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  <div class="gallery"></div>

                  
                @if($monthly_report->atdc_images != 'null')
                   <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->atdc_images))
                   
                     @php
                $img=$monthly_report->atdc_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif










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
                  <h3 class="card-title">MBDD</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx44"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx45"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea21">
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
                    <input type="number" class="form-control" id="name_of_camps" placeholder="Number of Camps" name="name_of_camps" value="{{ $monthly_report->name_of_camps  }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div> -->


                  <div class="form-group">
                    <label for="date">Date</label>
                    <input type="date" class="form-control" id="date" placeholder="Date" name="date" value="{{ $monthly_report->date   }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                  <!-- <div class="form-group">
                    <label for="time">Time</label>
                    <input type="time" class="form-control" id="time" placeholder="Time" name="time" value="{{ $monthly_report->time }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div> -->

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
                    <label for="mbdd_total_units_collected">Total Units Collected</label>
                    <input type="file" class="form-control" id="mbdd_total_units_collected" name="mbdd_total_units_collected[]" placeholder="Total Units Collected" accept=".xlsx, .xls, .csv">
                  </div>

                  <!-- <div class="form-group">
                    <label for="total">Total</label>
                    <input type="text" class="form-control" id="total" placeholder="Total" name="total" value="{{ $monthly_report->total }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="mbdd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="mbdd_prepared_by" placeholder="Prepared By" name="mbdd_prepared_by" value="{{ $monthly_report->mbdd_prepared_by }}" @if($monthly_report->mbdd_status=='Approve') readonly @endif>
                  </div> -->
                  
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
                  @if($monthly_report->mbdd_images != 'null')
                  <div class="container">
                       <div class="row">
                           
                   
                     @php
                $img=$monthly_report->mbdd_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                  
                           
                       </div>
                   </div>
                   
                   @endif
                  
                  




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
                  <h3 class="card-title">TTF</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx46"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx47"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea22">
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

                 <!--  <div class="form-group">
                    <label for="ttf_stage">Stage</label>
                    <input type="text" class="form-control" id="ttf_stage" placeholder="Stage" name="ttf_stage" value="{{ $monthly_report->ttf_stage }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div> -->

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

                 <!--  <div class="form-group">
                    <label for="ttf_total">Total</label>
                    <input type="text" class="form-control" id="ttf_total" placeholder="" name="ttf_total" value="{{ $monthly_report->ttf_total }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div> -->

                   <!-- <div class="form-group">
                    <label for="ttf_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ttf_prepared_by" placeholder="Total" name="ttf_prepared_by" value="{{ $monthly_report->ttf_prepared_by }}" @if($monthly_report->ttf_status=='Approve') readonly @endif>
                  </div> -->
                  
                    <div class="form-group">
                    <label for="ttf_prepared_by">Number of Participants</label>
                    <input type="file" class="form-control" id="ttf_number_of_participants" placeholder="Number of Participants" name="ttf_number_of_participants[]" accept=".xlsx, .xls, .csv">
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
                   @if($monthly_report->ttf_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->ttf_images))
                   
                     @php
                $img=$monthly_report->ttf_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                    @endif



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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx48"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx49"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea23">
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

                  <!-- <div class="form-group">
                    <label for="yuva_vahini_time">Time</label>
                    <input type="time" class="form-control" id="yuva_vahini_time" placeholder="Time" name="yuva_vahini_time" value="{{ $monthly_report->yuva_vahini_time }}">
                  </div> -->

                   <div class="form-group">
                    <label for="yuva_vahini_no_Of_days">Number of Days</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_Of_days" placeholder="Number of Days" name="yuva_vahini_no_Of_days" value="{{ $monthly_report->yuva_vahini_no_Of_days }}">
                  </div>

                   <div class="form-group">
                    <label for="yuva_vahini_no_of_members">Number of Members</label>
                    <input type="number" class="form-control" id="yuva_vahini_no_of_members" placeholder="Number of Members" name="yuva_vahini_no_of_members" value="{{ $monthly_report->yuva_vahini_no_of_members }}">
                  </div>

                  <div class="form-group">
                    <label for="yuva_vahini_total_distance">Total Distance Covered</label>
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

                 <!--  <div class="form-group">
                    <label for="yuva_vahini_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yuva_vahini_prepared_by" placeholder="Prepared By" name="yuva_vahini_prepared_by" value="{{ $monthly_report->yuva_vahini_prepared_by }}" @if($monthly_report->yuvavahini_status=='Approve') readonly @endif>
                  </div> -->
                  
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
                  @if($monthly_report->yuvavahini_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->yuvavahini_images))
                   
                     @php
                $img=$monthly_report->yuvavahini_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif

                  


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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx50"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx51"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea24">
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
                    <label for="eye_donate_no_ofeye_bank">Name of Eye Bank</label>
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

                  <!-- <div class="form-group">
                    <label for="eye_donate_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="eye_donate_prepared_by" placeholder="Prepared By" name="eye_donate_prepared_by"  value="{{ $monthly_report->eye_donate_prepared_by }}" @if($monthly_report->eyedonation_status=='Approve') readonly @endif>
                  </div> -->
                  
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
                  @if($monthly_report->eye_donation_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->eye_donation_images))
                   
                     @php
                $img=$monthly_report->eye_donation_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif

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
                  <h3 class="card-title">AMPK</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx52"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx53"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea25">
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
                    <input type="text" class="form-control" id="ampk_address" placeholder="Address" name="ampk_address" value="{{ $monthly_report->ampk_address }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div> -->

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

                  <!-- <div class="form-group">
                    <label for="ampk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ampk_prepared_by" placeholder="Prepared By" name="ampk_prepared_by" value="{{ $monthly_report->ampk_prepared_by }}" @if($monthly_report->ampk_status=='Approve') readonly @endif>
                  </div> -->
                  
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
                  @if($monthly_report->ampk_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->ampk_images))
                   
                     @php
                $img=$monthly_report->ampk_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
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
                  <h3 class="card-title">ATJH</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx54"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx55"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea26">
                  {{-- ==================== ATJH Form Strt================== --}}
                  <!-- <div class="form-group">
                    <label for="atjh_address">ADDRESS</label>
                    <input type="text" class="form-control" id="atjh_address" placeholder="" name="atjh_ADDRESS" value="{{ $monthly_report->atjh_ADDRESS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="atjh_association">IN ASSOCIATION (IF ANY):</label>
                    <input type="text" class="form-control" id="atjh_association" placeholder="" name="atjh_IN_ASSOCIATION" value="{{ $monthly_report->atjh_IN_ASSOCIATION }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div> -->
                   <div class="form-group">
                    <label for="atjh_numer_of_the_occupants">NUMBER OF OCCUPANTS:</label>
                    <input type="text" class="form-control" id="atjh_numer_of_the_occupants" placeholder="" name="atjh_NUMBER_OF_OCCUPANTS" value="{{ $monthly_report->atjh_NUMBER_OF_OCCUPANTS }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_tota_strenght"> Staff Strength:</label>
                    <input type="text" class="form-control" id="atjh_tota_strenght" placeholder="" name="atjh_TOTAL_STRENGHT" value="{{ $monthly_report->atjh_TOTAL_STRENGHT }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_ttal_fee">Total Monthly Fees:</label>
                    <input type="text" class="form-control" id="atjh_ttal_fee" placeholder="" name="atjh_TOTAL_FEE" value="{{ $monthly_report->atjh_TOTAL_FEE }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
                  </div>
                  <div class="form-group">
                    <label for="atjh_donation">Sponsors:</label>
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
                    <textarea class="form-control" id="atjh_breif_report" placeholder="NOT MORE THAN 500 WORDS" name="atjh_BREIF_REPORT"> {{ $monthly_report->atjh_BREIF_REPORT }}</textarea>
                  </div>
                    <div class="form-group">
                    <label for="atjh_image">PICTURES (2-4) </label>
                    <input type="file" class="form-control" id="atjh_image" placeholder="" name="atjh_image">
                  </div>
                  @if($monthly_report->atjh_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->atjh_images))
                   
                     @php
                $img=$monthly_report->atjh_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                    @endif
                   <!-- <div class="form-group">
                    <label for="atjh_prepared_by">PREPARED BY:  </label>
                    <input type="text" class="form-control" id="atjh_prepared_by" placeholder="" name="atjh_PREPARED_BY" value="{{ $monthly_report->atjh_PREPARED_BY }}" @if($monthly_report->atjh_status=='Approve') readonly @endif>
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx56"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx57"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea27">
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
                    <input type="date" class="form-control" id="choka_satkar_date_form" placeholder="Date Form" name="choka_satkar_date_form" value="{{ $monthly_report->choka_satkar_date_form }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_date_to">Date To</label>
                    <input type="date" class="form-control" id="choka_satkar_date_to" placeholder="Date To" name="choka_satkar_date_to" value="{{ $monthly_report->choka_satkar_date_to }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div> -->

                 <!--  <div class="form-group">
                    <label for="choka_satkar_time">Time</label>
                    <input type="time" class="form-control" id="choka_satkar_time" placeholder="Time" name="choka_satkar_time" value="{{ $monthly_report->choka_satkar_time }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div> -->

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

                  <!-- <div class="form-group">
                    <label for="choka_satkar_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="choka_satkar_in_association" placeholder="In Association(if any)" name="choka_satkar_in_association" value="{{ $monthly_report->choka_satkar_in_association }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div> -->

                  <div class="form-group">
                    <label for="choka_satkar_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="choka_satkar_special_thanks_to" placeholder="Special Thanks To" name="choka_satkar_special_thanks_to" value="{{ $monthly_report->choka_satkar_special_thanks_to }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="choka_satkar_brief_reports" placeholder="Brief Report" name="choka_satkar_brief_reports" value="{{ $monthly_report->choka_satkar_brief_reports }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div>

                  <!-- <div class="form-group">
                    <label for="choka_satkarprepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="choka_satkarprepared_by" placeholder="Prepared By" name="choka_satkarprepared_by" value="{{ $monthly_report->choka_satkarprepared_by }}" @if($monthly_report->chokasatar_status=='Approve') readonly @endif>
                  </div> -->
                  
                  
                 <!--  <div class="form-group">
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
                  </div>-->
           <!--       @if($monthly_report->chokasatar_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->chokasatar_images))
                   
                     @php
                $img=$monthly_report->chokasatar_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                    @endif-->
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx58"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx59"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea28">
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

                  <!-- <div class="form-group">
                    <label for="jsv_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="jsv_in_association" placeholder="In Association(if any)" name="jsv_in_association" value="{{ $monthly_report->jsv_in_association }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div> -->

                   <div class="form-group">
                    <label for="jsv_sanskar_name"> Sanskarak Name (2 - 3)</label>
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

                  <!-- <div class="form-group">
                    <label for="jsv_total">Total</label>
                    <input type="text" class="form-control" id="jsv_total" placeholder="Total" name="jsv_total" value="{{ $monthly_report->jsv_total }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="jsv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jsv_prepared_by" placeholder="Prepared By" name="jsv_prepared_by" value="{{ $monthly_report->jsv_prepared_by }}" @if($monthly_report->jsv_status=='Approve') readonly @endif>
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

                  
                <!--   <div class="form-group">
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
                  @if($monthly_report->jsv_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->jsv_images))
                   
                     @php
                $img=$monthly_report->jsv_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
-->
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx60"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx61"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea29">
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
                    <input type="date" class="form-control" id="ss_date" placeholder="" name="ss_date" value="{{ $monthly_report->ss_date }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_time">Time</label>
                    <input type="time" class="form-control" id="ss_time" placeholder="" name="ss_time" value="{{ $monthly_report->ss_time }}"  @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div> -->

                  <div class="form-group">
                    <label for="ss_venue">Venue</label>
                    <input type="text" class="form-control" id="ss_venue" placeholder="" name="ss_venue" value="{{ $monthly_report->ss_venue }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="ss_in_association">In Association (if any) (3 - 4)</label>
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
                    <label for="ss_total_no_of_samayik_sadhak">Total Number of New Samayik Sadhak</label>
                    <input type="text" class="form-control" id="ss_total_no_of_samayik_sadhak" placeholder="" name="ss_total_no_of_samayik_sadhak" value="{{ $monthly_report->ss_total_no_of_samayik_sadhak }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div>

                   <div class="form-group">
                    <label for="ss_donation_of_samayik_kits">Number of Samayik Kits Distributed</label>
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

                 <!--  <div class="form-group">
                    <label for="ss_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ss_prepared_by" placeholder="" name="ss_prepared_by" value="{{ $monthly_report->ss_prepared_by }}" @if($monthly_report->samayiksadhak_status=='Approve') readonly @endif>
                  </div> -->
                  
                  
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
                  @if($monthly_report->ss_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->ss_images))
                   
                     @php
                $img=$monthly_report->ss_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx62"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx63"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea30">
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
                    <input type="file" class="form-control" id="tapoyaga_participant_list" placeholder="Participants List" name="tapoyagya_Participants_List">
                  </div>

                  <div class="form-group">
                    <label for="tapoyaga_conveynor">Convenors</label>
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

                 <!-- <div class="form-group">
                    <label for="tapoyaga_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tapoyaga_prepared_by" placeholder="" name="tapoyaga_prepared_by" value="{{ $monthly_report->tapoyaga_prepared_by }}" @if($monthly_report->tapoyagya_status=='Approve') readonly @endif>
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
                        <input type="file" class="custom-file-input" id="exampleInput" name="">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  @if($monthly_report->tapoyaga_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->tapoyaga_images))
                   
                     @php
                $img=$monthly_report->tapoyaga_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                    @endif
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
                  <h3 class="card-title"> CPS</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx64"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx65"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea31">
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
                    <label for="cps_teachers_name">Faculty Name (4 - 5 Names)</label>
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
                    <label for="cps_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font></label>
                    <input type="file" class="form-control" id="gallery-photo-add12" placeholder="NOT MORE THAN 500 WORDS" name="cps_images[]" multiple="" accept=".ppt,image/*,video/*,">
                  </div>
                   <div class="gallery12"></div>
                   <!--<div class="form-group">
                    <label for="cps_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="cps_inages" placeholder="NOT MORE THAN 500 WORDS" name="cps_inages">
                  </div>
                   @if($monthly_report->cps_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->cps_images))
                   
                     @php
                $img=$monthly_report->cps_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif-->
                    
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


                  <!-- <div class="form-group">
                    <label for="cps_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="cps_total_presesnt" placeholder="" name="cps_total_presesnt" value="{{ $monthly_report->cps_total_presesnt }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="cps_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="cps_prepared_by" placeholder="" name="cps_prepared_by" value="{{ $monthly_report->cps_prepared_by }}" @if($monthly_report->cps_status=='Approve') readonly @endif>
                  </div> -->


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
                  <h3 class="card-title">PD</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx66"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx67"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea32">
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
                    <textarea class="form-control" id="pd_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="pd_brief_report"> {{ $monthly_report->pd_brief_report }}></textarea>
                  </div>
                    <div class="form-group">
                    <label for="pd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="pd_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="pd_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="pd_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="pd_inages" placeholder="NOT MORE THAN 500 WORDS" name="pd_inages">
                  </div>
                   @if($monthly_report->pd_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->pd_images))
                   
                     @php
                $img=$monthly_report->pd_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
                    
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


                  <!-- <div class="form-group">
                    <label for="pd_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="pd_total_presesnt" placeholder="" name="pd_total" value="{{ $monthly_report->pd_total }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="pd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="pd_prepared_by" placeholder="" name="pd_prepared_by" value="{{ $monthly_report->pd_prepared_by }}"  @if($monthly_report->pd_status=='Approve') readonly @endif>
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx68"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx69"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea33">
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
                    <input type="date" class="form-control" id="bv_date" placeholder="" name="bv_date" value="{{$monthly_report->bv_date}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="bv_time">Time</label>
                    <input type="time" class="form-control" id="bv_time" placeholder="" name="bv_time" value="{{$monthly_report->bv_time}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div> -->

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

                   <!-- <div class="form-group">
                    <label for="bv_chaitra_aatma">Chaitra Aatma</label>
                    <input type="text" class="form-control" id="bv_chaitra_aatma" placeholder="" name="bv_chaitra_aatma" value="{{$monthly_report->bv_chaitra_aatma}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div> -->

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

                  <!-- <div class="form-group">
                    <label for="bv_total">Total</label>
                    <input type="text" class="form-control" id="bv_total" placeholder="" name="bv_total" value="{{$monthly_report->bv_total}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div> -->

                  <!-- <div class="form-group">
                    <label for="bv_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="bv_prepared_by" placeholder="" name="bv_prepared_by" value="{{$monthly_report->bv_prepared_by}}"  @if($monthly_report->barahvarat_status=='Approve') readonly @endif>
                  </div> -->
                  
                  
                   <div class="form-group">
                    <label for="exampleInput">Image Upload <font color="red">(Images / Videos / Presentation)</font> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInput" name="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  @if($monthly_report->bv_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->bv_images))
                   
                     @php
                $img=$monthly_report->bv_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
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
            <div class="col-md-6">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> JAIN VIDHYA KATYASHALA</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx70"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx71"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea34">
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
                    <textarea class="form-control" id="jvk_brief_report" placeholder="NOT MORE THAN 500 WORDS" name="jvk_brief_report"> {{$monthly_report->jvk_brief_report}}</textarea>
                  </div>
             <!--       <div class="form-group">
                    <label for="jvk_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="jvk_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="jvk_participants_list">
                  </div>
                   <div class="form-group">
                    <label for="jvk_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="jvk_inages" placeholder="NOT MORE THAN 500 WORDS" name="jvk_inages">
                  </div>
                  @if($monthly_report->jvk_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->jvk_images))
                   
                     @php
                $img=$monthly_report->jvk_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif-->
                    
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
                    <label for="jvk_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font>></label>
                    <input type="file" class="form-control" id="gallery-photo-add15" placeholder="NOT MORE THAN 500 WORDS" name="jvk_images[]" multiple="">
                  </div>
                   <div class="gallery15"></div>

                  <!-- <div class="form-group">
                    <label for="jvk_total_presesnt">Total </label>
                    <input type="text" class="form-control" id="jvk_total_presesnt" placeholder="" name="jvk_total" value="{{$monthly_report->jvk_total}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div>
                   <div class="form-group">
                    <label for="jvk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="jvk_prepared_by" placeholder="" name="jvk_prepared_by" value="{{$monthly_report->jvk_prepared_by}}" @if($monthly_report->jvk_status=='Approve') readonly @endif>
                  </div> -->
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
                  <h3 class="card-title">  YUVA DIVAS</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx72"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx73"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea35">
                  {{-- ==================== YUVA DIVAS Form End================== --}}
                 <!-- <div class="form-group">
                    <label for="yd_date">Date</label>
                    <input type="date" class="form-control" id="yd_date" placeholder="" name="yd_date" value="{{$monthly_report->yd_date}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div>

                  <div class="form-group">
                    <label for="yd_time">Time</label>
                    <input type="time" class="form-control" id="yd_time" placeholder="" name="yd_time" value="{{$monthly_report->yd_time}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div> -->

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
                    <textarea class="form-control" id="yd_brief_reports" placeholder="NOT MORE THAN 500 WORDS" name="yd_brief_reports"> {{$monthly_report->yd_brief_reports}}</textarea>
                  </div>
                 <!-- <div class="form-group">
                    <label for="yd_participants_list">UPLOAD THE PARTICIPANTS LIST</label>
                    <input type="file" class="form-control" id="yd_participants_list" placeholder="NOT MORE THAN 500 WORDS" name="yd_participants_list">
                  </div>-->
                   
                    
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
                   <!-- <div class="form-group">
                    <label for="yd_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="yd_prepared_by" placeholder="" name="yuvadivas_Prepared" value="{{$monthly_report->yuvadivas_Prepared}}" @if($monthly_report->yuvadivas_status=='Approve') readonly @endif>
                  </div> -->
                  
                             <div class="form-group">
<font color="red">(Images / Videos / Presentation)</font>
                    <label for="yd_inages">Pictures(2-4) </label>
                    <input type="file" class="form-control" id="gallery-photo-add16" placeholder="NOT MORE THAN 500 WORDS" name="yd_images[]" multiple="" accept=".ppt,image/*,video/*,">
                  </div>
                  <div class="gallery16"></div>
                  
                  
                  
                  
           <!--       <div class="form-group">
                    <label for="yd_inages">Pictures(2-4)</label>
                    <input type="file" class="form-control" id="yd_inages" placeholder="NOT MORE THAN 500 WORDS" name="yd_inages">
                  </div>
                   @if($monthly_report->yd_images != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->yd_images))
                   
                     @php
                $img=$monthly_report->yd_images;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                   @endif
                  -->
                  
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
                  <h3 class="card-title">TKM</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx74"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx75"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea36">
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
                    <label for="tkm_total">Total</label>
                    <input type="text" class="form-control" id="tkm_total" placeholder="" name="tkm_total">
                  </div>

                  <div class="form-group">
                    <label for="tkm_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="tkm_prepared_by" placeholder="" name="tkm_prepared_by">
                  </div> -->
                  
                  <div class="form-group">
                    <label for="tkm_inages">Pictures(2-4) <font color="red">(Images / Videos / Presentation)</font></label>
                    <input type="file" class="form-control" id="gallery-photo-add17" placeholder="NOT MORE THAN 500 WORDS" name="tkm_images[]" multiple="" accept=".ppt,image/*,video/*,"
>
                  </div>
                  <div class="gallery17"></div>
                  
                  <!-- <div class="form-group">
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
                  </div>-->
                  
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
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx76"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx77"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea37">
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

                   <!-- <div class="form-group">
                    <label for="ys_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ys_prepared_by" placeholder="" name="ys_prepared_by">
                  </div> -->
                   
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
            <div class="col-md-12">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title"> FIT YUVA</h3>

                  <div class="card-tools">
                    <div>
                        <i class="fa fa-plus-circle mymns" aria-hidden="true" id="xmnsx78"></i> 
               	  	 	<i class="fa fa-minus-circle mymns" aria-hidden="true" id="xmnsx79"></i> 
                    </div>
                  </div>
                  <!-- /.card-tools -->
                </div>
                <!-- /.card-header -->
                <div class="card-body" id="xarea38">
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
                  </div>

                  <div class="form-group">
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
              <!--     <div class="form-group">
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
                  -->
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
            <div class="col-md-6">
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
           
          <!--  @if ($user_list->sangathan_sargam=='1')
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

         <!--    @if ($user_list->sangathan_abtyp_direct=='1')
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
                    <textarea type="text" class="form-control" id="other_activity" placeholder="Additional achievements / Participation / Activity done this month" name="other_activity" >{{$monthly_report->other_activity}}</textarea>
                  </div>
                  
                  <div class="form-group">
                    <label for="exampleInput">Image Upload <font color="red">(Images / Videos / Presentation)</font> </label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInput" name="" accept=".ppt,image/*,video/*,">
                        <label class="custom-file-label" for="exampleInput">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text">Upload</span>
                      </div>
                    </div>
                  </div>
                  @if($monthly_report->monthly_report_photo != 'null')
                  <div class="container">
                       <div class="row">
                            @if(isset($monthly_report->monthly_report_photo))
                   
                     @php
                $img=$monthly_report->monthly_report_photo;
                $filenames = json_decode($img);
                     @endphp
                @foreach ($filenames as $singlefilename) 
                           
                           <div class="col-lg-3 col-md-6 mt-2 mb-2">
                              <div class="outshape">
                                  <img src="{{asset('public/projectimage/'.$singlefilename)}}"  width="100%" height="100">
                              </div> 
                           </div>
                           @endforeach
                   @endif
                           
                       </div>
                   </div>
                    @endif
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


<!--    ==========================================================main content===============================================================================-->
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
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
         $("#xmnsx42").click(function(){
         $("#xarea20").show("slow");
         $("#xmnsx42").hide();
         $("#xmnsx43").show();
         });
         $("#xmnsx43").click(function(){
          $("#xarea20").hide("slow");
          $("#xmnsx43").hide();
          $("#xmnsx42").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx44").click(function(){
         $("#xarea21").show("slow");
         $("#xmnsx44").hide();
         $("#xmnsx45").show();
         });
         $("#xmnsx45").click(function(){
          $("#xarea21").hide("slow");
          $("#xmnsx45").hide();
          $("#xmnsx44").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx46").click(function(){
         $("#xarea22").show("slow");
         $("#xmnsx46").hide();
         $("#xmnsx47").show();
         });
         $("#xmnsx47").click(function(){
          $("#xarea22").hide("slow");
          $("#xmnsx47").hide();
          $("#xmnsx46").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx48").click(function(){
         $("#xarea23").show("slow");
         $("#xmnsx48").hide();
         $("#xmnsx49").show();
         });
         $("#xmnsx49").click(function(){
          $("#xarea23").hide("slow");
          $("#xmnsx49").hide();
          $("#xmnsx48").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx50").click(function(){
         $("#xarea24").show("slow");
         $("#xmnsx50").hide();
         $("#xmnsx51").show();
         });
         $("#xmnsx51").click(function(){
          $("#xarea24").hide("slow");
          $("#xmnsx51").hide();
          $("#xmnsx50").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx52").click(function(){
         $("#xarea25").show("slow");
         $("#xmnsx52").hide();
         $("#xmnsx53").show();
         });
         $("#xmnsx53").click(function(){
          $("#xarea25").hide("slow");
          $("#xmnsx53").hide();
          $("#xmnsx52").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx54").click(function(){
         $("#xarea26").show("slow");
         $("#xmnsx54").hide();
         $("#xmnsx55").show();
         });
         $("#xmnsx55").click(function(){
          $("#xarea26").hide("slow");
          $("#xmnsx55").hide();
          $("#xmnsx54").show();
         });
    	});
    </script>
    
     <script>
    	$(document).ready(function(){
         $("#xmnsx56").click(function(){
         $("#xarea27").show("slow");
         $("#xmnsx56").hide();
         $("#xmnsx57").show();
         });
         $("#xmnsx57").click(function(){
          $("#xarea27").hide("slow");
          $("#xmnsx57").hide();
          $("#xmnsx56").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx58").click(function(){
         $("#xarea28").show("slow");
         $("#xmnsx58").hide();
         $("#xmnsx59").show();
         });
         $("#xmnsx59").click(function(){
          $("#xarea28").hide("slow");
          $("#xmnsx59").hide();
          $("#xmnsx58").show();
         });
    	});
    </script>
    
     <script>
    	$(document).ready(function(){
         $("#xmnsx60").click(function(){
         $("#xarea29").show("slow");
         $("#xmnsx60").hide();
         $("#xmnsx61").show();
         });
         $("#xmnsx61").click(function(){
          $("#xarea29").hide("slow");
          $("#xmnsx61").hide();
          $("#xmnsx60").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx62").click(function(){
         $("#xarea30").show("slow");
         $("#xmnsx62").hide();
         $("#xmnsx63").show();
         });
         $("#xmnsx63").click(function(){
          $("#xarea30").hide("slow");
          $("#xmnsx63").hide();
          $("#xmnsx62").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx64").click(function(){
         $("#xarea31").show("slow");
         $("#xmnsx64").hide();
         $("#xmnsx65").show();
         });
         $("#xmnsx65").click(function(){
          $("#xarea31").hide("slow");
          $("#xmnsx65").hide();
          $("#xmnsx64").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx66").click(function(){
         $("#xarea32").show("slow");
         $("#xmnsx66").hide();
         $("#xmnsx67").show();
         });
         $("#xmnsx67").click(function(){
          $("#xarea32").hide("slow");
          $("#xmnsx67").hide();
          $("#xmnsx66").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx68").click(function(){
         $("#xarea33").show("slow");
         $("#xmnsx68").hide();
         $("#xmnsx69").show();
         });
         $("#xmnsx69").click(function(){
          $("#xarea33").hide("slow");
          $("#xmnsx69").hide();
          $("#xmnsx68").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx70").click(function(){
         $("#xarea34").show("slow");
         $("#xmnsx70").hide();
         $("#xmnsx71").show();
         });
         $("#xmnsx71").click(function(){
          $("#xarea34").hide("slow");
          $("#xmnsx71").hide();
          $("#xmnsx70").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx72").click(function(){
         $("#xarea35").show("slow");
         $("#xmnsx72").hide();
         $("#xmnsx73").show();
         });
         $("#xmnsx73").click(function(){
          $("#xarea35").hide("slow");
          $("#xmnsx73").hide();
          $("#xmnsx72").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx74").click(function(){
         $("#xarea36").show("slow");
         $("#xmnsx74").hide();
         $("#xmnsx75").show();
         });
         $("#xmnsx75").click(function(){
          $("#xarea36").hide("slow");
          $("#xmnsx75").hide();
          $("#xmnsx74").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx76").click(function(){
         $("#xarea37").show("slow");
         $("#xmnsx76").hide();
         $("#xmnsx77").show();
         });
         $("#xmnsx77").click(function(){
          $("#xarea37").hide("slow");
          $("#xmnsx77").hide();
          $("#xmnsx76").show();
         });
    	});
    </script>
    
    <script>
    	$(document).ready(function(){
         $("#xmnsx78").click(function(){
         $("#xarea38").show("slow");
         $("#xmnsx78").hide();
         $("#xmnsx79").show();
         });
         $("#xmnsx79").click(function(){
          $("#xarea38").hide("slow");
          $("#xmnsx79").hide();
          $("#xmnsx78").show();
         });
    	});
    </script>
    
</body>

</html>
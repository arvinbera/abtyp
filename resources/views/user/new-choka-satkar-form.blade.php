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
                            <h3 class="card-title">CHOKA SATKAR</h3>
                           
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-12">
                            <form method="post" action="{{ route('user.choka-satkar-report-submit') }}" enctype="multipart/form-data" class="dropzone">
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
         
          @endif
          <div class="row">
       
              {{-- ================================ CHOKA SATKAR Start ================================ --}}
            
            @if ($user_list->seva_choka_satkar=='1')
            <div class="col-md-12">
              <div class="card card-primary collapsed-card">
            
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
    

    
    
</body>
</html>
        
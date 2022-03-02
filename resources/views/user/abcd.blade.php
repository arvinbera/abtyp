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
<?php //print_r($detail_report);die?>
<div class="page">
        <div class="page-main">

            @include('user.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

      @include('user.newinclude.header')
      <div class="page-header">
                        <div class="page-leftheader">
                            <h3 class="card-title">ACHARYA TULSI DIAGNOSTIC CENTER</h3>
                           
                        </div>
        </div>
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
         
            
              <!-- /.card-header -->
              <!-- form start -->
              <form  method="POST" action="{{ route('submit-edit-of-monthly-report') }}" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="slot_id" class="form-control" value="">
           <input type="hidden" name="monthly_report_id"
 value="{{$detail_report[0]->monthly_report_id}}" />         
           <input type="hidden" name="id" value="{{$detail_monthly_report->id}}"/>
        
                <div class="card-body">

                  <div class="form-group">
                      
                  
                    <label for="exampleInputPassword1">Parishad Name</label>
                    <input type="text" name="username" value="{{$detail_report[0]->username}}" class="form-control" id="exampleInputPassword1" placeholder="">
                     
                      <div class="error" style="color:red;"></div>
                     
                  </div>
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
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Center Name</label>
                      <input type="text" name="center_name" value="{{$detail_monthly_report->center_name}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Total Amount Of Billing</label>
                      <input type="text" name="total_no_of_billing" value="{{$detail_monthly_report->total_no_of_billing}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div> 
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Total Number Of Pathology Patients</label>
                      <input type="text" name="total_no_of_pathology_patients" value="{{$detail_monthly_report->total_no_of_pathology_patients}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Number Of Dental Patients</label>
                      <input type="text" name="no_of_dental_patients" value="{{$detail_monthly_report->no_of_dental_patients}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Number Of X-Ray Patients</label>
                      <input type="text" name="no_of_x_ray_patients" value="{{$detail_monthly_report->no_of_x_ray_patients}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Number Of Sonography Patients</label>
                      <input type="text" name="no_of_sonography_patients" value="{{$detail_monthly_report->no_of_sonography_patients}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Number Of OPD Patients</label>
                      <input type="text" name="no_of_opd_patients" value="{{$detail_monthly_report->no_of_opd_patients}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Total Amount Of Inventory Used</label>
                      <input type="text" name="total_no_of_inventory_used" value="{{$detail_monthly_report->total_no_of_inventory_used}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Amount Of Special Donation of The Month</label>
                      <input type="text" name="special_donation" value="{{$detail_monthly_report->special_donation}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Number of Doctor visit in Center</label>
                      <input type="text" name="special_activity" value="{{$detail_monthly_report->special_activity}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Key Members</label>
                      <input type="text" name="atdc_key_members" value="{{$detail_monthly_report->atdc_key_members}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Filled By</label>
                      <input type="text" name="filled_by" value="{{$detail_report[0]->filled_by}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
                  <div class="form-group">
                      
                      <div class="form-group">
                      <label for="exampleInputPassword1">Role</label>
                      <input type="text" name="filled_by_role" value="{{$detail_report[0]->filled_by_role}}" class="form-control" id="exampleInputPassword1" placeholder="">
                       
                        <div class="error" style="color:red;"></div>
                       
                  </div>
  
                </div>
                
                
                
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
    @include('user.newinclude.footer') 
  </div>
</body>
@extends('admin.layouts.app')
@section('header')
<title>ABTYP | Admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Edit User</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Edit User</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Edit User <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{url('/admin/user-update')}}" enctype="multipart/form-data">
                @csrf
                
                <input type="hidden" name="edit_user_id" value="{{$user->id}}">
                <input type="hidden" name="edit_user_permission_id" value="{{$user_permission->id}}">
                
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{$user->name}}">
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{$user->email}}">
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Email Phone No</label>
                    <input type="number" name="phone_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone No" value="{{$user->phone_no}}">
                  </div>

                  <div class="form-group">
                        <label>State</label>
                        <select class="form-control" name="state" id="state" >
                           @if(isset($state_list))
                             @foreach($state_list as $state)
                          <option value="{{ $state->state_name }}" @if($user->state==$state->state_name) selected="" @endif>{{ $state->state_name }}</option>
                          @endforeach
                           @endif
                        </select>
                      </div>


                <!-- <div class="form-group">
                  <label>Branch</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a Branch" data-dropdown-css-class="select2-purple" style="width: 100%;" name="branch_id[]">
                    @if(isset($branch_list))
                        @foreach($branch_list as $branch)
                            @php $ubf=0; @endphp
                            @foreach($user_branch as $ub)
                                @if($branch->id == $ub->branch_id)
                                    @php $ubf=1; @endphp
                                @endif
                            @endforeach
                                <option value="{{ $branch->id }}" @if($ubf==1) selected="" @endif>{{ $branch->name }}</option>
                            @php $ubf=2; @endphp
                        @endforeach
                    @endif
                     
                    </select>
                  </div>
                </div>-->
                 



                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" value="{{$user->address}}">
                  </div>

{{-- ============================================SEVA start========================================================= --}}

                  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">SEVA</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" name="seva_atdc" value="1" @if($user_permission->seva_atdc==1) checked="" @endif>
                        <label for="checkboxPrimary1">
                           ATDC
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2" name="seva_mbdd" value="1" @if($user_permission->seva_mbdd==1) checked="" @endif>
                        <label for="checkboxPrimary2">
                           MBDD
                        </label>
                      </div>
                       </div>
                  </div>
                  
                 <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="TTF" name="seva_ttf" value="1" @if($user_permission->seva_ttf==1) checked="" @endif>
                        <label for="TTF">
                           TTF
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVAVAHINI" name="seva_yuva_vahini" value="1" @if($user_permission->seva_yuva_vahini==1) checked="" @endif>
                        <label for="YUVAVAHINI">
                            YUVA VAHINI
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="EYEDONATION" name="seva_eye_donation" value="1" @if($user_permission->seva_eye_donation==1) checked="" @endif>
                        <label for="EYEDONATION">
                            EYE DONATION
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="AMPK" name="seva_ampk" value="1" @if($user_permission->seva_ampk==1) checked="" @endif>
                        <label for="AMPK">
                            AMPK
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="ATJH" name="seva_atjh" value="1" @if($user_permission->seva_atjh==1) checked="" @endif>
                        <label for="ATJH">
                           ATJH
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="CHOKASATKAR" name="seva_choka_satkar" value="1" @if($user_permission->seva_choka_satkar==1) checked="" @endif>
                        <label for="CHOKASATKAR">
                           CHOKA SATKAR
                        </label>
                      </div>
                       </div>
                     </div>
                   </div>
                 </div>
               </div>
                 
{{-- ============================================SEVA start========================================================= --}}




{{-- ============================================Sanskar start========================================================= --}}

                  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Sanskar</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JAIN_SANSKAR_VIDHI" name="sanskar_jain_sanskar_vidhi" value="1" @if($user_permission->sanskar_jain_sanskar_vidhi==1) checked="" @endif>
                        <label for="JAIN_SANSKAR_VIDHI">
                             JAIN SANSKAR VIDHI
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="SAMAYIKSADHAK" name="sanskar_samayik_sadhak" value="1" @if($user_permission->sanskar_samayik_sadhak==1) checked="" @endif>
                        <label for="SAMAYIKSADHAK">
                            SAMAYIK SADHAK
                        </label>
                      </div>
                       </div>
                  </div>
                  
                 <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="TAPOYAGYA" name="sanskar_tapoyagya" value="1" @if($user_permission->sanskar_tapoyagya==1) checked="" @endif>
                        <label for="TAPOYAGYA">
                           TAPOYAGYA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="CPS" name="sanskar_cps" value="1" @if($user_permission->sanskar_cps==1) checked="" @endif>
                        <label for="CPS">
                            CPS
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="PD" name="sanskar_pd" value="1" @if($user_permission->sanskar_pd==1) checked="" @endif>
                        <label for="PD">
                           PD
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVADIVAS" name="sanskar_yuva_divas" value="1" @if($user_permission->sanskar_yuva_divas==1) checked="" @endif>
                        <label for="YUVADIVAS">
                             YUVA DIVAS
                        </label>
                       </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="BARAHVRAT" name="sanskar_barah_vrat" value="1" @if($user_permission->sanskar_barah_vrat==1) checked="" @endif>
                        <label for="BARAHVRAT">
                             BARAH VRAT
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="25BOL" name="sanskar_twenty_five_bol" value="1" @if($user_permission->sanskar_twenty_five_bol==1) checked="" @endif>
                        <label for="25BOL">
                           25 BOL
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JAIN_VIDHYA_KATYASHALA" name="sanskar_jain_vidhya_katyashala" value="1" @if($user_permission->sanskar_jain_vidhya_katyashala==1) checked="" @endif>
                        <label for="JAIN_VIDHYA_KATYASHALA">
                            JAIN VIDHYA KATYASHALA
                        </label>
                       </div>
                       </div>
                        
                     </div>
                   </div>
                 </div>
               </div>
                
{{-- ============================================Sanskar END========================================================= --}}

{{-- ============================================Sangathan Start========================================================= --}}


                  <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title">Sangathan</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="TKM" name="sangathan_tkm" value="1" @if($user_permission->sangathan_tkm==1) checked="" @endif>
                        <label for="TKM">
                           TKM
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVASANGAM" name="sangathan_yuva_sangam" value="1" @if($user_permission->sangathan_yuva_sangam==1) checked="" @endif>
                        <label for="YUVASANGAM">
                           YUVA SANGAM
                        </label>
                      </div>
                       </div>
                  </div>
                  
                 <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="FITYUVA" name="sangathan_fit_yuva" value="1" @if($user_permission->sangathan_fit_yuva==1) checked="" @endif>
                        <label for="FITYUVA">
                            FIT YUVA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JTN" name="sangathan_jtn" value="1" @if($user_permission->sangathan_jtn==1) checked="" @endif>
                        <label for="JTN">
                            JTN
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6"
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="SANKALPSANGATHANYATRA" name="sangathan_sankalp_sangathan_yatra" value="1" @if($user_permission->sangathan_sankalp_sangathan_yatra==1) checked="" @endif>
                        <label for="SANKALPSANGATHANYATRA">
                             SANKALP SANGATHAN YATRA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="SARGAM" name="sangathan_sargam" value="1" @if($user_permission->sangathan_sargam==1) checked="" @endif>
                        <label for="SARGAM">
                            SARGAM
                        </label>
                      </div>
                       </div>
                  </div>

                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="ABTYPDIRECT" name="sangathan_abtyp_direct" value="1" @if($user_permission->sangathan_abtyp_direct==1) checked="" @endif> 
                        <label for="ABTYPDIRECT">
                           ABTYP DIRECT
                        </label>
                      </div>
                       </div>
                       
                     </div>
                   </div>
                 </div>
               </div>
{{-- ============================================Sangathan END========================================================= --}}


                 
                </div>
                <!-- /.card-body -->
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
  </div>

   @endsection
@section('footer')
    @include('admin.includes.footer')
@endsection


 
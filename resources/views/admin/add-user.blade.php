@extends('admin.layouts.app')
@section('header')
<title>ABTYP | Admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
   <style>
    .xhead 
    {
      background: #b30000 !important;
    }
   </style>
@endsection
   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Add Parishad</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Add Parishad</li>
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
              <div class="card-header xhead">
                <h3 class="card-title">Add Parishad <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('admin.add-user.submit') }}" enctype="multipart/form-data">
           @csrf
                <div class="card-body">
                  <div class="form-group">

                    <label for="exampleInputEmail1"> Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Name" value="{{ old('name') }}">
                    @if ($errors->has('name'))
                      <div class="error" style="color:red;">{{ $errors->first('name') }}</div>
                      @endif
                   
                  </div>


                  <div class="form-group">
                    <label for="exampleInputEmail1">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" value="{{ old('email') }}">
                     @if ($errors->has('email'))
                      <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                      @endif
                  </div>

                   <div class="form-group">
                    <label for="exampleInputEmail1">Email Phone No</label>
                    <input type="number" name="phone_no" class="form-control" id="exampleInputEmail1" placeholder="Enter Phone No" value="{{ old('phone_no') }}">
                     @if ($errors->has('phone_no'))
                      <div class="error" style="color:red;">{{ $errors->first('phone_no') }}</div>
                      @endif
                  </div>

                  <div class="form-group">
                        <label>State</label>
                        <select class="form-control" name="state" id="state" onchange="GetBranch(this.value)">
                            
                          <option value="">Select State</option>
                           @if(isset($state_list))
                             @foreach($state_list as $state)
                          <option value="{{$state->state_name}}">{{ $state->state_name }}</option>
                          @endforeach
                           @endif
                        </select>
                        @if ($errors->has('state'))
                      <div class="error" style="color:red;">{{ $errors->first('state') }}</div>
                      @endif
                      </div>


                 <!-- <div class="form-group">
                  <label>Parishad</label>
                  <div class="select2-purple">
                    <select class="select2" multiple="multiple" data-placeholder="Select a Parishad" data-dropdown-css-class="select2-purple" style="width: 100%;" name="branch_id[]" id="branch_list">
                       @if(isset($branch_list))
                             @foreach($branch_list as $branch)
                       <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                      @endforeach
                           @endif
                     
                    </select>
                    @if ($errors->has('branch_id'))
                      <div class="error" style="color:red;">{{ $errors->first('branch_id') }}</div>
                      @endif
                  </div>
                </div> -->








                 
                      <!-- select -->
                      {{-- <div class="form-group">
                        <label>Select</label>
                        <select name="branch_id" class="form-control" value="{{ old('email') }}">
                        	 @if(isset($branch_list))
                             @foreach($branch_list as $branch)
                          <option value="{{ $branch->id }}">{{ $branch->name }}</option>
                          @endforeach
                           @endif
                        </select>
                        @if ($errors->has('email'))
                      <div class="error" style="color:red;">{{ $errors->first('email') }}</div>
                      @endif
                      </div> --}}
                




                  <div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" value="{{ old('address') }}"> @if ($errors->has('address'))
                      <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                      @endif
                  </div>

{{-- ============================================SEVA start========================================================= --}}

                  <div class="card card-success">
              <div class="card-header xhead">
                <h3 class="card-title">SEVA</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary1" name="seva_atdc" value="1" checked="">
                        <label for="checkboxPrimary1">
                           ATDC
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="checkboxPrimary2" name="seva_mbdd" value="1" checked="">
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
                        <input type="checkbox" id="TTF" name="seva_ttf" value="1" checked="">
                        <label for="TTF">
                           TTF
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVAVAHINI" name="seva_yuva_vahini" value="1" checked="">
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
                        <input type="checkbox" id="EYEDONATION" name="seva_eye_donation" value="1" checked="">
                        <label for="EYEDONATION">
                            EYE DONATION
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="AMPK" name="seva_ampk" value="1" checked="">
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
                        <input type="checkbox" id="ATJH" name="seva_atjh" value="1" checked="">
                        <label for="ATJH">
                           ATJH
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="CHOKASATKAR" name="seva_choka_satkar" value="1" checked="">
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
              <div class="card-header xhead">
                <h3 class="card-title">Sanskar</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JAIN_SANSKAR_VIDHI" name="sanskar_jain_sanskar_vidhi" value="1" checked="">
                        <label for="JAIN_SANSKAR_VIDHI">
                             JAIN SANSKAR VIDHI
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="SAMAYIKSADHAK" name="sanskar_samayik_sadhak" value="1" checked="">
                        <label for="SAMAYIKSADHAK" >
                            SAMAYIK SADHAK
                        </label>
                      </div>
                       </div>
                  </div>
                  
                 <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="TAPOYAGYA" name="sanskar_tapoyagya" value="1" checked="">
                        <label for="TAPOYAGYA">
                           TAPOYAGYA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="CPS" name="sanskar_cps" value="1" checked="">
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
                        <input type="checkbox" id="PD" name="sanskar_pd" value="1" checked="">
                        <label for="PD">
                           PD
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVADIVAS" name="sanskar_yuva_divas" value="1" checked="">
                        <label for="YUVADIVAS">
                             YUVA DIVAS
                        </label>
                       </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="BARAHVRAT" name="sanskar_barah_vrat" value="1" checked="">
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
                        <input type="checkbox" id="25BOL" name="sanskar_twenty_five_bol" value="1" checked="">
                        <label for="25BOL">
                           25 BOL
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JAIN_VIDHYA_KATYASHALA" name="sanskar_jain_vidhya_katyashala" value="1" checked="">
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
              <div class="card-header xhead">
                <h3 class="card-title">Sangathan</h3>
              </div>
              <div class="card-body">
                <!-- Minimal style -->
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="TKM" name="sangathan_tkm" value="1" checked="">
                        <label for="TKM">
                           TKM
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="YUVASANGAM" name="sangathan_yuva_sangam" value="1" checked="">
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
                        <input type="checkbox" id="FITYUVA" name="sangathan_fit_yuva" value="1" checked="">
                        <label for="FITYUVA">
                            FIT YUVA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="JTN" name="sangathan_jtn" value="1" checked="">
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
                        <input type="checkbox" id="SANKALPSANGATHANYATRA" name="sangathan_sankalp_sangathan_yatra" value="1" checked="">
                        <label for="SANKALPSANGATHANYATRA">
                             SANKALP SANGATHAN YATRA
                        </label>
                      </div>
                       </div>
                       <div class="form-group clearfix">
                      <div class="icheck-primary d-inline">
                        <input type="checkbox" id="SARGAM" name="sangathan_sargam" value="1"  checked="">
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
                        <input type="checkbox" id="ABTYPDIRECT" name="sangathan_abtyp_direct" value="1"  checked=""> 
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







               
               

                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password" >
                     @if ($errors->has('password'))
                      <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                      @endif
                  </div>
                 
                </div>
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger xhead">Submit</button>
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
    <script>
        function GetBranch(state){
            //alert(state);
            $("#branch_list").html('');
            $.ajax({
                type:'GET',
                url:'{{url('/admin/get-branch')}}/'+state,
                success:function(result){
                    //alert(result);
                    $("#branch_list").html(result);
                }
            });
        }
    </script>
@endsection


 
@extends('user.layouts.app')
@section('header')
<title>ABTYP | user Dashboard</title>
   @include('user.includes.header')
   @endsection
   @section('sidebar')
   @include('user.includes.sidebar')
@endsection
         
   @section('content')


    <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
          
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              
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
            <!-- general form elements -->
            

           
            <!-- /.card -->

            <!-- Input addon -->
            <div class="card card-info">
              <div class="card-header">
                <h3 class="card-title">Filter</h3>
              </div>
              <form method="post" action="{{ route('user.ttf-list') }}">
                @csrf
              <div class="card-body">

                <div class="row">
                  <div class="col-lg-6">
                    <div class="form-group">
                  <label>Start Month:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="month" class="form-control" name="startmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" >
                  </div>
                  <!-- /.input group -->
                </div>


                    <!-- /input-group -->
                  </div>
                  <!-- /.col-lg-6 -->
                  <div class="col-lg-6">
                    <div class="form-group">
                  <label>End Month:</label>

                  <div class="input-group">
                    <div class="input-group-prepend">
                      <span class="input-group-text"><i class="far fa-calendar-alt"></i></span>
                    </div>
                    <input type="month" class="form-control" name="endmonth" data-inputmask-alias="datetime"  data-mask="" inputmode="numeric" value="<?php $today=date('Y-m'); echo $today; ?>" >
                  </div>
                  <!-- /.input group -->
                </div>
                 <!-- /input-group -->
              </div>
              <!-- /.card-body -->
            </div>









            
              <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
   
            </div>
            


                </form>

          </div>
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>

<script type="text/javascript">
  


  _today: function () {
  var myDate = document.querySelector(myDate);
  var today = new Date();
  myDate.value = today.toISOString().substr(0, 10);
},
</script>
   @endsection
@section('footer')
    @include('user.includes.footer')
@endsection





 
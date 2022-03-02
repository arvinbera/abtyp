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
              <div class="card-header">
                <h3 class="card-title">Add Parishad <small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('admin.add-branch.submit') }}">
           @csrf
                <div class="card-body">

                  <div class="form-group">
                        <label>State</label>
                        <select class="form-control" name="state_id" id="state_id" >
                           @if(isset($state_list))
                             @foreach($state_list as $state)
                          <option value="{{ $state->id }}">{{ $state->state_name }}</option>
                          @endforeach
                           @endif
                        </select>
                        @if ($errors->has('state_id'))
                      <div class="error" style="color:red;">{{ $errors->first('state_id') }}</div>
                      @endif
                      </div>






                  <div class="form-group">

                    <label for="exampleInputEmail1">Parishad Name</label>
                    <input type="text" name="name" class="form-control" id="exampleInputEmail1" placeholder="Enter Parishad Name" value="{{ old('name') }}">
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



                  <!--<div class="form-group">
                    <label for="exampleInputEmail1">Address</label>
                    <input type="text" name="address" class="form-control" id="exampleInputEmail1" placeholder="Enter Address" value="{{ old('address') }}"> @if ($errors->has('address'))
                      <div class="error" style="color:red;">{{ $errors->first('address') }}</div>
                      @endif
                  </div>-->


                  <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                     @if ($errors->has('password'))
                      <div class="error" style="color:red;">{{ $errors->first('password') }}</div>
                      @endif
                  </div>
                 
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


 
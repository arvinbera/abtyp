@extends('admin.layouts.app')
@section('header')
<title>ABTYP Parishad List | Admin Dashboard</title>
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
            <h1>Parishad List</h1>
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
                <h3 class="card-title">Parishad List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Parishad Name</th>
                    <th>Mobile No</th>
                    <th>Password</th>
                    <th>Email Id</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                       @if(isset($User_list))
                     @foreach($User_list as $user)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                     <td>{{ $user->phone_no }}</td>
                     <td>
                        123456789
                         

                         
                         
                         
                      </td>
                    <td>{{ $user->email }}</td>
                    
                   
                    <td>
                        <a href="{{url('/admin/user-edit')}}/{{ $user->id}}">
                        <button class="btn btn-block btn-danger xhead">Edit</button>
                        </a>
                    </td>
                  </tr>
                   @endforeach
                                               @endif
                  

                  </tbody>
                 
                  <tfoot>
                 <!-- <tr>
                     <th>Sl No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    

                    <th>Action</th>
                  </tr>-->
                  </tfoot>
                </table>
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
    @include('admin.includes.footer')
@endsection


 
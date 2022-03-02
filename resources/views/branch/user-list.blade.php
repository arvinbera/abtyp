@extends('branch.layouts.app')
@section('header')
<title>ABTYP User List | Branch Dashboard</title>
   @include('branch.includes.header')
   @endsection
   @section('sidebar')
   @include('branch.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>User List</h1>
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
                <h3 class="card-title">User List</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Parishad</th>

                    
                  </tr>
                  </thead>
                   
                  <tbody>
                      @if(isset($User_list))
                     @foreach($User_list as $user)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->address }}</td>
                    <td>
                    @php 
                    $branches = DB::table('userbranches')->where('user_id',$user->id)->get();
                    @endphp
                    @foreach($branches as $branch_item)
                    @php 
                    $branh_name = DB::table('branches')->where('id',$branch_item->branch_id)->first();
                    @endphp
                    {{$branh_name->name}} ,&emsp;
                    @endforeach
                    </td>
              
                  </tr>
                   @endforeach
                                               @endif
                  

                  </tbody>
                 
                  <tfoot>
                  <tr>
                     <th>Sl No</th>
                    <th>Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Parishad</th>

           
                  </tr>
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
    @include('branch.includes.footer')
@endsection


 
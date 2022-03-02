@extends('admin.layouts.app')
@section('header')
<title>ABTYP Parishad List | Admin Dashboard</title>
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
                    <th>Email ID</th>
                    <!--<th>Address</th>-->
                    <th>Action</th>
                  </tr>
                  </thead>
                   
                  <tbody>
                      @if(isset($branch_list))
                     @foreach($branch_list as $branch)
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $branch->name }}</td>
                    <td>{{ $branch->email }}</td>
                    <!--<td>{{ $branch->address }}</td>-->
                    <td>
                        <a href="{{url('/admin/branch-edit')}}/{{$branch->id}}">
                            <button class="btn btn-block btn-danger">Edit</button>
                        </a>
                    </td>
                  </tr>
                   @endforeach
                   @endif
                  

                  </tbody>
                 
                  <tfoot>
                  <tr>
                     <th>Sl No</th>
                    <th>Parishad Name</th>
                    <th>Email ID</th>
                    <!--<th>Address</th>-->
                    <th>Action</th>
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
    @include('admin.includes.footer')
@endsection


 
@extends('admin.layouts.app')
@section('header')
<title>ABTYP Branch List | Admin Dashboard</title>
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
            <h1> SANKALP SANGATHAN YATRA</h1>
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
                <h3 class="card-title"> SANKALP SANGATHAN YATRA</h3>
              </div>
              <!-- /.card-header -->
        <div class="table-responsive">
           
              <div class="card-body">
               <table id="example" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Coordinator Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Branch</th>

                    <th>Action</th>
                  </tr>
                  </thead>
                  
                  <tbody>
                 <tr>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td>X</td>
                  </tr>
                  

                  </tbody>
                 
                  <tfoot>
                  <!--<tr>
                     <th>Sl No</th>
                    <th>Branch Name</th>
                    <th>Email ID</th>
                    <th>Address</th>
                    <th>Branch</th>

                    <th>Action</th>
                  </tr>-->
                  </tfoot>
                </table>
              </div>
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


 
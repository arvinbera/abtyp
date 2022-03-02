@extends('admin.layouts.app')
@section('header')
<title>ABTYP | admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
@endsection

         

   @section('content')
 <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> Booked Slot</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div></a>
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
          
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
               <table id="example" class="display nowrap" style="width:100%">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Parishad Name</th>
                    <th>Project On</th>
                    <th>Tentative Date</th>
                    <th>Description</th>
                 
                   
                   
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                 <tbody>
                      @if(isset($bokked_slot))
                     @foreach($bokked_slot as $booked_alot)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booked_alot->user_name }}</td>
                    <td>{{ $booked_alot->project_on }}</td>
                    <td><?php $newDateFormat2 = date('d/m/Y', strtotime($booked_alot->tentative_date)); echo $newDateFormat2; ?></td>
                    
                     <td>{{ $booked_alot->description }}</td>
                    
                    


            

                    

                    
                  </tr>
                   @endforeach
                    @endif
                
                  

                  </tbody>
                  
                 
                  <tfoot>
                  
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


 
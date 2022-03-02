<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('branch.newinclude.head')

<body class="app sidebar-mini">

   @include('branch.newinclude.settings')

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('branch.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

                    @include('branch.newinclude.header')
                                                              <!--Page header-->
                                                              
                                                              
                                                              
                                                              <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> News</h1>
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
   

    <!-- Main content -->
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
          
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
                <table class="table table-bordered text-nowrap" id="example1">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Date</th>
                    <th>Parishad Name</th>
                    <th>News Title</th>
                    <th>View</th>
                   
                   
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                  <tbody>
                      @if(isset($news_rs))
                     @foreach($news_rs as $news)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td><?php $newDateFormat2 = date('d/m/Y', strtotime($news->created_at)); echo $newDateFormat2; ?></td>
                    <td>{{ $news->user_name }}</td>
                     <td>{{ $news->title }}</td>
                    
                    <td><a href="{{url('/branch/news-details')}}/{{$news->id}}"><button class="btn btn-info w-100">View</button></a></td>


            

                    

                    
                  </tr>
                   @endforeach
                    @endif
                
                  

                  </tbody>
                  
                 
                  <tfoot>
                  <!--<tr>
                    <th>Sl No</th>
                    <th>Coordinator</th>
                    <th>Month</th>
             
                    <th>Date</th>
                    <th>Time</th>
                    <th>Venue</th>
                    <th>In Association(if any)</th>
                    <th>Number Of participants</th>
                    <th>NDRF Trainer's Name</th>
                    <th>Stage</th>
                    <th>Convenors</th>
                    <th>Key Members</th>
                    <th>Sponsors</th>
                    <th>Special Thanks To</th>
                    <th>Brief Report</th>
                    <th>Chaitra Aatma</th>
                    <th>ABTYP Members</th>
                    <th>Chief Guest</th>
                    <th>Guests</th>
                    <th>Total</th>
                    <th>Prepared By</th>
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
   
    <!-- /.content -->
  </div>
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
                                                              
 </div>
            <!-- End app-content-->
        </div>
        @include('branch.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('branch.newinclude.script')
</body>

</html>
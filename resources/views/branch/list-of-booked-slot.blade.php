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
                                                               <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
          	<div class="card-title">Booked Slot</div>
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
                <table class="table table-bordered text-nowrap" id="example1">
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
        
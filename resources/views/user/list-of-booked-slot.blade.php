<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('user.newinclude.head')

<body class="app sidebar-mini">

   @include('user.newinclude.settings')

    <!-- Page -->
    <div class="page">
        <div class="page-main">

            @include('user.newinclude.sidebar')

            <!--aside closed-->             <!-- App-Content -->            
            <div class="app-content main-content">
                <div class="side-app">

                    @include('user.newinclude.header')
                                                              <!--Page header-->
                   
                   <div class="card-header">
                   <div class="col-3">
                   <a href="{{ route('user.book-slot') }}">  <button type="" class="btn btn-block btn-danger xhead">Add Slot</button></a>
                  </div>
          
              </div>
                   
                   <div class="row">
                        <div class="col-12">
                            <div class="card">
									<div class="card-header">
										<div class="card-title">Book Your Slot</div>
									</div>
									<div class="card-body">
										<div class="table-responsive">
                   
                   <table class="table table-bordered text-nowrap" id="example1">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Project</th>
                    <th>Tentative Date From</th>
                    <th>Tentative Date To</th>
                    <th>Edit</th>
                    <th>View</th>


                    <!-- <th>Description</th> -->
                 
                   
                   
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                 <tbody>
                      @if(isset($bokked_slot))
                     @foreach($bokked_slot as $booked_alot)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $booked_alot->project_on }}</td>
                    <td><?php $newDateFormat2 = date('d/m/Y', strtotime($booked_alot->tentative_date)); echo $newDateFormat2; ?></td>
                    <td><?php $newDateFormat2 = date('d/m/Y', strtotime($booked_alot->tentative_date_to)); echo $newDateFormat2; ?></td>
                    <td><a href="{{url('user/edit-of-booked-slot')}}/{{$booked_alot->id}}"><button class="btn btn-info w-100">Edit</button></a></td>
                    <td><a href="{{url('user/view-of-booked-slot')}}/{{$booked_alot->id}}"><button class="btn btn-info w-100">View</button></a></td>
                    
                     <!-- <td>{{ $booked_alot->description }}</td> -->
                    
                    


            

                    

                    
                  </tr>
                   @endforeach
                    @endif
                
                  

                  </tbody>
                  
                 
                  <tfoot>
                  
                  </tfoot>
                </table>
                
                	</div>
									</div>
								</div>
                        </div>
                    </div>
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
                   
  </div>                 
</div>
        @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
</body>

</html>
        
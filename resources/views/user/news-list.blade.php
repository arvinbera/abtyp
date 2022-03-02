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
                                                              
                                                              
                                                              
                                                              <div class="content-wrapper" style="min-height: 171px;">
     
      <div class="container">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
                   <div class="col-3">
                   <a href="{{ route('user.news') }}">  <button type="" class="btn btn-block btn-danger xhead">Add News</button></a>
                  </div>
          
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
               <table class="table table-bordered text-nowrap" id="example1">
                  <thead>
                  <tr>
                    <th>Sl No</th>
                    <th>Date</th>
                    <!-- <th>Parishad Name</th> -->
                    <th>News Title</th>
                    <th>View</th>
                    <th>Edit</th>

                   
                   
              
                    



                    
                  </tr>
                  </thead>
                 
                  
                 <tbody>
                      @if(isset($news_rs))
                     @foreach($news_rs as $news)
                     
                 <tr>
                    <td>{{ $loop->iteration }}</td>
                    
                    <td><?php $newDateFormat2 = date('d/m/Y', strtotime($news->created_at)); echo $newDateFormat2; ?></td>
                    <!-- <td>{{ $news->user_name }}</td> -->
                     <td>{{ $news->title }}</td>
                    
                    <td><a href="{{url('/user/news-details')}}/{{$news->id}}"><button class="btn btn-info w-100">View</button></a></td>
                    <td><a href="{{url('/user/news-edit')}}/{{$news->id}}"><button class="btn btn-info w-100">Edit</button></a></td>



            

                    

                    
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
        
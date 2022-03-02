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
                                                              
 

 
          <!-- ./col -->
           <div class="col-sm-12">
               <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div></a>
                      @endif
             
            </ol>
          </div>
           <div class="card card-row card-default">
          <div class="card-header bg-danger">
            <h3 class="card-title">
              <font color="white">News</font>
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-light card-outline">
              <div class="card-header">
                <h5 class="card-title">Parishad Name: {{$news_rss->user_name}}</h5>
                
              </div>
              <div class="card-header">
                <h5 class="card-title"> {{$news_rss->title}}</h5>
                
              </div>
               <div class="card-body">
                <p>
                  {{$news_rss->newsdetails}}
                </p>
              </div>
              <div class="row mb-3">
                        <div class="col-sm-12">
                            <?php foreach (json_decode($news_rss->image)as $picture) { ?>
                 <img src="{{ asset('public/newsimage/'.$picture) }}" style="height:220px; width:370px"/>
                <?php } ?>
                        </div>
                        </div>
                        </div>
                        </div>
              
            </div>
          </div>
        </div>
        </div>
        
        
        
        
        















        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    
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
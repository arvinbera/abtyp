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
                                                             
                                                             
                                              <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
           <div class="col-sm-12">
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
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             
                                                             

                    </div>
                    </div>
                    
                    
                    
 @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
</body>

</html>
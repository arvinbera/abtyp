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
                   
                    <!--End Page header-->
                    
                    
                    
                    <div class="content-wrapper backimg"  style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    
      <div class="container">
        <div class="row mb-2">
          
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    

    <!-- Main content -->
   
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">News<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('user.news-update') }}" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="news_id" class="form-control" value="{{$news_rss->id}}">
          
        
                <div class="card-body">
                  <div class="form-group">
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Title / Activity</label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title" value="{{$news_rss->title}}">
                     @if ($errors->has('title'))
                      <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                      @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Images (Max 3)</label>
                    <input type="file" name="image[]" class="form-control" id="exampleInputPassword1" placeholder="Image" multiple="multiple">
                     @if ($errors->has('image'))
                      <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                      @endif
                    </div>
                    <div class="row mb-3">
                        <div class="col-sm-12">
                            <?php foreach (json_decode($news_rss->image)as $picture) { ?>
                 <img src="{{ asset('public/newsimage/'.$picture) }}" style="height:100px; width:150px"/>
                <?php } ?>
                        </div>
                        </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Deatils</label>
                    <textarea type="text" maxlength="250" name="newsdetails" class="form-control" id="exampleInputPassword1" placeholder="News Details">{{$news_rss->newsdetails}}</textarea>
                    </div>
                    <span id="rchars" style="color:red;">250</span> Character(s) Remaining  
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Submitted By</label>
                    <input type="text" value="{{$news_rss->submitted_by}}" name="submitted_by" class="form-control" id="exampleInputPassword1" placeholder="Submitted By">
                    </div>
                   
                    
                </div>
                
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
            </div>
          <!--/.col (left) -->
          <!-- right column -->
          <div class="col-md-6">

          </div>
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
   
    <!-- /.content -->
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
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
                                                              
                                                              
                                                              
          <div class="col-md-12">
              <div class="card card-primary collapsed-card">
                <div class="card-header xhead">
                  <h3 class="card-title">Add News</h3>
                </div>
                <!-- /.card-header -->
                <div class="card-body">
                    
                    
                    
                     <form id="quickForm" method="POST" action="{{ route('user.news.submit') }}" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="user_id" class="form-control" value="{{$user->id}}">
           <input type="hidden" name="user_name" class="form-control" value="{{$user->name}}">
        
                <div class="card-body">
                  <div class="form-group">
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Title / Activity<font color="red">*</font></label>
                    <input type="text" name="title" class="form-control" id="exampleInputPassword1" placeholder="Title">
                     @if ($errors->has('title'))
                      <div class="error" style="color:red;">{{ $errors->first('title') }}</div>
                      @endif
                    </div>
                    <div class="form-group">
                    <label for="exampleInputPassword1">Images (Max 3)<font color="red">*</font></label>
                    <input type="file" name="image[]" class="form-control" id="exampleInputPassword1" placeholder="Image" multiple="multiple">
                     @if ($errors->has('image'))
                      <div class="error" style="color:red;">{{ $errors->first('image') }}</div>
                      @endif
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Deatils<font color="red">*</font></label>
                    <textarea type="text" maxlength="250" name="newsdetails" class="form-control" id="exampleInputPassword1" placeholder="News Details"></textarea>
                    </div>
                    <span id="rchars" style="color:red;">250</span> Character(s) Remaining  
                    
                </div>

                <div class="form-group">
                    <label for="exampleInputPassword1">Submitted By<font color="red">*</font></label>
                    <input type="text" name="submitted_by" class="form-control" id="exampleInputPassword1" placeholder="Submitted By">
                    </div>
                   
                    
                </div>
                
                
                <!-- /.card-body -->
                <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger">Submit</button>
                </div>
              </form>
              </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </div>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
</div>
            <!-- End app-content-->
        </div>
        @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
     <script>
      var maxLength = 250;
$('textarea').keyup(function() {
  var textlen = maxLength - $(this).val().length;
  $('#rchars').text(textlen);
});
    </script>
</body>

</html>
        
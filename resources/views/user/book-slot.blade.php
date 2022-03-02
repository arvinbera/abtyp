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
                                                              
                                                              
                  
   
    
    
            
        
    
      <div class="container">
          
        <div class="row">
            
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Book Slot<small></small></h3>
                
              @if(Session::has('message'))
                      <p style="color:red;">{{ Session::get('message') }}</p>
                      @endif
            
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm" method="POST" action="{{ route('user.slot.submit') }}" enctype="multipart/form-data">
           @csrf
           <input type="hidden" name="user_id" class="form-control" value="{{$user->id}}">
           <input type="hidden" name="user_name" class="form-control" value="{{$user->name}}">
        
                <div class="card-body">
                  <div class="form-group">
                      
                      <div class="form-group">
                        <label>Project On</label>
                        <select class="form-control" name="project_on">
                           
                            @if(isset($parisad_name))
                             @foreach($parisad_name as $parishad)
                          <option value="{{$parishad->name}}">{{$parishad->name}}</option>
                          @endforeach
                           @endif
                        </select>
                        
                        
                      </div>
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Tentative Date From</label>
                    <input type="date" name="tentative_date" class="form-control" id="exampleInputPassword1" placeholder="">
                     @if ($errors->has('tentative_date'))
                      <div class="error" style="color:red;">{{ $errors->first('tentative_date') }}</div>
                      @endif
                    </div>
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Tentative Date To</label>
                    <input type="date" name="tentative_date_to" class="form-control" id="exampleInputPassword1" placeholder="">
                     @if ($errors->has('tentative_date_to'))
                      <div class="error" style="color:red;">{{ $errors->first('tentative_date_to') }}</div>
                      @endif
                    </div>
                    
                    
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" name="description" class="form-control" id="exampleInputPassword1" placeholder="Description"></textarea>
                    @if ($errors->has('description'))
                      <div class="error" style="color:red;">{{ $errors->first('description') }}</div>
                      @endif
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
        
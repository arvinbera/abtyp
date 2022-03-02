@extends('user.layouts.app')
@section('header')
<title>ABTYP | user Dashboard</title>
   @include('user.includes.header')
      <style>
.site-logoimg
{
    width: 100px;    
    margin-left: 20px;
}
.menutext
{
    color: #000 !important;
  font-size: 16px;
  font-family: 'beyond';
  height: 40px;
  line-height: 40px;
  padding: 0 20px;
  text-transform: uppercase;
  display: block;
  text-decoration: none;
  position: relative;
}
.menutext:hover
{
    color: #ff0000 !important;
}
.menutext::before
{
  content: '';
  position: absolute;
  top: 40px;
  left: 0;
  width: 30%;
  height: 2px;
  border: 1px solid #ff0000;
    transform: scaleX(0);
    transform-origin: right;
    transition: transform .5s;
}
.menutext:hover::before
{
  transform: scaleX(1);
  transform-origin: left;
}
.menutext::after
{
  content: '';
  position: absolute;
  bottom: 40px;
  right: 0;
  width: 30%;
  height: 2px;
  border: 1px solid #ff0000;
    transform: scaleX(0);
    transform-origin: left;
    transition: transform .5s;
}
.menutext:hover::after
{
  transform: scaleX(1);
  transform-origin: right;
}
      .backimg
      {
          background-image: url('public/adminassets/dist/img/1624.jpg') !important;
          width: 100%;
      }
      .main-htext
      {
         font-weight: 600;
         font-size: 30px;
         letter-spacing: 2px;
         font-family: emoji;
         color: #FFF;
      }
</style>
   @endsection

         

   @section('content')
 <div class="content-wrapper backimg"  style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 main-htext">Change Password</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div>
                      @endif
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- jquery validation -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">View Booked Slot<small></small></h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form id="quickForm"  enctype="multipart/form-data">
           @csrf
           
        
                <div class="card-body">
                  <div class="form-group">
                      
                  <div class="form-group">
                    <label for="exampleInputPassword1">Project On</label>
                    <input readonly="" type="text" value="{{$bokked_slot->user_name}}" name="tentative_date" class="form-control" id="exampleInputPassword1" placeholder="">
                     
                    </div>
                      
                      <div class="form-group">
                    <label for="exampleInputPassword1">Tentative Date</label>
                    <input readonly="" type="month" value="{{$bokked_slot->tentative_date}}" name="tentative_date" class="form-control" id="exampleInputPassword1" placeholder="">
                     
                    </div>
                    
                    
                    
                    <div class="form-group">
                    <label for="exampleInputPassword1">Description</label>
                    <textarea type="text" readonly="" name="description" class="form-control" id="exampleInputPassword1" placeholder="News Details">{{$bokked_slot->description}}</textarea>
                    
                    </div>
                    
                    
                    
                    
                    
                
                    
                    
                </div>
                
                
                <!-- /.card-body -->
                
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
    </section>
    <!-- /.content -->
  </div>

   @endsection
@section('footer')
    @include('user.includes.footer')
    
   
@endsection


 
@extends('admin.layouts.app')
@section('header')
<title>ABTYP | admin Dashboard</title>
   @include('admin.includes.header')
   @endsection
   @section('sidebar')
   @include('admin.includes.sidebar')
@endsection


         

   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
           
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

   <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
           <div class="col-sm-12">
           <div class="card card-row card-default">
          <div class="card-header bg-danger">
            <h3 class="card-title">
              News
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
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
   @endsection
@section('footer')
    @include('admin.includes.footer')
@endsection


 
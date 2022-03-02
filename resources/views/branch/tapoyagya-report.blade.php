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
                                                              
                                                              
                                                              
                                                              <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
    
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> News</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              @if(Session::has('message'))
                      <div class="error" style="color:green;">{{ Session::get('message') }}</div></a>
                      @endif
             
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
   

    <!-- Main content -->
   
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
          
              </div>
              <!-- /.card-header -->
               <div class="table-responsive">
              <div class="card-body">
               <table class="table table-bordered text-nowrap" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Sl No</th>
                                                        <th class="wd-15p border-bottom-0">Parishad Name</th>
                                                         <th class="wd-20p border-bottom-0">Date</th>
                                                          <th class="wd-20p border-bottom-0">Time Slot</th>
                                                        <th class="wd-20p border-bottom-0">No. of Participants</th>
                                                        <th class="wd-15p border-bottom-0">List of Participants</th>
                                                        <th class="wd-15p border-bottom-0">Images</th>
                                                        
                                                       
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($tapoyagya_report))
                                                    @foreach($tapoyagya_report as $list)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                       
                                                        <td>{{ $list->parishad_name	 }}</td>
                                                        <td>{{ $list->date }}</td>
                                                        <td>{{ $list->time_slot }}</td>
                                                        <td>{{ $list->no_of_participants	 }}</td>
                                                        <td><?php $tapoyagya_report_participate_list=DB::Table('tapoyagya_report_participants_list')->where('tapoyagya_report_id',$list->id)->get(); ?>
                                                        @if(isset($tapoyagya_report_participate_list))
                                                          @foreach($tapoyagya_report_participate_list as $plist)
                                                        {{ $plist->excel_participants_list	 }}<br>
                                                        @endforeach
                                                    @endif</td>
                                                        <!--<td><a href="https://www.abtyp.org/public/projectimage/{{$list->excel_participants_list}}" target="_blank"><button class="btn btn-info w-100"><i class="fa fa-file-excel-o" aria-hidden="true"></i> Download</button></td>-->
                                                        <td><?php foreach (json_decode($list->image)as $picture) { ?><a href="https://www.abtyp.org/public/projectimage/{{$picture}}" target="_blank"><button class="btn btn-info "><i class="fa fa-file-image-o" aria-hidden="true"></i> </button>&nbsp;<?php } ?></td>
                                                        
                                                        
                                                        
                                                        
                                                         
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
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
      <!-- /.container-fluid -->
   
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
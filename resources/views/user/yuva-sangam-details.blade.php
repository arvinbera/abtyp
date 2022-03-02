<!DOCTYPE html>
<html lang="en" dir="ltr">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />

@include('user.newinclude.head')
<style>
    .bstbtndesign
    {
        margin-left: auto;
        margin-right: auto;
        display: block;
    }
    .xhead {
    background: #b30000 !important;
}
 table {
  border-collapse: collapse;
  width: 100%;
}

th, td {
  text-align: left;
  padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
  background-color: red;
  color: white;
}
</style>
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
                    <div class="page-header">
                        <div class="page-leftheader">
                            <!--<h4 class="page-title mb-0">Hi! Welcome Back</h4>-->
                            <ol class="breadcrumb">
                                <!--<li class="breadcrumb-item"><a href="#">ATDC</a></li>-->
                                <!--<li class="breadcrumb-item active" aria-current="page"><a href="index.html#">Sales Dashboard</a></li>-->
                            </ol>
                        </div>
                       <!-- <div class="page-rightheader">
                            <div class="btn btn-list">
                                <a href="index.html#" class="btn btn-info"><i class="fe fe-settings mr-1"></i> General Settings </a>
                                <a href="index.html#" class="btn btn-danger"><i class="fe fe-printer mr-1"></i> Print </a>
                                <a href="index.html#" class="btn btn-warning"><i class="fe fe-shopping-cart mr-1"></i> Buy Now </a>
                            </div>
                        </div>-->
                    </div>
                    <!--End Page header-->
                                                                    
                <!--===================table design here==============================-->
                    <div class="row">
                        <div class="col-12">
                          
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">



               











              </div>
             <table>
                 <tr>
    <td>Image</td>
    <td><img src="https://www.edusport.co.za/wp-content/uploads/2017/05/blank-avatar.png" alt="Girl in a jacket" width="100" height="100"></td>
    
  </tr>
  
  <tr>
    <td>Name</td>
    <td>{{ $yuva_sangam->personal_name }}</td>
    
  </tr>
  <tr>
    <td>Fater Name</td>
    <td>{{ $yuva_sangam->personal_father_name }}</td>
   
  </tr>
  <tr>
    <td>Mobile No</td>
    <td>{{ $yuva_sangam->personal_mobile }}</td>
    
  </tr>
  <tr>
    <td>DOB</td>
    <td>{{ $yuva_sangam->personal_dob }}</td>
   
</tr>
<tr>
    <td>Email ID</td>
    <td>{{ $yuva_sangam->personal_email }}</td>
   
</tr>
<tr>
    <td>Address</td>
    <td>{{ $yuva_sangam->personal_address }}</td>
   
</tr>
<tr>
    <td>City</td>
    <td>{{ $yuva_sangam->personal_city }}</td>
   
</tr>
<tr>
    <td>State</td>
    <td>{{ $yuva_sangam->personal_state }}</td>
   
</tr>
<tr>
    <td>PIN</td>
    <td>{{ $yuva_sangam->personal_pin }}</td>
   
</tr>
<tr>
    <td>Blood Group</td>
    <td>{{ $yuva_sangam->personal_blood_group }}</td>
   
</tr>
<tr>
    <td>Date of Aniversiary</td>
    <td>{{ $yuva_sangam->personal_date_of_aniversiary }}</td>
   
</tr>
<tr>
    <td>Business Name</td>
    <td>{{ $yuva_sangam->business_name }}</td>
   
</tr>
<tr>
    <td>Business Address</td>
    <td>{{ $yuva_sangam->business_address }}</td>
   
</tr>
<tr>
    <td>Business City</td>
    <td>{{ $yuva_sangam->business_city }}</td>
   
</tr>
<tr>
    <td>Business PIN</td>
    <td>{{ $yuva_sangam->business_pin }}</td>
   
</tr>
</table>
<form method="post"  action="{{ route('user.yuva_sangam_status_change') }}">
                    @csrf
                    <div class="form-group">
                    <label for="ss_venue">Rejection Reason</label>
                    <input type="text" class="form-control" id="rejection_reson" placeholder="Rejection Reason" name="rejection_reson[]">
                  </div>
                    <input type="hidden" name="ysstatus[]" value="{{ $yuva_sangam->yuva_sangam_form_details_id }}" multiple="">
                    <button value="Accepted" name="status_value" type="submit" class="btn btn-success">Accept</button>
                 
                 <button value="Rejected" name="status_value" type="submit" class="btn btn-danger">Reject</button>
    
</form>     



              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    
                        </div>
                    </div>
                <!--===================table design here==============================-->

                </div>
            </div>
            <!-- End app-content-->
        </div>
        @include('user.newinclude.footer')     
    </div><!-- End Page -->
        <!-- Back to top -->
    <a href="#top" id="back-to-top"><i class="fe fe-chevrons-up"></i></a>

    @include('user.newinclude.script')
    <script type="text/javascript">
      $("#checkAll").change(function () {
    $("input:checkbox").prop('checked', $(this).prop("checked"));
});
    </script>
</body>

</html>
        
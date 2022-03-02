@extends('admin.layouts.app')
@section('header')
<title>ABTYP | admin Dashboard</title>
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
.yuvainnertbl
{
    box-shadow: none !important;
    border-top: none !important;
}
</style>
   @endsection



         

   @section('content')

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper backimg"  style="margin-left: 0px;background: #FFF;">
    <!-- Content Header (Page header) -->
    <div class="content-header">
       <div class="container">
    
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
    
    <section class="content">
      <div class="container">
        <!-- Small boxes (Stat box) -->
        <div class="row">
          
          <!-- ./col -->
           <div class="col-sm-12">
           <div class="card card-row card-default">
          <div class="card-header bg-danger">
            <h3 class="card-title">
             T8 Member
            </h3>
          </div>
          <div class="card-body">
            <div class="card card-light card-outline yuvainnertbl">
              <div class="card-header">
                <table>
  
  <tr>
    <td>Parishad Name</td>
    <td><?php $parishad=DB::Table('users')->where('id','=',$data->prashid_user_id)->first();
                                                        
                                                        ?>
                                                        @if(isset($parishad))
                                                        {{ $parishad->name }}
                                                        @endif</td>
    
  </tr>
  <tr>
    <td>Parishad Phone No</td>
    <td>{{ $data->prashid_phone_no }}</td>
   
  </tr>
  <tr>
    <td>Parishad FaceBook</td>
    <td>{{ $data->prashid_facebook_url }}</td>
    
  </tr>
  <tr>
    <td>Parishad Website</td>
    <td>{{ $data->prashid_website }}</td>
   
</tr>
<tr>
    <td>Parishad Address</td>
    <td>{{ $data->parishad_address }}</td>
   
</tr>
<tr>
    <td>Number of Terapanthi Families</td>
    <td>{{ $data->prashid_number_of_terapanthi_families }}</td>
   
</tr>
<tr>
    <td>Number of Tterapanthi Yuvak Parishad Members</td>
    <td>{{ $data->prashid_number_of_terapanthi_yuvak_parishad_members }}</td>
   
</tr>
<tr>
    <td>Number of Terapanthi Kishore Mandal</td>
    <td>{{ $data->prashid_number_of_terapanthi_kishore_mandal }}</td>
   
</tr>
<tr>
    <td>President Name</td>
    <td>{{ $data->president_name }}</td>
   
</tr>
<tr>
    <td>Mobile Number</td>
    <td>{{ $data->president_mobile_number }}</td>
   
</tr>
<tr>
    <td>Email</td>
    <td>{{ $data->president_email }}</td>
   
</tr>
<tr>
    <td>DOB</td>
    <td>{{ $data->president_dob }}</td>
   
</tr>
<tr>
    <td>Anniversary Date</td>
    <td>{{ $data->president_anniversary_date }}</td>
   
</tr>
<tr>
    <td>Blood Group</td>
    <td>{{ $data->president_blood_group }}</td>
   
</tr>

<tr>
    <td>Residential Address</td>
    <td>{{ $data->president_residential_address }}</td>
   
</tr>
<tr>
    <td>Facebook</td>
    <td>{{ $data->president_facebook_url }}</td>
   
</tr>
<tr>
    <td>Instagram</td>
    <td>{{ $data->president_instagram_url }}</td>
   
</tr>
<tr>
    <td>Linkedin Url</td>
    <td>{{ $data->president_linkedin_url }}</td>
   
</tr>
<tr>
    <td>Prefferred mode of communication</td>
    <td>{{ $data->president_prefferred_mode_of_communication }}</td>
   
</tr>
<tr>
    <td>Secretary Name</td>
    <td>{{ $data->secretary_name }}</td>
   
</tr>
<tr>
    <td>Secretary Mobile no</td>
    <td>{{ $data->secretary_mobile_no }}</td>
   
</tr>
<tr>
    <td>Secretary email</td>
    <td>{{ $data->secretary_email }}</td>
   
</tr>


</table>
                
                
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


 
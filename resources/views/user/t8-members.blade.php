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
            <!--aside closed-->
            <!-- App-Content -->
            <div class="app-content main-content">
                <div class="side-app">
                    @include('user.newinclude.header')
                    <!--Page header-->
                    <!--End Page header-->
                    <div class="row">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="card-title">T8 Members</div>
                                </div>
                                <div class="card-body">
                                    <div class="table-responsive">
                                        <form method="post" action="{{ route('user.yuva_sangam_status_change') }}">
                                            @csrf
                                            <table class="table table-bordered text-nowrap" id="example1">
                                                <thead>
                                                    <tr>
                                                        <th class="wd-15p border-bottom-0">Sl No</th>
                                                        <th class="wd-15p border-bottom-0">No</th>
                                                        <th class="wd-15p border-bottom-0">Name</th>
                                                        <th class="wd-15p border-bottom-0">Mobile No</th>
                                                        <th class="wd-15p border-bottom-0">Email</th>
                                                        <th class="wd-15p border-bottom-0">DOB</th>
                                                        <th class="wd-15p border-bottom-0">Blood Group</th>
                                                       <!-- <th class="wd-15p border-bottom-0">Status</th>-->
                                                        <!--<th class="wd-15p border-bottom-0">Action</th>-->
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @if(isset($yuva_sangam))
                                                    @foreach($yuva_sangam as $yuva_sangam)
                                                    <tr>
                                                        <td>{{ $loop->iteration }}</td>
                                                        <td>ABTYP/2021/{{ $yuva_sangam->welcome_form_prashid_details_id }}</td>
                                                        <td>{{ $yuva_sangam->president_name }}</td>
                                                        <td>{{ $yuva_sangam->president_mobile_number }}</td>
                                                        <td>{{ $yuva_sangam->president_email }}</td>
                                                        <td>{{ $yuva_sangam->president_dob }}</td>
                                                        <td>{{ $yuva_sangam->president_blood_group }}</td>
                                                       
                                                    </tr>
                                                    @endforeach
                                                    @endif
                                                </tbody>
                                            </table>
                                        </form>
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
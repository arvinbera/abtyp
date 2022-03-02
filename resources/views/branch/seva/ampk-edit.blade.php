@extends('branch.layouts.app')
@section('header')
<title>ABTYP AMPK List | branch Dashboard</title>
   @include('branch.includes.header')
   @endsection
   @section('sidebar')
   @include('branch.includes.sidebar')
@endsection
         

   @section('content')
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1> AMPK</h1>
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
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
           
            

            <div class="card">
              <div class="card-header">
            
              </div>
              <!-- /.card-header -->
              <div class="table-responsive">
              <div class="card-body">
                <form action="{{ route('branch.ampk-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $ampk->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $ampk->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

                <div class="form-group">
                    <label for="ampk_address">Address</label>
                    <input type="text" class="form-control" id="ampk_address" placeholder="Address" name="ampk_address" value="{{ $ampk->ampk_address }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="ampk_in_association" placeholder="In Association(if any)" name="ampk_in_association" value="{{ $ampk->ampk_in_association  }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_chaitra_atma_visited">Chaitra Aatma's Visited</label>
                    <input type="text" class="form-control" id="ampk_chaitra_atma_visited" placeholder="Chaitra Aatma's Visited" name="ampk_chaitra_atma_visited" value="{{ $ampk->ampk_chaitra_atma_visited }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_date">Date</label>
                    <input type="date" class="form-control" id="ampk_date" placeholder="Date" name="ampk_date" value="{{ $ampk->ampk_date }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_conveynor">Conveynor</label>
                    <input type="text" class="form-control" id="ampk_conveynor" placeholder="Conveynor" name="ampk_conveynor" value="{{ $ampk->ampk_conveynor }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_key_members">Key Members</label>
                    <input type="text" class="form-control" id="ampk_key_members" placeholder="Key Members" name="ampk_key_members" value="{{ $ampk->ampk_key_members }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_sponsors">Sponsors</label>
                    <input type="text" class="form-control" id="ampk_sponsors" placeholder="Sponsors" name="ampk_sponsors" value="{{ $ampk->ampk_sponsors }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="ampk_special_thanks_to" placeholder="Special Thanks To" name="ampk_special_thanks_to" value="{{ $ampk->ampk_special_thanks_to   }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_brief_report">Brief Report</label>
                    <input type="text" class="form-control" id="ampk_brief_report" placeholder="Brief Report" name="ampk_brief_report" value="{{ $ampk->ampk_brief_report }}">
                  </div>

                  <div class="form-group">
                    <label for="ampk_prepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="ampk_prepared_by" placeholder="Prepared By" name="ampk_prepared_by" value="{{ $ampk->ampk_prepared_by }}">
                  </div>
                  
                 

                  <!-- =========================================Update======================================== -->

                  <div class="card-footer">
                  <button type="submit" class="btn btn-block btn-danger">Update</button>
                </div>
              </form>
                  
                  
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
    </section>
    <!-- /.content -->
  </div>

   @endsection
@section('footer')
    @include('branch.includes.footer')
@endsection
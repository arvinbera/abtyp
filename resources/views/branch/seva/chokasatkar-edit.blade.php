@extends('branch.layouts.app')
@section('header')
<title>ABTYP Cokasatar Edit| branch Dashboard</title>
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
            <h1> Cokasatar</h1>
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
                <form action="{{ route('branch.chokasatkar-update') }}" method="post">
                   @csrf
                   <input type="hidden" name="id" value="{{ $cs_list->id }}">


                 <div class="form-group">
                    <label for="total_no_of_billing">Name</label>
                    <input type="text" class="form-control" id="name" name="user_id" placeholder="Name" value="{{ $cs_list->username }}" readonly="">
                  </div>


<!-- ================================================Form================================================================ -->

                <div class="form-group">
                    <label for="choka_satkar_date_form">Date Form</label>
                    <input type="date" class="form-control" id="choka_satkar_date_form" placeholder="Date Form" name="choka_satkar_date_form" value="{{$cs_list->choka_satkar_date_form   }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_date_to">Date To</label>
                    <input type="date" class="form-control" id="choka_satkar_date_to" placeholder="Date To" name="choka_satkar_date_to" value="{{$cs_list->choka_satkar_date_to   }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_time">Time</label>
                    <input type="time" class="form-control" id="choka_satkar_time" placeholder="Time" name="choka_satkar_time" value="{{$cs_list->choka_satkar_time  }}">
                  </div>

                   <div class="form-group">
                    <label for="choka_satkar_no_of_days">Number of Days</label>
                    <input type="number" class="form-control" id="choka_satkar_no_of_days" placeholder="Number of Days" name="choka_satkar_no_of_days" value="{{$cs_list->choka_satkar_no_of_days  }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_amount_paid">Amount Paid</label>
                    <input type="number" class="form-control" id="choka_satkar_amount_paid" placeholder="Amount Paid" name="choka_satkar_amount_paid" value="{{$cs_list->choka_satkar_amount_paid   }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_sponsor">Sponsor</label>
                    <input type="text" class="form-control" id="choka_satkar_sponsor" placeholder="Sponsor" name="choka_satkar_sponsor" value="{{$cs_list->choka_satkar_sponsor }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_in_association">In Association(if any)</label>
                    <input type="text" class="form-control" id="choka_satkar_in_association" placeholder="In Association(if any)" name="choka_satkar_in_association" value="{{$cs_list->choka_satkar_in_association }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_special_thanks_to">Special Thanks To</label>
                    <input type="text" class="form-control" id="choka_satkar_special_thanks_to" placeholder="Special Thanks To" name="choka_satkar_special_thanks_to" value="{{$cs_list->choka_satkar_special_thanks_to }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkar_brief_reports">Brief Report</label>
                    <input type="text" class="form-control" id="choka_satkar_brief_reports" placeholder="Brief Report" name="choka_satkar_brief_reports" value="{{$cs_list->choka_satkar_brief_reports }}">
                  </div>

                  <div class="form-group">
                    <label for="choka_satkarprepared_by">Prepared By</label>
                    <input type="text" class="form-control" id="choka_satkarprepared_by" placeholder="Prepared By" name="choka_satkarprepared_by" value="{{$cs_list->choka_satkarprepared_by }}">
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
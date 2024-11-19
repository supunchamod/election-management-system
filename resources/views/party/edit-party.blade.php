
@extends('layouts.main')
@section('content')

<div class="page-content">
                <div class="container-xxl">                    
                    <div class="row">
                        <div class="col-md-8 col-lg-8">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Add Election Party</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
        <form class="row g-3 needs-validation" method="POST" action="{{ route('parties.update', $party->id) }}" enctype="multipart/form-data" novalidate>
            @csrf
            @method('PUT')

            <div class="col-md-6">
                <label for="validationCustom03" class="form-label">Party Name</label>
                <input type="text" name="party_name" class="form-control" id="validationCustom03" value="{{ $party->party_name }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Party Abbreviation</label>
                <input type="text" name="party_abbreviation" class="form-control" id="validationCustom04" value="{{ $party->party_abbreviation }}" required>
                <div class="valid-feedback">
                    Looks good!
                </div>
            </div>

            <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Party Logo</label>
                <input type="file" name="party_logo" class="form-control" id="validationCustom05">
                <div class="invalid-feedback">
                    Please upload a valid party logo.
                </div>

                @if($party->party_logo)
                    <img src="{{ asset('storage/uploads/' . $party->party_logo) }}" alt="Current Party Logo" width="100" class="mt-3">
                @endif
            </div>

            <div class="col-12">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
                    <label class="form-check-label" for="invalidCheck">
                        Agree to terms and conditions
                    </label>
                    <div class="invalid-feedback">
                        You must agree before submitting.
                    </div>
                </div>
            </div>

            <div class="col-12">
                <button class="btn btn-primary" type="submit">Update Party</button>
            </div>
        </form>
    </div>
    </div><!--end row-->
                                      
                                      </div><!-- container -->
                                  </div>
                                  <!-- end page content -->
@endsection

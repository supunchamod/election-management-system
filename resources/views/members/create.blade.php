@extends('layouts.main')
@section('content')

<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl">
        <div class="row">
            <div class="col-md-8 col-lg-8">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">
                                <h4 class="card-title">Add Election Members</h4>
                            </div><!--end col-->
                        </div>  <!--end row-->
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <form class="row g-3 needs-validation" method="POST" action="{{ route('members.store') }}" enctype="multipart/form-data" novalidate>
                            @csrf
                            <!-- Member's Name -->
                            <div class="col-md-6">
                                <label for="validationCustom03" class="form-label">Members Name</label>
                                <input type="text" name="members_name" class="form-control" id="validationCustom03" required>
                                <div class="valid-feedback">
                                    Looks good!
                                </div>
                            </div>

                            <!-- Party Selection -->
                            <div class="col-md-6">
                                <label class="form-label">Party</label>
                                <div>
                                    <select class="form-select" name="party_id" aria-label="Default select example" required>
                                        <option selected disabled>Select Party</option>
                                        @foreach ($parties as $party)
                                            <option value="{{ $party->id }}">{{ $party->party_name }}</option>
                                        @endforeach
                                    </select>
                                    <div class="invalid-feedback">
                                        Please select a valid party.
                                    </div>
                                </div>
                            </div>

                            <!-- Member Image Upload -->
                            <div class="col-md-6">
                                <label for="validationCustom05" class="form-label">Member Image</label>
                                <input type="file" name="member_image" class="form-control" id="validationCustom05">
                                <div class="invalid-feedback">
                                    Please upload a valid member image.
                                </div>
                            </div>

                            <!-- Color Code Input -->
                            <div class="col-md-6">
                                <label for="colorCode" class="form-label">Color Code</label>
                                <input type="color" name="color_code" class="form-control" id="colorCode" value="#000000" required>
                                <div class="invalid-feedback">
                                    Please select a valid color code.
                                </div>
                            </div>

                            <!-- Terms & Conditions Checkbox -->
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

                            <!-- Submit Button -->
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Submit form</button>
                            </div>
                        </form>
                    </div><!--end card-body-->
                </div><!--end card-->
            </div><!--end col-->
        </div><!--end row-->
    </div><!-- container -->
</div>
<!-- end page content -->

@endsection

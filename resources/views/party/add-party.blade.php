
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
                                            <h4 class="card-title">Add Election Party</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
<form class="row g-3 needs-validation" method="POST" action="{{ route('parties.store') }}" enctype="multipart/form-data" novalidate>
    @csrf
    <div class="col-md-6">
        <label for="validationCustom03" class="form-label">Party Name</label>
        <input type="text" name="party_name" class="form-control" id="validationCustom03" value="Mark" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom04" class="form-label">Party Abbreviation</label>
        <input type="text" name="party_abbreviation" class="form-control" id="validationCustom04" value="Otto" required>
        <div class="valid-feedback">
            Looks good!
        </div>
    </div>

    <div class="col-md-6">
        <label for="validationCustom05" class="form-label">Party Logo</label>
        <input type="file" name="party_logo" class="form-control" id="validationCustom05" required>
        <div class="invalid-feedback">
            Please upload a valid party logo.
        </div>
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
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
           
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->     
                        
                        <div class="col-md-4 col-lg-4">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h4 class="card-title">Party List</h4>                      
                                        </div><!--end col-->
                                        <div class="col-auto"> 
                                            <div class="dropdown">
                                                <a href="#" class="btn bt btn-light dropdown-toggle" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="icofont-calendar fs-5 me-1"></i> This Month<i class="las la-angle-down ms-1"></i>
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-end">
                                                    <a class="dropdown-item" href="#">Today</a>
                                                    <a class="dropdown-item" href="#">Last Week</a>
                                                    <a class="dropdown-item" href="#">Last Month</a>
                                                    <a class="dropdown-item" href="#">This Year</a>
                                                </div>
                                            </div>               
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                <tr class="">                                                        
                                                    <td class="px-0">
                                                        <div class="d-flex align-items-center">
                                                            <img src="assets/images/users/avatar-1.jpg" height="36" class="me-2 align-self-center rounded" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0 text-truncate">Scott Holland</h6>
                                                                <a href="#" class="font-12 text-muted text-decoration-underline">#3652</a>                                                                                           
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </td>
                                                    <td  class="px-0 text-end"><span class="text-primary ps-2 align-self-center text-end">$3325.00</span></td>  
                                                </tr><!--end tr-->  
                                                    
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->                           
                                </div><!--end card-body--> 
                            </div><!--end card--> 
                        </div> <!--end col-->  
                    </div><!--end row-->
                                      
                </div><!-- container -->
            </div>
            <!-- end page content -->

@endsection
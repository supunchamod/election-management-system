
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
                                            <h4 class="card-title">Add Division</h4>                      
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                <form action="{{ route('divisions.store') }}" method="POST">
        @csrf
        <div class="mb-3">
            <label for="division_name" class="form-label">Division Name</label>
            <input type="text" class="form-control" id="division_name" name="division_name" required>
        </div>
        <div class="mb-3">
            <label for="district_id" class="form-label">District</label>
            <select class="form-select" id="district_id" name="district_id" required>
                <option value="">Select District</option>
                @foreach($districts as $district)
                    <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                @endforeach
            </select>
        </div>
        <button type="submit" class="btn btn-primary">Add Division</button>
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
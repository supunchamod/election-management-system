@extends('layouts.main')
@section('content')

<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl"> 
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">District Details</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <a href="{{ route('districts.create') }}" ><button class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add District</button></a>  
                            </div><!--end col-->
                        </div><!--end row-->                                  
                    </div><!--end card-header-->

                    @if (session('success'))
                        <div class="alert alert-success shadow-sm border-theme-white-2" role="alert">
                            <div class="d-inline-flex justify-content-center align-items-center thumb-xs bg-success rounded-circle mx-auto me-1">
                                <i class="fas fa-check align-self-center mb-0 text-white"></i>
                            </div>
                            <strong>Well done!</strong> {{ session('success') }}
                        </div>
                    @endif

                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
            <tr>
                <th>ID</th>
                <th>District Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($districts as $district)
                <tr>
                    <td>{{ $district->id }}</td>
                    <td>{{ $district->district_name }}</td>
                    <td class="text-end">
                        <!-- Delete button triggers the modal -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $district->id }}">
                            <i class="las la-trash-alt text-secondary fs-18"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{ $district->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $district->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="deleteModalLabel{{ $district->id }}">Delete District</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete the district "<strong>{{ $district->district_name }}</strong>"?
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('districts.destroy', $district->id) }}" method="POST" style="display:inline;">
                                            @csrf
                                            @method('DELETE')
                                            <button type="submit" class="btn btn-danger">Delete</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                    
                </tr>
            @endforeach
        </tbody>
                              </table>
                        </div>
                    </div>
                </div>
            </div> <!-- end col -->
        </div> <!-- end row -->                                     
    </div><!-- container -->
</div>
<!-- end page content -->

@endsection

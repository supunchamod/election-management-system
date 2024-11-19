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
                                <h4 class="card-title">Members Details</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <a href="{{ route('divisions.create') }}" ><button class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add Member</button></a>  
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
                <th>Division Name</th>
                <th>District Name</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($divisions as $division)
                <tr>
                    <td>{{ $division->id }}</td>
                    <td>{{ $division->division_name }}</td>
                    <td>{{ $division->district->district_name }}</td>
                    <td class="text-end">
                        <!-- Delete button triggers the modal -->
                        <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $division->id }}">
                            <i class="las la-trash-alt text-secondary fs-18"></i>
                        </a>

                        <!-- Modal -->
                        <div class="modal fade" id="deleteModal{{ $division->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $division->id }}" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h6 class="modal-title" id="deleteModalLabel{{ $division->id }}">Delete Division</h6>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>

                                    <!-- Modal Body -->
                                    <div class="modal-body">
                                        Are you sure you want to delete the division "<strong>{{ $division->division_name }}</strong>"?
                                    </div>

                                    <!-- Modal Footer -->
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                                        <!-- Delete Form -->
                                        <form action="{{ route('divisions.destroy', $division->id) }}" method="POST" style="display:inline;">
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

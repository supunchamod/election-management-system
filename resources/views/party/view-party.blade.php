
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
                                <h4 class="card-title">Parties Details</h4>                      
                            </div><!--end col-->
                            <div class="col-auto"> 
                                <a href="/add-party" ><button class="btn bg-primary-subtle text-primary"><i class="fas fa-plus me-1"></i> Add Party</button></a>  
                                  
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
                                    <th>Name</th>
                                    <th>Party Abbreviation</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                  </tr>
                                </thead>
                                <tbody>
                                @foreach ($parties as $party)
                                    <tr>
                                        <td class="d-flex align-items-center">
                                            <div class="d-flex align-items-center">
                                                <img src="{{ asset('storage/uploads/' . $party->party_logo) }}" class="me-2 thumb-md align-self-center rounded" alt="...">
                                                <div class="flex-grow-1 text-truncate"> 
                                                    <h6 class="m-0">{{ $party->party_name }}</h6>                                                                                        
                                                </div><!--end media body-->
                                            </div>
                                        </td>
                                        <td>{{ $party->party_abbreviation }}</td>
                                        <td><span class="badge rounded text-success bg-success-subtle">Active</span></td>
                                        <td class="text-end">
    <!-- Edit button (No change) -->
    <a href="{{ route('parties.edit', $party->id) }}">
        <i class="las la-pen text-secondary fs-18"></i>
    </a>

    <!-- Delete button triggers the modal -->
    <a href="#" data-bs-toggle="modal" data-bs-target="#deleteModal{{ $party->id }}">
        <i class="las la-trash-alt text-secondary fs-18"></i>
    </a>

    <!-- Modal -->
    <div class="modal fade" id="deleteModal{{ $party->id }}" tabindex="-1" aria-labelledby="deleteModalLabel{{ $party->id }}" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <!-- Modal Header -->
                <div class="modal-header">
                    <h6 class="modal-title" id="deleteModalLabel{{ $party->id }}">Delete Party</h6>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>

                <!-- Modal Body -->
                <div class="modal-body">
                    Are you sure you want to delete the party "<strong>{{ $party->party_name }}</strong>"?
                </div>

                <!-- Modal Footer -->
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancel</button>

                    <!-- Delete Form -->
                    <form action="{{ route('parties.destroy', $party->id) }}" method="POST" style="display:inline;">
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
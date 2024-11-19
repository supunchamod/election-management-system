@extends('layouts.main')
@section('content')

<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl">
        <div class="row justify-content-center">
        <form action="{{ route('results.store') }}" method="POST">
        @csrf
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Add Election Result</h4>                      
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">District</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" name="district_id" id="district-select" required aria-label="District select" onchange="fetchDivisions()">
                                            <option selected>Select District</option>
                                            @foreach ($districts as $district)
                                                <option value="{{ $district->id }}">{{ $district->district_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>                                                                            
                            </div><!--end col-->

                            <div class="col-lg-6">    
                                <div class="mb-3 row">
                                    <label class="col-sm-4 col-form-label">Division</label>
                                    <div class="col-sm-8">
                                        <select class="form-select" name="division_id" id="division-select" required aria-label="Division select">
                                            <option selected>Select Division</option>
                                            <!-- Divisions will be populated here -->
                                        </select>
                                    </div>
                                </div>                                          
                            </div><!--end col-->
                        </div> <!--end row-->              
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col-->  
            <div class="col-12">
                <div class="card">
                    <div class="card-header">
                        <div class="row align-items-center">
                            <div class="col">                      
                                <h4 class="card-title">Election Results Details</h4>                      
                            </div><!--end col-->
                        </div>  <!--end row-->                                  
                    </div><!--end card-header-->
                    <div class="card-body pt-0">
                        <div class="row">
                            <div class="col-lg-10">
                                <div class="mb-3 row">
                                    <label for="registered-electors" class="col-sm-4 col-form-label">Number of Registered Electors :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="number_of_registered_electors" id="registered-electors" value="">
                                    </div>
                                </div>                                                                             
                            </div><!--end col-->
                            <div class="col-lg-10">
                                <div class="mb-3 row">
                                    <label for="votes-polled" class="col-sm-4 col-form-label">Number of Votes Polled :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="number_of_votes_polled" id="votes-polled" value="">
                                    </div>
                                </div>                                                                             
                            </div><!--end col-->
                            <div class="col-lg-10">
                                <div class="mb-3 row">
                                    <label for="rejected-votes" class="col-sm-4 col-form-label">Number of Rejected Votes :</label>
                                    <div class="col-sm-8">
                                        <input class="form-control" type="text" name="number_of_rejected_votes" id="rejected-votes" value="">
                                    </div>
                                </div>                                                                             
                            </div><!--end col-->
                        </div> <!--end row-->              
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-12">
                <div class="card">
                    <div class="card-body pt-0">
                         <!-- Dynamic Member and Vote Input -->
                         <div id="memberVotesContainer">
                                <div class="row member-vote-entry">
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Member</label>
                                            <div class="col-sm-8">
                                                <select name="members[]" class="form-select" required>
                                                    <option selected disabled>Select a member</option>
                                                    @foreach($members as $member)
                                                        <option value="{{ $member->id }}">{{ $member->members_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label for="votes" class="col-sm-4 col-form-label">Votes Obtained</label>
                                            <div class="col-sm-8">
                                                <input name="votes[]" class="form-control" type="number" placeholder="Enter votes" required>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                                <div class="row member-vote-entry">
                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label class="col-sm-4 col-form-label">Member</label>
                                            <div class="col-sm-8">
                                                <select name="members[]" class="form-select" required>
                                                    <option selected disabled>Select a member</option>
                                                    @foreach($members as $member)
                                                        <option value="{{ $member->id }}">{{ $member->members_name }}</option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                    </div><!--end col-->

                                    <div class="col-lg-6">
                                        <div class="mb-3 row">
                                            <label for="votes" class="col-sm-4 col-form-label">Votes Obtained</label>
                                            <div class="col-sm-8">
                                                <input name="votes[]" class="form-control" type="number" placeholder="Enter votes" required>
                                            </div>
                                        </div>
                                    </div><!--end col-->
                                </div><!--end row-->
                            </div><!--end memberVotesContainer-->

                            <!-- Add More Members Button -->
                            <div class="row">
                                <div class="col-lg-10">
                                    <button type="button" id="add-more-member" class="btn btn-secondary">Add More Members</button>
                                </div>
                            </div>           
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!--end col--> 
            <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>

        </form>                                                         
        </div><!--end row-->   

    </div><!-- container -->
</div>
<!-- end page content -->

<script>
function fetchDivisions() {
    const districtId = document.getElementById('district-select').value;
    const divisionSelect = document.getElementById('division-select');

    // Clear previous divisions
    divisionSelect.innerHTML = '<option selected>Select Division</option>';

    if (districtId) {
        fetch(`/api/divisions/${districtId}`)
            .then(response => response.json())
            .then(data => {
                data.forEach(division => {
                    const option = document.createElement('option');
                    option.value = division.id;
                    option.textContent = division.division_name;
                    divisionSelect.appendChild(option);
                });
            })
            .catch(error => console.error('Error fetching divisions:', error));
    }
}
</script>

<script>
    document.getElementById('add-more-member').addEventListener('click', function () {
    const memberVoteEntry = document.querySelector('.member-vote-entry');
    const clone = memberVoteEntry.cloneNode(true);
    document.getElementById('member-votes-section').appendChild(clone);
});

</script>

@endsection

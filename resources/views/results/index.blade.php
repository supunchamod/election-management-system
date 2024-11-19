
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
                                <h4 class="card-title">Election result</h4>                      
                            </div><!--end col-->
                        </div><!--end row-->                                  
                    </div><!--end card-header-->

                
                    <div class="card-body pt-0">
                        <div class="table-responsive">
                            <table class="table mb-0" id="datatable_1">
                                <thead class="table-light">
            <tr>
            <th>ID</th>
                <th>Division Name</th>
                <th>Number of Registered Electors</th>
                <th>Number of Votes Polled</th>
                <th>Number of Rejected Votes</th>
                <th>Total Valid Votes</th>
                <th>Valid Votes Percentage</th>
                <th>Rejected Votes Percentage</th>
                <th>Votes Polled Percentage</th>
            </tr>
        </thead>
        <tbody>
        @foreach($electionResults as $result)
            <tr>
                <td>{{ $result->id }}</td>
                <td>{{ $result->division->division_name }}</td>
                <td>{{ $result->number_of_registered_electors }}</td>
                <td>{{ $result->number_of_votes_polled }}</td>
                <td>{{ $result->number_of_rejected_votes }}</td>
                <td>{{ $result->total_number_of_valid_votes }}</td>
                <td>{{ $result->valid_votes_percentage }}%</td>
                <td>{{ $result->rejected_votes_percentage }}%</td>
                <td>{{ $result->votes_polled_percentage }}%</td>
            </tr>
             <!-- Display member votes related to this election result -->
             <tr>
                <td colspan="9">
                    <h5>Member Votes for Division: {{ $result->division->division_name }}</h5>
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Member Name</th>
                                <th>Total Votes</th>
                                <th>Vote Percentage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($result->memberVotes as $memberVote)
                            <tr>
                                <td>{{ $memberVote->member->members_name }}</td> <!-- Assuming there's a relationship with Member model -->
                                <td>{{ $memberVote->votes }}</td>
                                <td>{{ $memberVote->votes_percentage }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
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

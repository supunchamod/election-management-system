@extends('layouts.main')
@section('content')

<div class="container">
    <h3>{{ $district->district_name }} District Results</h3>
    
    <div class="card mb-4">
        <div class="card-body">
            <p><strong>Total Registered Electors:</strong> {{ $totalRegisteredElectors }}</p>
            <p><strong>Total Votes Polled:</strong> {{ $totalVotesPolled }}</p>
            <p><strong>Total Rejected Votes:</strong> {{ $totalRejectedVotes }}</p>
            <p><strong>Total Valid Votes:</strong> {{ $totalValidVotes }}</p>
        </div>
    </div>

    <div class="card">
        <div class="card-body">
            <h4>Division Results</h4>
            @foreach($district->divisions as $division)
                <h5>{{ $division->division_name }}</h5>
                @foreach($division->electionResults as $result)
                    <p>
                        <strong>Registered Electors:</strong> {{ $result->number_of_registered_electors }}<br>
                        <strong>Votes Polled:</strong> {{ $result->number_of_votes_polled }}<br>
                        <strong>Rejected Votes:</strong> {{ $result->number_of_rejected_votes }}<br>
                        <strong>Valid Votes:</strong> {{ $result->number_of_votes_polled - $result->number_of_rejected_votes }}
                    </p>
                @endforeach
            @endforeach
        </div>
    </div>
</div>
@endsection

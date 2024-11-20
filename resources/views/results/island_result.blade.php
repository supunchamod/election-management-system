
@extends('layouts.main')
@section('content')

<style>
tr.result {
    height: 100px;
}
h6.m-0.text-truncate {
    font-size: 16px;
}
.d-flex.align-items-center {
    width: 93%;
}
small.flex-shrink-1.ms-1 {
    font-size: 16px;
}
span.text-body.ps-2.align-self-center.text-end {
    font-size: 21px;
    margin-left: 60px;
    color:white;
}
.summery {
    display: flex;
}
.progress.mb-3 {
    width: 68%;
}
.card-title{
    text-align:center;
}

</style>

<!-- Page Content-->
<div class="page-content">
    <div class="container-xxl"> 
        <div class="row">
            <div class="col-lg-12">
                            <div class="card">
                                <div class="card-header">
                                    <div class="row align-items-center">
                                        <div class="col">                      
                                            <h2 class="card-title" style="font-size: 25px;font-weight: 700;"> All Island Result</h2>                      
                                        </div><!--end col-->
                                        <div class="col-auto">            
                                        </div><!--end col-->
                                    </div>  <!--end row-->                                  
                                </div><!--end card-header-->
                                <div class="card-body pt-0">
                                    <div class="table-responsive">
                                        <table class="table mb-0">
                                            <tbody>
                                                @foreach($members_votes as $memberVote)
                                                <tr class="result">                                                        
                                                    <td class="px-0">
                                                        <div class="d-flex align-items-center" style="background: cornsilk; border-radius: 5px;border-bottom-left-radius: 43px;
    border-top-left-radius: 45px;">
                                                            <img src="{{ asset('uploads/members/' . $memberVote->member->member_image) }}"style="height: 100px;width: 100px;" class="me-2 align-self-center thumb-md rounded-circle" alt="...">
                                                            <div class="flex-grow-1 text-truncate"> 
                                                                <h6 class="m-0 text-truncate">{{ $memberVote->member->members_name }}</h6>
                                                                <div class="d-flex align-items-center">
                                                                    <div class="progress bg-primary-subtle w-100" style="height:5px;" role="progressbar" aria-label="Success example" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                                                                        <div class="progress-bar" style="width: {{ $memberVote->vote_percentage }}%; background-color: {{ $memberVote->member->color_code }};"></div>
                                                                    </div> 
                                                                    <small class="flex-shrink-1 ms-1">{{ $memberVote->vote_percentage }}%</small>
                                                                    <span class="text-body ps-2 align-self-center text-end">{{ $memberVote->total_votes }}</span>

                                                                </div>                                                                                    
                                                            </div><!--end media body-->
                                                        </div><!--end media-->
                                                    </td>
                                                </tr>
                                                  @endforeach
                                            </tbody>
                                        </table> <!--end table-->                                               
                                    </div><!--end /div-->                           
                                </div><!--end card-body--> 
                            </div><!--end card--> 
            </div> <!-- end col -->

            @foreach($vote_summery as $result)
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-body">
                        <div class="row">
                                <div class="col-lg-12"> <!-- Change col-md-4 to col-md-3 for 4 cards per row -->
                                    <div class="summery"> <!-- h-100 to make cards the same height -->
                                        <div class="col-lg-3">                                            
                                            <p class="card-text">Registered Electors: <strong>{{ $result->total_number_of_registered_electors }}</strong></p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-primary" role="progressbar" style="width: {{ $result->valid_votes_percentage }}%;" aria-valuenow="{{ $result->valid_votes_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $result->valid_votes_percentage }}%</div>
                                            </div>
                                        </div>

                                        <div class="col-lg-3">                                            
                                            <p class="card-text">Votes Polled: <strong>{{ $result->total_number_of_votes_polled }}</strong></p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-info" role="progressbar" style="width: {{ $result->votes_polled_percentage }}%;" aria-valuenow="{{ $result->votes_polled_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $result->votes_polled_percentage }}%</div>
                                            </div>                                           
                                        </div>

                                        <div class="col-lg-3">                                            
                                            <p class="card-text">Rejected Votes: <strong>{{ $result->total_number_of_rejected_votes }}</strong></p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-danger" role="progressbar" style="width: {{ $result->rejected_votes_percentage }}%;" aria-valuenow="{{ $result->rejected_votes_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $result->rejected_votes_percentage }}%</div>
                                            </div>                                           
                                        </div>

                                        <div class="col-lg-3">                                          
                                            <p class="card-text">Total Valid Votes: <strong>{{ $result->total_number_of_valid_votes }}</strong></p>
                                            <div class="progress mb-3">
                                                <div class="progress-bar bg-success" role="progressbar" style="width: {{ $result->valid_votes_percentage }}%;" aria-valuenow="{{ $result->valid_votes_percentage }}" aria-valuemin="0" aria-valuemax="100">{{ $result->valid_votes_percentage }}%</div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        </div>
                    </div><!--end card-body--> 
                </div><!--end card--> 
            </div> <!-- end col -->
            @endforeach
        </div> <!-- end row -->                                     
    </div><!-- container -->
</div>
<!-- end page content -->
<!-- Include Chart.js -->

@endsection

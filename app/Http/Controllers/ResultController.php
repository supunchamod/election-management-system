<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\District;
use App\Models\Division;
use App\Models\Member;
use App\Models\ElectionResult;
use App\Models\MemberVote;
use App\Models\VotesSummary;
use App\Models\MemberVoteSummary;



class ResultController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $members_votes = MemberVoteSummary::all();
        $vote_summery = VotesSummary::all();
        return view('results.island_result', compact('members_votes', 'vote_summery'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $members = Member::all();
        $districts = District::all();
        return view('results.create', compact('members', 'districts'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
{
    // Validate your input
    $request->validate([
        'district_id' => 'required',
        'division_id' => 'required',
        'number_of_registered_electors' => 'required|integer',
        'number_of_votes_polled' => 'required|integer',
        'number_of_rejected_votes' => 'required|integer',
        'votes' => 'required|array',
        'votes.*' => 'required|integer',
        'members' => 'required|array',
        'members.*' => 'required|integer',
    ]);

    // Calculate total number of valid votes
    $number_of_votes_polled = $request->input('number_of_votes_polled');
    $number_of_rejected_votes = $request->input('number_of_rejected_votes');
    $total_number_of_valid_votes = $number_of_votes_polled - $number_of_rejected_votes;

    // Store election result
    $electionResult = ElectionResult::create([
        'district_id' => $request->input('district_id'),
        'division_id' => $request->input('division_id'),
        'number_of_registered_electors' => $request->input('number_of_registered_electors'),
        'number_of_votes_polled' => $number_of_votes_polled,
        'number_of_rejected_votes' => $number_of_rejected_votes,
        'total_number_of_valid_votes' => $total_number_of_valid_votes,
        'valid_votes_percentage' => ($total_number_of_valid_votes / $number_of_votes_polled) * 100,
        'rejected_votes_percentage' => ($number_of_rejected_votes / $number_of_votes_polled) * 100,
        'votes_polled_percentage' => ($number_of_votes_polled / $request->input('number_of_registered_electors')) * 100,
    ]);

    // Retrieve members and votes input
    $members = $request->input('members'); // Array of member IDs
    $votes = $request->input('votes');     // Array of votes corresponding to the members

    // Loop through each member and their votes
    foreach ($members as $index => $memberId) {
        // Check if the member exists in the members table
        if (!Member::find($memberId)) {
            return redirect()->back()->withErrors(['message' => "Member with ID $memberId does not exist."])->withInput();
        }

        // Calculate percentage for each member
        $memberVotes = $votes[$index]; // Get the votes for the current member
        $percentage = ($memberVotes / $total_number_of_valid_votes) * 100;

        // Store the member vote in the member_votes table
        MemberVote::create([
            'election_result_id' => $electionResult->id, // Link to the election result
            'member_id' => $memberId,                    // Member ID
            'votes' => $memberVotes,                     // Votes received
            'votes_percentage' => $percentage,           // Save the calculated percentage
        ]);
    }

    $this->updateVotesSummary();
   
    $this->updateMemberVoteSummaries();

    // Optionally redirect or return a response
    return redirect()->back()->with('success', 'Election result and member votes saved successfully!');

}

public function updateMemberVoteSummaries()
{
    // Get the total valid votes across all divisions, or create an empty summary if none exists
    $votesSummary = VotesSummary::first();

    // If no summary exists, initialize it
    if (!$votesSummary) {
        // Create a new summary entry with default values (you might want to set initial data)
        $votesSummary = VotesSummary::create([
            'total_number_of_registered_electors' => 0,
            'total_number_of_votes_polled' => 0,
            'total_number_of_rejected_votes' => 0,
            'valid_votes_percentage' => 0,
            'rejected_votes_percentage' => 0,
            'votes_polled_percentage' => 0,
        ]);
    }

    // Ensure that total_number_of_votes_polled is greater than zero
    $totalVotesPolled = $votesSummary->total_number_of_votes_polled;

    // Get total votes for each member across all divisions
    $membersVotes = MemberVote::selectRaw('member_id, SUM(votes) as total_votes')
        ->groupBy('member_id')
        ->get();

    // Loop through each member and update or create vote summary
    foreach ($membersVotes as $memberVote) {
        $votePercentage = 0;

        // Calculate percentage only if total valid votes are greater than 0
        if ($totalVotesPolled > 0) {
            $votePercentage = ($memberVote->total_votes / $totalVotesPolled) * 100;
        }

        // Update or create the summary for the member
        MemberVoteSummary::updateOrCreate(
            ['member_id' => $memberVote->member_id],
            [
                'total_votes' => $memberVote->total_votes,
                'vote_percentage' => $votePercentage
            ]
        );
    }
}



public function updateVotesSummary()
{
    // Aggregating total values from the election_results table
    $totalRegisteredElectors = ElectionResult::sum('number_of_registered_electors');
    $totalVotesPolled = ElectionResult::sum('number_of_votes_polled');
    $totalRejectedVotes = ElectionResult::sum('number_of_rejected_votes');

    // Calculate total valid votes
    $totalValidVotes = $totalVotesPolled - $totalRejectedVotes;

    // Calculate percentages
    $validVotesPercentage = ($totalValidVotes / $totalVotesPolled) * 100;
    $rejectedVotesPercentage = ($totalRejectedVotes / $totalVotesPolled) * 100;
    $votesPolledPercentage = ($totalVotesPolled / $totalRegisteredElectors) * 100;

    // Check if there is already an entry in the votes_summary table
    $votesSummary = VotesSummary::first();

    if ($votesSummary) {
        // Update the existing record
        $votesSummary->update([
            'total_number_of_registered_electors' => $totalRegisteredElectors,
            'total_number_of_votes_polled' => $totalVotesPolled,
            'total_number_of_rejected_votes' => $totalRejectedVotes,
            'total_number_of_valid_votes' => $totalValidVotes,
            'valid_votes_percentage' => $validVotesPercentage,
            'rejected_votes_percentage' => $rejectedVotesPercentage,
            'votes_polled_percentage' => $votesPolledPercentage,
        ]);
    } else {
        // Create a new record if none exists
        VotesSummary::create([
            'total_number_of_registered_electors' => $totalRegisteredElectors,
            'total_number_of_votes_polled' => $totalVotesPolled,
            'total_number_of_rejected_votes' => $totalRejectedVotes,
            'total_number_of_valid_votes' => $totalValidVotes,
            'valid_votes_percentage' => $validVotesPercentage,
            'rejected_votes_percentage' => $rejectedVotesPercentage,
            'votes_polled_percentage' => $votesPolledPercentage,
        ]);
    }
}
    
public function showDistrictResult($id)
{
    // Fetch the district with related election results and member votes
    $district = District::with(['divisions.electionResults.memberVotes'])->findOrFail($id);

    // Calculate totals for the district
    $totalRegisteredElectors = 0;
    $totalVotesPolled = 0;
    $totalRejectedVotes = 0;
    $totalValidVotes = 0;

    foreach ($district->divisions as $division) {
        foreach ($division->electionResults as $result) {
            $totalRegisteredElectors += $result->number_of_registered_electors;
            $totalVotesPolled += $result->number_of_votes_polled;
            $totalRejectedVotes += $result->number_of_rejected_votes;
            $totalValidVotes += ($result->number_of_votes_polled - $result->number_of_rejected_votes);
        }
    }

    return view('results.district_result', compact('district', 'totalRegisteredElectors', 'totalVotesPolled', 'totalRejectedVotes', 'totalValidVotes'));
}

    


    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($divisionId)
    {
        $electionResults = ElectionResult::where('division_id', $divisionId)
            ->with('memberVotes') // eager load the related member votes
            ->get();

        return view('results.result', compact('electionResults'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

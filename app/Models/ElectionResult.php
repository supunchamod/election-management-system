<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ElectionResult extends Model
{
    use HasFactory;

    protected $table = 'election_results';

    // Define the fillable properties for mass assignment
    protected $fillable = [
        'district_id',
        'division_id',
        'number_of_registered_electors',
        'number_of_votes_polled',
        'number_of_rejected_votes',
        'total_number_of_valid_votes',
        'valid_votes_percentage',
        'rejected_votes_percentage',
        'votes_polled_percentage',
    ];

    // Optionally, define the relationships if needed
    public function district()
    {
        return $this->belongsTo(District::class);
    }

    public function memberVotes()
    {
        return $this->hasMany(MemberVote::class, 'election_result_id');
    }
    public function division()
    {
    return $this->belongsTo(Division::class);
    }



}

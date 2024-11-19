<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberVote extends Model
{
    use HasFactory;

    protected $fillable = [
        'election_result_id',
        'member_id',
        'votes',
        'votes_percentage',
    ];

    public function electionResult()
    {
        return $this->belongsTo(ElectionResult::class, 'election_result_id');
    }
  
    public function member()
{
    return $this->belongsTo(Member::class);
}
}

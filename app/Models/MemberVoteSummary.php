<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MemberVoteSummary extends Model
{
    use HasFactory;
    
    protected $table = 'member_vote__summaries';

    protected $fillable = [
        'member_id',
        'total_votes',
        'vote_percentage',
    ];

    // Relationship with Member model
    public function member()
    {
        return $this->belongsTo(Member::class);
    }
}

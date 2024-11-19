<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VotesSummary extends Model
{
    use HasFactory;

    protected $table = 'votes_summary';

    protected $fillable = [
        'total_number_of_registered_electors',
        'total_number_of_votes_polled',
        'total_number_of_rejected_votes',
        'total_number_of_valid_votes',
        'valid_votes_percentage',
        'rejected_votes_percentage',
        'votes_polled_percentage',
    ];
}

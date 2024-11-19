<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Party extends Model
{
    use HasFactory;
    protected $table = 'parties';

    protected $fillable = [
        'party_name',
        'party_abbreviation',
        'party_logo',
    ];

    public function members()
    {
        return $this->hasMany(Member::class);
    }

}

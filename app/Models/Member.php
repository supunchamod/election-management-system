<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    use HasFactory;

    protected $fillable = ['members_name', 'party_id', 'member_image','color_code'];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function memberVoteSummary()
    {
        return $this->hasOne(MemberVoteSummary::class);
    }

}
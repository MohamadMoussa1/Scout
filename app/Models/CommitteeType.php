<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommitteeType extends Model
{
    public function scoutProgress()
    {
        return $this->hasMany(ScoutProgress::class, 'committee_id');
    }
}

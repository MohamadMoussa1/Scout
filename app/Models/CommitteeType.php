<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class CommitteeType extends Model
{
    protected $table='committee_type';
    public function scoutProgress()
    {
        return $this->hasMany(ScoutProgress::class, 'committee_id');
    }
}

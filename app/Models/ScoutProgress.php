<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoutProgress extends Model
{
    protected $table='scout_progress';
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }
    public function tlevel()
    {
        return $this->belongsTo(TlevelType::class, 'Tlevel_id');
    }
    public function committee()
    {        
        return $this->belongsTo(CommitteeType::class, 'committee_id');
    }
}

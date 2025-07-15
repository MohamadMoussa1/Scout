<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TlevelType extends Model
{
    public function scoutProgress()
    {
        return $this->hasMany(ScoutProgress::class, 'Tlevel_id');
    }

    
}

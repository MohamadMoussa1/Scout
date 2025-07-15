<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Participation extends Model
{
    public function activityReport()
    {
        return $this->belongsTo(ActivityReport::class);
    }
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }
    
}

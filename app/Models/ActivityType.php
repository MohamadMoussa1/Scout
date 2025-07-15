<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityType extends Model
{
    public function activityReports()
    {
        return $this->hasMany(ActivityReport::class, 'activity_type_id');
    }
    
}

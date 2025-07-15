<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ActivityReport extends Model
{
    public function activityType()
    {
        return $this->belongsTo(ActivityType::class, 'activity_type_id');
    }
    public function region()
    {
        return $this->belongsTo(Region::class, 'region_id');
    }
    public function scout()
    {
        return $this->belongsTo(Scout::class, 'scout_id');
    }
    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function transferCards()
    {
        return $this->hasMany(TransferCard::class);
    }
    
    public function assigneRanks()
    {
        return $this->hasMany(AssigneRank::class);
    }
    public function scoutBadges()
    {
        return $this->hasMany(ScoutBadge::class);
    }
    public function assignedTasks()
    {
        return $this->hasMany(AssignedTask::class);
    }
    public function activityReports()
    {
        return $this->hasMany(ActivityReport::class);
    }
    public function participations()
    {
        return $this->hasMany(Participation::class);
    }
    public function scoutProgress()
    {
        return $this->hasMany(ScoutProgress::class);
    }
}

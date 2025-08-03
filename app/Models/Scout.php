<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Scout extends Model
{
    protected $table = 'scouts';
    protected $fillable = [
        'scout_photo',
        'first_name',
        'father_name',
        'last_name',
        'birthdate',
        'gender',
        'contact_tel_Home',
        'contact_tel_Cell',
        'contact_tel_father',
        'contact_tel_other',
        'current_unit_id',
        'address',
        'region_id',
        'troop_id',
        'town',
        'joining_date',
        'remarks',
    ];

    public function unit()
    {
        return $this->belongsTo(Unit::class, 'current_unit_id');
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

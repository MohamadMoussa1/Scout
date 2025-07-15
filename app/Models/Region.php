<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Region extends Model
{
    public function troops()
    {
        return $this->hasMany(Troop::class);
    }
    public function scouts()
    {
        return $this->hasMany(Scout::class);
    }
    public function activityReports()
    {
        return $this->hasMany(ActivityReport::class);
    }
}

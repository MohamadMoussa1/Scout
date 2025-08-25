<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;


class Troop extends Model
{
    public function region()
    {
        return $this->belongsTo(Region::class);
    }
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
    public function scouts()
    {
        return $this->hasMany(Scout::class, 'troop_id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UnitType extends Model
{
    protected $table = 'unit_type';
    public function units()
    {
        return $this->hasMany(Unit::class);
    }
}

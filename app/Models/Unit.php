<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    public function troop()
    {
        return $this->belongsTo(Troop::class);
    }
    public function unitType()
    {
        return $this->belongsTo(UnitType::class, 'unit_type_id');
    }
    public function scouts()
    {
        return $this->hasMany(Scout::class, 'current_unit_id');
    }
    public function transfersFrom()
    {
        return $this->hasMany(TransferCard::class, 'from_unit_id');
    }
    public function transfersTo()
    {
        return $this->hasMany(TransferCard::class, 'to_unit_id');
    }
    
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class TransferCard extends Model
{
    protected $table='transfer_cards';
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }
    public function fromUnit()
    {
        return $this->belongsTo(Unit::class, 'from_unit_id');
    }
    public function toUnit()
    {
        return $this->belongsTo(Unit::class, 'to_unit_id');
    }
}

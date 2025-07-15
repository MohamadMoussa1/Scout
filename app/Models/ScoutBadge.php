<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ScoutBadge extends Model
{
    public function badge()
    {
        return $this->belongsTo(Badge::class);
    }
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }
}

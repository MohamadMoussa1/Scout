<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Badge extends Model
{
    public function scoutBadges()
    {
        return $this->hasMany(ScoutBadge::class);
    }
}

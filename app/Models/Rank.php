<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    public function assigneRanks()
    {
        return $this->hasMany(AssigneRank::class);
    }
}

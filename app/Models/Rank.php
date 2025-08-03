<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
    protected $table = 'rank';
    public function assigneRanks()
    {
        return $this->hasMany(AssigneRank::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssigneRank extends Model
{ 
    protected $table = 'assigne_rank';
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }
    public function rank()
    {
        return $this->belongsTo(Rank::class);
    }
}

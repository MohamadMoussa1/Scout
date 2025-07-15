<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

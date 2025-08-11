<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class AssignedTask extends Model
{
    protected $table = 'assigned_tasks';
    public function scout()
    {
        return $this->belongsTo(Scout::class);
    }

    public function task()
    {
        return $this->belongsTo(Task::class);
    }
}

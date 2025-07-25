<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    public function assignedTasks()
    {
        return $this->hasMany(AssignedTask::class);
    }
}

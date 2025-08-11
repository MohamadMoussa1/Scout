<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    protected $table = 'task';
    public function assignedTasks()
    {
        return $this->hasMany(AssignedTask::class);
    }
}

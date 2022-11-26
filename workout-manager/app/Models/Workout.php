<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    use HasFactory;

    public function workout_plan()
    {
        return $this->belongsTo(WorkoutPlan::class);
    }

    public function sets()
    {
        return $this->hasManyThrough(Set::class, Excercise::class);
    }
}

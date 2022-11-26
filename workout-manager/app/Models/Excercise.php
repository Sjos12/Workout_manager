<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Excercise extends Model
{
    use HasFactory;


    public function owner()
    {
        return $this->belongsTo(User::class);
    }
    public function workout_plan()
    {
        return $this->belongsTo(WorkoutPlan::class);
    }

    public function sets()
    {
        return $this->hasMany(Set::class);
    }
}

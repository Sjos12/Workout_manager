<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Set extends Model
{
    use HasFactory;

    public function workout()
    {
        return $this->belongsTo(Workout::class);
    }

    public function excercise()
    {
        return $this->belongsTo(Excercise::class);
    }
}

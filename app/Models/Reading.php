<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reading extends Model
{
    protected $fillable = ['unit_id', 'title', 'content', 'reading_time'];

    public function unit()
    {
        return $this->belongsTo(Unit::class);
    }
    public function vocabularies()
    {
        return $this->hasMany(Vocabulary::class);
    }
    public function quizzes()
    {
        return $this->hasMany(Quiz::class);
    }
}

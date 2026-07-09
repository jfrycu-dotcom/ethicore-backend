<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class UserProgress extends Model
{
    protected $fillable = ['user_id', 'reading_id', 'is_completed'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function reading()
    {
        return $this->belongsTo(Reading::class);
    }
}

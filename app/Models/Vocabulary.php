<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vocabulary extends Model
{
    protected $fillable = ['reading_id', 'word', 'definition'];

    public function reading()
    {
        return $this->belongsTo(Reading::class);
    }
}
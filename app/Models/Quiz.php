<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
    protected $fillable = ['reading_id', 'question', 'options', 'correct_answer'];

    // Menangani format JSON otomatis
    protected $casts = [
        'options' => 'array',
    ];

    public function reading()
    {
        return $this->belongsTo(Reading::class);
    }
}

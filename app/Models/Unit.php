<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Unit extends Model
{
    protected $fillable = ['title', 'description', 'order'];
    
    public function reading()
    {
        return $this->hasOne(Reading::class);
    }
}

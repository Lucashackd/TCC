<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flag extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
    ];

    public function videos()
    {
        return $this->belongsToMany(Video::class);
    }
}

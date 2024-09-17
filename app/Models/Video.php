<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Video extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'description',
        'path',
        'user_id',
    ];

    public function users()
    {
        return $this->belongsTo(User::class);
    }

    public function flags()
    {
        return $this->belongsToMany(Flag::class)
            ->withPivot('flag_id')
            ->withTimestamps();
    }
}

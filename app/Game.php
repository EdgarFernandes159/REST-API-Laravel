<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Game extends Model
{
    protected $fillable = [
        'title',
        'released',
        'director',
        'critic_score',
        'user_score',
    ];

    protected $hidden = [
        'pivot'
    ];



    public function genres()
    {
        return $this->belongsToMany(Genre::class)
            ->withTimestamps();
    }

    public function platforms()
    {
        return $this->belongsToMany(Platform::class)
            ->withTimestamps();
    }


    use SoftDeletes;
}

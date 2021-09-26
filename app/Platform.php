<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Platform extends Model
{
    protected $fillable = [
        'name'
    ];

    protected $hidden = [
        'pivot'
    ];

    public function games()
    {
        return $this->belongsToMany(Game::class)
            ->withTimestamps();
    }

    use SoftDeletes;
}

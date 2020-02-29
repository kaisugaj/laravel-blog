<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $guarded = [];

    public function comment()
    {
        return $this->hasMany(Comment::class);
    }
}

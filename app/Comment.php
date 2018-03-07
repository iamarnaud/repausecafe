<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    public function image()
    {
        return $this->belongsTo(Images::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

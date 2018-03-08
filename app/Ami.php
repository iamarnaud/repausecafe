<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ami extends Model
{

    public function user()
    {
        return $this->belongsToMany(User::class, 'id_user', 'id_user_n');
    }
}

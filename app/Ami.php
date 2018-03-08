<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Ami extends Model
{

    public function friends()
    {
        return $this->belongsToMany(User::class);
        return $friends;
    }

    public function add_friend($friend_id){
        $this->friends()->attach($friend_id);// ajoute le user en ami
        $friend=User::find($friend_id); //on retroouve l'user
        $friend->friends()->attach($this->id);// on s'ajoute comme ami avec l'autre user

    }
}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nom', 'email', 'password', 'tel','prenom','date_naiss','description','genre','avatar','notification',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function images()
    {
        return $this->hasMany(Images::class);
    }

    public function ami()
    {
        return $this->hasMany(Ami::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }


    public function message()
    {
        return $this->hasMany(Message::class);
    }

}

<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Auth\UserTrait;
use Illuminate\Auth\UserInterface;
use Illuminate\Auth\RemindableTrait;
use Illuminate\Auth\RemindableInterface;

class User extends Authenticatable
{
    use Notifiable;



    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'users';
    protected $fillable = [
        'nom', 'email', 'password', 'prenom','description','avatar',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];
    public function getFullName()
    {
        return $this->prenom . ' ' . $this->nom;
    }

    public function friends()
    {
        return $this->belongsToMany('App\User', 'friendship', 'user_id', 'friend_id');
    }

    public function addFriend(User $user)
    {
        $this->friends()->attach($user->id);
    }

    public function removeFriend(User $user)
    {
        $this->friends()->detach($user->id);
    }




}

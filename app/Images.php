<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = ['nom', 'lien', 'description', 'aime', 'post_date', 'coord_lat', 'coord_lon'];


    public function lieu()
    {
        return $this->hasOne(Lieux::class);
    }

    public function user()
    {
        return $this->hasOne(User::class);
    }


    public function tag()
    {
        return $this->hasMany(Tag::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class);
    }

}

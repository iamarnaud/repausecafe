<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'nom' => 'required|string|max:255',
        'lien'=>'required',
        'description' => 'required|string|max:255',
        'aime',
        'coord_lat',
        'coord_lon',
        'id',
        'id_lieu',
        'id_user',
        'id_image'
    ];


    public function lieu()
    {
        return $this->hasOne(Lieux::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }


    public function tag()
    {
        return $this->hasMany(Tag::class, 'id_image');
    }

    public function comments()
    {
        return $this->hasMany(Comment::class, 'id_image');
    }

}

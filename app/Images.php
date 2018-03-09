<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Images extends Model
{
    protected $fillable = [
        'nom',
        'lien',
        'description',
        'aime',
        'post_date',
        'coord_lat',
        'coord_lon',
        'id_image',
        'id',
        'id_lieu'
    ];


    public function lieu()
    {
        return $this->hasOne(Lieux::class, 'id_lieu');
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

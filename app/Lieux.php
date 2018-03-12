<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{


    protected $fillable = ['id', 'pays', 'ville', 'region', 'id_lieu'];


    public function images()
    {
        return $this->belongsToMany(Images::class);
    }


}


<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lieux extends Model
{


    protected $fillable = ['pays', 'ville', 'region'];


    public function images()
    {
        return $this->belongsTo(Images::class);
    }


}


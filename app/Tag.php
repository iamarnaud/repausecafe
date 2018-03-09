<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tag extends Model
{
    protected $fillable = ['nom'];


    public function images()
    {
        return $this->hasMany(Images::class, 'id_image', 'id_image_n');
    }

}

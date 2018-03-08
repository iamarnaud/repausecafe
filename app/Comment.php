<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Comment
 * @package App
 *
 * @property string commentaire
 * @property \DateTime date_com
 * @property string com_eph
 * @property int id_image
 */
class Comment extends Model
{
    protected $fillable = ['commentaire', 'id_user', 'id_image'];


    public function image()
    {
        return $this->belongsTo(Images::class, 'id_image');
    }

    public function user()
    {
        return $this->belongsTo(User::class, 'id_user');
    }

    public function jsonSerialize()
    {
        $ret = [
            "commentaire" => $this->commentaire,
            "created_at" => $this->created_at,
            "image_id" => $this->id_image,
            "user" => $this->user,
        ];
        return $ret;
    }

}

<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class MediaCategory extends Model
{
    //
    public function medias()
    {
        return $this->hasMany('Omaxe\Medias');
    }
}

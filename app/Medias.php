<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class Medias extends Model
{
    //
    public function media_category()
    {
        return $this->belongsTo('Omaxe\InvestorCat');
    }
}

<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class MetaTag extends Model
{
    //

    protected $fillable = [
        'meta_title',
        'meta_description',
        'meta_keywords',
        'meta_status'
    ];

}

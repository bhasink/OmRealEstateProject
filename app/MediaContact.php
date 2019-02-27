<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class MediaContact extends Model
{
    //


    protected $fillable=[
        'name',
        'email',
        'address',
        'phone',
        'query_type',
        'query'
    ];

}

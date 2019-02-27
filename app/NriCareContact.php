<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class NriCareContact extends Model
{
    //

    protected $fillable=[
        'name',
        'email',
        'phone',
        'country',
        'city',
        'state',
        'address',
        'project_query'
    ];
    

}

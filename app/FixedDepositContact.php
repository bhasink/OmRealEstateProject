<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class FixedDepositContact extends Model
{
    //

    protected $fillable=[
        'name',
        'email',
        'message',
        'Number',
        'city'
    ];

}

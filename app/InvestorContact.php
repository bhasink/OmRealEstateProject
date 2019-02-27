<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class InvestorContact extends Model
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

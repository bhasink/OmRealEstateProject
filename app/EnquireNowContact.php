<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class EnquireNowContact extends Model
{
    //
    protected $fillable=[

        'user_name',
        'user_email',
        'user_phone_no',
        'user_residential_type',
        'user_query'

    ];
}

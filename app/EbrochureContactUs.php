<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class EbrochureContactUs extends Model
{
    //

    protected  $table = "ebrochure_contact_uses";

    protected $fillable=[

        'project_name',
        'name',
        'email',
        'phone',
        'residential_type',
        'address'
    ];
}

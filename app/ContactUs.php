<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ContactUs extends Model
{
    //contactuses
    public $table= 'contact_uses';
    protected $fillable=[
        'project_name',
        'name',
        'email',
        'phone',

        'country',
        'city',
        'zipcode',
        'zipcode',
        'address',
        'project_query'
    ];
}

<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectContact extends Model
{
    public $table= 'project_contacts';
    protected $fillable=[
        'projects_id',
        'project_name',
        'name',
        'email',
        'phone',
        'interested_visit_site',
        'residential_type',
        'country',
        'city',
        'zipcode',
        'zipcode',
        'address',
        'project_query'
    ];
}

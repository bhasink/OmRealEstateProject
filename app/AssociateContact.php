<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class AssociateContact extends Model
{
    //
    protected $fillable=[
        'name',
        'city',
        'country',
        'year_of_formation',
        'pan_card',
        'gstin_no',
        'rera_no',
        'no_of_employee',
        'client_list',
        'address',
        'pincode',
        'state',
        'landine_no',
        'phone',
        'fax_no',
        'email_id',
        'website',
        'associate_with_other_builders',
        'builders_name_of_builders',
        'builders_since_how_long',
        'builders_name_of_project',
        'builders_no_of_booking_given',
        'promoters_name',
        'promoters_city',
        'promoters_edu_qualifiication',
        'promoters_state',
        'promoters_mobile_no',
        'promoters_fax_no',
        'promoters_nationality',
        'promoters_address',
        'promoters_pincode',
        'promoters_country',
        'promoters_email',
        'promoters_core_competence',
        'company_name'
    ];
    
}

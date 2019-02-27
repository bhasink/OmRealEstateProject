<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class Ebrochure extends Model
{
    //

    protected $table = 'ebrochures';

    protected $fillable = [
        'projects_id',
        'brouchure_pdf',

    ];

    public function ebrochure()
    {
        return $this->belongsTo('Omaxe\Projects');
    }
}

<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class Nearby extends Model
{
    //

    protected $fillable = [
        'projects_id',
        'latitude',
        'longitude',
    ];

    public function projects()
    {
        return $this->hasMany('Omaxe\Projects');
    }
}

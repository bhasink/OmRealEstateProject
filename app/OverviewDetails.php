<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class OverviewDetails extends Model
{

    protected $fillable = [
        'projects_id',
        'location',
        'size',
        'type',
        'rera_no'
    ];

    //
    public function overview(){
        return $this->hasMany('Omaxe\Projects');
    }
}

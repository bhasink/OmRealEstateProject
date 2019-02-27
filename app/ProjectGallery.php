<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectGallery extends Model
{
    //

    protected $table = 'project_galleries';

    public function gallery(){
        return $this->belongsTo('Omaxe\Projects');
    }

}

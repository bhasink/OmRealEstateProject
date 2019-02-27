<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectPropertyType extends Model
{
    //
    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectStatus extends Model
{
    //
    protected $fillable = ['id'];

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

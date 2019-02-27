<?php

namespace Omaxe;
use Omaxe\Projects;
use Illuminate\Database\Eloquent\Model;

class ProjectSpecification extends Model
{
    //
    protected $fillable = ['id'];

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

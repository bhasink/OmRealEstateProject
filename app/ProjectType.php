<?php

namespace Omaxe;
use Omaxe\Projects;
use Omaxe\ProjectCity;
use Illuminate\Database\Eloquent\Model;

class ProjectType extends Model
{
    //
    protected $fillable = ['id'];

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }

    public function project_cities(){
        return $this->HasMany('Omaxe\ProjectCity');
    }
}

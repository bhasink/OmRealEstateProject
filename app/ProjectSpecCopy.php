<?php

namespace Omaxe;
use Omaxe\Projects;
use Illuminate\Database\Eloquent\Model;

class ProjectSpecCopy extends Model
{
    //
    protected $fillable = ['id'];

    protected $table = 'project_specifications_copy';

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

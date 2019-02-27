<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectCity extends Model
{
    protected $fillable = ['id'];
    public function projects()
    {
        return $this->hasMany('Omaxe\Projects');
    }
}

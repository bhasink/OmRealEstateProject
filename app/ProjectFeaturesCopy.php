<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectFeaturesCopy extends Model
{
    //
    protected $fillable = ['id'];

    protected $table = 'project_features_copy';

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

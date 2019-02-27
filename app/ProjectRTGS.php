<?php

namespace Omaxe;

use Illuminate\Database\Eloquent\Model;

class ProjectRTGS extends Model
{
    //

    protected $table = 'project_r_t_g_s';

    protected $fillable = [
        'projects_id',
        'rtgs_image',

    ];

    public function projects()
    {
        return $this->HasMany('Omaxe\Projects');
    }
}

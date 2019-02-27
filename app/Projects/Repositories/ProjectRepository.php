<?php
/**
 * Created by PhpStorm.
 * User: karanbhasin
 * Date: 10/03/18
 * Time: 9:38 PM
 */

namespace App\Products\Repositories;

use App\Base\BaseRepository;
use App\Projects\Exceptions\ProjectInvalidArgumentException;
use App\Projects\Exceptions\ProjectNotFoundException;
use App\Projects\Project;
use App\Projects\Repositories\Interfaces\ProjectRepositoryInterface;
use App\Projects\Transformations\ProjectTransformable;
use App\Tools\UploadableTrait;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Database\QueryException;


class ProjectRepository extends BaseRepository implements ProjectRepositoryInterface{

    use UploadableTrait, ProductTransformable;

    public function __construct(Project $project)
    {
        $this->model = $project;
    }

}

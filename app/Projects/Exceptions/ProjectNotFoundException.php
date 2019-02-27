<?php
/**
 * Created by PhpStorm.
 * User: karanbhasin
 * Date: 10/03/18
 * Time: 9:32 PM
 */

namespace App\Projects\Exceptions;

use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class ProjectNotFoundException extends NotFoundHttpException
{

    /**
     * ProductNotFoundException constructor.
     */
    public function __construct()
    {
        parent::__construct('Project not found.');
    }
}
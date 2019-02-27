<?php
/**
 * Created by PhpStorm.
 * User: karanbhasin
 * Date: 10/03/18
 * Time: 9:41 PM
 */

namespace App\Base;

use Illuminate\Foundation\Http\FormRequest;

abstract class BaseFormRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }
}
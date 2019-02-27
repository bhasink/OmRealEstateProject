<?php

namespace Omaxe;
use Omaxe\Investors;
use Illuminate\Database\Eloquent\Model;

class InvestorCat extends Model
{
    public function investors()
    {
        return $this->hasMany('Omaxe\Investors');
    }
}

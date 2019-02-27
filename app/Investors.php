<?php

namespace Omaxe;
use Omaxe\InvestorCat;
use Illuminate\Database\Eloquent\Model;

class Investors extends Model
{
    protected $fillable = [
        'investor_image',
        'report_year',
        'investors_title',
        'inv_pdf',
        'investor_cat_id',
    ];

    public function investors_category()
    {
        return $this->belongsTo('Omaxe\InvestorCat');
    }
}

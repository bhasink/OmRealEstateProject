<?php

namespace Omaxe;
use Omaxe\ProjectSpecification;
use Omaxe\ProjectCategory;
use Omaxe\ProjectType;
use Omaxe\ProjectStatus;
use Omaxe\ProjectCity;
use Omaxe\ProjectFeatures;
use Omaxe\ProjectPropertyType;
use Omaxe\Nearby;
use Omaxe\Ebrochure;
use Omaxe\ProjectRTGS;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Projects extends Model
{
    protected $fillable = [
            'project_title',
            'project_slug',
            'price_range',
            'project_description',
            'project_map_link',
            'project_features',
            'project_Specification',
            'project_video_link',
            'project_bank_images',
            'project_gallery_images',
            'project_logo',
            'project_floor_images',
            'project_views',
            'project_visiblity',
            'project_category_id',
            'project_specification_id',
            'project_type_id',
            'project_city_id',
            'project_status_id',
            'project_logo'
    ];
    public function get_properties_by_categories($category_id){
        $cat_id = $category_id;
    }
    public function project_name_slug()
    {
        return $this->belongsTo('Omaxe\ProjectCategory');
    }
    public function project_category()
    {
        return $this->belongsTo('Omaxe\ProjectCategory');
    }
    public function project_specification()
    {
        return $this->hasMany('Omaxe\ProjectSpecification');
    }
    public function project_floor_plans(){
        return $this->hasMany('Omaxe\ProjectFloorPlan');
    }
    public function project_features()
    {
        return $this->hasMany('Omaxe\ProjectFeatures');
    }
    public function project_property_type()
    {
        return $this->hasMany('Omaxe\ProjectPropertyType');
    }
    public function project_nearby()
    {
        return $this->hasMany('Omaxe\Nearby');
    }
    public function project_type()
    {
        return $this->belongsTo('Omaxe\ProjectType');
    }
    public function project_city()
    {
        return $this->belongsTo('Omaxe\ProjectCity');
    }
    public function project_state()
    {
        return $this->belongsTo('Omaxe\ProjectState');
    }
    public function project_status()
    {
        return $this->belongsTo('Omaxe\ProjectStatus');
    }
    public function gallery(){
        return $this->hasMany('Omaxe\ProjectGallery');
    }
    public function e_brochure()
    {
        return $this->hasMany('Omaxe\Ebrochure');
    }
    public function rtgs()
    {
        return $this->hasMany('Omaxe\ProjectRTGS');
    }
    public function overview(){
        return $this->hasMany('Omaxe\OverviewDetails');
    }
}

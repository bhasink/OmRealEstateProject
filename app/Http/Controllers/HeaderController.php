<?php

namespace Omaxe\Http\Controllers;
use Omaxe\Projects;
use Omaxe\ProjectCity;
use Omaxe\ProjectStatus;
use Omaxe\ProjectType;
use Omaxe\ProjectSpecification;
use Omaxe\ProjectCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HeaderController extends Controller
{
    public function get_all_cities(){
        $cities = ProjectCity::all();
        return $cities;
    }
    public static function get_header_cities(){
        $datas = array();
        $get_all_cities =  $cities = ProjectCity::all();
        $cities = $get_all_cities;
        return $cities;
    }
    public static function get_res_current_projects(){
        $current_projects = Projects::whereProjectTypeId(1)->whereProjectStatusId(1)->latest()->get();
        return $current_projects;
    }
    public static function get_res_completed_projects(){
        $completed_projects = Projects::whereProjectTypeId(1)->whereProjectStatusId(3)->latest()->get();
        return $completed_projects;
    }
    public static function get_res_upcoming_projects(){
        $datas = array();
        $upcoming_projects = Projects::whereProjectStatusId(1)->whereProjectTypeId(1)->latest()->get();

        return $upcoming_projects;
    }
    public static function get_com_current_projects(){
        $current_projects = Projects::whereProjectStatusId(1)->whereProjectTypeId(2)->latest()->get();

        return $current_projects;
    }
    public static function get_com_completed_projects(){
        $completed_projects = Projects::whereProjectStatusId(3)->whereProjectTypeId(2)->latest()->get();

        return $completed_projects;
    }
}

<?php
/**
 * Handles the logic for filter
 * By: Tejashwi Kalp Taru, Thirty Six Labs Pvt Ltd
 * Contact: tejashwi@thirtysixlabs.com
 */

namespace Omaxe\Http\Controllers;

use Omaxe\Projects;
use Omaxe\ProjectCity;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Omaxe\Http\Controllers\HeaderController;


class Filtercontroller extends Controller
{
    public function applyFilter(Request $req){
        $city = $req->input('city');
        $project_type = $req->input('projecttype');
        $property_type = $req->input('propertytype');
        $price_range = $req->input('pricerange');
        $project_status = $req->input('projectstatus');
        $sorting = $req->input('sorting');
        $category_id = $req->input('category_id');
        $state_id = $req->input('state_id');

        $query = DB::table('projects');
        $query->join('project_cities', 'project_cities.id', '=', 'projects.project_city_id');
        if($property_type){
            $query->join('project_property_types', 'projects.id', '=' , 'project_property_types.projects_id');
        }

        if($category_id){
            $query->where('project_category_id',$category_id);
        }
        if($state_id){
            $query->where('project_state_id',$state_id);
        }


        if($city){
            $query->Where(function($query) use ($city){
                foreach($city as $key => $value){
                    if($key == 0) $query->where('project_city_id', $value);
                    else $query->orWhere('project_city_id', $value);
                }
            });
        }


        if($project_type){
            $query->Where(function($query) use ($project_type){
                foreach($project_type as $key => $value){
                    if($key == 0) $query->where('project_type_id', $value);
                    else $query->orWhere('project_type_id', $value);
                }
            });
        }

        if($project_status){
            $query->Where(function($query) use ($project_status){
                foreach($project_status as $key => $value){
                    if($key == 0) $query->where('project_status_id', $value);
                    else $query->orWhere('project_status_id', $value);
                }
            });
        }

        if($price_range){
            $query->Where(function($query) use ($price_range){
                foreach($price_range as $key => $value){
                    if($value == 1){
                        $value = "4999999";
                        if($key == 0){
                            $price_range1 = $value;

                            $query->whereRaw('FIND_IN_SET(?,price_range)', [$price_range1]);

                        }
                        else {
                            $price_range2 = $value;

                            $query->orWhereRaw('FIND_IN_SET(?,price_range)', [$price_range2]);
                        }
                    }
                    if($value == 2){
                        $value = "9999999";
                        if($key == 0) {
                            $price_range3 = $value;

                            $query->whereRaw('FIND_IN_SET(?,price_range)', [$price_range3]);
                        }
                        else {
                            $price_range4 = $value;

                            $query->orWhereRaw('FIND_IN_SET(?,price_range)', [$price_range4]);
                        }
                    }
                    if($value == 3){
                        $value = "10000000";
                        if($key == 0){
                            $price_range5 = $value;

                            $query->whereRaw('FIND_IN_SET(?,price_range)', [$price_range5]);
                        }
                        else {
                            $price_range6 = $value;

                            $query->orWhereRaw('FIND_IN_SET(?,price_range)', [$price_range6]);
                        }
                    }
                }
            });
        }

        if($property_type){
            $query->Where(function($query) use ($property_type){
                foreach($property_type as $key => $value){
                    if($value == 2) $value = "2BHK";
                    if($value == 3) $value = "3BHK";
                    if($value == 4) $value = "4BHK";

                    if($key == 0){
                        $query->where('project_property_types.property_type', $value);
                    }else{
                        $query->orWhere('project_property_types.property_type', $value);
                    }

                }
            });
        }

        if($sorting){
            if($sorting == 1){
                $query->orderBy('price_range', 'ASC');
            }
            if($sorting == 2){
                $query->orderBy('price_range', 'DESC');
            }
        }

        $query->orderByRaw(DB::raw("FIELD(project_stamp_id,1,2,7,4,5,6,3,11,13,14,8,9,10,12)"));

        $query->groupBy('projects.id');

        $total = json_encode($query->paginate(4));
        $total = json_decode($total);
        $total = json_encode($total);
        $result = $query->get();
        print_r($total); exit;
        print(json_encode($result));
    }




    public function get_properties_of_specific_state_rand_by_state1(){
     $shubhangan = 496;
     $hemisphere = 570;
     $omaxeananda = 530;
     $theforestspa = 432;
     $krishnacastle = 514;
     $krishnacrest = 515;
     $fullmoon = 517;
     $eternity = 516;
     $celestiagrand = 506;
     $twintower = 511;
     $grandomaxe = 474;
     $hazratganjresidency  =476;
     $r2 = 481;
     $waterscapes = 482;
     $clockton = 449;
     $holidayinn = 450;
     $celestiaroyal = 543;
     $cassia = 544;
     $internationaltradecentre = 452;
     $theresort = 453;
     $thelake  = 541;
     $plots = 546;
        $project_details = Projects::where('id',$shubhangan)
            -> orWhere('id',$hemisphere)
            -> orWhere('id',$omaxeananda)
            -> orWhere('id',$theforestspa)
            -> orWhere('id',$krishnacastle)
            -> orWhere('id',$krishnacrest)
            -> orWhere('id',$fullmoon)
            -> orWhere('id',$eternity)
            -> orWhere('id',$celestiagrand)
            -> orWhere('id',$twintower)
            -> orWhere('id',$grandomaxe)
            -> orWhere('id',$hazratganjresidency)
            -> orWhere('id',$r2)
            -> orWhere('id',$waterscapes)
            -> orWhere('id',$clockton)
            -> orWhere('id',$holidayinn)
            -> orWhere('id',$celestiaroyal)
            -> orWhere('id',$cassia)
            -> orWhere('id',$internationaltradecentre)
            -> orWhere('id',$theresort)
            -> orWhere('id',$thelake)
            -> orWhere('id',$plots)
            ->orderBy(DB::raw('RAND()'))
            ->get();
        return $project_details;
    }




    public function get_random_trending_properties(){
        $random_projects = Projects::with('project_category',
                                          'project_specification',
                                          'project_type',
                                          'project_city',
                                          'project_status'
                                        )
                                    ->limit(6)->orderBy(DB::raw('RAND()'))->get();
        return $random_projects;
    }

    public function getPropertyTypes($residential = TRUE){
        $query = DB::table('project_property_types');
        $query->join('projects', 'projects.id', '=' , 'project_property_types.projects_id');
        if($residential)
        {
            $query->where('projects.project_type_id', 1);
            $query->orderByRaw(DB::raw("FIELD(property_type,'STUDIO/SERVICE APARTMENTS','DUPLEX','VILLAS','1BHK','1BHK+STUDY/S/R/STORE','2BHK','2BHK+STUDY/S/R/STORE','3BHK','3BHK+STUDY/S/R/STORE','4BHK','4BHK+STUDY/S/R/STORE','5BHK','PENTHOUSES')"));
        }
        else
        {
            $query->where('projects.project_type_id', 2);
            $query->orderByRaw(DB::raw("FIELD(property_type, 'FOOD COURT','MULTIPLEX','OFFICE SPACES','SHOPS',  'STUDIO APARTMENTS')"));
        }
        $result = $query->distinct()->get(['project_property_types.property_type', 'project_property_types.slug', 'projects.project_type_id']);
        return $result;
    }

    public function homesearch(Request $req){
        $type = $req->input('p_type');
        $city = $req->input('city');
        $price = $req->input('price');
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['allcities'] = ProjectCity::all();
        $data['trending_properties'] = $this->get_properties_of_specific_state_rand_by_state1();
        $data['residential'] = $this->getPropertyTypes();
        $data['commercial'] = $this->getPropertyTypes(false);
        $query = DB::table('projects');
        $query->join('project_cities', 'project_cities.id', '=', 'projects.project_city_id');
        if($city){
            $query->where('project_city_id', $city);
        }
        if($type){
            $query->where('project_type_id', $type);
        }

        $price_range = $price;

        if($price){
            $query->whereRaw('FIND_IN_SET(?,price_range)', [$price_range]);

        }

        $query->orderByRaw(DB::raw("FIELD(project_stamp_id,1,2,7,4,5,6,3,11,13,14,8,9,10,12)"));

        $result = $query->paginate(4);
        $data['project_details'] = $result;
        $data['total_count'] = $result->total();
        $data['selected_city'] = $city;
        $data['selected_price'] = $price;
        $data['selected_property'] = $type;
        return view('content.project.project-search',compact('data'));
    }
    public function showProperty($city, $property_type, $property_name, $bhk){
        $data = array();
        return view('content.project.bhk-view',compact('data'));
    }
}

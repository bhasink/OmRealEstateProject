<?php

namespace Omaxe\Http\Controllers\Admin;
use Omaxe\ProjectContact;
use Omaxe\EbrochureContactUs;
use Omaxe\EnquireNowContact;
use Omaxe\Projects;
use Omaxe\Nearby;
use Omaxe\ProjectCity;
use Omaxe\ProjectState;
use Omaxe\ProjectCategory;
use Omaxe\ProjectStatus;
use Omaxe\ProjectType;
use Omaxe\ProjectFloorPlan;
use Omaxe\ProjectGallery;
use Omaxe\Ebrochure;
use Omaxe\ProjectFeatures;
use Omaxe\ProjectSpecification;
use Omaxe\OverviewDetails;
use Omaxe\MetaTag;
use Omaxe\ProjectRTGS;
use Omaxe\ProjectSpecCopy;
use Omaxe\ProjectFeaturesCopy;
use Omaxe\ProjectPropertyType;
use Illuminate\Http\Request;
use Omaxe\Http\Controllers\Controller;
use Input;
use Validator;
use Response;
use Session;
use Carbon\Carbon;
use DB;
use Auth;


class AdminProjectContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $contact_details = ProjectContact::all();
        return view('admin.projects.contact-us.contact',compact('contact_details'));

    }

    public function ebrochure_contact_us(){
        $contact_details = EbrochureContactUs::all();
        return view('admin.projects.contact-us.ebrochure_contact',compact('contact_details'));
    }


    public function enquiry_now__contact(){
        $contact_details = EnquireNowContact::all();
        return view('admin.projects.contact-us.enquirynow',compact('contact_details'));
    }

    public function project_list(){

        if ((Auth::user()->role =="LeadsAdmin") || (Auth::user()->role =="SeoAdmin")){
            return redirect('/omaxeadmin');

        }

        $get_projects = Projects::orderBy('id','desc')->get();

        $total_projects = count($get_projects);

        //week
        $ProjectContactsWeek =   ProjectContact::whereBetween('created_at', [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()])->get();

        $ProjectContactsWeek = count($ProjectContactsWeek);


        //month
        $today = date('Y-m-d');
        $date = date_create($today);
        date_sub($date, date_interval_create_from_date_string("30 days"));
        $beforeOneMonth = date_format($date, "Y-m-d");

        $ProjectContactsMonth = ProjectContact::where('created_at','>=', $beforeOneMonth)->get();

        $ProjectContactsMonth = count($ProjectContactsMonth);

        //year
        $ProjectContactsYear = ProjectContact::whereYear('created_at', date('Y'))->get();

        $ProjectContactsYear = count($ProjectContactsYear);

        //city


        $project_city = ProjectCity::all()->toArray();


        return view('admin.projects.list',compact('get_projects','total_projects','ProjectContactsWeek','ProjectContactsMonth','ProjectContactsYear','project_city'));

    }



    public function project_list_delete($id,Request $request){
        //perticular project
        $project_id = $id;

        $find_project_name = Projects::findOrFail($project_id);

        $check_project_delete = $find_project_name->delete();

        if ($check_project_delete){

            $request->session()
                ->flash('alert-delete','Project Succesfully Deleted ! We will get back to you later!');
        return redirect('/omaxeadmin/projects/list');

        }

    }


    public function project_list_edit($id){


//        dd(bcrypt('qqqqqqq'));

        //project id
        $project_id = $id;

        $data = array();

        //get project
        $get_project_details = Projects::findOrFail($project_id)->toArray();

//        dd($get_project_details);

        $data['get_project_details'] = $get_project_details;

        //brand image

        $project_brand_images = $get_project_details['project_brand_images'];
        $project_brand_images = explode(',',$project_brand_images);
        $data['project_brand_images'] = $project_brand_images;




        //projects city


        $getproject_city = ProjectCity::where('id',$get_project_details['project_city_id'])->first();

        $getproject_type = ProjectType::where('id',$get_project_details['project_type_id'])->first();




        $url_get = '/projects/'.$getproject_city->name.'/'.$getproject_type->name.'/'.$get_project_details['project_slug'];


        //meta tag

        $project_meta_details = MetaTag::where('url',$url_get)->first();

//        dd($url_get);

        $data['project_meta_details'] = $project_meta_details;


        //nearby location
        $get_project_nearby_location = Nearby::where('projects_id',$project_id)
                                                        ->first();
        $data['get_project_nearby_location'] = $get_project_nearby_location;

        //floor plan
        $get_project_floor_plans = ProjectFloorPlan::where('projects_id',$project_id)
            ->get()->toArray();

        $data['get_project_floor_plans'] = $get_project_floor_plans;


        //e-brochure

        $get_project_Ebrochure = Ebrochure::where('projects_id',$project_id)
            ->first();

        $data['get_project_Ebrochure'] = $get_project_Ebrochure;


        //project gallery
        $get_project_gallery = ProjectGallery::where('projects_id',$project_id)
            ->get()->toArray();
        $data['get_project_gallery'] = $get_project_gallery;

        //overview details
        $get_project_OverviewDetails = OverviewDetails::where('projects_id',$project_id)
            ->first();

//        dd($get_project_OverviewDetails);
        $data['get_project_OverviewDetails'] = $get_project_OverviewDetails;


        //overview details
        $get_project_ProjectRTGS = ProjectRTGS::where('projects_id',$project_id)
            ->first();
        $data['get_project_ProjectRTGS'] = $get_project_ProjectRTGS;


        //project gallery images


        $get_project_ProjectGallery = ProjectGallery::where('projects_id',$project_id)
            ->first();


        $project_elevation_image = $get_project_ProjectGallery['elevation_image'];

        $project_elevation_image = explode(',',$project_elevation_image);
        $data['project_elevation_image'] = $project_elevation_image;

//        dd($project_elevation_image);

        $project_construction_updates_image = $get_project_ProjectGallery['construction_updates_image'];
        $project_construction_updates_image = explode(',',$project_construction_updates_image);
        $data['project_construction_updates_image'] = $project_construction_updates_image;

        $project_layout_image = $get_project_ProjectGallery['layout_image'];
        $project_layout_image = explode(',',$project_layout_image);
        $data['project_layout_image'] = $project_layout_image;

        $project_location_map_image = $get_project_ProjectGallery['location_map_image'];
        $project_location_map_image = explode(',',$project_location_map_image);
        $data['project_location_map_image'] = $project_location_map_image;

        $project_sample_flat_image = $get_project_ProjectGallery['sample_flat_image'];
        $project_sample_flat_image = explode(',',$project_sample_flat_image);
        $data['project_sample_flat_image'] = $project_sample_flat_image;


//        $data['get_project_ProjectRTGS'] = $get_project_ProjectGallery;




        //nearbies
        $get_project_Nearby = Nearby::where('projects_id',$project_id)
            ->first();
        $data['get_project_Nearby'] = $get_project_Nearby;

        //project city
        $get_project_cities = ProjectCity::all();
        $data['get_project_cities'] = $get_project_cities;

        //project state
        $get_project_states = ProjectState::all();
        $data['get_project_state'] = $get_project_states;

        //project stamp
        $get_project_stamp = ProjectCategory::all();
        $data['get_project_stamp'] = $get_project_stamp;

        //project stamp
        $get_project_status = ProjectStatus::all();
        $data['get_project_status'] = $get_project_status;

        //project type
        $get_project_type = ProjectType::all();
        $data['get_project_type'] = $get_project_type;


        //bank_images


        $get_bank_images = $get_project_details['project_bank_images'];

        $get_bank_images = explode(',',$get_bank_images);

        $data['get_bank_images'] = $get_bank_images;


        //bank_images


        $get_price_range = $get_project_details['price_range'];

        $get_price_range = explode(',',$get_price_range);

        $data['get_price'] = $get_price_range;


        //features

        $get_project_features = ProjectFeaturesCopy::select('id','name')
            ->groupBy('name')
            ->get();

        $get_project_features_check = ProjectFeatures::where('projects_id',$project_id)
            ->pluck('name')->toArray();

        $data['get_project_features_check'] = $get_project_features_check;

        //specification

//        $get_project_specifications = ProjectSpecCopy::select('id','name')
//            ->groupBy('name')
            ;
//        $get_project_specifications = DB::raw('select DISTINCT name from project_specifications')->all();
//            ->groupBy('name')
        ;

//        $get_project_specifications = DB::table('project_specifications')->distinct()->get(['id','name']);
//
//        $get_project_specifications = ProjectSpecCopy::select('name','id')->distinct('name')->get();


        $get_project_specifications = ProjectSpecCopy::select('id','name')
            ->groupBy('name')->get();



//        dd($get_project_specifications);

        $get_project_specification_check = ProjectSpecification::where('projects_id',$project_id)
            ->pluck('name')->toArray();

        $get_project_property_types = ProjectPropertyType::where('projects_id',$project_id)
            ->pluck('slug')->toArray();


        $data['get_project_property_types'] = $get_project_property_types;

        $data['get_project_specification_check'] = $get_project_specification_check;


        $data['get_project_features'] = $get_project_features;

        $data['get_project_specification'] = $get_project_specifications;




        return view('admin.projects.edit',compact('data'));
    }


    public function validate_project_edit_details($request){

        $this->validate($request,[
            'project_title' => 'required',
            'url' => 'required',
            'project_video_link' => 'required',
            'project_map_link' =>'required',
//            'price_range' => 'required',
            'project_city' => 'required',
            'project_state' =>'required',
            'project_status' => 'required',
//            'project_category' => 'required',
            'project_stamp' => 'required',
            'project_type' => 'required',
            'project_description' => 'required',
            'project_logo' => 'file:1|max:2048',
            'banner_image' => 'file:1|max:2048',
            'latitude' => 'required',
            'longitude' => 'required',
            'project_rtgs_image' => 'max:2048',
            'e_brochure' => 'file:1|max:2048',
//            'project_bank_images.0' => 'required'


        ],[
            'project_rtgs_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'e_brochure.uploaded' => 'The maximum file size should not exceed 2mb.',
            'project_logo.uploaded' => 'The maximum file size should not exceed 2mb.',
            'banner_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'name.required' => ' The name field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'Number.required' => ' The phone field is required.',
            'city.required' => ' The city field is required.',
            'zipcode.required' => ' The zipcode field is required.',
            'address.required' => ' The address field is required.',
            'message.required' => ' The message field is required.',

        ]);
    }


    public function save_project_edit(Request $request){

        $this->validate_project_edit_details($request);

        //project id
        $project_id = $request->projects_id;

        $update_projects = Projects::findOrFail($project_id);


        //project
        $project_title = $request->project_title;
        $project_slug = $request->url;
        $project_video_link = $request->project_video_link;
        $project_map_link = $request->project_map_link;
        $project_city_id = $request->project_city;
        $project_state = $request->project_state;
        $project_status = $request->project_status;
        $project_category = $request->project_category;
        $project_stamp = $request->project_stamp;
        $project_type = $request->project_type;
        $project_description = $request->project_description;

        //bank images
        $project_bank_images = $request->project_bank_images;

        if ($project_bank_images != null){

            $project_bank_images = implode(',',$project_bank_images);

        }

        $update_projects->project_bank_images = $project_bank_images;


        //price range

         $project_price_range = $request->price_range;

        if ($project_price_range != null){

            $project_price_range = implode(',',$project_price_range);

        }

        $update_projects->price_range = $project_price_range;

        $update_projects->project_title = $project_title;
        $update_projects->project_slug = $project_slug;
        $update_projects->project_description = $project_description;
        $update_projects->project_map_link = $project_map_link;
        $update_projects->project_video_link = $project_video_link;
        $update_projects->project_city_id = $project_city_id;
        $update_projects->project_state_id = $project_state;
        $update_projects->project_status_id = $project_status;
        $update_projects->project_category_id = $project_category;
        $update_projects->project_stamp_id = $project_stamp;
        $update_projects->project_type_id = $project_type;


        //project gallery main page

        if ($request->project_gallery_images){

            $project_elevation_images_data = $request->project_gallery_images;

            $project_elevation_images_data = implode(',',$project_elevation_images_data);

            $update_projects->project_gallery_images = $project_elevation_images_data;

        }else{
            $update_projects->project_gallery_images = 0;
        }


        //lat N long

        $latitude = $request->latitude;
        $longitude = $request->longitude;


        //meta details

        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $meta_keywords = $request->meta_keywords;

        //overview details

        $overview_location = $request->overview_location;
        $overview_size = $request->overview_size;
        $overview_type = $request->overview_type;
        $overview_rera_no = $request->overview_rera_no;



        //update brand images


        $project_brand_images = $request->project_brand_images;

        if ($project_brand_images != null){

            $project_brand_images = implode(',',$project_brand_images);

        }

        $update_projects->project_brand_images = $project_brand_images;

        $update_projects->project_visiblity = 1;



        //update project logo
        if( $project_logo = $request->file('project_logo')){

            $project_logo_file = time().'-'.$project_logo->getClientOriginalName();

            $project_logo->move(public_path().'/images/project_logo/',$project_logo_file);

            $update_projects->project_logo = $project_logo_file;

        }else{
            $update_projects->project_logo = $update_projects->project_logo;
        }


        //update banner image
        if( $project_banner_image = $request->file('banner_image')){

            $project_banner_image_file = time().'-'.$project_banner_image->getClientOriginalName();

            $project_banner_image->move(public_path().'/images/website_banner/',$project_banner_image_file);

            $update_projects->banner_image = $project_banner_image_file;

        }
        else{
            $update_projects->banner_image = $update_projects->banner_image;
        }


        $check_update = $update_projects->update();

        if ($check_update){

        }

        //update meta tag

        if ($project_slug != null){

            $find_city = ProjectCity::where('id',$project_city_id)->first();

            $find_project_type = ProjectType::where('id',$project_type)->first();

            $update_meta_tag = MetaTag::where('url','/projects/'.$find_city->name.'/'.$find_project_type->name.'/'.$project_slug)->first();

            if ($update_meta_tag !=null){


                $update_meta_tag->url = '/projects/'.$find_city->name.'/'.$find_project_type->name.'/'.$project_slug;
                $update_meta_tag->meta_title = $meta_title;
                $update_meta_tag->meta_description = $meta_description;
                $update_meta_tag->meta_keywords = $meta_keywords;
                $update_meta_tag->meta_status = 1;

                $update_meta_tag_status = $update_meta_tag->update();

                if ($update_meta_tag_status){

                }

            }else{
                    $create_meta_tag = new  MetaTag;

                    $find_city = ProjectCity::where('id',$project_city_id)->first();

                    $find_project_type = ProjectType::where('id',$project_type)->first();

                    $create_meta_tag->url = '/projects/'.$find_city->name.'/'.$find_project_type->name.'/'.$project_slug;
                    $create_meta_tag->meta_title = $meta_title;
                    $create_meta_tag->meta_description = $meta_description;
                    $create_meta_tag->meta_keywords = $meta_keywords;
                    $create_meta_tag->meta_status = 1;

                    $check_meta_tag_status = $create_meta_tag->save();

                    if ($check_meta_tag_status){

                    }
            }

        }



        //Update RTGS

        if( $project_rtgs_image= $request->file('project_rtgs_image')){



            $check_rtgs_image = ProjectRTGS::where('projects_id',$project_id)
                                                    ->first();



            if ($check_rtgs_image ==null){

                $project_rtgs_image_file = time().'-'.$project_rtgs_image->getClientOriginalName();

                $project_rtgs_image->move(public_path().'/images/rtgs/',$project_rtgs_image_file);


                $create_rtgs_data = new ProjectRTGS;

                $create_rtgs_data->projects_id = $project_id;

                $create_rtgs_data->rtgs_image = $project_rtgs_image_file;

                $check_rtgs_save = $create_rtgs_data->save();

                if ($check_rtgs_save){

                }

            }else{

                $project_rtgs_image_file = time().'-'.$project_rtgs_image->getClientOriginalName();

                $project_rtgs_image->move(public_path().'/images/rtgs/',$project_rtgs_image_file);

                $check_rtgs_image->projects_id = $project_id;

                $check_rtgs_image->rtgs_image = $project_rtgs_image_file;

                $check_rtgs_save = $check_rtgs_image->update();

                if ($check_rtgs_save){

                }
            }

        }


        //Update E-brochure


        if( $project_e_brochure = $request->file('e_brochure')){



            $check_ebrochure = Ebrochure::where('projects_id',$project_id)
                ->first();


            if ($check_ebrochure == null){

                $project_e_brochure_file = time().'-'.$project_e_brochure->getClientOriginalName();

                $project_e_brochure->move(public_path().'/ebrochures/',$project_e_brochure_file);


                $create_e_brochure = new Ebrochure;

                $create_e_brochure->projects_id = $project_id;

                $create_e_brochure->brouchure_pdf = $project_e_brochure_file;

                $check_e_brochure_save = $create_e_brochure->save();

                if ($check_e_brochure_save){

                }

            }else{

                $project_e_brochure_file = time().'-'.$project_e_brochure->getClientOriginalName();

                $project_e_brochure->move(public_path().'/ebrochures/',$project_e_brochure_file);

                $check_ebrochure->projects_id = $project_id;

                $check_ebrochure->brouchure_pdf = $project_e_brochure_file;

                $check_e_brochure_save = $check_ebrochure->update();

                if ($check_e_brochure_save){

                }
            }
        }




        //Update nearby data


        if ($latitude !=null && $longitude!=null){


            $check_nearby = Nearby::where('projects_id',$project_id)
                ->first();


            if ($check_nearby == null){

                $create_nearbies = new Nearby;

                $create_nearbies->projects_id = $project_id;
                $create_nearbies->latitude = $latitude;
                $create_nearbies->longitude = $longitude;

                $check_nearbies_status = $create_nearbies->save();

                if ($check_nearbies_status){

                }

            }else{
                $check_nearby->projects_id = $project_id;
                $check_nearby->latitude = $latitude;
                $check_nearby->longitude = $longitude;

                $check_nearby_status = $check_nearby->save();

                if ($check_nearby_status){

                }
            }
        }


        //  Update project overview

        if ($overview_location !=null || $overview_size!=null || $overview_type!=null || $overview_rera_no!=null){


            $check_OverviewDetails = OverviewDetails::where('projects_id',$project_id)
                ->first();


            if ($check_OverviewDetails == null){

                $create_project_overview = new OverviewDetails;

                $create_project_overview->projects_id = $project_id;
                $create_project_overview->location = $overview_location;
                $create_project_overview->size = $overview_size;
                $create_project_overview->type = $overview_type;
                $create_project_overview->rera_no = $overview_rera_no;

                $check_overview_status = $create_project_overview->save();

                if ($check_overview_status){
                }
            }else{

                $check_OverviewDetails->projects_id = $project_id;
                $check_OverviewDetails->location = $overview_location;
                $check_OverviewDetails->size = $overview_size;
                $check_OverviewDetails->type = $overview_type;
                $check_OverviewDetails->rera_no = $overview_rera_no;

                $check_overview_status = $check_OverviewDetails->update();

                if ($check_overview_status){
                }
            }
        }

        //Update Project Property Types


        $project_property_types = $request->project_property_types;

        if ($project_property_types){


            $check_project_property_types = ProjectPropertyType::where('projects_id',$project_id)
                ->get();

            if($check_project_property_types->first() == null){

                foreach ($project_property_types as $key=>$project_property_types_value){

                    $explode_value = explode(',',$project_property_types_value);

                    $property_type = $explode_value[0];

                    $property_slug = $explode_value[1];

                    $create_project_property_types = new ProjectPropertyType;

                    $create_project_property_types->projects_id = $project_id;

                    $create_project_property_types->property_type = $property_type;

                    $create_project_property_types->slug = $property_slug;

                    $create_project_property_types_save = $create_project_property_types->save();

                    if($create_project_property_types_save){

                    }

                }

            }else{

                $delete_project_specification = ProjectPropertyType::where('projects_id',$project_id)->delete();


                foreach ($project_property_types as $key=>$project_property_types_value){

                    $explode_value = explode(',',$project_property_types_value);

                    $property_type = $explode_value[0];

                    $property_slug = $explode_value[1];

                    $create_project_property_types = new ProjectPropertyType;

                    $create_project_property_types->projects_id = $project_id;

                    $create_project_property_types->property_type = $property_type;

                    $create_project_property_types->slug = $property_slug;

                    $create_project_property_types_save = $create_project_property_types->save();

                    if($create_project_property_types_save){

                    }

                }


            }
        }



        //Update  Project Specification


        $project_specification = $request->project_specification;

        if ($project_specification){


            $check_project_specification = ProjectSpecification::where('projects_id',$project_id)
                                                        ->get();

            if($check_project_specification->first() == null){

                foreach ($project_specification as $key=>$project_specification_value){


                    $get_project_specification = ProjectSpecCopy::findOrFail($project_specification_value);

                    $create_project_specification = new ProjectSpecification;

                    $create_project_specification->projects_id = $project_id;

                    $create_project_specification->name = $get_project_specification->name;

                    $create_project_specification->description = $get_project_specification->description;

                    $create_project_specification->features_image = $get_project_specification->features_image;

                    $check_project_specification_save = $create_project_specification->save();

                    if($check_project_specification_save){

                    }

                }

            }else{

                $delete_project_specification = ProjectSpecification::where('projects_id',$project_id)->delete();


                foreach ($project_specification as $key=>$project_specification_value){

                    $get_project_specification = ProjectSpecCopy::findOrFail($project_specification_value);

                    $create_project_specification = new ProjectSpecification;

                    $create_project_specification->projects_id = $project_id;

                    $create_project_specification->name = $get_project_specification->name;

                    $create_project_specification->description = $get_project_specification->description;

                    $create_project_specification->features_image = $get_project_specification->features_image;

                    $check_project_specification_save = $create_project_specification->save();

                    if($check_project_specification_save){

                    }

                }


            }
        }



        // Update project features



        $project_features = $request->project_features;


        if ($project_features){

            $check_project_features = ProjectFeatures::where('projects_id',$project_id)
                ->get();

            if($check_project_features->first() == null) {

                foreach ($project_features as $key => $project_features_value) {


                    $get_project_features = ProjectFeaturesCopy::findOrFail($project_features_value);

                    $create_project_features = new ProjectFeatures;

                    $create_project_features->projects_id = $project_id;

                    $create_project_features->name = $get_project_features->name;

                    $create_project_features->description = $get_project_features->description;

                    $create_project_features->features_image = $get_project_features->features_image;

                    $check_project_features_save = $create_project_features->save();

                    if ($check_project_features_save) {

                    }

                }

            } else{

//                foreach ($project_features as $key => $project_features_value) {
//
//                    $get_project_features = ProjectFeatures::where('id',$project_features_value)
//                                                    ->where('projects_id')->get();
//
//
//
//                    $delete_value = $get_project_features->delete();
//
//                    if ($delete_value){
//
//                    }
//
//                }


                $delete_project_features= ProjectFeatures::where('projects_id',$project_id)->delete();


                foreach ($project_features as $key => $project_features_value) {


                    $get_project_features = ProjectFeaturesCopy::findOrFail($project_features_value);

                    $create_project_features = new ProjectFeatures;

                    $create_project_features->projects_id = $project_id;

                    $create_project_features->name = $get_project_features->name;

                    $create_project_features->description = $get_project_features->description;

                    $create_project_features->features_image = $get_project_features->features_image;

                    $check_project_features_save = $create_project_features->save();

                    if ($check_project_features_save) {

                    }

                }

//                foreach ($data_Array_val as $data_Array_value_features){
//
//                    $data_Array = explode(',',$data_Array_value);
//
//                    $create_project_features = new ProjectFeatures;
//
//                    $create_project_features->projects_id = $project_id;
//
//                    $create_project_features->name = $data_Array_value_features[0];
//
//                    $create_project_features->description = $data_Array_value_features[1];
//
//                    $create_project_features->features_image = $data_Array_value_features[2];
//
//                    $create_project_features_save = $create_project_features->save();
//
//                    if($create_project_features_save){
//
//                    }
//                }

            }

        }




        //Update floor plans

        $floor_plan_name = $request->floor_plan_name;

        $floor_plan_name_update = $request->floor_plan_name_update;


        $floor_plan_image = $request->file('floor_plan_image');

//        if ($floor_plan_name[0] !=null || $floor_plan_image[0] !=null){

            $check_floor_plan_data = ProjectFloorPlan::where('projects_id',$project_id)->get();


            if($check_floor_plan_data->first() == null){

                foreach ($floor_plan_name as $key=>$floor_plan_name_value){


                    $floor_plan_image = $request->file('floor_plan_image');

                    $floor_plan_image_file = time().'-'.$floor_plan_image[$key]->getClientOriginalName();

                    $floor_plan_image[$key]->move(public_path().'/images/floor_plans/',$floor_plan_image_file);

                    $create_project_plans = new ProjectFloorPlan;

                    $create_project_plans->projects_id = $project_id;

                    $create_project_plans->name = $floor_plan_name_value;

                    $create_project_plans->floor_plan_image = $floor_plan_image_file;

                    $check_project_plans_save = $create_project_plans->save();

                    if ($check_project_plans_save){

                    }

                }

            }else{

                $check_floor_plan_data_by_id = ProjectFloorPlan::where('projects_id',$project_id)->pluck('id')->toArray();

                $floor_plan_id = $request->floor_plan_id;

                if ($floor_plan_id[0] !=null){

                    $compare_array = array_diff($check_floor_plan_data_by_id,$floor_plan_id);

                    foreach ($compare_array as $compare_array_value){

                        $delete_removed_floor_plans = ProjectFloorPlan::findOrFail($compare_array_value);

                        $chk = $delete_removed_floor_plans->delete();

                        if ($chk){

                        }
                    }

                }else{

                    foreach ($check_floor_plan_data_by_id as $compare_array_value){

                        $delete_removed_floor_plans = ProjectFloorPlan::findOrFail($compare_array_value);

                        $chk = $delete_removed_floor_plans->delete();

                        if ($chk){

                        }
                    }

                }


                if ($floor_plan_image[0] !=null) {

                    foreach ($floor_plan_name_update as $key => $floor_plan_name_value) {

                        $floor_plan_image = $request->file('floor_plan_image');

                        $floor_plan_image_file = time() . '-' . $floor_plan_image[$key]->getClientOriginalName();

                        $floor_plan_image[$key]->move(public_path() . '/images/floor_plans/', $floor_plan_image_file);

                        $create_project_plans = new ProjectFloorPlan;

                        $create_project_plans->projects_id = $project_id;

                        $create_project_plans->name = $floor_plan_name_value;

                        $create_project_plans->floor_plan_image = $floor_plan_image_file;

                        $check_project_plans_save = $create_project_plans->save();

                        if ($check_project_plans_save) {

                        }

                    }

                }

            }

//        }


        //gallery elevation images

        $project_elevation_images = $request->project_gallery_images;



        if ($project_elevation_images != null){

            $project_elevation_images = implode(',',$project_elevation_images);

            $get_project_gallery_data = ProjectGallery::where('projects_id',$project_id)->first();


            if ($get_project_gallery_data != null){

                $get_project_gallery_data->elevation_image = $project_elevation_images;

                $check_project_gallery_status = $get_project_gallery_data->save();

                if ($check_project_gallery_status){

                }

            }
            else{

                $create_project_gallery = new ProjectGallery;
                $create_project_gallery->projects_id = $project_id;
                $create_project_gallery->elevation_image = $project_elevation_images;

                $check_project_gallery_status = $create_project_gallery->save();

                if ($check_project_gallery_status){

                }
            }
        }
//        else{
//            $get_project_gallery_data = ProjectGallery::where('projects_id',$project_id)->first();
//            $get_project_gallery_data->elevation_image = null;
//
//            $check_project_gallery_status = $get_project_gallery_data->save();
//
//            if ($check_project_gallery_status){
//
//            }
//        }



        //gallery construction_updates_images

        $construction_updates_images = $request->construction_updates_images;


        if ($construction_updates_images != null){

            $construction_updates_images = implode(',',$construction_updates_images);


            $get_project_gallery_data =ProjectGallery::where('projects_id',$project_id)->first();

            if ($get_project_gallery_data !=null){

                $get_project_gallery_data->construction_updates_image = $construction_updates_images;

                $check_project_gallery_status = $get_project_gallery_data->save();

                if ($check_project_gallery_status){

                }

            }
            else{

                $create_project_gallery = new ProjectGallery;
                $create_project_gallery->projects_id = $project_id;
                $create_project_gallery->construction_updates_image = $construction_updates_images;

                $check_project_gallery_status = $create_project_gallery->save();

                if ($check_project_gallery_status){

                }
            }
        }





        //gallery $layout_images

        $layout_images = $request->layout_images;


        if ($layout_images != null){

            $layout_images = implode(',',$layout_images);


            $get_project_gallery_data =ProjectGallery::where('projects_id',$project_id)->first();

            if ($get_project_gallery_data !=null){

                $get_project_gallery_data->layout_image = $layout_images;

                $check_project_gallery_status = $get_project_gallery_data->save();

                if ($check_project_gallery_status){

                }

            }
            else{

                $create_project_gallery = new ProjectGallery;
                $create_project_gallery->projects_id = $project_id;
                $create_project_gallery->layout_image = $layout_images;

                $check_project_gallery_status = $create_project_gallery->save();

                if ($check_project_gallery_status){

                }
            }
        }



        //gallery sample_flat_images

        $sample_flat_images = $request->sample_flat_images;


        if ($sample_flat_images != null){

            $sample_flat_images = implode(',',$sample_flat_images);


            $get_project_gallery_data = ProjectGallery::where('projects_id',$project_id)->first();

            if ($get_project_gallery_data !=null){

                $get_project_gallery_data->sample_flat_image = $sample_flat_images;

                $check_project_gallery_status = $get_project_gallery_data->save();

                if ($check_project_gallery_status){

                }

            }
            else{

                $create_project_gallery = new ProjectGallery;
                $create_project_gallery->projects_id = $project_id;
                $create_project_gallery->sample_flat_image = $sample_flat_images;

                $check_project_gallery_status = $create_project_gallery->save();

                if ($check_project_gallery_status){

                }
            }
        }




        //gallery $location_map_images

        $location_map_images = $request->location_map_images;


        if ($location_map_images != null){

            $location_map_images = implode(',',$location_map_images);


            $get_project_gallery_data = ProjectGallery::where('projects_id',$project_id)->first();

            if ($get_project_gallery_data !=null){

                $get_project_gallery_data->location_map_image = $location_map_images;

                $check_project_gallery_status = $get_project_gallery_data->save();

                if ($check_project_gallery_status){

                }

            }
            else{

                $create_project_gallery = new ProjectGallery;
                $create_project_gallery->projects_id = $project_id;
                $create_project_gallery->location_map_image = $location_map_images;

                $check_project_gallery_status = $create_project_gallery->save();

                if ($check_project_gallery_status){

                }
            }
        }


        $request->session()
            ->flash('alert-update-success','Succesfully Updated ! We will get back to you later!');
        return redirect('/omaxeadmin/projects/list');


    }



    public function create_project(){

        if ((Auth::user()->role =="LeadsAdmin") || (Auth::user()->role =="SeoAdmin")){
            return redirect('/omaxeadmin');

        }

        $data = array();

        $get_project_features = ProjectFeatures::select('id','name')
                ->distinct('id')
           ->get();

        $get_project_specifications = ProjectSpecification::select('id','name')
            ->distinct('projects_id')
            ->get();

        $get_project_cities = ProjectCity::all();

        $get_project_states = ProjectState::all();

        $get_project_stamp = ProjectCategory::all();

        $get_project_type = ProjectType::all();

        $data['get_project_cities'] = $get_project_cities;

        $data['get_project_states'] = $get_project_states;

        $data['get_project_stamp'] = $get_project_stamp;

        $data['get_project_type'] = $get_project_type;


        $data['get_project_features'] = $get_project_features;

        $data['get_project_specification'] = $get_project_specifications;


        return view('admin.projects.create',compact('data'));
    }


    public function get_lat_long_by_address(Request $request){


        $address = $request->input('address');

        $prepAddr = str_replace(' ','+',$address);

        $geocode=file_get_contents('https://maps.google.com/maps/api/geocode/json?key=AIzaSyC--a71ExakwcxoH1aX_tl_DT7xAXEs6dU&address='.$prepAddr.'&sensor=false');

        $output= json_decode($geocode);

        $latitude = $output->results[0]->geometry->location->lat;

        $longitude = $output->results[0]->geometry->location->lng;


        return response()->json([

            'success' => $output

        ]);

    }


    public function validate_project_details($request){

        $this->validate($request,[
            'project_title' => 'required',
            'url' => 'required',
            'project_video_link' => 'required',
            'project_map_link' =>'required',
//            'price_range' => 'required',
            'project_city' => 'required',
            'project_state' =>'required',
            'project_status' => 'required',
//            'project_category' => 'required',
            'project_stamp' => 'required',
            'project_type' => 'required',
            'project_description' => 'required',
            'project_logo' => 'required|max:2048',
            'banner_image' => 'required|max:2048',
            'latitude' => 'required',
            'longitude' => 'required',
            'project_rtgs_image' => 'max:2048',
            'e_brochure' => 'max:2048',
//            'project_bank_images.0' => 'required'


        ],[
            'name.required' => ' The name field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'Number.required' => ' The phone field is required.',
            'city.required' => ' The city field is required.',
            'zipcode.required' => ' The zipcode field is required.',
            'address.required' => ' The address field is required.',
            'message.required' => ' The message field is required.',
            'project_rtgs_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'e_brochure.uploaded' => 'The maximum file size should not exceed 2mb.',
            'project_logo.uploaded' => 'The maximum file size should not exceed 2mb.',
            'banner_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);
    }

    public function save_project(Request $request){


        $this->validate_project_details($request);

        $project_title = $request->project_title;
        $project_slug = $request->url;
        $project_video_link = $request->project_video_link;
        $project_map_link = $request->project_map_link;
//        $price_range = $request->price_range;
        $project_city_id = $request->project_city;
        $project_state = $request->project_state;
        $project_status = $request->project_status;
        $project_category = $request->project_category;
        $project_stamp = $request->project_stamp;
        $project_type = $request->project_type;
        $project_description = $request->project_description;



        //overview details

        $overview_location = $request->overview_location;
        $overview_size = $request->overview_size;
        $overview_type = $request->overview_type;
        $overview_rera_no = $request->overview_rera_no;

        //lat N long

        $latitude = $request->latitude;
        $longitude = $request->longitude;

        //meta details

        $meta_title = $request->meta_title;
        $meta_description = $request->meta_description;
        $meta_keywords = $request->meta_keywords;



        //create project


        $create_project = new Projects;

        $create_project->project_title = $project_title;
        $create_project->project_slug = $project_slug;
        $create_project->project_description = $project_description;
        $create_project->project_map_link = $project_map_link;
        $create_project->project_video_link = $project_video_link;
//        $create_project->price_range = $price_range;
        $create_project->project_city_id = $project_city_id;
        $create_project->project_state_id = $project_state;
        $create_project->project_status_id = $project_status;
        $create_project->project_category_id = $project_category;
        $create_project->project_stamp_id = $project_stamp;
        $create_project->project_type_id = $project_type;



        //project gallery main page

        if ($request->project_gallery_images){

            $project_elevation_images_data = $request->project_gallery_images;

            $project_elevation_images_data = implode(',',$project_elevation_images_data);

            $create_project->project_gallery_images = $project_elevation_images_data;

        }else{
            $create_project->project_gallery_images = 0;
        }



        //bank images
        $project_bank_images = $request->project_bank_images;

        if ($project_bank_images != null){

            $project_bank_images = implode(',',$project_bank_images);

        }

        $create_project->project_bank_images = $project_bank_images;


        //price range

        $project_price_range = $request->price_range;

        if ($project_price_range != null){

            $project_price_range = implode(',',$project_price_range);

        }

        $create_project->price_range = $project_price_range;


        //brand images


        $project_brand_images = $request->project_brand_images;

        if ($project_brand_images != null){

            $project_brand_images = implode(',',$project_brand_images);

        }

        $create_project->project_brand_images = $project_brand_images;




        $create_project->project_visiblity = 1;


        if( $project_logo = $request->file('project_logo')){

            $project_logo_file = time().'-'.$project_logo->getClientOriginalName();

            $project_logo->move(public_path().'/images/project_logo/',$project_logo_file);

            $create_project->project_logo = $project_logo_file;

        }

        if( $project_banner_image = $request->file('banner_image')){

            $project_banner_image_file = time().'-'.$project_banner_image->getClientOriginalName();

            $project_banner_image->move(public_path().'/images/website_banner/',$project_banner_image_file);

            $create_project->banner_image = $project_banner_image_file;

        }


        $check_status = $create_project->save();


            if($check_status){


                //Create RTGS

                if( $project_rtgs_image= $request->file('project_rtgs_image')){

                    $project_rtgs_image_file = time().'-'.$project_rtgs_image->getClientOriginalName();

                    $project_rtgs_image->move(public_path().'/images/rtgs/',$project_rtgs_image_file);


                    $create_rtgs_data = new ProjectRTGS;

                    $create_rtgs_data->projects_id = $create_project->id;

                    $create_rtgs_data->rtgs_image = $project_rtgs_image_file;

                    $check_rtgs_save = $create_rtgs_data->save();

                    if ($check_rtgs_save){

                    }

                }


                //Create E-brochure


                if( $project_e_brochure = $request->file('e_brochure')){

                    $project_e_brochure_file = time().'-'.$project_e_brochure->getClientOriginalName();

                    $project_e_brochure->move(public_path().'/ebrochures/',$project_e_brochure_file);


                    $create_e_brochure = new Ebrochure;

                    $create_e_brochure->projects_id = $create_project->id;

                    $create_e_brochure->brouchure_pdf = $project_e_brochure_file;

                    $check_e_brochure_save = $create_e_brochure->save();

                       if ($check_e_brochure_save){

                       }

                }



                //  project features



                $project_features = $request->project_features;


                if ($project_features){


                foreach ($project_features as $key=>$project_features_value){


                    $get_project_features = ProjectFeatures::findOrFail($project_features_value);

                    $create_project_features = new ProjectFeatures;

                    $create_project_features->projects_id = $create_project->id;

                    $create_project_features->name = $get_project_features->name;

                    $create_project_features->description = $get_project_features->description;

                    $create_project_features->features_image = $get_project_features->features_image;

                    $check_project_features_save = $create_project_features->save();

                    if($check_project_features_save){

                    }

                }

                }


                // Project Specification


                $project_specification = $request->project_specification;

                if ($project_specification){

                foreach ($project_specification as $key=>$project_specification_value){


                    $get_project_specification = ProjectSpecification::findOrFail($project_specification_value);

                    $create_project_specification = new ProjectSpecification;

                    $create_project_specification->projects_id = $create_project->id;

                    $create_project_specification->name = $get_project_specification->name;

                    $create_project_specification->description = $get_project_specification->description;

                    $create_project_specification->features_image = $get_project_specification->features_image;

                    $check_project_specification_save = $create_project_specification->save();

                    if($check_project_specification_save){

                    }

                }

                }



                //floor plans

                $floor_plan_name = $request->floor_plan_name;

                $floor_plan_image = $request->file('floor_plan_image');

                if ($floor_plan_name[0] !=null && $floor_plan_image[0] !=null){

                    foreach ($floor_plan_name as $key=>$floor_plan_name_value){


                        $floor_plan_image = $request->file('floor_plan_image');


                        $floor_plan_image_file = time().'-'.$floor_plan_image[$key]->getClientOriginalName();

                        $floor_plan_image[$key]->move(public_path().'/images/floor_plans/',$floor_plan_image_file);


                        $create_project_plans = new ProjectFloorPlan;

                        $create_project_plans->projects_id = $create_project->id;

                        $create_project_plans->name = $floor_plan_name_value;

                        $create_project_plans->floor_plan_image = $floor_plan_image_file;

                        $check_project_plans_save = $create_project_plans->save();

                        if ($check_project_plans_save){

                        }

                    }

                }




                //  create project overview

                $create_project_overview = new OverviewDetails;

                $create_project_overview->projects_id = $create_project->id;
                $create_project_overview->location = $overview_location;
                $create_project_overview->size = $overview_size;
                $create_project_overview->type = $overview_type;
                $create_project_overview->rera_no = $overview_rera_no;

                $check_overview_status = $create_project_overview->save();

                if ($check_overview_status){

                }


                //create nearby data


                if ($latitude !=null && $longitude!=null){

                    $create_nearbies = new Nearby;

                    $create_nearbies->projects_id = $create_project->id;
                    $create_nearbies->latitude = $latitude;
                    $create_nearbies->longitude = $longitude;

                    $check_nearbies_status = $create_nearbies->save();

                    if ($check_nearbies_status){

                    }

                }


                //create meta tag

                if ($project_slug != null){

                $create_meta_tag = new  MetaTag;


                $find_city = ProjectCity::where('id',$project_city_id)->first();

                $find_project_type = ProjectType::where('id',$project_type)->first();

                $create_meta_tag->url = '/projects/'.$find_city->name.'/'.$find_project_type->name.'/'.$project_slug;
                $create_meta_tag->meta_title = $meta_title;
                $create_meta_tag->meta_description = $meta_description;
                $create_meta_tag->meta_keywords = $meta_keywords;
                $create_meta_tag->meta_status = 1;

                $check_meta_tag_status = $create_meta_tag->save();

                    if ($check_meta_tag_status){

                    }

                }



                //gallery elevation images

                $project_elevation_images = $request->project_gallery_images;



                if ($project_elevation_images != null){

                    $project_elevation_images = implode(',',$project_elevation_images);

                    $get_project_gallery_data = ProjectGallery::where('projects_id',$create_project->id)->first();


                    if ($get_project_gallery_data != null){

                        $get_project_gallery_data->elevation_image = $project_elevation_images;

                        $check_project_gallery_status = $get_project_gallery_data->save();

                        if ($check_project_gallery_status){

                        }

                    }
                    else{

                        $create_project_gallery = new ProjectGallery;
                        $create_project_gallery->projects_id = $create_project->id;
                        $create_project_gallery->elevation_image = $project_elevation_images;

                        $check_project_gallery_status = $create_project_gallery->save();

                        if ($check_project_gallery_status){

                        }
                    }
                }



                //gallery construction_updates_images

                $construction_updates_images = $request->construction_updates_images;


                if ($construction_updates_images != null){

                    $construction_updates_images = implode(',',$construction_updates_images);


                    $get_project_gallery_data =ProjectGallery::where('projects_id',$create_project->id)->first();

                    if ($get_project_gallery_data !=null){

                        $get_project_gallery_data->construction_updates_image = $construction_updates_images;

                        $check_project_gallery_status = $get_project_gallery_data->save();

                        if ($check_project_gallery_status){

                        }

                    }
                    else{

                        $create_project_gallery = new ProjectGallery;
                        $create_project_gallery->projects_id = $create_project->id;
                        $create_project_gallery->construction_updates_image = $construction_updates_images;

                        $check_project_gallery_status = $create_project_gallery->save();

                        if ($check_project_gallery_status){

                        }
                    }
                }





                //gallery $layout_images

                $layout_images = $request->layout_images;


                if ($layout_images != null){

                    $layout_images = implode(',',$layout_images);


                    $get_project_gallery_data =ProjectGallery::where('projects_id',$create_project->id)->first();

                    if ($get_project_gallery_data !=null){

                        $get_project_gallery_data->layout_image = $layout_images;

                        $check_project_gallery_status = $get_project_gallery_data->save();

                        if ($check_project_gallery_status){

                        }

                    }
                    else{

                        $create_project_gallery = new ProjectGallery;
                        $create_project_gallery->projects_id = $create_project->id;
                        $create_project_gallery->layout_image = $layout_images;

                        $check_project_gallery_status = $create_project_gallery->save();

                        if ($check_project_gallery_status){

                        }
                    }
                }



                //gallery sample_flat_images

                $sample_flat_images = $request->sample_flat_images;


                if ($sample_flat_images != null){

                    $sample_flat_images = implode(',',$sample_flat_images);


                    $get_project_gallery_data = ProjectGallery::where('projects_id',$create_project->id)->first();

                    if ($get_project_gallery_data !=null){

                        $get_project_gallery_data->sample_flat_image = $sample_flat_images;

                        $check_project_gallery_status = $get_project_gallery_data->save();

                        if ($check_project_gallery_status){

                        }

                    }
                    else{

                        $create_project_gallery = new ProjectGallery;
                        $create_project_gallery->projects_id = $create_project->id;
                        $create_project_gallery->sample_flat_image = $sample_flat_images;

                        $check_project_gallery_status = $create_project_gallery->save();

                        if ($check_project_gallery_status){

                        }
                    }
                }




                //gallery $location_map_images

                $location_map_images = $request->location_map_images;


                if ($location_map_images != null){

                    $location_map_images = implode(',',$location_map_images);


                    $get_project_gallery_data = ProjectGallery::where('projects_id',$create_project->id)->first();

                    if ($get_project_gallery_data !=null){

                        $get_project_gallery_data->location_map_image = $location_map_images;

                        $check_project_gallery_status = $get_project_gallery_data->save();

                        if ($check_project_gallery_status){

                        }

                    }
                    else{

                        $create_project_gallery = new ProjectGallery;
                        $create_project_gallery->projects_id = $create_project->id;
                        $create_project_gallery->location_map_image = $location_map_images;

                        $check_project_gallery_status = $create_project_gallery->save();

                        if ($check_project_gallery_status){

                        }
                    }
                }


                $request->session()
                    ->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
                return redirect('/omaxeadmin/projects/list');

            }else{


                    $request->session()
                        ->flash('alert-error','Problem while submitting');
                    return redirect('/omaxeadmin/projects/create');


            }

    }


    public function multiplefileStore1(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/bankimages'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();
//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }

    public function multiplefileStore2(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/gallery'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();
//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }


    public function multiplefileStore3(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/gallery'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();
//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }



    public function multiplefileStore4(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/gallery'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();
//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }


    public function multiplefileStore5(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/gallery'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();
//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }



    public function multiplefileStore6(Request $request) {

        $input = Input::all();

//        Session::put('test',$input);

        $rules = array(
            'file' => 'image|max:3000',
        );

//        $validation = Validator::make($input, $rules);
//
//        if ($validation->fails()) {
//            return Response::make($validation->errors->first(), 400);
//        }

        $destinationPath = 'images/gallery'; // upload path
        $extension = Input::file('file')->getClientOriginalExtension(); // getting file extension

        $fileName =rand(11111, 99999) . '-' . Input::file('file')->getClientOriginalName();

//        $fileName = rand(11111, 99999) . '.' . $extension; // renameing image
        $upload_success = Input::file('file')->move($destinationPath, $fileName); // uploading file to given path

//        Session::put('test',$fileName);
//        fileName
        if ($upload_success) {
            return Response::json([
                'success'=>'200',
                'fileName'=>$fileName
            ]);
        } else {
            return Response::json('error', 400);
        }
    }


}
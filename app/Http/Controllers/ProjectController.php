<?php
namespace Omaxe\Http\Controllers;
use Omaxe\Projects;
use Omaxe\ProjectCity;
use Omaxe\ProjectState;
use Omaxe\ProjectType;
use Omaxe\ProjectSpecification;
use Omaxe\ProjectCategory;
use Omaxe\ProjectContact;
use Omaxe\ProjectFeatures;
use Omaxe\Ebrochure;
use Omaxe\ProjectPropertyType;
use Omaxe\OverviewDetails;
use Omaxe\ProjectGallery;
use Omaxe\EbrochureContactUs;
use Omaxe\AcheivementPanel;
use Omaxe\TestimonialModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Session;
use Mail;
use Omaxe\Mail\ProjectContactMail;
use Omaxe\Mail\EbrochureMail;
use Omaxe\Mail\ThankYouMail;
use Omaxe\Mail\OtpMail;
use GuzzleHttp\Client;
use Omaxe\Http\Controllers\HeaderController;
class ProjectController extends Controller
{
    public function get_home_projects()
    {
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();

        $data['acheivement_panel'] = AcheivementPanel::latest()->get();
        $data['testimonial_panel'] = TestimonialModel::latest()->get();

        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $random_properties = $this->get_properties_of_specific_state_rand_by_state();
        $ProjectDetails_by_cats_1 = $this->get_properties_by_categories(1);
        $ProjectDetails_by_cats_2 = $this->get_properties_by_categories(2);
        $ProjectDetails_by_cats_3 = $this->get_properties_by_categories(3);
        $ProjectDetails_by_cats_4 = $this->get_properties_by_categories(4);
        $random_projects = $this->get_random_properties();
        $cities = $this->get_all_cities();
        $data['ProjectDetails_by_random'] = $random_properties;
        $data['ProjectDetails_by_cats_1'] = $ProjectDetails_by_cats_1;
        $data['ProjectDetails_by_cats_2'] = $ProjectDetails_by_cats_2;
        $data['ProjectDetails_by_cats_3'] = $ProjectDetails_by_cats_3;
        $data['ProjectDetails_by_cats_4'] = $ProjectDetails_by_cats_4;
        $data['random_projects'] = $random_projects;
        $data['cities'] = $cities;
        $project_type = $this->get_all_project_type();
        $city_projects_dl = $this->get_properties_of_specific_cities(1);
        $city_projects_up = $this->get_properties_of_specific_cities(2);
        $city_projects_hp = $this->get_properties_of_specific_cities(3);
        $city_projects_pb = $this->get_properties_of_specific_cities(4);
        $city_projects_uk = $this->get_properties_of_specific_cities(5);
        $delhi = 1;$haryana = 2;$up = 4;$punjab = 3;
        $city_projects_dlncr = $this->get_properties_of_specific_state_delhi($delhi);
        $city_projects_haryana = $this->get_properties_of_specific_state_haryana($haryana);
        $city_projects_upradesh = $this->get_properties_of_specific_state_up($up);
        $city_projects_punjab = $this->get_properties_of_specific_state($punjab);
        $data['city_projects_dlncr'] = $city_projects_dlncr;
        $data['city_projects_haryana'] = $city_projects_haryana;
        $data['city_projects_upradesh'] = $city_projects_upradesh;
        $data['city_projects_punjab'] = $city_projects_punjab;
        $data['city_projects_dl'] = $city_projects_dl;
        $data['city_projects_up'] = $city_projects_up;
        $data['city_projects_hp'] = $city_projects_hp;
        $data['city_projects_pb'] = $city_projects_pb;
        $data['city_projects_uk'] = $city_projects_uk;
        $data['project_type'] = $project_type;
        return view('content.home.home', compact('data'));
    }
    public static function getAll()
    {
        return $posts = ProjectSpecification::projects()->all()
            ->take(2)->get();
    }
    public function get_specific_project($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){

            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)->first();

            if($city == null){
                return abort(404);
            }

            $city_id = $city->id;

        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();

            if ($project_type){
                $project_type_id = $project_type->id;
            }
            else{
                return abort(404);
            }
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        if ($project_details){
            $project_id = $project_details->id;
        }
        else{
            return abort(404);
        }
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details->project_gallery_images);
        $features_images = explode(',',$project_details->project_features_images);
        $features_images_row_count = $project_details->project_features_images;
        $data['features_images_row_count'] = $features_images_row_count;
        $bankimagess = explode(',',$project_details->project_bank_images);
        $brandimagess = explode(',',$project_details->project_brand_images);
        $bank_images_count = $project_details->project_bank_images;
        $data['bank_images_count'] = $bank_images_count;
        $brand_images_count = $project_details->project_brand_images;
        $data['brand_images_count'] = $brand_images_count;
        $video_link = explode(',',$project_details->project_video_link);
        $data['gallery_images'] = $gallery_images;
        $data['features_images'] = $features_images;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $project_gallery = Projects::find($project_id)
            ->gallery;
        if ($project_gallery->first()) {
            $elevation_image = $project_gallery
                ->first()->elevation_image;
            $elevation_image_exp = explode(',', $elevation_image);
            $construction_updates_image = $project_gallery
                ->first()->construction_updates_image;
            $construction_updates_image_exp = explode(',', $construction_updates_image);
            $layout_image = $project_gallery
                ->first()->layout_image;
            $layout_image_exp = explode(',', $layout_image);
            $location_map_image = $project_gallery
                ->first()->location_map_image;
            $location_map_image_exp = explode(',', $location_map_image);
            $sample_flat_image = $project_gallery
                ->first()->sample_flat_image;
            $sample_flat_image_exp = explode(',', $sample_flat_image);
            $data['elevation_image_exp'] = $elevation_image_exp;
            $data['construction_updates_image_exp'] = $construction_updates_image_exp;
            $data['layout_image_exp'] = $layout_image_exp;
            $data['location_map_image_exp'] = $location_map_image_exp;
            $data['sample_flat_image_exp'] = $sample_flat_image_exp;
        }else{
            $data['elevation_image_exp'] = "";
            $data['construction_updates_image_exp'] = "";
            $data['layout_image_exp'] = "";
            $data['location_map_image_exp'] = "";
            $data['sample_flat_image_exp'] = "";
        }
        $data['bankimagess'] = $bankimagess;
        $data['brandimagess'] = $brandimagess;
        $data['video_link'] = $video_link;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $product_specifications = Projects::find($project_id)
            ->project_specification;
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $project_features = Projects::find($project_id)
            ->project_features;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $rtgs = Projects::find($project_id)
            ->rtgs;
        if ($rtgs->first() != null){
        $rtgs_data = $rtgs->first()->rtgs_image;
        $rtgs_data_explode = explode(',',$rtgs_data);
        $data['rtgs'] = $rtgs_data_explode;
        }
        else{
            $data['rtgs'] = null;
        }
        $overview  = Projects::find($project_id)
            ->overview;
        $data['overview'] = $overview;
        $project_features_rowcount = $project_features
            ->count();
        $product_specifications_rowcount = $product_specifications
            ->count();
        $data['product_specifications_rowcount'] = $product_specifications_rowcount;
        $data['project_features_rowcount'] = $project_features_rowcount;
        $data['product_specifications'] = $product_specifications;
        $data['project_features'] = $project_features;
        $data['head_city'] = HeaderController::get_header_cities();
        return view('content.project.project-details',compact('data'));
    }
    public function get_project_location($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }

        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;

        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $data['gallery_images'] = $gallery_images;


        $project_gallery = Projects::find($project_id)
            ->gallery;

        if ($project_gallery->first()) {
            $elevation_image = $project_gallery
                ->first()
                ->elevation_image;


            $elevation_image_exp = explode(',', $elevation_image);
            $construction_updates_image = $project_gallery
                ->first()
                ->construction_updates_image;
            $construction_updates_image_exp = explode(',', $construction_updates_image);
            $layout_image = $project_gallery
                ->first()
                ->layout_image;
            $layout_image_exp = explode(',', $layout_image);
            $location_map_image = $project_gallery
                ->first()
                ->location_map_image;
            $location_map_image_exp = explode(',', $location_map_image);
            $sample_flat_image = $project_gallery
                ->first()
                ->sample_flat_image;
            $sample_flat_image_exp = explode(',', $sample_flat_image);
            $data['elevation_image_exp'] = $elevation_image_exp;
            $data['construction_updates_image_exp'] = $construction_updates_image_exp;
            $data['layout_image_exp'] = $layout_image_exp;
            $data['location_map_image_exp'] = $location_map_image_exp;
            $data['sample_flat_image_exp'] = $sample_flat_image_exp;
        }else{
            $data['elevation_image_exp'] = "";
            $data['construction_updates_image_exp'] = "";
            $data['layout_image_exp'] = "";
            $data['location_map_image_exp'] = "";
            $data['sample_flat_image_exp'] = "";
        }


        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $e_brochure = Projects::find($project_id)->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.project-location',compact('data'));
    }


    public function validate_ebrochure($request){

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'email' => 'required|email',
            'phone' =>'required|numeric|min:10',
            'residential_type' => 'required|min:1|max:35',
            'address' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'name.required' => ' The name field is required.',
            'project_query.required' => ' The project query field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'phone.required' => ' The phone field is required.',
            'residential_type.required' => ' The residential type field is required.',
            'country.required' => ' The country field is required.',
            'city.required' => ' The city field is required.',
            'zipcode.required' => ' The zipcode field is required.',
            'address.required' => ' The address field is required.',
        ]);


    }

    public function save_ebrochure($request){

        $ebrochure_contact = new EbrochureContactUs;

        $ebrochure_contact->name = $request->name;
        $ebrochure_contact->email = $request->email;
        $ebrochure_contact->phone = $request->phone;
        $ebrochure_contact->residential_type = $request->residential_type;
        $ebrochure_contact->address = $request->address;
        $ebrochure_contact->project_name = $request->project_name;

        $check = $ebrochure_contact->save();

        return $check;

    }

    public function contact_us_ebrochure(Request $request){
        $input = $request->all();

        $this->validate_ebrochure($request);

        $check = $this->save_ebrochure($request);

        $file_name = $request->ebrochure;

        if($check){

            $data = ['message' => 'Thank You'];

            $user_email = "leads@omaxe.com";

            Mail::to($user_email)->send(new  EbrochureMail($request));

            Mail::to($request->email)->send(new ThankYouMail($data));


            $data_string = (array(
                array(
                    'Attribute' => 'Source',
                    'Value' => 'Ebrochure_Contact_Us'
                ),
                array(
                    'Attribute' => 'mx_Project_Name',
                    'Value' => $request->project_name
                ),
                array(
                    'Attribute' => 'FirstName',
                    'Value' => $request->name
                ),
                array(
                    'Attribute' => 'EmailAddress',
                    'Value' => $request->email
                ),
                array(
                    'Attribute' => 'Phone',
                    'Value' => $request->phone
                ),
                array(
                    'Attribute' => 'mx_Residential_Status',
                    'Value' => $request->residential_type
                ),
                array(
                    'Attribute' => 'mx_Street1',
                    'Value' => $request->address
                )
            )
            );

            try
            {


                $curl = curl_init('https://api.leadsquared.com/v2/LeadManagement.svc/Lead.Capture?accessKey=u$r9cb627dd5a339ef0915e09af5764349d&secretKey=64faea3dafae6515b9305ccd47d6dda29bfd191d');
                curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
                curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($curl, CURLOPT_HEADER, 0);
                curl_setopt($curl, CURLOPT_POSTFIELDS, json_encode($data_string));
                curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
                curl_setopt($curl, CURLOPT_HTTPHEADER, array(
                    "Content-Type:application/json",
                    "Content-Length:".strlen(json_encode($data_string))
                ));
                $json_response = curl_exec($curl);
                curl_close($curl);
            } catch (Exception $ex) {
                curl_close($curl);
            }



            $request->session()->flash('alert-successb','Succesfully Submitted ! We will get back to you later!');
            $request->session()->flash('ebrochure-data',$file_name);
            return redirect('/thankyou');

        }else{
            $request->session()->flash('alert-error', 'Failed to download e-brochure');
            return redirect('/projects/'.$request->project_city.'/'.$request->project_type.'/'.$request->project_slug.'ebrochure/contact-us');
        }

    }


    //ebrochure
    public function e_brochure($file_name)
    {
        $file_path = public_path('ebrochures/' . $file_name);


        if (file_exists( public_path() . '/ebrochures/' . $file_name)) {
            if ($file_path) {
                return response()
                    ->download($file_path);
            } else {
                return abort(404);
            }
        } else {
            return abort(404);
        }

    }
    //end ebrochure

    public function validate_contact_us_project($request){

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'email' => 'required|email',
            'phone' =>'required|numeric|min:10',
            'interested_visit_site' => 'required|min:1|max:35',
            'residential_type' => 'required|min:1|max:35',
            'country' => 'required|min:2|max:35',
            'city' => 'required|min:2|max:35',
            'zipcode' => 'required|numeric',
            'address' => 'required',
            'project_query' => 'required'
        ],[
            'name.required' => ' The name field is required.',
            'project_query.required' => ' The project query field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'phone.required' => ' The phone field is required.',
            'interested_visit_site.required' => ' The interested in visit site field is required.',
            'residential_type.required' => ' The residential type field is required.',
            'country.required' => ' The country field is required.',
            'city.required' => ' The city field is required.',
            'zipcode.required' => ' The zipcode field is required.',
            'address.required' => ' The address field is required.',
        ]);

    }

    public function contact_us_project(Request $request){

        $client = new Client;

        $input = $request->all();

        $this->validate_contact_us_project($request);

        $type="project_otp";

        if ($request->residential_type == "RI"){

            $rndno=rand(1000, 9999);

            Session::put('project_session',$input);
            Session::put('otp',$rndno);
            $session_start = Session::put('start',time());
            Session::put('expire',$session_start+(5*60));

            $text=  "Dear User, OTP to submit your enquiry is $rndno".". ". "Valid for 5 minutes.";


            $sms_api = "http://bulksmsindia.mobi/sendurlcomma.aspx?user=20068076&pwd=zr6upz&senderid=OMXTRS&mobileno=$request->phone&msgtext=$text";

            $sms_apii= $request = $client->request( 'GET',$sms_api );


            $status = $sms_apii->getStatusCode();

        }else{
            $rndno=rand(1000, 9999);

            Session::put('project_session',$input);
            Session::put('otp',$rndno);
            $session_start = Session::put('start',time());
            Session::put('expire',$session_start+(5*60));
            Session::put('user_email',$request->email);


            $data = ['usr_otp' => $rndno];

            Mail::to($request->email)->send(new OtpMail($data));


        }

        return redirect()->route('otp',$type);
        
    }


    public function ebrochure_contact_us($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $data['gallery_images'] = $gallery_images;
        $data['project_type'] = $project_details->project_type->name;
        $data['project_city'] = $project_details->project_city->name;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)->project_property_type;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $data['e_brochure'] = $e_brochure;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.ebrochure-contact',compact('data'));
    }


    public function contact_us($city,$property_type,$property_name){

        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $data['gallery_images'] = $gallery_images;
        $data['project_type'] = $project_details->project_type->name;
        $data['project_city'] = $project_details->project_city->name;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)->project_property_type;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $data['e_brochure'] = $e_brochure;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.project-contact',compact('data'));
    }

    public function location_map($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $count_gallery_images = $project_details
            ->project_gallery_images;
        $project_gallery = Projects::find($project_id)
            ->gallery;

        if ($project_gallery->first()) {
            $elevation_image = $project_gallery
                ->first()
                ->elevation_image;


            $elevation_image_exp = explode(',', $elevation_image);
            $construction_updates_image = $project_gallery
                ->first()
                ->construction_updates_image;
            $construction_updates_image_exp = explode(',', $construction_updates_image);
            $layout_image = $project_gallery
                ->first()
                ->layout_image;
            $layout_image_exp = explode(',', $layout_image);
            $location_map_image = $project_gallery
                ->first()
                ->location_map_image;
            $location_map_image_exp = explode(',', $location_map_image);
            $sample_flat_image = $project_gallery
                ->first()
                ->sample_flat_image;
            $sample_flat_image_exp = explode(',', $sample_flat_image);
            $data['elevation_image_exp'] = $elevation_image_exp;
            $data['construction_updates_image_exp'] = $construction_updates_image_exp;
            $data['layout_image_exp'] = $layout_image_exp;
            $data['location_map_image_exp'] = $location_map_image_exp;
            $data['sample_flat_image_exp'] = $sample_flat_image_exp;
        }else{
            $data['elevation_image_exp'] = "";
            $data['construction_updates_image_exp'] = "";
            $data['layout_image_exp'] = "";
            $data['location_map_image_exp'] = "";
            $data['sample_flat_image_exp'] = "";
        }
        $data['count_gallery_images'] = $count_gallery_images;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $features_images = explode(',',$project_details->project_features_images);
        $bank_images = explode(',',$project_details->project_bank_images);
        $video_link = explode(',',$project_details->project_video_link);
        $data['gallery_images'] = $gallery_images;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.location-map',compact('data'));
    }

    public function nearby($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $data['gallery_images'] = $gallery_images;
        $data['project_type'] = $project_details->project_type->name;
        $data['project_city'] = $project_details->project_city->name;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $nearby = Projects::find($project_id)
            ->project_nearby;
        $data['nearby'] = $nearby;
        $project_floor_plans = Projects::find($project_id)->project_floor_plans;


        $project_gallery = Projects::find($project_id)
            ->gallery;

        if ($project_gallery->first()) {
            $elevation_image = $project_gallery
                ->first()
                ->elevation_image;


            $elevation_image_exp = explode(',', $elevation_image);
            $construction_updates_image = $project_gallery
                ->first()
                ->construction_updates_image;
            $construction_updates_image_exp = explode(',', $construction_updates_image);
            $layout_image = $project_gallery
                ->first()
                ->layout_image;
            $layout_image_exp = explode(',', $layout_image);
            $location_map_image = $project_gallery
                ->first()
                ->location_map_image;
            $location_map_image_exp = explode(',', $location_map_image);
            $sample_flat_image = $project_gallery
                ->first()
                ->sample_flat_image;
            $sample_flat_image_exp = explode(',', $sample_flat_image);
            $data['elevation_image_exp'] = $elevation_image_exp;
            $data['construction_updates_image_exp'] = $construction_updates_image_exp;
            $data['layout_image_exp'] = $layout_image_exp;
            $data['location_map_image_exp'] = $location_map_image_exp;
            $data['sample_flat_image_exp'] = $sample_flat_image_exp;
        }else{
            $data['elevation_image_exp'] = "";
            $data['construction_updates_image_exp'] = "";
            $data['layout_image_exp'] = "";
            $data['location_map_image_exp'] = "";
            $data['sample_flat_image_exp'] = "";
        }

        $data['project_floor_plans'] = $project_floor_plans;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.nearby',compact('data'));
    }

    public function floorplans($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details->project_floor_images);
        $count_floor_plan_images = $project_details->project_floor_images;
        $data['count_floor_plan_images'] = $count_floor_plan_images;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $features_images = explode(',',$project_details->project_features_images);
        $bank_images = explode(',',$project_details->project_bank_images);
        $video_link = explode(',',$project_details->project_video_link);
        $data['gallery_images'] = $gallery_images;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.floor-plans',compact('data'));
    }


    public function gallery($city,$property_type,$property_name){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details
            ->project_gallery_images);
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $count_gallery_images = $project_details
            ->project_gallery_images;
        $project_gallery = Projects::find($project_id)
            ->gallery;

        if ($project_gallery->first()) {
            $elevation_image = $project_gallery
                ->first()
                ->elevation_image;


            $elevation_image_exp = explode(',', $elevation_image);
            $construction_updates_image = $project_gallery
                ->first()
                ->construction_updates_image;
            $construction_updates_image_exp = explode(',', $construction_updates_image);
            $layout_image = $project_gallery
                ->first()
                ->layout_image;
            $layout_image_exp = explode(',', $layout_image);
            $location_map_image = $project_gallery
                ->first()
                ->location_map_image;
            $location_map_image_exp = explode(',', $location_map_image);
            $sample_flat_image = $project_gallery
                ->first()
                ->sample_flat_image;
            $sample_flat_image_exp = explode(',', $sample_flat_image);
            $data['elevation_image_exp'] = $elevation_image_exp;
            $data['construction_updates_image_exp'] = $construction_updates_image_exp;
            $data['layout_image_exp'] = $layout_image_exp;
            $data['location_map_image_exp'] = $location_map_image_exp;
            $data['sample_flat_image_exp'] = $sample_flat_image_exp;
        }else{
            $data['elevation_image_exp'] = "";
            $data['construction_updates_image_exp'] = "";
            $data['layout_image_exp'] = "";
            $data['location_map_image_exp'] = "";
            $data['sample_flat_image_exp'] = "";
        }
        $data['count_gallery_images'] = $count_gallery_images;
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $features_images = explode(',',$project_details->project_features_images);
        $bank_images = explode(',',$project_details->project_bank_images);
        $video_link = explode(',',$project_details->project_video_link);
        $data['gallery_images'] = $gallery_images;
        $data['head_city'] = HeaderController::get_header_cities();
        $ProjectPropertyType = Projects::find($project_id)
            ->project_property_type;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.gallery',compact('data'));
    }

    public function property_type($city,$property_type,$property_name,$propdata){
        $data = array();
        $project_city = $city;
        if ($city){
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = ProjectCity::where('name',$removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
        }
        $project_property_type = $property_type;
        if ($property_type){
            $project_type = ProjectType::where('name',$project_property_type)
                ->first();
            $project_type_id = $project_type->id;
        }
        $project_property_slug = $property_name;
        $data['city'] = $city;
        $data['project_type'] = $project_type;
        $data['project_property_slug'] = $project_property_slug;
        $project_details = Projects::where('project_slug',$project_property_slug)
            ->where('project_type_id',$project_type_id)
            ->where('project_city_id',$city_id)
            ->first();
        $project_id = $project_details->id;
        $data['project_details'] = $project_details;
        $gallery_images = explode(',',$project_details->project_gallery_images);
        $features_images = explode(',',$project_details->project_features_images);
        $bank_images = explode(',',$project_details->project_bank_images);
        $video_link = explode(',',$project_details->project_video_link);
        $ProjectPropertyType =ProjectPropertyType::where('projects_id',$project_id)
            ->where('slug',$propdata)
           ->first();
        $project_floor_plans = Projects::find($project_id)
            ->project_floor_plans;
        $data['project_floor_plans'] = $project_floor_plans;
        $data['ProjectPropertyType'] = $ProjectPropertyType;
        $data['gallery_images'] = $gallery_images;
        $ProjectPropertyTypess = Projects::find($project_id)
            ->project_property_type;
        $e_brochure = Projects::find($project_id)
            ->e_brochure;
        $data['e_brochure'] = $e_brochure;
        $data['ProjectPropertyTypesss'] = $ProjectPropertyTypess;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.project.property-type',compact('data'));
    }
    public function get_properties_by_categories($category){
        if($category) {
            $ProjectDetails_by_cats = ProjectCategory::find($category)
                ->projects()->limit(3)
                ->orderBy(DB::raw('RAND()'))
                ->get();
            return $ProjectDetails_by_cats;
        }else{
            return null;
        }
    }
    public function get_random_properties(){
        $random_projects = Projects::with('project_category',
                                          'project_specification',
                                          'project_type',
                                          'project_city',
                                          'project_status')
            ->limit(5)
            ->orderBy(DB::raw('RAND()'))
            ->get();
        return $random_projects;
    }
    public function get_all_projects(){
        $ProjectDetails = Projects::with('project_category',
                                         'project_specification',
                                         'project_type',
                                         'project_city',
                                         'project_status')
            ->get();
        return $ProjectDetails;
    }
    public function get_projects_by_state(Request $request,$state,$type) {

        $data = array();
        $project_state = $state;
        if ($project_state) {
            $removeHyphens_by_state = str_replace('-',' ',$project_state);
            $state = $this->get_project_state($removeHyphens_by_state);
            if ($state){
                $state_id = $state->id;
                $data['state_id'] = $state_id;
            }
            else{
                return abort(404);
            }

            if ($type == "residential"){
                $project_details = $this->get_properties_of_specific_state_paginate($state_id);                           $data['project_details'] =  $project_details;
            }else{
                $project_details_c = $this->get_properties_of_specific_state_paginate_c($state_id);
                $data['project_details_c'] =  $project_details_c;
            }
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();


            $data['res_count'] =  DB::table('projects')
                ->where('project_type_id', '=',1)
                ->where('project_state_id',$state_id)->count();
            $data['com_count'] =  DB::table('projects')
                ->where('project_type_id', '=',2)
                ->where('project_state_id',$state_id)
                ->count();
//            $data['total_count'] = $data['res_count'] + $data['com_count'];
            if ($type == "residential"){
                $data['total_count'] = $data['res_count'];
            }else{
                $data['total_count'] = $data['com_count'];
            }
            $data['trending_properties'] = $trending_properties;
            $data['head_city'] = HeaderController::get_header_cities();
            $data['head_current_projects'] = HeaderController::get_res_current_projects();
            $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
            $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
            $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
            $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        }
        else
        {
            $allProjects = $this->get_all_projects();
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();
            $data['project_details'] = $allProjects;
            $data['trending_properties'] = $trending_properties;
        }
        $data['residential'] = $this->getPropertyTypes();
        $data['commercial'] = $this->getPropertyTypes(false);
        if ($request->ajax()) {
            $view = view('content.project.project-city-data', compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('content.project.project',compact('data'));
    }
    public function get_projects_by_city(Request $request,$city) {
        $data = array();
        $project_city = $city;
        if ($project_city) {
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = $this->get_project_city($removeHyphens_by_city);
            if ($city){
                $city_id = $city->id;
                $data['city_id'] = $city_id;
            }
            else{
                return abort(404);
            }

            $project_type_by_city = $this->get_project_type_by_city($city_id);

            $project_type_by_city = $this->get_project_type_by_id($project_type_by_city);

//            get_project_type_by_id

            $project_details = $this->get_properties_of_specific_cities_paginate($city_id);
//            $trending_properties = $this->get_trending_properties_state($project_city);
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();
            $data['project_details'] =  $project_details;
            $project_details_c = $this->get_properties_of_specific_cities_paginate_c($city_id);
            $data['project_details_c'] =  $project_details_c;
            // modified by Pranjal Batra
            // $data['total_count'] = count($project_details) + count($project_details_c);
            $data['res_count'] =  DB::table('projects')
                ->where('project_type_id', '=',1)
                ->where('project_city_id',$city_id)->count();
            $data['com_count'] =  DB::table('projects')
                ->where('project_type_id', '=',2)
                ->where('project_city_id',$city_id)
                ->count();
            $data['total_count'] = $data['res_count'] + $data['com_count'];
            $data['trending_properties'] = $trending_properties;
            $data['head_city'] = HeaderController::get_header_cities();
            $data['head_current_projects'] = HeaderController::get_res_current_projects();
            $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
            $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
            $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
            $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        }
        else
        {
            $allProjects = $this->get_all_projects();
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();
            $data['project_details'] = $allProjects;
            $data['trending_properties'] = $trending_properties;
        }
        $data['residential'] = $this->getPropertyTypes();
        $data['commercial'] = $this->getPropertyTypes(false);
        if ($request->ajax()) {
            $view = view('content.project.project-city-data', compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('content.project.project',compact('data'));
    }
    public function getPropertyTypes($residential = TRUE){
        $query = DB::table('project_property_types');
        $query->join('projects', 'projects.id', '=' , 'project_property_types.projects_id');
        if($residential) {
            $query->where('projects.project_type_id', 1);
            $query->orderByRaw(DB::raw("FIELD(property_type,'STUDIO/SERVICE APARTMENTS','DUPLEX','VILLAS','1BHK','1BHK+STUDY/S/R/STORE','2BHK','2BHK+STUDY/S/R/STORE','3BHK','3BHK+STUDY/S/R/STORE','4BHK','4BHK+STUDY/S/R/STORE','5BHK','PENTHOUSES')"));
        }
        else
            {
            $query->where('projects.project_type_id', 2);
            $query->orderByRaw(DB::raw("FIELD(property_type, 'FOOD COURT','MULTIPLEX','OFFICE SPACES','SHOPS',  'STUDIO APARTMENTS')"));
        }
        $result = $query->distinct()
            ->get(['project_property_types.property_type', 'project_property_types.slug', 'projects.project_type_id']);
        return $result;
    }

    public function get_trending_properties_state($state){
        $data = array();
        $project_city = $state;
        if ($project_city)
        {
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = $categories = ProjectCity::whereName($removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
            $state = DB::table('projects')
                ->select(DB::raw('project_state_id'))
                ->where('project_city_id', '=', $city_id)
                ->first();
            $state_id = $state->project_state_id;
            $project_details = Projects::whereProjectStateId($state_id)
                ->orderBy(DB::raw('RAND()'))
                ->get();
        }
        return $project_details;
    }
    public function get_trending_properties($city){
        $data = array();
        $project_city = $city;
        if ($project_city)
        {
            $removeHyphens_by_city = str_replace('-',' ',$project_city);
            $city = $categories = ProjectCity::whereName($removeHyphens_by_city)
                ->first();
            $city_id = $city->id;
            $project_details = Projects::whereProjectCityId($city_id)
                ->orderBy(DB::raw('RAND()'))
                ->get();
        }
        return $project_details;
    }
    public function get_project_city($project_city){
        $city = $categories = ProjectCity::whereName($project_city)
            ->first();
        return $city;
    }
    public function get_project_type_by_city($city_id){
        $project_type = Projects::select('project_type_id')
            ->where('project_city_id', $city_id)
            ->distinct()
            ->get();
        return $project_type;
    }
    public function get_project_state($project_state){
        $state = ProjectState::whereName($project_state)
            ->first();
        return $state;
    }
    public function get_project_city_by_id($project_city){
        $city = $categories = ProjectCity::whereId($project_city)
            ->first();
        return $city;
    }
    public function get_project_category($project_categories){
        $categories = $categories = ProjectCategory::whereProjectCategoryName($project_categories)              ->first();
        return $categories;
    }
    public function get_project_type($project_type){
        $type = $type = ProjectType::whereName($project_type)
            ->first();
        return $type;
    }
    public function get_project_type_by_id($project_type){
        $type = $type = ProjectType::whereId($project_type)
            ->first();
        return $type;
    }
    public function get_properties_of_specific_state_up($up){
        $noida = 7;
        $Indirapuram = 29;
        $GreaterNoida = 20;
        $project_details = Projects::where('id',530)
            -> orWhere('id',517)
            -> orWhere('id',476)
            -> orWhere('id',474)
            -> orWhere('id',481)
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_cities_paginate($city_id){
        $project_details = Projects::where('project_city_id',$city_id)
            ->where('project_type_id', '=',1)
            ->orderByRaw(DB::raw("FIELD(project_stamp_id,1,2,7,4,5,6,3,11,13,14,8,9,10,12)"))
            ->paginate(4);
        return $project_details;
    }
    public function get_properties_of_specific_state_paginate($state_id){
        $project_details = Projects::where('project_state_id',$state_id)
            ->where('project_type_id', '=',1)
            ->paginate(4);
        return $project_details;
    }
    public function get_properties_of_specific_cities_paginate_c($city_id){
        $project_details = Projects::where('project_city_id',$city_id)
            ->where('project_type_id', '=',2)
            ->orderByRaw(DB::raw("FIELD(project_stamp_id,1,2,7,4,5,6,3,11,13,14,8,9,10,12)"))
            ->paginate(4);
        return $project_details;
    }
    public function get_properties_of_specific_state_paginate_c($state_id){
        $project_details = Projects::where('project_state_id',$state_id)
            ->where('project_type_id', '=',2)
            ->paginate(4);
        return $project_details;
    }
    public function get_all_paginate_projects(){
        $ProjectDetails = Projects::with('project_category',
            'project_specification',
            'project_type',
            'project_city',
            'project_status')
            ->where('project_type_id', '=',1)
           // ->latest()
            ->paginate(4);
        return $ProjectDetails;
    }
    public function get_all_paginate_projects_c(){
        $ProjectDetails = Projects::with('project_category',
            'project_specification',
            'project_type',
            'project_city',
            'project_status')
            ->where('project_type_id', '=',2)
           // ->latest()
            ->paginate(4);
        return $ProjectDetails;
    }
    public function get_properties_of_specific_category_pagination($category_id){
        $project_details = Projects::whereProjectCategoryId($category_id)
            ->where('project_type_id', '=',1)
//            ->latest()
            ->paginate(4);
        return $project_details;
    }
    public function get_properties_of_specific_category_pagination_c($category_id){
        $project_details = Projects::whereProjectCategoryId($category_id)
            ->where('project_type_id', '=',2)
           // ->latest()
            ->paginate(4);
        return $project_details;
    }

    public function get_properties_of_specific_state_haryana($haryana){
        $faridabad = 6;
        $sonipat = 8;
        $gurgaon = 28;
        $OmaxeShubhanganSector4aBahadurgarh = 496;
//        $OmaxeCelebrationsMallGurgaon = 537;
        $TheForestSpaFaridabad = 432;
        $RoyalStreetFaridabad = 430;
        $RoyalResidencyFaridabad = 428;
        $project_details = Projects::where('id',$OmaxeShubhanganSector4aBahadurgarh)
//            -> orWhere('id',$OmaxeCelebrationsMallGurgaon)
            -> orWhere('id',$TheForestSpaFaridabad)
            -> orWhere('id',$RoyalStreetFaridabad)
            -> orWhere('id',$RoyalResidencyFaridabad)
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_state_delhi($delhi){
        $faridabad = 6;
        $noida = 7;
        $gurgaon = 28;
        $Indirapuram = 29;
        $delh_i = 21;
        $GreaterNoida = 20;

        $hemisphere = 570;
        $IndiaTradeCenterNoida =486;
        $TheForestSpaFaridabad = 432;
        $OmaxeCannoughtPlaceNoida = 487;
        $OmaxeShubhanganSector4aBahadurgarh = 496;
        $project_details = Projects::where('id',$IndiaTradeCenterNoida)
                                    -> orWhere('id',$TheForestSpaFaridabad)
                                    -> orWhere('id',$OmaxeCannoughtPlaceNoida)
                                    -> orWhere('id',$OmaxeShubhanganSector4aBahadurgarh)
                                    -> orWhere('id',$hemisphere)
                                    ->get();
        return $project_details;
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
    public function get_properties_of_specific_state_rand_by_state(){
        $IndiaTradeCenterNoida =486;
        $TheForestSpaFaridabad = 432;
        $RoyalStreetFaridabad = 430;
//        $OmaxeRoyalResidencyNoida = 438;
        $OmaxeCannoughtPlaceNoida = 487;
        $OmaxeShubhanganSector4aBahadurgarh = 496;
//        $OmaxeCelebrationsMallGurgaon = 537;
        $TheForestSpaFaridabad = 432;
//        $RoyalStreetFaridabad = 430;
//        $RoyalResidencyFaridabad = 428;
        $TwinTower = 511;
        $TheResortNewChandigarh =453;
        $TheLakeNewChandigarh = 541;
        $project_details = Projects::where('id',$IndiaTradeCenterNoida)
            -> orWhere('id',$TheForestSpaFaridabad)
//            -> orWhere('id',$RoyalStreetFaridabad)
//            -> orWhere('id',$OmaxeRoyalResidencyNoida)
            -> orWhere('id',$OmaxeCannoughtPlaceNoida)
            -> orWhere('id',$OmaxeShubhanganSector4aBahadurgarh)
//            -> orWhere('id',$OmaxeCelebrationsMallGurgaon)
            -> orWhere('id',$TheForestSpaFaridabad)
//            -> orWhere('id',$RoyalStreetFaridabad)
//            -> orWhere('id',$RoyalResidencyFaridabad)
            -> orWhere('id',530)
            -> orWhere('id',517)
            -> orWhere('id',570)
            -> orWhere('id',474)
            -> orWhere('id',481)
            -> orWhere('id',$TwinTower)
            -> orWhere('id',$TheResortNewChandigarh)
            -> orWhere('id',$TheLakeNewChandigarh)
            ->limit(5)
            ->orderBy(DB::raw('RAND()'))
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_state_rand_by_static(){
        $IndiaTradeCenterNoida =486;
        $TheForestSpaFaridabad = 432;
        $RoyalStreetFaridabad = 430;
//        $OmaxeRoyalResidencyNoida = 438;
        $OmaxeCannoughtPlaceNoida = 487;
        $OmaxeShubhanganSector4aBahadurgarh = 496;
        $OmaxeCelebrationsMallGurgaon = 537;
        $TheForestSpaFaridabad = 432;
        $hemisphere = 570;
//        $RoyalStreetFaridabad = 430;
//        $RoyalResidencyFaridabad = 428;
        $TwinTower = 511;
        $TheResortNewChandigarh =453;
        $TheLakeNewChandigarh = 541;
        $project_details = Projects::where('id',$IndiaTradeCenterNoida)
            -> orWhere('id',$TheForestSpaFaridabad)
            -> orWhere('id',$hemisphere)
//            -> orWhere('id',$OmaxeRoyalResidencyNoida)
            -> orWhere('id',$OmaxeCannoughtPlaceNoida)
            -> orWhere('id',$OmaxeShubhanganSector4aBahadurgarh)
            -> orWhere('id',$OmaxeCelebrationsMallGurgaon)
            -> orWhere('id',$TheForestSpaFaridabad)
//            -> orWhere('id',$RoyalStreetFaridabad)
//            -> orWhere('id',$RoyalResidencyFaridabad)
            -> orWhere('id',530)
            -> orWhere('id',517)
            -> orWhere('id',476)
            -> orWhere('id',474)
            -> orWhere('id',481)
            -> orWhere('id',$TwinTower)
            -> orWhere('id',$TheResortNewChandigarh)
            -> orWhere('id',$TheLakeNewChandigarh)
            ->latest()
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_cities($city_id){
        $project_details = Projects::whereProjectCityId($city_id)
            ->limit(5)
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_state($state_id){
//        $project_details = Projects::whereProjectStateId($state_id)->limit(5)->get();
        $TwinTower = 511;
        $TheResortNewChandigarh =453;
        $TheLakeNewChandigarh = 541;
        $rr5 = 508;
        $value_mall =557;
        $project_details = Projects::where('id',$TheLakeNewChandigarh)
            -> orWhere('id',$TwinTower)
            -> orWhere('id',$TheResortNewChandigarh)
            -> orWhere('id',$rr5)
            -> orWhere('id',$value_mall)
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_category($category_id){
        $project_details = Projects::whereProjectCategoryId($category_id)
            ->get();
        return $project_details;
    }
    public function get_properties_of_specific_type_pagination($type_id){
        $project_details = Projects::whereProjectTypeId($type_id)
            ->orderByRaw(DB::raw("FIELD(project_stamp_id,1,2,7,4,5,6,3,11,13,14,8,9,10,12)"))
            ->paginate(4);
        return $project_details;
    }
    public function get_all_cities(){
        $cities = ProjectCity::all();
        return $cities;
    }
    public function get_all_project_type(){
        $project_type = ProjectType::all();
        return $project_type;
    }
    public function get_all_properties_data(Request $request){
            $data_all = array();
            $allProjects = $this->get_all_paginate_projects();
            $allProjects_c = $this->get_all_paginate_projects_c();
            $data_all['head_city'] = HeaderController::get_header_cities();
            $data_all['head_current_projects'] = HeaderController::get_res_current_projects();
            $data_all['head_completed_projects'] = HeaderController::get_res_completed_projects();
            $data_all['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
            $data_all['head_com_current_projects'] = HeaderController::get_com_current_projects();
            $data_all['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
            $trending_random_properties = $this->get_random_trending_properties();
            $allcities = $this->get_all_cities();
            $data_all['residential'] = $this->getPropertyTypes();
            $data_all['commercial'] = $this->getPropertyTypes(false);
            $data_all['allcities'] = $allcities;
            $data_all['allProjects'] = $allProjects;
            $data_all['allProjects_c'] = $allProjects_c;
            // modified by Pranjal Batra
            $data_all['res_count'] =  DB::table('projects')->where('project_type_id', '=',1)->count();
            $data_all['com_count'] =  DB::table('projects')->where('project_type_id', '=',2)->count();
            //$data_all['total_count'] = count($allProjects) + count($allProjects_c);
            $data_all['total_count'] = $data_all['res_count'] + $data_all['com_count'];
            $data_all['trending_all_properties'] = $trending_random_properties;
                        if ($request->ajax()) {
                            $view = view('content.project.project-data',compact('data_all'))
                                ->render();
                            return response()->json(['html'=>$view]);
                        }
            return view('content.project.project',compact('data_all'));
    }
    public function get_all_static_properties(Request $request){
        $data_all = array();
        $allProjects = $this->get_properties_of_specific_state_rand_by_static();
        $allProjects_c = $this->get_all_paginate_projects_c();

        $count_property = $allProjects->count();
        $data_all['head_city'] = HeaderController::get_header_cities();
        $data_all['head_current_projects'] = HeaderController::get_res_current_projects();
        $data_all['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data_all['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data_all['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data_all['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $trending_random_properties = $this->get_properties_of_specific_state_rand_by_state1();
        $allcities = $this->get_all_cities();
        $data_all['residential'] = $this->getPropertyTypes();
        $data_all['commercial'] = $this->getPropertyTypes(false);
        $data_all['allcities'] = $allcities;
        $data_all['allProjects'] = $allProjects;
        $data_all['allProjects_c'] = $allProjects_c;
        // modified by Pranjal Batra
        $data_all['res_count'] =  DB::table('projects')->where('project_type_id', '=',1)->count();
        $data_all['com_count'] =  DB::table('projects')->where('project_type_id', '=',2)->count();
        //$data_all['total_count'] = count($allProjects) + count($allProjects_c);
        $data_all['total_count'] = $count_property;
        $data_all['trending_all_properties'] = $trending_random_properties;
        if ($request->ajax()) {
            $view = view('content.project.sproject-data',compact('data_all'))
                ->render();
            return response()->json(['html'=>$view]);
        }
        return view('content.project.sproject',compact('data_all'));
    }
    public function get_random_trending_properties(){
        $random_projects = Projects::with('project_category',
                                          'project_specification',
                                          'project_type',
                                          'project_city',
                                          'project_status'
                                        )
                                    ->limit(6)->orderBy(DB::raw('RAND()'))
                                    ->get();
        return $random_projects;
    }
    public function get_projects_by_categories(Request $request,$category){
        $data = array();
        $project_category = $category;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['allcities'] = $this->get_all_cities();
        if ($project_category) {
            $removeHyphens_by_categories = str_replace('-',' ',$category);
            $category = $this->get_project_category($removeHyphens_by_categories);
            if ($category){
                $category_id = $category->id;
            }
            else{
                return abort(404);
            }
            $data["category_id"] = $category_id;
            $project_details = $this->get_properties_of_specific_category_pagination($category_id);
            $project_details_c = $this->get_properties_of_specific_category_pagination_c($category_id);
            //$data['total_count'] = count($project_details) + count($project_details_c);
            $data['res_count'] =  DB::table('projects')->where('project_type_id', '=',1)
                ->where('project_category_id',$category_id)->count();
            $data['com_count'] =  DB::table('projects')->where('project_type_id', '=',2)
                ->where('project_category_id',$category_id)->count();
            $data['total_count'] = $data['res_count'] + $data['com_count'];
            $data['project_details_c'] =  $project_details_c;
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();
            $data['project_details'] =  $project_details;
            $data['trending_properties'] = $trending_properties;
        }
        else{
            $allProjects = $this->get_all_projects();
            $trending_properties = $this->get_properties_of_specific_state_rand_by_state1();
            $data['total_count'] = count($allProjects);
            $data['project_details'] = $allProjects;
            $data['trending_properties'] = $trending_properties;
        }
        $data['residential'] = $this->getPropertyTypes();
        $data['commercial'] = $this->getPropertyTypes(false);
        if ($request->ajax()) {
            $view = view('content.project.project-city-data',compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('content.project.project',compact('data'));
    }
    public function get_projects_by_type(Request $request,$project_type){
        $data = array();
        $project_type = $project_type;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $allcities = $this->get_all_cities();
        $data['allcities'] = $allcities;
        if($project_type == "residential"){
            $data['residential'] = $this->getPropertyTypes();
            $data['proj_type'] = "Residential";
            $data['proj_type_val'] = 1;
        }
        else if($project_type == "commercial"){
            $data['commercial'] = $this->getPropertyTypes(false);
            $data['proj_type'] = "Commercial";
            $data['proj_type_val'] = 2;
        }
        if ($project_type) {
            $removeHyphens_by_type = str_replace('-',' ',$project_type);
            $type = $this->get_project_type($removeHyphens_by_type);
            $type_id = $type->id;
            $project_details = $this->get_properties_of_specific_type_pagination($type_id);
            $data['project_details'] =  $project_details;
            $trending_properties = $this->get_random_trending_properties();
            $data['trending_properties'] = $trending_properties;
            //modified by Pranjal Batra
            //$data['total_count'] = count($project_details);
            $count = DB::table('projects')->where('project_type_id', '=',$data['proj_type_val'])->count();
            $data['total_count'] = $count;

            $data['res_count'] = $data['total_count'];

        }
        else{
            $allProjects = $this->get_all_projects();
            $trending_properties = $this->get_random_trending_properties();
            $data['project_details'] = $allProjects;
            $data['trending_properties'] = $trending_properties;
        }
        if ($request->ajax()) {
            $view = view('content.project.project-city-data',compact('data'))->render();
            return response()->json(['html'=>$view]);
        }
        return view('content.project.project',compact('data'));
    }
    public function get_ajax_cities($id){
        $project_type_id = $id;
        $citiesIds = Projects::whereProjectType_id($project_type_id)
            ->distinct()->pluck('project_city_id')
            ->all();
        $cities = array();
        foreach ($citiesIds as $key =>$citiesId){
            $cities = ProjectCity::whereIn('id', $citiesIds)
                ->pluck('name','id')->all();
        }
        return json_encode($cities);
    }
    public function get_ajax_price($id){
        $project_city_id = $id;
        $price = Projects::whereProjectCity_id($project_city_id)
            ->distinct()
            ->pluck('price_range')->all();
        return json_encode($price);
    }
    public function searchfilter(Request $request){
        $data = array();
        $property_type_id = $request->input('property_type');
        $project_type = $this->get_project_type_by_id($property_type_id);
        $project_type_name = $project_type->name;
        $data['project_type_name'] = $project_type_name;
        $city_id = $request->input('city');
        $city_data = $this->get_project_city_by_id($city_id);
        $city_name = $city_data->name;
        $data['city_name'] = $city_name;
        $property_price_id = $request->input('property_price');
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $allcities = $this->get_all_cities();
        $data['allcities'] = $allcities;
        $data['residential'] = $this->getPropertyTypes();
        $data['commercial'] = $this->getPropertyTypes(false);
        if($property_price_id ==1){
            $project_price_val = 4999999;
        }
        if($property_price_id ==2){
            $project_price_val = 9999999;
        }
        if($property_price_id ==3){
            $project_price_val = 10000000;
        }
        $project_details = Projects::whereProjectCity_id($city_id)
            ->whereProjectType_id($property_type_id)
            ->wherePriceRange($project_price_val)->latest()
            ->paginate(6);
        $trending_properties = $this->get_random_trending_properties();
        $data['project_details'] =  $project_details;
        $data['trending_properties'] = $trending_properties;
        if ($request->ajax()) {
            $view = view('content.project.project-city-data', compact('data'))->render();
            return response()
                    ->json(['html'=>$view]);
        }
        return view('content.project.project-search',compact('data'));
    }
}
<?php

namespace Omaxe\Http\Controllers;
use Omaxe\MediaCategory;
use Omaxe\MediaContact;
use Illuminate\Http\Request;
use Omaxe\Mail\ThankYouMail;
use Omaxe\Mail\MediaContactMail;
use Mail;
use DB;

class MediaController extends Controller
{


    public function ad_campaigns(Request $req){
        $data = array();
        $quarters = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            $annual_reports = MediaCategory::find(1)->medias();

            if($year){
                $annual_reports->where('report_year', $year);

                $quarters = MediaCategory::find(1)->medias()->select('report_qtr')->orderByRaw(DB::raw("FIELD(report_qtr, 'Jan', 'Feb', 'Mar','Apr', 'May', 'Jun','Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec')"))->groupBy('report_qtr')->get();

            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }
            if($year) $data['quarters'] = $quarters;
            else $data['quarters'] = array();
            $annual_reports = $annual_reports->orderBy('report_year','desc')->latest()->paginate(8);

            $data['selected_year'] = $year;
            $data['selected_qtr'] = $qtr;
        }else{
            $data['quarters'] = array();
            $data['selected_year'] = 0;
            $data['selected_qtr'] = 0;
            $annual_reports = MediaCategory::find(1)->medias()->latest()->orderBy('report_year','desc')->paginate(8);
        }

        $data['ad_campaigns'] = $annual_reports;
        $data['years'] = MediaCategory::find(1)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();

        if($req->ajax()){
            return view('content.media.ad-campagins-ajax',compact('data'));
        }else{
            return view('content.media.ad-campagins',compact('data'));
        }
    }

    public function e_coverages(Request $req){
        $data = array();
        $quarters = array();

        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            $annual_reports = MediaCategory::find(2)->medias();



            if($year){
                $annual_reports->where('report_year', $year);

                $quarters = MediaCategory::find(2)->medias()->select('report_qtr')->orderByRaw(DB::raw("FIELD(report_qtr, 'Jan', 'Feb', 'Mar','Apr', 'May', 'Jun','Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec')"))->groupBy('report_qtr')->get();

            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }
            if($year) $data['quarters'] = $quarters;
            else $data['quarters'] = array();
            $annual_reports = $annual_reports->latest()->paginate(8);

            $data['selected_year'] = $year;
            $data['selected_qtr'] = $qtr;
        }else{
            $data['quarters'] = array();
            $data['selected_year'] = 0;
            $data['selected_qtr'] = 0;
            $annual_reports = MediaCategory::find(2)->medias()->latest()->paginate(8);
        }

        $data['ad_campaigns'] = $annual_reports;
        $data['years'] = MediaCategory::find(2)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();

        if($req->ajax()){
            return view('content.media.e-coverages-ajax',compact('data'));
        }else{
            return view('content.media.e-coverages',compact('data'));
        }
    }


    public function events(Request $req){
        $data = array();
        $quarters = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            $annual_reports = MediaCategory::find(3)->medias();

            if($year){
                $annual_reports->where('report_year', $year);


                $quarters = MediaCategory::find(3)->medias()->select('report_qtr')->orderByRaw(DB::raw("FIELD(report_qtr, 'Jan', 'Feb', 'Mar','Apr', 'May', 'Jun','Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec')"))->groupBy('report_qtr')->get();

            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }
            if($year) $data['quarters'] = $quarters;
            else $data['quarters'] = array();
            $annual_reports = $annual_reports->latest()->paginate(8);

            $data['selected_year'] = $year;
            $data['selected_qtr'] = $qtr;
        }else{
            $data['quarters'] = array();
            $data['selected_year'] = 0;
            $data['selected_qtr'] = 0;
            $annual_reports = MediaCategory::find(3)->medias()->latest()->paginate(8);
        }

        $data['ad_campaigns'] = $annual_reports;
        $data['years'] = MediaCategory::find(3)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();

        if($req->ajax()){
            return view('content.media.events-ajax',compact('data'));
        }else{
            return view('content.media.events',compact('data'));
        }
    }

    public function media_kit(){
        $data = array();
        $ad_campaigns = MediaCategory::find(4)
            ->medias()
            ->latest()
            ->orderby('report_year','desc')
            ->paginate(8);
        $data['ad_campaigns'] = $ad_campaigns;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.media-kit',compact('data'));
    }
    public function contacts(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.media-contacts',compact('data'));
    }

    public function print_coverages(Request $req){
        $data = array();
        $quarters = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            $annual_reports = MediaCategory::find(6)->medias();

            if($year){
                $annual_reports->where('report_year', $year);
               
                $quarters = MediaCategory::find(6)->medias()->select('report_qtr')->orderByRaw(DB::raw("FIELD(report_qtr, 'Jan', 'Feb', 'Mar','Apr', 'May', 'Jun','Jul', 'Aug', 'Sep','Oct', 'Nov', 'Dec')"))->groupBy('report_qtr')->get();

            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }
            if($year) $data['quarters'] = $quarters;
            else $data['quarters'] = array();
            $annual_reports = $annual_reports->latest()->paginate(8);

            $data['selected_year'] = $year;
            $data['selected_qtr'] = $qtr;
        }else{
            $data['quarters'] = array();
            $data['selected_year'] = 0;
            $data['selected_qtr'] = 0;
            $annual_reports = MediaCategory::find(6)->medias()->latest()->orderBy('id','desc')->paginate(8);
        }

        $data['ad_campaigns'] = $annual_reports;
        $data['years'] = MediaCategory::find(6)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();

        if($req->ajax()){
            return view('content.media.print-coverages-ajax',compact('data'));
        }else{
            return view('content.media.print-coverages',compact('data'));
        }
    }

    public function press_releases(Request $req){
        $data = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');

            $quarters = array();
            $annual_reports = MediaCategory::find(7)->medias();

            if($year){
                $annual_reports->where('report_year', $year);
                $quarters = MediaCategory::find(7)->medias()->select('report_qtr')->groupBy('report_qtr')->where('report_year', $year)->get();
            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }

            $annual_reports = $annual_reports->latest()->paginate(8);

            $out = array('reports' => $annual_reports, 'quarters' => $quarters);
            print(json_encode($out)); exit;
        }

        $annual_reports = MediaCategory::find(7)->medias()->latest()->paginate(8);
        $data['ad_campaigns'] = $annual_reports;
        $data['years'] = MediaCategory::find(7)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.press-releases',compact('data'));
    }
    public function videos(){
        $data = array();
        $ad_campaigns = MediaCategory::find(8)
            ->medias()
            ->latest()
            ->orderby('report_year','desc')
            ->paginate(4);
        $data['ad_campaigns'] = $ad_campaigns;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.videos',compact('data'));
    }

    public function corporate_newsletter(Request $req){
        $year = $req->input('year');
        $data = array();

        if($year){
            $ad_campaigns = MediaCategory::find(9)->medias()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($ad_campaigns));
            exit;
        }
        else{
            $ad_campaigns = MediaCategory::find(9)->medias()->latest()->orderby('report_year','desc')->paginate(8);
        }

        $data['years'] = MediaCategory::find(9)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();

        $data['ad_campaigns'] = $ad_campaigns;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.corporate-newsletter',compact('data'));
    }


    public function regional_newsletter(Request $req){
        $year = $req->input('year');
        $data = array();

        if($year){
            $ad_campaigns = MediaCategory::find(10)->medias()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($ad_campaigns));
            exit;
        }
        else{
            $ad_campaigns = MediaCategory::find(10)->medias()->latest()->orderby('report_year','desc')->paginate(8);
        }

        $data['years'] = MediaCategory::find(10)->medias()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['ad_campaigns'] = $ad_campaigns;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.media.regional-newsletter',compact('data'));
    }


    public function download($file_name) {
        $file_path = public_path('media/pdf/'.$file_name);
        if ($file_path){
            return response()->download($file_path);
        }
        else{
            return abort(404);
        }
    }
    public function media_contact_us(Request $request){

        $input = $request->all();

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'address' => 'required',
            'query' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ],[
            'name.required' => ' The name field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'phone.required' => ' The phone field is required.',
            'query_type.required' => ' The query type field is required.',
            'address.required' => ' The address field is required.',
            'query.required' => ' The query field is required.',
        ]);

        $success = MediaContact::create($input);
        if($success){

            $user_email = "corpcomm@omaxe.com";

            Mail::to($user_email)->send(new MediaContactMail($success));

            $data = ['message' => 'Thank You'];

            Mail::to($user_email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/media/contact');
        }

    }
}
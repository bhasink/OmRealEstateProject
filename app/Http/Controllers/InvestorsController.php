<?php

namespace Omaxe\Http\Controllers;
use Omaxe\Investors;
use Omaxe\InvestorCat;
use Omaxe\InvestorContact;
use Omaxe\Mail\ThankYouMail;
use Omaxe\Mail\InvestorContactMail;
use Mail;
use Illuminate\Http\Request;

class InvestorsController extends Controller
{
    public function investor_contact(Request $request){

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

        $success = InvestorContact::create($input);
        if($success){

            $user_email = "coo@omaxe.com";

            $user_email2 ="amitmehta@omaxe.com";

            Mail::to($user_email)->send(new InvestorContactMail($success));
            Mail::to($user_email2)->send(new InvestorContactMail($success));

            $data = ['message' => 'Thank You'];

            Mail::to($request->email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/investor/contact');
        }

    }
    public function annual_report(Request $req){
        $year = $req->input('year');
        $data = array();
        if($year){
            $annual_reports = InvestorCat::find(1)->investors()->latest()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(1)->investors()->latest()->orderBy('report_year','desc')->paginate(8);
        }

        $data['years'] = InvestorCat::find(1)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.annual-report',compact('data'));
    }
    public function balance_sheet(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(2)->investors()->latest()->where('report_year', $year)->latest()->paginate(8);
        }else{
            $annual_reports = InvestorCat::find(2)->investors()->latest()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(2)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($req->ajax()) {
            return view('content.investors.balance-sheet-ajax', compact('data'))->render();  
        }else{
            return view('content.investors.balance-sheet',compact('data'));
        }
    }

    public function stakeholder_claim(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(17)->investors()->latest()->where('report_year', $year)->latest()->paginate(8);
        }else{
            $annual_reports = InvestorCat::find(17)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(17)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($req->ajax()) {
            return view('content.investors.stakeholder-claim-ajax', compact('data'))->render();
        }else{
            return view('content.investors.stakeholder-claim',compact('data'));
        }

    }

    public function financials(Request $req){
		$data = array();
		$quarters = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            $annual_reports = InvestorCat::find(14)->investors();

            if($year){
                $annual_reports->where('report_year', $year);
                $quarters = InvestorCat::find(14)->investors()->latest()->select('report_qtr')->groupBy('report_qtr')->where('report_year', $year)->get();
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
			$annual_reports = InvestorCat::find(14)->investors()->latest()->paginate(8);
		}
		
        $data['annual_reports'] = $annual_reports;
        $data['years'] = InvestorCat::find(14)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
		
		if($req->ajax()){
			return view('content.investors.financials-ajax',compact('data'));
		}else{
			return view('content.investors.financials',compact('data'));
		}
    }

    public function notice_and_information(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(22)->investors()->where('report_year', $year)->latest()->paginate(8);
        }else{
            $annual_reports = InvestorCat::find(22)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(22)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($req->ajax()) {
            return view('content.investors.notice-and-intimation-ajax', compact('data'))->render();
        }else{
            return view('content.investors.notice-and-intimation',compact('data'));
        }

    }

    public function certificate_incorporation(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(3)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(3)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(3)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.certificate-incorporation',compact('data'));
    }
    public function moa(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(4)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(4)->investors()->latest()->paginate(8);
        }        
        $data['years'] = InvestorCat::find(4)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.moa',compact('data'));
    }
    public function prospectus(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(5)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(5)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(5)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.prospectus',compact('data'));
    }
    public function corporate_governance(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(6)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(6)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(6)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.corporate-governance',compact('data'));
    }
    public function download($file_name) {
        $file_path = public_path('/investors/pdf/'.$file_name);

        if (file_exists( public_path() . '/investors/pdf/' . $file_name)) {
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
    public function committees_of_board_of_directors(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(7)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(7)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(7)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.comittees-of-board',compact('data'));
    }
    public function appointment_letters(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(8)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }else{
            $annual_reports = InvestorCat::find(8)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(8)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.appointment-letter',compact('data'));
    }
    public function resignation_letters(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(9)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(9)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['years'] = InvestorCat::find(9)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.resignation-letter',compact('data'));
    }
    public function corporate_governance_reports(Request $req){
        $data = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            
            $quarters = array();
            $annual_reports = InvestorCat::find(10)->investors();

            if($year){
                $annual_reports->where('report_year', $year);
                $quarters = InvestorCat::find(10)->investors()->latest()->select('report_qtr')->groupBy('report_qtr')->where('report_year', $year)->get();
            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }

            $annual_reports = $annual_reports->latest()->paginate(8);

            $out = array('reports' => $annual_reports, 'quarters' => $quarters);
            print(json_encode($out)); exit;
        }
        $annual_reports = InvestorCat::find(10)->investors()->latest()->paginate(8);
        $data['annual_reports'] = $annual_reports;
        $data['years'] = InvestorCat::find(10)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.corporate-governance-report',compact('data'));
    }
    public function csr_event(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(11)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(11)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['annual_reports'] = $annual_reports;
        $data['years'] = InvestorCat::find(11)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.csr-events',compact('data'));
    }
    public function csr_policy(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(12)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(12)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['annual_reports'] = $annual_reports;
        $data['years'] = InvestorCat::find(12)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.policy',compact('data'));
    }
    public function csr_project(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(13)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(13)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['annual_reports'] = $annual_reports;
        $data['years'] = InvestorCat::find(13)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.csr-projects',compact('data'));
    }
    public function contact(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.investors.investor-contact',compact('data'));
    }
    public function shareholding_pattern(Request $req){
        $data = array();
        if($req->ajax()){
            $year = $req->input('year');
            $qtr = $req->input('qtr');
            
            $quarters = array();
            $annual_reports = InvestorCat::find(15)->investors();

            if($year){
                $annual_reports->where('report_year', $year);
                $quarters = InvestorCat::find(15)->investors()->latest()->select('report_qtr')->groupBy('report_qtr')->where('report_year', $year)->get();
            }
            if($qtr){
                $annual_reports->where('report_qtr', $qtr);
            }

            $annual_reports = $annual_reports->latest()->paginate(8);

            $out = array('reports' => $annual_reports, 'quarters' => $quarters);
            print(json_encode($out)); exit;
        }

        $annual_reports = InvestorCat::find(15)->investors()->latest()->paginate(8);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['years'] = InvestorCat::find(15)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['annual_reports'] = $annual_reports;
        return view('content.investors.shareholding-pattern',compact('data'));
    }
    public function stakeholder_information(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(16)->investors()->latest()->where('report_year', $year)->orderBy('id','desc')->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(16)
            ->investors()
            ->orderBy('id','desc')
            ->paginate(8);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['years'] = InvestorCat::find(16)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['annual_reports'] = $annual_reports;
        return view('content.investors.stakeholder-information',compact('data'));
    }
    public function notice_and_scrutinizers_report(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(18)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(18)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['years'] = InvestorCat::find(18)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['annual_reports'] = $annual_reports;
        return view('content.investors.notice-and-scruitnizer-report',compact('data'));
    }
    public function record_date_notice_for_ncds(Request $req){

        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(19)->investors()->where('report_year', $year)->latest()->paginate(8);
        }else{
            $annual_reports = InvestorCat::find(19)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(19)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($req->ajax()) {
            return view('content.investors.record-date-notice-for-ncds-ajax', compact('data'))->render();
        }else{
            return view('content.investors.record-date-notice-for-ncds',compact('data'));
        }
    }
    public function notice_payment_redemption(Request $req){

        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(20)->investors()->where('report_year', $year)->latest()->paginate(8);
        }else{
            $annual_reports = InvestorCat::find(20)->investors()->latest()->paginate(8);
        }
        $data['years'] = InvestorCat::find(20)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['annual_reports'] = $annual_reports;
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($req->ajax()) {
            return view('content.investors.notice-payment-redemption-ajax', compact('data'))->render();
        }else{
            return view('content.investors.notice-payment-redemption',compact('data'));
        }

    }
    public function credit_rating(Request $req){
        $data = array();
        $year = $req->input('year');
        if($year){
            $annual_reports = InvestorCat::find(21)->investors()->where('report_year', $year)->latest()->paginate(8);
            print(json_encode($annual_reports)); exit;
        }
        $annual_reports = InvestorCat::find(21)
            ->investors()
            ->latest()
            ->paginate(8);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['years'] = InvestorCat::find(21)->investors()->select('report_year')->groupBy('report_year')->orderBy('report_year','desc')->whereNotNull('report_year')->get();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        $data['annual_reports'] = $annual_reports;
        return view('content.investors.credit-rating',compact('data'));
    }


    public function investor_contact_us(Request $request){

        $input = $request->all();

        $success = ContactUs::create($input);
        if($success){
            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/contact-us/send-enquiry');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/contact-us/send-enquiry');
        }

    }
}

<?php

namespace Omaxe\Http\Controllers;
use Omaxe\ContactUs;
use Omaxe\NriCareContact;
use Omaxe\AssociateContact;
use Omaxe\vendorContact;
use Omaxe\FdFaq;
use Omaxe\MetaTag;
use Omaxe\FixedDepositContact;
use Omaxe\FdApplicationContact;
use Illuminate\Http\Request;
use Validator;
use Omaxe\Mail\ThankYouMail;
use Omaxe\Mail\OtpMail;
use Omaxe\Mail\CommonContactUsMail;
use Omaxe\Mail\ProjectContactMail;
use Omaxe\Mail\FdContactMail;
use Omaxe\Mail\FDAppContactMail;
use Omaxe\Mail\NriContactMail;
use Omaxe\Mail\AssociateContactMail;
use Omaxe\Mail\VendorsContactMail;
use Omaxe\Mail\EnquiryNowMail;
use Mail;
use Session;
use Omaxe\ProjectContact;
use Illuminate\Routing\Route;
use GuzzleHttp\Client;
use setasign\Fpdi;
use Omaxe\EnquireNowContact;
use Input;

class MainController extends Controller
{
    public function index(){
        return view('content.home.home');
    }

    public function otp(){
        $data = array();
        $session_con =  Session::get('project_session');
        $ebrochure_session_con =  Session::get('ebrochure_session');
        $otp =  Session::get('otp');
        $now = time();

        if(isset($ebrochure_session_con)) {
            if ($ebrochure_session_con['residential_type'] == "RI") {
                $data['project_ses'] = $ebrochure_session_con;
            } else {
                $data['project_ses_nri'] = $ebrochure_session_con;
            }
        }

        if(isset($session_con)) {
            if ($session_con['residential_type'] == "RI") {
                $data['project_ses'] = $session_con;
                $data['type'] = "projectotp";
            } else {
                $data['project_ses_nri'] = $session_con;
                $data['type'] = "projectotp";
            }
        }
        if(Session::get('expire') > $now )
        {
            Session::forget('otp');
        }
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();

            return view('static.otp', compact('data'));

    }

    public function otp_working(Request $request){

            $client = new Client();

            $request = $request->otp;

                $otp =  Session::get('otp');

            if ($request == $otp){

                $session_con =  Session::get('project_session');


                $success = ProjectContact::create($session_con);

                if ($success){

                    return response()->json([

                        'success' => $request

                    ]);
                }
            }

            return response()->json([

                'error' => "Wrong Otp. Please try again."

            ]);

    }


    public function createlead(){
        
        $session_con =  Session::get('project_session');
        $userproject_name = $session_con['project_name'];
        $username = $session_con['name'];
        $useremail = $session_con['email'];
        $userphone = $session_con['phone'];
        $userinterested_visit_site = $session_con['interested_visit_site'];
        $userresidential_type = $session_con['residential_type'];
        $usercountry = $session_con['country'];
        $usercity = $session_con['city'];
        $userzipcode = $session_con['zipcode'];
        $useraddress = $session_con['address'];
        $userproject_query = $session_con['project_query'];

        $data = ['message' => 'Thank You'];

        $user_email = "leads@omaxe.com";

        Mail::to($user_email)->send(new ProjectContactMail($session_con));

        Mail::to($useremail)->send(new ThankYouMail($data));

        $data_string = (array(
            array(
                'Attribute' => 'Source',
                'Value' => 'Project_Contact_Us'
            ),
            array(
                'Attribute' => 'mx_Project_Name',
                'Value' => $userproject_name
            ),
            array(
                'Attribute' => 'FirstName',
                'Value' => $username
            ),
            array(
                'Attribute' => 'EmailAddress',
                'Value' => $useremail
            ),
            array(
                'Attribute' => 'Phone',
                'Value' => $userphone
            ),
            array(
                'Attribute' => 'mx_Interested_In_Visit',
                'Value' => $userinterested_visit_site
            ),
            array(
                'Attribute' => 'mx_Residential_Status',
                'Value' => $userresidential_type
            ),
            array(
                'Attribute' => 'mx_Country',
                'Value' => $usercountry
            ),
            array(
                'Attribute' => 'mx_City',
                'Value' => $usercity
            ),
            array(
                'Attribute' => 'mx_Zip',
                'Value' => $userzipcode
            ),
            array(
                'Attribute' => 'mx_Street1',
                'Value' => $useraddress
            ),
            array(
                'Attribute' => 'mx_Query',
                'Value' => $userproject_query
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

            if ($json_response == 200){
                Session::forget('project_session');
                Session::forget('otp');
                Session::forget('start');
                Session::forget('expire');

                return response()->json([

                    'success' => "Successfully lead created."

                ]);

            }
            curl_close($curl);
        } catch (Exception $ex) {
            curl_close($curl);
        }
    }



    public function otp_resend(){

        $client = new Client;

        Session::forget('otp');

        $rndno=rand(1000, 9999);

        Session::put('otp',$rndno);

        $project_data = Session::get('project_session');

        if ($project_data['residential_type'] =="RI"){

            $phone_number = $project_data['phone'];

            $text=  "Dear User, OTP to submit your enquiry is $rndno".". ". "Valid for 5 minutes.";


            $sms_api = "http://bulksmsindia.mobi/sendurlcomma.aspx?user=20068076&pwd=zr6upz&senderid=OMXTRS&mobileno=$phone_number&msgtext=$text";

            $sms_apii= $request = $client->request( 'GET',$sms_api );

            $status = $sms_apii->getStatusCode();

            if ($status == 200){
                return response()->json([

                    'success' => "OTP send successfully"

                ]);
            }else{
                return response()->json([

                    'error' => "Wrong Otp. Please try again."

                ]);
            }
        }
        else{

            $user_email = $project_data['email'];

            $data = ['usr_otp' => $rndno];

             Mail::to($user_email)->send(new OtpMail($data));

                return response()->json([

                    'success' => "OTP send successfully"

                ]);

        }
    }


    public function thankyou(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.thankyou',compact('data'));
    }

    public function fd(Request $request){
        $data = array();
        $faq = FdFaq::paginate(5);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        if ($request->ajax()){
            return view('content.fixed-deposit.fd-ajax',compact('faq'))->render();
        }
        return view('content.fixed-deposit.fd',compact('data','faq'));
    }

    public function validate_fd($request){

        $this->validate($request,[
            'name' => 'required',
            'Number' => 'required|numeric',
            'email' => 'required|email',
            'city' =>'required',
            'message' => 'required',
            'g-recaptcha-response' => 'required|captcha',

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
        ]);

    }

    public function fd_contact_us_save(Request $request){

        $input = $request->all();

        $check = $this->validate_fd($request);

            $success = FixedDepositContact::create($input);

            if ($success) {

                $user_email = "fdcustomercare@omaxe.com";

                Mail::to($user_email)->send(new FdContactMail($success));

                $data = ['message' => 'Thank You'];

                Mail::to($request->email)->send(new ThankYouMail($data));

                $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
                return redirect('/thankyou');

            }

        else {
            $request->session()->flash('alert-success', 'Succesfully Submitted ! We will get back to you later!');
            return redirect('/fixed-deposit/fd-contact-us');
        }

    }

    public function validate_enquiry_now($request){

        $check_vaildation_fails = $this->validate($request,[
            'user_name' => 'required',
            'user_email' => 'required|email',
            'user_phone_no' =>'required|numeric|regex:/[0-9]{10}/|digits:10',
            'user_residential_type' => 'required',
            'user_query' => 'required',
            'g-recaptcha-response' => 'required|captcha',
        ],[
            'user_name.required' => ' The name field is required.',
            'user_name.min' => ' The  name must be at least 3 characters.',
            'user_name.max' => ' The  name may not be greater than 35 characters.',
            'user_email.required' => ' The email field is required.',
            'user_phone_no.required' => ' The phone field is required.',
           'user_phone_no.regex' => ' The  phone field must be at least 10 digits.',
            'user_query.required' => ' The query field is required.',
            'user_residential_type.required' => ' The residential type field is required.'
        ]);


    }

    public function enquiry_now_contact(Request $request)
    {


        if ($request->has('enquiry_now')) {


            $utm_source = $request->utm_source;

            $utm_medium = $request->utm_medium;

            $utm_campaign = $request->utm_campaign;

            $utm_term = $request->utm_term;

            $this->validate_enquiry_now($request);

            $name = $request->user_name;

            $email = $request->user_email;

            $phone_no = $request->user_phone_no;

            $residential_type = $request->user_residential_type;

            $query = $request->user_query;

            $currenturi= url()->previous();

            $url_digits=   substr($currenturi,21,100);

            $create_enquiry_now = new EnquireNowContact;

            $create_enquiry_now->user_name = $name;

            $create_enquiry_now->url = $url_digits;

            $create_enquiry_now->utm_source = $utm_source;

            $create_enquiry_now->utm_medium = $utm_medium;

            $create_enquiry_now->utm_campaign = $utm_campaign;

            $create_enquiry_now->utm_term = $utm_term;

            $create_enquiry_now->user_email = $email;

            $create_enquiry_now->user_phone_no = $phone_no;

            $create_enquiry_now->user_residential_type = $residential_type;

            $create_enquiry_now->user_query = $query;

            $success =$create_enquiry_now->save();

            if ($success) {
                
                $user_email = "leads@omaxe.com";

                Mail::to($user_email)->send(new EnquiryNowMail($success));

                $data = ['message' => 'Thank You'];

                Mail::to($request->user_email)->send(new ThankYouMail($data));

                $this->leadsquare_enquiry_now_work($request->user_name, $request->user_email, $request->user_phone_no, $request->user_residential_type, $request->user_query,$request->utm_source,$request->utm_medium,$request->utm_campaign,$request->utm_term);

                $request->session()->flash('alert-success', 'Succesfully Submitted ! We will get back to you later!');
                return redirect('/thankyou');

            } else {
                $request->session()->flash('alert-success', 'Problem while submitting form ! ');
                return redirect()->back();
            }

        }
    }


    public function validate_vendor_form($request){

        $this->validate($request,[
            'Name_of_company' => 'required',
            'Year_of_registration' => 'required',
            'Registered_Address' => 'required',
            'Email' => 'required',
            'Contact_person' => 'required',
            'Contact_Number' => 'required',
            'Owner_Name_Partner_Name' => 'required',
            'Website' =>'required',
            'PAN_No' => 'required',
            'pan_data' => 'required',
            'PF_ESI_Registration_No' => 'required',
            'Co_Cred_Turn_over_in_crores_15_16' => 'required',
            'Co_Cred_Turn_over_in_crores_16_17' => 'required',
            'Co_Cred_Turn_over_in_crores_17_18' => 'required',
            'Co_Cred_PL_in_Lacs_15_16' => 'required',
            'Co_Cred_PL_in_Lacs_16_17' => 'required',
            'Co_Cred_PL_in_Lacs_17_18' => 'required',
            'Account_Name' => 'required',
            'Account_Type' => 'required',
            'Account_Number' => 'required',
            'Bank_Name' => 'required',
            'Branch_Name' => 'required',
            'IFSC_Code' => 'required',
            'MICR_Code' => 'required',
            'Exe_Works_Det_Client' => 'required_without_all',
            'Exe_Works_Det_C_Contact_Person_With_Number' => 'required|array|min:1',
            'Exe_Works_Det_C_Project_Details' => 'required|array|min:1',
            'Exe_Works_Det_CProject_Cost' => 'required|array|min:1',
            'Exe_Works_Det_C_Date_Of_Start' => 'required|array|min:1',
            'Exe_Works_Det_C_Date_Of_Finish' => 'required|array|min:1',
            'ongoing_Works_Det_Client' => 'required_without_all',
            'ongoing_Works_Det_C_Contact_Person_With_Number' => 'required|array|min:1',
            'ongoing_Works_Det_C_Project_Details' => 'required|array|min:1',
            'ongoing_Works_Det_CProject_Cost' => 'required|array|min:1',
            'ongoing_Works_Det_C_Date_Of_Start' => 'required|array|min:1',
            'ongoing_Works_Det_C_Date_Of_Finish' => 'required|array|min:1',
            'n_o_b_civil_works' => 'required_without_all',
            'n_o_b_external_development' => 'required_without_all',
            'n_o_b_service_works' => 'required_without_all',
            "gst_details_file"    => "required|array|min:1"
        ],[
            'gst_details_file.required' => ' Atleast one gst details file field is required.',
            'gst_details_no.required' => ' Atleast gst details no field is required.',
            'n_o_b_civil_works.required' => ' Atleast one civil works field is required.',
            'n_o_b_external_development.required' => ' Atleast external development field is required.',
            'n_o_b_service_works.required' => ' Atleast service works field is required.',
            'Name_of_company.required' => ' The Name of company field is required.',
            'Year_of_registration.required' => ' Year of registration field is required.',
            'Registered_Address.required' => ' The Registered Address field is required.',
            'Email.required' => ' The Email field is required.',
            'Contact_person.required' => ' The Contact Person field is required.',
            'Contact_Number.required' => ' The Contact Number field is required.',
            'Owner_Name_Partner_Name.required' => ' The Owner Name Partner Name field is required.',
            'Website.required' => ' The Website field is required.',
            'PAN_No.required' => ' The PAN No File field is required.',
            'pan_data.required' => ' The PAN No field is required.',
            'PF_ESI_Registration_No.required' => ' The PF ESI Registration No field is required.',
            'Co_Cred_Turn_over_in_crores_15_16.required' => ' The Turn over in crores 15-16 field is required.',
            'Co_Cred_Turn_over_in_crores_16_17.required' => ' The Turn over in crores 16-17 field is required.',
            'Co_Cred_Turn_over_in_crores_17_18.required' => ' The Turn over in crores 17-18 field is required.',
            'Co_Cred_PL_in_Lacs_15_16.required' => ' The Profit Loss in Lakh 15-16 field is required.',
            'Co_Cred_PL_in_Lacs_16_17.required' => ' The Profit Loss in Lakh 16-17 field is required.',
            'Co_Cred_PL_in_Lacs_17_18.required' => ' The Profit Loss in Lakh 17-18 field is required.',
            'Account_Name.required' => ' The Account Name field is required.',
            'Account_Type.required' => ' The Account Type field is required.',
            'Account_Number.required' => ' The Account Number field is required.',
            'Bank_Name.required' => ' The Bank Name field is required.',
            'Branch_Name.required' => ' The Branch Name field is required.',
            'IFSC_Code.required' => ' The IFSC Code field is required.',
            'MICR_Code.required' => ' The MICR Code field is required.',
            'Exe_Works_Det_Client.required' => 'The Client field is required.',
            'Exe_Works_Det_C_Contact_Person_With_Number.required' => ' The Contact Person With Number field is required.',
            'Exe_Works_Det_C_Project_Details.required' => 'The Project Details field is required.',
            'Exe_Works_Det_CProject_Cost.required' => 'The Project Cost field is required.',
            'Exe_Works_Det_C_Date_Of_Start.required' => ' The Date Of Start field is required.',
            'Exe_Works_Det_C_Date_Of_Finish.required' => ' The Date Of Finish field is required.',
            'ongoing_Works_Det_Client.required' => ' The Client field is required.',
            'ongoing_Works_Det_C_Contact_Person_With_Number.required' => ' The Contact Person With Number field is required.',
            'ongoing_Works_Det_C_Project_Details.required' => ' The Project Details field is required.',
            'ongoing_Works_Det_CProject_Cost.required' => ' The Project Cost field is required.',
            'ongoing_Works_Det_C_Date_Of_Start.required' => ' The Date Of Start field is required.',
            'ongoing_Works_Det_C_Date_Of_Finish.required' => ' The Date Of Finish field is required.'
        ]);

    }

    public function vendorscon(Request $request){

        $this->validate_vendor_form($request);

        $vendor_store = new vendorContact;

        $vendor_store->Name_of_company = $request->Name_of_company;
        $vendor_store->Year_of_registration = $request->Year_of_registration;
        $vendor_store->Registered_Address = $request->Registered_Address;
        $vendor_store->Email = $request->Email;
        $vendor_store->Contact_person = $request->Contact_person;
        $vendor_store->Contact_Number = $request->Contact_Number;
        $vendor_store->Owner_Name_Partner_Name = $request->Owner_Name_Partner_Name;
        $vendor_store->Website = $request->Website;

        if( $file = $request->file('PAN_No')){

            $PAN_Noname = time() . $file->getClientOriginalName();

            $file->move(public_path().'/vendorfile/',$PAN_Noname);

            $vendor_store->PAN_No = $PAN_Noname;
        }
		
		$vendor_store->pan_data = $request->pan_data;

        $vendor_store->PF_ESI_Registration_No = $request->PF_ESI_Registration_No;

        if($request->hasfile('gst_details_file'))
        {

            foreach($request->file('gst_details_file') as $filez)
            {
                $name=time() .'-'.$filez->getClientOriginalName();
                $filez->move(public_path().'/gstFile/', $name);
                $data[] = $name;
            }
        }
        $vendor_store->gst_details_file = serialize($data);

         $vendor_store->gst_details_no = serialize($request->gst_details_no);

        $vendor_store->Co_Cred_Turn_over_in_crores_15_16 = $request->Co_Cred_Turn_over_in_crores_15_16;
        $vendor_store->Co_Cred_Turn_over_in_crores_16_17 = $request->Co_Cred_Turn_over_in_crores_16_17;
        $vendor_store->Co_Cred_Turn_over_in_crores_17_18 = $request->Co_Cred_Turn_over_in_crores_17_18;
        $vendor_store->Co_Cred_PL_in_Lacs_15_16 = $request->Co_Cred_PL_in_Lacs_15_16;
        $vendor_store->Co_Cred_PL_in_Lacs_16_17 = $request->Co_Cred_PL_in_Lacs_16_17;
        $vendor_store->Co_Cred_PL_in_Lacs_17_18 = $request->Co_Cred_PL_in_Lacs_17_18;

        $vendor_store->Account_Name = $request->Account_Name;
        $vendor_store->Account_Type = $request->Account_Type;
        $vendor_store->Account_Number = $request->Account_Number;
        $vendor_store->Bank_Name = $request->Bank_Name;
        $vendor_store->Branch_Name = $request->Branch_Name;
        $vendor_store->IFSC_Code = $request->IFSC_Code;
        $vendor_store->MICR_Code = $request->MICR_Code;

        $vendor_store->n_o_b_civil_works = serialize($request->n_o_b_civil_works);
        $vendor_store->n_o_b_external_development = serialize($request->n_o_b_external_development);
        $vendor_store->n_o_b_service_works = serialize($request->n_o_b_service_works);

           $executive_data = array($request->Exe_Works_Det_Client,$request->Exe_Works_Det_C_Contact_Person_With_Number,$request->Exe_Works_Det_C_Project_Details,$request->Exe_Works_Det_CProject_Cost,$request->Exe_Works_Det_C_Date_Of_Start,$request->Exe_Works_Det_C_Date_Of_Finish);

           $vendor_store->Exe_Works_Det_Client = serialize($executive_data);
           $vendor_store->Exe_Works_Det_C_Contact_Person_With_Number = serialize($request->Exe_Works_Det_C_Contact_Person_With_Number);
           $vendor_store->Exe_Works_Det_C_Project_Details = serialize($request->Exe_Works_Det_C_Project_Details);
           $vendor_store->Exe_Works_Det_CProject_Cost = serialize($request->Exe_Works_Det_CProject_Cost);
           $vendor_store->Exe_Works_Det_C_Date_Of_Start = serialize($request->Exe_Works_Det_C_Date_Of_Start);
           $vendor_store->Exe_Works_Det_C_Date_Of_Finish = serialize($request->Exe_Works_Det_C_Date_Of_Finish);

           $ongoing_data = array($request->ongoing_Works_Det_Client,$request->ongoing_Works_Det_C_Contact_Person_With_Number,$request->ongoing_Works_Det_C_Project_Details,$request->ongoing_Works_Det_CProject_Cost,$request->ongoing_Works_Det_C_Date_Of_Start,$request->ongoing_Works_Det_C_Date_Of_Finish);

           $vendor_store->ongoing_Works_Det_Client = serialize($ongoing_data);
           $vendor_store->ongoing_Works_Det_C_Contact_Person_With_Number = serialize($request->ongoing_Works_Det_C_Contact_Person_With_Number);
           $vendor_store->ongoing_Works_Det_C_Project_Details = serialize($request->ongoing_Works_Det_C_Project_Details);
           $vendor_store->ongoing_Works_Det_CProject_Cost =    serialize($request->ongoing_Works_Det_CProject_Cost);
           $vendor_store->ongoing_Works_Det_C_Date_Of_Start =  serialize($request->ongoing_Works_Det_C_Date_Of_Start);
           $vendor_store->ongoing_Works_Det_C_Date_Of_Finish = serialize($request->ongoing_Works_Det_C_Date_Of_Finish);


       $success =  $vendor_store->save();

        if($success){

            $user_email = "sg@omaxe.com";

            Mail::to($user_email)->send(new VendorsContactMail($vendor_store));

            $data = ['message' => 'Thank You'];

            Mail::to($request->Email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/care/vendors');
        }

    }


        public function validate_fd_app($request){

            $this->validate($request,[

                'name' => 'required',
                'email' => 'required',
                'phone_no' => 'required|numeric',
                'city' => 'required',
                'g-recaptcha-response' => 'required|captcha'
            ],[
                'name.required' => ' The name field is required.',
                'name.min' => ' The  name must be at least 3 characters.',
                'name.max' => ' The  name may not be greater than 35 characters.',
                'email.required' => ' The email field is required.',
                'phone_no.required' => ' The phone field is required.',
                'city.required' => ' The city field is required.',
                'g-recaptcha-response' => 'The recaptcha field is required.'
            ]);

        }

	    public function fd_application_form_save(Request $request){

        $this->validate_fd_app($request);

        $FdApplicationContact = new FdApplicationContact;

        $FdApplicationContact->name = $request->name;
        $FdApplicationContact->email = $request->email;
        $FdApplicationContact->phone_no = $request->phone_no;
        $FdApplicationContact->city = $request->city;
        $FdApplicationContact->status = 0;

        $check = $FdApplicationContact->save();

        $form_no = "5000000";

        if($check){

            $last_insert_id = $FdApplicationContact->id;

            $form_no = $form_no + $last_insert_id;


            $update_app_contact = FdApplicationContact::find($last_insert_id);

            $update_app_contact->application_no = $form_no;

            $check_update = $update_app_contact->save();

            if ($check_update){

                $pdf = new Fpdi\Fpdi();

                $filename = 'fd/download/Application_Form.pdf';
                $path = public_path($filename);

                $pdf->setSourceFile($path);

                for($i=1; $i<5; $i++)
                {
                    $pdf->AddPage();
                    $tplIdx = $pdf->importPage($i);
                    $pdf->useTemplate($tplIdx, 5, 5, 200);
                    if($i==3)
                    {
                        $pdf->SetTextColor(0,0,0);

                        $pdf->SetFont('Arial','B',8);

                        $pdf->SetXY(166, 60);

                        $pdf->Write(0, $form_no);

                        $pdf->SetXY(159, 220.5);

                        $pdf->Write(0, $form_no);
                    }
                }
                $pdf->Output('Application_Form_'.$form_no.'.pdf', 'D');
            }else{

                $request->session()->flash('alert-danger','Problem while Submitting');

            }

            $user_email = "fdcustomercare@omaxe.com";

             Mail::to($user_email)->send(new FDAppContactMail($request));

              $data = ['message' => 'Thank You'];

            Mail::to($request->email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');

            return redirect('/thankyou');

        }else{

            $request->session()->flash('alert-danger','Problem while Submitting');

            return redirect('/fixed-deposit/fd-application-form');

        }
    }

    public function validate_common_contact_us($request){

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required|min:2|max:35',
            'city' => 'required|min:2|max:35',
            'zipcode' => 'required|numeric',
            'address' => 'required',
            'project_query' => 'required',
            'g-recaptcha-response' => 'required|captcha'

        ],[
            'name.required' => ' The name field is required.',
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
            'project_query.required' => ' The project query field is required.',
        ]);
        
    }

    public function common_contact_us(Request $request){

        $input = $request->all();

        $this->validate_common_contact_us($request);

        $success = ContactUs::create($input);

        if($success){

            $this->leadsquare_work($request->name,$request->email,$request->phone,$request->country,$request->city,$request->zipcode,$request->address,$request->project_query);


            $user_email = "leads@omaxe.com";

            Mail::to($user_email)->send(new CommonContactUsMail($success));


            $data = ['message' => 'Thank You'];

            Mail::to($request->email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/contact-us/send-enquiry');
        }

    }


    public function leadsquare_enquiry_now_work($name,$email,$phone,$res_type,$query,$utm_source,$utm_medium,$utm_campaign,$utm_term){


        $data_string = (array(
            array(
                'Attribute' => 'Source',
                'Value' => 'Enquiry_Now_Contact_Us'
            ),
            array(
                'Attribute' => 'FirstName',
                'Value' => $name
            ),
            array(
                'Attribute' => 'EmailAddress',
                'Value' => $email
            ),
            array(
                'Attribute' => 'Phone',
                'Value' => $phone
            ),
            array(
                'Attribute' => 'mx_Residential_Status',
                'Value' => $res_type
            ),
            array(
                'Attribute' => 'mx_Query',
                'Value' => $query
            ),
            array(
                'Attribute' => 'SourceContent',
                'Value' => $utm_source
            ),
            array(
                'Attribute' => 'SourceMedium',
                'Value' => $utm_medium
            ),
            array(
                'Attribute' => 'SourceCampaign',
                'Value' => $utm_campaign
            ),
            array(
                'Attribute' => 'mx_UTM_Term',
                'Value' => $utm_term
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
            if ($json_response == 200){
            }
            curl_close($curl);
        } catch (Exception $ex) {
            curl_close($curl);
        }

    }

    public function leadsquare_work($name,$email,$phone,$country,$city,$zipcode,$address,$project_query){


        $data_string = (array(
            array(
                'Attribute' => 'Source',
                'Value' => 'Common_Contact_Us'
            ),
            array(
                'Attribute' => 'FirstName',
                'Value' => $name
            ),
            array(
                'Attribute' => 'EmailAddress',
                'Value' => $email
            ),
            array(
                'Attribute' => 'Phone',
                'Value' => $phone
            ),
            array(
                'Attribute' => 'mx_Country',
                'Value' => $country
            ),
            array(
                'Attribute' => 'mx_City',
                'Value' => $city
            ),
            array(
                'Attribute' => 'mx_Zip',
                'Value' => $zipcode
            ),
            array(
                'Attribute' => 'mx_Street1',
                'Value' => $address
            ),
            array(
                'Attribute' => 'mx_Query',
                'Value' => $project_query
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
            if ($json_response == 200){
            }
            curl_close($curl);
        } catch (Exception $ex) {
            curl_close($curl);
        }
    }

    public function validate_contact_us_nri($request){

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'email' => 'required|email',
            'phone' => 'required|numeric',
            'country' => 'required|min:2|max:35',
            'city' => 'required|min:2|max:35',
            'address' => 'required',
            'project_query' => 'required',
            'g-recaptcha-response' => 'required|captcha'
        ],[
            'name.required' => ' The name field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'phone.required' => ' The phone field is required.',
            'country.required' => ' The country field is required.',
            'city.required' => ' The city field is required.',
            'address.required' => ' The address field is required.',
            'project_query.required' => ' The project query field is required.',
        ]);

    }

    public function contact_us_nri(Request $request){

        $input = $request->all();

        $this->validate_contact_us_nri($request);

        $success = NriCareContact::create($input);
        if($success){

            $user_email = "nricare@omaxe.com";

            Mail::to($user_email)->send(new NriContactMail($success));

            $data = ['message' => 'Thank You'];

            Mail::to($request->email)->send(new ThankYouMail($data));

            $request->session()->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/care/nri-care');
        }
    }

    public function validate_contact_us_associate($request){

        $this->validate($request,[
            'name' => 'required|min:3|max:35',
            'city' => 'required|min:2|max:35',
            'country' => 'required',
            'company_name' => 'required',
            'state' => 'required',
            'pincode' =>'required',
            'country' => 'required',
            'address' =>'required',
            'email_id' => 'required|email',
            'phone' => 'required|numeric',
            'g-recaptcha-response' => 'required|captcha'
        ],[
            'year_of_formation.required' => ' The year of formation field is required.',
            'pan_card.required' => ' The pan card field is required.',
            'no_of_employee.required' => ' The no of employee field is required.',
            'client_list.required' => ' The client list field is required.',
            'landine_no.required' => ' The landine no field is required.',
            'name.required' => ' The name field is required.',
            'name.min' => ' The  name must be at least 3 characters.',
            'name.max' => ' The  name may not be greater than 35 characters.',
            'email.required' => ' The email field is required.',
            'phone.required' => ' The phone field is required.',
            'country.required' => ' The country field is required.',
            'city.required' => ' The city field is required.',
            'address.required' => ' The address field is required.',
            'promoters_core_competence.required' => ' The promoters core competence field is required.',
            'promoters_email.required' => ' The promoters email field is required.',
            'promoters_country.required' => ' The promoters country field is required.',
            'promoters_pincode.required' => ' The promoters pincode field is required.',
            'promoters_address.required' => ' The promoters address field is required.',
            'promoters_nationality.required' => ' The promoters nationality field is required.',
            'promoters_fax_no.required' => ' The promoters fax no field is required.',
            'promoters_mobile_no.required' => ' The promoters mobile no field is required.',
            'promoters_edu_qualifiication.required' => ' The promoters edu qualifiication field is required.',
            'promoters_city.required' => ' The promoters city field is required.',
            'promoters_name.required' => ' The promoters name field is required.',
            'fax_no.required' => ' The fax no field is required.',
        ]);

    }

    public function contact_us_associate(Request $request){

        $input = $request->all();

        $this->validate_contact_us_associate($request);

        $success = AssociateContact::create($input);
        if($success){

            $user_email = "rakhi@omaxe.com";
            $user_email2 = "binodbidayarthi@omaxe.com";
//            $user_email3 = "bhasink69@gmail.com";
//
//            Mail::to($user_email3)->send(new AssociateContactMail($success));
            Mail::to($user_email)->send(new AssociateContactMail($success));
            Mail::to($user_email2)->send(new AssociateContactMail($success));

            $data = ['message' => 'Thank You'];

            Mail::to($request->email_id)->send(new ThankYouMail($data));

            return redirect ('/thankyou');
        }
        else{
            $request->session()->flash('alert-danger','Problem while Submitting');
            return redirect ('/care/associate');
        }
    }

    public function fd_faq(){
        $data = array();
        $faq = FdFaq::paginate(5);
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.fd-faq',compact('data','faq'));
    }

    public function fd_downloads(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.downloads',compact('data'));
    }

    public function fd_contact_us(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.fd-contact-us',compact('data'));
    }

    public function fd_application_form(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.fd-application-form',compact('data'));
    }

    public function fd_compliance(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.compliance',compact('data'));
    }

    public function fd_idbi(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.fixed-deposit.idbi',compact('data'));
    }
    
    public function faq(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.faq',compact('data'));
    }

    public function faqvrindavan(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.faqvrindavan',compact('data'));
    }

    public function faqnewchandigarh(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.faqnewchandigarh',compact('data'));
    }

    public function faqludhiana(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.faqludhiana',compact('data'));
    }

    public function disclaimer(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.disclaimer',compact('data'));
    }
    public function sitemap(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.sitemap',compact('data'));
    }
    public function contact_us_offices(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.contact.offices',compact('data'));
    }
    public function regional_offices(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.contact.regional-offices',compact('data'));
    }
    public function send_enquiry(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.contact.send-enquiry',compact('data'));
    }

    public function current_openings(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.career.current-opening',compact('data'));
    }

    public function employee_welfare(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.career.employee-welfare',compact('data'));
    }

    public function growth_opportunities(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.career.growth-opportunities',compact('data'));
    }

    public function work_culture(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.career.work-culture',compact('data'));
    }

    public function mission_and_vision(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.mission-and-vision',compact('data'));
    }

    public function awards_and_honors(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.awards-and-honors',compact('data'));
    }

    public function leadership_team(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.leadership-team',compact('data'));
    }

    public function success_story(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.success-story',compact('data'));
    }

    public function cmd_message(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.cmd-message',compact('data'));
    }

    public function quality_policy(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.about-us.quality-policy',compact('data'));
    }

    public function p_type(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.testpropertytype',compact('data'));
    }


    public function buyers_guide(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.buyers-guide',compact('data'));
    }


    public function testimonials(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.testimonials',compact('data'));
    }

    public function payment_gateway(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.payment-gateway',compact('data'));
    }

    public function associate(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.care.associate',compact('data'));
    }

    public function buyer_guide(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.care.buyers-guide',compact('data'));
    }

    public function nri_care(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.care.nri-care',compact('data'));
    }

    public function omaxe_care(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.care.omaxe-care',compact('data'));
    }
    public function vendors(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('content.care.vendor',compact('data'));
    }

    public function emi_calculator(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.emi-calculator',compact('data'));
    }
    
    public function currency_converter(){
        $data = array();
        $data['head_city'] = HeaderController::get_header_cities();
        $data['head_current_projects'] = HeaderController::get_res_current_projects();
        $data['head_completed_projects'] = HeaderController::get_res_completed_projects();
        $data['head_upcoming_projects'] = HeaderController::get_res_upcoming_projects();
        $data['head_com_current_projects'] = HeaderController::get_com_current_projects();
        $data['head_com_completed_projects'] = HeaderController::get_com_completed_projects();
        return view('static.currency-converter',compact('data'));
    }

}
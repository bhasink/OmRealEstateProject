<?php

namespace Omaxe\Http\Controllers\Admin;

use Omaxe\Investors;
use Omaxe\AcheivementPanel;
use Omaxe\TestimonialModel;
use Illuminate\Http\Request;
use Omaxe\Http\Controllers\Controller;
use Auth;

class AdminInvestorController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function investor_list($page_name){

        if ((Auth::user()->role =="LeadsAdmin") || (Auth::user()->role =="SeoAdmin")){
            return redirect('/omaxeadmin');

        }

        if ($page_name =='annual-report'){
            $page_number = 1;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_annual_report_list',compact('get_investor_data_list'));

        }else if($page_name =='balance-sheet'){

            $page_number = 2;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_balance_sheet_list',compact('get_investor_data_list'));

        }else if($page_name =='certificate-of-incorporations'){

            $page_number = 3;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.certificate_of_incorporations',compact('get_investor_data_list'));

        }else if($page_name =='moa-and-aoa'){

            $page_number = 4;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_moa_and_aoa_list',compact('get_investor_data_list'));

        }else if($page_name =='prospectus'){

            $page_number = 5;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_prospectus_list',compact('get_investor_data_list'));

        }else if($page_name =='corporate-governance'){

            $page_number = 6;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_corporate_governance_list',compact('get_investor_data_list'));

        }else if($page_name =='committees-of-board-of-directors'){

            $page_number = 7;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_committees_of_board_of_directors_list',compact('get_investor_data_list'));

        }else if($page_name =='appointment-letters'){

            $page_number = 8;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_appointment_letters_list',compact('get_investor_data_list'));

        }else if($page_name =='resignation-letters'){

            $page_number = 9;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_resignation_letters_list',compact('get_investor_data_list'));

        }else if($page_name =='corporate-governance-reports'){

            $page_number = 10;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_corporate_governance_reports_list',compact('get_investor_data_list'));

        }else if($page_name =='csr-event'){

            $page_number = 11;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_csr_event_list',compact('get_investor_data_list'));

        }else if($page_name =='csr-policy'){

            $page_number = 12;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_csr_policy_list',compact('get_investor_data_list'));

        }else if($page_name =='csr-project'){

            $page_number = 13;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_csr_project_list',compact('get_investor_data_list'));

        }else if($page_name =='financials'){

            $page_number = 14;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_financials_list',compact('get_investor_data_list'));

        }else if($page_name =='shareholding-pattern'){

            $page_number = 15;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_shareholding_pattern_list',compact('get_investor_data_list'));

        }else if($page_name =='stakeholder-information'){

            $page_number = 16;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_stakeholder_information_list',compact('get_investor_data_list'));

        }else if($page_name =='stakeholder-claim'){

            $page_number = 17;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_stakeholder_claim_list',compact('get_investor_data_list'));

        }else if($page_name =='notice-and-scrutinizers-report'){

            $page_number = 18;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_notice_and_scrutinizers_report_list',compact('get_investor_data_list'));

        }else if($page_name =='record-date-notice-for-ncds'){

            $page_number = 19;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_record_date_notice_for_ncds_list',compact('get_investor_data_list'));

        }else if($page_name =='notice-payment-redemption'){

            $page_number = 20;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_notice_payment_redemption_list',compact('get_investor_data_list'));

        }else if($page_name =='credit-rating'){

            $page_number = 21;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_credit_rating_list',compact('get_investor_data_list'));

        }else if($page_name =='notice-and-information'){

            $page_number = 22;

            $get_investor_data_list = Investors::where('investor_cat_id',$page_number)
                ->get();

            return view('admin.investors.investor_notice_and_information_list',compact('get_investor_data_list'));

        }
    }

    public function annual_report_create(){
        return view('admin.investors.create.annual_report_create');
    }


    public function balance_sheet_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 2;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-investor-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/balance-sheet');

        }

    }




    public function resignation_letters_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;


        $invesor_annual_report_id = 9;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-resignation-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/resignation-letters');

        }


    }


    public function appointment_letters_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;


        $invesor_annual_report_id = 8;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-appointment-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/appointment-letters');

        }


    }



    public function corporate_governance_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
            'investor_image' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
            'investor_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 6;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;




        if ($file_investor_image = $request->file('investor_image')){

            $investor_image = time(). $file_investor_image->getClientOriginalName();

            $file_investor_image->move(public_path().'/investors/images/annual_reports/',$investor_image);

            $create_investor_data->investor_image = $investor_image;


        }

        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-governance-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/corporate-governance');

        }


    }

    public function committees_of_board_of_directors_create_save(Request $request
    ){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;


        $invesor_annual_report_id = 7;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-committees-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/committees-of-board-of-directors');

        }


    }

    public function annual_report_create_save(Request $request){


        $this->validate($request,[
            'investor_pdf' => 'max:2048',
            'investor_image' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
            'investor_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 1;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;




        if ($file_investor_image = $request->file('investor_image')){

            $investor_image = time(). $file_investor_image->getClientOriginalName();

            $file_investor_image->move(public_path().'/investors/images/annual_reports/',$investor_image);

            $create_investor_data->investor_image = $investor_image;


        }

        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }


        $check_create_investor_data_save = $create_investor_data->save();

        if ($check_create_investor_data_save){

            $request->session()
                ->flash('alert-investor-create','Investor annual reports has been created');
            return redirect('/omaxeadmin/investor/list/annual-report');

        }


    }

    public function annual_report_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.annual_report_edit',compact('get_investor_data'));

    }

    public function prospectus_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.prospectus_edit',compact('get_investor_data'));

    }


    public function credit_rating_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);

        return view('admin.investors.edit.credit_rating_edit',compact('get_investor_data'));

    }

    public function notice_and_scrutinizers_report_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.notice_and_scrutinizers_report_edit',compact('get_investor_data'));

    }

    public function record_date_notice_for_ncds_report_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.record_date_notice_for_ncds_edit',compact('get_investor_data'));

    }



    public function balance_sheet_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.balance_sheet_edit',compact('get_investor_data'));

    }

    public function corporate_governance_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.corporate_governance_edit',compact('get_investor_data'));

    }

    public function notice_payment_redemption_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.notice_payment_redemption_edit',compact('get_investor_data'));

    }

    public function certificate_incorporations_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.certificate_of_incorporations_edit',compact('get_investor_data'));

    }

    public function csr_event_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.csr_event_edit',compact('get_investor_data'));

    }

    public function csr_policy_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.csr_policy_edit',compact('get_investor_data'));

    }

    public function csr_project_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.csr_project_edit',compact('get_investor_data'));

    }



    public function appointment_letters_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.appointment_letters_edit',compact('get_investor_data'));

    }

    public function stakeholder_information_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.stakeholder_information_edit',compact('get_investor_data'));

    }

    public function resignation_letters_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.resignation_letters_edit',compact('get_investor_data'));

    }

    public function csr_financials_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.financials_edit',compact('get_investor_data'));

    }


    public function shareholding_pattern_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.shareholding_pattern_edit',compact('get_investor_data'));

    }




    public function notice_and_information_edit($id){

        $get_investor_data  =Investors::where('id',$id)
            ->first();

        return view('admin.investors.edit.notice_and_information_edit',compact('get_investor_data'));

    }

    public function moa_and_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.moa_and_aoa_edit',compact('get_investor_data'));

    }

    public function corporate_governance_reports_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.corporate_governance_reports_edit',compact('get_investor_data'));

    }


    public function committees_board_directors_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_investor_data = Investors::findOrFail($update_id);


        return view('admin.investors.edit.committees_of_board_of_directors_edit',compact('get_investor_data'));

    }






    public function corporate_governance_reports_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 10;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-corporate-governance-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/corporate-governance-reports');

        }

    }



    public function stakeholder_information_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 16;

        $investor_qtr = $request->investor_report_qtr;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;
        $create_investor_data->report_qtr = $investor_qtr;




        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-stakeholder-information-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/stakeholder-information');

        }

    }



    public function notice_payment_redemption_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 20;

        $investor_report_year = $request->investor_report_year;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-payment-redemption-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/notice-payment-redemption');

        }


    }


    public function notice_payment_redemption_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 20;

        $investor_report_year = $request->investor_report_year;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-payment-redemption-updated','Investor has been created');
            return redirect('/omaxeadmin/investor/list/notice-payment-redemption');

        }


    }





    public function credit_rating_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 21;

        $investor_report_year = $request->investor_report_year;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-credit-rating-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/credit-rating');

        }


    }




    public function notice_and_information_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 22;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;
        $create_investor_data->report_qtr = $investor_qtr;

        $create_investor_data->report_year = $investor_report_year;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-information-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/notice-and-information');

        }

    }


    public function notice_and_scrutinizers_report_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 18;

        $investor_qtr = $request->investor_report_qtr;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;
        $create_investor_data->report_qtr = $investor_qtr;




        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-scrutinizers-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/notice-and-scrutinizers-report');

        }

    }


    public function record_date_notice_for_ncds_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 19;

        $investor_qtr = $request->investor_report_qtr;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;
        $create_investor_data->report_qtr = $investor_qtr;




        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-record-date-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/record-date-notice-for-ncds');

        }

    }



    public function notice_and_information_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 22;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-information-u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/notice-and-information');

        }

    }


    public function record_date_notice_for_ncds_report_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 19;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-record-date-notice-u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/record-date-notice-for-ncds');

        }

    }




    public function notice_and_scrutinizers_report_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 18;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-notice-scrutinizers-u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/notice-and-scrutinizers-report');

        }

    }



    public function stakeholder_information_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 16;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-stakeholder-information-created_u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/stakeholder-information');

        }

    }




    public function prospectus_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 5;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;





        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-moa-report-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/prospectus');

        }

    }

    public function csr_event_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 11;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-event-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/csr-event');

        }

    }


    public function csr_policy_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

//        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 12;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

//        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-event-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/csr-policy');

        }

    }

    public function csr_project_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

//        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 13;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

//        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-project-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/csr-project');

        }

    }


    public function csr_project_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

//        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 13;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

//        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-project-created_u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/csr-project');

        }

    }



    public function csr_policy_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

//        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 12;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

//        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-event-created_u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/csr-policy');

        }

    }






    public function csr_event_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 11;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-csr-event-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/csr-event');

        }

    }


    public function credit_rating_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 21;

        $investor_report_year = $request->investor_report_year;


        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-credit-rating-updated','Investor has been created');
            return redirect('/omaxeadmin/investor/list/credit-rating');

        }

    }




    public function shareholding_pattern_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 15;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;


        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-shareholding-pattern-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/shareholding-pattern');

        }

    }


    public function financials_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 14;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-financials-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/financials');

        }

    }



    public function shareholding_pattern_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 15;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-shareholding-pattern-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/shareholding-pattern');

        }

    }


    public function csr_financials_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 14;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-financials-reports-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/financials');

        }

    }




    public function corporate_governance_reports_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_qtr = $request->investor_report_qtr;

        $investor_report_year = $request->investor_report_year;

        $invesor_annual_report_id = 10;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->report_qtr = $investor_qtr;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-governance-reports-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/corporate-governance-reports');

        }

    }



    public function committees_board_directors_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);


        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 7;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-committees_update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/committees-of-board-of-directors');

        }

    }



    public function resignation_letters_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 9;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-resignation-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/resignation-letters');

        }

    }


    public function appointment_letters_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 8;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-appointment-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/appointment-letters');

        }

    }

    public function prospectus_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 5;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-moa-report-created_u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/prospectus');

        }

    }



    public function moa_and_aoa_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 4;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-moa-report-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/moa-and-aoa');

        }

    }


    public function moa_and_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 4;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-moa-report-created_u','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/moa-and-aoa');

        }

    }


    public function certificate_of_incorporations_create_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 3;

        $create_investor_data = new Investors;

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->save();

        if ($check_save){

            $request->session()
                ->flash('alert-certificate-report-created','Investor has been created');
            return redirect('/omaxeadmin/investor/list/certificate-of-incorporations');

        }

    }


    public function certificate_incorporations_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $invesor_annual_report_id = 3;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-certificate-report-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/certificate-of-incorporations');

        }

    }



    public function corporate_governance_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 6;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-governance-report-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/corporate-governance');

        }


    }


    public function balance_sheet_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 2;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;



        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-balance-report-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/balance-sheet');

        }

    }


    public function annual_report_edit_save(Request $request){

        $this->validate($request,[
            'investor_pdf' => 'max:2048',
        ],[
            'investor_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $investor_title = $request->investor_title;

        $investor_report_year = $request->investor_report_year;


        $invesor_annual_report_id = 1;

        $create_investor_data = Investors::where('id',$request->investor_id)
            ->where('investor_cat_id',$invesor_annual_report_id)
            ->first();

        $create_investor_data->investors_title = $investor_title;

        $create_investor_data->report_year = $investor_report_year;

        $create_investor_data->investor_cat_id = $invesor_annual_report_id;


        if ($file_investor_image = $request->file('investor_image')){

            $investor_image = time(). $file_investor_image->getClientOriginalName();

            $file_investor_image->move(public_path().'/investors/images/annual_reports/',$investor_image);

            $create_investor_data->investor_image = $investor_image;


        }

        if ($file_media_pdf = $request->file('investor_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/investors/pdf/',$media_pdf);

            $create_investor_data->inv_pdf = $media_pdf;

        }

        $check_save = $create_investor_data->update();

        if ($check_save){

            $request->session()
                ->flash('alert-annual-report-update','Investor has been updated');
            return redirect('/omaxeadmin/investor/list/annual-report');

        }

    }




    public function annual_report_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-annual-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/annual-report');

        }

    }

    public function committees_board_directors_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-committees-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/committees-of-board-of-directors');

        }

    }

    public function credit_rating_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-credit-rating-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/credit-rating');

        }

    }



    public function csr_financials_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-financials-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/financials');

        }

    }

    public function shareholding_pattern_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-shareholding-pattern-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/shareholding-pattern');

        }

    }




    public function corporate_governance_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-governance-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/corporate-governance');

        }

    }

    public function balance_sheet_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-balance-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/balance-sheet');

        }

    }


    public function certificate_incorporations_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-certificate-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/certificate-of-incorporations');

        }

    }

    public function record_date_notice_for_ncds_report_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-record-date-notice-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/record-date-notice-for-ncds');

        }

    }

    public function corporate_governance_reports_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-governance-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/corporate-governance-reports');

        }

    }


    public function notice_and_scrutinizers_report_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-notice-scrutinizers-report-delete','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/notice-and-scrutinizers-report');

        }

    }





    public function moa_and_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-moa-report-created_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/moa-and-aoa');

        }

    }

    public function csr_event_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-csr-report-event_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/csr-event');

        }

    }

    public function notice_and_information_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-notice-information-event_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/notice-and-information');

        }

    }



    public function notice_payment_redemption_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-notice-payment-redemption','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/notice-payment-redemption');

        }

    }


    public function csr_policy_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-csr-report-event_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/csr-policy');

        }

    }


    public function prospectus_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-moa-report-created_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/prospectus');

        }

    }

    public function csr_project_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-csr_p_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/csr-project');

        }

    }




    public function appointment_letters_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-appointment-created_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/appointment-letters');

        }

    }

    public function resignation_letters_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-resignation-created_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/resignation-letters');

        }

    }


    public function stakeholder_information_delete($id,Request $request){

        $project_id = $id;

        $find_investor = Investors::findOrFail($project_id);

        $check__investor_delete = $find_investor->delete();

        if ($check__investor_delete){

            $request->session()
                ->flash('alert-stakeholder-created_d','Investor Succesfully Deleted !');
            return redirect('/omaxeadmin/investor/list/stakeholder-information');

        }

    }









    public function appointment_letters_create(){
        return view('admin.investors.create.appointment_letters_create');
    }

    public function balance_sheet_create(){
        return view('admin.investors.create.balance_sheet_create');
    }

    public function certificate_of_incorporations_create(){
        return view('admin.investors.create.certificate_of_incorporations_create');
    }

    public function committees_of_board_of_directors_create(){
        return view('admin.investors.create.committees_of_board_of_directors_create');
    }

    public function corporate_governance_create(){
        return view('admin.investors.create.corporate_governance_create');
    }

    public function corporate_governance_reports_create(){
        return view('admin.investors.create.corporate_governance_reports_create');
    }

    public function credit_rating_create(){
        return view('admin.investors.create.credit_rating_create');
    }

    public function csr_event_create(){
        return view('admin.investors.create.csr_event_create');
    }

    public function csr_policy_create(){
        return view('admin.investors.create.csr_policy_create');
    }

    public function csr_project_create(){
        return view('admin.investors.create.csr_project_create');
    }

    public function financials_create(){
        return view('admin.investors.create.financials_create');
    }

    public function moa_and_aoa_create(){
        return view('admin.investors.create.moa_and_aoa_create');
    }

    public function notice_and_information_create(){
        return view('admin.investors.create.notice_and_information_create');
    }

    public function notice_and_scrutinizers_report_create(){
        return view('admin.investors.create.notice_and_scrutinizers_report_create');
    }

    public function notice_payment_redemption_create(){
        return view('admin.investors.create.notice_payment_redemption_create');
    }

    public function prospectus_create(){
        return view('admin.investors.create.prospectus_create');
    }

    public function record_date_notice_for_ncds_create(){
        return view('admin.investors.create.record_date_notice_for_ncds_create');
    }

    public function resignation_letters_create(){
        return view('admin.investors.create.resignation_letters_create');
    }

    public function shareholding_pattern_create(){
        return view('admin.investors.create.shareholding_pattern_create');
    }

    public function stakeholder_claim_create(){
        return view('admin.investors.create.stakeholder_claim_create');
    }

    public function stakeholder_information_create(){
        return view('admin.investors.create.stakeholder_information_create');
    }

    public function acheivement_panel_create(){
        return view('admin.acheivement_panel_create');
    }

    public function testimonial_panel_create(){
        return view('admin.testimonial_panel_create');
    }


    public function testimonial_panel_create_save(Request $request){

        $this->validate($request,[
            'project_image' => 'max:2048',
        ],[
            'project_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $create_TestimonialModel_panel = new TestimonialModel;

        $create_TestimonialModel_panel->testimonial_user = $request->testimonial_user;

        $create_TestimonialModel_panel->project_name = $request->project_name;

        $create_TestimonialModel_panel->testimonial_description = $request->testimonial_description;

        if ($acheivement_image = $request->file('project_image')){

            $acheivement_image_data = time(). $acheivement_image->getClientOriginalName();

            $acheivement_image->move(public_path().'/images/static/',$acheivement_image_data);

            $create_TestimonialModel_panel->project_image = $acheivement_image_data;


        }


        $chk = $create_TestimonialModel_panel->save();

        if ($chk){

            $request->session()
                ->flash('alert-testimonial-create','testimonial Succesfully Deleted !');
            return redirect('/omaxeadmin/testimonial-panel/list');



        }

    }

    public function testimonial_panel_edit_save(Request $request){

        $this->validate($request,[
            'project_image' => 'max:2048',
        ],[
            'project_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $id = $request->testimonial_id;

        $create_TestimonialModel_panel  =TestimonialModel::where('id',$id)
            ->first();

        $create_TestimonialModel_panel->testimonial_user = $request->testimonial_user;

        $create_TestimonialModel_panel->project_name = $request->project_name;

        $create_TestimonialModel_panel->testimonial_description = $request->testimonial_description;

        if ($acheivement_image = $request->file('project_image')){

            $acheivement_image_data = time(). $acheivement_image->getClientOriginalName();

            $acheivement_image->move(public_path().'/images/static/',$acheivement_image_data);

            $create_TestimonialModel_panel->project_image = $acheivement_image_data;


        }


        $chk = $create_TestimonialModel_panel->save();

        if ($chk){

            $request->session()
                ->flash('alert-testimonial-edit','testimonail Succesfully Deleted !');
            return redirect('/omaxeadmin/testimonial-panel/list');



        }

    }




    public function acheivement_panel_create_save(Request $request){

        $this->validate($request,[
            'acheivement_image' => 'max:2048',
            'responsive_image' => 'max:2048',
        ],[
            'acheivement_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'responsive_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $create_acheivement_panel = new AcheivementPanel;

        $create_acheivement_panel->image_text = $request->image_text;

        if ($acheivement_image = $request->file('acheivement_image')){

            $acheivement_image_data = time(). $acheivement_image->getClientOriginalName();

            $acheivement_image->move(public_path().'/images/static/',$acheivement_image_data);

            $create_acheivement_panel->acheivement_image = $acheivement_image_data;


        }

        if ($acheivement_image_res = $request->file('responsive_image')){

            $acheivement_image_data_res = time(). $acheivement_image_res->getClientOriginalName();

            $acheivement_image_res->move(public_path().'/images/static/',$acheivement_image_data_res);

            $create_acheivement_panel->responsive_image = $acheivement_image_data_res;


        }



        $chk = $create_acheivement_panel->save();

        if ($chk){

            $request->session()
                ->flash('alert-acheivement-create','Acheivement Succesfully Deleted !');
            return redirect('/omaxeadmin/acheivement-panel/list');



        }
    }

    public function acheivement_panel_list(){

        $acheivement_panel_list = AcheivementPanel::all();

        return view('admin.acheivement_panel_list',compact('acheivement_panel_list'));

    }

    public function testimonial_panel_list(){

        $testimonial_panel_list = TestimonialModel::all();

        return view('admin.testimonial_panel_list',compact('testimonial_panel_list'));

    }

    public function testimonial_panel_edit($id){

        $check_testimonial_tab  =TestimonialModel::where('id',$id)
            ->first();

        return view('admin.testimonial_panel_edit',compact('check_testimonial_tab'));

    }





    public function acheivement_panel_edit($id){

        $check_acheivement_tab  =AcheivementPanel::where('id',$id)
                                                ->first();

        return view('admin.acheivement_panel_edit',compact('check_acheivement_tab'));

    }

    public function acheivement_panel_edit_save(Request $request){

        $this->validate($request,[
            'acheivement_image' => 'max:2048',
            'responsive_image' => 'max:2048',
        ],[
            'acheivement_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'responsive_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $id = $request->image_id;

        $text = $request->image_text;

        $check_acheivement_tab  =AcheivementPanel::where('id',$id)
            ->first();

        $check_acheivement_tab->image_text = $text;

        if ($acheivement_image = $request->file('acheivement_image')){

            $acheivement_image_data = time(). $acheivement_image->getClientOriginalName();

            $acheivement_image->move(public_path().'/images/static/',$acheivement_image_data);

            $check_acheivement_tab->acheivement_image = $acheivement_image_data;
        }


        if ($acheivement_image_res = $request->file('responsive_image')){

            $acheivement_image_data_res = time(). $acheivement_image_res->getClientOriginalName();

            $acheivement_image_res->move(public_path().'/images/static/',$acheivement_image_data_res);

            $check_acheivement_tab->responsive_image = $acheivement_image_data_res;
        }

        $chk = $check_acheivement_tab->save();

        if ($chk){

            $request->session()
                ->flash('alert-acheivement-update','Acheivement Succesfully updated !');
            return redirect('/omaxeadmin/acheivement-panel/list');

        }

    }


    public function acheivement_panel_delete($id,Request $request){

        $project_id = $id;

        $check_acheivement_tab = AcheivementPanel::findOrFail($project_id);

        $check_acheivement_tab_delete = $check_acheivement_tab->delete();

        if ($check_acheivement_tab_delete){

            $request->session()
                ->flash('alert-acheivement-delete','Acheivement Succesfully Deleted !');
            return redirect('/omaxeadmin/acheivement-panel/list');

        }

    }


    public function testimonial_panel_delete($id,Request $request){

        $project_id = $id;

        $check_testimonial_tab = TestimonialModel::findOrFail($project_id);

        $check_testimonial_tab_delete = $check_testimonial_tab->delete();

        if ($check_testimonial_tab_delete){

            $request->session()
                ->flash('alert-testimonial-delete','testimonial Succesfully Deleted !');
            return redirect('/omaxeadmin/testimonial-panel/list');

        }

    }





}

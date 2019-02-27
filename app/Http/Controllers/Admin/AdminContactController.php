<?php

namespace Omaxe\Http\Controllers\Admin;
use Omaxe\ContactUs;
use Omaxe\InvestorContact;
use Omaxe\MediaContact;
use Omaxe\AssociateContact;
use Omaxe\NriCareContact;
use Omaxe\vendorContact;
use Omaxe\FixedDepositContact;
use Omaxe\FdApplicationContact;
use Omaxe\EbrochureContactUs;
use Omaxe\EnquireNowContact;
use Illuminate\Http\Request;
use Omaxe\Http\Controllers\Controller;

class AdminContactController extends Controller
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
        //
    }
    
    public function common_contact(){
        $contact_details = ContactUs::all();
        return view('admin.common-contact',compact('contact_details'));
    }

    public function media_contact(){
        $contact_details = MediaContact::all();
        return view('admin.media.contact-us.contact',compact('contact_details'));
    }

    public function investor_contact(){
        $contact_details = InvestorContact::all();
        return view('admin.investors.contact-us.contact',compact('contact_details'));
    }

    public function associate_media_contact(){
        $contact_details = AssociateContact::all();
        return view('admin.care.contact-us.associate-contact',compact('contact_details'));
    }

    public function nri_media_contact(){
        $contact_details = NriCareContact::all();
        return view('admin.care.contact-us.nri-contact',compact('contact_details'));
    }

    public function vendors_contact(){
        $contact_details = vendorContact::all();
        return view('admin.care.contact-us.vendors',compact('contact_details'));
    }

    public function fd_contact(){
        $contact_details = FixedDepositContact::all();
        return view('admin.fd.contact',compact('contact_details'));
    }

    public function fd_app_contact(){
        $contact_details = FdApplicationContact::all();
        return view('admin.fd.appcontact',compact('contact_details'));
    }

  


    public function vendordownload($file_name) {
        $file_path = public_path('vendorfile/'.$file_name);
        if ($file_path){
            return response()->download($file_path);
        }
        else{
            return abort(404);
        }
    }
	
	public function vendordownload1($file_name) {
        $file_path = public_path('gstFile/'.$file_name);
        if ($file_path){
            return response()->download($file_path);
        }
        else{
            return abort(404);
        }
    }


    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

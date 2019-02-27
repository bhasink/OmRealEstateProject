<?php

namespace Omaxe\Http\Controllers\Admin;

use Omaxe\Medias;
use Illuminate\Http\Request;
use Omaxe\Http\Controllers\Controller;
use Session;
use Auth;

class AdminMediaController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');


    }


    public function media_list($page_name){

        if ((Auth::user()->name =="LeadsAdmin") || (Auth::user()->name =="SeoAdmin")){
                return redirect('/omaxeadmin');

        }

        if ($page_name =='ad-campaign'){
            $page_number = 1;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_ad_campaign_list',compact('get_media_data_list'));

        }else if ($page_name =='e-coverages'){
            $page_number = 2;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_e_coverages_list',compact('get_media_data_list'));

        }else if ($page_name =='media-events'){
            $page_number = 3;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_events_list',compact('get_media_data_list'));

        }else if ($page_name =='media-kit'){
            $page_number = 4;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_kit_list',compact('get_media_data_list'));

        }else if ($page_name =='print-coverages'){
            $page_number = 6;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_print_coverages_list',compact('get_media_data_list'));

        }else if ($page_name =='press-releases'){
            $page_number = 7;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_press_releases_list',compact('get_media_data_list'));

        }else if ($page_name =='media-videos'){
            $page_number = 8;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_list_video',compact('get_media_data_list'));

        }else if ($page_name =='regional-newsletter'){
            $page_number = 10;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_list_r_newsletter',compact('get_media_data_list'));

        }else if ($page_name =='corporate-newsletter'){
            $page_number = 9;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_list_r_corporate',compact('get_media_data_list'));

        }else {
            return abort(404);
        }

        $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

        return view('admin.media.media_list',compact('get_media_data_list'));

    }

    public function media_edit($page_name,$edit_id){

        if ($page_name =='ad-campaign'){
            $page_number = 1;
        }else if ($page_name =='e-coverages'){
            $page_number = 2;

        }else if ($page_name =='media-events'){
            $page_number = 3;

        }else if ($page_name =='media-kit'){
            $page_number = 4;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_kit_list',compact('get_media_data_list'));

        }else if ($page_name =='print-coverages'){
            $page_number = 6;

        }else if ($page_name =='press-releases'){
            $page_number = 7;

        }else if ($page_name =='media-videos'){

            $page_number = 8;

            $get_media_video_data = Medias::where('id',$edit_id)->where('media_category_id',$page_number)->first();

            return view('admin.media.media_edit',compact('get_media_video_data'));

        }else if ($page_name =='regional-newsletter'){
            $page_number = 10;

            $get_media_data_list = Medias::where('media_category_id',$page_number)
                ->get();

            return view('admin.media.media_list_r_newsletter',compact('get_media_data_list'));

        }else if ($page_name =='corporate-newsletter'){
            $page_number = 9;

        }else {
            return abort(404);
        }

    }

    public function media_edit_update(Request $request){

        $media_id = $request->media_id;
        $media_title = $request->media_title;
        $media_youtube_link = $request->media_youtube_link;

        if ($request->page_name =="media-videos"){
            $page_category_id = 8;
        }

        $update_media_Data = Medias::where('id',$media_id)
                                    ->where('media_category_id',$page_category_id)
                                    ->first();

        $update_media_Data->media_title = $media_title;

        $update_media_Data->media_youtube_link = $media_youtube_link;

        $check_update = $update_media_Data->update();

        if ($check_update){

            $request->session()
                ->flash('alert-media-update-success','Succesfully Updated !');
            return redirect('/omaxeadmin/media/list/media-videos');
        }

    }


    public function media_video_create(){
        return view('admin.media.create_video');
    }



    public function media_video_create_save(Request $request){

       $media_title = $request->media_title;

       $media_youtube_link = $request->media_youtube_link;

       $media_cat_video_id = 8;

       $create_media_video = new Medias;

       $create_media_video->media_youtube_link = $media_youtube_link;

       $create_media_video->media_title = $media_title;

       $create_media_video->media_category_id = $media_cat_video_id;

       $check_media_video_save = $create_media_video->save();

       if ($check_media_video_save){

           $request->session()
               ->flash('alert-media-success','Succesfully Created !');
           return redirect('/omaxeadmin/media/list/media-videos');


       }

    }


    public function media_ad_campaign_create(){
        return view('admin.media.create_ad_campaign');
    }

    public function media_e_coverages_create(){
        return view('admin.media.media_e_coverages_create');
    }

    public function media_kit_create(){
        return view('admin.media.media_kit_create');
    }

    public function media_events_create(){
        return view('admin.media.media_events_create');
    }


    public function media_print_coverages_create(){
        return view('admin.media.media_print_coverages_create');
    }

    public function media_press_releases_create(){
        return view('admin.media.media_press_releases_create');
    }

    public function media_corporate_newsletter_create(){
        return view('admin.media.media_corporate_newsletter_create');
    }

    public function media_regional_newsletter_create(){
        return view('admin.media.media_regional_newsletter_create');
    }



    public function media_regional_newsletter_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);


        $media_title = $request->media_title;

        $media_cat_ad_camapign_id = 10;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;






        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

            $create_media_ad_campaign->media_pdf = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }


        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-regional-newsletter-create','Media regional newsletter has been created');
            return redirect('/omaxeadmin/media/list/regional-newsletter');

        }


    }

    public function media_corporate_newsletter_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;



        $media_cat_ad_camapign_id = 9;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;




        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

            $create_media_ad_campaign->media_pdf = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }


        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-corporate-newsletter-create','Media corporate newsletter has been created');
            return redirect('/omaxeadmin/media/list/corporate-newsletter');

        }



    }


    public function media_press_releases_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;



        $media_cat_ad_camapign_id = 7;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;




        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

            $create_media_ad_campaign->media_pdf = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }


        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-press-releases-create','Media print releases has been created');
            return redirect('/omaxeadmin/media/list/press-releases');

        }


    }


    public function media_print_coverages_create_save(Request  $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;



        $media_cat_ad_camapign_id = 6;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;




        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

            $create_media_ad_campaign->media_pdf = $media_image;

        }


        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-print-coverages-create','Media print coverages has been created');
            return redirect('/omaxeadmin/media/list/print-coverages');

        }


    }




    public function media_kit_create_save(Request  $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;



        $media_cat_ad_camapign_id = 4;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;



        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }

        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-media-kit-create','Media kit has been created');
            return redirect('/omaxeadmin/media/list/media-kit');

        }


    }

    public function media_events_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;



        $media_cat_ad_camapign_id = 3;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;



        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }

        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-media-events-create','Media events has been created');
            return redirect('/omaxeadmin/media/list/media-events');

        }

    }


    public function media_e_coverages_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_e_coverages = $request->media_e_coverages;

        $media_cat_ad_camapign_id = 2;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;

        $create_media_ad_campaign->e_coverage_links = $media_e_coverages;

        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

        }

        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                ->flash('alert-media-e-coverage-create','Media e-coverage has been created');
            return redirect('/omaxeadmin/media/list/e-coverages');

        }


    }


    public function media_ad_campaign_create_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_cat_ad_camapign_id = 1;

        $create_media_ad_campaign = new Medias;

        $create_media_ad_campaign->media_title = $media_title;

        $create_media_ad_campaign->media_category_id = $media_cat_ad_camapign_id;

        $create_media_ad_campaign->report_year = $media_report_year;

        $create_media_ad_campaign->report_qtr = $media_report_qtr;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $create_media_ad_campaign->media_image = $media_image;

        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $create_media_ad_campaign->media_pdf = $media_pdf;

        }

        $check_media_ad_campaign_save = $create_media_ad_campaign->save();

        if ($check_media_ad_campaign_save){

            $request->session()
                        ->flash('alert-media-ad-campaign-create','Ad campaign has been created');
            return redirect('/omaxeadmin/media/list/ad-campaign');

        }

    }

    public function media_ad_campaign_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_ad_campaign_data = Medias::findOrFail($update_id);


        return view('admin.media.media_ad_campaign_edit',compact('get_media_ad_campaign_data'));

    }

    public function media_ecoverages_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_e_coverages_data = Medias::findOrFail($update_id);


        return view('admin.media.media_e_coverages_edit',compact('get_media_e_coverages_data'));

    }

    public function media_events_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_e_coverages_data = Medias::findOrFail($update_id);


        return view('admin.media.media_events_edit',compact('get_media_e_coverages_data'));

    }


    public function media_kit_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_e_coverages_data = Medias::findOrFail($update_id);


        return view('admin.media.media_kit_edit',compact('get_media_e_coverages_data'));

    }

    public function media_print_coverages_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_e_coverages_data = Medias::findOrFail($update_id);


        return view('admin.media.media_print_coverages_edit',compact('get_media_e_coverages_data'));

    }

    public function media_press_releases_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_ad_campaign_data = Medias::findOrFail($update_id);


        return view('admin.media.media_press_releases_edit',compact('get_media_ad_campaign_data'));

    }

    public function media_corporate_newsletter_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_ad_campaign_data = Medias::findOrFail($update_id);


        return view('admin.media.media_corporate_newsletter_edit',compact('get_media_ad_campaign_data'));

    }

    public function media_regional_newsletter_edit($page_id,Request $request){

        $update_id = $page_id;

        $get_media_ad_campaign_data = Medias::findOrFail($update_id);


        return view('admin.media.media_regional_newsletter_edit',compact('get_media_ad_campaign_data'));

    }



    public function media_regional_newsletter_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;


        $media_cat_ad_camapign_id = 10;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }

        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/regional-newsletter');

        }


    }



    public function media_corporate_newsletter_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_cat_ad_camapign_id = 9;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }

        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/corporate-newsletter');

        }


    }


    public function media_press_releases_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_cat_ad_camapign_id = 7;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }

        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/press-releases');

        }


    }



    public function media_ad_campaign_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_cat_ad_camapign_id = 1;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
                                            ->where('media_category_id',$media_cat_ad_camapign_id)
                                            ->first();

        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }

        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/ad-campaign');

        }

    }


    public function media_events_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_cat_ad_camapign_id = 3;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;


        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }

        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/media-events');

        }

    }





    public function media_e_coverages_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_e_coverages = $request->media_e_coverages;




        $media_cat_ad_camapign_id = 2;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();



        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;

        $update_ad_campaign_media->e_coverage_links = $media_e_coverages;



        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }



        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-e-coverages-update','E-coverages has been updated');
            return redirect('/omaxeadmin/media/list/e-coverages');

        }

    }

    public function media_kit_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
            'media_pdf' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
            'media_pdf.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;




        $media_cat_ad_camapign_id = 4;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;



        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }

        if ($file_media_pdf = $request->file('media_pdf')){

            $media_pdf = time(). $file_media_pdf->getClientOriginalName();

            $file_media_pdf->move(public_path().'/media/pdf/',$media_pdf);

            $update_ad_campaign_media->media_pdf = $media_pdf;
        }


        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/media-kit');

        }

    }

    public function media_print_coverages_edit_save(Request $request){

        $this->validate($request,[
            'media_image' => 'max:2048',
        ],[
            'media_image.uploaded' => 'The maximum file size should not exceed 2mb.',
        ]);

        $media_title = $request->media_title;

        $media_report_year = $request->media_report_year;

        $media_report_qtr = $request->media_report_qtr;

        $media_e_coverages = $request->media_e_coverages;


        $media_cat_ad_camapign_id = 6;

        $update_ad_campaign_media = Medias::where('id',$request->media_id)
            ->where('media_category_id',$media_cat_ad_camapign_id)
            ->first();

        $update_ad_campaign_media->media_title = $media_title;

        $update_ad_campaign_media->report_year = $media_report_year;

        $update_ad_campaign_media->report_qtr = $media_report_qtr;

        $update_ad_campaign_media->e_coverage_links = $media_e_coverages;



        if ($file_media_image = $request->file('media_image')){

            $media_image = time(). $file_media_image->getClientOriginalName();

            $file_media_image->move(public_path().'/media/images/',$media_image);

            $update_ad_campaign_media->media_image = $media_image;
        }



        $check_save = $update_ad_campaign_media->update();

        if ($check_save){

            $request->session()
                ->flash('alert-media-ad-campaign-update','Ad campaign has been updated');
            return redirect('/omaxeadmin/media/list/print-coverages');

        }

    }


    public function media_ad_campaign_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-ad-campaign-delete','Ad Campaign Succesfully Deleted ! We will get back to you later!');
            return redirect('/omaxeadmin/media/list/ad-campaign');

        }

    }

    public function media_ecoverages_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-e-coverages-delete','e coverages Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/e-coverages');

        }

    }


    public function media_kit_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-media-kit-delete','e coverages Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/media-kit');

        }

    }

    public function media_events_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-events-delete','Media Events Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/media-events');

        }

    }

    public function media_print_coverages_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-print-coverages-delete','Media Print Coverages Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/print-coverages');

        }

    }

    public function media_press_releases_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-press-releases-delete','Media Press Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/press-releases');

        }

    }

    public  function media_video_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-video-delete','Media Video Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/media-videos');

        }

    }

    public  function corporate_newsletter_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-corporate-newsletter-delete','Corporate Newsletter Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/corporate-newsletter');

        }

    }


    public function media_regional_newsletter_delete($id, Request $request){

        $project_id = $id;

        $find_media = Medias::findOrFail($project_id);

        $check_media_delete = $find_media->delete();

        if ($check_media_delete){

            $request->session()
                ->flash('alert-regional-newsletter-delete','Regional Newsletter Succesfully Deleted !');
            return redirect('/omaxeadmin/media/list/regional-newsletter');

        }

    }



}
<?php

namespace Omaxe\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Omaxe\Http\Controllers\Controller;
use DB;
use DataTables;
use Omaxe\MetaTag;
use SEOstats\Services as SEOstats;
use Illuminate\Validation\Rule;

class AdminSeoController extends Controller
{
    //

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function seo_dash_data(){

        $data =array();

        $url = 'https://www.omaxe.com/';

        $seostats = new \SEOstats\SEOstats;

        if ($seostats->setUrl($url)) {

            $globalrank_alexa = SEOstats\Alexa::getGlobalRank();

            $indian_rank_alexa = SEOstats\Alexa::getCountryRank();

            $backlinks_alexa = SEOstats\Alexa::getBacklinkCount();

            $getTrafficGraph = SEOstats\Alexa::getTrafficGraph(1);


            $data['globalrank_alexa'] =$globalrank_alexa;

            $data['indian_rank_alexa'] =$indian_rank_alexa;

            $data['backlinks_alexa'] =$backlinks_alexa;

            $data['getTrafficGraph'] =$getTrafficGraph;

        }

        return view('admin.seo.seo-dash',compact('data'));
    }



    public function seo(){

        $url = 'https://www.omaxe.com/';

        $data =array();

        $url = 'https://www.omaxe.com/';

        $seostats = new \SEOstats\SEOstats;

        if ($seostats->setUrl($url)) {

            $globalrank_alexa = SEOstats\Alexa::getGlobalRank();

            $indian_rank_alexa = SEOstats\Alexa::getCountryRank();

            $backlinks_alexa = SEOstats\Alexa::getBacklinkCount();

            $getTrafficGraph = SEOstats\Alexa::getTrafficGraph(1);

            $data['globalrank_alexa'] =$globalrank_alexa;

            $data['indian_rank_alexa'] =$indian_rank_alexa;

            $data['backlinks_alexa'] =$backlinks_alexa;

            $data['getTrafficGraph'] =$getTrafficGraph;

        }

        $meta = DB::table('meta_tags')
            ->orderBy('id','asc')
            ->get();

        return view('admin.seo.seo',compact('meta','data'));

    }

    public function seo_data(){
        return DataTables::of(MetaTag::query())->make(true);
    }
    
    public function seo_create(){
        return view('admin.seo.seo-create');
    }

    public function seo_edit($id){

        $Meta_id = $id;

        $fetch_meta = MetaTag::findOrFail($Meta_id);

        if ($fetch_meta){

            $meta_details = $fetch_meta;
        }
        else{
            $meta_details = "";
        }

        return view('admin.seo.seo-edit',compact('meta_details'));
    }

    public function update_meta_data(Request $request){

        $id = $request->meta_id;
        $url = $request->url;
        $meta_title =$request->meta_title;
        $meta_description =$request->meta_description;
        $meta_keywords =$request->meta_keywords;
        $meta_status =$request->meta_status;

        $meta = MetaTag::findOrFail($id);

        $meta->url = $url;
        $meta->meta_title = $meta_title;
        $meta->meta_description = $meta_description;
        $meta->meta_keywords = $meta_keywords;
        $meta->meta_status = $meta_status;
        $check = $meta->update();

        if ($check){
            $request->session()
                ->flash('alert-update-success','Succesfully Submitted ! We will get back to you later!');
            return redirect('/omaxeadmin/seo');
        }else{
            $request->session()
                ->flash('alert-update-error','Problem while submitting');
            return redirect('/omaxeadmin/seo/edit/'.$id);
        }
    }

    public function store_meta_data(Request $request){

        $request->validate([
            'url' => 'unique:meta_tags,url',
            'meta_status' => 'required'
        ]);

        $meta_data = new MetaTag;
        $meta_data->url = $request->url;
        $meta_data->meta_title = $request->meta_title;
        $meta_data->meta_description = $request->meta_description;
        $meta_data->meta_keywords = $request->meta_keywords;
        $meta_data->meta_status = $request->meta_status;
        $check = $meta_data->save();

        if ($check){
            $request->session()
                ->flash('alert-success','Succesfully Submitted ! We will get back to you later!');
            return redirect('/omaxeadmin/seo');
        }else{
            $request->session()
                ->flash('alert-error','Problem while submitting');
            return redirect('/omaxeadmin/seo/create');
        }

    }

    public function delete_meta_data(Request $request){
        $id= $request->deletem;

        $meta_data =MetaTag::findOrFail($id);

        $check = $meta_data->delete();

        if($check){
            $request->session()
                ->flash('alert-delete','Successfully delete');
            return redirect('/omaxeadmin/seo');
        }
        else{
            $request->session()
                ->flash('alert-delete-fail','Problem while deleting');
            return redirect('/omaxeadmin/seo');
        }
    }
}

<?php

namespace Omaxe\Providers;
use Omaxe\Http\Controllers\MainController;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Routing\Route;
use Omaxe\MetaTag;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        Schema::defaultStringLength(191);
        // $meta = $this->meta();
        // view()->composer('layouts.layout', function ($view) use ($meta) {
        //     $view->with('data', $meta);
        // });
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    public function meta(){
        $currenturi= url()->current();
        $digits=   substr($currenturi,21,100);
        $data = $this->meta_tag_data($digits);
        return $data;
    }

    public static function meta_tag_data($current_url){
        if ($current_url == ""){
            $data = "/";
        }
        else{
            $data = $current_url;
        }
        $meta_data = MetaTag::where('url',$data)
                            ->where('meta_status',1)
            ->get();
        $meta_clone = $meta_data;
        return $meta_clone;
    }

}

<?php

namespace App\Providers;

use App\Category;
use App\Post;
use App\Setting;
use App\User;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $settings = Setting::all();
        foreach($settings as $key =>$setting){
            if($key===0) $system_name = $setting->value;
            elseif($key===1) $favicon = $setting->value;
            elseif($key===2) $front_logo = $setting->value;
            elseif($key===3) $admin_logo = $setting->value;
        }
        $categories = Category::where('status',1)->get();
        $authors = User::where('id','!=',1)->get();
        $most_viewed = Post::with(['creator','comments'])->where('status',1)->orderBy('view_count','DESC')->limit(5)->get();
        $most_commented = Post::withCount('comments')->where('status',1)->orderBy('comments_count','DESC')->limit(5)->get();
        $hot_news = Post::with('creator')->withCount('comments')->where('hot_news',1)->where('status',1)->orderBy('id','DESC')->first();
        $shareData = array(
           'system_name'=>$system_name,
           'favicon'=>$favicon,
           'front_logo'=>$front_logo,
           'admin_logo'=>$admin_logo,
           'categories'=>$categories,
           'authors'=>$authors,
           'most_viewed'=>$most_viewed,
           'most_commented'=>$most_commented
        );
        view()->share('shareData', $shareData );
    }
}

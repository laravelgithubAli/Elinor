<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Http\Controllers\Controller;
use App\Mail\VerfryEmail;
use App\Models\category;
use App\Models\Footer;
use App\Models\footerdescription;
use App\Models\Footertext;
use App\Models\Product;
use App\Models\Slider;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;


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
        view()->composer('client.*', function ($view){
           $view->with([
               'categories' => category::query()->where('category_id', '1')->get(),
               'footerCategories' => category::query()->where('category_id', '1')->take(4)->get(),
               'sliders' => Slider::all(),
               'products' => Product::all(),
               'productRandoms' => Product::all(),
               'Categories' => category::all(),
//            'oneMan' => category::query()->where('category_id','3')->first(),
               'threeMan' => category::query()->where('category_id', '3')->take(3)->orderBy('id', 'desc')->get(),
               'threeWoman' => category::query()->where('category_id', '2')->take(3)->orderBy('id', 'desc')->get(),
               'Children' => category::query()->where('category_id', '4')->take(3)->orderBy('id', 'desc')->get(),
               'healthBeauty' => category::query()->where('category_id', '5')->take(4)->orderBy('id', 'desc')->get(),
               'CategoryBeauty' => category::query()->where('category_id', '5')->take(4)->get(),
               'latestProducts' => Product::query()->take(12)->orderBy('id', 'desc')->get(),
               'footer' => Footer::query()->first(),
               'footertext1' => Footertext::query()->where('id',1)->firstOrFail(),
               'footertext2' => Footertext::query()->where('id',2)->firstOrFail(),
               'footerdescription' => footerdescription::query()->where('id','1')->firstOrFail()
           ]);
        });
    }
}

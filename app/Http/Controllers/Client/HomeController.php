<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home', [
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
            'latestProducts' => Product::query()->take(12)->orderBy('id', 'desc')->get()
        ]);
    }

    public function search(Request $request)
    {
        if ($request->get('serachQuset') == null){
            return null;
        }

        $products = Product::query()->where('name', 'like', '%' . $request->get('serachQuset') . '%')->get();

        return json_encode($products);

    }

}

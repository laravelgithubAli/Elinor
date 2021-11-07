<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class LikeController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        return view('client.profile.like', [
            'products' => auth()->user()->likes,
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),


        ]);
    }

    public function store(Request $request, Product $product)
    {
        auth()->user()->like($product);

        return response(['likes_count' => auth()->user()->likes()->count()], 200);
    }

    public function destroy(Product $product)
    {
        auth()->user()->likes()->detach($product);
        return back();
    }
}

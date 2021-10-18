<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function show(Product $product)
    {
        return view('client.products.show',[
            'product' => $product,
            'categories' => category::query()->where('category_id','1')->get()
        ]);
    }

}

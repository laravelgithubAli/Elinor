<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductPropertyController extends Controller
{
    public function index(Product $product)
    {
        return view('admin.productproperties.index',[
            'product' => $product
        ]);
    }


    public function create(Product $product)
    {
        return view('admin.productproperties.create',[
            'product' => $product
        ]);
    }



    public function store(Request $request, Product $product)
    {

        $properties = collect($request->get('properties'))->filter(function ($item){
            if (!empty($item['value'])){
                return $item;
            }
        });

        $product->properties()->sync($properties);

        return redirect()->back();
    }
}

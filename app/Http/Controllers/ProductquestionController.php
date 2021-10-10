<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Post;
use App\Models\Product;
use App\Models\Productquestion;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductquestionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Product $product)
    {
        return view('admin.productquestions.index',[
            'product' => $product,
            'productquestions' => Productquestion::all(),
            'posts' => Post::all(),
            'answers' => Answer::all()
        ])->with(['activity7' => 'side-menu--active','submenu7' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.productquestions.create',[
            'products'=>Product::all(),
            'posts' => Post::all()
        ])->with(['activity7' => 'side-menu--active','submenu7' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Product $product)
    {
        $path = $request->file('image')->storeAs(
            'public/productquestion',$request->file('image')->getClientOriginalName()
        );

        Productquestion::query()->create([
           'title' => $request->get('title'),
            'product_id' => $request->get('product_id'),
            'post_id' => $request->get('post_id'),
            'image' => $path,
            'status' => 0,
            'user_id' => auth()->id()
        ]);

        return redirect(route('productquestions.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Productquestion  $productquestion
     * @return \Illuminate\Http\Response
     */
    public function show(Productquestion $productquestion)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Productquestion  $productquestion
     * @return \Illuminate\Http\Response
     */
    public function edit(Productquestion $productquestion)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Productquestion  $productquestion
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Productquestion $productquestion)
    {

        $productquestion->update([
            'status' => $request->get('status'),
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Productquestion  $productquestion
     * @return \Illuminate\Http\Response
     */
    public function destroy(Productquestion $productquestion)
    {
        Storage::delete($productquestion->image);

        $productquestion->delete();
        return redirect()->back();

    }
}

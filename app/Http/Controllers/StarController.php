<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Product;
use App\Models\Productquestion;
use App\Models\Star;
use Illuminate\Http\Request;

class StarController extends Controller
{
    /**
     * @param Request $request
     * @param Product $product
     */
    public function productStore(Request $request, Product $product)
    {

        Star::query()->create([
           'value' => $request->get('value'),
           'user_id' => auth()->id(),
           'product_id' =>$product->id
        ]);

        return redirect()->back();

    }

    /**
     * @param Request $request
     * @param Post $post
     */
    public function postStore(Request $request, Post $post)
    {
        Star::query()->create([
           'value' => $request->get('value'),
           'user_id' => auth()->id(),
           'post_id' => $post->id
        ]);

        return redirect()->back();

    }

    /**
     * @param Request $request
     * @param Productquestion $productquestion
     */
    public function productquestionStore(Request $request, Productquestion $productquestion)
    {
        Star::query()->create([
           'value' => $request->get('value'),
           'user_id' => auth()->id(),
            'productquestion_id' => $productquestion->id
        ]);

        return redirect()->back();

    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Star  $star
     * @return \Illuminate\Http\Response
     */
    public function destroy(Star $star)
    {
        //
    }
}

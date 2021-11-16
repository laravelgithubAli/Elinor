<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Footer;
use App\Models\Product;
use App\Models\Productquestion;
use Illuminate\Http\Request;

class ProductController extends Controller
{

    public function index(Product $product)
    {
        return view('client.products.show',[
            'product' => $product,
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),
            'footer' => Footer::query()->first(),
            'ww' => Productquestion::query()->where('product_id',$product->id)->orderBy('id','desc')->get(),
            'footer' => Footer::query()->first()
        ]);
    }

    public function catPro(category $category)
    {
        return view('client.catPro.show',[
            'category' => $category,
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),
            'footer' => Footer::query()->first(),
        ]);
    }


    /**
     * Write code on Method
     *
     * @return response()
     */
    public function cart()
    {
        return view('client.cart.index',[
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),
            'footer' => Footer::query()->first()
        ]);
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function addToCart($id)
    {
        $product = Product::findOrFail($id);

        $cart = session()->get('cart', []);

        if(isset($cart[$id])) {
            $cart[$id]['quantity']++;
        } else {
            $cart[$id] = [
                "name" => $product->name,
                "quantity" => 1,
                "cost" => $product->cost,
                "image" => $product->image
            ];
        }
/*        session(['cart'=>array(
           'product_title'=>$product->title
        )]);
        $get_session = $request()->session()->get('cart');*/

        session()->put('cart', $cart);
        session()->flash('success', 'با موفقیت به سبد خرید اضافه شد!');
        return redirect()->back();
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function update(Request $request)
    {
        if($request->id && $request->quantity){
            $cart = session()->get('cart');
            $cart[$request->id]["quantity"] = $request->quantity;
            session()->put('cart', $cart);
            session()->flash('info', 'سبد خرید با موفقیت به روزرسانی شد!');
        }
    }

    /**
     * Write code on Method
     *
     * @return response()
     */
    public function remove(Request $request)
    {
        session()->remove('cart');

//        if($request->id) {
//            $cart = session()->get('cart');
//            if(isset($cart[$request->id])) {
//                unset($cart[$request->id]);
//                session()->put('cart', $cart);
//            }
//        }
        session()->flash('error', 'با موفقیت حذف شد!');
        return redirect()->back();
    }
}

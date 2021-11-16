<?php

namespace App\Http\Controllers;

use App\Mail\ShoporderMail;
use App\Models\Shoporder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use PhpParser\Node\Expr\Array_;

class ShoporderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.cart.information',[
            'user' => auth()->user()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $CartSession = session('cart');
        $CartJson = json_encode($CartSession);
        $cartArray = serialize($CartJson);
        $count = count($CartSession);
        Shoporder::query()->insert([
            'user_id' => auth()->user()->id,
           'product' => $cartArray,
            'count' => $count,
            'status' => 0,
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'number' => $request->get('number'),
            'address' => $request->get('address')
        ]);

        return redirect(route('information.final'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Shoporder  $shoporder
     * @return \Illuminate\Http\Response
     */
    public function show(Shoporder $shoporder)
    {


        return view('client.cart.final');

/*        $CartSession = session('cart');
        $ww = Shoporder::query()->where('id','16')->first();
        $ppp = json_decode(unserialize($ww->product));
        $count=count($CartSession);
        for ($i=1;$i<=$count;$i++){
            echo $ppp->$i->name;
            echo $ww->address;
        }*/

    }

    public function adminShow()
    {
        return view('admin.shopOrder.show',[
            'shopOrders' => Shoporder::all()
        ]);
    }


    public function adminShowList(Shoporder $shoporder)
    {
        return view('admin.shopOrder.list',[
            'shopOrder' => $shoporder
        ]);
    }


    public function sendMail(Request $request)
    {
        $Email = $request->get('email');
        $name = $request->get('name');
        $number = $request->get('number');
        $address = $request->get('address');
        $Shop = $request->get('text');

        Mail::to($Email)->send(new ShoporderMail($Shop));
       session()->flash('success',"ایمیل با موفقیت ارسال شد!");

       return redirect()->back();
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Shoporder  $shoporder
     * @return \Illuminate\Http\Response
     */
    public function edit(Shoporder $shoporder)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Shoporder  $shoporder
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Shoporder $shoporder)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Shoporder  $shoporder
     * @return \Illuminate\Http\Response
     */
    public function destroy(Shoporder $shoporder)
    {
        //
    }
}

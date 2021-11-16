<?php

namespace App\Http\Controllers\Client;

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
            'latestProducts' => Product::query()->take(12)->orderBy('id', 'desc')->get(),
            'footer' => Footer::query()->first(),
            'footertext1' => Footertext::query()->where('id',1)->firstOrFail(),
            'footertext2' => Footertext::query()->where('id',2)->firstOrFail(),
            'footerdescription' => footerdescription::query()->where('id','1')->firstOrFail()
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

    public function show()
    {
        return view('client.see-all.show',[
            'categories' => category::query()->where('category_id', '1')->get(),
            'footerCategories' => category::query()->where('category_id', '1')->take(4)->get(),
            'footer' => Footer::query()->first(),
            'SeeAllSpecialOffer' => Product::query()->where('specialOffer','!=','0')->get()
        ]);
    }

    public function most()
    {
        return view('client.see-all.most',[
            'categories' => category::query()->where('category_id', '1')->get(),
            'footerCategories' => category::query()->where('category_id', '1')->take(4)->get(),
            'footer' => Footer::query()->first(),
            'productRandoms' => Product::all()->random()->take(12)->orderBy('id','desc')->get(),
        ]);
    }

    public function newest()
    {
        return view('client.see-all.newest',[
            'categories' => category::query()->where('category_id', '1')->get(),
            'footerCategories' => category::query()->where('category_id', '1')->take(4)->get(),
            'footer' => Footer::query()->first(),
            'latestProducts' => Product::query()->take(12)->orderBy('id', 'desc')->get(),
        ]);
    }


    public function enterMail()
    {
        return view('login.forgot');
    }


    public function forgot(Request $request)
    {
        $otp = random_int(11111, 99999);
        $userexsits = User::query()->where('email', $request->get('email'));
        if ($userexsits->exists()) {
            $user = $userexsits->first();
            Mail::to($user->email)->send(new VerfryEmail($otp));
            session()->flash('success', "ایمیل بازیابی با موفقیت ارسال شد");
            $user->update([
                'password' => bcrypt($otp)
            ]);
        } else {
            session()->flash('error', "شما هنوز ثبت نام نکرده اید");
        }
        return redirect()->back();
    }

}

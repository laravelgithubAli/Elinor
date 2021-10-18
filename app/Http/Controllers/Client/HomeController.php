<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\category;
use App\Models\Slider;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('client.home',[
            'categories' => category::query()->where('category_id','1')->get(),
            'sliders' => Slider::all()
        ]);
    }
}

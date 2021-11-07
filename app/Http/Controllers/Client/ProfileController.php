<?php

namespace App\Http\Controllers\Client;

use App\Http\Controllers\Controller;
use App\Models\Answer;
use App\Models\category;
use App\Models\Post;
use App\Models\Product;
use App\Models\Productquestion;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('client.profile.index',[
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('client.profile.edit',[
            'user' => $user,
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $path = $user->image;

        if ($request->hasFile('image')){
            Storage::delete($user->image);
            $path = $request->file('image')->storeAs(
                'public/users',$request->file('image')->getClientOriginalName());
        }

        $user->update([
            'name' => $request->get('name',$user->name),
            'lastname' => $request->get('lastname',$user->lastname),
            'email' => $request->get('email',$user->email),
            'number' => $request->get('number',$user->number),
            'password' => bcrypt($request->get('password')),
            'image' => $path,
            'job' => $request->get('job',null),
            'nationalCode' => $request->get('nationalCode',null),
            'address' => $request->get('address',null),
            'gender' => $request->get('gender',null),
            'cardNumber' => $request->get('cardNumber',null),
            'birthday' => $request->get('birthday',null),
            'Newsletters' => $request->get('Newsletters',null),
        ]);

        return redirect(route('profile'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function comment(Product $product)
    {
        return view('client.profile.comment',[
            'categories' => category::query()->where('category_id','1')->get(),
            'footerCategories' => category::query()->where('category_id','1')->take(4)->get(),
            'product' => $product,
            'productquestions' => Productquestion::all(),
            'posts' => Post::all(),
//            'answers' => Answer::all()
        ]);
    }
}

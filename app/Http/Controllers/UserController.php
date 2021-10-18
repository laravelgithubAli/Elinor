<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('login.create');
    }


    public function login(Request $request)
    {
       $User = User::query()->where('number',$request->get('number'))->firstOrFail();

       if (!Hash::check($request->get('password'),$User->password)){
           return back()->withErrors(['password' => 'youre password is wrong']);
       }

       auth()->login($User);

       return redirect(route('admin.home'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('authenticate.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(UserRegisterRequest $request)
    {

        $User = User::query()->create([
            'name' => $request->get('name'),
            'lastname' => $request->get('lastname'),
            'email' => $request->get('email'),
            'number' => $request->get('number'),
            'password' => bcrypt($request->get('password')),
            'role_id' => Role::findByTitle('user')->id,
            'image' => null,
            'job' => null
        ]);

        auth()->login($User);

        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        return view('admin.users.show',[
            'users' => User::all()->where('id','!=' , '1')
        ])->with(['activity8' => 'side-menu--active','submenu8' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('admin.users.edit',[
            'user' => $user,
            'users' => User::all(),
            'roles' => Role::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\User $user
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
//            'role_id' => Role::findByTitle('user')->id,
            'role_id' =>$request->get('role_id'),
            'image' => $path,
            'job' => $request->get('job')
        ]);

        return redirect(route('admin.home'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\User $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {

    }

    public function logout()
    {
        auth()->logout();

        return redirect(route('home'));
    }
}

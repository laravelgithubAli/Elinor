<?php

namespace App\Http\Controllers;

use App\Models\Propertygroup;
use Illuminate\Http\Request;

class PropertygroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.propertygroups.index',[
           'propertygroups' => Propertygroup::all()
        ])->with(['activity4' => 'side-menu--active', 'submenu4' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.propertygroups.create')
            ->with(['activity4' => 'side-menu--active', 'submenu4' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Propertygroup::query()->create([
           'title' => $request->get('title')
        ]);

        return redirect(route('propertygroups.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Propertygroup  $propertygroup
     * @return \Illuminate\Http\Response
     */
    public function show(Propertygroup $propertygroup)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Propertygroup  $propertygroup
     * @return \Illuminate\Http\Response
     */
    public function edit(Propertygroup $propertygroup)
    {
        return view('admin.propertygroups.edit',[
           'propertygroup' => $propertygroup
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Propertygroup  $propertygroup
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Propertygroup $propertygroup)
    {
        $propertygroup->update([
           'title' => $request->get('title',$propertygroup->title)
        ]);

        return redirect(route('propertygroups.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Propertygroup  $propertygroup
     * @return \Illuminate\Http\Response
     */
    public function destroy(Propertygroup $propertygroup)
    {
        $propertygroup->delete();

        return back();
    }
}

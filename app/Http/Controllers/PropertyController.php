<?php

namespace App\Http\Controllers;

use App\Http\Requests\PropertyRequest;
use App\Models\Property;
use App\Models\Propertygroup;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.properties.index',[
            'properties' => Property::all()
        ])->with(['activity5' => 'side-menu--active', 'submenu5' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.properties.create',[
           'propertygroups' => Propertygroup::all()
        ])->with(['activity5' => 'side-menu--active', 'submenu5' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PropertyRequest $request)
    {
        Property::query()->create([
           'propertygroup_id' => $request->get('propertygroup_id'),
           'title' => $request->get('title')
        ]);

        return redirect(route('properties.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function show(Property $property)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function edit(Property $property)
    {
        return view('admin.properties.edit',[
           'property' => $property,
           'propertygroups' => Propertygroup::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function update(PropertyRequest $request, Property $property)
    {
        $property->update([
            'title' => $request->get('title',$property->title),
            'propertygroup_id' => $request->get('propertygroup_id')
        ]);

        return redirect(route('properties.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Property  $property
     * @return \Illuminate\Http\Response
     */
    public function destroy(Property $property)
    {
        $property->delete();
        return redirect(route('properties.index'));
    }
}

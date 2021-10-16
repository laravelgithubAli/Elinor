<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostcategoryRequest;
use App\Models\category;
use App\Models\Postcategory;
use Illuminate\Http\Request;

class PostcategoryController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.postcategories.index',[
            'postcategories' => Postcategory::all()
        ])->with(['activity1' => 'side-menu--active','submenu1' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.postcategories.create')
            ->with(['activity1' => 'side-menu--active','submenu1' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostcategoryRequest $request)
    {
        Postcategory::query()->create([
           'title' => $request->get('title')
        ]);

        return redirect(route('postcategories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Postcategory $postcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Postcategory $postcategory)
    {
        return view('admin.postcategories.edit',[
            'postcategory' => $postcategory
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function update(PostcategoryRequest $request, Postcategory $postcategory)
    {
        $postcategory->update([
            'title' => $request->get('title',$postcategory->title)
        ]);

        return redirect(route('postcategories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Postcategory  $postcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Postcategory $postcategory)
    {
        $postcategory->delete();

        return redirect()->back();
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\footerdescription;
use Illuminate\Http\Request;

class FooterdescriptionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.footerdescription.create',[
            'footer'  => footerdescription::query()->where('id','1')->firstOrFail()
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
     * @param  \App\Models\footerdescription  $footerdescription
     * @return \Illuminate\Http\Response
     */
    public function show(footerdescription $footerdescription)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\footerdescription  $footerdescription
     * @return \Illuminate\Http\Response
     */
    public function edit(footerdescription $footerdescription)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\footerdescription  $footerdescription
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, footerdescription $footerdescription)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\footerdescription  $footerdescription
     * @return \Illuminate\Http\Response
     */
    public function destroy(footerdescription $footerdescription)
    {
        //
    }
}

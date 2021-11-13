<?php

namespace App\Http\Controllers;

use App\Models\Footertext;
use Illuminate\Http\Request;

class FootertextController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.footertexts.create',[
           'footer1' => Footertext::query()->where('id','1')->firstOrFail(),
           'footer2' => Footertext::query()->where('id','2')->firstOrFail()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        $footer1 = Footertext::query()->where('id','1')->firstOrFail();

        $footer1->update([
           'title' => $request->get('title')
        ]);

        return redirect()->back();
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
     * @param  \App\Models\Footertext  $footertext
     * @return \Illuminate\Http\Response
     */
    public function show(Footertext $footertext)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Footertext  $footertext
     * @return \Illuminate\Http\Response
     */
    public function edit(Footertext $footertext)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Footertext  $footertext
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $footer2 = Footertext::query()->where('id','2')->firstOrFail();

        $footer2->update([
            'title' => $request->get('title')
        ]);

        return redirect()->back();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Footertext  $footertext
     * @return \Illuminate\Http\Response
     */
    public function destroy(Footertext $footertext)
    {
        //
    }
}

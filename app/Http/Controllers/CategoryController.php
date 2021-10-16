<?php

namespace App\Http\Controllers;

use App\Http\Requests\CategoryRequest;
use App\Models\category;
use App\Models\Propertygroup;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.categories.index', [
            'categories' => category::all()
        ])->with(['activity' => 'side-menu--active', 'submenu' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.categories.create', [
            'categories' => category::all(),
            'propertygroups' => Propertygroup::all()
        ])->with(['activity' => 'side-menu--active', 'submenu' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(CategoryRequest $request)
    {
        $path = "public/categories/placeholder.jpg";
        if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAs(
                'public/categories', $request->file('image')->getClientOriginalName());
        }

        $category = category::query()->create([
            'title' => $request->get('title'),
            'category_id' => $request->get('category_id'),
            'image' => $path
        ]);

        $category->propertygroups()->attach($request->get('propertygroups'));

        return redirect(route('categories.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function show(category $category)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function edit(category $category)
    {
        return view('admin.categories.edit', [
            'category' => $category,
            'categories' => category::all(),
            'propertygroups' => Propertygroup::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function update(CategoryRequest $request, category $category)
    {

        $path = $category->image;

        if ($request->hasFile('image')) {
            $path = $request->file('image')->storeAs(
                'public/products', $request->file('image')->getClientOriginalName()
            );
        }

        $category->update([
            'title' => $request->get('title', $category->title),
            'category_id' => $request->get('category_id', $category),
            'image' => $path
        ]);

        $category->propertygroups()->sync($request->get('propertygroups'));

        return redirect(route('categories.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\category $category
     * @return \Illuminate\Http\Response
     */
    public function destroy(category $category)
    {

        Storage::delete($category->image);

        $category->propertygroups()->detach();

        $category->delete();

        return redirect(route('categories.index'));

    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Http\Requests\ProductUpdateRequest;
use App\Models\category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.products.index', [
            'products' => Product::all()
        ])->with(['activity2' => 'side-menu--active','submenu2' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.products.create', [
            'categories' => category::all()
        ])->with(['activity2' => 'side-menu--active','submenu2' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $path = $request->file('image')->storeAs(
            'public/products', $request->file('image')->getClientOriginalName());

        Product::query()->create([
            'category_id' => $request->get('category_id'),
            'name' => $request->get('name'),
            'cost' => $request->get('cost'),
            'image' => $path,
            'description' => $request->get('description'),
            'body' => $request->get('body'),
            'inventory' => $request->get('inventory'),
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
        return view('admin.products.edit', [
            'product' => $product,
            'categories' => category::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        $path = $product->image;

        if ($request->hasFile('image')) {
            Storage::delete($product->image);
            $path = $request->file('image')->storeAs(
                'public/products', $request->file('image')->getClientOriginalName()
            );
        }

        $product->update([
            'category_id' => $request->get('category_id', $product->category_id),
            'name' => $request->get('name', $product->name),
            'cost' => $request->get('cost', $product->cost),
            'image' => $path,
            'description' => $request->get('description', $product->description),
            'body' => $request->get('body', $product->body),
            'inventory' => $request->get('inventory', $product->inventory),
        ]);

        return redirect(route('products.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Product $product
     * @return \Illuminate\Http\Response
     */
    public function destroy(Product $product)
    {
        $product->delete();

        return redirect(route('products.index'));
    }
}

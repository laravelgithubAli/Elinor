<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostRequest;
use App\Models\Post;
use App\Models\Postcategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin.posts.index',[
            'posts' => Post::all(),
            'postcategories' => Postcategory::all()
        ])->with(['activity3' => 'side-menu--active','submenu3' => 'side-menu__sub-open']);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.posts.create',[
            'postcategories' => Postcategory::all()
        ])->with(['activity3' => 'side-menu--active','submenu3' => 'side-menu__sub-open']);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(PostRequest $request)
    {
        $path = "public/posts/placeholder.jpg";

        if ($request->hasFile('image')){
            $path = $request->file('image')->storeAs(
                'public/posts', $request->file('image')->getClientOriginalName());
        }

        Post::query()->create([
           'postcategory_id' => $request->get('postcategory_id'),
            'image' => $path,
            'title' => $request->get('title'),
            'body' => $request->get('body'),
            'studytime' => $request->get('studytime'),
            'creator' => $request->get('creator'),
        ]);

        return redirect(route('posts.index'));
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show(Post $post)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit(Post $post)
    {
        return view('admin.posts.edit',[
            'post' => $post,
            'postcategories' => Postcategory::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(PostRequest $request, Post $post)
    {
        $path = $post->image;

        if ($request->hasFile('image')){
            Storage::delete($post->image);
            $path = $request->file('image')->storeAs(
                'public/posts', $request->file('image')->getClientOriginalName()
            );
        }

        $post->update([
            'postcategory_id' => $request->get('postcategory_id',$post->postcategory_id),
            'image' => $path,
            'title' => $request->get('title',$post->title),
            'body' => $request->get('body',$post->body),
            'studytime' => $request->get('studytime',$post->studytime),
            'creator' => $request->get('creator',$post->creator),
        ]);

        return redirect(route('posts.index'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        Storage::delete($post->image);

        $post->delete();

        return back();
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Post;
use App\Http\Resources\ResourcePost as _ResourcePost;

class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    

    public function crud()
    {
        // $posts = Post::all()->toArray();
        return view('blog.blog_crud');
        // return ResourcePost::collection(Post::orderBy('updated_at')->paginate(5));
    }


    public function index(Request $request)
    {
        // $posts = Post::all()->toArray();
        // return _ResourcePost::collection(Post::orderBy('updated_at')->paginate(5));
        return view('blog.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        return view('blog.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'title'=>'required|max:255',
            'content' => 'required',
            'author' => 'required'
        ]);

        Post::create($request->only(
            'title',
            'content',
            'author'
        ));

        return response()->json(['message'=>'success']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return new _ResourcePost(Post::findOrFail($id));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request)
    {
        $this->validate($request, [
            'id' => 'required|integer|exists:posts,id',
            'title' => 'required|max:255',
            'content' => 'required',
            'author' => 'required'
        ]);

        $post = Post::findOrFail($request->id);

        return response()->json(['message'=>'update success']);
        // return response()->json([$response, status: 200]);

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        // Post::destroy($id);
        $post = Post::findOrFail($id);
        $users = $post->users;
        $post->users()->detach();

        // if(!meeting->delete)
    }
}

<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function crud()
    {
        $posts = Post::all()->toArray();
        return view('blog.blog_crud', compact('posts'));
        // return 'HEllo';
        // return view('blog.blog_crud');
    }

    public function index()
    {
         $posts = Post::all()->toArray();
         // $posts = Post::orderBy('title','desc')->get();
         // $posts = Post::orderByDesc('title','asc')->paginate(1);
        $posts = Post::orderByDesc('created_at','asc')->get();
        return view('blog.index')->with('posts', $posts);
        // return view('blog.index', compact('posts'));
        // return view('/blog/index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        // return view('/blog/create');
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
        $messages = [
            'required' => 'Trường :attribute bắt buộc nhập.'
            // ,'email'    => 'Trường :attribute phải có định dạng email'
        ];

        $this->validate($request, [
            'post_title' => 'required',
            'post_content' => 'required'
        ], $messages);
        $post = new Post([
            'title' => $request->get('post_title'),
            'content' => $request->get('post_content'),
            'user_id' => auth()->user()->id
        ]);
        $post->save();
        return redirect('/blog/create')->with('success','Post Added');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('blog.show')->with('post', $post);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);

        return view('/blog/edit', compact('post','id'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Post $post)
    {
        $this->validate($request, [
            'title' => 'required', //'title' will be show in error box
            'content' => 'required'
        ]);
        $post = Student::find($id);
        $post->title = $request->get('post_title');
        $post->content = $request->get('post_content');
        
        $post->save();
        return redirect('/blog')->with('success','Post Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Post  $post
     * @return \Illuminate\Http\Response
     */
    public function destroy(Post $post)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect('/blog')->with('success', 'Post "'.$post->title.' Disappeared !');
    }
}

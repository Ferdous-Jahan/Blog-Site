<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use App\Comment;

class PostsController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $posts = Post::orderBy('created_at', 'desc')->paginate(10);
        return view('posts.index')->with('posts', $posts);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('posts.create');
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
            'title' => 'required',
            'body' => 'required'
        ]);

        $post = new Post();
        $post->title = $request->title;
        $post->body = $request->body;
        $post->user_id = auth()->user()->id;
        
        if ($post->save()) {
            return redirect('/home')->with('success', 'Post Created');
        }
        else {
            return redirect('/createpost')->with('error', 'Something went wrong');
        }        
    }
    
    public function storeComment(Request $request,$id)
    {
        $this->validate($request, [
            'body' => 'required'
        ]);

        $comment = new Comment();
        $comment->body = $request->body;
        $comment->user_id = auth()->user()->id;
        $comment->post_id = $id;

        if ($comment->save()) {
            return redirect()->route('show', [$id])->with('success', 'Comment posted');
        }
        else {
            return redirect('/home')->with('error', 'Something went wrong');
        } 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $post = Post::find($id);
        return view('posts.show')->with('post', $post)->with('comments', $post->comments);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized User');
        }
        return view('posts.edit')->with('post', $post);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $post = Post::find($id);
        $post->title = $request->title;
        $post->body = $request->body;
        
        if ($post->save()) {
            return redirect('/home')->with('success', 'Post Updated');
        }
        else {
            return redirect('/edit/{$post->id}')->with('error', 'Something went wrong');
        }  

    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $post = Post::find($id);
        if (auth()->user()->id !== $post->user_id) {
            return redirect('/posts')->with('error', 'Unauthorized User');
        }
        $post->delete();
        return redirect('/home')->with('success', 'Post Deleted');
    }
}

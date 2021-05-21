<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostsController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('posts.index', ['posts' => $posts]);
    }

    public function new()
    {
        return view('posts.new');
    }

    public function create(Request $request)
    {
        $request->validate([
            'name' => 'required|max:50|',
            'content' => 'required|max:100|',
        ]);

        $post = new Post;
        $post->fill($request->all())->save();

        return redirect('/posts')->with('flash_message', __('Resistered'));
    }

    public function show($id)
    {
        if(!ctype_digit($id)){
            return redirect('/posts/new')->with('flash_message', __('Invalid operation was perfomed.'));
        }

        $post = Post::find($id);

        // 後で消す
        $posts = Post::all();

        return view('posts.show', ['post' => $post, 'posts' => $posts]);
    }

    public function edit($id)
    {
       if(!ctype_digit($id)){
           return redirect('/posts/new')->with('flash_message', __('Invalid operation was perfomed.'));
       }

       $post = Post::find($id);
       return view('posts.edit', ['post' => $post]);
    }

    public function update(Request $request, $id)
    {
        if(!ctype_digit($id)){
            return redirect('/posts/new')->with('flash_message', __('Invalid operation was perfomed.'));
        }

        $post = Post::find($id);
        $post->fill($request->all())->save;

        return redirect('/posts')->with('flash_message', __('Resistered'));
    }

    public function destroy($id)
    {
        if(!ctype_digit($id)){
            return redirect('/posts/new')->with('flash_message', __('Invalid operation was perfomed.'));
        }

        Post::find($id)->delete();

        return redirect('/posts')->with('flash_message', __('Deleted'));
    }
}
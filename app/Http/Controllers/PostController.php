<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        $posts = Post::all();
        return view('welcome', [
            'posts' => $posts
        ]);
    }

    public function create()
    {
        return view('postform');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'content' => 'required'
        ]);

        Post::create($request->all());

        return redirect('/');
    }

    public function edit($id)
    {
        $posts = Post::find($id);
        return view('postupdate', [
            'posts' => $posts
        ]);
    }

    public function update(Request $request, $id)
    {
        $posts = Post::find($id);
        $posts->update($request->all());
        return redirect('/');
    }

    public function delete($id)
    {
        $posts = Post::find($id);
        $posts->delete();
        return redirect('/');
    }
}

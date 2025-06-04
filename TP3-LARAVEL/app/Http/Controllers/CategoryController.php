<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function getIndex() {
        $posts= Post::orderBy('id', 'desc')->get(); 
        return view('category.index', compact('posts'));
    }

    public function getShow($id)
    {
    $post = Post::findOrFail($id);
    return view('category.show', compact('post'));
    }

    public function getCreate() 
    {
        return view('category.create');
    }

    public function store(Request $request)
    {
        $post = new Post();

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->poster = $request->poster;

        $post->save();

        return redirect('/category');
    }

    public function getEdit($id)
        {
    $post = Post::findOrFail($id);
    return view('category.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $post->title = $request->title;
        $post->category = $request->category;
        $post->content = $request->content;
        $post->poster = $request->poster;

        $post->save();

        return redirect('/category/show/'.$post->id);
    }

    public function destroy($id)
    {
        $post = Post::findOrFail($id);
        $post->delete();

        return redirect('/category');
    }
}
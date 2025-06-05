<?php

namespace App\Http\Controllers;
use App\Models\Post;


use Illuminate\Http\Request;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Support\Facades\Auth;


class CategoryController extends Controller
{
    use AuthorizesRequests;

public function getIndex(Request $request)
{
    $category = $request->query('category');

    $normalizedCategory = $category ? ucfirst(strtolower($category)) : null;
    $query = $normalizedCategory
        ? Post::where('category', $normalizedCategory)->orderBy('id', 'desc')
        : Post::orderBy('id', 'desc');
    $posts = $query->paginate(6);
    if ($category) {
        $posts->appends(['category' => $category]);
    }
    return view('category.index', [
        'posts' => $posts,
        'category' => $category
    ]);
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
        $post->user_id = auth()->id(); 
        
        $post->save();

        return redirect('/category');
    }

    public function getEdit($id)
        {
    $post = Post::findOrFail($id);
    $this->authorize('update', $post);
    return view('category.edit', compact('post'));
    }

    public function update(Request $request, $id)
    {
        $post = Post::findOrFail($id);

        $this->authorize('update', $post);
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
        $this->authorize('delete', $post);
        $post->delete();

        return redirect('/category');
    }

    public function getDashboard() 
    {
        $posts = Post::where('user_id', Auth::id())
                    ->orderBy('id', 'desc')
                    ->paginate(6);
        return view('dashboard', compact('posts'));
    }
}
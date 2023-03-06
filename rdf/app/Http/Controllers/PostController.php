<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\View\View;


class PostController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): Response
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        $categories = Category::all();

        return view('admins.post', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'category' => 'required',
        ]);

        $post = new Post();
        $post->title = $validatedData['title'];
        $post->slug = Str::slug($validatedData['title']);
        $post->body = $validatedData['body'];
        $post->save();

        $categories = explode(',', $validatedData['category']);
        foreach ($categories as $categoryName) {
            $category = Category::firstOrCreate(['name' => trim($categoryName)], ['slug' => Str::slug($categoryName)]);
            $post->categories()->attach($category->id);
        }

        return redirect()->route('posts.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): Response
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post): Response
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post): RedirectResponse
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        //
    }
}

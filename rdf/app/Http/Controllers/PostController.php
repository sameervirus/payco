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
    public function index(): View
    {
        $posts = Post::with('categories')->orderBy('created_at', 'desc')->get();
        return view('admins.posts', compact('posts'));
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
            'photo' => 'nullable|image|max:2048',
        ]);

        $post = new Post();

        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];

        // Generate a slug for the post title
        $post->slug = Str::slug($validatedData['title']);

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public');
            $post->photo = str_replace('public/', '', $path);
        }

        // Save the post to the database
        $post->save();

        // Sync the selected categories with the post
        $post->categories()->sync($request->input('categories', []));

        return redirect()->route('admin.posts.index')->with('success', 'Post saved successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Post $post): Response
    {

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Post $post)
    {
        $post_categories = $post->categories->pluck('id')->toArray();
        $categories = Category::all();

        return view('admins.post', compact('categories', 'post', 'post_categories'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Post $post)
    {
        $validatedData = $request->validate([
            'title' => 'required|max:255',
            'body' => 'required',
            'photo' => 'nullable|image|max:2048',
        ]);

        $post->title = $validatedData['title'];
        $post->body = $validatedData['body'];

        // Generate a slug for the post title
        $post->slug = Str::slug($validatedData['title']);

        // Handle the photo upload
        if ($request->hasFile('photo')) {
            $path = $request->file('photo')->store('public');
            $post->photo = str_replace('public/', '', $path);
        }

        // Save the post to the database
        $post->save();

        // Sync the selected categories with the post
        $post->categories()->sync($request->input('categories', []));

        return redirect()->route('admin.posts.index')->with('success', 'Post saved successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Post $post): RedirectResponse
    {
        $post->delete();
        return redirect()->route('admin.posts.index');
    }
}

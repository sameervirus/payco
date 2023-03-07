<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\Post;

class WebsiteController extends Controller
{
    public function home() {
        return view('pages.home');
    }

    public function about() {
        return view('pages.about');
    }

    public function products() {
        return view('pages.products');
    }

    public function invset() {
        return view('pages.invset');
    }

    public function contacts() {
        return view('pages.contacts');
    }

    public function blog() {
        $posts = Post::with('categories')->orderBy('created_at', 'DESC')->get();
        return view('pages.blog', compact('posts'));
    }

    public function feedback(Request $request) {
        $request->validate([
            'business' => 'required',
            'industry' => 'required',
            'country_id' => 'required',
            'person' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'subject' => 'required',
            'inquiry' => 'required',
        ]);

        $feed = Feed::create($request->except(['_token']));

        if($feed) return view('pages.contacts')->with(["message" => "success"]);
        else return redirect()->back()->withInput()->with(['message' => 'fail']);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

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
}

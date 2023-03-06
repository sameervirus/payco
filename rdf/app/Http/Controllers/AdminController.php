<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;

class AdminController extends Controller
{
    public function feeds() {
        $feeds = Feed::all();
        return view('admins.feedback', ['feeds' => $feeds]);
    }
}

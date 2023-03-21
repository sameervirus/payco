<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feed;
use App\Models\User;

class AdminController extends Controller
{
    public function feeds() {
        $feeds = Feed::all();
        return view('admins.feedback', ['feeds' => $feeds]);
    }

    public function users() {
        $users = User::where('id', '<>', 1)->get();
        return view('admins.users', ['users' => $users]);
    }
}

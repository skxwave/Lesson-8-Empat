<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Role;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function home() {
        return view("home");
    }

    public function users() {
        $users = User::all();
        return view("users", ["users"=> $users]);
    }

    public function user_show($id) {
        $user = User::findOrFail($id);
        $posts = $user->posts;
        return view("user_show", ['posts' => $posts, "user"=> $user]);
    }
}

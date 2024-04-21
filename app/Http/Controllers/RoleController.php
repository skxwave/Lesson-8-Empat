<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    public function roles() {
        $roles = Role::all();
        return view("roles", ["roles"=> $roles]);
    }
    
    public function role_show($id) {
        $role = Role::findOrFail($id);
        return view("role_show", ["role"=> $role]);
    }
}

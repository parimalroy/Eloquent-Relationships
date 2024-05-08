<?php

namespace App\Http\Controllers;

use App\Models\Role;
use Illuminate\Http\Request;

class RoleController extends Controller
{
    // find role with user

    public function index(){
        // $roles = Role::with('User')->get();
        $roles = Role::with('User')->find(1);

        return $roles;
    }

}

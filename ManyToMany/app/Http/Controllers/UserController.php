<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    // create user with role
    public function create(){
        $users=User::create([
            'Name'=>'Litu'
        ]);

        $users->Role()->create([
            'Role'=>'user'
        ]);
    }

    //update user role

    public function update(){
        $users=User::find(1);
        $users->Role()->attach([2,3]);
    }


    //delete user role

    public function delete(){
        $users=User::find(1);
        $users->Role()->detach(3);
    }

    //get data with role

    public function index(){
        $users=User::with('Role')->find(1);
        return $users;
    }
}

<?php

namespace App\Http\Controllers\Adm;

use App\Http\Controllers\Controller;
use App\Models\Role;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return view('adm.users.index', ['users' => User::all()]);
    }

    public function roles(){
        return view('adm.users.roles', ['roles' => Role::all()]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    public function getUsers() {
        $users = User::all();
        return view('users', ['users' => $users]);
    }

    public function create() {
        return view('adduser');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
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

    public function createUser(Request $request) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $user = new User;
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->save();

        return redirect('/');
    }

    public function edit(User $user) {
        return view('edituser', ['user' => $user]);
    }

    public function editUser(User $user) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'phone' => 'required'
        ]);

        $user->update([
            'name' => request('name'),
            'email' => request('email'),
            'phone' => request('phone'),
        ]);

        return redirect('/');
    }

    public function deleteUser($userID) {
        DB::table('users')->where('id', '=', $userID)->delete();
        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
class UserController extends Controller
{
    function tampil() {
        $user = User::get();
        return view('user.tampil', compact('user'));
    }

    function tambah() {
        return view('user.tambah');
    }

    function submit(Request $request) {
        $users = new user();
        $users->name = $request->name;
        $users->email = $request->email;
        $users->password = bcrypt($request->password);
        $users->save();

        return redirect()->route('user.tampil');

    }
}

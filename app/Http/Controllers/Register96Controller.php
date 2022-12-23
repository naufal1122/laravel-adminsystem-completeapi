<?php

namespace App\Http\Controllers;

use App\Models\Data96;
use App\Models\User;
use Illuminate\Http\Request;

class Register96Controller extends Controller
{
    public function register96(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users96',
            'password' => 'required|min:8',
            'repassword' => 'required|same:password',
            'role' => 'required|in:user,admin',
        ]);

        $userData = $request->all();
        $userData["password"] = bcrypt($request->password);
        $userData["is_active"] = $request["role"] == "user" ? 0 : 1;

        $user = new User();
        $user->fill($userData);
        $save = $user->save();

        $detailUser = new Data96();
        $detailUser->id_user = $user->id;
        $detailUser->save();

        if ($save && $detailUser) {
            return redirect('/login96')->with('success', 'Register Success');
        } else {
            return back()->with('error', 'Register failed!');
        }
    }

}

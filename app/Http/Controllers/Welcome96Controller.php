<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Models\Agama96;


class Welcome96Controller extends Controller
{
    public function welcomePage96()
    {
        $user = User::where('role', 'user')->get();
        $agama = Agama96::all();

        return view('welcome', ['data' => $user, 'agama' => $agama]);
    }

    
}

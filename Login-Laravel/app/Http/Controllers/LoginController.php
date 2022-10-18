<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function dashboard(UserRequest $request)
    {
        return redirect('user.dashboard');
    }

    function store(UserRequest $request)
    {

        $user = new User();

        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();

        return redirect()->route('index');
    }
}

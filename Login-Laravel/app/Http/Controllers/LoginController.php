<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Http\Request;
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

    function login(Request $request)
    {
        $login = User::where('email', $request->email)->first();
        $password_validated = Hash::check($request->password, $login->password);

        if ($password_validated && $login) {
            session()->put('admin', $login);

            return redirect()->route('dashboard');
        } else {
            return redirect()->route('user.login');
        }
    }

    function logout()
    {
        session()->forget('admin');
        return redirect()->route('index');
    }
}

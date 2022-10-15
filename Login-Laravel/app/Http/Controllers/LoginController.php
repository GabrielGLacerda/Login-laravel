<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('user.create');
    }

    function login()
    {
        return view('user.login');
    }

    function auth(UserRequest $request)
    {

        return redirect('user.dashboard');
    }

    function store(UserRequest $request)
    {

        $user = new User;

        $user->name = $request->user;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);

        $user->save();

        return redirect('/');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    function index()
    {
        return view('index');
    }

    function create()
    {
        return view('create');
    }

    function store()
    {
        return view('create');
    }
}

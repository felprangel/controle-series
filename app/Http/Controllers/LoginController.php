<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Request;

class LoginController extends Controller
{
    public function login()
    {
        return view('login.index');
    }

    public function store()
    {
        dd(Auth::attempt(Request::only(['email', 'password'])));
    }
}

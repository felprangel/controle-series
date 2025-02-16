<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Request;

class UsersController extends Controller
{
    public function create()
    {
        return view('users.create');
    }

    public function store()
    {
        $data = Request::except(['_token']);
        $data['password'] = Hash::make($data['password']);
        $user = User::create($data);
        Auth::login($user);

        return redirect()->route('series.index');
    }
}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Auth\RegisterController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Auth\Notifications\ResetPassword;

class UsersController extends Controller
{
    public function myProfile(Request $request)
    {
        $age = Auth::user()->age;
        return view("users.myProfile", compact('age'));
    }

    public function deactive()
    {
        Auth::user()->active = 0;
        Auth::user()->save();

        return redirect()->route('index');
    }

    public function update()
    {
        return view('auth.editUser');
    }

    public function edit(Request $request)
    {
        Auth::user()->name = $request->name;
        Auth::user()->email = $request->email;
        Auth::user()->phone = $request->phone;
        Auth::user()->cpf = $request->cpf;
        Auth::user()->birth = $request->birth;
        Auth::user()->username = $request->username;

        Auth::user()->save();
        return redirect()->route('my.profile');
    }

}


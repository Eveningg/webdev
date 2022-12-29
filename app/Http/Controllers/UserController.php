<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {

        $data['title'] = 'Register';
        return view('user/register', $data);
    }    

    public function register_action(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'username' => 'required|unique:tb_user',
            'password' => 'required',
            'password_confirm' => 'required|same:password',
        ]);
        $user = new User([
            'name' => $reguest ->name,
            'username' => $request -> username,
            'password' => Hash::make($request->username),
        ]);
        $user->save();
        return redirect()->route('login')->with('success', 'Registration Success. Login!');
    }    
}

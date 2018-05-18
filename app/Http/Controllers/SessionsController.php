<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Auth;

class SessionsController extends Controller
{
    public function create()
    {
        return view('sessions.create');
    }

    public function store(Request $request)
    {
        $credential =  $this->validate($request,[
            'email' => 'required|email|max:255',
            'password' => 'required'
        ]);

        if (Auth::attempt($credential,$request->has('remember'))) {
            session()->flash('success','Welcome back');
            return redirect()->route('users.show',[Auth::user()]);
        } else {
            session()->flash('danger','Sorry, email and password mismatch');
            return redirect()->back();
        }
    }

    public function destroy()
    {
        Auth::logout();
        session()->flash('success','退出成功');
        return redirect()->route('login');
    }
}

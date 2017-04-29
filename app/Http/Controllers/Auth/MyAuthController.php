<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class MyAuthController extends Controller
{
    public function showLogin()
    {
        return view('auth.login');
    }

    public function authenticate(Request $request)
    {
        $data = $request->all();

        $remember = $request->has('remember');

        $isAuthenticateUser = Auth::attempt([
            'login'    => $data['login'],
            'password' => $data['password'],
        ], $remember);

        if ($isAuthenticateUser) {
            return redirect()->intended('admin');
        }

        return redirect()->back()->withInput($request->except('password'))
            ->withErrors([
                'login' => 'Данные аутентификации не верны',
            ]);
    }
}

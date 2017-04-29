<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    public function __construct()
    {

    }

    public function show()
    {
        /*$user = Auth::user();

        if (!Auth::check()) {

        $user = User::find(9);

        Auth::login($user);

        // return redirect('/login');
        }

        if (Auth::viaRemember()) {
        echo "Authenticate with remember";
        }

        dump($user);*/

        return view('home');
    }

}

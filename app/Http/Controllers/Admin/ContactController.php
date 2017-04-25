<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ContactController extends Controller
{

//    protected $request;
    //
    //    public function __construct(Request $request, $id) {
    //        $this->request = $request;
    //    }

    public function show(Request $request, $id = false)
    {

        // print_r($request->all());

        if ($request->isMethod('post')) {
            $rules = [
                'name' => 'after:tomorrow',
                // 'email' => 'required|email',
            ];

            $this->validate($request, $rules);

            dump($request->all());
        }

        // echo '<h2>' . $id . '</h2>';

        return view('contact')->withTitle('Contact');
    }
}

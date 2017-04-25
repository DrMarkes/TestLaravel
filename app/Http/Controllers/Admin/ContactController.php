<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ContactRequest;

class ContactController extends Controller
{

//    protected $request;
    //
    //    public function __construct(Request $request, $id) {
    //        $this->request = $request;
    //    }

    public function store(ContactRequest $request)
    {
        return view('contact')->withTitle('Contacts');
    }

    public function show()
    {

        // print_r($request->all());

        // if ($request->isMethod('post')) {
        /*$rules = [
        'name' => 'after:tomorrow',
        // 'email' => 'required|email',
        ];

        $this->validate($request, $rules);

        dump($request->all());*/

        /*$messages = [];

        $validator = Validator::make($request->all(), ['name' => 'required'], $messages);

        if ($validator->fails()) {
        return redirect()->route('contact')->withErrors($validator)->withInput();
        }*/

        // }

        // echo '<h2>' . $id . '</h2>';

        return view('contact')->withTitle('Contact');
    }
}

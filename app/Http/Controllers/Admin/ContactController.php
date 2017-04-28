<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Validator;

class ContactController extends Controller
{

//    protected $request;
    //
    //    public function __construct(Request $request, $id) {
    //        $this->request = $request;
    //    }

    public function store(Request $request)
    {
        $messages = [
            'name.required' => 'ПОЛЕ :attribute обязательно к заполнению',
            'email.max'     => 'максимально количество символов - :max',
        ];

        $rules = [
            'name' => 'required',
            // 'email' => 'sometimes | required | max: 10',
        ];

        $validator = Validator::make($request->all(), $rules, $messages);

        /*$validator->after(function ($validator) {

        $validator->errors()->add('name', 'дополнительное сообщение');

        });*/

        $validator->sometimes('email', 'required', function ($input) {
            // dump($input);
            return strlen($input->name) >= 10;
        });

        if ($validator->fails()) {
            $messages = $validator->errors();
            // dump($messages->all("<p> :message </p>"));
            // return redirect()->route('contact')->withErrors($validator)->withInput();

            dump($validator->failed());
        }

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

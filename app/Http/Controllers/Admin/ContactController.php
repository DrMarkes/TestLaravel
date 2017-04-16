<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ContactController extends Controller {
    
//    protected $request;
//
//    public function __construct(Request $request, $id) {
//        $this->request = $request;
//    }

        public function show(Request $request, $id = FALSE) {
        
        print_r($request->all());
        
        echo '<h2>'.$id.'</h2>';
         
        return view('contact')->withTitle('Contact');
    }
}

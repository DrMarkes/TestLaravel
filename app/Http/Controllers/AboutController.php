<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Page;

class AboutController extends Controller
{
    public function show() {
        
        $page = Page::first();
        
        return view('about')->withPage($page);
    }
}

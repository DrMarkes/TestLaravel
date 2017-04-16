<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use DB;

class AboutController extends Controller {

    //
    public function show() {

        // $articles = DB::select("SELECT * FROM `articles` WHERE id = ? ", [2]);

        DB::insert("INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)", [
            'Second post',
            'DSFfvsdlkbfv;aARv FDVADDFGRAE fjvdsnfa;vad  ARarg',
            'test1.jpg'
        ]);
        
     //   $result = DB::connection()->getPdo()->lastInsertId();
        
     //   $result = DB::update('UPDATE `articles` SET `name` = ? WHERE `id` = ?', ["TEST 3", "6"]);
        
     //   $result = DB::delete('DELETE FROM `articles` WHERE `id` = ?', ["6"]);
        
        $articles = DB::select("SELECT * FROM `articles` ");

        dump($articles);
     //   dump($result);

        return view('layouts.app');
    }

}

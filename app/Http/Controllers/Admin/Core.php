<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Article;
use App\User;
use App\Country;
use DB;

class Core extends Controller {

    protected static $articles;

    protected function addArticles($array) {

        return self::$articles[] = $array;
    }

    public function getArticles() {

    //    $country = Country::find(1);

    //    $user = User::find(1);

        $user = Article::find(3)->user;

        dump($user);

        return view('articles');
    }

    public function getArticle($id = false) {
        echo $id;
    }

}

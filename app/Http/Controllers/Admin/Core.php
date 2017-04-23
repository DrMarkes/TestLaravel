<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;

class Core extends Controller
{

    protected static $articles;

    protected function addArticles($array)
    {

        return self::$articles[] = $array;
    }

    public function getArticles()
    {

        /*$country = Country::find(1);
        $user    = User::find(2);

        $country->user()->associate($user);
        $country->save();*/

        /*$articles = Article::all();
        $user     = User::find(2);

        foreach ($articles as $article) {
        $article->user()->associate($user)->save();
        }*/

        /*  $user    = User::find(2);
        $role_id = Role::find(2)->id;*/

        // $user->roles()->attach($role_id);
        // $user->roles()->detach($role_id);

        /*$article = Article::find(9);

        $article->name = 'Some Text';
        dump($article->name);*/

        $array = [
            'one'   => 'Example One',
            'two'   => 'Example Two',
            'three' => 'Example Three',
            'four'  => 'Example Four',

        ];

        $article = Article::create([
            'name' => 'Example Array',
            'text' => $array,
        ]);

        dump($article->text);

        return;
    }

    public function getArticle($id = false)
    {
        echo $id;
    }

}

<?php

use Illuminate\Database\Seeder;
use App\Article;

class ArticlesSeeder extends Seeder {

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run() {
        DB::insert('INSERT INTO `articles` (`name`, `text`, `img`) VALUES (?, ?, ?)', [
            'blog post',
            '<p>sfjsdfddddd vndfjsgpwqt bnjdslbndskj[q[rg nbvfd;sgfdjsgn ;dfgdsg</p>',
            'pic1.jpg'
        ]);

        DB::table('articles')->insert(
                [
                    [
                        'name' => "Sample blog post",
                        'text' => "fjsdfddddd vndfjsgpwqt bnjdslbndskj[q[rg nbv",
                        'img' => "pic2.jpg"
                    ],
                    [
                        'name' => "Sample blog post 2",
                        'text' => "fjsdfddddd vndfjsgpwqt bnjdslbndskj[q[rg nbv",
                        'img' => "pic3.jpg"
                    ]
                ]
        );

        Article::create(
                [
                    'name' => "Sample blog post 3",
                    'text' => "fjsdfddddd vndfjsgpwqt bnjdslbndskj[q[rg nbv",
                    'img' => "pic4.jpg"
                ]
        );
    }

}

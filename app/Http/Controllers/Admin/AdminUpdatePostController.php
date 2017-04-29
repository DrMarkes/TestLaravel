<?php

namespace App\Http\Controllers\Admin;

use App\Article;
use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;
use User;

class AdminUpdatePostController extends Controller
{
    public function show(Article $article)
    {
        return view('admin.update_post')->withArticle($article)
            ->withTitle('Редактирование материала');
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'header' => 'required',
        ]);

        $article = Article::find($request->id);

        if (Gate::denies('update-article', $article)) {
            return redirect()->back()->withMessage('У Вас нет прав');
        }

        $article->update([
            'name' => $request->header,
            'img'  => $request->image,
            'text' => $request->text,
        ]);

        $request->user()->articles()->save($article);

        return redirect()->back()->withMessage('Материал успешно отредактирован');
    }
}

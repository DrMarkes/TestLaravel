<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Gate;
use Illuminate\Http\Request;

class AdminPostController extends Controller
{

    public function show()
    {
        return view('admin.add_post')->withTitle('Новый материал');
    }

    public function create(Request $request)
    {
        if (Gate::denies('add-article')) {
            return redirect()->back()->withMessage('У Вас нет прав');
        }

        $this->validate($request, [
            'header' => 'required',
        ]);

        $request->user()->articles()->create([
            'name' => $request->header,
            'img'  => $request->image,
            'text' => $request->text,
        ]);

        return redirect()->back()->withMessage('Материал добавлен');
    }
}

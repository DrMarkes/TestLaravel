@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>
                Редактирование материала
            </h2>
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                    @foreach($errors->all() as $error)
                    <li>
                        {{ $error }}
                    </li>
                    @endforeach
                </ul>
            </div>
            @endif

            @if(session('message'))
            <div class="alert alert-success">
                {{ session('message') }}
            </div>
            @endif
            <form action="{{ route('admin_update_post_p', $article->id) }}" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="id" value="{{ $article->id }}" />
                <div class="form-group">
                    <label for="header">
                        Заголовок
                    </label>
                    <input class="form-control" id="header" name="header" placeholder="Заголовок" type="text" value="{{ $article->name }}">
                    </input>
                </div>
                <div class="form-group">
                    <label for="image">
                        Изображение
                    </label>
                    <input class="form-control" id="image" name="image" placeholder="Изображение" type="text" value="{{ $article->img }}">
                    </input>
                </div>
                <div class="form-group">
                    <label for="text">
                        Text
                    </label>
                    <textarea class="form-control" id="text" name="text" rows="3" placeholder="Текст статьи">{{ $article->text }}
                    </textarea>
                </div>
                <button class="btn btn-primary" type="submit">
                    Редактировать
                </button>
            </form>
        </div>
    </div>
</div>
@endsection

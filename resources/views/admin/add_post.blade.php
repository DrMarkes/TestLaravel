@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <h2>
                Добавление нового материала
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
            <form action="{{ route('admin_add_post_p') }}" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="header">
                        Заголовок
                    </label>
                    <input class="form-control" id="header" name="header" placeholder="Заголовок" type="text" value="{{ old('header') }}">
                    </input>
                </div>
                <div class="form-group">
                    <label for="image">
                        Изображение
                    </label>
                    <input class="form-control" id="image" name="image" placeholder="Изображение" type="text" value="{{ old('image') }}">
                    </input>
                </div>
                <div class="form-group">
                    <label for="text">
                        Text
                    </label>
                    <textarea class="form-control" id="text" name="text" rows="3"
                     	placeholder="Текст статьи">{{ old('text') }}
                    </textarea>
                </div>
                <button class="btn btn-primary" type="submit">
                    Добавить
                </button>
            </form>
        </div>
    </div>
</div>
@endsection
